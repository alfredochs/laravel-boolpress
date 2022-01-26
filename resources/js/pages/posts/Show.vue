<template>
    <div>
        <h1>show page</h1>
        <div class="container" style="width: 300px">
            <single-post
                :title="post.title"
                :subtitle="post.subtitle"
                :thumb="post.thumb"
            ></single-post>
        </div>
    </div>
</template>

<script>
import SinglePost from "../../components/SinglePost.vue";
export default {
    components: { SinglePost },
    data() {
        return {
            post: [],
        };
    },
    methods: {
        fetchPost() {
            let url = "/api/posts/" + this.$route.params.id;
            window.axios.get(url).then((resp) => {
                this.post = resp.data;
            });
        },
    },
    mounted() {
        this.fetchPost();
    },
};
</script>

<style></style>
