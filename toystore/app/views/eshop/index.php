<?php $this->view("header", $data); ?>

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<ol class="carousel-indicators">
								<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#slider-carousel" data-slide-to="1"></li>
								<li data-target="#slider-carousel" data-slide-to="2"></li>
							</ol>
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Lego</span> classic</h1>
									<h2>Lego Classic Idea 11001</h2>
									<p>Build a steamboat, cozy house, cool musical keyboard, cute red dinosaur or any young model imaginable with vibrant, brightly colored LEGO® Classic bricks Creation is endless! Just dream, build and play with creative models in LEGO Classic!</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?= ASSETS . THEME ?>images/product_images/product1.jpeg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>ninjago</span> garden city</h1>
									<h2>Lego Ninjago Play Themes</h2>
									<p>Relive all the excitement and thrill of NINJAGO® City's 10 years of establishment with this wonderful 5-story garden model. Comes with miniatures of 19 characters, you can combine ninjas and allies to play your favorite action scenes from the NINJAGO TV series.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?= ASSETS . THEME ?>images/product_images/product2.jpeg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>friends</span> helicopter</h1>
									<h2>Lego Friends HeartLake City</h2>
									<p>Safety plastic material does not harm the health of the baby when used.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?= ASSETS . THEME ?>images/product_images/product3.jpeg" class="girl img-responsive" alt="" />
								</div>
							</div>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-products-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#game-puzzle">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											games & puzzles
										</a>
									</h4>
								</div>
								<div id="game-puzzle" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">board games</a></li>
											<li><a href="#">classic games</a></li>
											<li><a href="#">card games</a></li>
											<li><a href="#">electronic games</a></li>
											<li><a href="#">fidget toys</a></li>
											<li><a href="#">puzzles</a></li>
											<li><a href="#">dominoes</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#baby-toy">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											baby & toddler toys
										</a>
									</h4>
								</div>
								<div id="baby-toy" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">activity center</a></li>
											<li><a href="#">baby musical toys</a></li>
											<li><a href="#">bath toys</a></li>
											<li><a href="#">blocks, sorting & stacking toys</a></li>
											<li><a href="#">car seat, crib & stroller toys</a></li>
											<li><a href="#">rattles & teethers</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#bike">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											bikes, scooters & ride-ons
										</a>
									</h4>
								</div>
								<div id="bike" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">balance bikes</a></li>
											<li><a href="#">kid bikes</a></li>
											<li><a href="#">skateboards</a></li>
											<li><a href="#">tricycles</a></li>
											<li><a href="#">scooters</a></li>
											<li><a href="#">helmets & protective gear</a></li>
											<li><a href="#">power ride-ons</a></li>
											<li><a href="#">bike accessories</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#blocks">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											building sets & blocks
										</a>
									</h4>
								</div>
								<div id="blocks" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">blocks</a></li>
											<li><a href="#">k'nex</a></li>
											<li><a href="#">lego</a></li>
											<li><a href="#">magnetic sets</a></li>
											<li><a href="#">meccano</a></li>
											<li><a href="#">mega bloks</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#doll">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											dolls, collectibles & stuffed animals
										</a>
									</h4>
								</div>
								<div id="doll" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">baby doll</a></li>
											<li><a href="#">doll clothing & accessories</a></li>
											<li><a href="#">doll houses</a></li>
											<li><a href="#">doll playsets</a></li>
											<li><a href="#">fashion dolls</a></li>
											<li><a href="#">interactive dolls and pets</a></li>
											<li><a href="#">stuffed animals</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#art">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											kids arts & crafts
										</a>
									</h4>
								</div>
								<div id="art" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">clay, dough & sand art</a></li>
											<li><a href="#">crafts & activities</a></li>
											<li><a href="#">slime</a></li>
											<li><a href="#">drawing, coloring & painting</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#outdoor">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											outdoor play
										</a>
									</h4>
								</div>
								<div id="outdoor" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">nerf & toy blasters</a></li>
											<li><a href="#">playhouses & climbers</a></li>
											<li><a href="#">sand & water tables</a></li>
											<li><a href="#">sandboxes & beach toys</a></li>
											<li><a href="#">swimming pools & water toys</a></li>
											<li><a href="#">wagons</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#vehicles">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											vehicles & remote controls
										</a>
									</h4>
								</div>
								<div id="vehicles" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">diecast cars</a></li>
											<li><a href="#">farm & construction vehicles</a></li>
											<li><a href="#">playsets & racetracks</a></li>
											<li><a href="#">rc cars & flight</a></li>
											<li><a href="#">trains & train tables</a></li>
											<li><a href="#">drones</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#video-game">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											video games & electronic device
										</a>
									</h4>
								</div>
								<div id="video-game" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">playstation 5</a></li>
											<li><a href="#">playstation 4</a></li>
											<li><a href="#">xbox one</a></li>
											<li><a href="#">nitendo switch</a></li>
											<li><a href="#">pc gaming</a></li>
											<li><a href="#">video game accessories</a></li>
											<li><a href="#">batteries</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#school">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											back to school
										</a>
									</h4>
								</div>
								<div id="school" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">backpacks</a></li>
											<li><a href="#">lunch boxes</a></li>
											<li><a href="#">school supplies</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Barbi</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Disney</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Hot Wheels</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>KidKraft</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>LEGO</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Marvel</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Nitendo</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 200</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?= ASSETS . THEME ?>images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

						<?php if(is_array($ROWS)): ?>
						<?php foreach($ROWS as $row): ?>
							
							<?php $this->view("product.inc", $row); ?>

						<?php endforeach; ?>
						<?php endif; ?>
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#lego" data-toggle="tab">Lego</a></li>
								<li><a href="#board" data-toggle="tab">Board Games</a></li>
								<li><a href="#vehicle" data-toggle="tab">Kid vehicles</a></li>
								<li><a href="#baby-doll" data-toggle="tab">Baby Doll</a></li>
								<li><a href="#game" data-toggle="tab">Video Games</a></li>
							</ul>
						</div>
						<!-- Lego -->
						<div class="tab-content">
							<div class="tab-pane fade active in" id="lego" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/lego/lego.jpg" alt="" />
												<h2 class="product-price">$29.99</h2>
												<p class="product-title">LEGO Star Wars: The Mandalorian The Razor Crest 75292 Exclusive Building Kit</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/lego/lego1.jpg" alt="" />
												<h2 class="product-price">$29.89</h2>
												<p class="product-title">LEGO Friends Heartlake City Shopping Mall 41450 Building Kit</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/lego/lego2.jpg" alt="" />
												<h2 class="product-price">$78.99</h2>
												<p class="product-title">LEGO Bonsai Tree 10281 Building Kit, a Beautiful Display Piece to Enjoy</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/lego/lego4.jpg" alt="" />
												<h2 class="product-price">$99.95</h2>
												<p class="product-title">LEGO Harry Potter Hogwarts Castle 71043 Castle Model Building Kit</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Board Games -->
							<div class="tab-pane fade" id="board" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/board games/bg.jpg" alt="" />
												<h2 class="product-price">$8.37</h2>
												<p class="product-title">Hasbro Gaming Guess Who?</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>	
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/board games/bg1.jpg" alt="" />
												<h2 class="product-price">$16.99</h2>
												<p>Ba class="product-title"ttleship Strategy Board Game</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>	
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/board games/bg2.jpg" alt="" />
												<h2 class="product-price">$16.99</h2>
												<p class="product-title">Jenga Game Wooden Blocks Stacking</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>	
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/board games/bg4.jpg" alt="" />
												<h2 class="product-price">$14.84</h2>
												<p class="product-title">Hasbro Gaming Don't Break The Ice</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Vehicles -->
							<div class="tab-pane fade" id="vehicle">
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/vehicles/vehicle.jpg" alt="" />
												<h2 class="product-price">$87.19</h2>
												<p class="product-title">Modern Little Tikes 4-in-1 Ride On, Blue, Basic Edition</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/vehicles/vehicle1.jpg" alt="" />
												<h2 class="product-price">$89.99</h2>
												<p class="product-title">Best Choice Products Kids Ride On Truck Car</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/vehicles/vehicle2.jpg" alt="" />
												<h2 class="product-price">$69.33</h2>
												<p class="product-title">Schwinn Elm Girls Bike for Toddlers and Kids</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/vehicles/vehicle3.jpg" alt="" />
												<h2 class="product-price">$51.99</h2>
												<p class="product-title">Power Wheels Hot Wheels Jeep Wrangler</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Baby doll -->
							<div class="tab-pane fade" id="baby-doll">
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/doll/doll.jpg" alt="" />
												<h2 class="product-price">$49.00</h2>
												<p class="product-title">Baby Alive Baby Grows Up, Growing and Talking Baby Doll</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/doll/doll1.jpg" alt="" />
												<h2 class="product-price">$14.06</h2>
												<p class="product-title">Squishville by Squishmallow Bakery Play Scene</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>	
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/doll/doll2.jpg" alt="" />
												<h2 class="product-price">$59.99</h2>
												<p class="product-title">Squishmallows Official Kellytoy Plush 8, Plush Mystery Box</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/doll/doll3.jpg" alt="" />
												<h2 class="product-price">$59.00</h2>
												<p class="product-title">STAR WARS The Child Animatronic Edition 7.2 by Hasbro</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<!-- Video Games -->
							<div class="tab-pane fade" id="game" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/video games/game.jpg" alt="" />
												<h2 class="product-price">$59.99</h2>
												<p class="product-title">Halo Infinite - Xbox Series X Standard Edition</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/video games/game1.jpg" alt="" />
												<h2 class="product-price">$20.49</h2>
												<p class="product-title">Spy Ninjas New Recruit Mission Kit - Vy Qwaint and Chad Wild Clay</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/video games/game2.jpg" alt="" />
												<h2 class="product-price">$94.95</h2>
												<p class="product-title">SteelSeries Arctis 7P Wireless - Lossless 2.4 GHz</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/video games/game3.jpg" alt="" />
												<h2 class="product-price">$59.79</h2>
												<p class="product-title">Newest Playstation DualSense Charging Station</p>
												<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/video games/game3.jpg" alt="" />
													<h2 class="product-price">$59.79</h2>
													<p class="product-title">Newest Playstation DualSense Charging Station</p>
													<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/lego/lego.jpg" alt="" />
													<h2 class="product-price">$29.99</h2>
													<p class="product-title">LEGO Star Wars: The Mandalorian The Razor Crest</p>
													<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/doll/doll3.jpg" alt="" />
													<h2 class="product-price">$59.00</h2>
													<p class="product-title">STAR WARS The Child Animatronic Edition 7.2</p>
													<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/vehicles/vehicle3.jpg" alt="" />
													<h2 class="product-price">$51.99</h2>
													<p class="product-title">Power Wheels Hot Wheels Jeep Wrangler</p>
													<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/video games/game2.jpg" alt="" />
													<h2 class="product-price">$94.95</h2>
													<p class="product-title">SteelSeries Arctis 7P Wireless - Lossless 2.4 GHz</p>
													<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img class="product-image" src="<?= ASSETS . THEME ?>images/product_images/board games/bg2.jpg" alt="" />
													<h2 class="product-price">$16.99</h2>
													<p class="product-title">Jenga Game Wooden Blocks Stacking Tumbling Tower</p>
													<button class="btn btn-default add-to-cart" type="button"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
				</div>
			</div>
		</div>
	</section>
<?php $this->view("footer", $data); ?>