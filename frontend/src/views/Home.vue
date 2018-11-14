<template>
  <div class="home">
   <div class="jumbotron">
     <h1>Welcome to App</h1>
     <p>Congrats!</p>
     <ApiStatus/>
   </div>
  </div>
</template>

<script>
// @ is an alias to /src
import ApiStatus from '@/components/ApiStatus.vue'

export default {
  name: 'home',
  components: {
      ApiStatus
  }
}
</script>
