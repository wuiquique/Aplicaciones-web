new Vue({
    el: "#app",
    vuetify: new Vuetify(),
    store: store,
    data() {
        return {
            items: [
                { title: 'Shopping List', icon: 'mdi-view-dashboard', ref: 'sl' },
                { title: 'My Cart', icon: 'mdi-basket', ref: 'cart' },
                { title: 'About', icon: 'mdi-help-box', ref: 'same' },
              ],
        };
    },
    methods: {
        menuRef(ref) {
            if (ref === 'cart') {
                window.location.href = "./pages/cart.html"
            }
            else if (ref === 'sl') {
                window.location.href = "../index.html"
            }
        },
    }
})