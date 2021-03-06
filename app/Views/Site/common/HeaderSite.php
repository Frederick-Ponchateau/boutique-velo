 
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Accueil</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?= base_url()."/site/"?>img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?= base_url()."/site/"?>img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url()."/site/"?>vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>vendor/bootstrap-star-rating/css/star-rating.min.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url()."/site/"?>css/theme.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>css/theme-elements.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>css/theme-blog.css">
		<link rel="stylesheet" href="<?= base_url()."/site/"?>css/theme-shop.css">



		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="<?= base_url()."/site/"?>css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url()."/site/"?>css/custom.css">

		<!-- Head Libs -->
		<script src="<?= base_url()."/site/"?>vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body data-plugin-page-transition>

		<div class="body">
			
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
				<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
					
					<div class="header-container container">
						<div class="header-row py-2">
							<div class="header-column w-100">
								<div class="header-row justify-content-between">
								
									<ul class="header-extra-info col-lg-3 col-xl-2 pl-2 pl-xl-0 d-none d-lg-block">
										<li class="d-none d-sm-inline-flex ml-0">
											<div class="header-extra-info-icon">
												<i class="icons icon-phone text-3 text-color-dark position-relative top-1"></i>
											</div>
											<div class="header-extra-info-text">
												<label class="text-1 font-weight-semibold text-color-default">Contactez nous au </label>
												<strong class="text-4"><a href="tel:+1234567890" class="text-color-hover-primary text-decoration-none">+596 696442058</a></strong>
											</div>
										</li>
									</ul>
									<div class="d-flex col-auto col-lg-2 pr-0 pl-0 pl-xl-3">
									<ul class="header-extra-info">
											<li class="ml-0 ml-xl-4">
												<div class="header-extra-info-icon">
													<a href="<?=base_url("login")?>" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
														<i class="icons icon-user"></i>
													</a>
												</div>
											</li>
										</ul>
										<ul class="header-extra-info">
											<li class="ml-0 ml-xl-4">
												<div class="header-extra-info-icon">
													<a href="<?=base_url("Site/panier")?>" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
														<i class="fas fa-shopping-cart"></i>
													</a>
												</div>
											</li>
										</ul>
										
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">


								</div>
							</div>
						</div>
					</div>
					<div class="header-nav-bar header-nav-bar-top-border bg-light">
						<div class="header-container container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border justify-content-start" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '105px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
											<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1 w-100">
												<nav class="collapse w-100">
													<ul class="nav nav-pills w-100" id="mainNav">
														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle" href="<?=base_url("Site/home/index")?>">Categories</a>
														</li>
														<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<div class="dropdown-menu">
														<?php if(isset($tableCategorie)): 
														$listeCategorie = $tableCategorie->orderBy('category_name','ASC')->findAll();
																foreach($listeCategorie as $categorie):?>
															<div role="separator" class="dropdown-divider"></div>
															<li><a class="dropdown-item" href="<?=base_url("Site/Home/categorie/".$categorie["category_id"])?>"><?=$categorie["category_name"]?></a></li>
															<?php endforeach;
															endif?>
														<!-- categorie -->
														</div>

													</ul>
												</nav>
											</div>
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>