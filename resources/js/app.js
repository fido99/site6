/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('owl.carousel');
require('jquery');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('slider-component', require('./components/SliderComponent.vue').default);
Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('body-component', require('./components/BodyComponent.vue').default);
Vue.component('search-component', require('./components/SearchComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

$(document).ready(function() {
 	$(".owl-carousel").owlCarousel({
 		items: 1,
 		autoplay: true,
 		autoplayTimeout: 5000,
 		loop: true
 	});
});

const app = new Vue({
    el: '#app',
    data: {
      isFormActive: false,
      phone: "",
      isSend: true,
      formText: "Заказать звонок"

    },
    methods: {
    	show() {
    		this.isFormActive = !this.isFormActive;
    	},
    	fetch(event) {
    		axios("/admin/send", {params: {"phone": this.phone}})
    		.then((response) => {
    			this.isSend = !this.isSend;
    			this.formText = "Письмо отправлено";
    		})
    		.catch((err) => {
    			console.log("error");
    		}) 
    		 
    	}
    }
});


 