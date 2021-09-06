<template>
      <div class="choose-crane-type__wrap">
          <div class="choose-crane-type__step">
              Шаг 1 из 7
          </div>
          <h2 class="choose-crane-type__header">1. Выбор типа крана</h2>
          <div class="choose-crane-type__grid two">
              <a href="/" class="choose-crane-type__item price-card" id="selected1-1" @click.prevent="select()">
                  <div class="price-card__text">
                      <div class="price-card__title">Опорный</div>
                      <div class="price-card__price">от 89 880 ₽</div>
                  </div>
                  <div class="price-card__image-wrap">
                      <img src="assets/img/price-card-image-1.svg" alt="">
                  </div>
              </a>
              <a href="/" class="choose-crane-type__item price-card" id="selected1-2" @click.prevent="select()">
                  <div class="price-card__text">
                      <div class="price-card__title">Подвесной</div>
                      <div class="price-card__price">от 67 880 ₽</div>
                  </div>
                  <div class="price-card__image-wrap">
                      <img src="assets/img/price-card-image-2.svg" alt="">
                  </div>
              </a>
          </div>
          <ButtonNext v-bind:isDisabled="isNextBtnDisabled"></ButtonNext>
      </div>
</template>

<script>
  import {mapActions} from "vuex/dist/vuex.mjs";
  import ButtonNext from "./ButtonNext"
  export default {
    name: "CalculateItem1Component",
    components:{ButtonNext},
    data() {
      return {
        selected: false,
        isNextBtnDisabled:true,
        products: [
          {
            'name': 'опорный',
            'price': 89880
          },
          {
            'name': 'подвесной',
            'price': 67880
          },
        ],
      }
    },
    methods: {
      nextSlide() {
        if (this.selected) {
          this.$root.$refs.calculate.$refs.calculate_slider.next();
        }
      },
      select(id, value) {
        this.selected = true;
        this.isNextBtnDisabled = false;
        //this.$store.dispatch('select_page1', this.products[value]);

        // let items = document.querySelectorAll('.choose-crane-type__item');
        // items.forEach((item) => {
        //   item.classList.remove('choose-crane-type__item-select');
        // });
        // document.getElementById(id).classList.add('choose-crane-type__item-select');
      },
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
