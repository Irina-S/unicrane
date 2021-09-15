<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 5 из 7
        </div>
        <h2 class="choose-crane-type__header">5. Температурный режим</h2>
        <div class="choose-crane-type__grid three">
            <PriceCard inputName="tmode" 
                       value="from20to40" 
                       imgSrc="assets/img/price-card-image-11.svg"
                       title="от -20°C до +40°C"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="tmode" 
                       value="from40to40" 
                       imgSrc="assets/img/price-card-image-12.svg"
                       title="от -40°C до +40°C"
                       priceFrom="67 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="tmode" 
                       value="from50to60" 
                       imgSrc="assets/img/price-card-image-13.svg"
                       title="от -50°C до +60°C"
                       priceFrom="67 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
        </div>
        <ButtonNext v-bind:isDisabled="isNextBtnDisabled"></ButtonNext>
    </div>
</template>

<script>
  import {stepMixin} from './mixins.js'
  import ButtonNext from "./ButtonNext"
  import PriceCard from "./PriceCard"

  export default {
    name: "CalculateItem52Component",
    components:{PriceCard, ButtonNext},
    mixins:[stepMixin],
    methods: {
        onInput:function(valueObj){
          this.stepValue = valueObj.value;
          this.$store.dispatch('select_tmode', valueObj);
        }
    },
  }
</script>

<style scoped>

</style>
