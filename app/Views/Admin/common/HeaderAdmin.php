<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half" data-style-switcher-options="{'changeLogo': false}">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Products | Porto Admin - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url("asset/vendor/bootstrap/css/bootstrap.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/animate/animate.compat.css")?>">

		<link rel="stylesheet" href="<?=base_url("asset/vendor/font-awesome/css/all.min.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/boxicons/css/boxicons.min.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/magnific-popup/magnific-popup.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css")?>" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url("asset/vendor/jquery-ui/jquery-ui.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/jquery-ui/jquery-ui.theme.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/select2/css/select2.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/select2-bootstrap-theme/select2-bootstrap.min.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/dropzone/basic.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/dropzone/dropzone.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css")?>" />
		<link rel="stylesheet" href="<?=base_url("asset/vendor/pnotify/pnotify.custom.css")?>" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url("asset/css/theme.css")?>" />


		<!-- Theme Layout -->
		<link rel="stylesheet" href="<?=base_url("asset/css/layouts/modern.css")?>" />
		<!--(remove-empty-lines-end)-->



		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url("asset/css/custom.css")?>">

		<!-- Head Libs -->
		<script src="<?=base_url("asset/vendor/modernizr/modernizr.js")?>"></script>
		<script src="<?=base_url("asset/master/style-switcher/style.switcher.localstorage.js")?>"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header header-nav-menu header-nav-links">
				<div class="logo-container">
					<a href="../" class="logo">
<img src="<?=base_url("asset/img/logo-modern.png")?>" class="logo-image" width="90" height="24" alt="Porto Admin" /><img src="<?=base_url("asset/img/logo-default.png")?>" class="logo-image-mobile" width="90" height="41" alt="Porto Admin" />
					</a>
					<button class="btn header-btn-collapse-nav d-lg-none" data-toggle="collapse" data-target=".header-nav">
						<i class="fas fa-bars"></i>
					</button>
			
					<!-- start: header nav menu -->
					<div class="header-nav collapse">
						<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
							<nav>
								<ul class="nav" >
									<li class="">
									    <a class="nav-link" href="/home/index">
									        Categorie
									    </a>    
									</li>
									<li class="dropdown">
									    <a class="nav-link dropdown-toggle" href="/home/index">
									        Layouts
									    </a>									    
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- end: header nav menu -->
				</div>
			
				<!-- start: Profil -->
				<div class="header-right">
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<span class="profile-picture profile-picture-as-text">JD</span>
                            <div class="profile-info profile-info-no-role" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Hi, <strong class="font-weight-semibold">John Doe</strong></span>
							</div>
							
							<i class="fas fa-chevron-down text-color-dark"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li>
									<a role="menuitem" tabindex="-1" href="/home/profil"><i class="bx bx-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="/login/logout"><i class="bx bx-log-out"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: Profil -->
			</header>
			<!-- end: header -->
			

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-toggle d-none d-md-flex" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="/home/index">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
				               
				                    <li class="nav-parent nav-expanded nav-active">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
				                            <span>eCommerce</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            
				                            <li>
				                                <a class="nav-link" href="../admin/produit/index">
				                                    - Ajouter / Modifier Produit
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-category-list.html">
				                                    - Categories List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-category-form.html">
				                                    - Ajouter / Modifier Category
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-coupons-list.html">
				                                    - Sous-Categories List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-coupons-form.html">
                                                - Ajouter / Modifier Sous-Category
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-orders-list.html">
				                                    - List des Commandes
				                                </a>
				                            </li>
				                            
				                            <li>
				                                <a class="nav-link" href="ecommerce-customers-list.html">
				                                    - Customers List
				                                </a>
				                            </li>
				                            
				                        </ul>
				                    </li>                   
				
				                </ul>
				            </nav>
				
				            <hr class="separator" />								        
				
				        </div>
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->