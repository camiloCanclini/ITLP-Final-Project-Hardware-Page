
<html>

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

		<!-- Slick (TE PERMITE HACER EL EFECTO "SLICE" CON LAS IMAGENES )-->
		<link type="text/css" rel="stylesheet" href="../css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="../css/slick-theme.css"/>

		<!-- nouislider (TE PERMITE USAR PANTALLAS TACTILES)-->
		<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css"/>

		<!-- Font Awesome Icon (IMPORTA ICONOS)-->
		<link rel="stylesheet" href="../css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>

<?php include "../procesos/conexion.php"; ?>
<?php include '../layouts/headerabm.php'; ?>

<div class="section"> </div>
<main class="container">
  <div class="row">
    <div class="container">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <H1 class="section text-center">Agregar Componentes</H1>

      <!-- SECCION PARA CREAR NUEVO PRODUCTO -->
      <div class="card card-body ">
        <form action="crearproducto.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control text-center" placeholder="Nombre del Modelo" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="marca" class="form-control text-center" placeholder="Marca del Modelo" autofocus>

          </div>
          <div class="form-group">
            <input type='number' name="precio" class="form-control text-center" placeholder="Precio por Unidad">
          </div>
          <div class="form-group">
            <input name="cantidad" class="form-control text-center" placeholder="Cantidad existente">
          </div>
          <div class="form-group">
            <input name="srcimagen" class="form-control text-center" placeholder="Src imagen">
          </div>
          <div class="form-group">
            <input name="categoria" class="form-control text-center" placeholder="Categoria">
          </div>
          <div class="form-group">
            <textarea name="especificaciones" rows="6" class="form-control text-center" placeholder="Especificaciones del modelo"></textarea>
          </div>
          <input type="submit" name="crear" class="btn btn-success btn-block" value="Crear Producto">
        </form>
      </div>
    </div>

    <H1 class="section text-center">Stock</H1>
    
    <div class="text-center">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre modelo</th>
            <th>Marca</th>
            <th>Especificaciones</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Imagen</th>
            <th>Categoria</th>
            <th>Accion</th>
          </tr>
        </thead>
        <div ></div>
        <tbody id="tabla">
          <!-- ESTE CONTENIDO SE BORRA UNA VEZ INICIADO EL AJAXABMMANI.JS -->
          <?php
          $enlace = conexionBD();
          $query = 'SELECT * FROM stock;';
          $result_tasks = mysqli_query($enlace, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['especificaciones']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><img class="img-thumbnail" width="200px" src="../img/<?php echo $row['imagen']; ?>"></img></td>
            <td>
              <a href="editarproducto.php?id=<?php echo $row['codigo']?>" class="btn btn-primary">
                <i class="fas fa-marker">editar</i>
              </a>
              <a href="borrarproducto.php?id=<?php echo $row['codigo']?>" class="btn btn-danger">
                <i class="far fa-trash-alt">eliminar</i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('../layouts/footerabm.php'); ?>
</body>
<script src="../js/ajaxabmmain.js"></script>
</html>

