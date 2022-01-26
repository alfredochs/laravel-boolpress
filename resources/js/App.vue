<template>
    <div>
        <Navbar></Navbar>
        <!-- Router -->
        <router-view></router-view>

        <Footer></Footer>
    </div>
</template>

<style></style>

<script>
import Navbar from "./components/Navbar.vue";
import Footer from "./components/Footer.vue";
// import Post from "./components/Post.vue";

export default {
    name: "App",
    components: { Navbar, Footer },
};
</script>
