import Vue from "vue";
import VueRouter from "vue-router";

import Home from "./pages/Home.vue";
import Contacts from "./pages/Contacts.vue";
import About from "./pages/About.vue";

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
    ],
});

export default router;
