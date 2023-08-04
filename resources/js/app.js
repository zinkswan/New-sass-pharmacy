/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import {createRouter, createWebHistory} from 'vue-router';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});


import addProduct from './components/addProduct.vue';
import ProductList from './components/ProductList.vue';
import editProduct from './components/editProduct.vue';
import navbar from "./components/navbar/nav.vue";
app.component('addProduct', addProduct);
app.component('editProduct', editProduct);
app.component('ProductList', ProductList);
app.component("navbar", navbar);

const routes=[
    {path: "/productList", component: ProductList},
    {path: "/addproduct", component: addProduct},
    {path: "/editProduct/:id", component: editProduct},
]

const router= createRouter({history:createWebHistory(),routes});
app.use(router);

app.mount('#app');