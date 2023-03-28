<header class="header">
	<div class="container">
		<div class="header-content">
			<div class="logo-wrapper">
				<a href="#" style="text-decoration:none!important;">

					<a class="logo-nf" href="#" style="text-decoration:none">
						<h3 class="logo-header"><span class="header-name"><span class="domain"></span> | </span><span class="logo-color"><?php echo $pages[$file] ?></span></h3>
					</a>
					<a class="logo-f" href="#" style="text-decoration:none">
						<h3 class="logo-header"><span class="header-name"><span class="domain"></span> | </span><span class="logo-color"><?php echo $pages[$file] ?></span></h3>
					</a>
				</a>
			</div>
			<div class="nav-wrapper nav-wrapper-d">
				<div class="nav-content">
					<ul class="nav">
						<?php foreach ($pagesHeader as $key => $value) {   ?>
						<li class="<?php if ($page == $value) echo 'active'; ?>"><a href="<?php echo $key ?>"><?php echo $value ?></a></li>
						<?php } ?>
						<li>
							<a class="has-submenu">Seguros</a>
							<ul class="submenu">
								<li><a href="seguro-de-auto.php">Seguro de auto</li>
								<li><a href="seguro-de-decesos.php">Seguro de decesos</li>
								<li><a href="seguro-de-hogar.php">Seguro de hogar</li>
								<li><a href="seguro-de-salud.php">Seguro de salud</li>
								<li><a href="seguro-de-viaje.php">Seguro de viaje</li>
								<li><a href="seguro-de-familiar.php">Seguro de familiar</li>
							</ul>
						</li>
						<li><a class="button contact-modal-trigger"><span class="black-letters">Quiero Información</span></a></li>
					</ul>
				</div>
			</div>
			<div class="mobile-nav-trigger"><span class="material-icons-two-tone">menu</span></div>
		</div>
	</div>
</header>