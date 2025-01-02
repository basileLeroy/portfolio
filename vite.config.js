import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/animations/text-animations.js',
                'resources/js/components/accordion.js',
            ],
            refresh: true,
        }),
    ],
});
