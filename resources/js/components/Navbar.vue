<template>
    <div class="container-fluid bg-dark">
        <nav class="container navbar navbar-expand-sm navbar-dark">
            <router-link class="navbar-brand" to="/">Home</router-link>

            <div
                class="d-flex justify-content-between flex-grow-1 align-items-center"
            >
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <router-link
                                class="nav-link"
                                :to="{ name: 'contacts' }"
                            >
                                Contatti
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link
                                class="nav-link"
                                :to="{ name: 'about' }"
                                >About</router-link
                            >
                        </li>
                        <li class="nav-item">
                            <router-link
                                class="nav-link"
                                :to="{ name: 'posts.show' }"
                                >All Posts</router-link
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    <a class="navbar-brand" href="/login">Dashboard</a>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Navbar",
};
</script>

<style></style>
