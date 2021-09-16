<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 6 из 7
        </div>
        <h2 class="choose-crane-type__header">6. Крановый рельс</h2>
        <div class="choose-crane-type__grid two">
            <PriceCard inputName="hasrail" 
                       value="hasrail" 
                       imgSrc="assets/img/price-card-image-16.svg"
                       title="У нас уже есть крановый рельс"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="hasrail" 
                       value="norail" 
                       imgSrc="assets/img/price-card-image-17.svg"
                       title="Необходима поставка и монтаж кранового рельса"
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
          this.$store.dispatch('select_hasrail', valueObj);
        }
    },
  }
</script>

<style scoped>

</style>
