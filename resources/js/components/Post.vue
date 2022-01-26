<template>
    <div class="d-flex col" style="gap: 10px">
        <div class="card" style="width: 18rem">
            <router-link :to="{ name: 'posts.show', params: { id: post.id } }">
                <!-- <router-link :to="'/posts/' + post.id"> -->
                <img :src="post.thumb" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">{{ post.title }}</h5>
                    <p class="card-text">{{ post.subtitle }}</p>
                </div>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "Post",
    props: {
        post: {
            type: Object,
            require: true,
        },
    },
};
</script>

<style></style>
