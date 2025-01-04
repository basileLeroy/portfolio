import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/animations/text-animations.js',
                // 'resources/js/animations/transitions.js',
                // 'resources/js/components/accordion.js',
                'resources/js/components/slider.js',
            ],
            refresh: true,
        }),
    ],
});
