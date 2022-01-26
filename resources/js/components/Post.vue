<template>
    <div class="d-flex" style="gap: 10px">
        <div class="card" style="width: 18rem">
            <img :src="post.thumb" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">{{ post.subtitle }}</p>
            </div>
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
