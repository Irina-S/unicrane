<template>
    <label class="choose-crane-type__item price-card" v-bind:class="{[checkedClass]:isChecked, [hideClass]:isHidden}">
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
    import {cardMixin,inputMixin} from './mixins.js'

    export default {
        name: "PriceCard",
        props:{
            inputName:String, 
            value:String, 
            imgSrc:String, 
            title:String, 
            priceFrom:String, 
            curVal:String,
            isHidden:{
                type:Boolean,
                default:false
            }
        },
        mixins:[cardMixin,inputMixin],
        computed:{
        }
  }
</script>

<style lang="scss" scoped>

</style>