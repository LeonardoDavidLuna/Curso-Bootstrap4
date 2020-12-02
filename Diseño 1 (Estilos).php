<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="name" content="content">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css" media="screen">
		.borde1{
			background-color: red;
		}
		.borde2{
			background-color: green;
		}
		.borde3{
			background-color: blue;
		}
		.borde4{
			background-color: orange;
		}
		.borde5{
			background-color: gray;
		}
		.borde6{
			background-color: yellow;
		}
		.borde7{
			background-color: pink;
		}
		.borde8{
			background-color: purple;
			width: 150px;
		}
		.borde9{
			background-color: brown;
		}
		.borde10{
			background-color: brown;
			height: 450px;
		}
	</style>

	<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

<!--
	RESOLUCIONES
xs: Extra small o col
col:	Para celulares, resolución < 575
sm:		Resolución 576 - 767
md:		Resolución 768 - 991
lg:		Resolución 992 - 1199
xl:		Resolución > 1200
-->

<!--Rejillas-->
<!--CONTAINER-FLUID-->
<h3>REJILLA</h3>
<div class="container-fluid borde1">
	<div class="row">
		container-fluid
	</div>
</div>
<!--CONTAINER-->
<div class="container borde2">
	<div class="row">
		container
	</div>
</div>
<!--col-12-->
<div class="container">
	<div class="row">
		<!--COL-12-->
		<div class="col-12 borde5">
			col-12
		</div>
		<!--COL-12-->
		
	</div>
</div>	
<!--col-6-->
<div class="container">
	<div class="row">
		<div class="col-6 borde1">col-6</div>
		<div class="col-6 borde2">col-6</div>
	</div>
</div>
<!--col-4-->
<div class="container">
	<div class="row">
		<div class="col-4 borde3">col-4 1</div>
		<div class="col-4 borde4">col-4 2</div>
		<div class="col-4 borde5">col-4 3</div>
	</div>
</div>	
<!--col-3-->
<div class="container">
	<div class="row">
		<div class="col-3 borde6">col-3 1</div>
		<div class="col-3 borde5">col-3 2</div>
		<div class="col-3 borde4">col-3 3</div>
		<div class="col-3 borde3">col-3 4</div>
	</div>
</div>
<!--col-2-->
<div class="container">
	<div class="row">
		<div class="col-2 borde1">col-2 1</div>
		<div class="col-2 borde2">col-2 2</div>
		<div class="col-2 borde3">col-2 3</div>
		<div class="col-2 borde4">col-2 4</div>
		<div class="col-2 borde5">col-2 5</div>
		<div class="col-2 borde6">col-2 6</div>
	</div>
</div>
<!--col-1-->
<div class="container">
	<div class="row">
		<div class="col-1 borde1">col-1 1</div>
		<div class="col-1 borde2">col-1 2</div>
		<div class="col-1 borde3">col-1 3</div>
		<div class="col-1 borde4">col-1 4</div>
		<div class="col-1 borde5">col-1 5</div>
		<div class="col-1 borde6">col-1 6</div>
		<div class="col-1 borde1">col-1 7</div>
		<div class="col-1 borde2">col-1 8</div>
		<div class="col-1 borde3">col-1 9</div>
		<div class="col-1 borde4">col-1 10</div>
		<div class="col-1 borde5">col-1 11</div>
		<div class="col-1 borde6">col-1 12</div>
	</div>
</div>


<!-----------------------ALINEACIÓN------------------------->
<!--clearfix: Para evitar que interfieran cuando hay más contenido-->
<h3>ALINEACIÓN</h3>
<div class="container">
	<div class="row">
		<div class="col clearfix borde5">
			clearfix
			<span class="float-left">float-left</span><span class="float-right">float-right</span>
		</div>
	</div>
</div>
<!--float-left y float-right: Alinear a la izquierda y derecha-->
<div class="container">
	<div class="row">
		<div class="col borde5">
			<span class="float-left">float-left</span><span class="float-right">float-right</span>
		</div>
		<div class="col borde4">
			<span class="float-left">float-left</span><span class="float-right">float-right</span>
		</div>
	</div>
</div>
<!--row d-block-->
<div class="container">
	<div class="row d-block">
		<div class="float-sm-right borde1">float-sm-right</div><br>
		<div class="float-md-right borde2">float-md-right</div><br>
		<div class="float-lg-right borde3">float-lg-right</div><br>
		<div class="float-xl-right borde4">float-xl-right</div><br>
		<div class="float-none borde5">float-none</div>
	</div>
</div>
<!--CENTRO-->
<div class="container">
	<div class="row d-block">
		<div class="mx-auto borde8">mx-auto CENTRO</div>
	</div>
</div>
<h3>JUSTIFICACIÓN DE CONTENIDO HORIZONTAL</h3>
<div class="container borde5" style="height: 100px">
	<div class="row justify-content-start">
		<div class="col-4 borde2">justify-content-start</div>
		<div class="col-4 borde3">justify-content-start</div>
	</div>
</div>
<div class="container borde9" style="height: 100px">
	<div class="row justify-content-center borde7">
		
		<div class="col-4 borde3">justify-content-center</div>
		<div class="col-4 borde4">justify-content-center</div>
	</div>	
</div>

<div class="container borde1" style="height: 100px">
	<div class="row justify-content-end">
		<div class="col-4 borde2">justify-content-end</div>
		<div class="col-4 borde3">justify-content-end</div>
	</div>
</div>

<div class="container borde4" style="height: 100px">
	<div class="row justify-content-between">
		<div class="col-4 borde6">justify-content-between</div>
		<div class="col-4 borde5">justify-content-between</div>
	</div>
</div>
<div class="container borde2" style="height: 100px">
	<div class="row justify-content-between">
		<div class="col-3 borde6">justify-content-between</div>
		<div class="col-3 borde5">justify-content-between</div>
		<div class="col-3 borde7">justify-content-between</div>
	</div>
</div>
<div class="container borde1" style="height: 100px">
	<div class="row justify-content-around">
		<div class="col-3 borde6">justify-content-around</div>
		<div class="col-3 borde5">justify-content-around</div>
		<div class="col-3 borde7">justify-content-around</div>
	</div>
</div>

<h3>JUSTIFICACIÓN DE CONTENIDO VERTICAL</h3>

<div class="container borde5" style="height: 100px">
	<div class="row align-items-start borde1">
		<div class="col-3 borde2">align-items-start</div>
		<div class="col-3 borde3">align-items-start</div>
		<div class="col-3 borde4">align-items-start</div>
	</div>
</div>

<div class="container borde6" style="height: 100px">
	<div class="row align-items-end borde1">
		<div class="col-3 borde2">align-items-center</div>
		<div class="col-3 borde3">align-items-center</div>
		<div class="col-3 borde4">align-items-center</div>
	</div>
</div>

<div class="container borde6" style="height: 100px">
	<div class="row borde1">
		<div class="col-3 borde2 align-self-start">align-self-center</div>
		<div class="col-3 borde3 align-self-center">align-self-center</div>
		<div class="col-3 borde4 align-self-end">align-self-center</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 borde5 fixed-top">fixed-top</div>
	</div>
</div>
<!--
<div class="container">
	<div class="row">
		<div class="col-12 borde7 fixed-bottom">fixed-bottom</div>
	</div>
</div>
-->
<h3>Tamaños</h3>
<h4>Horizontal</h4>
<div class="container borde1">
	<div class="row borde4 w-25">
		w-25 Tamaño 25%
	</div>
	<div class="row borde5 w-50">
		w-50 Tamaño 50%
	</div>
	<div class="row borde4 w-75">
		w-75 Tamaño 75%
	</div>
	<div class="row borde3">
		Tamaño 100%
	</div>
</div>
<h4>Vertical</h4>
<div class="container borde4" style="height: 250px">
	<div class="row  h-25">
		<div class="col-4 borde2">h-25</div>
	</div>
</div>
<div class="container borde6" style="height: 250px">
	<div class="row  h-50">
		<div class="col-4 borde3">h-50</div>
	</div>
</div>
<div class="container borde2" style="height: 250px">
	<div class="row  h-75">
		<div class="col-4 borde4">h-75</div>
	</div>
</div>
<div class="container borde1" style="height: 250px">
	<div class="row  h-100">
		<div class="col-4 borde6">h-100</div>
	</div>
</div>

<h3>MÁRGENES Y PADDING</h3>
<div class="container borde5">
	<div class="row borde7 w-50 h-50">
		<div>
			<p class="text-justify mt-5 mr-5 mb-5 ml-5">text-justify Margin: mt-5 mr-5 mb-5 ml-5 del 0 al 5.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>
	<div class="row borde8 w-75 h-75">
		<div>
			<p class="text-justify pt-5 pr-5 pb-5 pl-5">text-justify Padding: pt-5 pr-5 pb-5 pl-5 del 0 al 5.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>
</div>	

<h3>TIPOGRAFÍA</h3>

<div class="container">
	<div class="row borde7">
		<div>
			<h1 class="display-1">display-1</h1>
			<h1 class="display-2">display-2</h1>
			<h1 class="display-3">display-3</h1>
			<h1 class="display-4">display-4</h1>
		</div>
	</div>
	
	<div class="row borde7">
		<div>
			<p class="small">small</p>
			<p class="mark">mark</p>

			<p>Ejemplo de abreviación <abbr title="ejemplo de abbr">abbr</abbr> con bootstrap</p>
			
			<code>
				body{
				background-color:red;
			}
		</code>
		<pre>
			body{
			background-color:red;
		}	
		</pre>
		<p>Ejemplo de kbd: Pulsar <kbd>Ctrl+C</kbd> para copiar</p>
		<p class="font-weight-bold">Negrita: font-weight-bold</p>
		<p class="font-weight-normal">Normal: font-weight-normal</p>
		<p class="font-weight-light">Light: font-weight-light</p>
		<p class="font-italic">Italic: font-italic</p>
		<p class="text-left">text-left</p>
		<p class="text-center">text-center</p>
		<p class="text-right">text-right</p>
		<p class="text-justify">text-justify Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p class="text-lowercase">Texto en minúculas: TEXT-LOWERCASE</p>
		<p class="text-uppercase">Texto en mayúsculas: text-uppercase</p>
		<p class="text-capitalize">Letra capital: text-capitalize</p>
		<h3>Colores</h3>
		<p class="text-muted">text-muted</p>
		<p class="text-primary">text-primary</p>
		<p class="text-secondary">text-secondary</p>
		<p class="text-dark">text-dark</p>
		<p class="text-light">text-light</p>
		<p class="text-danger">text-danger</p>
		<p class="text-warning">text-warning</p>
		<p class="text-success">text-success</p>
		<p class="text-info">text-info</p>
		<p class="text-white">text-white</p>

		<h3>Color Background</h3>	
		<p class="bg-primary">bg-primary</p>
		<p class="bg-secondary">bg-secondary</p>
		<p class="bg-dark">bg-dark</p>
		<p class="bg-light">bg-light</p>
		<p class="bg-danger">bg-danger</p>
		<p class="bg-warning">bg-warning</p>
		<p class="bg-success">bg-success</p>
		<p class="bg-info">bg-info</p>
		<p class="bg-white">bg-white</p>

		


		<!--
		<p class="text-nowrap">text-nowrap Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>-->
		</div>
	</div>
</div>

<!--
	COLORES
primary
secondary

-->

<div class="container">
	<div class="row">
		<div class="col">
			<h3>Insignias</h3>
			<p>Ejemplo de <span class="badge">badge o insignia</span></p>
			<h4>Insignias y colores</h4>
			<p>Ejemplo de <span class="badge badge-primary">badge badge-primary</span></p>
			<p>Ejemplo de <span class="badge badge-secondary">badge badge-secondary</span></p>
			<p>Ejemplo de <span class="badge badge-dark">badge badge-dark</span></p>
			<p>Ejemplo de <span class="badge badge-light">badge badge-light</span></p>
			<p>Ejemplo de <span class="badge badge-danger">badge badge-danger</span></p>
			<p>Ejemplo de <span class="badge badge-warning">badge badge-warning</span></p>
			<p>Ejemplo de <span class="badge badge-success">badge badge-success</span></p>
			<p>Ejemplo de <span class="badge badge-white">badge badge-white</span></p>
			<p>Ejemplo de <span class="badge badge-info">badge badge-info</span></p>

			<h4>Insignias y estilos</h4>
			<p>Ejemplo de <span class="badge badge-pill badge-primary">badge badge-primary</span></p>
			<p>Ejemplo de <span class="badge badge-pill badge-secondary">badge badge-secondary</span></p>
			<p>Ejemplo de <span class="badge badge-pill badge-dark">badge badge-dark</span></p>
			<p>Ejemplo de <span class="badge badge-pill badge-light">badge badge-light</span></p>
			<p>Ejemplo de <span class="badge badge-pill badge-danger">badge badge-danger</span></p>
			<p>Ejemplo de <span class="badge badge-pill badge-warning">badge badge-warning</span></p>
			<p>Ejemplo de <span class="badge badge-pill badge-success">badge badge-success</span></p>
			<p>Ejemplo de <span class="badge badge-pill badge-white">badge badge-white</span></p>
			<p>Ejemplo de <span class="badge badge-pill badge-info">badge badge-info</span></p>

		</div>
	</div>
</div>	



<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>