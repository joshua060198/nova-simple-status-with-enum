Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-simple-status-with-enum', require('./components/IndexField'))
  Vue.component('detail-nova-simple-status-with-enum', require('./components/DetailField'))
  Vue.component('form-nova-simple-status-with-enum', require('./components/FormField'))
})
