Vue.config.devtools = true;
var app = new Vue({
    el: "#app",
    data: {
        windowLocation: `${window.location.protocol}//${window.location.hostname}:${window.location.port}/php-ajax-dischi`,
        cards: {},
        authorsList: [],
        selected: "All"
    },
    methods: {
        authorArray() {
            axios
                .get(`${this.windowLocation}/server.php/?authorsList=true`)
                .then((response) => {
                    this.authorsList = response.data;
                    this.authorsList.sort();
                })
        },
        authorsFilter() {
            axios
                .get(`${this.windowLocation}/server.php/?author=${this.selected}`)
                .then((response) => {
                    response.data.forEach(element => {
                        if(this.selected == "All") {
                            this.cards = response.data;
                        } else if(this.selected == element.author) {
                            this.cards = response.data;
                        }
                    })
                });
        }
    },
    mounted() {
        axios
            .get(`${this.windowLocation}/server.php`)
            .then((response) => {
                this.cards = response.data;
                this.authorArray();
            });
    }
});