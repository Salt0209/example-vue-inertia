import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/vue2'

createInertiaApp({
    resolve: name => {
        const page = require(`./Pages/${name}`).default;

        return {
            ...page,
            layout: page.layout || require('./Layout/master.vue').default,
        };
    },
    setup({ el, App, props, plugin }) {
        Vue.use(plugin)

        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
})
