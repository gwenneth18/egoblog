<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?= isset($pageTitle) ? $pageTitle : 'EGOBLOG Admin'; ?></title>
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/images/img2.jpg"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/images/img2.jpg"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/images/img2.jpg"
		/>
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" type="text/css" href="/backend/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/backend/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/backend/vendors/styles/style.css" />
        
        <style>
            body {
                background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
                color: #4a4a4a;
            }
            
            .main-container {
                background-color: transparent;
            }
            
            .card-box {
                border-radius: 15px;
                box-shadow: 0 5px 15px rgba(244, 143, 177, 0.15);
                border: none;
                background-color: rgba(255, 255, 255, 0.95);
            }
            
            body::before {
                content: "";
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: url("data:image/svg+xml,%3Csvg width='52' height='26' viewBox='0 0 52 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23f48fb1' fill-opacity='0.1'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                opacity: 1;
                pointer-events: none;
                z-index: -1;
            }
            
            h1, h2, h3, h4, h5, h6 {
                color: #ec407a;
            }
            
            .page-header .breadcrumb {
                background: transparent;
                padding: 0.5rem 1rem;
            }
            
            .breadcrumb-item.active {
                color: #ec407a;
            }
            
            .btn-primary {
                background-color: #ec407a;
                border-color: #ec407a;
            }
            
            .btn-primary:hover {
                background-color: #d81b60;
                border-color: #d81b60;
            }
            
            .header .header-left .brand-logo img {
                max-width: 100px;
                height: auto;
            }
            
            .left-side-bar {
                background-color: rgba(255, 255, 255, 0.9);
                border-right: 1px solid rgba(236, 64, 122, 0.1);
            }
            
            .left-side-bar .menu-block .dropdown-toggle {
                color: #ec407a;
            }
            
            .pd-20 {
                border-radius: 10px;
            }
        </style>
        
        <?= $this->renderSection('stylesheets') ?>
	</head>
	<body>
	
        <?= view('backend/layout/inc/header'); ?>

        <?= view('backend/layout/inc/right-sidebar'); ?>

        <?= view('backend/layout/inc/left-sidebar'); ?>

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					
					<div>
                    <?= $this->renderSection('content'); ?>
                    </div>
				</div>
                <?= view('backend/layout/inc/footer'); ?>
            </div>
		</div>
		
		<script src="/backend/vendors/scripts/core.js"></script>
		<script src="/backend/vendors/scripts/script.min.js"></script>
		<script src="/backend/vendors/scripts/process.js"></script>
		<script src="/backend/vendors/scripts/layout-settings.js"></script>
		<?= $this->renderSection('scripts') ?>
	</body>
</html>