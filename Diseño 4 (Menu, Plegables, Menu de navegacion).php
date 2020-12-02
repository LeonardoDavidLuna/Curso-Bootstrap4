<!DOCTYPE html>
<html>
<head>
	<title></title>
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
				<h1>Menús de Navegación</h1>
				<h3>Plegables</h3>
				<h4>Botones Plegables</h4>
				<button class="btn btn-danger" data-toggle="collapse" data-target="#id1">MOSTRAR1</button>
				<div id="id1" class="collapse">Para mostrar u ocultar contenido con class="collapse"</div>
				<button class="btn btn-dark" data-toggle="collapse" data-target="#id2">MOSTRAR2</button>
				<div id="id2" class="collapse">Para mostrar u ocultar contenido con class="collapse"</div>
				<button class="btn btn-info" data-toggle="collapse" data-target="#id3">MOSTRAR3</button>
				<div id="id3" class="collapse">Para mostrar u ocultar contenido con class="collapse"</div>

				<h4>Links Plegables</h4>
				<a href="#link1"	data-toggle="collapse">MOSTRAR 1</a>
				<div id="link1" class="collapse">Para mostrar u ocultar contenido con class="collapse"</div>
				<a href="#link2"	data-toggle="collapse">MOSTRAR 2</a>
				<div id="link2" class="collapse">Para mostrar u ocultar contenido con class="collapse"</div>
				<a href="#link3"	data-toggle="collapse">MOSTRAR 3</a>
				<div id="link3" class="collapse">Para mostrar u ocultar contenido con class="collapse"</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">

				<h3>Acordion Plegable + show</h3>

				<div id="acordion">
					<div class="card">
						<div class="card-header">
							<a href="#uno" class="card-link" data-toggle="collapse" data-parent="#acordion">Opción 1</a>
						</div>
						<div class="collapse show" id="uno">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>
					</div>
				</div>

				<h3>Acordion Plegable - show</h3>

				<div id="acordion">
					<div class="card">
						<div class="card-header">
							<a href="#cero" class="card-link" data-toggle="collapse" data-parent="#acordion">Opción 1</a>
						</div>
						<div class="collapse" id="cero">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>
					</div>
				</div>

				<h3>Acordion Plegable Múltiple - Show</h3>
				<div id="acordion">
					<div class="card">

						<div class="card-header">
							<a href="#uno" class="card-link" data-toggle="collapse" data-parent="#acordion">Opción 1</a>
						</div>
						<div class="collapse" id="uno">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>

						<div class="card-header">
							<a href="#dos" class="card-link" data-toggle="collapse" data-parent="#acordion">Opción 2</a>
						</div>
						<div class="collapse" id="dos">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>

						<div class="card-header">
							<a href="#tres" class="card-link" data-toggle="collapse" data-parent="#acordion">Opción 3</a>
						</div>
						<div class="collapse" id="tres">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>
					</div>
				</div>

				<h3>Acordion Plegable Múltiple + Show</h3>
				<div id="acordion">
					<div class="card">

						<div class="card-header">
							<a href="#uno" class="card-link" data-toggle="collapse" data-parent="#acordion">Opción 1</a>
						</div>
						<div class="collapse show" id="uno">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>

						<div class="card-header">
							<a href="#dos" class="card-link" data-toggle="collapse" data-parent="#acordion">Opción 2</a>
						</div>
						<div class="collapse show" id="dos">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>

						<div class="card-header">
							<a href="#tres" class="card-link" data-toggle="collapse" data-parent="#acordion">Opción 3</a>
						</div>
						<div class="collapse show" id="tres">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>
					</div>
				</div>

				<h3>Acordion Plegable Múltiple - Show con Botones</h3>
				<div id="acordion">
					<div class="card">

						<div class="card-header">
							<button class="btn btn-danger card-link" data-toggle="collapse" data-parent="#acordion" data-target="#uno">Opción 1</button>
						</div>
						<div class="collapse" id="uno">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>

						<div class="card-header">
							<button class="btn btn-dark card-link" data-toggle="collapse" data-parent="#acordion" data-target="#dos">Opción 2</button>
						</div>
						<div class="collapse" id="dos">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>

						<div class="card-header">
							<button class="btn btn-success card-link" data-toggle="collapse" data-parent="#acordion" data-target="#tres">Opción 3</button>
						</div>
						<div class="collapse" id="tres">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad a iste cum. Nam necessitatibus nostrum numquam, modi quod, nobis non, distinctio ad suscipit minima sit minus totam similique nihil facilis.
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<h3>Menús</h3>
				<!-- Ejemplo de emmet li.nav-item>a.nav-link*4-->

				<ul class="nav">
					<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
					<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
				</ul>

				<h3>Disposición</h3>
				<h4>nav justify-content-start</h4>
				<ul class="nav justify-content-start">
					<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
					<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
				</ul>
				<h4>nav justify-content-center</h4>
				<ul class="nav justify-content-center">
					<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
					<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
				</ul>
				<h4> nav justify-content-end</h4>
				<ul class="nav justify-content-end">
					<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
					<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
				</ul>
				<h4>nav nav-justified</h4>
				<ul class="nav nav-justified">
					<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
					<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
				</ul>
				<h4>nav flex-column</h4>
				<ul class="nav flex-column">
					<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
					<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
				</ul>
				<h4>nav nav-pills +  colores</h4>
				<ul class="nav nav-pills">
					<li class="nav-item"><a href="#" class="nav-link active">Link 1</a></li>
					<li class="nav-item"><a href="#" class="nav-link btn-danger">Link 2</a></li>
					<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
				</ul>

				<h4>Submenús </h4>
				<ul class="nav">
					<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Link 1</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">SubLink 1</a>
							<a href="#" class="dropdown-item">SubLink 2</a>
							<a href="#" class="dropdown-item">SubLink 3</a>
							<a href="#" class="dropdown-item">SubLink 4</a>
						</div>
					</li>
					<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Link 2</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">SubLink 1</a>
							<a href="#" class="dropdown-item">SubLink 2</a>
							<a href="#" class="dropdown-item">SubLink 3</a>
							<a href="#" class="dropdown-item">SubLink 4</a>
						</div>
					</li>
					
					<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>

				</ul>


				<h3>Barra de Navegación</h3>
				<h4>navbar y navbar-nav</h4>
				<div class="navbar">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link active">Link 1</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
						<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
					</ul>
				</div>
				<h4>Disposición dependiendo el tamaño</h4>
				<div class="navbar navbar-expand-sm bg-warning">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link active">Link 1</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
						<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
					</ul>
				</div>
				<h4>Logo como texto</h4>
				<div class="navbar navbar-expand-sm bg-warning">
					<ul class="navbar-nav">
						<a href="#" class="navbar-brand">LOGOTEXT</a>
						<li class="nav-item"><a href="#" class="nav-link active">Link 1</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
						<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
					</ul>
				</div>
				<h4>Logo como imagen</h4>
				<div class="navbar navbar-expand-sm bg-warning">
					<ul class="navbar-nav">
						<a href="#" class="navbar-brand"><img src="img/logo2.png" style="width:100px;"></a>
						<li class="nav-item"><a href="#" class="nav-link active">Link 1</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
						<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
					</ul>
				</div>
				<h3>Menús Colapsables</h3>
				<div class="navbar navbar-expand-sm bg-dark navbar-dark">
					<a href="#" class="navbar-brand"><img src="img/logo2.png" style="width:100px;"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsable">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="colapsable">
						<ul class="navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link active">Link 1</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
						<li class="nav-item"><a href="#" class="nav-link disabled">Link 3</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
					</ul>
					</div>
				</div>

				<h3>Menús Colapsables Anidados</h3>
				<div class="navbar navbar-expand-sm bg-dark navbar-dark">
					<a href="#" class="navbar-brand"><img src="img/logo2.png" style="width:100px;"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsable2">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="colapsable2">
						<ul class="navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop">Link 3</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item">SubLink 1</a>
								<a href="#" class="dropdown-item">SubLink 2</a>
								<a href="#" class="dropdown-item">SubLink 3</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
					</ul>
					</div>
				</div>
				<h3>Menú Colapsable con Formulario de Buscar</h3>
				<div class="navbar navbar-expand-sm bg-dark navbar-dark">
					<a href="#" class="navbar-brand"><img src="img/logo2.png" style="width:100px;"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsable3">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="colapsable3">
						<ul class="navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop">Link 3</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item">SubLink 1</a>
								<a href="#" class="dropdown-item">SubLink 2</a>
								<a href="#" class="dropdown-item">SubLink 3</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
						<form action="miformulario.php" method="phost" class="form-inline">
							<input type="text" placeholder="Buscar" class="form-control mr-sm-2">
							<button class="btn btn-warning" type="submit">Buscar</button>
						</form>
					</ul>
					</div>
				</div>
				<h4>Menú Fijado fixed-top</h4>
				<div class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
					<a href="#" class="navbar-brand"><img src="img/logo2.png" style="width:100px;"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsable4">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="colapsable4">
						<ul class="navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop">Link 3</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item">SubLink 1</a>
								<a href="#" class="dropdown-item">SubLink 2</a>
								<a href="#" class="dropdown-item">SubLink 3</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
						<form action="miformulario.php" method="phost" class="form-inline">
							<input type="text" placeholder="Buscar" class="form-control mr-sm-2">
							<button class="btn btn-info" type="submit">Buscar</button>
						</form>
					</ul>
					</div>
				</div>
				<h4>Menú Fijado fixed-bottom con dropup</h4>
				<div class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
					<a href="#" class="navbar-brand"><img src="img/logo1.png" style="width:100px;"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsable5">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="colapsable5">
						<ul class="navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link">Link 1</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Link 2</a></li>

						<li class="nav-item dropup">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop">Link 3</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item">SubLink 1</a>
								<a href="#" class="dropdown-item">SubLink 2</a>
								<a href="#" class="dropdown-item">SubLink 3</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" class="nav-link">Link 4</a></li>
						<form action="miformulario.php" method="phost" class="form-inline">
							<input type="text" placeholder="Buscar" class="form-control mr-sm-2">
							<button class="btn btn-success" type="submit">Buscar</button>
						</form>
					</ul>
					</div>
				</div>

			</div>
		</div>
	</div>





	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>