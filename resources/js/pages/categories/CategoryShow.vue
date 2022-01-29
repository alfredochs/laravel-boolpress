<template>
    <div>
        <Post v-for="post in category.posts" :key="post.id" :post="post"></Post>
    </div>
</template>

<script>
import Post from "../../components/Post.vue";
export default {
    data() {
        return {
            category: {
                type: Object,
                default: () => ({}),
            },
        };
    },
    components: { Post },
    methods: {
        getData() {
            window.axios
                .get("/api/category/" + this.$route.params.id)
                .then((resp) => {
                    this.category = resp.data;
                });
        },
    },
    mounted() {
        this.getData();
    },
};
</script>

<style></style>
