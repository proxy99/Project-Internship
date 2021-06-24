<?php $this->view("header", $data); ?>

<?php $this->view("slider", $data); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<?php $this->view("sidebar.inc", $data); ?>
				
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