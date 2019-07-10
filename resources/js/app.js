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

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$(document).ready(function(){
  // fare questo controllo quando ci dobbiamo agganciare ad un elemento
  // che non è presente dappertutto
  if($('input[name="price"]').length > 0) {
    $('input[name="price"]').keyup(function() {
      var input_value = $(this).val();
      input_value = input_value.replace(',', '.');
      $(this).val(input_value);
    });
  }

  //controllo sul form con id
  // if($('#edit_product_form').length > 0) {
  //   $('#edit_product_form').on('submit', function(event) {
  //     event.preventDefault();
  //     var input_value = $('input[name="price"]').val();
  //     input_value = input_value.replace(',', '.');
  //     $('input[name="price"]').val(input_value);
  //
  //     $(this).unbind('submit');
  //     $(this).submit();
  //   })
  // }
});
