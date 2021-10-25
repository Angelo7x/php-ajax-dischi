var app = new Vue({
    el: '#app',
    data: {
        albums: null
    },
    created() {
		axios.get('http://localhost/php-ajax-dischi/api/index.php',{
			params: {
			  action: "albums"
			}
		  }
		)
		.then((response) => {
			// handle success
			this.albums = response.data;
		})
		.catch(function (error) {
			// handle error
			console.log(error);
		});
    }
  });