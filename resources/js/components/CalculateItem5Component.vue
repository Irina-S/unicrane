<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 5 из 7
        </div>
        <h2 class="choose-crane-type__header">5. Размещение</h2>
        <div class="choose-crane-type__grid three">
            <a href="/" class="choose-crane-type__item price-card">
                <div class="price-card__text">
                    <div class="price-card__title">Улица</div>
                    <div class="price-card__price">от 89 880 ₽</div>
                </div>
                <div class="price-card__image-wrap">
                    <img src="assets/img/price-card-image-8.svg" alt="">
                </div>
            </a>
            <a href="/" class="choose-crane-type__item price-card">
                <div class="price-card__text">
                    <div class="price-card__title">Навес</div>
                    <div class="price-card__price">от 67 880 ₽</div>
                </div>
                <div class="price-card__image-wrap">
                    <img src="assets/img/price-card-image-9.svg" alt="">
                </div>
            </a>
            <a href="/" class="choose-crane-type__item price-card">
                <div class="price-card__text">
                    <div class="price-card__title">Помещение</div>
                    <div class="price-card__price">от 67 880 ₽</div>
                </div>
                <div class="price-card__image-wrap">
                    <img src="assets/img/price-card-image-10.svg" alt="">
                </div>
            </a>
        </div>
    <ButtonNext></ButtonNext>
    </div>
</template>

<script>
  import ButtonNext from "./ButtonNext"
  export default {
    name: "CalculateItem5Component",
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
