<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 6 из 7
        </div>
        <h2 class="choose-crane-type__header">6. Крановые пути</h2>
        <div class="choose-crane-type__grid two">
            <PriceCard inputName="hasway" 
                       value="hasway" 
                       imgSrc="assets/img/price-card-image-14.svg"
                       title="У нас уже есть крановый путь"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
            <PriceCard inputName="hasway" 
                       value="noway" 
                       imgSrc="assets/img/price-card-image-15.svg"
                       title="Необходима поставка и монтаж кранового пути"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </PriceCard>
        </div>
        <ButtonNext v-bind:isDisabled="isNextBtnDisabled" v-bind:nextSlide="nextSlideIndex"></ButtonNext>
    </div>
</template>

<script>
  import {stepMixin, storeMixin} from './mixins.js'
  import ButtonNext from "./ButtonNext"
  import PriceCard from "./PriceCard"

  export default {
    name: "CalculateItem6Component",
    components:{PriceCard, ButtonNext},
    mixins:[stepMixin, storeMixin],
    computed:{
      nextSlideIndex:function(){
        return this.$store.state.calculate.type=='underslung'?8:(this.stepValue=='noway'?8:null);
      }
      // isUnderslung:function(){
      //   return this.$store.state.calculate.type=='underslung'?true:false;
      // },
      // isSupported:function(){
      //   return this.$store.state.calculate.type=='supported'?true:false;
      // }
    },
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