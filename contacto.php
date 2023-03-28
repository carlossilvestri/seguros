<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<?php
include 'inc/layout/head.php';
?>
<script src="/1.php"></script>
<body class="subpage">

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s section-four section-subpage-first" style="padding-bottom:30px!important;">
		<div class="container">
			<div class="section-content section-four-content">
				<div class="row dm">
					<div class="col-lg-6 dp text-right">
						<div class="section-two-images-wrapper">
							<div class="s2-img-1-w">
								<img src="./../img/herosub-img-1.jpg" class="s2-img-1 img-fluid" alt="" />
							</div>
							<img src="./../img/herosub-img-2.jpg" class="s2-img-2 img-fluid" alt="" />
							<div class="s2-circle-img-wrapper">
								<img src="./../img/s2-img-3.jpg" class="s2-img-3 img-fluid" alt="" />
							</div>
						</div>
					</div>


					<div class="col-lg-6 dp">
						<div class="hero-contact-wrapper question-contact-wrapper">
							<div class="">
								<span class="text-center" style="color:#000;font-family:poppins;font-size:18px;display:inherit">Por favor,
									responda para obtener ayuda</span>
								<span class="hero-contact-title" style="font-size:2em !important;font-family:'Poppins', sans-serif !important;">¿Tiene
									contratada una póliza con nosotros?</span>
								<div class="contact-cta-buttons-wrapper">
									<a class="button content-button call-cta-button call-cta-button-f"><span class="black-letters">SÍ, TENGO
											PÓLIZA</span></a>
									<a class="button content-button call-cta-button black-letters"><span class="black-letters">NO TENGO PÓLIZA</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-call-cta">
		<div class="container" style="background:#ebebeb!important;">
		<h2 class="quieres-texto" style="font-family:'Poppins', sans-serif;font-weight:400;text-align:center!important;font-size:2em;padding-top:15px;"></h2>
			<h2 style="font-family:'Poppins', sans-serif;font-weight:400;text-align:center!important;font-size:2em;padding-top:15px;">
				Teléfono 24 horas</h2>
			<div class="section-content section-call-cta-content">
				<div class="section-title-wrapper text-center">
					<div class="modal-end-cta-button-w">
						<a class="button content-button boton_custom_llamada call-cta-big-button numero" style="margin-top:-15px !important;" onclick="saveOption(this, 'conversion');" href="tel:<?php echo $phone; ?>"> <i class="fas fa-phone-alt" aria-hidden="true" style="margin-left: 15px;margin-right: 5px;"></i><span class="black-letters numero-texto"><?php echo $phone; ?></span></a>
						<p class="text-legal"></p>
					</div>
				</div>
				<p class="text-black text-center call-cta-text" style="margin-top:-20px;font-weight:300;font-family:'Poppins', sans-serif;">Vamos a atenderle las 24
					horas del día. Si tiene cualquier duda o problema con su póliza, no olvide contactanos y le
					atenderemos inmediatamente.</p><br />
			</div>
		</div>
	</section>
	<section id="testimonials-wrapper" class="c-s section-testimonials">
		<div class="container">
			<div class="section-content testiomonials-content">
				<div class="section-title-wrapper text-center">
					<h2 class="section-title">Testimonios de clientes</h2>
				</div>
				<div class="testimonials">
					<div class="testimonials-item">
						<div class="testimonial-wrapper">
							<div class="testimonial">Una gran aseguradora, servicio de atención al cliente 10/10, estoy
								muy contento</div>
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
							<div class="testimonial">Aseguradora TOP, me repararon mi coche en 4 días sin ningún coste.
								Recomendado!</div>
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
							<div class="testimonial">Ahora siento que estoy totalmente seguro. Es una aseguradora muy
								buena y rápida con las gestiones </div>
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
							<div class="testimonial">La atención al cliente el genial. El soporte 24hes sin duda una
								gran ventaja. La recomiendo al 100%. </div>
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
							<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="96" data-speed="3000" data-refresh-interval="10">96</span>%</span>
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
	<div id="question-modal-wrapper" class="question-modal-wrapper mfp-hide">
		<div id="close-modal"><span class="material-icons-two-tone">cancel</span></div>
		<div class="question-modal-content">
			<div class="question-modal-step-1-wrapper">
				<h2 class="contact-title text-center">¿Qué necesita?</h2>
				<div class="answers-wrapper">
					<div class="answer-button answer-button-1 black-letters">ATENCIÓN PERSONALIZADA</div>
					<div class="answer-button answer-button-1 black-letters">DAR UN PARTE</div>
					<div class="answer-button answer-button-1 black-letters">SOLICITAR AUTORIZACIÓN</div>
					<div class="answer-button answer-button-1 black-letters">OTROS</div>
				</div>
			</div>
			<div class="question-modal-step-2-wrapper">
				<h2 class="contact-title text-center">Teléfono de contacto</h2>
				<h2 class="numero-texto" style="color: var(--primary-color);font-size: 2em;margin-top: -20px;margin-bottom: 10px;text-align:center;">
				<?php echo $phone; ?></h2>
				<div class="modal-end-cta-button-w">
					<p style="margin-bottom:-1px;">Haga click en el botón para llamar</p>
					<a class="button content-button modal-end-cta-button numero" onclick="saveOption(this, 'conversion');" href="tel:<?php echo $phone; ?>"><i class="fas fa-phone-alt" aria-hidden="true" style="margin-left: 15px;margin-right: 5px;"></i><span class="black-letters">Llamar ahora</span></a>
					<p class="text-legal"></p>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
include 'inc/layout/scripts.php';
?>

</html>