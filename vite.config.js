import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/js/grocery/app.js', 'resources/js/grocery/grocery.css'],
            refresh: true,
        }),
    ],
});
