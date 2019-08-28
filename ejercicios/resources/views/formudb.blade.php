<html>
<head>
	<title>Form db</title>
</head>
<body>
	<form class="" action="/escribebase" method="get">
      <div class="form-group">
        <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="apellido" value="" placeholder="Apellido ">
      </div>
	  <div class="form-group">
        <input class="form-control" type="password" name="mandato" value="" placeholder="Mandato ">
      </div>
      <input class="btn btn-success"type="submit" name="enviar" value="Guardar en db">
    </form>
	
	<form class="" action="/modificabase" method="get">
	  <div class="form-group">
        <input class="form-control" type="text" name="nro" value="" placeholder="id">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="apellido" value="" placeholder="Apellido ">
      </div>
	  <div class="form-group">
        <input class="form-control" type="password" name="mandato" value="" placeholder="Mandato ">
      </div>
      <input class="btn btn-success"type="submit" name="enviar" value="Modificar en db">
    </form>
	
	<form class="" action="/borrabase" method="get">
      <div class="form-group">
        <input class="form-control" type="text" name="nro" value="" placeholder="id">
      </div>
      <input class="btn btn-success"type="submit" name="enviar" value="Borrar en db">
    </form>
<body>
</html>
