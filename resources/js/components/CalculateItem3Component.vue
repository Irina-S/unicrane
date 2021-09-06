<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 3 из 7
        </div>
        <h2 class="choose-crane-type__header">3. Тип управления краном</h2>
        <div class="choose-crane-type__grid two">
            <a href="/" class="choose-crane-type__item price-card">
                <div class="price-card__text">
                    <div class="price-card__title">Ручное</div>
                    <div class="price-card__price">от 89 880 ₽</div>
                </div>
                <div class="price-card__image-wrap">
                    <img src="assets/img/price-card-image-3.svg" alt="">
                </div>
            </a>
            <a href="/" class="choose-crane-type__item price-card">
                <div class="price-card__text">
                    <div class="price-card__title">Электрическое</div>
                    <div class="price-card__price">от 67 880 ₽</div>
                </div>
                <div class="price-card__image-wrap">
                    <img src="assets/img/price-card-image-4.svg" alt="">
                </div>
            </a>
        </div>
        <ButtonNext></ButtonNext>
    </div>
</template>

<script>
  import ButtonNext from "./ButtonNext"
  export default {
    name: "CalculateItem3Component",
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
