<template>
  <div class="my_cards">
    <div class="content top">
      <h3>{{ type }}</h3>
      <p class="porcentagem"> <i class="fa fa-arrow-up" id="arrow"></i>{{ porcentagem }}</p>
    </div>   

    <div class="content footer">
      <i :class="['fa', icon]" id="icon-footer"></i>
      <p class="qtd">{{ qtd }}</p>
    </div>
  </div>
</template>

<script>

export default {
  name: 'CardsComponent',
  props: {
    type: String,
    porcentagem: String,
    icon: String,
    qtd: String,
  }
  }

</script>

<style lang="scss">
@import '@/assets/scss/_main';

  .my_cards {
    display: flex;
    flex-direction: column;
    background-color: $hoverLinks;
    width: 100%;
    padding-top: 15px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 10px;
    color: white;


    .content {
      display: flex;
      justify-content: space-between;

      .porcentagem {
        #arrow {
          color: $green;
        }
      }
    }

    /* .top {

    }
 */
    .footer {
      
      #icon-footer {
        font-size: 1.7rem;
        padding-top: 3px;
      }

      p {
        font-size: 1.3rem;
      }
    }
  }
</style>