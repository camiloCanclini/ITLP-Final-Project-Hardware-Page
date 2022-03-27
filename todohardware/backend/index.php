
<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
	<head>
		<!-- METAS Y LINKS -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>PAGINA TODOHARDWARE CANCLINI CAMILO</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap (ADAPTAR LA PAGINA PARA DISPOSITIVOS MOVILES)-->
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<!-- Slick (TE PERMITE HACER EL EFECTO "SLICE" CON LAS IMAGENES )-->
		<link type="text/css" rel="stylesheet" href="../css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="../css/slick-theme.css"/>

		<!-- nouislider (TE PERMITE USAR PANTALLAS TACTILES)-->
		<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css"/>

		<!-- Font Awesome Icon (IMPORTA ICONOS)-->
		<link rel="stylesheet" href="../css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="../css/mystyles.css"/>
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
    <!-- BODY -->
	<body>

		<!-- CONEXION -->
		<?php include '../procesos/conexion.php'; ?>
		<!-- /CONEXION -->
        
		<header>

			<!-- TOP HEADER -->
			<div id="top-header" class="nav">
				<div class="container-fluid">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>+54 9 2914272489</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i>ccanclini@obralapiedad.com.ar</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Instituto Tecnico La Piedad</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container-fluid text-center ">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3 col-pl-3">
							<div class="float-start">
								<a href="index.php" class="logo">
									<img src="../img/logo.png" alt="LOGO DE TODO HARDWARE" width="300">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- TITULO HEADER -->
						<div class="col-md-6 row align-items-center">
                            <h1 class=" fw-bolder text-light p-2 bd-highlight">BACKEND TODOHARDWARE</h1>
                        </div>
						<!-- /TITULO HEADER -->

                        <!-- LOGO -->
						<div class="col-md-3 col-pl-3">
							<div class="float-end">
								<a href="index.php" class="logo">
									<img src="../img/logo.png" alt="LOGO DE TODO HARDWARE" width="300">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->


		<div class="section">
			<div class="container bg-dark p-5">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="container-fluid text-center">
				<div class="input-group p-3">
					<i class="fa fa-user icons bg-primary" aria-hidden="false"></i>
					<input type="text" name="usuario" placeholder="Usuario" class="form-control">
				</div>

				<div class="input-group p-3">
					<i class="fa fa-lock icons bg-primary" aria-hidden="false"></i>
					<input type="password" name="password" placeholder="Contraseña" class="form-control">
				</div>
				<button type="submit" name="submit" class="btn-lg btn-primary my-2">Ingresar</button>
				</form>
			</div>
  		</div>

		<!-- SECTION -->
		
			<!-- <div class="section">
				<div class="container">
					<div class="d-grid gap-2">
						<button class="btn-lg btn-primary" type="button">ADMINISTRADOR</button>
						<button class="btn-lg btn-primary" type="button">ATENCION AL CLIENTE</button>
						<button class="btn-lg btn-primary" type="button">GERENTE DE VENTAS</button>
						<button class="btn-lg btn-primary" type="button">DESPACHADOR</button>
						<button class="btn-lg btn-primary" type="button">TECNICO</button>
					</div>
				</div>
			</div> -->
			
		<!-- /SECTION -->
		
        <!-- FOOTER Y EMAILFINAL -->
		
		<!-- /FOOTER Y EMAILFINAL -->
		


		<!-- jQuery Plugins -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/slick.min.js"></script>
		<script src="../js/nouislider.min.js"></script>
		<script src="../js/jquery.zoom.min.js"></script>

	</body>
</html>
