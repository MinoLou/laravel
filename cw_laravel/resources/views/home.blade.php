@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">		
		@if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                    <!--¡Estás logueado!-->
		<div class='main-profile'>
		<!--<img class='profile-picture' style='margin-top: 10px;' height='200px' src='images/bill_gates.jpg' alt='Usuario'>-->
		<?php $path = "usuarios/" . $_SESSION['name'] . $_SESSION['surname'] .".bmp";?>
		<img class='profile-picture' style='margin-top: 10px;' height='200px' src='<?php echo $path; ?>' alt='Usuario'>
		<!--<h2 style='text-align:center;'>Bill Gates</h2>-->
			<h3 style='text-align:center;'>
				<p><?php echo $datos_usuario["name"] . " " . $datos_usuario["surname"] ?></p>
				<p><?php echo $datos_usuario["dni"]?></p>
				<p><?php echo $datos_usuario["birthdate"]?></p>
				<p><?php echo $datos_usuario["email"]?></p>
				<p><?php echo "SESION: " . $_SESSION['name'] . "<br>";?></p>
				<p><?php echo "SESION: " . $_SESSION['surname'] . "<br>";?></p>
				<p><?php echo "SESION: " . $_SESSION['dni'] . "<br>";?></p>
				<p><?php echo "SESION: " . $_SESSION['email'] . "<br>";?></p>
				<p><?php echo "SESION: " . $_SESSION['birthdate'] . "<br>";?></p>
				<p><?php echo $path . "<br>";?></p>
				
				
			</h3>
		</div>
    </div>
</div>
@endsection
