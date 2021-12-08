<template>
  <div class="navbar">
    <h3 class="logo"><i class="fas fa-medal"></i> Logo</h3>
    <a @click.prevent="logout" class="logout"><i class="fa fa-sign-out-alt"></i> Sair</a>
  </div>
</template>

<script>
export default {
  name: 'NavBarComponent',
  methods: {
    logout() {
      this.$router.push({name: 'Login'})
    }
  }
}
</script>

<style lang="scss">

.navbar{

  .logo {
      padding-top:5px;
      padding-left: 10px;
      color: white;
    }

  .logout {
      color: white;
      text-decoration: none;
      font-size: 1.2rem;
      cursor: pointer;
  }

  .logout:hover {
    color: rgb(202, 202, 212);
    transition: .5s;

  }

 }
 
</style>