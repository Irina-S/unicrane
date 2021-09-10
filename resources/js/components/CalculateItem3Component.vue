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
                       v-bind:value="key" 
                       v-bind:title="key"
                       priceFrom="89 880"
                       @input="onInput($event)"
                       v-bind:curVal="stepValue">
            </WeightCard>
          </div>
          <ButtonNext v-bind:isDisabled="isNextBtnDisabled"></ButtonNext>
      </div>
</template>

<script>
  import {stepMixin} from './mixins.js';
  import ButtonNext from "./ButtonNext"
  import WeightCard from "./WeightCard"
  // заментися на запрос к серверу
  import {electric,manual} from './../price.js'
  
  export default {
    name: "CalculateItem3Component",
    components:{ButtonNext,WeightCard},
    mixins:[stepMixin],
    computed:{
      cards:function(){
        return this.$store.state.calculate.handle=='electric'?electric[this.$store.state.calculate.type]:manual[this.$store.state.calculate.type];
      }
    },
    methods:{
        onInput:function(valueObj){
          this.stepValue = valueObj.value;
          this.$store.dispatch('select_lcapacity', valueObj);
        }
    }
  }
</script>

<style scoped>

</style>
