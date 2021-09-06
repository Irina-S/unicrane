<template>
    <button v-bind:disabled="isDisabled" @click.prevent="nextSlide" class="choose-crane-type__button button"><span class="button__text">Следующий шаг</span></button>
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
            nextSlide() {
            console.log('next slide');
            // if (this.selected) {
            this.$root.$refs.calculate.$refs.calculate_slider.next();
            // }
            // },
            // select(id, value) {
            // this.selected = true;
            // this.$store.dispatch('select_page1', this.products[value]);

            // let items = document.querySelectorAll('.choose-crane-type__item');
            // items.forEach((item) => {
            //     item.classList.remove('choose-crane-type__item-select');
            // });
            // document.getElementById(id).classList.add('choose-crane-type__item-select');
            // },
            }
        },
        mounted:function(){
            console.log(disabled);
        }
  }
</script>

<style lang="scss" scoped>

</style>