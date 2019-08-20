@extends('layouts.apps')

@section('content')
<div class="containerb" >
    <?php 
    session_start();
    if(isset($_SESSION['name'])){
		echo "DATOS SESION: " . $_SESSION['name'] . " " . $_SESSION['surname'] . " " . $_SESSION['dni'] . " " . $_SESSION['email'] . " ";
	} else echo "No hay variables de sesión";
	?>
  <div class="servicios-list" style="margin-top: 20px;">
  <!-- Los servicios -->
  <?php foreach ($serviceList as $oneService) : ?>
    <div class="card-body" style="margin-bottom: 20px;">
    	<p class= "" style="font-size: 20px;"><?= $oneService['title'] ?></p>
      <div class="construction-icons">
        <i class="fa fa-<?=$oneService['icon']?>"></i>
      </div>
    	<p class="card-text"><?= substr($oneService['description'], 0, 150) ?>...</p>
      <a href="profesiones.php?profesion=<?= $oneService['profesion'] ?>">Ver mas</a>
  	</div>
  <?php endforeach; ?>
  </div>
</div>
@endsection
