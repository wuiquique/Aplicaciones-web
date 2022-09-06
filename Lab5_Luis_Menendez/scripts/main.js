new Vue({
    el: "#app",
    vuetify: new Vuetify(),
    data() {
        return {
            items: [
                { title: 'Shopping List', icon: 'mdi-view-dashboard' },
                { title: 'My Cart', icon: 'mdi-image' },
                { title: 'About', icon: 'mdi-help-box' },
              ],
        };
    }
})