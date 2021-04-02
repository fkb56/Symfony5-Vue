import Vue from 'vue'
import Router from 'vue-router'
import Index from '../pages/Index';
import Hello from "../pages/Hello";

Vue.use(Router);

export default new Router({
	routes: [
		{
			path: '/',
			name: 'Index',
			component: Index
		},
		{
			path: '/hello',
			name: 'Hello',
			component: Hello
		}
	]

})