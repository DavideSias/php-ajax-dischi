new Vue({
    el: '#app',
    data: {
        arrSongs: [],
        urlApi: location.href + 'api.php',
    },
    created() {
        axios.get(this.urlApi)
        .then(axiosResponse => this.arrSongs = axiosResponse.data);
    }
})