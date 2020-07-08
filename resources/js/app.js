require("./bootstrap");

window.Vue = require("vue");
import router from "./router";
import "@fortawesome/fontawesome-free/css/all.css";
import VueClipboard from "vue-clipboard2";
import VueSocialSharing from "vue-social-sharing";

Vue.use(VueSocialSharing);
Vue.use(VueClipboard);

import VueHighlightJS from "vue-highlightjs";
Vue.use(VueHighlightJS);

import MainApp from "./components/MainApp.vue";

new Vue({
    el: "#app",
    components: {
        MainApp
    },
    router
});
