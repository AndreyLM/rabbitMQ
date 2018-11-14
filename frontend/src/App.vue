<template>
  <div id="app">
    <header class="app-header">
      <Nav/>
    </header>

    <div class="app-content">
      <main class="container">
        <router-view/>
      </main>
    </div>

    <footer class="app-footer">
      <div class="container">
        <hr>
        <p>App. All tights reserved.</p>
      </div>
    </footer>
  </div>
</template>

<script>
  import Nav from '@/components/Nav.vue'

  export default {
      components: {
          Nav
      }
  }
</script>

<style lang="scss">
  $card-spacer-x : 40px;

  @import "~bootstrap/scss/bootstrap";
  @import "~bootstrap-vue/dist/bootstrap-vue.css";
  @import "~font-awesome/css/font-awesome.css";

  body {
    min-height: 100vh;
  }
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  padding: 30px;
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
