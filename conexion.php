<?php
$hostname="localhost:8080";
$username = "root";
$password = "";
$dbname = "hotel";

$conn = mysqli_connect($hostname,$username,$password);
$db = mysqli_connect_db($conn,$dbname);
if (!$conn) {
  echo "Algo salio mal", mysql_error();
  // code...
}else {

  echo "conectado correctamente";
}

if (!$db) {
  echo "no se encontro";
  // code...
}
else {
  echo "seleccionada";
}

 ?>