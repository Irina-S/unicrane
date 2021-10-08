<template>
  <div class="calc-res__wrapper">
    <div class="calc-res">
      <aside class="calc-res__aside calc-total">
        <h2 class="calc-total__title">Результаты расчетов</h2>
        <img class="calc-total__img" :src="craneImg">
        <ul class="calc-list">
          <li class="calc-list__item calc-item">
            <span class="calc-item__title">Срок изготовления крана:</span>
            <strong class="calc-item__value">-</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span class="calc-item__title">Базовая стоимость крана:</span>
            <strong class="calc-item__value" v-bind:class="{'red-text':basePrice?true:false}">{{basePrice}} &#8381;</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span class="calc-item__title">Стоимость доплаты:</span>
            <strong class="calc-item__value" v-bind:class="{'red-text':supplement?true:false}">{{supplement?`${supplement} &#8381;`:'-'}}</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span class="calc-item__title">Стоимость путей и токоподвода:</span>
            <strong class="calc-item__value">-</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span class="calc-item__title">Стоимость доп. оборудования:</span>
            <strong class="calc-item__value">-</strong>
          </li>
          <li class="calc-list__item calc-item">
            <span class="calc-item__title">Общая стоимость:</span>
            <strong class="calc-item__value" v-bind:class="{'red-text':totalPrice?true:false}">{{totalPrice}}</strong>
          </li>          
        </ul>
        <button class="button calc-total__btn"><span class="button__text">Получить КП</span></button>
      </aside>
       <ul class="calc-res__options crane-opts">
         <CraneOption title="Тип управления"
                      :value="handleName"
         ></CraneOption>
        <CraneOption title="Тип крана"
                      :value="typeName"
         ></CraneOption>    
         <CraneOption title="Грузоподъемность"
                      :value="lCapacity.toString()"
                      measure="кг"
         ></CraneOption>
        <CraneOption title="Ширина пролета"
                     :value="width"
                     measure="мм"
         ></CraneOption>
        <CraneOption title="Исполнение"
                     :value="prodName"
                     :price="prodPrice"
         ></CraneOption>
        <CraneOption v-if="isElectric" 
                     title="Размещение"
                     :value="placementName"
                     :price="placementPrice"
         ></CraneOption>
         <CraneOption title="Температурный режим"
                     :value="tmodeName"
                     :price="tmodePrice"
         ></CraneOption>
        <CraneOption v-if="needWay" 
                     title="Разработка проектной документации крановых путей"
         ></CraneOption>
        <CraneOption v-if="needRail" 
                     title="Монтаж кранового рельса"
         ></CraneOption>
       </ul>
    </div>
    <div class="calc-add"></div>    
  </div>

</template>

<script>
  import CraneOption from './CraneOption'

  export default {
    name: "CalculateResult",
    components: {CraneOption},
    data() {
      return {

      }
    },
    computed:{
      isUnderslung:function(){
        return this.$store.state.calculate.type=='underslung'?true:false;
      },
      isSupported:function(){
        return this.$store.state.calculate.type=='supported'?true:false;
      },
      isElectric:function(){
        return this.$store.state.calculate.handle=='electric'?true:false;
      },      
      craneImg:function(){
        return this.$store.state.calculate.handle=='supported'?'assets/img/calculator/supported.jpg':'assets/img/calculator/underslung.jpg'
      },
      handleName:function(){
        return this.$store.state.calculate.handleName;
      },
      typeName:function(){
        return this.$store.state.calculate.typeName;
      },
      prodName:function(){
        return this.$store.state.calculate.prodName;
      },
      prodPrice:function(){
        return this.$store.state.calculate.prodPrice;
      },
      placementName:function(){
        return this.$store.state.calculate.placementName;
      },
      placementPrice:function(){
        return this.$store.state.calculate.placementPrice;
      },      
      tmodeName:function(){
         return this.$store.state.calculate.tmodeName;
      },
      tmodePrice:function(){
         return this.$store.state.calculate.tmodePrice;
      },      
      needWay:function(){
        return this.$store.state.calculate.hasway=='hasway'?false:true;
      },
      needRail:function(){
        return this.isSupported?(this.$store.state.calculate.hasrail=='hasrail'?false:true):false;
      },
      basePrice:function(){
        return this.$store.state.calculate.basePrice ?? 0;
      },
      lCapacity:function(){
        return this.$store.state.calculate.lcapacity*1000;
      },
      width:function(){
        return this.$store.state.calculate.width;
      },
      supplement:function(){
        console.log('sup', this.$store.state.calculate.supplement);
        return this.$store.state.calculate.supplement;
      },      
      totalPrice:function(){
        return this.$store.state.calculate.totalPrice;
      }
    },
    methods: {
    }

  }
</script>

<style lang="scss">
  .calc-res{
    margin-bottom: 100px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 140px;    
    font-family: 'Noto Sans';
    text-align: center;

    &__wrapper{
      margin-top: 100px;
    }

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
    box-shadow: 0px 4px 64px rgba(0, 0, 0, 0.05);

    &__title{
      width: 100%;
      font-family: Bebas Neue;
      font-style: normal;
      font-weight: bold;
      font-size: 30px;
      line-height: 1.2;
      letter-spacing: 0.05em;
      color: #051223;
      margin-bottom: 20px;
    }

    &__img{
      width: 100%;
      height: auto;
      margin-bottom: 20px;
    }

    &__btn{
      width: 100%;
    }
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
    padding: 12px 0;
    border-bottom: 1px solid #DBDBDB;

    &:last-child{
      border: none;
    }

    &__title{
      margin-right: 15px;
    }

    &__value{
      font-weight: bold;
      color: #DBDBDB;
    }
  }

  .crane-opts{
    display: flex;
    flex-direction: column;
    background: #FFFFFF;
    border: 1px solid #DBDBDB;
  }

  .crane-option{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    font-family: Bebas Neue;
    font-weight: bold;
    border-bottom: 1px solid #DBDBDB;

    &:last-child{
      border: none;
    }

    &__title{
      font-size: 20px;
      line-height: 1.4;
      letter-spacing: 0.05em;
      color: #051223;
      margin-right: 40px;
    }

    &__price{
      margin-right: 40px;
      margin-left: auto;
      font-size: 20px;
      line-height: 1.4;
      letter-spacing: 0.05em;
      text-align: right;
      color: #616D7D;
      white-space: nowrap;  
    }

    &__btn{
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 14px 20px;
      font-size: 16px;
      line-height: 1;
      font-weight: bold;
      letter-spacing: 0.05em;
      color: #B5212E;
      background: #b5212e26;;
    }
  }

  .red-text{
    color: #B5212E;
  }

  @media (max-width:1700px){
    .calc-res{
      gap:60px;
    }
  }

  @media (max-width:1230px){
    .calc-res{
      gap:30px;
    }

    @media (max-width:991px){
      .calc-res{
        flex-direction: column;

          &__aside{
          flex:unset;
          width: 100%;
        }

        &__options{
          flex: unset;
          width: 100%;
        }
      }
    }

    @media (max-width:770px){
      .crane-option{
        &__btn{
          font-size:13px;
          padding: 13px;
        }

        &__title, &__price{
          font-size:18px;
        }
      }
    }

    @media (max-width:580px){
      .crane-option{
        display: grid;
        gap: 0px 20px;
        grid-template-columns: auto 75px;
        grid-template-areas: "opt-title opt-btn"
                    "opt-price opt-btn";

        &__title{
          grid-area: opt-title;
          margin-right: 0;
        }

        &__price{
          width: 100px;
          grid-area: opt-price;
          text-align: left;
          margin-right: 0;
        }

        &__btn{
          width: 100%;
          font-size:14px;
          grid-area: opt-btn;
          
        }
      }
    }
  }
</style>