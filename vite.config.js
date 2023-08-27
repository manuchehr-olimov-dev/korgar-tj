import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/main.css', 
                'resources/css/worker.css', 
                'resources/css/responsive.css', 
                'resources/css/employer.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
