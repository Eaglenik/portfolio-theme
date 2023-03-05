<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
	<? wp_head()?>
</head>
<body>
	<!-- navbar -->
	<div class="navbar--ban">
		<nav class="container navbar d-flex justify-content-between align-content-center">
			<ul class="navbar-list justify-content-center align-content-center gap-sm-4 gap-2 p-0 m-0">
				<li><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="navbar-list_contact"><a
							href="#!" class="lng-ca">Contact</a></button></li>
			</ul>
			<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
				aria-controls="offcanvasExample">
				<span></span>
				<span></span>
				<span></span>
			</a>
			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
				aria-labelledby="offcanvasExampleLabel">
				<div class="offcanvas-body d-flex flex-column align-items-start gap-2">
					<div class="offcanvas-body_contact">
						<h3 class="text-center">Contact</h3>
						<div class="modal-body_contacts row flex-column align-items-center g-2">
							<div class="col-3 d-flex gap-2"><span class="icon-gmail"></span>
								<p>23anohinnikolay23 @gmail.com</p>
							</div>
							<div class="col-3 d-flex gap-2"><span class="icon-github"></span><a
									href="https://github.com/Eaglenik">Eaglenik</a></div>
							<div class="col-3 d-flex gap-2"><span class="icon-telegram"></span><a
									href="https://t.me/L1sTerbak">L1sTerbak</a></div>
							<div class="col-3 d-flex gap-2"><span class="icon-phone"></span>
								<p>+998 90 945 72 09</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar-settings d-flex align-items-center gap-2">
				<div class="dropdown d-flex align-items-center">
					<a class="btn btn-secondary dropdown-toggle lng-lan" href="#" role="button" id="dropdownMenuLink"
						data-bs-toggle="dropdown" aria-expanded="false">En</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#en" id="lang-en">En</a></li>
						<li><a class="dropdown-item" href="#ru" id="lang-ru">Ru</a></li>
					</ul>
				</div>
				<button type="button" class="navbar-btn dark" data-theme="dark">
					<span class="icon-sun"></span>
					<span class="icon-moon"></span>
				</button>
			</div>
		</nav>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header d-flex align-items-center justify-content-end">
					<button type="button" class="icon-cross d-flex align-items-center" data-bs-dismiss="modal"
						aria-label="Закрыть"></button>
				</div>
				<div class="modal-body">
					<div class="modal-body_contacts row flex-column align-items-center g-2">
						<div class="col-3 d-flex gap-2"><span class="icon-gmail"></span>
							<p>23anohinnikolay23@gmail.com</p>
						</div>
						<div class="col-3 d-flex gap-2"><span class="icon-github"></span><a
								href="https://github.com/Eaglenik">Eaglenik</a></div>
						<div class="col-3 d-flex gap-2"><span class="icon-telegram"></span><a
								href="https://t.me/L1sTerbak">L1sTerbak</a></div>
						<div class="col-3 d-flex gap-2"><span class="icon-phone"></span>
							<p>+998 90 945 72 09</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="content">
			<!-- header -->
			<header class="container header d-flex justify-content-between align-items-center row g-1 element-animation">
				<div class="header-info d-flex flex-column col-6">
					<h1 class="lng-hh1">about.</h1>
					<p class="lng-hp1">Hi.My name is Nikolay.Iʼm a Front-end Web developer from Tashkent.</p>
					<p class="lng-hp2">This is my website business card.</p>
				</div>
				<div class="header-img col-6">
					<img data-speed="0.7" src="<?php bloginfo('template_url'); ?>/assets/image/development-big@2x.png" alt="">
				</div>
			</header>