<?php include ROOT . '/views/layouts/header.php'; ?>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<section>
		<!-- content-section-starts -->
	<div class="container">
	   <div class="products-page">
			<div class="products">
				<div class="product-listy">
					<h2>Категорії</h2>
					<ul class="product-list">
						<li><?php foreach ($categories as $categoryItem): ?>
							<?php if ($categoryItem['sex']==1): ?>
						<li><a href="/category/<?php echo $categoryItem['id']; ?>"><?php  echo $categoryItem['name']; ?></a></li>
						<?php endif; ?>
						<?php endforeach; ?></li>

					</ul>
				</div>
				<div class="latest-bis">
					<img src="images/l4.jpg" class="img-responsive" alt="" />
					<div class="offer">
						<p>40%</p>
						<small>Top Offer</small>
					</div>
				</div> 	
				<div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Kitesurf</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
							<li><a href="#">Best</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Apparel</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Responsive</a></li>
					        <li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
						</ul>
					
				     </div>

			</div>
			<div class="new-product">
				<div class="col-md-5 zoom-grid">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo Product::getImage($product['id']); ?>">
								<div class="thumb-image"> <img src="<?php echo Product::getImage($product['id']); ?>" alt="" /> </div>
							</li>
							<li data-thumb="/upload/images/products/<?php echo $product['id'].'_2.jpg';?>">
								<div class="thumb-image"> <img src="/upload/images/products/<?php echo $product['id'].'_2.jpg';?>" alt="" /> </div>
							</li>
							<li data-thumb="/upload/images/products/<?php echo $product['id'].'_3.jpg';?>">
							<div class="thumb-image"> <img src="/upload/images/products/<?php echo $product['id'].'_3.jpg';?>" alt="" /> </div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-7 dress-info">
					<div class="dress-name">
						<h3><?php echo $product['name']; ?></h3>
						<span><?php echo $product['price']; ?> гривень</span>
						<div class="clearfix"></div>
						<p><?php echo $product['description']; ?>
					</div>
					<div class="span span1">
						<p class="left">Виробник</p>
						<p class="right"><?php echo $product['brand']; ?></p>
						<div class="clearfix"></div>
					</div>
					<div class="span span2">
						<p class="left">Виготовлено:</p>
						<p class="right">China</p>
						<div class="clearfix"></div>
					</div>
					<div class="span span3">
						<p class="left">Колір</p>
						<p class="right">White</p>
						<div class="clearfix"></div>
					</div>
					<div class="span span4">
						<p class="left">Розмір</p>
						<p class="right"><span class="selection-box"><select class="domains valid" name="domains">
										   <option>M</option>
										   <option>L</option>
										   <option>XL</option>
										   <option>FS</option>
										   <option>S</option>
									   </select></span></p>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<p><a class="btn btn-default add-to-cart" href="#" data-id="<?php echo $product['id']; ?>"> Купити зараз: <i></i></a></p>
						</div
						<div class="clearfix"></div>
					<div class="social-icons">
						<ul>
							<li><a class="facebook1" href="#"></a></li>
							<li><a class="twitter1" href="#"></a></li>
							<li><a class="googleplus1" href="#"></a></li>
						</ul>
					</div>
					</div>
				<script src="/template/js/imagezoom.js"></script>
					<!-- FlexSlider -->
					<script defer src="/template/js/jquery.flexslider.js"></script>
					<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
					</script>
				</div>
				<div class="clearfix"></div>
					<div class="reviews-tabs">
      <!-- Main component for a primary marketing message or call to action -->

      <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
        <li class="test-class active"><a class="deco-none misc-class" href="#how-to"> Більше інформації</a></li>
        <li class="test-class"><a href="#features">Специфікації</a></li>
        <li class="test-class"><a class="deco-none" href="#source">Відгуки</a></li>
      </ul>

      <div class="tab-content responsive hidden-xs hidden-sm">
        <div class="tab-pane active" id="how-to">
		 <p class="tab-text"><?php echo $product['description']; ?></p>
        </div>
        <div class="tab-pane" id="features">
		  <p class="tab-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
        <div class="tab-pane" id="source">
		  <div class="response">
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 21, 2015</li>
									<li><a href="../../index.php">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 26, 2054</li>
									<li><a href="../../index.php">Reply</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
        </div>
      </div>		
	</div>

			</div>
			<div class="clearfix"></div>
			</div>

   <div class="other-products products-grid">
	   <div class="container">
		   <h3 class="like text-center">Акційні пропозиції</h3>
		   <ul id="flexiselDemo3">
			   <?php foreach ($sliderProducts as $sliderItem): ?>
				   <li><a href="/product/<?php echo $sliderItem['id']; ?>"><img src="<?php echo Product::getImage($sliderItem['id']); ?>" class="img-responsive" alt=""  /></a>
					   <div class="product liked-product simpleCart_shelfItem">
						   <a class="like_name" href="/product/<?php echo $sliderItem['id']; ?>"><?php echo $sliderItem['name']; ?></a>
						   <p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $sliderItem['price']; ?></span></a></p>
					   </div>
				   </li>
			   <?php endforeach; ?>

		   </ul>
		   <script type="text/javascript">
			   $(window).load(function() {
				   $("#flexiselDemo3").flexisel({
					   visibleItems: 4,
					   animationSpeed: 500,
					   autoPlay: true,
					   autoPlaySpeed: 1000,
					   pauseOnHover: true,
					   enableResponsiveBreakpoints: true,
					   responsiveBreakpoints: {
						   portrait: {
							   changePoint:480,
							   visibleItems: 1
						   },
						   landscape: {
							   changePoint:640,
							   visibleItems: 2
						   },
						   tablet: {
							   changePoint:768,
							   visibleItems: 3
						   }
					   }
				   });

			   });
		   </script>
		   <script type="text/javascript" src="/template/js/jquery.flexisel.js"></script>
	   </div>
   </div>

	<script src="/template/js/responsive-tabs.js"></script>
	<script type="text/javascript">
		$( '#myTab a' ).click( function ( e ) {
			e.preventDefault();
			$( this ).tab( 'show' );
		} );

		$( '#moreTabs a' ).click( function ( e ) {
			e.preventDefault();
			$( this ).tab( 'show' );
		} );

		( function( $ ) {
			// Test for making sure event are maintained
			$( '.js-alert-test' ).click( function () {
				alert( 'Button Clicked: Event was maintained' );
			} );
			fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
		} )( jQuery );

	</script>

</section>


   <!-- content-section-ends -->

<?php include ROOT . '/views/layouts/footer.php'; ?>