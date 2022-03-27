
			console.log('hola el codigo ajax esta funcionando');

			(function sendRequest(){

				//se crea objeto que guardara las peticiones
				const peticionHttp = new XMLHttpRequest();
					
				//objeto prepara el tipo de peticion y hacia donde la hara
				peticionHttp.open('GET', '../procesos/consultasbasededatos.php', true);
					
				//se codifica la peticion
				// peticionHttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					


				peticionHttp.onreadystatechange= function(){

					if(this.readyState == 4 && this.status == 200){

						//SE GUARDA LA RESPUESTA DEL SERVER EN UN JSON
						var jsontransformado = JSON.parse(this.responseText);
						console.log(jsontransformado);
						
						//Se obtiene el contenido de los ID y se vacia su contenido
						let tabla = document.querySelector('#tabla');

						tabla.innerHTML = '';


						//Se hace un FOR para pintar los objetos del json en el html
						for(let i of jsontransformado){

							//El contenido del ID se pinta con lo siguiente (se usan "comillas especiales")
							console.log(i.nombre);
							tabla.innerHTML += `
							
							<tr>
							<td>${i.codigo}</td>
							<td>${i.nombre}</td>
							<td>${i.marca}</td>
							<td>${i.especificaciones}</td>
							<td>${i.precio}</td>
							<td>${i.cantidad}</td>
							<td><img class="img-thumbnail" width="200px" src="../img/${i.imagen}"></img></td>
							<td>${i.categoria}</td>
							<td>
							<a href="editarproducto.php?id=${i.codigo}" class="btn btn-primary">
							  <i class="fas fa-marker">editar</i>
							</a>
							<a href="borrarproducto.php?id=${i.codigo}" class="btn btn-danger">
							  <i class="far fa-trash-alt">eliminar</i>
							</a>
						  </td>
						</tr>
						  
						  `

						}
						
						
						
						console.log(peticionHttp.responseText);

					}
					
				}
				//fin
				peticionHttp.send();
			})();
				


		



