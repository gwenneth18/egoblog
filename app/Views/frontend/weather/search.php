<?= $this->extend('frontend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="text-center mb-4" style="color: var(--primary-color);">Weather Lookup</h2>
                    
                    <form action="<?= base_url('weather/search') ?>" method="get" class="weather-search-form">
                        <div class="input-group">
                            <input type="text" name="city" class="form-control" placeholder="Enter city name (e.g., London, New York, Paris)" 
                                   value="<?= isset($weatherData) ? esc($weatherData['city']) : '' ?>" required>
                            <select name="country" class="form-select" style="max-width: 150px;">
                                <option value="">All Countries</option>
                                <option value="US">United States</option>
                                <option value="GB">United Kingdom</option>
                                <option value="CA">Canada</option>
                                <option value="AU">Australia</option>
                                <option value="IN">India</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                <option value="JP">Japan</option>
                                <option value="BR">Brazil</option>
                            </select>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search me-2"></i>Check Weather
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <?php if(isset($weatherData)): ?>
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="card-title mb-4" style="color: var(--primary-color);">
                            Weather in <?= esc($weatherData['city']) ?>, <?= esc($weatherData['country']) ?>
                        </h3>

                        <img src="<?= esc($iconUrl) ?>" alt="Weather Icon" class="mb-3" style="width: 100px; height: 100px;">

                        <div class="weather-details">
                            <p class="h4 mb-3">
                                <?= esc(ucfirst($weatherData['description'])) ?>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Temperature:</strong> <?= esc($weatherData['temperature']) ?>°C</p>
                                    <p><strong>Feels Like:</strong> <?= esc($weatherData['feels_like']) ?>°C</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Humidity:</strong> <?= esc($weatherData['humidity']) ?>%</p>
                                    <p><strong>Wind Speed:</strong> <?= esc($weatherData['wind_speed']) ?> m/s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($error)): ?>
                <div class="alert alert-danger text-center">
                    <?= esc($error) ?>
                </div>
            <?php endif; ?>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Popular Cities</h4>
                            <div class="d-flex flex-wrap justify-content-center">
                                <?php 
                                $popularCities = [
                                    'London' => 'GB',
                                    'New York' => 'US', 
                                    'Paris' => 'FR', 
                                    'Tokyo' => 'JP', 
                                    'Sydney' => 'AU',
                                    'Toronto' => 'CA',
                                    'Berlin' => 'DE',
                                    'Mumbai' => 'IN'
                                ];
                                ?>
                                <?php foreach($popularCities as $city => $country): ?>
                                    <a href="<?= base_url("weather/search?city={$city}&country={$country}") ?>" class="btn btn-outline-secondary m-1">
                                        <?= $city ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>