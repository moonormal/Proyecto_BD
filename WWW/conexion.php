<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDatos="renta";

    $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDatos);
    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }

    $vehicle_rental_id =$_POST["vehicle_rental_id"];
    $date_from=$_POST["date_from"];
    $date_to=$_POST["date_to"];
    $reg_number=$_POST["reg_number"];
    $customer_id=$_POST["customer_id"];
    $rental_status_code='0';

    $insertarDatos2 = "INSERT INTO vehicle_rentals VALUES('$vehicle_rental_id',
                                                        '$date_from',
                                                        '$date_to',
                                                        '$reg_number',
                                                        '$customer_id',
                                                        '$rental_status_code')";
    $ejecutarInsertar2 = mysqli_query($enlace,$insertarDatos2);

    if(!$ejecutarInsertar2){
        echo"Error En  linea sql";
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="car.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Automax</title>
</head>
<body>
    <h1>Datos recibidos! pronto te enviaremos un correo electrónico:)</h1>
    <hr>
    <br>
    <a href="index.html">Volver a la página inicial</a>
</body>
</html>