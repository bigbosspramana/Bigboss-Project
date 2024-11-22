import { build, defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: './',
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/img/img1.png',
                'resources/img/img-self2.jpg',
                'resources/img/img-self1.jpg',
                'resources/img/aset1.png',
                'resources/img/aset2.png',
                'resources/img/calends.jpg',
                'resources/img/devforge.jpg',
                'resources/img/gdsc.jpg',
                'resources/img/lk21.jpg',
                'resources/img/oweek.jpg',
                'resources/img/project1.png',
                'resources/img/project2.png',
                'resources/img/project3.png',
                'resources/img/project4.png',
                'resources/img/smart-mirror.jpg',
                'resources/img/topup-shop.jpg',
                'resources/img/calends.jpg',
                'resources/img/devforge.jpg',
                'resources/img/gdsc.jpg',
                'resources/img/lk21.jpg',
                'resources/img/oweek.jpg',
                'resources/img/project1.png',
                'resources/img/project2.png',
                'resources/img/project3.png',
                'resources/img/project4.png',
                'resources/img/smart-mirror.jpg',
                'resources/css/dashboard.css',
                'resources/css/app.css',
                'resources/css/reset.css',
            ],
            refresh: true,
        }),
    ],
});
