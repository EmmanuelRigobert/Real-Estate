

<div class="col-lg-8 col-md-12 list-layout">
							
							<div class="row justify-content-center">
							<?php foreach($property_shuffle as $item){?>
								<!-- Single Property -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="grid">
									<div class="property-listing list_view style_new grid-item Buea">
										
										<div class="listing-img-wrapper">
											<div class="_exlio_125">For <?php echo $item['Status']?></div>
											<div class="like_unlike_prt">
												<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
											</div>
											<div class="list-img-slide">
												<div class="clior">
													<div><a href="<?php printf('%s?ID=%s', 'single-property.php',  $item['ID']); ?>"><img src="<?php echo $item['Image1']?>" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php printf('%s?ID=%s', 'single-property.php',  $item['ID']); ?>"><img src="<?php echo $item['Image2']?>" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="<?php printf('%s?ID=%s', 'single-property.php',  $item['ID']); ?>"><img src="<?php echo $item['Image1']?>" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
										</div>
										
										<div class="list_view_flex">
										
											<div class="listing-detail-wrapper mt-1">
												<div class="listing-short-detail-wrap">
													<div class="_card_list_flex mb-2">
														<div class="_card_flex_01">
															<span class="_list_blickes _netork">6 Network</span>
															<span class="_list_blickes types">Family</span>
														</div>
														<div class="_card_flex_last">
															<h6 class="listing-card-info-price mb-0"><?php echo $item['Price']?></h6>
														</div>
													</div>
													<div class="_card_list_flex">
														<div class="_card_flex_01">
															<h4 class="listing-name verified"><a href="single-property.html" class="prt-link-detail"><?php echo $item['Name']?>, <?php echo $item['Location']?></a></h4>
														</div>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features">
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div><?php echo $item['Bedrooms']?>
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div><?php echo $item['Bathrooms']?>
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div><?php echo $item['Area']?>
													</div>
												</div>
											</div>
											
											<div class="listing-detail-footer pl-0">
												<div class="footer-first">
													<div class="listing-features-info">
														<ul class="featur_5269">
															<li><div class="ft_th" data-bs-toggle="tooltip" data-bs-placement="top" title="Pet Allowed"><img src="assets/img/pet.svg" alt="" /></div></li>
															<li><div class="ft_th" data-bs-toggle="tooltip" data-bs-placement="top" title="Air Conditions"><img src="assets/img/cooling.svg" alt="" /></div></li>
															<li><div class="ft_th" data-bs-toggle="tooltip" data-bs-placement="top" title="Wifi Avaialable"><img src="assets/img/wifi.svg" alt="" /></div></li>
															<li><div class="ft_th" data-bs-toggle="tooltip" data-bs-placement="top" title="Gym Center"><img src="assets/img/gym.svg" alt="" /></div></li>
															<li><div class="ft_th" data-bs-toggle="tooltip" data-bs-placement="top" title="Car Parking"><img src="assets/img/car.svg" alt="" /></div></li>
														</ul>
													</div>
												</div>
												<div class="footer-flex">
													<a href="#" data-bs-toggle="modal" data-bs-target="#availability" class="prt-view theme-bg small">Check Availability</a>
												</div>
											</div>
										</div>
									</div>
									</div>
								</div>
								<!-- End Single Property -->
								<!-- Check Availability -->
			<div class="modal fade" id="availability" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<div class="text-center">
								<h2 class="mb-0">CONTACT</h2>
								<h4 class="mb-0"><?php echo $item['Location']?></h4>
								<a class="_calss_tyui theme-cl" href="tel:+237678503672">+237 678503672</a>
							</div>
							<div class="login-form">
								<form>
									
									<div class="row">
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Message</label>
												<textarea class="form-control ht-120">I'm interested in <?php echo $item['Name']?>,<?php echo $item['Location']?>. Please send me current availability and additional details.</textarea>
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Name*</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Email*</label>
												<input type="email" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Phone</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
									</div>
									
									<div class="default-terms_wrap">
										<div class="default-terms_flex">
											<input id="tm" class="checkbox-custom" name="tm" type="checkbox">
											<label for="tm" class="checkbox-custom-label"></label>
										</div>
										<div class="default-terms">By submitting this form, you agree to our <a href="#" title="Terms of Service">Terms of Service</a> and <a href="#" title="Privacy Policy">Privacy Policy</a>.</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Send Message</button>
									</div>
								
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
								<?php }?>
								
								
							</div>