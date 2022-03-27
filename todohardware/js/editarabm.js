
			console.log('hola el codigo ajax esta funcionando');

			(function sendRequest(){

				//se crea objeto que guardara las peticiones
				const peticionHttp = new XMLHttpRequest();
					
				//objeto prepara el tipo de peticion y hacia donde la hara
				peticionHttp.open('GET', '../abm/abmmain.php', true);
					
				//se codifica la peticion
				// peticionHttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					


				peticionHttp.onreadystatechange= function(){

					if(this.readyState == 4 && this.status == 200){

						//SE GUARDA LA RESPUESTA DEL SERVER EN UN JSON
						var jsontransformado = JSON.parse(this.responseText);
						console.log(jsontransformado);
						
						//Se obtienen los ID y se guardan en variables
						let nombre = document.querySelector('#nombre');
						let marca = document.querySelector('#marca');
						let precio = document.querySelector('#precio');
						let cantidad = document.querySelector('#cantidad');
						let imagen = document.querySelector('#imagen');
						let categoria = document.querySelector('#categoria');
						let especificaciones = document.querySelector('#especificaciones');

						//Se hace un FOR para pintar los objetos del json en el html
						for(let i of jsontransformado){

							//El contenido del ID se pinta con lo siguiente (se usan "comillas especiales")
							console.log(i.nombre);

							nombre.innerHTML += i.nombre;
							marca.innerHTML += i.marca;
							precio.innerHTML += i.precio;
							cantidad.innerHTML += i.cantidad;
							imagen.innerHTML += i.imagen;
							categoria.innerHTML += i.categoria;
							especificaciones.innerHTML += i.especificaciones;

						  

						}
						
						
						
						console.log(peticionHttp.responseText);

					}
					
				}
				//fin
				peticionHttp.send();
			})();
				
		



