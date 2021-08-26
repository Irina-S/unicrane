<template>
    <div class="content-container content-container--regular">
        <div class="choose-crane-type__wrap">
            <div class="choose-crane-type__step">
                Шаг 4 из 7
            </div>
            <h2 class="choose-crane-type__header">4. Исполнение крана</h2>
            <div class="choose-crane-type__grid three">
                <a href="/" class="choose-crane-type__item price-card">
                    <div class="price-card__text">
                        <div class="price-card__title">Общепромышленное</div>
                        <div class="price-card__price">от 89 880 ₽</div>
                    </div>
                    <div class="price-card__image-wrap">
                        <img src="assets/img/price-card-image-5.svg" alt="">
                    </div>
                </a>
                <a href="/" class="choose-crane-type__item price-card">
                    <div class="price-card__text">
                        <div class="price-card__title">Пожаробезопасное</div>
                        <div class="price-card__price">от 67 880 ₽</div>
                    </div>
                    <div class="price-card__image-wrap">
                        <img src="assets/img/price-card-image-6.svg" alt="">
                    </div>
                </a>
                <a href="/" class="choose-crane-type__item price-card">
                    <div class="price-card__text">
                        <div class="price-card__title">Взрывоопасное</div>
                        <div class="price-card__price">от 67 880 ₽</div>
                    </div>
                    <div class="price-card__image-wrap">
                        <img src="assets/img/price-card-image-7.svg" alt="">
                    </div>
                </a>
            </div>
            <a href="/" @click.prevent="nextSlide"  class="choose-crane-type__button button"><span class="button__text">Следующий шаг</span></a>
        </div>
    </div>
</template>

<script>
  export default {
    name: "CalculateItem4Component",
    methods: {
      nextSlide() {
        this.$root.$refs.calculate.$refs.calculate_slider.next()
      },
    },
  }
</script>

<style scoped>

</style>
