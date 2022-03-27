<!DOCTYPE html>
<html>
<head>
	<!-- METAS Y LINKS -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>CARRITO</title>
	<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap (ADAPTAR LA PAGINA PARA DISPOSITIVOS MOVILES)-->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick (TE PERMITE HACER EL EFECTO "SLICE" CON LAS IMAGENES )-->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider (TE PERMITE USAR PANTALLAS TACTILES)-->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon (IMPORTA ICONOS)-->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

</head>
<body>
	
	<!-- CONEXION -->
	<?php include 'procesos/conexion.php'; ?>
	<!-- /CONEXION -->

	<!-- HEADER Y NAVIGATION-->
		<?php include 'layouts/header.php'; ?>
	<!-- /HEADER Y NAVIGATION-->

	<div class="section">

			<div class="container text-right">
			
				<button class="btn btn-primary btn-lg">VACIAR CARRITO<br><i class="fa fa-undo"></i></button>
				<a href="checkout.php"><button class="btn btn-primary btn-lg">TRAMITAR PAGO<br><i class="fa fa-credit-card-alt"></i></button></a>
			</div>
		</div>
		
		<div class="container">

			<table class="table-bordered">
				
				<tr>
					<th class="col-md-2 text-center">Nombre</th>
					<th class="col-md-1 text-center" scope="col"> Cantidad </th>
					<th class="col-md-1 text-center" scope="col"> Precio </th>
					<th class="col-md-5 text-center" scope="col"> Descripcion </th>
					<th class="col text-center" scope="col"> Foto </th>
					<th> </th>
				</tr>
				
				<tbody class="container">
					<td class="col-md-2 text-center"> Nombre Del Producto N1 </td>
					<td class="col-md-1 text-center"> 54512315 </td>
					<td class="col-md-1 text-center"> Precio $$$$$$$$$ </td>
					<td class="col-md-4 text-center"> Descripcion Del Componente a Comprar </td>
					<td> <img class="img-thumbnail" src="./img/img01.png"></td>
					<td><button class="btn btn-primary"><i class="fa fa-close"></i></button></td>
				</tbody>

				<tbody class="container">
					<td class="col-md-2 text-center"> Nombre Del Producto N1 </td>
					<td class="col-md-1 text-center"> 54512315 </td>
					<td class="col-md-1 text-center"> Precio $$$$$$$$$ </td>
					<td class="col-md-4 text-center"> Descripcion Del Componente a Comprar </td>
					<td> <img class="img-thumbnail" src="./img/img02.png"></td>
					<td><button class="btn btn-primary"><i class="fa fa-close"></i></button></td>
				</tbody>

			</table>

		</div>
	

	</div>

		<!-- FOOTER Y EMAILFINAL -->
		<<?php include'layouts/footer.php' ?>
		<!-- /FOOTER Y EMAILFINAL -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>											
								
</body>
</html>