console.log('hola el codigo ajax esta funcionando');

(function sendRequest(){

	//se crea objeto que guardara las peticiones
	const peticionHttp = new XMLHttpRequest();
		
	//objeto prepara el tipo de peticion y hacia donde la hara

	peticionHttp.open('GET', 'product.php', true);
	console.log(this.responseText);
			
	//se codifica la peticion
	// peticionHttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

	peticionHttp.onreadystatechange= function(){

		if(this.readyState == 4 && this.status == 200){

			//SE GUARDA LA RESPUESTA DEL SERVER EN UN JSON
			var jsontransformado = JSON.parse(this.responseText);
			console.log(jsontransformado);

			//Se hace un FOR para pintar los objetos del json en el html
			for(let i of jsontransformado){

			}
		}
		
	}
	//fin
	peticionHttp.send();
})();
	






