<?= $this->extend('frontend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!-- Search Results Banner -->
<div class="welcome-banner text-center mb-5">
    <h1 class="display-5 fw-bold" style="color: #fff; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">Search Results</h1>
    <p class="lead">Found <?= $total ?> results for "<?= esc($query) ?>"</p>
    <div class="pink-divider mx-auto my-4"></div>
</div>

<!-- Search Results -->
<div class="row">
    <div class="col-12">
        <?php if ($total > 0): ?>
            <?php foreach ($results as $result): ?>
                <div class="card search-result-item mb-4">
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="<?= $result['url'] ?>"><?= esc($result['title']) ?></a>
                        </h3>
                        <div class="post-meta mb-3">
                            <span class="badge" style="background-color: var(--primary-color);"><?= ucfirst($result['type']) ?></span>
                            <span class="ms-2 text-muted"><i class="fas fa-clock me-1"></i><?= $result['date'] ?></span>
                        </div>
                        <p class="card-text"><?= esc($result['excerpt']) ?></p>
                        <a href="<?= $result['url'] ?>" class="btn btn-sm" style="background-color: var(--primary-color); color: white;">Read More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-info">
                <h4 class="alert-heading">No results found</h4>
                <p>Sorry, no content matched your search for "<?= esc($query) ?>". Please try different keywords or check out our categories below.</p>
            </div>
            
            <!-- Category suggestions -->
            <div class="mt-5">
                <h3>Browse by Category</h3>
                <div class="row mt-3">
                    <div class="col-md-4 mb-3">
                        <a href="<?= base_url('#travel') ?>" class="card text-decoration-none">
                            <div class="card-body text-center">
                                <i class="fas fa-plane-departure fa-3x mb-3" style="color: var(--primary-color);"></i>
                                <h5>Travel</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="<?= base_url('#recipes') ?>" class="card text-decoration-none">
                            <div class="card-body text-center">
                                <i class="fas fa-utensils fa-3x mb-3" style="color: var(--primary-color);"></i>
                                <h5>Recipes</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="<?= base_url('#relationships') ?>" class="card text-decoration-none">
                            <div class="card-body text-center">
                                <i class="fas fa-heart fa-3x mb-3" style="color: var(--primary-color);"></i>
                                <h5>Relationships</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection() ?>