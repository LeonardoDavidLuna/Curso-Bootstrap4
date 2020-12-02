<!DOCTYPE html>
<html>
<head>
	<title>Diseño 5</title>
	<meta name="name" content="content">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col">
				<h3>Formularios</h3>
				<form action="archivo.php" method="POST">
					<label for="nombre">Nombre:</label>			<input type="text" 		class="form-control" id="nombre">
					<label for="e-mail">Correo:</label>			<input type="e-mail" 	class="form-control" id="e-mail">
					<label for="tiempo">Fecha:</label>			<input type="datetime" 	class="form-control" id="tiempo">
					<label for="color">Color:</label>			<input type="color"		class="form-control" id="color">
					<label for="edad">Edad:</label>				<input type="number" 	class="form-control" id="edad">
					<label for="contraseña">Contraseña:</label>	<input type="password" 	class="form-control" id="contraseña">
					<label for="recordar"></label><input type="checkbox" class="form-check-input">Recuérdame 
					<br>
					<textarea name="descripcion" cols="60" rows="10"></textarea><br>
					<input type="submit" value="ENVIAR" class="btn btn-info">
				</form>
				<h4>Formulario Horizontal</h4>
				<h3>form-inline</h3>
				<form action="archivo.php" method="POST" class="form-inline">
					<label for="nombre">Nombre:</label>			<input type="text" 		class="form-control" id="nombre">
					<label for="e-mail">Email:</label>			<input type="e-mail" 	class="form-control" id="e-mail">
					<label for="tiempo">Fecha:</label>			<input type="datetime" 	class="form-control" id="tiempo">
					<label for="contraseña">Contraseña:</label>	<input type="password" 	class="form-control" id="contraseña">
					<input type="submit" value="ENVIAR" class="btn btn-info">
				</form>

				<h3>form-check-label más radio y radio-inline</h3>
				<form action="archivo.php" method="POST">
					<label for="nombre">Nombre:</label>			<input type="text" 		class="form-control" id="nombre">
					<label for="e-mail">Email:</label>			<input type="e-mail" 	class="form-control" id="e-mail">
					<label for="tiempo">Fecha:</label>			<input type="datetime" 	class="form-control" id="tiempo">
					<label for="contraseña">Contraseña:</label>	<input type="password" 	class="form-control" id="contraseña">
					<div class="form-check">
						<label for="dos" class="form-check-label">
							<input type="checkbox" class="form-check-input" value="">Opción 1
						</label>
					</div>
					<div class="form-check">
						<label for="dos" class="form-check-label">
							<input type="checkbox" class="form-check-input" value="">Opción 2
						</label>
					</div>
					<div class="form-check">
						<label for="dos" class="form-check-label">
							<input type="checkbox" class="form-check-input" value="">Opción 3
						</label>
					</div>
					<label class="radio-inline"><input type="radio" name="gustos"> Televisión</label>
					<label class="radio-inline"><input type="radio" name="gustos"> Radio</label>
					<label class="radio-inline"><input type="radio" name="gustos"> Internet</label>
					<div class="radio"><label class="radio-inline"><input type="radio" name="gustos"> Celular</label></div>
					<div class="radio"><label class="radio-inline"><input type="radio" name="gustos"> Teléfono</label></div>
					<div class="radio"><label class="radio-inline"><input type="radio" name="gustos"> Computadora</label></div><br>
					<input type="submit" value="ENVIAR" class="btn btn-info">
				</form>
				<h4>select</h4>
				<form action="archivo.php" method="POST">
					<label for="nombre">Nombre:</label>			<input type="text" 		class="form-control" id="nombre">
					<label for="e-mail">Correo:</label>			<input type="e-mail" 	class="form-control" id="e-mail">
					<label for="tiempo">Fecha:</label>			<input type="datetime" 	class="form-control" id="tiempo">
					<label for="color">Color:</label>			<input type="color"		class="form-control" id="color" style="width: 45px">
					<label for="edad">Edad:</label>				<input type="number" 	class="form-control" id="edad">
					<label for="contraseña">Contraseña:</label>	<input type="password" 	class="form-control" id="contraseña">
					<label for="recordar"></label><input type="checkbox" class="form-check-input">Recuérdame 
					<br>
					<textarea name="descripcion" cols="60" rows="10"></textarea>
					<br>
					<select name="dias">
						<option value="lunes">Lunes</option>
						<option value="martes">Martes</option>
						<option value="miercoles">Miércoles</option>
						<option value="jueves">Jueves</option>
						<option value="viernes">Viernes</option>
					</select>
					<br>
					<input type="submit" value="ENVIAR" class="btn btn-info">
				</form>

			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h3>Carousel</h3>
				<div id="demo" class="carousel slide" data-ride="carousel">
					<!-- INDICADORES (Miniaturas o indicaduras de posición de imágenes -->
					<ul class="carousel-indicators">
						<li data-target="demo" data-slider-to="0" class="active"></li>
						<li data-target="demo" data-slider-to="1"></li>
						<li data-target="demo" data-slider-to="2"></li>
					</ul>
					<!-- IMÁGENES -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/wall1.jpg" class="img-fluid w-100">
							<div class="carousel-caption">
								<h3>PRIMER TÍTULO</h3>
								<p>Descripción de la imagen</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/wall2.jpg" class="img-fluid w-100">
							<div class="carousel-caption">
								<h3>SEGUNDO TÍTULO</h3>
								<p>Descripción de la imagen</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/wall3.jpg" class="img-fluid w-100">
							<div class="carousel-caption">
								<h3>TERCER TÍTULO</h3>
								<p>Descripción de la imagen</p>
							</div>
						</div>
					</div>
					<!-- cONTROLES IZQUIERDA Y DERECHA-->
					<a href="#demo" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
					<a href="#demo" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<h3>Modal</h3>
				<!--Botón del modal-->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo">Botón Modal</button>
				<!--MODAL-->
				<div class="modal"  role="dialog" id="modaldemo">
					<div class="modal-dialog" role="document">
						<div class="modal-content">

							<!--modal-header-->
							<div class="modal-header">
								<h5 class="modal-title">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<!--modal-body-->
							<div class="modal-body">
								<p>modal-body</p>
							</div>

							<!--modal-footer-->
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">Guardar</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
					</div>
				</div>

				<h3>tooltip</h3>
				<a href="#" data-toggle="tooltip" title="Ejemplo de tooltip">Pon el ratón encima</a><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco <a href="#" data-toggle="tooltip" title="Ejemplo de tooltip">mi tooltip</a> laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

			</div>
		</div>
	</div>


	



	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>