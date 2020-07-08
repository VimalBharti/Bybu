import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

// Components
import Home from "./components/Home";
import Join from "./components/Join";
import About from "./components/About";
import Category from "./components/Category";

const routes = [
    {
        path: "/",
        component: Home,
        name: "Home"
    },
    {
        path: "/join",
        component: Join,
        name: "Join"
    },
    {
        path: "/about",
        component: About,
        name: "About"
    },
    {
        path: "/categories",
        component: Category,
        name: "Category"
    }
];

const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
