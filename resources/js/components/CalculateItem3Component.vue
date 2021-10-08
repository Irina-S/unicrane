<template>
      <div class="choose-crane-type__wrap">
          <div class="choose-crane-type__step">
              Шаг 2 из 7
          </div>
          <h2 class="choose-crane-type__header">3. Выбор грузоподъемности</h2>
          <div class="choose-crane-type__weight-grid">
            <WeightCard v-for="(value,key) in cards" 
                       v-bind:key="key"
                       inputName="lcapacity" 
                       v-bind:value="parseFloat(key)" 
                       v-bind:title="parseFloat(key)"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </WeightCard>
          </div>
          <ButtonNext v-bind:isDisabled="isNextBtnDisabled" ref="buttonNext"></ButtonNext>
      </div>
</template>

<script>
  import {stepMixin} from './mixins.js';
  import ButtonNext from "./ButtonNext"
  import WeightCard from "./WeightCard"
  // заментися на запрос к серверу
  import {electric,manual} from './../price.js'

  //console.log(electric)
  
  export default {
    name: "CalculateItem3Component",
    components:{ButtonNext,WeightCard},
    mixins:[stepMixin],
    computed:{
      cards:function(){
        return this.$store.state.calculate.handle=='electric'?electric[this.$store.state.calculate.type]:manual[this.$store.state.calculate.type];
      },
      sortedCards:function(){
        // const cardKeys = Object.keys(this.cards);
        // let sorted = {};
        // cardKeys.sort((a,b)=>parseFloat(a)-parseFloat(b))
        // cardKeys.map((item,index)=>{
        //   sorted[item] = this.cards[item];
        // });
        // return sorted;
        // return new Map(this.cards);
      }
    },
    methods:{
        onInput:function(valueObj){
          this.stepValue = valueObj.value;
          this.$store.dispatch('select_lcapacity', valueObj);
          //this.$store.dispatch('select_consolelength', {value:null,valueName:null});

          this.$refs.buttonNext.onClick(); 
        }
    }
  }
</script>

<style scoped>

</style>
