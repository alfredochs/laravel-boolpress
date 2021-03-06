import Vue from "vue";
import VueRouter from "vue-router";

import Home from "./pages/Home.vue";
import Contacts from "./pages/Contacts.vue";
import About from "./pages/About.vue";
import PostShow from "./pages/posts/Show.vue";
import CategoryShow from "./pages/categories/CategoryShow.vue";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/contatti",
            name: "contacts",
            component: Contacts,
        },
        {
            path: "/su-di-noi",
            name: "about",
            component: About,
        },
        {
            path: "/posts/:id",
            name: "posts.show",
            component: PostShow,
        },
        {
            path: "/category/:id",
            name: "category.show",
            component: CategoryShow,
        },
    ],
});

export default router;
