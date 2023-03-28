<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<?php
include 'inc/layout/head.php';
?>

<body class="subpage">

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s section-four section-subpage-first">
		<div class="container">
			<div class="section-content section-four-content">
				<div class="row dm">
					<div class="col-lg-6 dp text-right">
						<h2>Seguro de <span class="primary-accent">Decesos</span></h2>
						<p>Para nosotros es muy importante que escojas un buen <b>seguro de decesos</b>. Nuestro objetivo es que encuentres el seguro más adecuado a tus necesidades, de la forma más rápida posible y al precio que estás buscando.</p>
						<ul class="flex-align-right">
							<li><span class="material-icons-two-tone list-icon">check_circle</span>Escoge la opción que mejor se adapte a ti. No todas las pólizas son iguales</li>
							<li><span class="material-icons-two-tone list-icon">check_circle</span>Compara los precio de las mejores compañías aseguradoras</li>
						</ul>
						<div class="button-wrapper">
							<a class="button contact-modal-trigger">Quiero Información</a>
						</div>
					</div>
					<div class="col-lg-6 dp">
						<div class="hero-contact-wrapper">
							<div class="hero-contact-content section-contact-content">
								<span class="hero-contact-title domain"></span>
								<form id="contact-form" action="" method="POST">
									<div class="form-group">
										<div class="contact-input-wrapper">
											<span class="material-icons-two-tone input-icon">account_circle</span>
											<input id="contactName" type="text" class="contact-input" name="contactName" placeholder="Nombre..." required>
										</div>
									</div>
									<div class="form-group">
										<div class="contact-input-wrapper">
											<span class="material-icons-two-tone input-icon">phone</span>
											<input id="contactPhone" type="text" class="contact-input" name="contactPhone" placeholder="Teléfono..." required>
										</div>
									</div>
									<div class="form-group">
										<div class="contact-input-wrapper">
											<span class="material-icons-two-tone input-icon">email</span>
											<input id="contactEmail" type="email" class="contact-input" name="contactEmail" autocomplete="email" placeholder="Email..." required>
										</div>
									</div>
									<div class="contact-button-wrapper text-center">
										<button type="submit" class="button large">Contratar seguro</button>
									</div>
									<div id="mail-status"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-three">
		<div class="container">
			<div class="section-content section-three-content">
				<div class="section-title-wrapper text-center">
					<h2 class="section-title color-white">Otros seguros <span class="primary-accent">que te pueden interesar</span></h2>
				</div>
				<div class="featured-categories-wrapper">
					<div class="row">
						<div class="col-lg-4 col-mb">
							<div class="featured-category-item">
								<a href="seguro-de-familiar">
									<img src="img/s3-img-1.jpg" class="img-fluid f-c-i-img" alt="" />
									<div class="featured-category-item-title-wrapper">
										<span class="category-item-title">Seguro familiar</span>
									</div>
									<div class="featured-category-item-overlay text-center">
										<div>
											<h4>Seguro familiar</h4>
											<p>Proteger la salud de tu familia es el principal objetivo de las compañías aseguradoras.</p>
											<span>Más información</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-mb">
							<div class="featured-category-item">
								<a href="seguro-de-viaje">
									<img src="img/s3-img-2.jpg" class="img-fluid f-c-i-img" alt="" />
									<div class="featured-category-item-title-wrapper">
										<span class="category-item-title">Seguro de viaje</span>
									</div>
									<div class="featured-category-item-overlay text-center">
										<div>
											<h4>Seguro de viaje</h4>
											<p>Estarás protegido en todo momento; antes, durante y después de tu viaje.</p>
											<span>Más información</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-mb">
							<div class="featured-category-item">
								<a href="seguro-de-hogar">
									<img src="img/s3-img-3.jpg" class="img-fluid f-c-i-img" alt="" />
									<div class="featured-category-item-title-wrapper">
										<span class="category-item-title">Seguro de hogar</span>
									</div>
									<div class="featured-category-item-overlay text-center">
										<div>
											<h4>Seguro de hogar</h4>
											<p>Para asegurar viviendas en las que no haya muchos objetos o mobiliario de valor.</p>
											<span>Más información</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="featured-category-item">
								<a href="seguro-de-salud">
									<img src="img/s3-img-4.jpg" class="img-fluid f-c-i-img" alt="" />
									<div class="featured-category-item-title-wrapper">
										<span class="category-item-title">Seguro de salud</span>
									</div>
									<div class="featured-category-item-overlay text-center">
										<div>
											<h4>Seguro de salud</h4>
											<p>Existen distintas modalidades de seguros de salud: seguros básicos sin hospitalización o seguros completos</p>
											<span>Más información</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="featured-category-item">
								<a href="seguro-de-auto">
									<img src="img/s3-img-5.jpg" class="img-fluid f-c-i-img" alt="" />
									<div class="featured-category-item-title-wrapper">
										<span class="category-item-title">Seguro de auto</span>
									</div>
									<div class="featured-category-item-overlay text-center">
										<div>
											<h4>Seguro de auto</h4>
											<p>Dependiendo del coche y de la antigüedad es preferible que contrates un tipo de seguro u otro.</p>
											<span>Más información</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="featured-category-item">
								<a href="seguro-de-decesos">
									<img src="img/s3-img-6.jpg" class="img-fluid f-c-i-img" alt="" />
									<div class="featured-category-item-title-wrapper">
										<span class="category-item-title">Seguro de decesos</span>
									</div>
									<div class="featured-category-item-overlay text-center">
										<div>
											<h4>Seguro de decesos</h4>
											<p>Evita pagar de más y evita que tengan que hacer frente a las tediosas gestiones y trámites ocasionados por sepelio.</p>
											<span>Más información</span>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="testimonials-wrapper" class="c-s section-testimonials">
		<div class="container">
			<div class="section-content testiomonials-content">
				<div class="section-title-wrapper text-center">
					<h2 class="section-title"><span class="primary-accent">Nuestros clientes</span> nos brinda sus testimonios</h2>
				</div>
				<div class="testimonials">
					<div class="testimonials-item">
						<div class="testimonial-wrapper">
							<div class="testimonial">Una gran aseguradora, servicio de atención al cliente 10/10, estoy muy contento</div>
							<div class="media">
								<img src="./../img/person-1.jpg" class="img-fluid" alt="">
								<div class="media-body">
									<div class="overview">
										<div class="name"><b>Juan Rodríguez</b></div>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonials-item">
						<div class="testimonial-wrapper">
							<div class="testimonial">Aseguradora TOP, me repararon mi coche en 4 días sin ningún coste. Recomendado!</div>
							<div class="media">
								<img src="./../img/person-2.jpg" class="img-fluid" alt="">
								<div class="media-body">
									<div class="overview">
										<div class="name"><b>Andrés Casas</b></div>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonials-item">
						<div class="testimonial-wrapper">
							<div class="testimonial">Ahora siento que estoy totalmente seguro. Es una aseguradora muy buena y rápida con las gestiones </div>
							<div class="media">
								<img src="./../img/person-3.jpg" class="img-fluid" alt="">
								<div class="media-body">
									<div class="overview">
										<div class="name"><b>David Sánchez</b></div>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonials-item">
						<div class="testimonial-wrapper">
							<div class="testimonial">La atención al cliente el genial. El soporte 24hes sin duda una gran ventaja. La recomiendo al 100%. </div>
							<div class="media">
								<img src="./../img/person-4.jpg" class="img-fluid" alt="">
								<div class="media-body">
									<div class="overview">
										<div class="name"><b>María García</b></div>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="count-me-in-wrapper" class="c-s section-stats">
		<div class="container">
			<div class="section-content section-stats-content">
				<div class="row">
					<div class="col-lg-3 col-6">
						<div class="stats-col-content">
							<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="300" data-speed="2500" data-refresh-interval="10">300</span>+</span>
							<span class="stats-col-text">SOCIOS EN EL MUNDO</span>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="stats-col-content">
							<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="161" data-speed="2700" data-refresh-interval="10">161</span>+</span>
							<span class="stats-col-text">PREMIOS GANADOS</span>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="stats-col-content">
							<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="80" data-speed="2200" data-refresh-interval="10">80</span>K+</span>
							<span class="stats-col-text">CLIENTES SATISFECHOS</span>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="stats-col-content">
							<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="100" data-speed="3000" data-refresh-interval="10">100</span>%</span>
							<span class="stats-col-text">TASA DE ÉXITO</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	include 'inc/layout/footer.php';
	?>
	<?php
	include 'inc/layout/modal.php';
	?>
</body>
<?php
include 'inc/layout/scripts.php';
?>

</html>