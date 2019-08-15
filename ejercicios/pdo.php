
<?php

$dsn = "mysql:dbname=cw_db;host=127.0.0.1;port=3306";
$usuario= "root";
$pass= "root";


try{
  $baseDeDatos = new PDO($dsn, $user, $pass);//INDICA ERROR EN PHP
  $baseDeDatos->setAtributte(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//INDICA ERROR EN SQL
}catch(\Exception $e) {
  echo "Disculpa, tenemos un error de conexión :(";exit;
}




//Conexión a DB en modo de función
//function abrirBaseDeDatos($dsn, $user, $pass) {
 //return new PDO($dsn, $user, $pass);
}

 ?>
