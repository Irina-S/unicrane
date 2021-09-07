<template>
    <button v-bind:disabled="isDisabled" @click.prevent="nextStep" class="choose-crane-type__button button"><span class="button__text">Следующий шаг</span></button>
</template>

<script>
    export default {
        name: "ButtonNext",
        props:['isDisabled'],
        data:function(){
            return {
                
            }
        },
        methods: {
            nextStep() {
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