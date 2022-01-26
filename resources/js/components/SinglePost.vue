<template>
    <div class="card">
        <img class="card-img-top" :src="thumb" alt="" />
        <div class="card-body">
            <h4 class="card-title">{{ title }}</h4>
            <p class="card-text">{{ subtitle }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        subtitle: String,
        thumb: String,
    },
};
</script>

<style></style>
