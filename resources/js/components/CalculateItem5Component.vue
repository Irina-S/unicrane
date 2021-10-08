<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 5 из 7
        </div>
        <h2 class="choose-crane-type__header">5. Размещение</h2>
        <div class="choose-crane-type__grid three">
            <PriceCard inputName="placement" 
                       value="outdoors" 
                       imgSrc="assets/img/price-card-image-8.svg"
                       title="На улице"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="placement" 
                       value="canopy" 
                       imgSrc="assets/img/price-card-image-9.svg"
                       title="Навес"
                       priceFrom="67 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="placement" 
                       value="rooms" 
                       imgSrc="assets/img/price-card-image-10.svg"
                       title="Помещение"
                       priceFrom="67 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
        </div>
    <ButtonNext v-bind:isDisabled="isNextBtnDisabled" ref="buttonNext"></ButtonNext>
    </div>
</template>

<script>
  import {stepMixin} from './mixins.js'
  import ButtonNext from "./ButtonNext"
  import PriceCard from "./PriceCard"

  export default {
    name: "CalculateItem5Component",
    components:{PriceCard, ButtonNext},
    mixins:[stepMixin],
    methods: {
        onInput:function(valueObj){
          this.stepValue = valueObj.value;
          this.$store.dispatch('select_placement', valueObj);

          this.$refs.buttonNext.onClick(); 
        }
    },
  }
</script>

<style scoped>

</style>
