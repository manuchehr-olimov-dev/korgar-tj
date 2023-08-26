import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/worker.css', 
                'resources/css/app.css', 
                'resources/js/app.js', 
                'resources/css/employer-style.css'
            ],
            refresh: true,
        }),
    ],
});
