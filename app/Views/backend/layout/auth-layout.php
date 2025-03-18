<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
        <title><?= isset($pageTitle) ? $pageTitle : 'New Page Title'; ?></title>
		<!-- Site favicon -->
		<link
			rel="img3"
			sizes="180x180"
			href="/images/img3.jpg"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/images/img3.jpg"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/images/img2.jpg"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/backend/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/backend/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/backend/vendors/styles/style.css" />

		
        <?= $this->renderSection('stylesheets') ?>
	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="brand-logo">
					<a href="login.html">
						<img src="/images/img2.jpg" alt="EGOBLOG" style="max-width: 130px; height: auto;" />
					</a>
				</div>
				<div class="login-menu">
					<!-- Empty login menu -->
				</div>
			</div>
		</div>
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="/images/img3.jpg" alt="EGOBLOG" class="img-fluid" />
					</div>
					<div class="col-md-6 col-lg-5">
						<?= $this->renderSection('content') ?>	
					</div>
				</div>
			</div>
		</div>
		
		<!-- js -->
		<script src="/backend/vendors/scripts/core.js"></script>
		<script src="/backend/vendors/scripts/script.min.js"></script>
		<script src="/backend/vendors/scripts/process.js"></script>
		<script src="/backend/vendors/scripts/layout-settings.js"></script>
		<?= $this->renderSection('scripts') ?>
		
		<style>
		/* Add some styling to improve the login page appearance */
		.login-page {
			background: linear-gradient(135deg, #1e2a3a 0%, #0f1723 100%);
		}
		
		.login-header {
			background: rgba(0, 0, 0, 0.2);
			border-bottom: 1px solid rgba(255, 255, 255, 0.1);
		}
		
		.login-wrap img {
			max-width: 100%;
			height: auto;
			border-radius: 10px;
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
		}
		</style>
	</body>
</html>