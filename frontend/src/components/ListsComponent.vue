<template>
  <div class="lists">
    <div class="top">
      <p><strong>Clientes</strong></p>
    </div>
    <div class="content">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">contato</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <th scope="row">{{ user.id }}</th>
            <td class="users">{{ user.name }}</td>
            <td class="users">{{ user.email }}</td>
            <td class="users">{{ user.phone }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
    name: 'ListsComponent',
    props: {
      users: Array,
    }
}
</script>

<style lang="scss" scoped>
  .lists {
    width: 100%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: white;
  }

  .users {
    font-size: 12px;
  }
</style>