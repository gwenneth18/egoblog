<?= $this->extend('frontend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!-- Contact Banner -->
<div class="welcome-banner text-center mb-5">
    <h1 class="display-4 fw-bold" style="color: #fff; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">Connect With Me</h1>
    <p class="lead">Let's stay connected!</p>
    <div class="pink-divider mx-auto my-4"></div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h3 class="card-title mb-4 text-center" style="color: var(--primary-color);">Follow My Journey</h3>
                    
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="https://youtube.com/@gwenandjay?si=a98v52Via2XYuIEM" target="_blank" class="d-flex align-items-center text-decoration-none">
                                <i class="fab fa-youtube fa-2x me-3" style="color: #FF0000;"></i>
                                <span>YouTube: @gwenandjay</span>
                            </a>
                        </li>
                        
                        <li class="mb-3">
                            <a href="https://www.tiktok.com/@gwenandjay?_t=ZN-8utjdc9CGPO&_r=1" target="_blank" class="d-flex align-items-center text-decoration-none">
                                <i class="fab fa-tiktok fa-2x me-3" style="color: #000000;"></i>
                                <span>TikTok: @gwenandjay</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="https://www.instagram.com/gwenny_mandys?igsh=OGl1MjA1a2hiYzA2&utm_source=qr" target="_blank" class="d-flex align-items-center text-decoration-none">
                                <i class="fab fa-instagram fa-2x me-3" style="color: #E1306C;"></i>
                                <span>Instagram: @gwenny_mandys</span>
                            </a>
                        </li>
                    </ul>

                    <div class="mt-5 text-center">
                        <p class="text-muted">
                            Want to see more of my adventures? 
                            Follow me on social media!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>