import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/lib/lightbox/css/lightbox.min.css",
                "resources/lib/owlcarousel/assets/owl.carousel.min.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
