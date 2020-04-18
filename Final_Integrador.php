<!DOCTYPE html>
<html>
<head>
	<title>Actividad Final Integrador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width:device-width, initial-scale=1">
	<link href="Estilos_Final.css" rel="stylesheet">
	<link href="css/lightbox.min.css" rel="stylesheet">

</head>
<body>
	<header class=principio>
		<h1>Programacion Web:<br>Trabajo integrador de HTML y CSS</br></h1>
		<img src="imagenes/COMPUTER.jpg">	
	</header>

	<section id="botoneras">
		<nav><ul>
			<li><a href="#explicacion">Explicacion</a></li>
			<li><a href="#posibilidades">Posibilidades</a></li>
			<li><a href="#nosotros">Nosotros</a></li>
			<li><a href="#contacto">Contacto</a></li>
			</ul>
		</nav>
	</section>

	<article id="explicacion">
		<h2>EXPLICACION</h2>
		<p>Erwin Rudolf Josef Alexander Schrödinger (Viena, Imperio austrohúngaro, 12 de agosto de 1887 – id., 4 de enero de 1961) fue un físico y filósofo austríaco, naturalizado irlandés, que realizó importantes contribuciones en los campos de la mecánica cuántica y la termodinámica.​ Recibió el Premio Nobel de Física en 1933 por haber desarrollado la ecuación de Schrödinger, compartido con Paul Dirac.​ Tras mantener una larga correspondencia con Albert Einstein propuso el experimento mental del gato de Schrödinger que mostraba las paradojas e interrogantes a los que abocaba la física cuántica.<br>Erwin Schrödinger plantea un sistema que se encuentra formado por una caja cerrada y opaca que contiene un gato en su interior, una botella de gas venenoso y un dispositivo, el cual contiene una sola partícula radiactiva con una probabilidad del 50% de desintegrarse en un tiempo dado, de manera que si la partícula se desintegra, el veneno se libera y el gato muere.</br><br>Al terminar el tiempo establecido, la probabilidad de que el dispositivo se haya activado y el gato esté muerto es del 50%, y la probabilidad de que el dispositivo no se haya activado y el gato esté vivo tiene el mismo valor. Según los principios de la mecánica cuántica, la descripción correcta del sistema en ese momento (su función de onda) será el resultado de la superposición de los estados «vivo» y «muerto» (a su vez descritos por su función de onda). Sin embargo, una vez que se abra la caja para comprobar el estado del gato, este estará vivo o muerto.</br><br>Sucede que hay una propiedad que poseen los electrones, de poder estar en dos lugares distintos al mismo tiempo, pudiendo ser detectados por los dos receptores y dándonos a sospechar que el gato está vivo y muerto a la vez, lo que se llama superposición. Pero cuando abramos la caja y queramos comprobar si el gato sigue vivo o no, perturbaremos este estado y veremos si el gato está vivo o muerto.</br></p>
	</article>

	<section id="posibilidades">
		<h2>POSIBILIDADES</h2>
		<div id=img_izq></div>
		<article id="opcion1">
			<h3>Opcion 1</h3>
			<p>Existe el 50 % de posibilidades de que después de un período (digamos, una hora) ocurra una desintegración radiactiva de algún átomo dentro del contenedor lo que activaría el martillo y rompería el recipiente de cianuro, dejando libre el veneno que mataría al gato.</p>
		</article>
		<article id="opcion2">
			<h3>Opcion 2</h3>
			<p>El otro 50 % de posibilidad nos dice que esto no ocurrirá y por lo tanto el gato sigue vivo.</p>
		</article>
		<article id="resultado">
			<h3>Resultado</h3>
			<p>Pues bien, la paradoja de Schrödinger nos dice que nosotros como espectadores, por afuera, no sabemos si dentro de la caja está vivo o muerto, por lo tanto, sin la verificación, el gato está vivo y muerto al mismo tiempo.</p>
		</article>
	</section>
	<section id=nosotros>
	<h2>NOSOTROS</h2>
		<a href="imagenes/tortugamuerde.jpg" data-lightbox="imagen1"><img src="imagenes/tortugaenojada.jpg" class="Tortuga"/></a>
		<h2>NO HAGAS CLICK EN LA TORTUGA O TE MUERDE!</h2>
		<nav id="botonera_nosotros">
			<ul>
				<li><a href="Final_Integrador.php?id=lc#nosotros">Lucas</a></li>
				<li><a href="Final_Integrador.php?id=hv#nosotros">Heidy</a></li>
				<li><a href="Final_Integrador.php?id=bc#nosotros">Bobby</a></li>
				<li><a href="Final_Integrador.php?id=jp#nosotros">Juan</a></li>
			</ul>
		</nav>
	<?php
	if(isset($_GET['id'])) {

	switch ($_GET['id']){
		case 'lc':
			$imagen='hombre.jpg';
			$nombre='Lucas Chaparro';
			$cargo='Administrativo';
			$descripcion='Lucas tiene 28 años y mide 1.85 aproximadamente. Le gusta el rock y en sus ratos libres se dedica a aprender programacion. Posee un carácter fuerte y es un poco testarudo, aunque tiene un gran corazón. Es una persona en la que se puede sin suda confiar y si tuviera que pedir ayuda, no dudaría en acudir a él. Tiene una familia hermosa compuesta por su esposa y 2 mascotas que lo acompañan en todos sus proyectos y lo incentivan a seguir creciendo a nivel personal y profesional.';
			break;
		case 'hv':
			$imagen='mujer.jpg';
			$nombre='Heidy Valdes';
			$cargo='Cajera';
			$descripcion='Heidy es una mujer oriunda de la ciudad de Artemisa, Cuba. Tiene 28 años. Es de estatura media y su cabello es castaño oscuro. Su profesión es maestra cajera y trabaja desde hace 5 años en un rapipago en la ciudad de Castelar. Le gusta dedicar su tiempo libre a la pintura, aunque a veces se le complica la realización de esta tarea por los deberes diarios de la casa. Le gustaria dedicarse a escribir.';
			break;
		case 'bc':
			$imagen='perro.jpg';
			$nombre='Bobby Chaparro';
			$cargo='Desempleado';
			$descripcion='Mi perro Bobby, es pequeño como un cachorro, tiene el pelo suave como la seda y sus ojos son brillantes como dos luceros. Cuando me mira con sus luceros cuando estoy comiendo, ya se lo que quiere, micomida, que le parece tan deliciosa como las golosinas. Él es tan mimoso como un peluche y también como un diablo, él se deja acariciar eso sí, con mucho cuidado.';
			break;	
		case 'jp':
			$imagen='tortuga.jpg';
			$nombre='Juan Perez';
			$cargo='Desempleado';
			$descripcion='La tortuga que ya se encontraba en la casa cuando nos mudamos se llama Juan, tiene un tamaño aproximado de 15 cm de ancho. 
				Tiene un personalidad bastante conflictiva ya que si te ve descalzo te intenta morder los pies (exepto a mi, que al parecer me tiene cariño).';
			break;	
	}
	?>	
					
		<div id="img_nosotros">
			<img src="imagenes/<?php echo $imagen; ?>">
		</div>
		<article id="info_nosotros">
			<h3>
				<?php echo $nombre; ?>
			</h3>
			<h4>
				<?php echo $cargo; ?> 
			</h4>
			<p>
				<?php echo $descripcion; ?>
			</p>	
		</article>

	<?php
	}
	?>
	</section>
	<section id="contacto">
		<h2>CONTACTO</h2>
		<p>Esta pagina es simplemente una prueba, en caso de que quieras tener tu propia pagina web envianos tus datos y nos pondremos en contacto para realizarla:</p>
		<form method="POST" action="Datos.php">
			<p>Nombre: <input type="text" name="nombre" placeholder="Nombre"></p>
			<p>Apellido: <input type="text" name="apellido" placeholder="Apellido"></p>
			<p>Correo: <input type="email" name="correo" placeholder="Email"></p>
			<p>Mensaje: <textarea name="mensaje" placeholder="Mensaje" rows="10"></textarea><p>
			<input type="submit">
		</form>
	</section>
	<footer>
		<nav id="botonera_footer"><a href="https://lucaschapa.000webhostapp.com/Final_Integrador.php">Usar el ascensor PA</a></nav>
		<div class="redes">
			<ul>
				<li><a href="https://www.facebook.com/lucas.chapa.5?ref=bookmarks" target="blank" class="facebook"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/lucas.chapa/" target="blank" class="instagram"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.linkedin.com/in/lucas-raul-chaparro-04601589/" target="blank" class=linkedin><i class="fab fa-linkedin-in"></i></a></li>
			</ul>
		</div>
	</footer>
	<script src="https://kit.fontawesome.com/c0373cb5e0.js" crossorigin="anonymous"></script>
	<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
