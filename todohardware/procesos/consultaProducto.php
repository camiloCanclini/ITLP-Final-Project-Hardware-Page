<?php

include('conexion.php');
$enlace = conexionBD();
$sql = 'SELECT * FROM stock WHERE codigo='.$_GET['id'];

function consulta($sql, $enlace){

	mysqli_set_charset($enlace, "utf8"); //formato de datos utf8

    if(!$result = mysqli_query($enlace, $sql)) die(); //si la conexión cancelar programa

    $rawdata = array(); //creamos un array

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;

    while($row = mysqli_fetch_array($result))
    {
        $rawdata[$i] = $row;
        $i++;
    }

    //disconnectDB($enlace); //desconectamos la base de datos

    return $rawdata; //devolvemos el array
}

        $myArray = consulta($sql, $enlace);
        $resultado = json_encode($myArray);
        echo $resultado;

        header('Location: product.php?=id'.$_GET['id']);
		
?>