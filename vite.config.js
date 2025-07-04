import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { resolve } from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    base: 'https://mail.tecnoweb.org.bo/inf513/grupo23sc/proyecto2/public/built/public/build',
    resolve: {
        alias: {
          '@': resolve(__dirname, 'resources/js'),
        },
      },
});
