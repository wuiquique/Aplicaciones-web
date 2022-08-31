new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    data () {
      return {
        min: 10,
        max: 80,
        slider: 18,
        dialog: false,
      }
    },
  })