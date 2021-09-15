<template>
  <div class="calculate-container">
        <VueSlickCarousel v-bind:style="calcStyleObj" v-bind="newProductsSliderSettings" ref="calculate_slider">
            <CalculateItem1Component></CalculateItem1Component>
            <CalculateItem2Component></CalculateItem2Component>
            <CalculateItem3Component></CalculateItem3Component>
            <CalculateItem4Component></CalculateItem4Component>
            <CalculateItem5Component></CalculateItem5Component>
            <CalculateItem52Component></CalculateItem52Component>
            <CalculateItem6Component></CalculateItem6Component>
            <CalculateItem7Component></CalculateItem7Component>
        </VueSlickCarousel>
        <CalculateResult v-bind:style="resStyleObj"></CalculateResult>
  </div>
</template>

<script>
  import VueSlickCarousel from 'vue-slick-carousel'
  import 'vue-slick-carousel/dist/vue-slick-carousel.css'
  import CalculateItem1Component from './CalculateItem1Component'
  import CalculateItem2Component from './CalculateItem2Component'
  import CalculateItem3Component from './CalculateItem3Component'
  import CalculateItem4Component from './CalculateItem4Component'
  import CalculateItem5Component from './CalculateItem5Component'
  import CalculateItem52Component from './CalculateItem52Component'
  import CalculateItem6Component from './CalculateItem6Component'
  import CalculateItem7Component from './CalculateItem7Component'
  import ButtonNext from './ButtonNext'
  import CalculateResult from './CalculateResult'

  export default {
    name: "CalculateComponent",
    components: { VueSlickCarousel, CalculateItem1Component, CalculateItem2Component, CalculateItem3Component,
      CalculateItem4Component, CalculateItem5Component, CalculateItem52Component,
      CalculateItem6Component, CalculateItem7Component,
      CalculateResult},
    data() {
      return {
        newProductsSliderSettings: {
          arrows: false,
          touchMove: false,
          infinite:false
        },
      }
    },
    computed:{
      calcStyleObj(){
        return {
          display: this.$store.state.calculate.status=='calc'?'block':'none'
        }
      },
      resStyleObj(){
        return {
          display: this.$store.state.calculate.status=='res'?'block':'none'
        }
      }
    },
    methods: {


    }

  }
</script>

<style lang="scss">
    .calculate-container{
      width:100%;
    }

    .hidden{
      display:none;
    }

    .choose-crane-type__button {
        cursor: pointer;
    }

</style>
