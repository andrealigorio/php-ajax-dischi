Vue.config.devtools = true;
var app = new Vue({
    el: "#app",
    data: {
        cards: {},
        authors: [],
        selected: "All"
    },
    methods: {
        authorArray() {
            this.cards.forEach(element => {
                if(!this.authors.includes(element)) {
                    this.authors.push(element.author);
                }
            });
        },
        authorsFilter() {
            axios
                .get(`${window.location.protocol}//${window.location.hostname}${window.location.port}/php-ajax-dischi/server.php/?author=${this.selected}`)
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
            .get(`${window.location.protocol}//${window.location.hostname}${window.location.port}/php-ajax-dischi/server.php`)
            .then((response) => {
                this.cards = response.data;
                this.authorArray();
            });
    }
});