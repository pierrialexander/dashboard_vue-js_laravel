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
              <CardsComponent :type="'Serviços'" :porcentagem="'9%'" :icon="'fa-cogs'" :qtd="'4120'"/>
            </div>
                   
          </div>
                 
        </div>
        
        <div class="mt-5">
          <div class="row">
            <div class="col-12 col-lg-6">
              <ListsComponent :data="users" description="Clientes" :columns="['Nome', 'E-mail']"/>
            </div>
            <div class="col-12 col-lg-6">
              <ListsComponent :data="users" description="Produtos" :columns="['Nome', 'Valor']"/>
            </div>
          </div>
        </div>

      </div>
    </DashBoardComponent>
  </div>
</template>


<script>
/* eslint-disabled */
import DashBoardComponent from '../Dashboard/DashboardComponent.vue'
import CardsComponent from '../../components/CardsComponent.vue'
import ListsComponent from '../../components/ListsComponent.vue'
const axios = require('axios');

export default {
  name: 'HomeComponent',
  data() {
    return {
      users: []
    }
  },
  mounted(){
    this.getUsers()
  },
  methods: {
    async getUsers() {

      const response = await axios.get('https://jsonplaceholder.typicode.com/users')
      if (response.status == 200) {
        this.users = response.data
      } else {
        console.error('Deu Pau')
      }
      
    }
  },
  components:{
    DashBoardComponent,
    CardsComponent,
    ListsComponent
  }
  
}
</script>

<style lang="scss" src="./style.scss" scoped />