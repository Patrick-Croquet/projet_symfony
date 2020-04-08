/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
import Vue from 'vue';
import App from './components/App';
import AppHeader from './components/AppHeader';
import Carousel from './components/Carousel';
import Headings from './components/Headings';
import AppFooter from './components/AppFooter';

// any CSS you import will output into a single css file (app.css in this case)
//import '../css/app.css';

import '../css/app.scss';

new Vue({
    el: '#app',
    components: {App, AppHeader, Carousel, Headings, AppFooter}
});

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
//import $ from 'jquery';

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
