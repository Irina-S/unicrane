<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 7 из 7
        </div>
        <h2 class="choose-crane-type__header">5. Размещение</h2>
        <div class="choose-crane-type__sizes">
            <NumberInput title="Высота путей" 
                        inputName="height"
                        className="choose-crane-type__height">
            </NumberInput>            
            <img src="assets/img/placement.png" class="choose-crane-type__img">
            <NumberInput title="Длина консолей крана" 
                        inputName="consolelength"
                        classNameclass="choose-crane-type__consolelength">
            </NumberInput>
            <NumberInput title="Ширина путей" 
                        inputName="width"
                        classNameclass="choose-crane-type__width">
            </NumberInput>
            <NumberInput title="Длина путей" 
                        inputName="length"
                        className="choose-crane-type__length">
            </NumberInput>
        </div>
    <ButtonNext v-bind:isDisabled="isNextBtnDisabled"></ButtonNext>
    </div>
</template>

<script>
  import {stepMixin} from './mixins.js'
  import NumberInput from "./NumberInput"
  import ButtonNext from "./ButtonNext"

  export default {
    name: "CalculateItem7Component",
    components:{NumberInput,ButtonNext},
    mixins:[stepMixin],
    methods: {
        // onInput:function(valueObj){
        //   this.stepValue = valueObj.value;
        //   this.$store.dispatch('select_placement', valueObj);
        // }
    },
  }
</script>

<style scoped lang="scss">
    .choose-crane-type{
        &__sizes{
            display:grid;
            grid-template-columns: 230px 1fr 1fr;
            justify-items: center;
            align-items: center;
            grid-template-areas:"size-height size-img size-img"
                                "size-consolelength size-width size-length";
        }

        &__img{
            grid-area:size-img
        }

        &__height{
            grid-area:size-height
        }

        &__consolelength{
            grid-area:size-consolelength
        }

        &__width{
            grid-area:size-width
        }

        &__length{
            grid-area:size-length
        }
    }
</style>