<template>
    <li class="crane-opts__item crane-option">
        <span class="crane-option__title">{{title}} {{value?':':''}} {{value}} {{measure}}</span>
        <span class="crane-option__price">{{formatedPrice}}</span>
        <button class="crane-option__btn">Изменить</button>
    </li>
</template>

<script>
    export default {
        name: "CraneOption",
        props:{
            title:{
                type:String
            },
            value:{
                type:String,
                default:""
            },
            measure:{
                type:String
            },
            price:{
                type:Number,
                default:0
            }
        },
        data:function(){
            return { 
            }
        },
        computed:{
            formatedPrice(){
                return this.price?this.numberFormat(this.price, 0, '', ' ')+' ₽':'Без доплаты';
            }
        },
        methods: {
            numberFormat(number, decimals, dec_point, thousands_sep ) {  // Format a number with grouped thousands
                var i, j, kw, kd, km;

                if( isNaN(decimals = Math.abs(decimals)) ){
                    decimals = 2;
                }
                if( dec_point == undefined ){
                    dec_point = ",";
                }
                if( thousands_sep == undefined ){
                    thousands_sep = ".";
                }

                i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

                if( (j = i.length) > 3 ){
                    j = j % 3;
                } else{
                    j = 0;
                }

                km = (j ? i.substr(0, j) + thousands_sep : "");
                kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
                kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");

                return km + kw + kd;
            }
        },
        mounted:function(){
        }
  }
</script>

<style lang="scss" scoped>

</style>