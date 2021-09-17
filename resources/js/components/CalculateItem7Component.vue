<template>
    <div class="choose-crane-type__wrap">
        <div class="choose-crane-type__step">
            Шаг 7 из 7
        </div>
        <h2 class="choose-crane-type__header">7. Размещение</h2>
        <div class="choose-crane-type__sizes">
            <NumberInput v-bind:title="isSupported?'Высота путей':'Высота до путей'" 
                        inputName="height"
                        className="choose-crane-type__height"
                        @input="onHeightInput($event)">
            </NumberInput>            
            <img src="assets/img/placement.png" class="choose-crane-type__img">
            <NumberInput title="Длина консолей крана" 
                        inputName="consolelength"
                        className="choose-crane-type__consolelength"
                        v-bind:isHidden="isSupported"
                        @input="onConsoleLengthInput($event)">
            </NumberInput>
            <NumberInput title="Ширина путей" 
                        inputName="width"
                        className="choose-crane-type__width"
                        @input="onWidthInput($event)">
            </NumberInput>
            <NumberInput title="Длина путей" 
                        inputName="length"
                        className="choose-crane-type__length"
                        @input="onLengthInput($event)">
            </NumberInput>
        </div>
        <div class="warning" v-bind:style="warnStyleObj"><img src="assets/img/warning.svg">    Для выбранной ширины стоимость рассчитывается индивидуально</div>
    <ButtonNext 
        title="Завершить расчет"
        v-bind:isDisabled="isFinishButtonDisabled" 
        v-bind:onClickFunc="showResult"
    ></ButtonNext>
    </div>
</template>

<script>
  import {stepMixin,storeMixin} from './mixins.js'
  import NumberInput from "./NumberInput"
  import ButtonNext from "./ButtonNext"

  export default {
    name: "CalculateItem7Component",
    components:{NumberInput,ButtonNext},
    mixins:[stepMixin,storeMixin],
    data(){
        return {
            stepValue:{},
            isFinishButtonDisabled:true,
            warnStyleObj:{display:'none'}
        }
    },
    computed:{
        // isFinishButtonDisabled(){
        //     let isValid = true;
        //     if (this.stepValue.height.length<3 || this.stepValue.width.length<3 || this.stepValue.length.length<3)
        //         isValid = false;
        //     if (this.$store.state.calculate.type=='underslung' && this.stepValue.consolelength.lenght<3)
        //         isValid = false;
        //     return !isValid;
        // }
    },
    methods: {
        onHeightInput(valueObj){
          this.stepValue.height = valueObj.value;
          this.$store.dispatch('select_height', valueObj);
          this.validateParams();
          console.log('input')
        },
        onConsoleLengthInput(valueObj){
          this.stepValue.consolelength = valueObj.value;
          this.$store.dispatch('select_consolelength', valueObj);
          this.validateParams();
        },
        onWidthInput(valueObj){
          this.stepValue.width = valueObj.value;
          this.$store.dispatch('select_width', valueObj);
          this.validateParams();
          if (this.$store.state.calculate.basePrice===false)
            this.warnStyleObj.display = "flex"
          else
            this.warnStyleObj.display ="none";

        },
        onLengthInput(valueObj){
          this.stepValue.length = valueObj.value;
          this.$store.dispatch('select_length', valueObj);
          this.validateParams();            
        },
        showResult(){
            this.$store.dispatch('select_status', 'res');
        },
        validateParams(){
            let isValid = true;
            console.log(this.stepValue);
            if (!this.stepValue.height || !this.stepValue.width || !this.stepValue.length || (this.stepValue.height.length<3 || this.stepValue.width.length<3 || this.stepValue.length.length<3))
                isValid = false;
            if (this.$store.state.calculate.type=='underslung' && (!this.stepValue.consolelength || this.stepValue.consolelength.length<3))
                isValid = false;
            this.isFinishButtonDisabled = !isValid;
        }
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

    .warning{
        margin-top: 20px;
        padding: 25px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: Noto Sans;
        font-style: normal;
        font-size: 18px;
        line-height: 1.9;
        color: #051223;
        background: #FFFFFF;
        box-shadow: 0px 4px 64px rgba(0, 0, 0, 0.05);

        img{
            margin-right: 10px;
        }
    }
</style>