<template>
  <div class="calc-res__wrapper">
    <div class="calc-res">
      <aside class="calc-res__aside calc-total">
        <h2>Результаты расчетов</h2>
        <img src="" alt="">
        <ul class="calc-list">
          <li class="calc-list__item calc-item">
            <span>Срок изготовления крана:</span>
            <strong>-</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span>Базовая стоимость крана:</span>
            <strong>89 990р</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span>Стоимость доплаты::</span>
            <strong>-</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span>Стоимость путей и токоподвода:</span>
            <strong>-</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span>Стоимость доп. оборудования:</span>
            <strong>-</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span>Общая стоимость:</span>
            <strong>-</strong>
          </li>          
        </ul>
        <button class="button calc-list__btn">Получить КП</button>
      </aside>
       <ul class="calc-res__options crane-opts">
         <li class="crane-opts__item crane-option">
           <span class="crane-option__title">грузоподъёмность: 500 кг</span>
           <span class="crane-option__price">Без доплаты</span>
           <button class="crane-option__btn">Изменить</button>
         </li>
       </ul>
    </div>    
  </div>

</template>

<script>
  import VueSlickCarousel from 'vue-slick-carousel'
  import ButtonNext from './ButtonNext'
  export default {
    name: "CalculateResult",
    components: {ButtonNext},
    data() {
      return {

      }
    },
    methods: {


    }

  }
</script>

<style lang="scss">
  .calc-res{
    width: 100%;
    font-family: 'Noto Sans';
    display: flex;
    justify-content: space-between;
    gap: 140px;

    &__aside{
      flex: 340px 0 0;
    }

    &__options{
      flex: auto 2 1;
    }
  }

  .calc-total{
    padding: 40px 30px 30px;
    background: #fff;
  }

  .calc-list{
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
  }

  .calc-item{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
  }
</style>