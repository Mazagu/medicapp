require('./bootstrap');
require('alpinejs');

window.cima = () => {
	return {
		getDrug: (id) => {
			document.querySelector("#loader").classList.remove("hidden");
			fetch('cima/' + id)
			.then(response=> {
				if (!response.ok) alert(`Something went wrong: ${response.status} - ${response.statusText}`)
				return response.text();
			})
			.then(response => {
				document.querySelector("#drug-modal-container").innerHTML = response;
			})
			.finally(() => {
            	document.querySelector("#loader").classList.add("hidden");
			});
		}	
	}
}