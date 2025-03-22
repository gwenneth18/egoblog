<?= $this->extend('frontend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!-- About Banner -->
<div class="welcome-banner text-center mb-5">
    <h1 class="display-4 fw-bold" style="color: #fff; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">About Me</h1>
    <p class="lead">Get to know the person behind EGOBLOG</p>
    <div class="pink-divider mx-auto my-4"></div>
</div>

<div class="row">
    <div class="col-lg-5 mb-4">
        <img src="<?= base_url('images/img18.jpeg') ?>" alt="Gwenneth" class="img-fluid rounded shadow-sm" style="width: 100%; max-height: 500px; object-fit: cover;">
    </div>
    <div class="col-lg-7">
        <div class="card border-0 bg-transparent">
            <div class="card-body">
                <h2 class="mb-4" style="color: var(--primary-color);">Hello, I'm Gwenneth!</h2>
                
                <p>Welcome to EGOBLOG, my little corner of the internet where I share my passions, adventures, and creative endeavors.</p>
                
                <p>I'm currently a final year Computing and Information Technology student with a love for both the technical and creative sides of life. When I'm not coding or studying, you'll find me exploring new destinations, experimenting in the kitchen, or reflecting on relationships and personal growth.</p>
                
                <h4 class="mt-5 mb-3" style="color: var(--primary-color);">My Journey</h4>
                
                <p>My journey began when I realized that I wanted to document and share the things that bring me joy. As someone who straddles the worlds of technology and creativity, starting a blog seemed like the perfect outlet.</p>
                
                <p>Through EGOBLOG, I aim to inspire others to explore new places, try new recipes, and nurture their relationships. I believe that a balanced life involves both adventure and the comfort of good food and loving connections.</p>
                
                <h4 class="mt-5 mb-3" style="color: var(--primary-color);">What You'll Find Here</h4>
                
                <div class="row mt-4">
                    <div class="col-md-4 text-center mb-4">
                        <div class="about-category p-3" style="background-color: rgba(255,255,255,0.8); border-radius: 10px; min-height: 200px;">
                            <i class="fas fa-plane-departure fa-3x mb-3" style="color: var(--primary-color);"></i>
                            <h5>Travel Adventures</h5>
                            <p class="small">Join me as I explore hidden gems around the world, from mountain climbs in Albania to coastal adventures.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="about-category p-3" style="background-color: rgba(255,255,255,0.8); border-radius: 10px; min-height: 200px;">
                            <i class="fas fa-utensils fa-3x mb-3" style="color: var(--primary-color);"></i>
                            <h5>Delicious Recipes</h5>
                            <p class="small">Discover my favorite recipes from Nigerian classics to international cuisine, with easy-to-follow instructions.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="about-category p-3" style="background-color: rgba(255,255,255,0.8); border-radius: 10px; min-height: 200px;">
                            <i class="fas fa-heart fa-3x mb-3" style="color: var(--primary-color);"></i>
                            <h5>Relationship Insights</h5>
                            <p class="small">Reflections and ideas on building meaningful relationships and creating shared memories with loved ones.</p>
                        </div>
                    </div>
                </div>
                
                <h4 class="mt-5 mb-3" style="color: var(--primary-color);">Looking Forward</h4>
                
                <p>My aim is to be successful in both my tech career and personal endeavors. Through this blog, I hope to document my journey and inspire others along the way.</p>
                
                <p>Thank you for joining me on this adventure. Feel free to explore my posts and connect with me through the contact page!</p>
                
                <div class="mt-5 text-end">
				<img src="/images/img4.jpg" alt="EGOBLOG" style="max-width: 140px; height: auto;" />
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>