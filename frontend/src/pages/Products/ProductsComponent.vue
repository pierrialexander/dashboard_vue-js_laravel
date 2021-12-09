<template>
  <div>
    <DashBoardComponent>
      <div slot="slot-pages" class="content-pages">
         
        <header class="title-pages">
          <p>Products</p>
        </header>
       
      </div>
    </DashBoardComponent>
  </div>
</template>


<script>
import DashBoardComponent from '../Dashboard/DashboardComponent.vue'

export default {
  name: 'ProductsComponent',
  components:{
    DashBoardComponent,
  }
  
}
</script>


<style lang="scss" src="./style.scss" scoped />