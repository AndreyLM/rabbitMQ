<template>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggler" data-toggle="collapse"
                data-target="#nabarCollapse" aria-controls="#nabarCollapse" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <router-link class="navbar-brand" :to="{name: 'home'}">
                    <img src="../assets/logo.png" alt="App" height="28">
                </router-link>
            </div>
            <div class="collapse navbar-collapse" id="#navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><router-link class="nav-link" :to="{name: 'home'}">Home</router-link></li>
                    <li class="nav-item"><router-link class="nav-link" :to="{name: 'about'}">About</router-link></li>
                    <li class="nav-item"><router-link class="nav-link" :to="{name: 'login'}">Login</router-link></li>
                    <li class="nav-item"><router-link class="nav-link" :to="{name: 'signup'}">SignUp</router-link></li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "Nav"
    }
</script>

<style scoped>

</style>