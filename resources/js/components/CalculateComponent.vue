<template>
        <VueSlickCarousel v-bind="newProductsSliderSettings" ref="calculate_slider">
            <CalculateItem1Component></CalculateItem1Component>
            <CalculateItem2Component></CalculateItem2Component>
            <CalculateItem3Component></CalculateItem3Component>
            <CalculateItem4Component></CalculateItem4Component>
            <CalculateItem5Component></CalculateItem5Component>
            <CalculateItem52Component></CalculateItem52Component>
            <CalculateItem6bComponent></CalculateItem6bComponent>
            <CalculateItem6b2Component></CalculateItem6b2Component>
        </VueSlickCarousel>
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
  import CalculateItem6bComponent from './CalculateItem6bComponent'
  import CalculateItem6b2Component from './CalculateItem6b2Component'
  import ButtonNext from './ButtonNext'
  export default {
    name: "CalculateComponent",
    components: { VueSlickCarousel, CalculateItem1Component, CalculateItem2Component, CalculateItem3Component,
      CalculateItem4Component, CalculateItem5Component, CalculateItem52Component, CalculateItem6bComponent,
      CalculateItem6b2Component},
    data() {
      return {
        newProductsSliderSettings: {
          arrows: false,
          touchMove: false,
          infinite:false
        },
      }
    },
    methods: {


    }

  }
</script>

<style lang="scss">
    .choose-crane-type__button {
        cursor: pointer;
    }

</style>
