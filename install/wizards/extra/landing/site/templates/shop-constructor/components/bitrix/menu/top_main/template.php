<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="navbar navbar-default" role="navigation">
		<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
		  <span class="text"><?=GetMessage("MENU");?></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<nav class="collapse collapsing navbar-collapse">
			<ul class="nav navbar-nav navbar-center">

				<?
				foreach($arResult as $arItem):
					if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
						continue;
				?>
					<?if($arItem["SELECTED"]):?>
						<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
					<?else:?>
						<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
					<?endif?>
					
				<?endforeach?>
			</ul>
		</nav>
	</div>
<?endif?>
<?if(false):////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>
<div class="navbar navbar-default" role="navigation">
						<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
						  <span class="text">Menu</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
			  
						<nav class="collapse collapsing navbar-collapse">
						  <ul class="nav navbar-nav navbar-center">
							<li class="parent">
							  <a href="index.html">Home</a>
							  <ul class="sub">
								<li><a href="index.html">Creative</a></li>
								<li><a href="home-2.html">Paralax</a></li>
								<li><a href="home-3.html">Simple (Boxed)</a></li>
								<li><a href="home-4.html">Business</a></li>
								<li><a href="home-5.html">Animation</a></li>
								<li class="parent">
								  <a href="shop.html">Shop</a>
								  <ul class="sub">
									<li><a href="shop.html">Shop 1</a></li>
									<li><a href="shop-2.html">Shop 2</a></li>
									<li><a href="shop-3.html">Shop 3</a></li>
									<li><a href="shop-4.html">Shop 4</a></li>
									<li><a href="shop-5.html">Shop 5</a></li>
									<li><a href="shop-6.html">Shop 6</a></li>
									<li><a href="shop-7.html">Shop 7</a></li>
									<li><a href="shop-8.html">Shop 8</a></li>
								  </ul>
								</li>
								<li><a href="index-one-page.html">One Page Site</a></li>
							  </ul>
							</li>
							<li class="parent">
							  <a href="#">Pages<span class="item-new">New</span></a>
							  <ul class="sub">
								<li class="parent">
								  <a href="#">Headers<span class="item-new">New</span></a>
								  <ul class="sub">
									<li><a href="header1.html">Simple Header</a></li>
									<li><a href="header2.html">Fixed Header</a></li>
									<li><a href="header3.html">Shop Header with User Menu</a></li>
									<li><a href="header4.html">Shop Header with Social Icons</a></li>
									<li><a href="header5.html">Shop Header with Search Bar</a></li>
									<li><a href="header6.html">Shop Header with Contacts</a></li>
									<li><a href="header7.html">Header with Hidden User Menu</a></li>
									<li><a href="header8.html">Fixed Header with Hidden User Menu</a></li>
									<li><a href="header9.html">Fixed Shop Header with User Menu</a></li>
									<li><a href="header10.html">Extended Header</a></li>
									<li><a href="header11.html">Extended Header with User Menu</a></li>
									<li><a href="header12.html">Header with collapsed menu</a></li>
								  </ul>
								</li>
								<li><a href="sidebar-blocks.html">All sidebar blocks</a></li>
								<li><a href="full-width.html">Full Width</a></li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li class="parent">
								  <a href="about-us.html">About Us</a>
								  <ul class="sub">
									<li><a href="about-us.html">About Us (1)</a></li>
									<li><a href="about-us-2.html">About Us (2)</a></li>
									<li><a href="about-us-3.html">About Us (3)</a></li>
								  </ul>
								</li>
								<li><a href="clients.html">Clients</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="blog-list.html">Blog List</a></li>
								<li><a href="blog-view.html">Blog Post View</a></li>
								<li><a href="search-results.html">Search Results</a></li>
								<li class="parent">
								  <a href="404.html">Page 404</a>
								  <ul class="sub">
									<li><a href="404.html">Page 404 (1)</a></li>
									<li><a href="404-2.html">Page 404 (2)</a></li>
									<li><a href="404-3.html">Page 404 (3)</a></li>
								  </ul>
								</li>
								<li class="parent">
								  <a href="#">Portfolio</a>
								  <ul class="sub">
									<li><a href="portfolio-1.html">Portfolio (1 column)</a></li>
									<li><a href="portfolio-2.html">Portfolio (2 column)</a></li>
									<li><a href="portfolio-3.html">Portfolio (3 column)</a></li>
									<li><a href="portfolio-4.html">Portfolio (4 column)</a></li>
									<li><a href="portfolio-slider.html">Portfolio (Slider)</a></li>
									<li><a href="portfolio-single.html">Single Project</a></li>
								  </ul>
								</li>
								<li><a href="gallery-modern.html">Modern Gallery</a></li>
								<li class="parent">
								  <a href="#">Gallery</a>
								  <ul class="sub">
									<li><a href="gallery-1.html">Gallery (1 column)</a></li>
									<li><a href="gallery-2.html">Gallery (2 column)</a></li>
									<li><a href="gallery-3.html">Gallery (3 column)</a></li>
									<li><a href="gallery-4.html">Gallery (4 column)</a></li>
								  </ul>
								</li>
								<li><a href="pricing.html">Pricing</a></li>
								<li><a href="team.html">Team</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="careers.html">Careers</a></li>
								<li><a href="coming-soon.html">Coming Soon</a></li>
								<li><a href="under-construction.html">Under Construction</a></li>
								<li><a href="sitemap.html">Sitemap</a></li>
								<li><a href="login-2.html">Login / Register</a></li>
								<li class="parent">
								  <a href="#">Newsletter</a>
								  <ul class="sub">
									<li><a href="newsletter-big-intro.html">Newsletter Big Intro</a></li>
									<li><a href="newsletter-big-portfolio.html">Newsletter Big Portfolio</a></li>
									<li><a href="newsletter-columns.html">Newsletter Columns</a></li>
									<li><a href="newsletter-info.html">Newsletter Info</a></li>
									<li><a href="newsletter-plan.html">Newsletter Plan</a></li>
									<li><a href="newsletter-portfolio.html">Newsletter Portfolio</a></li>
									<li><a href="newsletter-product-list.html">Newsletter Product List</a></li>
									<li><a href="newsletter-story.html">Newsletter Story</a></li>
								  </ul>
								</li>
							  </ul>
							</li>
							<li class="parent">
							  <a href="shop.html">Shop</a>
							  <ul class="sub">
								<li class="parent">
								  <a href="shop-catalog-grid.html">Catalog (Grid)</a>
								  <ul class="sub">
									<li><a href="shop-catalog-grid-left.html">Catalog (Left Sidebar)</a></li>
									<li><a href="shop-catalog-grid-right.html">Catalog (Right Sidebar)</a></li>
									<li><a href="shop-catalog-grid-3.html">Catalog (3 columns)</a></li>
									<li><a href="shop-catalog-grid.html">Catalog (4 columns)</a></li>
									<li><a href="shop-catalog-grid-5.html">Catalog (5 columns)</a></li>
								  </ul>
								</li>
								<li><a href="shop-catalog-list.html">Catalog (List)</a></li>
								<li class="parent">
								  <a href="shop-product-view.html">Product View</a>
								  <ul class="sub">
									<li><a href="shop-product-view.html">Product View</a></li>
									<li><a href="shop-product-view-variants.html">Product View (Variants)</a></li>
									<li><a href="shop-product-view-sidebar-left.html">Product View (Left Sidebar)</a></li>
									<li><a href="shop-product-view-sidebar.html">Product View (Right Sidebar)</a></li>
								  </ul>
								</li>
								<li><a href="shop-cart.html">Shopping Cart</a></li>
								<li><a href="shop-checkout.html">Proceed to Checkout</a></li>
								<li><a href="shop-confirmation.html">Confirmation Page</a></li>
								<li><a href="shop-compare.html">Compare Products</a></li>
								<li class="parent">
								  <a href="shop-account.html">My Account</a>
								  <ul class="sub">
									<li><a href="shop-account.html">My Dashboard</a></li>
									<li><a href="shop-account-information.html">Account Information</a></li>
									<li><a href="shop-account-address.html">Address Book</a></li>
									<li><a href="shop-account-orders.html">My Orders</a></li>
								  </ul>
								</li>
								<li><a href="shop-login.html">Login / Register</a></li>
								<li><a href="shop-forgot.html">Password Recovery</a></li>
							  </ul>
							</li>
							<li class="parent megamenu promo">
							  <a href="#">Mega Menu<span class="item-new">New</span></a>
							  <ul class="sub">
								<li class="sub-wrapper">
								  <div class="sub-list">
									<div class="box closed">
									  <h6 class="title">Savant Apple Integration</h6>
									  <ul>
										<li><a href="#">iPad, iPod touch, iPhone &amp; Mac Control</a></li>
										<li><a href="#">iPod touch Remote Control</a></li>
										<li><a href="#">Savant Host (Mac Mini)<span class="item-new bg-warning">Wow</span></a></li>
									  </ul>
									</div><!-- .box -->
									
									<div class="box closed">
									  <h6 class="title">Savant Audio/Video Control</h6>
									  <ul>
										<li><a href="#">Distributed Audio &amp; Video</a></li>
										<li><a href="#">Matrix Switchers</a></li>
										<li><a href="#">Audio/Video Processing</a></li>
									  </ul>
									</div><!-- .box -->
									
									<div class="box closed">
									  <h6 class="title">Savant Display Solutions</h6>
									  <ul>
										<li><a href="#">Video Tiling<span class="item-new">New</span></a></li>
										<li><a href="#">On-Screen Display</a></li>
										<li><a href="#">Digital Messaging</a></li>
									  </ul>
									</div><!-- .box -->
									
									<div class="box closed">
									  <h6 class="title">Savant Sound</h6>
									  <ul>
										<li><a href="#">Distributed Audio Controller</a></li>
										<li><a href="#">Multi-channel Amplifiers<span class="item-new">New</span></a></li>
										<li><a href="#">Architectural Speakers</a></li>
									  </ul>
									</div><!-- .box -->
									
									<div class="box closed">
									  <h6 class="title">Savant Display Solutions</h6>
									  <ul>
										<li><a href="#">Video Tiling<span class="item-new bg-success">Coming Soon</span></a></li>
										<li><a href="#">On-Screen Display</a></li>
										<li><a href="#">Digital Messaging</a></li>
									  </ul>
									</div><!-- .box -->
									
									<div class="box closed">
									  <h6 class="title">Savant Sound</h6>
									  <ul>
										<li><a href="#">Distributed Audio Controller</a></li>
										<li><a href="#">Multi-channel Amplifiers</a></li>
										<li><a href="#">Architectural Speakers<span class="item-new">New</span></a></li>
									  </ul>
									</div><!-- .box -->
								  </div><!-- .sub-list -->
								  
								  <div class="promo-block">
									<a href="#">
									  <img src="<?=SITE_TEMPLATE_PATH?>/img/content/megamenu-big.png" width="253" height="457" alt="">
									</a>
								  </div><!-- .promo-block -->
								</li>
							  </ul><!-- .sub -->
							</li>
							<li class="parent megamenu promo">
							  <a href="#">Elements</a>
							  <ul class="sub">
								<li class="sub-wrapper">
								  <div class="sub-list">
									<div class="box">
									  <ul>
										<li><a href="elements-accordions.html"><i class="fa fa-plus-square"></i> Accordions &amp; Toggles</a></li>
										<li><a href="elements-animations.html"><i class="fa fa-money"></i> Animations</a></li>
										<li><a href="elements-buttons.html"><i class="fa fa-twitter"></i> Buttons &amp; Social Icons</a></li>
										<li><a href="elements-carousel.html"><i class="fa fa-arrows-h"></i> Carousels &amp; Sliders</a></li>
										<li><a href="elements-charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a></li>
										<li><a href="elements-container.html"><i class="fa fa-archive"></i> Container</a></li>
										<li><a href="elements-content-band.html"><i class="fa fa-road"></i> Content Band</a></li>
										<li><a href="elements-dividers.html"><i class="fa fa-ellipsis-h"></i> Dividers &amp; Gaps</a></li>
										<li><a href="elements-featured-box.html"><i class="fa fa-star"></i> Featured Box</a></li>
										<li><a href="elements-icons.html"><i class="fa fa-rocket"></i> Font Awesome Icons</a></li>
										<li><a href="elements-frames.html"><i class="fa fa-square-o"></i> Frames</a></li>
										<li><a href="elements-maps.html"><i class="fa fa-map-marker"></i> Google Maps</a></li>
										<li><a href="elements-livicons.html"><i class="livicon block" data-n="rocket" data-s="16" data-c="#1e1e1e" data-hc="0"></i> LivIcons</a></li>
										<li><a href="elements-media.html"><i class="fa fa-video-camera"></i> Media</a></li>
										<li><a href="elements-notification.html"><i class="fa fa-info-circle"></i> Notification</a></li>
									  </ul>
									</div><!-- .box -->
									<div class="box">
									  <ul>
										<li><a href="elements-person.html"><i class="fa fa-user"></i> Person</a></li>
										<li><a href="elements-post-sliders.html"><i class="fa fa-th-list"></i> Posts Sliders</a></li>
										<li><a href="elements-pricing.html"><i class="fa fa-list-alt"></i> Pricing and Data Tables</a></li>
										<li><a href="elements-progress-bar.html"><i class="fa fa-tasks"></i> Progress Bars</a></li>
										<li><a href="elements-promo-panel.html"><i class="fa fa-tasks"></i> Promo Panel</a></li>
										<li><a href="elements-recent-posts.html"><i class="fa fa-flash"></i> Recent Posts</a></li>
										<li><a href="elements-shop.html"><i class="fa fa-shopping-cart"></i> Shop Elements</a></li>
										<li><a href="elements-sequence.html"><i class="fa fa-sort-numeric-asc"></i> Sequence</a></li>
										<li><a href="elements-social-feed.html"><i class="fa fa-users"></i> Social Feed</a></li>
										<li><a href="elements-tabs.html"><i class="fa fa-folder-open"></i> Tabs</a></li>
										<li><a href="elements-testimonials.html"><i class="fa fa-comment"></i> Testimonials</a></li>
										<li><a href="elements-text-rotation.html"><i class="fa fa-rotate-right"></i> Text Rotation</a></li>
										<li><a href="elements-time-line.html"><i class="fa fa-clock-o"></i> Timeline</a></li>
										<li><a href="elements-works.html"><i class="fa fa-picture-o"></i> Works</a></li>
									  </ul>
									</div><!-- .box -->
								  </div><!-- .sub-list -->
								  
								  <div class="promo-block bg">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/content/menu-elements.png" width="240" height="434" alt="">
								  </div><!-- .promo-block -->
								</li>
							  </ul>
							</li>
							<li class="parent item-primary item-bg">
							  <a href="#">Bootstrap</a>
							  <ul class="sub">
								<li><a href="bootstrap-accordions.html">Accordions</a></li>
								<li><a href="bootstrap-alerts.html">Alerts</a></li>
								<li><a href="bootstrap-buttons.html">Buttons</a></li>
								<li><a href="bootstrap-forms.html">Forms</a></li>
								<li><a href="bootstrap-list-group.html">List Group</a></li>
								<li><a href="bootstrap-panels.html">Panels</a></li>
								<li><a href="bootstrap-tables.html">Tables</a></li>
								<li><a href="bootstrap-tabs.html">Tabs</a></li>
								<li><a href="bootstrap-tooltips.html">Tooltip</a></li>
								<li><a href="bootstrap-typography.html">Typography</a></li>
							  </ul>
							</li>
							<li class="item-danger item-bg text-danger">
							  <a href="http://themeforest.net/item/progressive-multipurpose-responsive-template/7197521" target="_blank">Buy Now!</a>
							</li>
						  </ul>
						</nav>
					  </div>
<?endif?>