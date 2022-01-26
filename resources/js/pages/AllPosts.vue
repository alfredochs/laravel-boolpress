<template>
    <div class="container">
        <div class="row row-cols-5">
            <Post
                class="col"
                v-for="post in postList"
                :key="post.id"
                :post="post"
            ></Post>
        </div>
    </div>
</template>

<script>
import Post from "../components/Post.vue";
export default {
    name: "AllPosts",
    components: { Post },
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

<style></style>
