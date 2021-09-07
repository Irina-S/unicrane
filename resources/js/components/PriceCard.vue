<template>
    <label class="choose-crane-type__item price-card" v-bind:class="[isChecked?'choose-crane-type__item-select':'']">
        <input type="radio" v-bind:name="inputName" v-bind:value="value" v-model="inputVal" ref="input" @input="onInput">
        <div class="price-card__text">
            <div class="price-card__title">{{title}}</div>
            <div class="price-card__price">от {{priceFrom}} ₽</div>
        </div>
        <div class="price-card__image-wrap">
            <img v-bind:src="imgSrc" alt="">
        </div>
    </label>
</template>

<script>
    export default {
        name: "PriceCard",
        props:['inputName', 'value', 'imgSrc', 'title', 'priceFrom'],
        data:function(){
            return {
                checkedClass:'choose-crane-type__item-select',
                isChecked:false
            }
        },
        computed:{
            inputVal: {
                get() {
                    return this.value;
                },
                set(val) {
                    this.$emit('input', val);
                }
            }            
        },
        methods: {
            onInput:function(){
                console.log('input');
                this.isChecked = true;
            }
        },
        mounted:function(){
            this.$refs.input.checked = false;
            console.log(this.title);
            console.log(this.$refs.input.checked)
        }
  }
</script>

<style lang="scss" scoped>

</style>