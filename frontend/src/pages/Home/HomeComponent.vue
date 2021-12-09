<template>
  <div>
    <DashBoardComponent>
      <div slot="slot-pages" class="content-pages">
        <header class="title_pages">
          <p>Home</p>
        </header>

        <div>
          <div class="row">
          
            <div class="col-12 col-lg-3">
              <CardsComponent :type="'Clientes'" :porcentagem="'7%'" :icon="'fa-users'" :qtd="'5590'"/>
            </div>
            <div class="col-12 col-lg-3">
              <CardsComponent :type="'Produtos'" :porcentagem="'5%'" :icon="'fa-dolly-flatbed'" :qtd="'15800'"/>
            </div>
            <div class="col-12 col-lg-3">
              <CardsComponent :type="'Vendas'" :porcentagem="'12%'" :icon="'fa-chart-line'" :qtd="'3270'"/>
            </div>
            <div class="col-12 col-lg-3">
              <CardsComponent :type="'Serviços'" :porcentagem="'9%'" :icon="'fa-users'" :qtd="'4120'"/>
            </div>
             
          </div>
          
        </div>
        

      </div>
    </DashBoardComponent>
  </div>
</template>


<script>
import DashBoardComponent from '../Dashboard/DashboardComponent.vue'
import CardsComponent from '../../components/CardsComponent.vue'

export default {
  components:{
    DashBoardComponent,
    CardsComponent
  }
  
}
</script>

<style lang="scss" src="./style.scss" scoped />