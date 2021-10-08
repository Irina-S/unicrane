<template>
      <div class="choose-crane-type__wrap">
          <div class="choose-crane-type__step">
              Шаг 2 из 7
          </div>
          <h2 class="choose-crane-type__header">2. Выбор типа крана</h2>

          <div class="choose-crane-type__grid two">
            <PriceCard inputName="handle" 
                       value="supported" 
                       imgSrc="assets/img/price-card-image-1.svg"
                       title="Опорный"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="type" 
                       value="underslung" 
                       imgSrc="assets/img/price-card-image-2.svg"
                       title="Подвесной"
                       priceFrom="67 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>

          </div>   

          <ButtonNext v-bind:isDisabled="isNextBtnDisabled" ref="buttonNext"></ButtonNext>
      </div>
</template>

<script>
  // import {mapActions} from "vuex/dist/vuex.mjs";
  import {stepMixin} from './mixins.js';
  import ButtonNext from "./ButtonNext"
  import PriceCard from "./PriceCard"

  export default {
    name: "CalculateItem2Component",
    components:{ButtonNext, PriceCard},
    mixins:[stepMixin],
    methods: {
        onInput:function(valueObj){
          this.stepValue = valueObj.value;
          this.$store.dispatch('select_type', valueObj);

          this.$refs.buttonNext.onClick(); 
        }
    }
  }
</script>

<style lang="scss" scoped>

</style>
