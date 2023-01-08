import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/css/Header/header.css',
                    'resources/css/Tasks/tasklist.css',
                    'resources/js/app.js',
                    'resources/js/functional/Tasks/tasks.js',
                    'resources/js/functional/Tasks/taskList.js',
                    'resources/js/functional/Header/header.js',
                ],
            refresh: true,
        }),
    ],
});
