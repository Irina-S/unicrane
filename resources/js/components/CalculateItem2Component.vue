<template>
      <div class="choose-crane-type__wrap">
          <div class="choose-crane-type__step">
              Шаг 2 из 7
          </div>
          <h2 class="choose-crane-type__header">2. Выбор типа крана</h2>
          <div class="choose-crane-type__weight-grid">
              <a href="javascript:void(0);" class="weight-card" id="select2-1">
                  <div class="weight-card__text">
                      <div class="weight-card__title">0.5T</div>
                      <div class="weight-card__price">от 89 880 ₽</div>
                  </div>
                  <div class="weight-card__weight-bg">0.5T</div>
              </a>
              <a href="javascript:void(0);" class="weight-card" id="select2-2">
                  <div class="weight-card__text">
                      <div class="weight-card__title">0.5T</div>
                      <div class="weight-card__price">от 89 880 ₽</div>
                  </div>
                  <div class="weight-card__weight-bg">0.5T</div>
              </a>
              <a href="javascript:void(0);" class="weight-card" id="select2-3">
                  <div class="weight-card__text">
                      <div class="weight-card__title">0.5T</div>
                      <div class="weight-card__price">от 89 880 ₽</div>
                  </div>
                  <div class="weight-card__weight-bg">0.5T</div>
              </a>
              <a href="javascript:void(0);" class="weight-card" id="select2-4">
                  <div class="weight-card__text">
                      <div class="weight-card__title">0.5T</div>
                      <div class="weight-card__price">от 89 880 ₽</div>
                  </div>
                  <div class="weight-card__weight-bg">0.5T</div>
              </a>
          </div>
          <ButtonNext></ButtonNext>
      </div>
</template>

<script>
  import ButtonNext from "./ButtonNext"
  export default {
    name: "CalculateItem2Component",
    components:{ButtonNext},
    data() {
      return {
        selected: true,
        products: [
          {
            'name': '0.5T',
            'price': 89880
          },
          {
            'name': '0.5T',
            'price': 67880
          },
          {
            'name': '0.5T',
            'price': 67880
          },
          {
            'name': '0.5T',
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
      // select(id, value) {
      //   console.log(id);
      //   this.selected = true;
      //   this.$store.dispatch('select_page2', this.products[value]);
      //
      //   let items = document.querySelectorAll('.weight-card');
      //   items.forEach((item) => {
      //     item.classList.remove('choose-crane-type__item-select');
      //   });
      //   document.getElementById(id).classList.add('choose-crane-type__item-select');
      // },
    },
  }
</script>

<style scoped>
    .choose-crane-type__item {
        cursor: pointer;
    }
    .choose-crane-type__item-select {
        border-bottom: solid 2px #b5212e;
    }
</style>
