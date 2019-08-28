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

        <!-- Styles -->
        <style>
		
		<!-- inicio style original -->
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			<!-- fin style original-->
        </style>
    </head>
    <body>
        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarme</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>-->
    <header class="page-headerb">
    <div class="page-header-containerb containerb">
      <!--<a id="logo" href="index.php">ConstruWorld</a>-->
	  <a id="logo" href="index.php" style="padding-left: 20px;"><img src="images/C2_t.png" style="max-width:80%; height:auto; " alt="Logo"></a>
      <nav class="main-nav">
        <ul>
		<div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarme</a>
                        @endif
                    @endauth
                </div>
          <!--<li><a class="nav-link nav1" href="preguntas">Preguntas Frecuentes</a></li>
          <li><a class="nav-link nav1" href="servicios2">Servicios</a></li>-->
        </ul>
      </nav>
    </div>
  </header>

<!--<div class="containerb">-->


<div class="containerb">
	<label>Pais de nacimiento:</label>
	<select name="country" class="form-control">
		<option value="">Elegí un país</option>
	</select>

</div>

<!--</div>-->
<script>
	var selectPaises = document.querySelector('[name=country]');

console.log('hay script');

fetch('https://restcountries.eu/rest/v2/all')
	.then(function (response) {
		return response.json();
	})
	.then(function (data) {	
		for (var pais of data) {
			//selectPaises.innerHTML += `<option value="${pais.alpha2Code}">${pais.name}</option>`;
			selectPaises.innerHTML += '<option>' + pais.name + '</option>';
			console.log(pais.name);
			//console.log (selectPaises.innerHTML);
		}
		console.log (selectPaises.innerHTML);
	})
	.catch(function (error) {
		console.log(error);
	});
</script>

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
