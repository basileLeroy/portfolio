import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    resolve: {
        alias: {
            jquery: 'jquery/dist/jquery.min.js',
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/animations/text-animations.js',
                'resources/js/animations/transitions.js',
                'resources/js/lightbox/init.js',
            ],
            refresh: true,
        }),
    ],
});
