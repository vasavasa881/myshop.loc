<?php include (ROOT. '/views/layouts/header.php') ?>
				<!-- content-section-starts -->
	<div class="container">
	   <div class="products-page">
			<div class="products">
				<div class="product-listy">
					<h2>Категорії</h2>
					<ul class="product-list">
						<li>
							<?php foreach ($categories as $categoryItem): ?>

								<a href="/category/<?php echo $categoryItem['id']; ?>"
								   class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
								>

                            <?php  echo $categoryItem['name']; ?></a>

							<?php endforeach; ?>
						</li>

					</ul>
				</div>
				<div class="latest-bis">
					<img src="template/images/l.jpg" class="img-responsive" alt="" />
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
			   <div class="new-product-top">
				   <ul class="product-top-list">
					   <li><a href="/">Головна</a>&nbsp;<span>&gt;</span></li>
					   <li><span class="act"><?php echo $categories[--$categoryId]['name']; ?></span>&nbsp;</li>
				   </ul>
				   <p class="back"><a href="/">На головну</a></p>
				   <div class="clearfix"></div>
			   </div>
			   <div class="mens-toolbar">
				   <div class="sort">
					   <div class="sort-by">
						   <label>Сортувати</label>
						   <select>
							   <option value="">
								   Position                </option>
							   <option value="">
								   Name                </option>
							   <option value="">
								   Price                </option>
						   </select>
						   <a href=""><img src="/template/images/arrow2.gif" alt="" class="v-middle"></a>
					   </div>
				   </div>
				   <ul class="women_pagenation">
					   <?php echo $pagination->get(); ?>
				   </ul>
				   <div class="clearfix"></div>
			   </div>

			   <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">

				   <div class="cbp-vm-options">
					   <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
					   <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
				   </div>


				   <div class="pages">
					   <div class="limiter visible-desktop">
						   <label>Показати</label>
						   <select>
							   <option value="" selected="selected">
								   9                </option>
							   <option value="">
								   15                </option>
							   <option value="">
								   30                </option>
						   </select> на сторінці
					   </div>
				   </div>
				   <div class="clearfix"></div>
				   <ul>
					   <?php foreach ($categoryProducts as $product): ?>
					   <li>
						   <div class="products-grid">
						   <a class="cbp-vm-image" href="#">
							   <div class="simpleCart_shelfItem">
								   <div class="view view-first">
									   <div class="inner_content clearfix">
										   <div class="product_image">
											   <img src="<?php echo Product::getImage($product['id']); ?>" class="img-responsive" alt=""/>
											   <div class="mask">
												   <a href="/product/<?php echo $product['id']; ?>">Швидкий перегляд</a>
											   </div>
											   <div class="product_container">
												   <div class="cart-left">
													   <p class="title"><?php echo $product['name']; ?></p>
												   </div>
												   <div class="clearfix"></div>
											   </div>
										   </div>
									   </div>
								   </div>
						   </a>
						   <div class="cbp-vm-details">
							   Silver beet shallot wakame tomatillo salsify mung bean beetroot groundnut.
						   </div>
						   <p><a class="btn btn-default add-to-cart" href="#" data-id="<?php echo $product['id']; ?>"> <i></i> <span class="item_price"><?php echo $product['price']; ?></span></a></p>
						   </div>
			   </li>
						<?php endforeach; ?>
						</ul>
			   </div>


				<script src="/template/js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="/template/js/classie.js" type="text/javascript"></script>
			</div>
			<div class="clearfix"></div>

			<div class="clearfix"></div>



   <!-- content-section-ends -->
<div class="other-products">
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


		<!-- content-section-ends-here -->



	   </div>
	</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>