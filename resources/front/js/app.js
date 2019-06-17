import Vue from 'vue'

require('./bootstrap')

window.Vue = Vue




let app = new window.Vue({
  el: '#app'
})
