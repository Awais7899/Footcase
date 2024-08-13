import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/userForm.js", "resources/js/admin/main.js"],
            refresh: true,
        }),
    ],
});
