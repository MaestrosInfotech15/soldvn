<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Basics</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" rel="stylesheet">
		<script language="" src="js/jquery.min.js"></script>
		<script language="" src="js/bootstrap.min.js"></script>
		<link rel="icon" type="image/gif" href="img/icon.gif" />
	</head>
	<body onload="startTime()">	
	
	<div class="container-fluid header">
		
		<div class="">
			
			<div class="row">
				
				<div class="col-sm-12 text-right">
					
					<p class="mini_t_links">
					
						<span><a href="">Sell with us  |</a><a href="">  Call us  |</a>  Download App :</span>
					
						<a href="#" class="social_icon apple">
						
						</a>
					
						<a href="#" class="social_icon android">
						
						</a>
						
						<a href="#" class="social_icon win">
						
						</a>
						
					</p>
					
				</div>
				
			</div>
			
			<div class="row mid_head">
				
				<div class="logo_wrapper col-sm-2">
				
					<div class="row">
					
						<img src="img/logo.png" height="35px">

						<span class="upper_text">BETA</span>

						<span class="main_text">SOLD<span class="mini">.vn</span></span>
					
					</div>
					
				</div>
				
				<div class="col-sm-6">
					
					<div class="row">
					
						<div class="search">
						
							<i class="fa fa-search"></i>
						
							<input type="search" class="form-control" placeholder="What you are looking for?">
							
							<button class="btn btn-theme">Search</button>
						
						</div>
						
					</div>
					
				</div>
				
				<div class="col-sm-4">
					
					<ul class="icon_list">
						
						<li><a href="#"><span class="icon_nav location"></span></a></li>
						
						<li><a href="#"><span class="icon_nav bell"></span></a></li>
						
						<li><a href="#"><span class="icon_nav heart"></span></a></li>
						
						<li><a href="#"><span class="icon_nav traley"></span></a></li>
						
						<li class="sign_in">
						
							<a href="#" data-toggle="modal" data-target="#login">
						
								<span>Log in</span>
							
							</a>
						
						</li>
						
						<li class="sign_in" data-toggle="modal" data-target="#signup">
						
							<a href="#">
								
								<span>Sing up</span>
							
							</a>
							
						</li>
						
					</ul>
					
				</div>
				
			</div>
			
			<div class="row">
		  
			  <nav class="navbar cat_wrapper">
			  
				<div class="navbar-header">
				
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					
						<span class="sr-only">Toggle navigation</span>
						
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span>
						
					</button>
					
				</div>

				<div class="collapse navbar-collapse js-navbar-collapse">
					<ul class="nav navbar-nav">
					
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>				
							<ul class="dropdown-menu mega-dropdown-menu">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Features</li>
										<li><a href="#">Auto Carousel</a></li>
										<li><a href="#">Carousel Control</a></li>
										<li><a href="#">Left & Right Navigation</a></li>
										<li><a href="#">Four Columns Grid</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Fonts</li>
										<li><a href="#">Glyphicon</a></li>
										<li><a href="#">Google Fonts</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Plus</li>
										<li><a href="#">Navbar Inverse</a></li>
										<li><a href="#">Pull Right Elements</a></li>
										<li><a href="#">Coloured Headers</a></li>                            
										<li><a href="#">Primary Buttons & Default</a></li>							
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Much more</li>
										<li><a href="#">Easy to Customize</a></li>
										<li><a href="#">Calls to action</a></li>
										<li><a href="#">Custom Fonts</a></li>
										<li><a href="#">Slide down on Hover</a></li>                         
									</ul>
								</li>
							</ul>				
						</li>
						
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Electronic device</a>				
							<ul class="dropdown-menu mega-dropdown-menu">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Features</li>
										<li><a href="#">Auto Carousel</a></li>
										<li><a href="#">Carousel Control</a></li>
										<li><a href="#">Left & Right Navigation</a></li>
										<li><a href="#">Four Columns Grid</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Fonts</li>
										<li><a href="#">Glyphicon</a></li>
										<li><a href="#">Google Fonts</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Plus</li>
										<li><a href="#">Navbar Inverse</a></li>
										<li><a href="#">Pull Right Elements</a></li>
										<li><a href="#">Coloured Headers</a></li>                            
										<li><a href="#">Primary Buttons & Default</a></li>							
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Much more</li>
										<li><a href="#">Easy to Customize</a></li>
										<li><a href="#">Calls to action</a></li>
										<li><a href="#">Custom Fonts</a></li>
										<li><a href="#">Slide down on Hover</a></li>                         
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Women Collection</li>                            
										<div id="womenCollection" class="carousel slide" data-ride="carousel">
										  <div class="carousel-inner">
											<div class="item active">
												<a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
												<h4><small>Summer dress floral prints</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>     
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
												<h4><small>Denin jacket stamped</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
											</div><!-- End Item -->                                
										  </div><!-- End Carousel Inner -->
										  <!-- Controls -->
										  <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										  </a>
										  <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										  </a>
										</div><!-- /.carousel -->
										<li class="divider"></li>
										<li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
									</ul>
								</li>
							</ul>				
						</li>
						
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection</a>				
							<ul class="dropdown-menu mega-dropdown-menu">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Features</li>
										<li><a href="#">Auto Carousel</a></li>
										<li><a href="#">Carousel Control</a></li>
										<li><a href="#">Left & Right Navigation</a></li>
										<li><a href="#">Four Columns Grid</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Fonts</li>
										<li><a href="#">Glyphicon</a></li>
										<li><a href="#">Google Fonts</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Plus</li>
										<li><a href="#">Navbar Inverse</a></li>
										<li><a href="#">Pull Right Elements</a></li>
										<li><a href="#">Coloured Headers</a></li>                            
										<li><a href="#">Primary Buttons & Default</a></li>							
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Much more</li>
										<li><a href="#">Easy to Customize</a></li>
										<li><a href="#">Calls to action</a></li>
										<li><a href="#">Custom Fonts</a></li>
										<li><a href="#">Slide down on Hover</a></li>                         
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Women Collection</li>                            
										<div id="womenCollection" class="carousel slide" data-ride="carousel">
										  <div class="carousel-inner">
											<div class="item active">
												<a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
												<h4><small>Summer dress floral prints</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>    
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
												<h4><small>Denin jacket stamped</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
											</div><!-- End Item -->                                
										  </div><!-- End Carousel Inner -->
										  <!-- Controls -->
										  <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										  </a>
										  <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										  </a>
										</div><!-- /.carousel -->
										<li class="divider"></li>
										<li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
									</ul>
								</li>
							</ul>				
						</li>	
						
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Home & Garden Care</a>				
							<ul class="dropdown-menu mega-dropdown-menu">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Features</li>
										<li><a href="#">Auto Carousel</a></li>
										<li><a href="#">Carousel Control</a></li>
										<li><a href="#">Left & Right Navigation</a></li>
										<li><a href="#">Four Columns Grid</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Fonts</li>
										<li><a href="#">Glyphicon</a></li>
										<li><a href="#">Google Fonts</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Plus</li>
										<li><a href="#">Navbar Inverse</a></li>
										<li><a href="#">Pull Right Elements</a></li>
										<li><a href="#">Coloured Headers</a></li>                            
										<li><a href="#">Primary Buttons & Default</a></li>							
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Much more</li>
										<li><a href="#">Easy to Customize</a></li>
										<li><a href="#">Calls to action</a></li>
										<li><a href="#">Custom Fonts</a></li>
										<li><a href="#">Slide down on Hover</a></li>                         
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Women Collection</li>                            
										<div id="womenCollection" class="carousel slide" data-ride="carousel">
										  <div class="carousel-inner">
											<div class="item active">
												<a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
												<h4><small>Summer dress floral prints</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>       
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
												<h4><small>Denin jacket stamped</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
											</div><!-- End Item -->                                
										  </div><!-- End Carousel Inner -->
										  <!-- Controls -->
										  <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										  </a>
										  <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										  </a>
										</div><!-- /.carousel -->
										<li class="divider"></li>
										<li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
									</ul>
								</li>
							</ul>				
						</li>
						
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Engine</a>				
							<ul class="dropdown-menu mega-dropdown-menu">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Features</li>
										<li><a href="#">Auto Carousel</a></li>
										<li><a href="#">Carousel Control</a></li>
										<li><a href="#">Left & Right Navigation</a></li>
										<li><a href="#">Four Columns Grid</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Fonts</li>
										<li><a href="#">Glyphicon</a></li>
										<li><a href="#">Google Fonts</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Plus</li>
										<li><a href="#">Navbar Inverse</a></li>
										<li><a href="#">Pull Right Elements</a></li>
										<li><a href="#">Coloured Headers</a></li>                            
										<li><a href="#">Primary Buttons & Default</a></li>							
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Much more</li>
										<li><a href="#">Easy to Customize</a></li>
										<li><a href="#">Calls to action</a></li>
										<li><a href="#">Custom Fonts</a></li>
										<li><a href="#">Slide down on Hover</a></li>                         
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Women Collection</li>                            
										<div id="womenCollection" class="carousel slide" data-ride="carousel">
										  <div class="carousel-inner">
											<div class="item active">
												<a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
												<h4><small>Summer dress floral prints</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>     
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
												<h4><small>Denin jacket stamped</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
											</div><!-- End Item -->                                
										  </div><!-- End Carousel Inner -->
										  <!-- Controls -->
										  <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										  </a>
										  <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										  </a>
										</div><!-- /.carousel -->
										<li class="divider"></li>
										<li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
									</ul>
								</li>
							</ul>				
						</li>
						
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Business & Industry</a>				
							<ul class="dropdown-menu mega-dropdown-menu">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Features</li>
										<li><a href="#">Auto Carousel</a></li>
										<li><a href="#">Carousel Control</a></li>
										<li><a href="#">Left & Right Navigation</a></li>
										<li><a href="#">Four Columns Grid</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Fonts</li>
										<li><a href="#">Glyphicon</a></li>
										<li><a href="#">Google Fonts</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Plus</li>
										<li><a href="#">Navbar Inverse</a></li>
										<li><a href="#">Pull Right Elements</a></li>
										<li><a href="#">Coloured Headers</a></li>                            
										<li><a href="#">Primary Buttons & Default</a></li>							
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Much more</li>
										<li><a href="#">Easy to Customize</a></li>
										<li><a href="#">Calls to action</a></li>
										<li><a href="#">Custom Fonts</a></li>
										<li><a href="#">Slide down on Hover</a></li>                         
									</ul>
								</li>
							</ul>				
						</li>
						
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Toy</a>				
							<ul class="dropdown-menu mega-dropdown-menu">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Features</li>
										<li><a href="#">Auto Carousel</a></li>
										<li><a href="#">Carousel Control</a></li>
										<li><a href="#">Left & Right Navigation</a></li>
										<li><a href="#">Four Columns Grid</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Fonts</li>
										<li><a href="#">Glyphicon</a></li>
										<li><a href="#">Google Fonts</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Plus</li>
										<li><a href="#">Navbar Inverse</a></li>
										<li><a href="#">Pull Right Elements</a></li>
										<li><a href="#">Coloured Headers</a></li>                            
										<li><a href="#">Primary Buttons & Default</a></li>							
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Much more</li>
										<li><a href="#">Easy to Customize</a></li>
										<li><a href="#">Calls to action</a></li>
										<li><a href="#">Custom Fonts</a></li>
										<li><a href="#">Slide down on Hover</a></li>                         
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Women Collection</li>                            
										<div id="womenCollection" class="carousel slide" data-ride="carousel">
										  <div class="carousel-inner">
											<div class="item active">
												<a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
												<h4><small>Summer dress floral prints</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>      
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
												<h4><small>Denin jacket stamped</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
											</div><!-- End Item -->                                
										  </div><!-- End Carousel Inner -->
										  <!-- Controls -->
										  <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										  </a>
										  <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										  </a>
										</div><!-- /.carousel -->
										<li class="divider"></li>
										<li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
									</ul>
								</li>
							</ul>				
						</li>
						
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Engine</a>				
							<ul class="dropdown-menu mega-dropdown-menu">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Features</li>
										<li><a href="#">Auto Carousel</a></li>
										<li><a href="#">Carousel Control</a></li>
										<li><a href="#">Left & Right Navigation</a></li>
										<li><a href="#">Four Columns Grid</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Fonts</li>
										<li><a href="#">Glyphicon</a></li>
										<li><a href="#">Google Fonts</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Plus</li>
										<li><a href="#">Navbar Inverse</a></li>
										<li><a href="#">Pull Right Elements</a></li>
										<li><a href="#">Coloured Headers</a></li>                            
										<li><a href="#">Primary Buttons & Default</a></li>							
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Much more</li>
										<li><a href="#">Easy to Customize</a></li>
										<li><a href="#">Calls to action</a></li>
										<li><a href="#">Custom Fonts</a></li>
										<li><a href="#">Slide down on Hover</a></li>                         
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Women Collection</li>                            
										<div id="womenCollection" class="carousel slide" data-ride="carousel">
										  <div class="carousel-inner">
											<div class="item active">
												<a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
												<h4><small>Summer dress floral prints</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>        
											</div><!-- End Item -->
											<div class="item">
												<a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
												<h4><small>Denin jacket stamped</small></h4>                                        
												<button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
											</div><!-- End Item -->                                
										  </div><!-- End Carousel Inner -->
										  <!-- Controls -->
										  <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										  </a>
										  <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										  </a>
										</div><!-- /.carousel -->
										<li class="divider"></li>
										<li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
									</ul>
								</li>
							</ul>				
						</li>
						
					</ul><!--
					<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					  </ul>
					</li>
					<li><a href="#">My cart (0) items</a></li>
				  </ul>-->
				</div><!-- /.nav-collapse -->
			  </nav>
			</div>
			
			<!--<div class="row cat_wrapper text-center">
				
				
				
				
				
				<a href="#">Collection</a>
				
				<a href="#">Home & Garden Care</a>
				
				<a href="#">Engine</a>
				
				<a href="#">Business & Industry</a>
				
				<a href="#">Toy</a>
				
				<a href="#">Other</a>
				
			</div>-->
			
		</div>
			
	</div>