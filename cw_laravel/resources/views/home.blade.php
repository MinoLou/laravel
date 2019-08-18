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
		<img class='profile-picture' style='margin-top: 10px;' height='200px' src='images/bill_gates.jpg' alt='Usuario'>
		<h2 style='text-align:center;'>Bill Gates</h2>
			<h3 style='text-align:center;'>
				<p>Nombre</p>
				<p>Usuario</p>
				<p>País</p>
				<p>Email</p>
				<P>Tipo de usuario</p>
				<?php var_dump("ML");?>
			</h3>
		</div>
    </div>
</div>
@endsection
