<?php // app/Views/frontend/weather_error.php ?>
<?= $this->extend('frontend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-danger">
                <div class="card-body text-center">
                    <h2 class="card-title text-danger mb-4">
                        <i class="fas fa-exclamation-triangle"></i> Weather Information Unavailable
                    </h2>

                    <p class="lead">
                        We're sorry, but we couldn't retrieve the weather information at this time.
                    </p>

                    <div class="alert alert-warning">
                        <p>Possible reasons:</p>
                        <ul class="list-unstyled">
                            <li>• Invalid city name</li>
                            <li>• Network connectivity issue</li>
                            <li>• API service interruption</li>
                        </ul>
                    </div>

                    <a href="javascript:history.back()" class="btn btn-primary">
                        <i class="fas fa-arrow-left"></i> Go Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>