<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 6 из 7
        </div>
        <h2 class="choose-crane-type__header">6. Крановые пути</h2>
        <div class="choose-crane-type__grid" v-bind:class="{four:isUnderslung, two:isSupported}">
            <PriceCard inputName="haswayorrail" 
                       value="hasway" 
                       imgSrc="assets/img/price-card-image-14.svg"
                       title="У нас уже есть крановый путь"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="haswayorrail" 
                       value="noway" 
                       imgSrc="assets/img/price-card-image-15.svg"
                       title="Необходима поставка и монтаж кранового пути"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="haswayorrail" 
                       value="hasrail" 
                       imgSrc="assets/img/price-card-image-16.svg"
                       title="У нас уже есть крановый рельс"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue"
                       v-bind:isUnderslung="isUnderslung">
            </PriceCard>
            <PriceCard inputName="haswayorrail" 
                       value="norail" 
                       imgSrc="assets/img/price-card-image-17.svg"
                       title="Необходима поставка и монтаж кранового рельса"
                       priceFrom="67 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue"
                       v-bind:isUnderslung="isUnderslung">
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
    name: "CalculateItem6Component",
    components:{PriceCard, ButtonNext},
    mixins:[stepMixin],
    computed:{
      isUnderslung:function(){
        return this.$store.state.calculate.type=='underslung'?true:false;
      },
      isSupported:function(){
        return this.$store.state.calculate.type=='supported'?true:false;
      }
    },
    methods: {
        onInput:function(valueObj){
          this.stepValue = valueObj.value;
          this.$store.dispatch('select_haswayorrail', valueObj);
        }
    },
  }
</script>

<style scoped>

</style>