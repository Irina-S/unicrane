<template>
    <div class="content-container content-container--regular">
        <div class="choose-crane-type__wrap">
            <div class="choose-crane-type__step">
                Шаг 7 из 7
            </div>
            <h2 class="choose-crane-type__header">7. Крановые пути</h2>
            <div class="choose-crane-type__grid two">
                <a href="/" class="choose-crane-type__item price-card">
                    <div class="price-card__text">
                        <div class="price-card__title">У нас уже есть крановый путь</div>
                        <div class="price-card__price">от 89 880 ₽</div>
                    </div>
                    <div class="price-card__image-wrap">
                        <img src="assets/img/price-card-image-13.svg" alt="">
                    </div>
                </a>
                <a href="/" class="choose-crane-type__item price-card">
                    <div class="price-card__text">
                        <div class="price-card__title">Необходима поставка и монтаж кранового пути</div>
                        <div class="price-card__price">от 67 880 ₽</div>
                    </div>
                    <div class="price-card__image-wrap">
                        <img src="assets/img/price-card-image-14.svg" alt="">
                    </div>
                </a>
            </div>
            <a href="#" class="choose-crane-type__button button"><span class="button__text">Следующий шаг</span></a>
        </div>
    </div>
</template>

<script>
  export default {
    name: "CalculateItem7Component",
    methods: {
      nextSlide() {
        this.$root.$refs.calculate.$refs.calculate_slider.next()
      },
    },
  }
</script>

<style scoped>

</style>
