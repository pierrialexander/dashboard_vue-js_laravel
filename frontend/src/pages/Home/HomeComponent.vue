<template>
  <div>
    <DashBoardComponent>
      <div slot="slot-pages" class="content-pages">
        <header class="title_pages">
          <p>Home</p>
        </header>

        <div>
          <div class="row">
            <div class="col-12 col-md-3">
              <CardsComponent/>
            </div>
            <div class="col-12 col-md-3">
              <CardsComponent/>
            </div>
            <div class="col-12 col-md-3">
              <CardsComponent/>
            </div>
            <div class="col-12 col-md-3">
              <CardsComponent/>
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