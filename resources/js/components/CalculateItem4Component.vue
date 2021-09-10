<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 4 из 7
        </div>
        <h2 class="choose-crane-type__header">4. Исполнение крана</h2>
        <div class="choose-crane-type__grid three">
            <PriceCard inputName="prod" 
                       value="general" 
                       imgSrc="assets/img/price-card-image-5.svg"
                       title="Общепромышленное"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="prod" 
                       value="fireproof" 
                       imgSrc="assets/img/price-card-image-6.svg"
                       title="Пожаробезопасное"
                       priceFrom="67 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="prod" 
                       value="expproof" 
                       imgSrc="assets/img/price-card-image-7.svg"
                       title="Взрывобезопасное"
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
    name: "CalculateItem4Component",
    components:{PriceCard, ButtonNext},
    mixins:[stepMixin],
    methods: {
        onInput:function(valueObj){
          this.stepValue = valueObj.value;
          this.$store.dispatch('select_prod', valueObj);
        }
    },
  }
</script>

<style scoped>

</style>
