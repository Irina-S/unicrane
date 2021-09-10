<template>
    <label class="choose-crane-type__item price-card" v-bind:class="[isChecked?'choose-crane-type__item-select':'']">
        <input type="radio" v-bind:name="inputName" v-bind:value="value" v-model="inputVal" ref="input">
        <div class="price-card__text">
            <div class="price-card__title">{{title}}</div>
            <div class="price-card__price">от {{priceFrom}} ₽</div>
        </div>
        <div class="price-card__image-wrap">
            <img v-bind:src="imgSrc" alt="">
        </div>
    </label>
</template>

<script>
    import {cardMixin} from './mixins.js'

    export default {
        name: "PriceCard",
        props:['inputName', 'value', 'imgSrc', 'title', 'priceFrom', 'curVal'],
        mixins:[cardMixin],
  }
</script>

<style lang="scss" scoped>

</style>