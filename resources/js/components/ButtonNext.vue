<template>
    <button v-bind:disabled="isDisabled" @click="onClick" v-bind:class="['choose-crane-type__button', 'button', {[visibleClass]:isVisible}]"><span class="button__text">{{title}}</span></button>
</template>

<script>
    export default {
        name: "ButtonNext",
        props:{
            title:{
                type:String,
                default:'Следующий шаг'
            },
            isDisabled:{
                type:Boolean,
            },
            isVisible:{
                type:Boolean,
                default:false
            },
            nextSlide:{
                type:Number
            },
            onClickFunc:{
                default:null
            }
        },
        data:function(){
            return {
                visibleClass:'choose-crane-type__button--visible'
            }
        },
        methods: {
            onClick(){
                if (this.onClickFunc)
                    this.onClickFunc()
                else
                    this.nextStep()
            },

            nextStep() {
                if (this.nextSlide)
                    this.$root.$refs.calculate.$refs.calculate_slider.goTo(this.nextSlide)
                else
                    this.$root.$refs.calculate.$refs.calculate_slider.next();
            }
        },
        mounted:function(){
        }
  }
</script>

<style lang="scss" scoped>


    .choose-crane-type__button{
        display: none;

        &--visible{
            display: inline-flex;
        }

        &[disabled]{
                opacity:0.7;
                cursor:default;

                &:hover{
                    background:#b5212e;
                }
            }

    }
</style>