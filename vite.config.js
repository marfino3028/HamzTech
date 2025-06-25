import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',
        hmr: {
            host: 'hamztech.my.id', // Ensure HMR uses your domain
        },
    },
    build: {
    outDir: 'public/assets',
    emptyOutDir: true,
    manifest: true,
  },
});