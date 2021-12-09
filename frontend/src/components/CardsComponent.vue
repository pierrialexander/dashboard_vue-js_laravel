<template>
  <div class="my_cards">
    <div class="content top">
      <h3>Clientes</h3>
      <p class="porcentagem"> <i class="fa fa-arrow-up" id="arrow"></i> 7%</p>
    </div>   

    <div class="content footer">
      <i class="fa fa-users" id="icon-footer"></i>
      <p class="qtd">9570</p>
    </div>
  </div>
</template>

<script>

export default {
  
  }

</script>

<style lang="scss">
@import '@/assets/scss/_main';

  .my_cards {
    display: flex;
    flex-direction: column;
    background-color: $hoverLinks;
    min-width: 20%;
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

    .top {

    }

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