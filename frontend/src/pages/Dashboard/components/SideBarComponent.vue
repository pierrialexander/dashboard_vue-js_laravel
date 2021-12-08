<template>
  <div class="sidebar">
    <div class="top">
      <div class="avatar">
        <span><i class="fa fa-user"></i></span>
      </div>
      <div class="info">
        <p class="name">João das Neves</p>
        <p class="status">online</p>
      </div>
    </div>

    <div class="menu">
      <ul>
        <router-link :to="{name: 'Home'}"><li><i class="fa fa-home"></i> Home</li></router-link>
        <router-link :to="{name: 'Products'}"><li><i class="fas fa-dolly-flatbed"></i> Produtos</li></router-link>
        <router-link :to="{name: 'Home'}"><li><i class="fas fa-chart-line"></i> Vendas</li></router-link>
        <router-link :to="{name: 'Home'}"><li><i class="fas fa-print"></i> Relatórios</li></router-link>
        <router-link :to="{name: 'Home'}"><li><i class="fas fa-question-circle"></i> Ajuda</li></router-link>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SideBarComponent',
}
</script>

<style lang="scss">
@import '@/assets/scss/_main';

  .sidebar {

    .top {
      width: 100%;
      background-color: blue;
      display: flex;
      justify-content: center;
      padding: 25px 5px;
      align-items: center;
      
      
      .avatar {
        margin-right: 10px;
        span {
          color: rgb(255, 255, 255);
          display: block;
          width: 50px;
          height: 50px;
          border-radius: 50%;
          background-color: $fundoDashboard;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 30px;
        }
      }

      .info {

        p {
          margin: 0;
          color: white;
        }

        .status {
          font-size: .8rem;
        }
      }
    
    }


    .menu {
      padding: 10px;
      
          a {
              color: white;
              text-decoration: none;

            li {
              width: 100%;
              text-align: center;
              padding-bottom: 15px;
              padding-top: 15px;
            }
          
            ul li {
              margin: 15px 0;
              font-size: 1.2rem;
            }

            li:hover {
              background-color: $fundoLogin;
            }
          
          }

          a:hover {
                color: rgb(202, 202, 212);
                color: #DA77F2;
                transition: .5s;
          }

        }

}

  


    
  
</style>