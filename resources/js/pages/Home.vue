<template>
    <div class="container">
        <div class="row row-cols-4">
            <Post v-for="post in postList" :key="post.id" :post="post"></Post>
        </div>
    </div>
</template>

<script>
import Post from "../components/Post.vue";
export default {
    components: { Post },
    data() {
        return {
            postList: [],
        };
    },
    mounted() {
        window.axios.get("api/posts").then((resp) => {
            this.postList = resp.data;
        });
    },
};
</script>

<style></style>
