<?php
//SE REALIZA LA CONEXION CON LA BASE DE DATOS
include 'conexion.php';

//CONSULTAS GUARDADAS COMO STRINGS EN VARIABLES
$sql='SELECT * FROM stock;';

if (isset($_GET['categorias'])){

    $categorias = $_GET['categorias'];
    $catParts =  explode(",", $categorias);
    $sql = "SELECT * FROM stock WHERE categoria = ";

     if(count($catParts) == 1){

            //echo "hola bro";
            $sql = "SELECT * FROM stock WHERE categoria =".$catParts[0].";";
            
        }else{

            //echo "hola bro2";
             for($i=0;$i!=count($catParts);$i++){

                if($i==0){

                    $sql .= $catParts[0];

                }else{
               
                    $sql .= " OR categoria = " . $catParts[$i];        
                    
                    }
                }

                $sql .= ";";

                echo $sql;

            }
   
}

if (isset($_GET['buscador'])){

    $categorias = $_GET['categorias'];
    
   
}

//echo $sql;

//CONSULTA SQL -> JSON
function consultaJsonStock($sql){
    //Creamos la conexión con la función anterior
     $enlace = conexionBD();

    //generamos la consulta

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

        $myArray = consultaJsonStock($sql);
        $resultado = json_encode($myArray);
        echo $resultado;
?>