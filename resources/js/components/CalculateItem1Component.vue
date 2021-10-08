<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 1 из 7
        </div>
        <h2 class="choose-crane-type__header">1. Тип управления краном</h2>
        <div class="choose-crane-type__grid two">
            <PriceCard inputName="handle" 
                       value="manual" 
                       imgSrc="assets/img/price-card-image-3.svg"
                       title="Ручное"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="handle" 
                       value="electric" 
                       imgSrc="assets/img/price-card-image-4.svg"
                       title="Электрическое"
                       priceFrom="67 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
        </div>
        <ButtonNext v-bind:isDisabled="isNextBtnDisabled" ref="buttonNext"></ButtonNext>
    </div>
</template>

<script>
  import {manual,electric} from './../price.js'
  import {stepMixin} from './mixins.js'
  import ButtonNext from "./ButtonNext"
  import PriceCard from "./PriceCard"

  console.log(manual,electric);

  export default {
    name: "CalculateItem1Component",
    components:{ButtonNext, PriceCard},
    mixins:[stepMixin],
    methods: {
        onInput:function(valueObj){
          console.log(this.$refs.buttonNext);
          this.stepValue = valueObj.value;
          this.$store.dispatch('select_handle', valueObj);
          if (this.stepValue=='manual'){
            this.$store.dispatch('select_pricelist', manual)
          }
          else if (this.stepValue=='electric'){
            this.$store.dispatch('select_pricelist', electric)
          }

          this.$refs.buttonNext.onClick();   
        }
      }
  }
</script>

<style scoped>

</style>
