<div class="demo" id="about">
	<div class="container">
		<div class="w3ls-heading">
			<h3>About us</h3>
		</div>
		<div class="horizontalTab" id="horizontalTab">
			<ul class="resp-tabs-list list-group">
				<li class="list-group-item text-center"></li>
				<li class="list-group-item text-center"></li>
				<li class="list-group-item text-center"></li>
				<li class="list-group-item text-center"></li>
			</ul>
				<div class="resp-tabs-container">
					<!-- section -->
							<div class="bhoechie-tab-content active">
										<h3 class="title">about</h3>
								<div class="services-grids">
									<div class="ser-img">
										<h3>ONLY FRESH AND HEALTHY FOOD FOR YOUR FAMILY </h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies.
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam.
										Nulla volutpat tellus orci, id laoreet ante pretium id.
										</p>
										
									</div>
									<div class="ser-img1">
										<img src="images/about.png" alt="" />
									</div>
									<div class="ser-info">
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies.
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam.
										Nulla volutpat tellus orci, id laoreet ante pretium id.
										</p>
										<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam
										scelerisque magna non turpis euismod bibendum.
										</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>

							<!--  section -->
							<div class="bhoechie-tab-content">
										<h3 class="title ab">Our Menu</h3>
								<div class="services-grids">
									<div class="col-md-6 menugrid">
											<img src="images/b1.jpg" alt="" />
									</div>
									<div class="col-md-6 menugrid1 innergrid">
											<h3>Sea food</h3>
											<ul class="list ins1">
												@foreach ($sea_food_meals as $meal)
												    <li><p>{{ $meal->name }}</p><span>{{ $meal->price }} $</span></li>
												@endforeach
											</ul>
									</div>
									<div class="clearfix"></div>
										<div class="col-md-6 innergrid">
											<h3>Deserts</h3>
											<ul class="list ins1">
												@foreach ($desert_meals as $meal)
												    <li><p>{{ $meal->name }}</p><span>{{ $meal->price }} $</span></li>
												@endforeach
											</ul>
										</div>
										<div class="col-md-6 innergrid">
												<h3>Salads</h3>
												<ul class="list ins1">
													@foreach ($salad_meals as $meal)
													    <li><p>{{ $meal->name }}</p><span>{{ $meal->price }} $</span></li>
													@endforeach
												</ul>
										</div>
								<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>

							<!--  search -->
							<div class="bhoechie-tab-content">
										<h3 class="title ab1">Why Visit Us?</h3>
								<div class="services-grids">
									<div class="about-2">
										<h3>We select fresh and natural products</h3>
										<img src="images/burger.jpg" alt="" />
									</div>
									<div class="about-info2">
										<div class="top-grid">
											<div class="col-md-6 grid">
												<i class="fa fa-cutlery" aria-hidden="true"></i>
												<h3>Healthy food</h3>
												<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam.
												</p>
											</div>
											<div class="col-md-6 grid">
												<i class="fa fa-apple" aria-hidden="true"></i>
												<h3>Fresh fruits</h3>
												<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam.
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="bottom-grid">
											<div class="col-md-6 grid">
												<i class="fa fa-glass" aria-hidden="true"></i>
												<h3>Drink diet</h3>
												<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam.
												</p>
											</div>
											<div class="col-md-6 grid">
												<i class="fa fa-spoon" aria-hidden="true"></i>
												<h3>Tasty snacks</h3>
												<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam.
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
										<h3 class="title ab2">why choose us</h3>
								<div class="services-grids">
									<div class="about-2 lastgrid">
										<h3>delicious dishes</h3>
										<h3>great place to enjoy</h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies.
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam.
										Nulla volutpat tellus orci, id laoreet ante pretium id. Ut iaculis quis eros ac bibendum.
										</p>
									</div>
									<div class="about-info2">
										<div class="col-md-6 last-grid">
											<img src="images/b11.jpg" alt="" />
										</div>
										<div class="col-md-6 last-grid1">
											<h3>High quality restaurant</h3>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
				</div>
		</div>
	</div>
</div>


<!-- //tabs -->    <!-- //about -->






<!-- services -->
<div class="services" id="services">
		<div class="container">
			<div class="ser-top wthree-3 wow fadeInDown w3-service-head">
				<h3>Our Services </h3>
			</div>
			<div class="w3-service-grids set-6">
				<div class="col-md-4  services-w3-grid1 ser-left icon1 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-cutlery hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Breakfast</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin  vestibulum velit.Lorem ipsum ultricies vestibulum velit adipisc elit Proin.</p>
				</div>
				<div class="col-md-4  services-w3-grid1 ser-left icon2 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-spoon hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Lunch</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum Lorem ipsum velit vestibulum velit adipisc elit Proin.</p>
				</div>
				<div class="col-md-4 services-w3-grid1 ser-left icon3 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Dinner</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum Lorem ipsum velit vestibulum velit adipisc elit Proin.</p>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-3 services-w3-grid2 ser-left icon4 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-apple hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Supper food </h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum Loremipsum velit.</p>
				</div>
				<div class="col-md-3 services-w3-grid2 ser-left icon5 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Pasta ravioli</h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum velitLorem ipsum.</p>
				</div>
				<div class="col-md-3 services-w3-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6"  data-wow-duration=".8s" data-wow-delay=".2s">
					<i class="fa fa-leaf hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Salads & Desserts</h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum velitdolor sit.</p>
				</div>
				<div class="col-md-3 services-w3-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6"  data-wow-duration=".8s" data-wow-delay=".2s">
					<i class="fa fa-gift hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>daily presents</h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum velitdolor sit.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>
<!-- /services -->


<!-- our chefs -->
<div class="ourchefs" id="chefs">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Our chefs</h3>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="https://www.facebook.com/chefantoinetl/" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="images/chef1.jpg" alt=" " class="img-responsive">
			</div>
			<h3>Chef Antoine</h3>
			<p>Lebanese chef</p>
		</div>

		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="images/chef2.jpg" alt=" " class="img-responsive">
			</div>
			<h3>Burak Özdemir</h3>
			<p>Turkish chef</p>
		</div>

		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="https://www.facebook.com/ManalAlalem/" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/manalalalem" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="images/chef3.jpg" alt=" " class="img-responsive">
			</div>
			<h3>Manal ALAlam</h3>
			<p>Master chef</p>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="images/chef4.jpg" alt=" " class="img-responsive">
			</div>
			<h3>jewel cher</h3>
			<p>gravy specialist</p>
		</div>
	</div>
</div>
<!-- //our chefs -->


<!-- gallery -->
	<div class="gallery" id="gallery">
			<div class="agileits_w3layouts_head">
			<h3>Food Gallery</h3>
			</div>
			<div class="w3layouts_gallery_grids">
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p1.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p1.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Butter pizza</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p2.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Pasta</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p13.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p13.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Lemon cheese</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p4.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p4.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Toasted puff</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p6.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p6.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Burger Cheese</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p5.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p5.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>fried broccoli</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p7.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p7.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Apple almond salad</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p8.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p8.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Roasted meat</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p9.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p9.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Pasta rolls</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p10.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p10.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>fruits</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p11.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p11.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Meat Pizza</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="images/p12.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/p12.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Boiled eggs</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
</div>
<!-- //gallery -->

<!-- customer -->
	<div class="customer jarallax" id="customer">
		<div class="agileinfo-dot">
		<div class="container">
			<h3>Customer Says</h3>
			<div class="customer-grids">
				<ul id="flexiselDemo1">
					<li>
						<div class="customer-grid">
							<p> Cras aliquam ligula id felis rhoncus facilisis. Pellentesque habitant
								morbi tristique senectus et netus et malesuada fames ac turpis egestas.
								Donec auctor magna id purus lacinia hendrerit.</p>
							<h4>David Elton <span>Daily customer</span></h4>
						</div>
						<div class="client-img">
							<img src="images/t1.jpg" alt="" />
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p> Cras aliquam ligula id felis rhoncus facilisis. Pellentesque habitant
								morbi tristique senectus et netus et malesuada fames ac turpis egestas.
								Donec auctor magna id purus lacinia hendrerit.</p>
							<h4>Marvin gaye <span>Special customer</span></h4>
						</div>
						<div class="client-img">
							<img src="images/t2.jpg" alt="" />
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p> Cras aliquam ligula id felis rhoncus facilisis. Pellentesque habitant
								morbi tristique senectus et netus et malesuada fames ac turpis egestas.
								Donec auctor magna id purus lacinia hendrerit.</p>
							<h4>Jawel Slash <span>Recent visitor</span></h4>
						</div>
						<div class="client-img">
							<img src="images/t3.jpg" alt="" />
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>
</div>
<!-- //customer -->

<!-- contact form -->
	<div class="contact-w3ls" id="contact">
		<div class="container">
			<h3>contact form</h3>
				<form action="#" method="post" onsubmit="send_message(event)">
					<div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">

						<div class="form-control">
							<label class="header">Full Name <span>:</span></label>
							<input type="text" name="First Name" placeholder="Name" required="">
						</div>

						<div class="form-control">
							<label class="header">Email <span>:</span></label>
							<input type="email"  class="email" name="Email" placeholder="Email" required="">
						</div>

						<div class="form-control">
							<label class="header">Mobile Number <span>:</span></label>
							<input type="text" name="Number" placeholder="Mobile Number" required="">
						</div>
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div>
					<div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
						<div class="form-control">
							<label class="header">Message <span>:</span></label>
							<textarea name="Message" placeholder="Message" required=""></textarea>
						</div>
					<div class="clearfix"> </div>
					</div>
						<input type="submit" value="Send">
				</form>
		</div>
	</div>
<!-- //contact form -->


<!-- footer -->
<div class="footer">
		<div class="col-md-6 footer-left">
			<h3>Once upon a time</h3>
			<p>A place that brings together the past, its heritage and its details with the present and keeps pace with development</p>
			<p>Delicious food in a fantastic atmosphere, with distinctive customer service..</p>
		</div>
		<div class="col-md-6 footer-right">

			<h4>Follow us</h4>
				<div class="wthree-icon">
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
				</div>
		</div>
		<div class="clearfix"></div>
