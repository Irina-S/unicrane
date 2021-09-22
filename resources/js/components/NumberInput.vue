<template>
    <div class="field-group" v-bind:class="[className, {[hideClass]:isHidden}]">
        <label class="field-group__label">{{title}}</label>
        <div class="field-group__field">
            <input type="number" name="inputName" v-model="inputVal">
            <span>мм</span>
        </div>
    </div>
</template>

<script>
  import {inputMixin} from './mixins.js'

  export default {
    name: "NumberInput",
    mixins:[inputMixin],
    data(){
      return {
        hideClass:'field-group--hidden'
      }
    },
    props:{
      title:String, 
      inputName:String, 
      className:String,
      isHidden:{
        type:Boolean,
        default:false
      }
    },
    methods: {

    },
  }
</script>

<style scoped lang="scss">
  .field-group{
    display:flex;
    flex-direction:column;
    justify-content:flex-start;

    &--hidden{
      visibility:hidden;
    }

    &__label{
      text-align:left;
      font-family: Noto Sans;
      font-style: normal;
      font-weight: bold;
      font-size: 18px;
      line-height: 1.9;
      color: #051223;
    }

    &__field{
      display:flex;
      align-items:center;
      border: 1px solid #616D7D;
      width:190px;
      height:60px;
      padding:10px;
      background: #fff;
    }

    input{
      width:calc(100% - 40px);
      border:none;
      outline:none;
      background:transparent;
      font-family: Noto Sans;
      font-style: normal;
      font-weight: 300;
      font-size: 18px;
      line-height: 1.9;
      color: #616D7D;
    }

    span{
      font-family: Noto Sans;
      font-style: normal;
      font-weight: 300;
      font-size: 18px;
      line-height: 1.9;
      color: #616D7D;
    }
  }

  @media (max-width:991px){
      .field-group{
        &__label{
            font-size: 14px;
        }

        &__field{
            width: 135px;
            height: 50px;
        }

        input{
          width: calc(100% - 25px);
          font-size:15px;
        }

        span{
          font-size:15px;
        }
      }
  }

  @media (max-width:580px){
    .field-group{
      &__field{
        width: 95%;
        margin-right: 5%;
      }
    }
  }

  @media (max-width:500px){
    .field-group{
      &__field{
        width: 100%;
        margin-right: 0;
      }
    }
  }
</style>