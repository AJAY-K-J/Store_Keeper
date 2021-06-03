require('./bootstrap');


window.Vue = require('vue').default;
window.bus = new Vue();
export const bus = new Vue();




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('dashboard-form', require('./components/storekeeper/dashboardform.vue').default);

Vue.component('add-new-user', require('./components/storekeeper/addnewuser.vue').default);
Vue.component('user-list', require('./components/storekeeper/userlist.vue').default);


Vue.component('add-new-category', require('./components/storekeeper/addcategory.vue').default);
Vue.component('category-list', require('./components/storekeeper/categorylist.vue').default);

Vue.component('add-new-item', require('./components/storekeeper/additem.vue').default);
Vue.component('item-list', require('./components/storekeeper/itemlist.vue').default);

Vue.component('add-new-role', require('./components/storekeeper/addrole.vue').default);
Vue.component('role-list', require('./components/storekeeper/rolelist.vue').default);

Vue.component('add-new-designation', require('./components/storekeeper/adddesignation.vue').default);
Vue.component('designation-list', require('./components/storekeeper/designationlist.vue').default);

Vue.component('add-new-section', require('./components/storekeeper/addsection.vue').default);
Vue.component('section-list', require('./components/storekeeper/sectionlist.vue').default);
/**
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});