<template>
  <div>
    <DashBoardComponent>
      <div slot="slot-pages" class="content-pages">
        <p>Products</p>
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


<style scoped>

</style>