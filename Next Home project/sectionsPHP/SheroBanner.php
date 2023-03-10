			<?php
				$ID = $_GET['ID'] ?? 1;
				foreach ($property->getData() as $item) :
					if ($item['ID'] == $ID) :
			?>
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="featured_slick_gallery gray">
				<div class="featured_slick_gallery-slide">
					<div class="featured_slick_padd"><a href="<?php echo $item['Image1']?>" class="mfp-gallery"><img src="<?php echo $item['Image1']?>" class="img-fluid mx-auto" alt="" /></a></div>
					<div class="featured_slick_padd"><a href="<?php echo $item['Image2']?>" class="mfp-gallery"><img src="<?php echo $item['Image2']?>" class="img-fluid mx-auto" alt="" /></a></div>
					<div class="featured_slick_padd"><a href="<?php echo $item['Image3']?>" class="mfp-gallery"><img src="<?php echo $item['Image3']?>" class="img-fluid mx-auto" alt="" /></a></div>
					<div class="featured_slick_padd"><a href="<?php echo $item['Image4']?>" class="mfp-gallery"><img src="<?php echo $item['Image4']?>" class="img-fluid mx-auto" alt="" /></a></div>
					<div class="featured_slick_padd"><a href="<?php echo $item['Image5']?>" class="mfp-gallery"><img src="<?php echo $item['Image5']?>" class="img-fluid mx-auto" alt="" /></a></div>
					<div class="featured_slick_padd"><a href="<?php echo $item['Image6']?>" class="mfp-gallery"><img src="<?php echo $item['Image6']?>" class="img-fluid mx-auto" alt="" /></a></div>
				</div>
				<a href="JavaScript:Void(0);" class="btn-view-pic top">View photos</a>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Property Header Info Start================================== -->
			<section class="gray-simple rtl p-0">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-12">
					
							<div class="property_block_wrap style-3">
							
								<div class="pbw-flex-1">
									<div class="pbw-flex-thumb">
										<img src="assets/img/agency-1.png" class="img-fluid" alt="" />
									</div>
								</div>
								
								<div class="pbw-flex">
									<div class="prt-detail-title-desc">
										<span class="prt-types sale">For <?php echo $item['Status']?></span>
										<h3><?php echo $item['Name']?>,<?php echo $item['Location']?></h3>
										<span><i class="lni-map-marker"></i> <?php echo $item['Adress']?></span>
										<h3 class="prt-price-fix"><?php echo $item['Price']?></h3>
										<div class="list-fx-features">
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt=""></div><?php echo $item['Bedrooms']?>
											</div>
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt=""></div><?php echo $item['Bathrooms']?>
											</div>
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt=""></div><?php echo $item['Area']?>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
						</div>	
					</div>
				</div>
			</section>
			<!-- ============================ Property Header Info Start================================== -->
			
			
			<!-- ============================ Property Detail Start ================================== -->
			<section class="gray-simple min">
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false"><h4 class="property_block_title">Detail & Features</h4></a>
								</div>
								<div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
									<div class="block-body">
										<ul class="deatil_features">
											<li><strong>Bedrooms:</strong><?php echo $item['Bedrooms']?></li>
											<li><strong>Bathrooms:</strong><?php echo $item['Bathrooms']?></li>
											<li><strong>Areas:</strong><?php echo $item['Area']?></li>
											<li><strong>Garage</strong><?php echo $item['Garage']?></li>
											<li><strong>Property Type:</strong><?php echo $item['Property_type']?></li>
											<li><strong>Year:</strong><?php echo $item['Year']?></li>
											<li><strong>Status:</strong><?php echo $item['Status']?></li>
											<li><strong>Cooling:</strong><?php echo $item['Cooling']?></li>
											<li><strong>Heating Type:</strong><?php echo $item['Heating_type']?></li>
											<li><strong>Kitchen Features:</strong><?php echo $item['Kitchen_features']?></li>
											<li><strong>Exterior:</strong><?php echo $item['Exterior']?></li>
											<li><strong>Swimming Pool:</strong><?php echo $item['Swimming_pool']?></li>
											<li><strong>Elevetor:</strong><?php echo $item['Elevator']?></li>
											<li><strong>Fireplace:</strong><?php echo $item['Fireplace']?></li>
											<li><strong>Free WiFi:</strong><?php echo $item['Free_wifi']?></li>
											
										</ul>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Description</h4></a>
								</div>
								<div id="clTwo" class="panel-collapse collapse show">
									<div class="block-body">
										<p><?php echo $item['Description']?></p>
									</div>
								</div>
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#amen"  data-bs-target="#clThree" aria-controls="clThree" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Ameneties</h4></a>
								</div>
								
								<div id="clThree" class="panel-collapse collapse show">
									<div class="block-body">
										<ul class="avl-features third color">
											<li>Air Conditioning</li>
											<li>Swimming Pool</li>
											<li>Central Heating</li>
											<li>Laundry Room</li>
											<li>Gym</li>
											<li>Alarm</li>
											<li>Window Covering</li>
											<li>Internet</li>
											<li>Pets Allow</li>
											<li>Free WiFi</li>
											<li>Car Parking</li>
											<li>Spa & Massage</li>
										</ul>
									</div>
								</div>
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#vid"  data-bs-target="#clFour" aria-controls="clFour" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Property video</h4></a>
								</div>
								
								<div id="clFour" class="panel-collapse collapse">
									<div class="block-body">
										<div class="property_video">
											<div class="thumb">
												<img class="pro_img img-fluid w100" src="assets/img/pl-6.jpg" alt="7.jpg">
												<div class="overlay_icon">
													<div class="bb-video-box">
														<div class="bb-video-box-inner">
															<div class="bb-video-box-innerup">
																<a href="#" data-bs-toggle="modal" data-bs-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#floor"  data-bs-target="#clFive" aria-controls="clFive" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Floor Plan</h4></a>
								</div>
								
								<div id="clFive" class="panel-collapse collapse">
									<div class="block-body">
										<div class="accordion" id="floor-option">
											<div class="card">
												<div class="card-header" id="firstFloor">
													<h2 class="mb-0">
														<button type="button" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#firstfloor" aria-controls="firstfloor">First Floor<span><?php echo $item['Area']?></span></button>									
													</h2>
												</div>
												<div id="firstfloor" class="collapse" aria-labelledby="firstFloor" data-parent="#floor-option">
													<div class="card-body">
														<img src="assets/img/floor.jpg" class="img-fluid" alt="" />
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header" id="seconfFloor">
													<h2 class="mb-0">
														<button type="button" class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#secondfloor" aria-controls="secondfloor">Second Floor<span><?php echo $item['Area']?></span></button>
													</h2>
												</div>
												<div id="secondfloor" class="collapse" aria-labelledby="seconfFloor" data-parent="#floor-option">
													<div class="card-body">
														<img src="assets/img/floor.jpg" class="img-fluid" alt="" />
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header" id="third-garage">
													<h2 class="mb-0">
														<button type="button" class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#garages" aria-controls="garages">Garage<span><?php echo $item['Area']?></span></button>                     
													</h2>
												</div>
												<div id="garages" class="collapse" aria-labelledby="third-garage" data-parent="#floor-option">
													<div class="card-body">
														<img src="assets/img/floor.jpg" class="img-fluid" alt="" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#loca"  data-bs-target="#clSix" aria-controls="clSix" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Location</h4></a>
								</div>
								
								<div id="clSix" class="panel-collapse collapse">
									<div class="block-body">
										<div class="map-container">
											<div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location"></div>
										</div>

									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#clSev"  data-bs-target="#clSev" aria-controls="clOne" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Gallery</h4></a>
								</div>
								
								<div id="clSev" class="panel-collapse collapse">
									<div class="block-body">
										<ul class="list-gallery-inline">
											<li>
												<a href="<?php echo $item['Image1']?>" class="mfp-gallery"><img src="<?php echo $item['Image1']?>" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="<?php echo $item['Image2']?>" class="mfp-gallery"><img src="<?php echo $item['Image2']?>" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="<?php echo $item['Image1']?>" class="mfp-gallery"><img src="<?php echo $item['Image3']?>" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="<?php echo $item['Image2']?>" class="mfp-gallery"><img src="<?php echo $item['Image4']?>" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="<?php echo $item['Image5']?>" class="mfp-gallery"><img src="<?php echo $item['Image5']?>" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="<?php echo $item['Image6']?>" class="mfp-gallery"><img src="<?php echo $item['Image6']?>" class="img-fluid mx-auto" alt="" /></a>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
							
							<!-- All over Review -->
							<div class="rating-overview">
								<div class="rating-overview-box">
									<span class="rating-overview-box-total">4.2</span>
									<span class="rating-overview-box-percent">out of 5.0</span>
									<div class="star-rating" data-rating="5"><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i>
									</div>
								</div>

								<div class="rating-bars">
										<div class="rating-bars-item">
											<span class="rating-bars-name">Service</span>
											<span class="rating-bars-inner">
												<span class="rating-bars-rating high" data-rating="4.7">
													<span class="rating-bars-rating-inner" style="width: 85%;"></span>
												</span>
												<strong>4.7</strong>
											</span>
										</div>
										<div class="rating-bars-item">
											<span class="rating-bars-name">Amenities</span>
											<span class="rating-bars-inner">
												<span class="rating-bars-rating good" data-rating="3.9">
													<span class="rating-bars-rating-inner" style="width: 75%;"></span>
												</span>
												<strong>3.9</strong>
											</span>
										</div>
										<div class="rating-bars-item">
											<span class="rating-bars-name">Location</span>
											<span class="rating-bars-inner">
												<span class="rating-bars-rating good" data-rating="3.7">
													<span class="rating-bars-rating-inner" style="width: 60.2%;"></span>
												</span>
												<strong>3.7</strong>
											</span>
										</div>
										<div class="rating-bars-item">
											<span class="rating-bars-name">Cleanliness</span>
											<span class="rating-bars-inner">
												<span class="rating-bars-rating high" data-rating="4.5">
													<span class="rating-bars-rating-inner" style="width:80%;"></span>
												</span>
												<strong>4.5</strong>
											</span>
										</div>
								</div>
							</div>
							<!-- All over Review -->
							
							<!-- Single Reviews Block -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#rev"  data-bs-target="#clEight" aria-controls="clEight" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">102 Reviews</h4></a>
								</div>
								
								<div id="clEight" class="panel-collapse collapse show">
									<div class="block-body">
										<div class="author-review">
											<div class="comment-list">
												<ul>
													<li class="article_comments_wrap">
														<article>
															<div class="article_comments_thumb">
																<img src="assets/img/user-1.jpg" alt="">
															</div>
															<div class="comment-details">
																<div class="comment-meta">
																	<div class="comment-left-meta">
																		<h4 class="author-name">Bah Felix</h4>
																		<div class="comment-date">19th May 2018</div>
																	</div>
																</div>
																<div class="comment-text">
																	<p>Very tidy and lovely AirBnb apartment equipped with everything you need. A good bed and nice bathroom.</p>
																</div>
															</div>
														</article>
													</li>
													<li class="article_comments_wrap">
														<article>
															<div class="article_comments_thumb">
																<img src="assets/img/user-12.jpg" alt="">
															</div>
															<div class="comment-details">
																<div class="comment-meta">
																	<div class="comment-left-meta">
																		<h4 class="author-name">Sir Matthew</h4>
																		<div class="comment-date">19th May 2018</div>
																	</div>
																</div>
																<div class="comment-text">
																	<p>Place is at a perfect location, very easy to get around with public transportation and walking distance to awesome bars and restaurants. </p>
																</div>
															</div>
														</article>
													</li>
												</ul>
											</div>
										</div>
										<a href="#" class="reviews-checked theme-cl"><i class="fas fa-arrow-alt-circle-down mr-2"></i>See More Reviews</a>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#nearby" data-bs-target="#clNine" aria-controls="clNine" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Nearby</h4></a>
								</div>
								
								<div id="clNine" class="panel-collapse collapse show">
									<div class="block-body">
										
										<!-- Schools -->
										<div class="nearby-wrap">
											<div class="nearby_header">
												<div class="nearby_header_first">
													<h5>Schools Around</h5>
												</div>
												<div class="nearby_header_last">
													<div class="nearby_powerd">
														Powerd by <img src="assets/img/edu.png" class="img-fluid" alt="" />
													</div>
												</div>
											</div>
											<div class="neary_section_list">
											
												<div class="neary_section">
													<div class="neary_section_first">
														<h4 class="nearby_place_title">Green Iseland School<small>(3.52 mi)</small></h4>
													</div>
													<div class="neary_section_last">
														<div class="nearby_place_rate">
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star"></i>														
														</div>
														<small class="reviews-count">(421 Reviews)</small>
													</div>
												</div>
												
												<div class="neary_section">
													<div class="neary_section_first">
														<h4 class="nearby_place_title">Ragni Intermediate College<small>(0.52 mi)</small></h4>
													</div>
													<div class="neary_section_last">
														<div class="nearby_place_rate">
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star-half filled"></i>														
														</div>
														<small class="reviews-count">(470 Reviews)</small>
													</div>
												</div>
												
												<div class="neary_section">
													<div class="neary_section_first">
														<h4 class="nearby_place_title">Rose Wood Primary Scool<small>(0.47 mi)</small></h4>
													</div>
													<div class="neary_section_last">
														<div class="nearby_place_rate">
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star"></i>														
														</div>
														<small class="reviews-count">(204 Reviews)</small>
													</div>
												</div>
												
											</div>
										</div>
										
										<!-- Hotel & Restaurant -->
										<div class="nearby-wrap">
											<div class="nearby_header">
												<div class="nearby_header_first">
													<h5>Food Around</h5>
												</div>
												<div class="nearby_header_last">
													<div class="nearby_powerd">
														Powerd by <img src="assets/img/food.png" class="img-fluid" alt="" />
													</div>
												</div>
											</div>
											<div class="neary_section_list">
											
												<div class="neary_section">
													<div class="neary_section_first">
														<h4 class="nearby_place_title">The Rise hotel<small>(2.42 mi)</small></h4>
													</div>
													<div class="neary_section_last">
														<div class="nearby_place_rate">
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>														
														</div>
														<small class="reviews-count">(105 Reviews)</small>
													</div>
												</div>
												
												<div class="neary_section">
													<div class="neary_section_first">
														<h4 class="nearby_place_title">Blue Ocean Bar & Restaurant<small>(1.52 mi)</small></h4>
													</div>
													<div class="neary_section_last">
														<div class="nearby_place_rate">
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star filled"></i>
															<i class="fa fa-star"></i>														
														</div>
														<small class="reviews-count">(40 Reviews)</small>
													</div>
												</div>
												
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
							
							<!-- Single Write a Review -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#comment" data-bs-target="#clTen" aria-controls="clTen" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Write a Review</h4></a>
								</div>
								
								<div id="clTen" class="panel-collapse collapse show">
									<div class="block-body">
										<form class="simple-form">
											<div class="row">
												
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<textarea class="form-control ht-80" placeholder="Messages"></textarea>
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Property Title">
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Your Name">
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<input type="email" class="form-control" placeholder="Your Email">
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<button class="btn btn-theme-light-2 rounded" type="submit">Submit Review</button>
													</div>
												</div>
												
											</div>
										</form>
									</div>
								</div>
								
							</div>
							
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							
							<!-- Like And Share -->
							<div class="like_share_wrap b-0">
								<ul class="like_share_list">
									<li><a href="JavaScript:Void(0);" class="btn btn-likes" data-toggle="tooltip" data-original-title="Share"><i class="fas fa-share"></i>Share</a></li>
									<li><a href="JavaScript:Void(0);" class="btn btn-likes" data-toggle="tooltip" data-original-title="Save"><i class="fas fa-heart"></i>Save</a></li>
								</ul>
							</div>
							
							<div class="details-sidebar">
							
								<!-- Agent Detail -->
								<div class="sides-widget">
									<div class="sides-widget-header">
										<div class="agent-photo"><img src="assets/img/user-11.jpg" alt=""></div>
										<div class="sides-widget-details">
											<h4><a href="#">Ndam Lami</a></h4>
											<span><i class="lni-phone-handset"></i>+237 773 456 789</span>
										</div>
										<div class="clearfix"></div>
									</div>
									
									<div class="sides-widget-body simple-form">
										<div class="form-group">
											<label>Email</label>
											<input type="text" class="form-control" placeholder="Your Email">
										</div>
										<div class="form-group">
											<label>Phone No.</label>
											<input type="text" class="form-control" placeholder="Your Phone">
										</div>
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control">I'm interested in this property.</textarea>
										</div>
										<button class="btn btn-black btn-md rounded full-width">Send Message</button>
									</div>
								</div>
								
								
								<!-- Featured Property -->
								<div class="sidebar-widgets">
									
									<h4>Featured Property</h4>
									
									<div class="sidebar_featured_property">
										
										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="assets/img/p-1.jpg" class="img-fluid" alt="">
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="single-property.html">Loss vengel New Apartment</a></h4>
												<span><i class="ti-location-pin"></i>Ntarinkon</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
														<div class="property_types_vlix sale">For Sale</div>
													</div>
													<div class="lists_property_price_value">
														<h4>4,240,000</h4>
													</div>
												</div>
											</div>
										</div>
										
										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="assets/img/p-4.jpg" class="img-fluid" alt="">
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="single-property.html">Montreal Quriqe Apartment</a></h4>
												<span><i class="ti-location-pin"></i>Prince Street</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
														<div class="property_types_vlix">For Rent</div>
													</div>
													<div class="lists_property_price_value">
														<h4>80,000.</h4>
													</div>
												</div>
											</div>
										</div>
										
										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="assets/img/p-7.jpg" class="img-fluid" alt="">
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="single-property.html">Curmic Studio For Office</a></h4>
												<span><i class="ti-location-pin"></i>Vetenary Junction</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
														<div class="property_types_vlix buy">For Sale</div>
													</div>
													<div class="lists_property_price_value">
														<h4>1,730.000</h4>
													</div>
												</div>
											</div>
										</div>
										
										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="assets/img/p-5.jpg" class="img-fluid" alt="">
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="single-property.html">Montreal Quebec City</a></h4>
												<span><i class="ti-location-pin"></i>Che Street</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
														<div class="property_types_vlix">For Rent</div>
													</div>
													<div class="lists_property_price_value">
														<h4>124,000</h4>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									
								</div>
							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<?php
				endif;
			endforeach;
			?>
			<!-- ============================ Property Detail End ================================== -->