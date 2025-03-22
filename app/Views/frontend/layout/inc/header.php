<!-- start of sidenav -->
<aside>
    <!-- Header Banner Image -->
    <div class="header-banner-image mb-3">
        <div class="text-center">
            <img src="<?= base_url('/images/img5.png') ?>" alt="Header" class="img-fluid" style="max-width:500px;">
        </div>
    </div>
    
    <div class="sidenav position-sticky d-flex flex-column justify-content-between">
        <div class="navbar-brand">
            <img src="<?= base_url('images/logo.png') ?>" alt="">
            <span class="brand-text ms-2">EGOBLOG</span>
        </div>
        <!-- end of navbar-brand -->

        <div class="navbar navbar-dark my-4 p-0 font-primary">
            <ul class="navbar-nav w-100">
                <li class="nav-item active">
                    <a class="nav-link text-white px-0 pt-0" href="<?= base_url() ?>"><i class="fas fa-home me-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-0" href="<?= base_url('about') ?>"><i class="fas fa-user me-2"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-0" href="<?= base_url('contact') ?>"><i class="fas fa-envelope me-2"></i>Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-0" href="<?= base_url('weather/London') ?>"><i class="fas fa-cloud-sun me-2"></i>Weather</a>
                </li>
            </ul>
        </div>
        <!-- end of navbar -->

        <!-- Search box with functional form -->
        <div class="search-box p-3">
            <form action="<?= base_url('search') ?>" method="get">
                <div class="input-group">
                    <input type="text" name="q" class="form-control bg-transparent text-white border-end-0" placeholder="Search recipes, travel tips..." required>
                    <button class="btn btn-outline-light border-start-0" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</aside>
<!-- end of sidenav -->