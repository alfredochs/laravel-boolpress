<template>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="row row-cols-4">
                    <Post
                        v-for="post in postList"
                        :key="post.id"
                        :post="post"
                    ></Post>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-4 bg-dark text-light p-4">
                <ul class="list-unstyled">
                    <h5>Lista delle Categorie</h5>
                    <li v-for="category in categoriesList" :key="category.id">
                        <router-link
                            :to="{
                                name: 'category.show',
                                params: { id: category.id },
                            }"
                            >{{ category.name }}</router-link
                        >
                    </li>
                </ul>
            </div>
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
            categoriesList: [],
        };
    },
    methods: {
        getPosts() {
            const category = this.$route.query.category;

            window.axios
                .get("api/posts", { params: { category } })
                .then((resp) => {
                    this.postList = resp.data;
                });
        },
        getCategories() {
            window.axios.get("/api/category").then((resp) => {
                this.categoriesList = resp.data;
            });
        },
    },

    mounted() {
        this.getPosts();
        this.getCategories();
    },
};
</script>

<style></style>
