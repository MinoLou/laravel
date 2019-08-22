@extends('layouts.apps')

@section('content')
<div class="containerb" >
    <?php 
    if(isset($_SESSION['name'])){
		echo "Iniciaste sesión como: " . $_SESSION['name'] . " " . $_SESSION['surname'] . " <br>DNI: " . $_SESSION['dni'] . " <br>Correo: " . $_SESSION['email'] . " ";
	} else echo "No iniciaste sesión";
	?>
  
   <div class="servicios-list" style="margin-top: 20px;">
  <!-- Los servicios -->
  <?php 
  $counter = 0;
  foreach ($profesionales as $clave) : ?>
    <div class="card-body" style="margin-bottom: 20px;">
    	<p class= "" style="font-size: 20px;"><?= $profesionales[$counter]['name'] . " " . $profesionales[$counter]['surname'] ?></p>
		<img src="<?php echo "/usuarios/" . $profesionales[$counter]['name'] . $profesionales[$counter]['surname'] . "." .$profesionales[$counter]['ext']; ?>" height="60px" style="border-radius: 50%;" alt= "Imagen" >
		<p class="card-text"><?= substr($profesionales[$counter]['barrio'], 0, 150) ?>...</p>
		<a href="">Contratar</a>
	</div>
  <?php $counter++; endforeach; ?>
  </div>
</div>
@endsection
