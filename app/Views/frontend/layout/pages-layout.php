<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= isset($pageTitle) ? $pageTitle : 'New page title' ?></title>

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
	<!-- theme meta -->
	<?= $this->renderSection('page_meta') ?>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
	
	<!-- ** Plugins Needed for the Project ** -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('frontend/plugins/bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('frontend/plugins/fontawesome/css/all.css') ?>">

	<!-- Main Stylesheet -->
	<link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
	
	<!-- Girly Theme -->
	<link href="<?= base_url('frontend/css/girly-theme.css') ?>" rel="stylesheet">
	
	<?= $this->renderSection('stylesheets') ?>

	<!--Favicon-->
	<link rel="shortcut icon" href="<?= base_url('images/favicon.png') ?>" type="image/x-icon">
	<link rel="icon" href="<?= base_url('images/favicon.png') ?>" type="image/x-icon">
</head>

<body>
	<!-- START preloader-wrapper -->
	<div class="preloader-wrapper">
		<div class="preloader-inner">
			<div class="spinner-border text-red"></div>
		</div>
	</div>
	<!-- END preloader-wrapper -->

	<!-- START main-wrapper -->
	<section class="d-flex">
		<!-- Include Header - Use the correct path -->
		<?php include(__DIR__ . '/inc/header.php') ?>
		
		<div class="main-content">
			<!-- Include Mobile Navigation - Use the correct path -->
			<?php include(__DIR__ . '/inc/mobile-nav.php') ?>
			
			<div class="container pt-4 mt-5">
				<!-- Main Content Section -->
				<?= $this->renderSection('content') ?>
			</div>

			<!-- Include Footer - Use the correct path -->
			<?php include(__DIR__ . '/inc/footer.php') ?>
		</div>
	</section>
	<!-- END main-wrapper -->

	<!-- All JS Files -->
	<script src="<?= base_url('plugins/jQuery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('plugins/bootstrap/bootstrap.min.js') ?>"></script>

	<!-- Main Script -->
	<script src="<?= base_url('js/script.js') ?>"></script>
	<?= $this->renderSection('scripts') ?>
</body>
</html>