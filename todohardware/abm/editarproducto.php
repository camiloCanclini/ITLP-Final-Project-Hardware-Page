<!-- BACKEND -->
  <?php
  include("../procesos/conexion.php");

    $enlace=conexionBD();

    $nombre = '';
    $marca = '';
    $cantidad = '';
    $precio = '';
    $imagen = '';
    $categoria = '';
    $especificaciones = '';

  if  (isset($_GET['id'])) {
    $codigo = $_GET['id'];
    $query = "SELECT * FROM stock WHERE codigo=$codigo";
    $result = mysqli_query($enlace, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);

      $nombre = $row['nombre'];
      $marca = $row['marca'];
      $cantidad = $row['cantidad'];
      $precio = $row['precio'];
      $imagen = $row['imagen'];
      $categoria = $row['categoria'];
      $especificaciones = $row['especificaciones'];
      
    }
  }

  if (isset($_POST['editar'])) {

    $codigo = $_GET['id'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $categoria = $_POST['categoria'];
    $especificaciones = $_POST['especificaciones'];

    $query = "UPDATE stock set nombre = '$nombre', marca = '$marca', cantidad = '$cantidad', precio = '$precio', imagen = '$imagen', categoria = '$categoria', especificaciones = '$especificaciones' WHERE codigo=$codigo";
    mysqli_query($enlace, $query);
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: abmmain.php');
  }

  ?>
<!-- /BACKEND -->

<!-- FRONTEND -->
  <html>
    
    <head>
      <title>PRUEBA ESTRUCTURA DOM</title>
      <!-- METAS Y LINKS -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
    </head>

    <body>
      <?php include('../layouts/headerabm.php'); ?>
      
      <div class="section"></div>

        <div class="container" id="editar">

          <div class="card card-body ">
              <form action="editarproducto.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="form-group">
                  <input type="text" name="nombre" class="form-control text-center" placeholder="Nombre del Modelo" autofocus id="nombre" value="<?php echo $nombre; ?>"></input>
                </div>
                <div class="form-group">
                  <input type="text" name="marca" class="form-control text-center" placeholder="Marca del Modelo" autofocus id="marca" value="<?php echo $marca; ?>"></input>
                </div>
                <div class="form-group">
                  <input type='number' name="precio" class="form-control text-center" placeholder="Precio por Unidad" id="precio" value="<?php echo $precio; ?>"></input>
                </div>
                <div class="form-group">
                  <input name="cantidad" class="form-control text-center" placeholder="Cantidad existente" id="cantidad" value="<?php echo $cantidad; ?>"></input>
                </div>
                <div class="form-group">
                  <input name="imagen" class="form-control text-center" placeholder="Src imagen" id="imagen" value="<?php echo $imagen; ?>"></input>
                </div>
                <div class="form-group">
                  <input name="categoria" class="form-control text-center" placeholder="Categoria" id="categoria" value="<?php echo $categoria; ?>"></input>
                </div>
                <div class="form-group">
                  <textarea name="especificaciones" rows="8" class="form-control text-center" placeholder="Especificaciones del modelo" id="especificaciones"><?php echo $especificaciones; ?></textarea>
                </div>
                <div class="text-center">
                  <button class="btn-success btn-lg" name="editar">
                  ACTUALIZAR DATOS
                  </button>
                </div>
              </form>
            </div>
        </div>

      </div>
      
    </body>

    <script src="../js/editarabm.js"></script>

  </html>
<!-- /FRONTEND -->

