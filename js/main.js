Vue.config.devtools = true;
var app = new Vue({
    el: "#app",
    data: {
        cards: {},
        selected: "All"
    },
    mounted() {
        axios
        .get(`${window.location.protocol}//${window.location.hostname}${window.location.port}/php-ajax-dischi/server.php`)
        .then((response) => {
            this.cards = response.data;
            });
    }
});