<template>
    <div>
        <header>
            <nav-bar> </nav-bar>
        </header>
        <main class="container">
            <h1>Contenuto dei guests con VUE</h1>
        </main>
    </div>
</template>

<style></style>

<script>
import NavBar from "./partials/NavBar.vue";
export default {
    components: { NavBar },
    name: "App",
};
</script>
