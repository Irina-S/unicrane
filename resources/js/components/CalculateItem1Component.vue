<template>
      <div class="choose-crane-type__wrap">
          <div class="choose-crane-type__step">
              Шаг 1 из 7
          </div>
          <h2 class="choose-crane-type__header">1. Выбор типа крана</h2>

          <div class="choose-crane-type__grid two">
            <PriceCard inputName="type" 
                       value="supported" 
                       imgSrc="assets/img/price-card-image-1.svg"
                       title="Опорный"
                       priceFrom="89 880"
                       @input="type = $event">
            </PriceCard>
            <PriceCard inputName="type" 
                       value="underslung" 
                       imgSrc="assets/img/price-card-image-2.svg"
                       title="Подвесной"
                       priceFrom="67 880"
                       @input="type = $event">
            </PriceCard>
              <!--<label class="choose-crane-type__item price-card">
                  <input type="radio" name="type" value="supported" v-model="type">
                  <div class="price-card__text">
                      <div class="price-card__title">Опорный</div>
                      <div class="price-card__price">от 89 880 ₽</div>
                  </div>
                  <div class="price-card__image-wrap">
                      <img src="assets/img/price-card-image-1.svg" alt="">
                  </div>
              </label>
              <label class="choose-crane-type__item price-card" v-bind:class="[type=='underslung'?'choose-crane-type__item-select':'']">
                  <input type="radio" name="type" value="underslung" v-model="type">
                  <div class="price-card__text">
                      <div class="price-card__title">Подвесной</div>
                      <div class="price-card__price">от 67 880 ₽</div>
                  </div>
                  <div class="price-card__image-wrap">
                      <img src="assets/img/price-card-image-2.svg" alt="">
                  </div>
              </label>-->

          </div>   

          <ButtonNext v-bind:isDisabled="isNextBtnDisabled"></ButtonNext>
      </div>
</template>

<script>
  import {mapActions} from "vuex/dist/vuex.mjs";
  import ButtonNext from "./ButtonNext"
  import PriceCard from "./PriceCard"

  export default {
    name: "CalculateItem1Component",
    components:{ButtonNext, PriceCard},
    data() {
      return {
        type:''
      }
    },
    computed:{
      isNextBtnDisabled:function(){
        if (this.type==='')
          return true
        else
          return false;
      }
    },
    methods: {
      // select(id, value) {
      //   this.selected = true;
      //   this.isNextBtnDisabled = false;
        //this.$store.dispatch('select_page1', this.products[value]);

        // let items = document.querySelectorAll('.choose-crane-type__item');
        // items.forEach((item) => {
        //   item.classList.remove('choose-crane-type__item-select');
        // });
        // document.getElementById(id).classList.add('choose-crane-type__item-select');
      // },
    },
  }
</script>

<style lang="scss" scoped>
    .choose-crane-type__item {
        cursor: pointer;
    }
    .choose-crane-type__item-select {
        border-bottom: solid 2px #b5212e;
    }
</style>
