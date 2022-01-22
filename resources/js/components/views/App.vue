<template>
    <div>
        <main class="container">
            <h1>Contenuto dei guests con VUE</h1>
            <div class="d-flex" style="gap: 10px">
                <div
                    v-for="post in postList"
                    :key="post.id"
                    class="card"
                    style="width: 18rem"
                >
                    <img :src="post.thumb" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">{{ post.title }}</h5>
                        <p class="card-text">{{ post.subtitle }}</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<style></style>

<script>
import NavBar from "./partials/NavBar.vue";
export default {
    components: { NavBar },
    name: "App",
    data() {
        return {
            postList: [],
        };
    },
    mounted() {
        window.axios.get("/api/posts").then((resp) => {
            this.postList = resp.data;
        });
    },
};
</script>
