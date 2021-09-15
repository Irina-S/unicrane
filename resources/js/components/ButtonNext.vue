<template>
    <button v-bind:disabled="isDisabled" @click="onClick" class="choose-crane-type__button button"><span class="button__text">Следующий шаг</span></button>
</template>

<script>
    export default {
        name: "ButtonNext",
        props:{
            isDisabled:{
                type:Boolean,
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
                console.log('c;lick');
                console.log(this.nextSlide);
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
    .choose-crane-type__button[disabled]{
        opacity:0.7;
        cursor:default;

        &:hover{
            background:#b5212e;
        }
    }
</style>