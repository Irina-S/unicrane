<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 6 из 7
        </div>
        <h2 class="choose-crane-type__header">6. Температурный режим</h2>
        <div class="choose-crane-type__grid three">
            <a href="/" class="choose-crane-type__item price-card">
                <div class="price-card__text">
                    <div class="price-card__title">От -20°С до +40°С</div>
                    <div class="price-card__price">от 89 880 ₽</div>
                </div>
                <div class="price-card__image-wrap">
                    <img src="assets/img/price-card-image-11.svg" alt="">
                </div>
            </a>
            <a href="/" class="choose-crane-type__item price-card">
                <div class="price-card__text">
                    <div class="price-card__title">От -40°С до +40°С</div>
                    <div class="price-card__price">от 67 880 ₽</div>
                </div>
                <div class="price-card__image-wrap">
                    <img src="assets/img/price-card-image-12.svg" alt="">
                </div>
            </a>
            <a href="/" class="choose-crane-type__item price-card">
                <div class="price-card__text">
                    <div class="price-card__title">От -50°С до +60°С</div>
                    <div class="price-card__price">от 67 880 ₽</div>
                </div>
                <div class="price-card__image-wrap">
                    <img src="assets/img/price-card-image-13.svg" alt="">
                </div>
            </a>
        </div>
        <ButtonNext></ButtonNext>
    </div>
</template>

<script>
  import ButtonNext from "./ButtonNext"
  export default {
    name: "CalculateItem6Component",
    components:{ButtonNext},
    methods: {
      nextSlide() {
        this.$root.$refs.calculate.$refs.calculate_slider.next()
      },
    },
  }
</script>

<style scoped>

</style>
