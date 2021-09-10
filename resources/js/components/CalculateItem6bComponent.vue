<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 7 из 7
        </div>
        <h2 class="choose-crane-type__header">7. Крановые пути</h2>
        <div class="choose-crane-type__grid two">
            <PriceCard inputName="hasway" 
                       value="yes" 
                       imgSrc="assets/img/price-card-image-14.svg"
                       title="У нас уже есть крановый путь"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="hasway" 
                       value="no" 
                       imgSrc="assets/img/price-card-image-15.svg"
                       title="Необходима поставка и монтаж кранового пути"
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
    name: "CalculateItem6bComponent",
    components:{PriceCard, ButtonNext},
    mixins:[stepMixin],
    methods: {
        onInput:function(valueObj){
          this.stepValue = valueObj.value;
          this.$store.dispatch('select_hasway', valueObj);
        }
    },
  }
</script>

<style scoped>

</style>
