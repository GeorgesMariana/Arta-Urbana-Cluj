import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "resources/js"),
        },
    },
});
