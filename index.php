<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Transporte nuevo</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
		integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>


	<link rel="stylesheet" href="sss/sss.css">
	<link rel="stylesheet" href="estilos.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="sss/sss.js"></script>
	<script>
		jQuery(function($) {
			$('.slider-testimonial').sss({
				slideShow: true,
				speed: 3500
			});
		});
	</script>

</head>

<body>
	<header>
		<a href="#logo" class="logo">
			<img src="img/logo.png" alt="Logo" style="width: 80px; height: auto; vertical-align: middle;">
			<span>TRANSPORTE</span>NOMBRE</a>

		<input type="checkbox" id="menu-bar">
		<label for="menu-bar" class="fa fa-bars"></label>
		<!--Opciones del menu-->
		<nav class="navbar">
			<a href="#quienes_somos">¿Quienes somos?</a>
			<a href="#cotizacion">Solicita tu viaje</a>
			<a href="#calificaciones">Calificacion</a>
			<a href="#opiniones">Opiniones</a>
		</nav>

	</header>

	<!--Carusel-->

	<div id="carouselExampleCaptions" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://motormagazine.com.ar/wp-content/uploads/2015/09/sprinter-9-1-7-696x410.jpg" class="d-block w-100" alt="#">
				<div class="carousel-caption d-none d-md-block">
					<h5>¡Aprovecha y viaja!</h5>
					<p>Texto a agregar</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://tsnvans.com/wp-content/uploads/2022/05/DSC6861-980x654.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Disfruta de la comodidad de nuestras unidades</h5>
					<p>Texto a agregar.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://tsnvans.com/wp-content/uploads/2022/07/Luz-azul-TSN-Vans-.jpeg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Conoce nuestros servicios a disposicion</h5>
					<p>Texto a agregar.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>


	<section class="quienes_somos" id="quienes_somos">
		<h4>¿Quienes somos?</h4>

		<div id="history" class="history">

			<p class="history-text">En TRANSPORT, no solo transportamos pasajeros, ¡transportamos experiencias! Con un servicio
				de colectivos y combis que te llevará a cada rincón de la provincia, estamos aquí para hacer que tu viaje
				sea inolvidable.</p>
			<p class="history-text">Nuestra misión es simple: ofrecerte un viaje cómodo, seguro y divertido. Desde las montañas
				hasta los viñedos, nuestros vehículos están listos para llevarte a donde quieras ir, ¡sin complicaciones!
			</p>
			<p class="history-text">Creemos en la calidad, la puntualidad y, sobre todo, en la diversión. Así que, si buscas un
				viaje que no sea aburrido, ¡estás en el lugar correcto!</p>
			<br><br>

		</div>


		<!--equipo-->

		<h2>NUESTRO EQUIPO </h2>

		<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
				<div class="card h-100">
					<img src="https://fundacioncarlosslim.org/wp-content/uploads/2020/10/conductor-transporte-ejecutivo-1.jpg"
						class="card-img-top" alt="..." style="width: 400px;;height:300px;">
					<div class="card-body">
						<h5 class="card-title">Pablo Gonzalez</h5>
						<p class="card-text">Chofer profesional, larga distancia y turismo</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
					<img src="https://img.freepik.com/foto-gratis/fotos-lado-hombre-negocios-coche_1359-1326.jpg?w=900&t=st=1726166424~exp=1726167024~hmac=06671cf22af854b5b9be5abbc71b7e043a6514495f37762d725a9f65c1ceb45e"
						class="card-img-top" alt="..." style="width: 400px;;height:300px;">
					<div class="card-body">
						<h5 class="card-title">German Lopez</h5>
						<p class="card-text">Chofer profesional, ejecutivo y eventos</p>
					</div>

				</div>
			</div>
			<div class="col">
				<div class="card h-100">
					<img src="https://img.freepik.com/fotos-premium/mujer-moderna-camiones-desafiante-empoderada_711731-651.jpg?size=626&ext=jpg&ga=GA1.1.1180732827.1726166348&semt=ais_hybrid"
						class="card-img-top" alt="..." style="width: 400px;;height:300px;">
					<div class="card-body">
						<h5 class="card-title">Marcela Moyano</h5>
						<p class="card-text">Chofer profesional, eventos y turismo</p>
					</div>

				</div>
			</div>
		</div>
		<br><br>
		<!--unidades-->

		<h2>NUESTRAS UNIDADES </h2>

		<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
				<div class="card h-100">
					<img src="https://www.mercedes-benz.com.ar/content/argentina/es/vans/models/sprinter/9077-xz0/overview/_jcr_content/root/responsivegrid/media_slider/media_slider_item/image.component.damq6.3397545717409.png/combi-1610x604.png"
						class="card-img-top" alt="..." style="width: 400px;;height:300px;">
					<div class="card-body">
						<h5 class="card-title">Ejecutiva</h5>
						<p class="card-text">Vehiculos climatizados, capacidad para 15 pasajeros, ideal viaje ejecutivo y
							turismo</p>
						<a href="ejecutiva.html" class="btn btn-outline-secondary">Leer más</a>
					</div>
					<!--<div class="card-footer">
				<small class="text-body-secondary">Last updated 3 mins ago</small>
				</div> -->
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
					<img src="https://sisanjuan.b-cdn.net/media/k2/items/cache/b0819416c2eebbe783e096798d5f76a3_L.jpg"
						class="card-img-top" alt=" Escolar" style="width: 400px;;height:300px;">
					<div class="card-body">
						<h5 class="card-title">Escolar</h5>
						<p class="card-text">Vehiculos habilitados para transporte escolar, capacidad 12 y 20 personas </p>
						<a href="escolar.html" class="btn btn-outline-secondary ">Leer más</a>

					</div>
					<!--<div class="card-footer">
				<small class="text-body-secondary">Last updated 3 mins ago</small>
				</div>-->
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
					<img src="https://www.ttservicios.com.ar/images/turistico.jpg" class="card-img-top" alt="..."
						style="width: 400px;;height:300px;">
					<div class="card-body">
						<h5 class="card-title">Turismo </h5>
						<p class="card-text">Unidades para media distancia, capacidad 40 pasajeros, ideal viajes escolares</p>
						<a href="turismo.html" class="btn btn-outline-secondary">Leer más</a>
					</div>
					<!-- <div class="card-footer">
				<small class="text-body-secondary">Last updated 3 mins ago</small>
				</div>-->
				</div>
			</div>
		</div>


	</section>

	<section class="cotizacion" id="cotizacion">
		<!--Formulario de servicio-->
		<h4>Te llevamos donde quieras!</h4>
		<br>
		<title>Formulario de Solicitud de Cotización</title>
		<div id="Cotización" class="container">
			<h4 style="text-align: center;">Solicitud de Cotización</h4>
			<form action="https://formspree.io/f/mblrvzgp" method="post">
				<label for="nombre">Nombre Completo:</label>
				<input type="text" id="nombre" name="nombre" required>

				<label for="email">Correo Electrónico:</label>
				<input type="email" id="email" name="email" required>

				<label for="telefono">Teléfono:</label>
				<input type="tel" id="telefono" name="telefono" required>

				<label for="origen">Lugar de Origen:</label>
				<input type="text" id="origen" name="origen" required>

				<label for="destino">Lugar de Destino:</label>
				<input type="text" id="destino" name="destino" required>

				<label for="fecha">Fecha de Viaje:</label>
				<input type="date" id="fecha" name="fecha" required>

				<label for="hora">Hora de Viaje:</label>
				<input type="time" id="hora" name="hora" required>

				<label for="num_pasajeros">Número de Pasajeros:</label>
				<input type="number" id="num_pasajeros" name="num_pasajeros" min="1" required>

				<label for="servicios_adicionales">Servicios Adicionales (opcional):</label>
				<textarea id="servicios_adicionales" name="servicios_adicionales" rows="4"></textarea>

				<button type="submit">Solicitar Cotización</button>

				<br>

				<button type="reset">Limpiar formulario</button>
			</form>
		</div>
	</section>



	<section class="calificacion" id="calificaciones">


		<h4>Califica nuestro servicio</h4>

		<!-- Contenedor para mostrar el mensaje de éxito o error -->
		<div id="message" class="alert" style="display: none;"></div>

		<!-- Formulario para enviar nombre, puntuación y comentario -->
		<form action="php/guardar_puntuacion.php" method="POST">
			<!-- Campo para Nombre y Apellido -->
			<div class="form-group">
				<label for="nombre_apellido">Nombre Completo:</label>
				<input type="text" id="nombre_apellido" name="nombre_apellido" required
					placeholder="Escribe tu Nombre y Apellido">
			</div>

			<!-- Estrellas para la puntuación -->
			<div class="rating">
				<input type="radio" name="star" id="star5" value="5" required>
				<label for="star5">&#9733;</label>
				<input type="radio" name="star" id="star4" value="4" required>
				<label for="star4">&#9733;</label>
				<input type="radio" name="star" id="star3" value="3" required>
				<label for="star3">&#9733;</label>
				<input type="radio" name="star" id="star2" value="2" required>
				<label for="star2">&#9733;</label>
				<input type="radio" name="star" id="star1" value="1" required>
				<label for="star1">&#9733;</label>
			</div>

			<p id="rating-value" class="mt-3">Selecciona una estrella</p>

			<!-- Campo para Comentario -->
			<div class="form-group mt-3">
				<label for="comentario">Deja tu comentario</label>
				<textarea class="form-control" id="comentario" name="comentario" rows="4"
					placeholder="Escribe tu experiencia aqui..." required></textarea>
			</div>

			<button type="submit" class="btn btn-primary mt-3">Guardar</button>
		</form>

		<script>
			// Mostrar la valoración de estrellas
			document.querySelectorAll('.rating input').forEach(star => {
				star.addEventListener('change', () => {
					const rating = document.querySelector('input[name="star"]:checked').value;
					document.getElementById('rating-value').textContent = `Valoración: ${rating} estrellas`;
				});
			});

			// Mostrar mensaje según el parámetro 'message' en la URL
			const urlParams = new URLSearchParams(window.location.search);
			const message = urlParams.get('message');

			if (message) {
				const messageDiv = document.getElementById('message');
				messageDiv.style.display = 'block';

				if (message === 'success') {
					messageDiv.classList.add('alert-success');
					messageDiv.textContent = 'Puntuación y comentario guardados correctamente.';
				} else if (message === 'error_db') {
					messageDiv.classList.add('alert-danger');
					messageDiv.textContent = 'Error en la conexión a la base de datos.';
				} else if (message === 'error_insert') {
					messageDiv.classList.add('alert-danger');
					messageDiv.textContent = 'Error al guardar los datos.';
				} else if (message === 'error_fields') {
					messageDiv.classList.add('alert-warning');
					messageDiv.textContent = 'Por favor, completa todos los campos.';
				}
			}
		</script>
	</section>

	<!--
	<section class="opiniones" id="opiniones">
		<h4>Opiniones de nuestro clientes</h4>
	
		<div class="wrapper">
			<div class="slider-testimonial">
				<div class="testimonial-item">
					<div class="testimonial-client">
						<img src="img/icono_persona.png" alt="">
						<p class="client-name">Carlos Gomez</p>
					</div>
					<div class="testimonial-text">
						<p>Muy lindo viaje, Gracias!.</p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="testimonial-client">
						<img src="img/icono_persona.png" alt="">
						<p class="client-name">Fernando Castro</p>
					</div>
					<div class="testimonial-text">
						<p>El chofer muy atento, gracias!Recomendado.</p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="testimonial-client">
						<img src="img/icono_persona.png" alt="">
						<p class="client-name">Adrian Fernandez</p>
					</div>
					<div class="testimonial-text">
						<p>Bonito todo, recomendado. Sugerencia agregar servicio de refrigerios .</p>
					</div>
				</div>
			</div>
		</div>
	</section> 
-->
	<!-- Sección de opiniones -->
	<section class="opiniones" id="opiniones">
		<h4>Opiniones de nuestros clientes</h4>
		<div class="wrapper"><!-- Mostramos las opiniones directamente -->
			<div class="slider-testimonial">
				<?php include 'php/mostrar_opiniones.php'; ?>
			</div>
		</div>
	</section>

	<!-- Contenido de la página -->

	<footer>
		<a class="whatsapp-button" href="https://wa.me/+5492614153285" target="_blank">
			<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
			<!-- Chatear por WhatsApp-->
		</a>
		<div id="contacto" class="company-name">
			<strong>TRANSPORT</strong>
			<br>
			<h6>Nº de telefono</h6>
			<h6>correo electrónico</h6>


		</div>
		<div class="social-links">
			<!--   <a href="https://twitter.com/tu_usuario" target="_blank">
				<img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Twitter_bird_logo_2012.svg" alt="Twitter">
			</a>-->
			<a href="https://www.instagram.com/tu_usuario" target="_blank">
				<img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
			</a>
			<a href="https://www.facebook.com/tu_usuario" target="_blank">
				<img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
					alt="Facebook">
			</a>
		</div>
	</footer>

</body>

</html>