<template>
    <label class="choose-crane-type__item weight-card" v-bind:class="[isChecked?'choose-crane-type__item-select':'']">
        <input type="radio" v-bind:name="inputName" v-bind:value="value" v-model="inputVal" ref="input">
        <div class="weight-card__text">
            <div class="weight-card__title">{{title}}T</div>
            <div class="weight-card__price">от {{priceFrom}} ₽</div>
        </div>
        <div class="weight-card__weight-bg">{{title}}T</div>
    </label>
</template>

<script>
    import {cardMixin,inputMixin} from './mixins.js'

    export default {
        name: "WeightCard",
        // props:['inputName', 'value', 'title', 'priceFrom', 'curVal'],
        props:{
            inputName:{
                type:String
            },
            value:{
                type:Number
            },
            title:{
                type:Number
            },
            priceFrom:{
                type:String
            },
            curVal:{
                type:String
            }
        },
        mixins:[cardMixin,inputMixin],
  }
</script>

<style lang="scss" scoped>

</style>