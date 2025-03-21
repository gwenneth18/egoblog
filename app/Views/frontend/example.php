<?= $this->extend('frontend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!-- Welcome Banner -->
<div class="welcome-banner text-center mb-5">
    <h1 class="display-4 fw-bold" style="color: #ff70b5; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">HELLO WELCOME TO EGOBLOG</h1>
    <p class="lead">Sharing my journey through travel adventures, delicious recipes, and relationship insights</p>
    <div class="pink-divider mx-auto my-4"></div>
</div>

<div class="row justify-content-between">
	<div class="col-lg-7">
		<!-- Travel Post -->
		<div class="card post-item bg-transparent border-0 mb-5">
			<a href="post-details.html">
				<img class="card-img-top rounded-0" src="images/post/post-lg/01.png" alt="Bali Sunset Beach">
			</a>
			<div class="card-body px-0">
				<h2 class="card-title">
					<a class="text-white opacity-75-onHover" href="post-details.html">My Unforgettable Week Exploring the Hidden Beaches of Bali</a>
				</h2>
				<ul class="post-meta mt-3">
					<li class="d-inline-block mr-3">
						<span class="fas fa-clock text-primary"></span>
						<a class="ml-1" href="#">June 15, 2023</a>
					</li>
					<li class="d-inline-block">
						<span class="fas fa-list-alt text-primary"></span>
						<a class="ml-1" href="#">Travel</a>
					</li>
				</ul>
				<p class="card-text my-4">Last month, I finally took that dream trip to Bali I've been planning for years. Beyond the tourist hotspots, I discovered secluded beaches with crystal clear waters and vibrant local culture. From sunrise yoga to midnight beach parties, every moment was magical...</p>
			</div>
		</div>
		
		<!-- Recipe Post -->
		<div class="card post-item bg-transparent border-0 mb-5">
			<a href="post-details.html">
				<img class="card-img-top rounded-0" src="images/post/post-lg/02.png" alt="Homemade Pasta">
			</a>
			<div class="card-body px-0">
				<h2 class="card-title">
					<a class="text-white opacity-75-onHover" href="post-details.html">Easy Homemade Pasta Recipe That Will Impress Your Dinner Guests</a>
				</h2>
				<ul class="post-meta mt-3">
					<li class="d-inline-block mr-3">
						<span class="fas fa-clock text-primary"></span>
						<a class="ml-1" href="#">May 28, 2023</a>
					</li>
					<li class="d-inline-block">
						<span class="fas fa-list-alt text-primary"></span>
						<a class="ml-1" href="#">Cooking</a>
					</li>
				</ul>
				<p class="card-text my-4">There's something incredibly satisfying about making pasta from scratch. With just flour, eggs, and a little patience, you can create restaurant-quality pasta at home. I've perfected this recipe over dozens of attempts, and today I'm sharing all my secrets...</p>
			</div>
		</div>
		
		<!-- Relationship Post -->
		<div class="card post-item bg-transparent border-0 mb-5">
			<a href="post-details.html">
				<img class="card-img-top rounded-0" src="images/post/post-lg/03.png" alt="Couple Communication">
			</a>
			<div class="card-body px-0">
				<h2 class="card-title">
					<a class="text-white opacity-75-onHover" href="post-details.html">5 Communication Habits That Transformed My Relationship</a>
				</h2>
				<ul class="post-meta mt-3">
					<li class="d-inline-block mr-3">
						<span class="fas fa-clock text-primary"></span>
						<a class="ml-1" href="#">May 10, 2023</a>
					</li>
					<li class="d-inline-block">
						<span class="fas fa-list-alt text-primary"></span>
						<a class="ml-1" href="#">Relationships</a>
					</li>
				</ul>
				<p class="card-text my-4">Good communication is the foundation of any healthy relationship, but it doesn't always come naturally. After struggling with misunderstandings and unnecessary arguments, my partner and I discovered these five communication techniques that completely changed how we connect...</p>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-5">
		<!-- About Me Widget -->
		<div class="widget text-center">
			<img class="author-thumb-sm rounded-circle d-block mx-auto" src="images/author-sm.png" alt="Author Photo">
			<h2 class="widget-title text-white d-inline-block mt-4">About Me</h2>
			<p class="mt-4">Hello! I'm Emma, a passionate traveler, home chef, and relationship enthusiast. Through this blog, I share my adventures around the world, kitchen experiments, and insights on building meaningful connections.</p>
			<ul class="list-inline mt-3">
				<li class="list-inline-item">
					<a href="#!" class="text-white text-primary-onHover p-2">
						<span class="fab fa-twitter"></span>
					</a>
				</li>
				<li class="list-inline-item">
					<a href="#!" class="text-white text-primary-onHover p-2">
						<span class="fab fa-facebook-f"></span>
					</a>
				</li>
				<li class="list-inline-item">
					<a href="#!" class="text-white text-primary-onHover p-2">
						<span class="fab fa-instagram"></span>
					</a>
				</li>
				<li class="list-inline-item">
					<a href="#!" class="text-white text-primary-onHover p-2">
						<span class="fab fa-pinterest"></span>
					</a>
				</li>
			</ul>
		</div>
		
		<!-- Subscribe Widget -->
		<div class="widget bg-dark p-4 text-center">
			<h2 class="widget-title text-white d-inline-block mt-4">Join My Journey</h2>
			<p class="mt-4">Subscribe to get my latest travel stories, recipes, and relationship advice delivered straight to your inbox.</p>
			<form action="#">
				<div class="form-group">
					<input type="email" class="form-control bg-transparent rounded-0 my-4" placeholder="Your Email Address">
					<button class="btn btn-primary">Subscribe Now <img src="images/arrow-right.png" alt=""></button>
				</div>
			</form>
		</div>
		
		<!-- Categories Widget -->
		<div class="widget">
			<div class="mb-5 text-center">
				<h2 class="widget-title text-white d-inline-block">Explore Topics</h2>
			</div>
			<ul class="list-unstyled category-list">
				<li><a href="#" class="d-flex justify-content-between align-items-center">
					<span><i class="fas fa-plane-departure me-2"></i> Travel Adventures</span>
					<span class="badge bg-primary rounded-pill">12</span>
				</a></li>
				<li><a href="#" class="d-flex justify-content-between align-items-center">
					<span><i class="fas fa-utensils me-2"></i> Cooking & Recipes</span>
					<span class="badge bg-primary rounded-pill">15</span>
				</a></li>
				<li><a href="#" class="d-flex justify-content-between align-items-center">
					<span><i class="fas fa-heart me-2"></i> Love & Relationships</span>
					<span class="badge bg-primary rounded-pill">8</span>
				</a></li>
				<li><a href="#" class="d-flex justify-content-between align-items-center">
					<span><i class="fas fa-camera me-2"></i> Photography</span>
					<span class="badge bg-primary rounded-pill">6</span>
				</a></li>
				<li><a href="#" class="d-flex justify-content-between align-items-center">
					<span><i class="fas fa-book me-2"></i> Personal Journal</span>
					<span class="badge bg-primary rounded-pill">4</span>
				</a></li>
			</ul>
		</div>
		
		<!-- Popular Recipes Widget -->
		<div class="widget">
			<div class="mb-5 text-center">
				<h2 class="widget-title text-white d-inline-block">Popular Recipes</h2>
			</div>
			<div class="card post-item bg-transparent border-0 mb-5">
				<a href="post-details.html">
					<img class="card-img-top rounded-0" src="images/post/post-sm/01.png" alt="Thai Curry">
				</a>
				<div class="card-body px-0">
					<h3 class="card-title">
						<a class="text-white opacity-75-onHover" href="post-details.html">Easy Thai Red Curry (Ready in 30 Minutes!)</a>
					</h3>
					<ul class="post-meta mt-3 mb-4">
						<li class="d-inline-block mr-3">
							<span class="fas fa-clock text-primary"></span>
							<a class="ml-1" href="#">April 18, 2023</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="card post-item bg-transparent border-0 mb-5">
				<a href="post-details.html">
					<img class="card-img-top rounded-0" src="images/post/post-sm/02.png" alt="Chocolate Cake">
				</a>
				<div class="card-body px-0">
					<h3 class="card-title">
						<a class="text-white opacity-75-onHover" href="post-details.html">Decadent Chocolate Lava Cake for Two</a>
					</h3>
					<ul class="post-meta mt-3 mb-4">
						<li class="d-inline-block mr-3">
							<span class="fas fa-clock text-primary"></span>
							<a class="ml-1" href="#">March 22, 2023</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>