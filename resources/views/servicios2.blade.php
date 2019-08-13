
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Proyecto</title>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="/css/all.min.css">
    	<link rel="stylesheet" href="/css/styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <header class="page-headerb">
    <div class="page-header-containerb containerb">
      <!--<a id="logo" href="index.php">ConstruWorld</a>-->
	  <a id="logo" href="index.php" style="padding-left: 20px;"><img src="images/C2_t.png" style="max-width:80%; height:auto; " alt="Logo"></a>
      <nav class="main-nav">
        <ul>
          <li><a class="nav-link nav1" href="preguntas">Preguntas Frecuentes</a></li>
          <li><a class="nav-link nav1" href="servicios2">Servicios</a></li>
        </ul>
      </nav>
    </div>
  </header>
<?php//require_once 'header.php';
//require_once 'serviceList.php';
//echo "Variables que deberian no estar seteadas: "; echo $_SESSION["nombre"];echo $_SESSION["email"];
?>

<!-- Servicios -->
<div class="containerb" >
  <div class="servicios-list" style="margin-top: 20px;">
  <!-- Los servicios -->
  <?php foreach ($serviceList as $oneService) : ?>
    <div class="card-body" style="margin-bottom: 20px;">
    	<p class= "" style="font-size: 20px;"><?= $oneService['title'] ?></p>
      <div class="construction-icons">
        <i class="fa fa-<?=$oneService['icon']?>"></i>
		<i class="fa fa-hard-hat"></i>
      </div>
    	<p class="card-text"><?= substr($oneService['description'], 0, 150) ?>...</p>
      <a href="profesiones.php?profesion=<?= $oneService['profesion'] ?>">Ver mas</a>
  	</div>
  <?php endforeach; ?>
  </div>
</div>

  <!--</div>-->
  <footer class="page-footer">
    <div class="containerb">
			<br>
		  <p class="footer-legend">Copyright 2019 - The Bill Gates Group @ Digital House Lima.</p>
      <p>Podés contactarnos <a href="contacto.php"> aquí </a></p>
	   </div>
   </footer>
  </body>
</html>
