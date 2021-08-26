<template>
        <VueSlickCarousel v-bind="newProductsSliderSettings" ref="calculate_slider">
            <CalculateItem1Component class="content-container-vue">
            </CalculateItem1Component>
            <CalculateItem2Component class="content-container-vue"></CalculateItem2Component>
            <CalculateItem3Component class="content-container-vue"></CalculateItem3Component>
            <CalculateItem4Component class="content-container-vue"></CalculateItem4Component>
            <CalculateItem5Component class="content-container-vue"></CalculateItem5Component>
            <CalculateItem6Component class="content-container-vue"></CalculateItem6Component>
            <CalculateItem7Component class="content-container-vue"></CalculateItem7Component>
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
  import CalculateItem6Component from './CalculateItem6Component'
  import CalculateItem7Component from './CalculateItem7Component'
  export default {
    name: "CalculateComponent",
    components: { VueSlickCarousel, CalculateItem1Component, CalculateItem2Component, CalculateItem3Component,
      CalculateItem4Component, CalculateItem5Component, CalculateItem6Component, CalculateItem7Component },
    data() {
      return {
        newProductsSliderSettings: {
          arrows: false,
          touchMove: false,
        },
      }
    },
    methods: {


    }

  }
</script>

<style lang="scss">
    .content-container-vue {
        max-width: none!important;
    }
    .choose-crane-type__button {
        cursor: pointer;
    }

</style>
