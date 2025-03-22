<?= $this->extend('frontend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!-- Welcome Banner -->
<div class="welcome-banner text-center mb-5">
	<h1 class="display-4 fw-bold" style="color: #ff70b5; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">HELLO WELCOME TO
		EGOBLOG</h1>
	<p class="lead">Sharing my journey through travel adventures, delicious recipes, and relationship insights</p>
	<div class="pink-divider mx-auto my-4"></div>
</div>

<!-- Travel Section Divider -->
<div class="section-divider text-center my-5">
    <h2 class="divider-title"><span class="fas fa-plane-departure me-2"></span>Travel Adventures</h2>
    <div class="divider-line"></div>
</div>

<div class="row justify-content-between">
	<div class="col-lg-7">
		<!-- Travel Post -->
		<div class="card post-item bg-transparent border-0 mb-5">
			<img class="card-img-top rounded-0" src="<?= base_url('images/img7.jpeg') ?>" alt="Albanian Landscape"
				style="max-height: 350px; object-fit: cover;">
			<div class="card-body px-0">
				<h2 class="card-title">
					Exploring Albania
				</h2>
				<h4 class="subtitle text-primary mb-3">Mountain Climbs & Squad Bike Rides</h4>
				<ul class="post-meta mt-3">
					<li class="d-inline-block mr-3">
						<span class="fas fa-clock text-primary"></span>
						<span class="ml-1">January 10, 2025</span>
					</li>
					<li class="d-inline-block">
						<span class="fas fa-list-alt text-primary"></span>
						<span class="ml-1">Travel</span>
					</li>
				</ul>
				<p class="card-text my-4">Albania surprised me in ways I never expected. A country often overlooked by
					travelers turned out to be Europe's hidden gem. My journey began in the coastal city of Vlorë, where
					I rented a quad bike to explore the stunning Albanian Riviera. Nothing compares to the feeling of
					wind in your hair as you zip along winding coastal roads, with the sparkling Ionian Sea on one side
					and dramatic mountains on the other.</p>

				<div class="row my-4">
					<div class="col-md-6 mb-3">
						<img src="<?= base_url('images/img8.jpeg') ?>" alt="Albania Mountain View"
							class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
					</div>
					<div class="col-md-6 mb-3">
						<img src="<?= base_url('images/img9.jpeg') ?>" alt="Albania Coastal Road"
							class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
					</div>
				</div>

				<p class="card-text">The real adventure started when I headed inland to the village of Theth, nestled in
					the heart of the Albanian Alps.My tour guide, had lived in these mountains for
					generations, led me up the slopes of Mount Theth. "These trails were once used by shepherds and
					freedom fighters," he told me as we climbed. Reaching the summit rewarded us with panoramic views
					that no photograph could do justice –.</p>
					<div class="row my-3">
    <div class="col-md-4 mb-3">
        <img src="<?= base_url('images/img10.jpeg') ?>" alt="Albania Scene 1" class="img-fluid rounded" style="max-height: 300px; width: auto; object-fit: cover;">
    </div>
    <div class="col-md-4 mb-3">
        <img src="<?= base_url('images/img11.jpeg') ?>" alt="Albania Scene 2" class="img-fluid rounded" style="max-height: 300px; width: auto; object-fit: cover;">
    </div>
    <div class="col-md-4 mb-3">
        <img src="<?= base_url('images/img12.jpeg') ?>" alt="Albania Scene 3" class="img-fluid rounded" style="max-height: 300px; width: auto; object-fit: cover;">
    </div>
</div>
				<p class="card-text">What makes Albania truly special isn't just its untouched landscapes – it's the
					incredible hospitality.</p>
			</div>
		</div>

        <!-- Cooking Section Divider -->
        <div class="section-divider text-center my-5">
            <h2 class="divider-title"><span class="fas fa-utensils me-2"></span>Cooking & Recipes</h2>
            <div class="divider-line"></div>
        </div>

	<!-- Recipe Post -->
<div class="card post-item bg-transparent border-0 mb-5">
<img class="card-img-top rounded-0" src="<?= base_url('images/img14.jpeg') ?>" alt="Albanian Landscape"
				style="max-height: 350px; object-fit: cover;">    <div class="card-body px-0">
        <h2 class="card-title">
            Gwen's Fried Rice Special Recipe
        </h2>
        <h4 class="subtitle text-primary mb-3">My Signature Fried Rice Recipe</h4>
        <ul class="post-meta mt-3">
            <li class="d-inline-block mr-3">
                <span class="fas fa-clock text-primary"></span>
                <span class="ml-1">February 14, 2025</span>
            </li>
            <li class="d-inline-block">
                <span class="fas fa-list-alt text-primary"></span>
                <span class="ml-1">Cooking</span>
            </li>
        </ul>
        <p class="card-text my-4">Nigerian fried rice has always been my go-to dish for every occasion. It's colorful, flavorful, and incredibly versatile. Whether you're planning a birthday celebration, Thanksgiving dinner, or simply want to brighten up a weekday meal, this recipe never disappoints. The best part? It's a crowd-pleaser for both kids and adults, and surprisingly easy to make!</p>
        
        <h5 class="mt-4">Ingredients:</h5>
        <ul class="ingredient-list mb-4">
            <li>3 cups long-grain rice, washed and parboiled</li>
            <li>500g chicken, liver, or beef (diced and cooked)</li>
            <li>2 cups mixed vegetables (carrots, peas, sweet corn, green beans)</li>
            <li>1 large onion, finely diced</li>
            <li>3 tablespoons curry powder</li>
            <li>2 tablespoons thyme</li>
            <li>4 knorr cubes (chicken flavor)</li>
            <li>Vegetable oil or butter</li>
            <li>Salt to taste</li>
            <li>2-3 tablespoons ground pepper (adjust for spiciness)</li>
        </ul>
        
        <h5 class="mt-4">How to Prepare:</h5>
        <ol class="preparation-steps mb-4">
            <li>Parboil the rice until it's about 70% cooked, then drain and set aside to cool completely.</li>
            <li>In a large pot or wok, heat 4 tablespoons of vegetable oil or butter.</li>
            <li>Sauté the diced onions until translucent (about 2-3 minutes).</li>
            <li>Add the mixed vegetables and stir-fry for about 5 minutes until slightly tender but still crisp.</li>
            <li>Add the curry powder, thyme, crushed knorr cubes, salt, and ground pepper. Mix well.</li>
            <li>Add the cooked meat and stir to combine with the vegetables and spices.</li>
            <li>Add the parboiled rice and gently fold everything together, being careful not to mash the rice.</li>
            <li>Cover and allow to cook on low heat for about 10-15 minutes, stirring occasionally.</li>
            <li>Taste and adjust seasoning if needed before serving.</li>
        </ol>
        
        <div class="row my-4">
            <div class="col-md-6 mb-3">
                <img src="<?= base_url('images/img13.jpeg') ?>" alt="Nigerian Fried Rice" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-6 mb-3">
                <img src="<?= base_url('images/img14.jpeg') ?>" alt="Fried Rice Serving" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
            </div>
        </div>
        
        <p class="card-text">What makes this fried rice special is its adaptability. For festive occasions like Thanksgiving or Christmas, I add extra proteins like shrimp and diced turkey to make it more luxurious. For birthday parties, I use colorful vegetables to make the dish more vibrant and appealing to guests. And for everyday family dinners, I often simplify the recipe, using whatever proteins and vegetables I have in the fridge.</p>
        
        <p class="card-text">For the little ones, I reduce the spiciness and cut the vegetables into smaller pieces, sometimes arranging them in fun shapes on top. For adults who enjoy spicy food, you can add some chopped scotch bonnet peppers or serve with hot sauce on the side.</p>
        
        <p class="card-text">The secret to perfect Nigerian fried rice is to parboil the rice first, then let it cool completely (I usually prepare this the night before). This prevents the rice from becoming soggy when stir-fried. Also, cook your vegetables separately to maintain their vibrant colors and nutrients. With these simple tips, you'll have a delicious dish that will become a staple in your home just as it has in mine!</p>
    </div>
</div>

        <!-- Relationship Section Divider -->
        <div class="section-divider text-center my-5">
            <h2 class="divider-title"><span class="fas fa-heart me-2"></span>Relationship Insights</h2>
            <div class="divider-line"></div>
        </div>

	<!-- Relationship Post -->
<div class="card post-item bg-transparent border-0 mb-5">
<img src="<?= base_url('images/img15.jpeg') ?>" alt="Couple Cooking Together" class="img-fluid rounded" style="max-height: 350px; object-fit: cover;">
<div class="card-body px-0">
        <h2 class="card-title">
            Fun Activities To Do With Your Partner
        </h2>
        <ul class="post-meta mt-3">
            <li class="d-inline-block mr-3">
                <span class="fas fa-clock text-primary"></span>
                <span class="ml-1">March 25, 2025</span>
            </li>
            <li class="d-inline-block">
                <span class="fas fa-list-alt text-primary"></span>
                <span class="ml-1">Relationships</span>
            </li>
        </ul>
        <p class="card-text my-4">Keeping a relationship fresh and exciting is all about creating new memories together. Here are some of my favorite activities that have helped strengthen my bond with my partner:</p>
        
        <div class="row my-4">
            <div class="col-md-6 mb-3">
                <img src="<?= base_url('images/img17.jpeg') ?>" alt="Couple" class="img-fluid rounded" style="max-height: 200px; object-fit: cover;">
            </div>
            <div class="col-md-6 mb-3">
                <img src="<?= base_url('images/img16.jpeg') ?>" alt="Couple" class="img-fluid rounded" style="max-height: 200px; object-fit: cover;">
            </div>
        </div>
        
        <ul class="activity-list my-3">
            <li><strong>Cook a new recipe together</strong> - Choose a cuisine you've never tried before and make it from scratch. The kitchen mishaps often lead to the best laughs!</li>
            <li><strong>Plan a surprise date night</strong> - Take turns organizing mystery dates where the other person doesn't know the destination or activity until you arrive.</li>
            <li><strong>Weekend road trips</strong> - Pick a spot on the map within a few hours' drive and explore somewhere new without extensive planning.</li>
            <li><strong>Take a dance class</strong> - Learning to salsa, tango, or even line dance together builds coordination and trust (plus it's a great excuse to hold each other close).</li>
            <li><strong>Create a bucket list</strong> - Spend an evening brainstorming experiences you both want to have, then start checking them off one by one.</li>
        </ul>
        
        <p class="card-text">The key isn't just doing activities together, but being present and engaged while doing them. Put your phones away, make eye contact, and focus on creating moments that will become cherished memories. Even simple activities like a walk in the park can become special when you're fully present with each other.</p>
    </div>
</div>
</div>

<div class="col-lg-4 col-md-5">
    <!-- About Me Section Divider -->
    <div class="section-divider text-center my-5">
        <h2 class="divider-title"><span class="fas fa-user me-2"></span>About Me</h2>
        <div class="divider-line"></div>
    </div>
	
	<!-- About Me Widget -->
<div class="widget text-center">
<img src="<?= base_url('images/img18.jpeg') ?>" alt="About me " class="img-fluid rounded" style="max-height: 350px; object-fit: cover;">
    <h2 class="widget-title text-white d-inline-block mt-4">About Me</h2>
    <p class="mt-4">Hello! I'm Gwenneth, the creator behind EGOBLOG. This space is my creative outlet where I share my passions: adventures from my travels around the world, delicious recipes I've perfected over time, and relationship insights I've gathered along the way.</p>
    <p>Currently, I'm a final year Computing and Information Technology student with big dreams and an even bigger appetite for life! My aim is to be successful in both my tech career and personal endeavors while continuing to explore this beautiful world we live in.</p>
    <p>Through this blog, I hope to inspire you to try new recipes, visit breathtaking destinations, and nurture the relationships that matter most to you. Thanks for joining me on this journey!</p>
</div>

    <!-- Topics Section Divider -->
    <div class="section-divider text-center my-5">
        <h2 class="divider-title"><span class="fas fa-tags me-2"></span>Topics</h2>
        <div class="divider-line"></div>
    </div>

	<!-- Categories Widget -->
	<div class="widget">
		<div class="mb-5 text-center">
			<h2 class="widget-title text-white d-inline-block">Explore Topics</h2>
		</div>
		<u class="list-unstyled category-list">
			<li>
				<span><i class="fas fa-plane-departure me-2"></i> Travel Adventures</span>
			</li>
			<li>
				<span><i class="fas fa-utensils me-2"></i> Cooking & Recipes</span>
			</li>
			<li>
				<span><i class="fas fa-heart me-2"></i> Love & Relationships</span>
			</li>
		</u>
	</div>

    <!-- Popular Recipes Section Divider -->
    <div class="section-divider text-center my-5">
        <h2 class="divider-title"><span class="fas fa-star me-2"></span>Popular Recipes</h2>
        <div class="divider-line"></div>
    </div>

	
	<!-- Popular Recipes Widget -->
<div class="widget">
    <div class="mb-5 text-center">
        <h2 class="widget-title text-white d-inline-block">Popular Recipes</h2>
    </div>
    
    <!-- Nigerian Jollof Rice -->
    <div class="card post-item bg-transparent border-0 mb-5">
	<img src="<?= base_url('images/img20.jpeg') ?>" alt="Nigerian Jollof" class="img-fluid rounded" style="max-height: 350px; object-fit: cover;">
	<div class="card-body px-0">
            <h3 class="card-title">Nigerian Jollof Rice</h3>
            <ul class="post-meta mt-3 mb-3">
                <li class="d-inline-block mr-3">
                    <span class="fas fa-clock text-primary"></span>
                    <span class="ml-1">January 12, 2025</span>
                </li>
            </ul>
            <h5 class="mt-3 mb-2">Ingredients:</h5>
            <ul class="small">
                <li>3 cups long grain rice</li>
                <li>500g chicken or beef</li>
                <li>2 cups tomato stew</li>
                <li>2 onions, diced</li>
                <li>3 tbsp curry powder & thyme</li>
                <li>2 bay leaves</li>
                <li>Salt and pepper to taste</li>
            </ul>
            <h5 class="mt-3 mb-2">Method:</h5>
            <ol class="small">
                <li>Parboil rice, rinse and set aside</li>
                <li>In a pot, heat oil and sauté onions</li>
                <li>Add tomato stew and spices</li>
                <li>Mix in rice and chicken stock</li>
                <li>Cover and cook on low heat for 25 mins</li>
            </ol>
        </div>
    </div>
    
    <!-- Red Velvet Cake -->
    <div class="card post-item bg-transparent border-0 mb-5">
	<img src="<?= base_url('images/img19.jpeg') ?>" alt="Red Velvet" class="img-fluid rounded" style="max-height: 350px; object-fit: cover;">
	<div class="card-body px-0">
            <h3 class="card-title">Red Velvet Cake</h3>
            <ul class="post-meta mt-3 mb-3">
                <li class="d-inline-block mr-3">
                    <span class="fas fa-clock text-primary"></span>
                    <span class="ml-1">February 15, 2025</span>
                </li>
            </ul>
            <h5 class="mt-3 mb-2">Ingredients:</h5>
            <ul class="small">
                <li>2½ cups flour</li>
                <li>1½ cups sugar</li>
                <li>1 cup buttermilk</li>
                <li>2 eggs</li>
                <li>1 tbsp cocoa powder</li>
                <li>1 tbsp red food coloring</li>
                <li>Cream cheese frosting</li>
            </ul>
            <h5 class="mt-3 mb-2">Method:</h5>
            <ol class="small">
                <li>Mix dry ingredients in bowl</li>
                <li>In another bowl, beat eggs, oil, buttermilk</li>
                <li>Combine wet and dry ingredients</li>
                <li>Add food coloring and vinegar</li>
                <li>Bake at 350°F for 30 mins</li>
                <li>Cool and frost with cream cheese icing</li>
            </ol>
        </div>
    </div>
    
    <!-- Nigerian Meat Pie -->
    <div class="card post-item bg-transparent border-0 mb-5">
	<img src="<?= base_url('images/img21.jpeg') ?>" alt="Meatpie" class="img-fluid rounded" style="max-height: 350px; object-fit: cover;">
	<div class="card-body px-0">
            <h3 class="card-title">Nigerian Meat Pie</h3>
            <ul class="post-meta mt-3 mb-3">
                <li class="d-inline-block mr-3">
                    <span class="fas fa-clock text-primary"></span>
                    <span class="ml-1">Mrch 8, 2025</span>
                </li>
            </ul>
            <h5 class="mt-3 mb-2">Ingredients:</h5>
            <ul class="small">
                <li>4 cups flour</li>
                <li>250g butter or margarine</li>
                <li>500g minced meat</li>
                <li>2 potatoes, diced</li>
                <li>2 carrots, diced</li>
                <li>1 onion, chopped</li>
                <li>1 egg (for glazing)</li>
            </ul>
            <h5 class="mt-3 mb-2">Method:</h5>
            <ol class="small">
                <li>Prepare pastry by mixing flour, butter, salt</li>
                <li>Cook filling: fry meat with vegetables</li>
                <li>Roll out dough and cut into circles</li>
                <li>Add filling and fold over</li>
                <li>Seal edges, brush with egg</li>
                <li>Bake at 180°C for 35 mins until golden</li>
            </ol>
        </div>
    </div>
</div>

<?= $this->endSection() ?>