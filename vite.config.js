import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD

=======
import tailwindcss from '@tailwindcss/vite'
>>>>>>> 7d2b23a1696d7efb6f5dc144c7161346044c3418
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
