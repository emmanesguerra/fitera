/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key:Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('filters', require('./components/Filters.vue').default);
Vue.component('plists', require('./components/Lists.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

if ($('#app').length) {
    app = new Vue({
        el: '#app',
        data: {
            sizes: [
                {
                    'id':'11',
                    'name':'3" x 7"',
                    'display':2
                },
                {
                    'id':'12',
                    'name':'2" x 5"',
                    'display':1
                },
                {
                    'id':'13',
                    'name':'24" x 55"',
                    'display':0
                },
                {
                    'id':'14',
                    'name':'10" x 15"',
                    'display':0
                },
                {
                    'id':'15',
                    'name':'70" x 100"',
                    'display':0
                },
                {
                    'id':'16',
                    'name':'100" x 60"',
                    'display':0
                }
            ],
            model: {
                loc: 'North Edsa Station',
                title: 'Roof deck',
                size: '50ft x 30ft',
                vicinity: "Farmer's Market, Alimall, Araneta Coliseum, Gateway Mall",
                details: "Farmer's Market, Alimall, Araneta Coliseum, Gateway Mall, Farmer's Market, Alimall, Araneta Coliseum, Gateway Mall",
                url: 'roof-deck',
                path: urlpath,
                img: 'edsa-station-pasay.jpg',
                imgpath: imagepath
            },
            listcounter: listcounter
        },
        methods: {
            setListCounter (data) {
                this.listcounter = data.counter;
            }
        }
    });
}


if ($('#audienceblk').length) {
    $('.actv').each(function (index, element) {
        var wp = $(element).parent().width();
        var we = $(element).width();
        var diff = wp - we;
        var leftmargin = diff / 2;
        $(element).css('margin-left', leftmargin + "px");
    });
}