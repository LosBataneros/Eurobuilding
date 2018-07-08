<?php

			$frontend = Ruta::ctrRuta();
			session_start();

			if(isset($_SESSION["validarSesion"]) == "ok"){

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<?php include "modulos/head.php";  ?>

<body class="theme-brown">


	<div class="overlay"></div>


<?php

	include "modulos/nav.php";

		echo '<section class="content">
						<div class="container-fluid">';

					include "modulos/resumen.php";

					$rutas = array();

			     if(isset($_GET["ruta"])){

						 $rutas = explode("/", $_GET["ruta"]);

						 if($rutas[0] == "inicio"){

							 include "modulos/inicio.php";

						 }else if($rutas[0] == "mudanzas"){

							 include "modulos/mudanzas.php";

						 }else if($rutas[0] == "articulos"){

							 include "modulos/articulos.php";

						 }else if($rutas[0] == "reportes"){

							 include "modulos/reportes.php";

						 }else if($rutas[0] == "salir"){

							 include "modulos/salir.php";

						 }else{

							 include "modulos/404.php";

						 }

					 }else {

					 	include "modulos/inicio.php";

					 }

?>

		</div>
	</section>

					 <?php include "modulos/footer.php"; ?>

</body>
</html>

<?php
			 }else{

			  include "modulos/login.php";

			 }

?>
