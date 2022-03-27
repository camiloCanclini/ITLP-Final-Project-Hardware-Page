let baseURL = "http://localhost/todohardware/procesos/consultasbasededatos.php";
let listaCategoria = [];
function getParams(elemento){
	let url = baseURL;
	if (elemento.checked){
		listaCategoria.push(elemento.id);
	}else{
		const index = listaCategoria.indexOf(elemento.id);
		if (index > -1) {
		  listaCategoria.splice(index, 1);
		}
	}
	
	let tipoParametro = elemento.parentNode.parentNode.id;
	console.log(tipoParametro);
	let cat = null;
	if (tipoParametro === "categorias" && listaCategoria.length > 0){
		 cat = "categorias=" + listaCategoria.join(",");
	}

	if(cat !== null){
		url = url + "?" + cat;
		console.log(url);
	}
		console.log(url);
	
	sendRequest1(url);
	
};	

function sendRequest1(url){	


	//se crea objeto que guardara las peticiones
	const peticionHttp = new XMLHttpRequest();
		
	//objeto prepara el tipo de peticion y hacia donde la hara
	peticionHttp.open('GET',url, true);
		
	//se codifica la peticion
	// peticionHttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		


	peticionHttp.onreadystatechange= function(){

		if(this.readyState == 4 && this.status == 200){

			//SE GUARDA LA RESPUESTA DEL SERVER EN UN JSON
			var jsontransformado = JSON.parse(this.responseText);
			console.log(jsontransformado);

			//Se obtiene el contenido de los ID y se vacia su contenido
			let producto = document.querySelector('#producto');

			producto.innerHTML = '';


			//Se hace un FOR para pintar los objetos del json en el html
			for(let i of jsontransformado){

				//El contenido del ID se pinta con lo siguiente (se usan "comillas especiales")
			
				console.log('hola buenas');
			
				producto.innerHTML += `
				
					<div class="col-md-4 col-xs-6">
						<div class="product"><a href="product.php?id=${i.codigo}">
							<div class="product-img">
								<img src="./img/${i.imagen}"alt="">
							</div>
							<div class="product-body">
								<p class="product-category"> ${i.categoria} </p>
								<h3 class="product-name"><a href="#"> ${i.nombre} </a></h3>
								<h3 class="product-name"> ${i.marca}</h3>
								<h5 class="product-price"> ${i.precio} </h5>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</a></div>
					</div>
					
				`

			}
		}
		
	}
	//fin
	peticionHttp.send();
}


