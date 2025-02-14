import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/scss/main.scss', 
                'resources/js/bootstrap.js',
                'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '$': 'jQuery',
        }
    },
    build: {
      target: 'esnext',
      chunkSizeWarningLimit: 1600,
    }
});
