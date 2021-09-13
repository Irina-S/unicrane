<template>
    <div class="field-group" v-bind:class="className">
        <label class="field-group__label">{{title}}</label>
        <div class="field-group__field">
            <input type="number" name="inputName">
            <span>мм</span>
        </div>
    </div>
</template>

<script>

  export default {
    name: "NumberInput",
    props:['title', 'inputName', 'className'],
    methods: {

    },
  }
</script>

<style scoped lang="scss">
  .field-group{
    display:flex;
    flex-direction:column;
    justify-content:flex-start;

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
    }

    input{
      width:calc(100% - 40px);
      border:none;
      outline:none;
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
</style>