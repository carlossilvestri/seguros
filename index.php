<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<?php
include 'inc/layout/head.php';
?>

<body>

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s hero-section">
		<div class="container">
			<div class="hero-content">
				<h1 class="hero-title domain"></h1>
				<div class="hero-contact-wrapper">
					<div class="hero-contact-content">
						<span class="hero-contact-title">Déjanos tus datos, te llamamos</span>
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
								<button type="submit" class="button large">Contáctame</button>
							</div>
							<div id="mail-status"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-two">
		<div class="container">
			<div class="section-content section-two-content">
				<div class="row dm">
					<div class="col-lg-6 dp">
						<div class="section-two-images-wrapper">
							<div class="s2-img-1-w">
								<img src="img/s2-img-1.jpg" class="s2-img-1 img-fluid" alt="" />
							</div>
							<img src="img/s2-img-2.jpg" class="s2-img-2 img-fluid" alt="" />
							<div class="s2-circle-img-wrapper">
								<img src="img/s2-img-3.jpg" class="s2-img-3 img-fluid" alt="" />
							</div>
						</div>
					</div>
					<div class="col-lg-6 dp">
						<h2>¿Por qué debería elegir <span class="primary-accent domain"></span>?</h2>
						<p>Seguros Full es una compañía completa que te ofrece todo tipo de seguros al mejor precio. Con nosotros estarás cubierto en todos los ámbitos de tu vida. Nuestro <span class="domain"></span> te ayudará a estar más tranquilo y podrás llamarnos en cualquier momento.</p>
						<ul>
							<li><span class="material-icons-two-tone list-icon">check_circle</span>Tenemos cobertura disponible en toda España.</li>
							<li><span class="material-icons-two-tone list-icon">check_circle</span>Encontrarás los mejores precios del mercado en cuanto a seguros.</li>
							<li><span class="material-icons-two-tone list-icon">check_circle</span>Vivirás sin preocupaciones, te gestionamos todos los trámites.</li>
						</ul>
						<div class="button-wrapper">
							<a class="button contact-modal-trigger black-letters">Quiero Información</a>
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
					<h2 class="section-title color-white">Nos esforzamos activamente por superar las <span class="primary-accent">expectativas</span></h2>
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
	<section class="c-s section-four">
		<div class="container">
			<div class="section-content section-four-content">
				<div class="row dm">
					<div class="col-lg-6 dp">
						<div class="hero-contact-wrapper">
							<div class="hero-contact-content section-contact-content">
								<span class="hero-contact-title domain"></span>
								<form id="contact-form-2" action="" method="POST">
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
										<button type="submit" class="button large">Contáctame</button>
									</div>
									<div id="mail-status"></div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 dp">
						<h2><span class="primary-accent">Ahorre 50%</span> en su póliza de seguro de vida.</h2>
						<p>En nuestro país existen distintos tipos de seguros de vida. Gracias a esto, podrás elegir el que más se adapte a tu estilo de vida.</p>
						<ul>
							<li><span class="material-icons-two-tone list-icon">check_circle</span>Estarás protegido de algunos riesgos que te puedan causar daños</li>
							<li><span class="material-icons-two-tone list-icon">check_circle</span>El bienestar económico de tu familia garantizado tras tu fallecimiento</li>
							<li><span class="material-icons-two-tone list-icon">check_circle</span>Cobertura de incapacidad permanente absoluta</li>
						</ul>
						<div class="button-wrapper">
							<a class="button contact-modal-trigger">Quiero Información</a>
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