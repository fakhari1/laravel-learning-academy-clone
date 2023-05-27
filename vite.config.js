import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/sass/app.scss',
                'resources/assets/sass/admin.scss',
                'resources/assets/js/app.js',
                'resources/assets/js/admin.js',
            ],
            refresh: true,
        }),
    ],

});
