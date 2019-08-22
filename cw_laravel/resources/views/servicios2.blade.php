@extends('layouts.app')

@section('content')
<div class="containerb" >
    <?php session_start();
    if(isset($_SESSION)){
		echo "Iniciaste sesión como: " . $_SESSION['name'] . " " . $_SESSION['surname'] . " <br>DNI: " . $_SESSION['dni'] . " <br>Correo: " . $_SESSION['email'] . " ";
	} else echo "No iniciaste sesión";
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
      <a href="/<?= $oneService['profesion'] ?>">Ver mas</a>
  	</div>
  <?php endforeach; ?>
  </div>
</div>
@endsection
