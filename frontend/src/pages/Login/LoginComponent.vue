<template>
  <div class="main">
    <div class="login">
      <div class="content-login">
        <header>
          <h1>Acesso ao Sistema</h1>
        </header>

        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu Email">
             
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sua Senha">
            </div>
            
            <button type="submit" class="btn btn-dark" @click.prevent="login">Entrar</button>
        </form>

      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: 'loginCampo',
  data() {
    return {

    }
  },
  methods: {
    login() {
       this.$router.push({name: 'Home'})
    }
  } 

}
</script>


<style lang="scss" src="./style.scss" scoped />