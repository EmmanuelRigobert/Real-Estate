			<!-- ================= Explore Property ================= -->
			<section class="bg-light">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Explore Good places</h2>
								<p>Find your perfect home out of several available! We help you achieve more results with less effort</p>
							</div>
						</div>
					</div>
					
					<div class="row">
					<?php foreach($property_shuffle as $item){?>
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="<?php printf('%s?ID=%s', 'single-property.php',  $item['ID']); ?>"><img src="<?php echo $item['Image1']?>" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="<?php printf('%s?ID=%s', 'single-property.php',  $item['ID']); ?>"><img src="<?php echo $item['Image2']?>" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="<?php printf('%s?ID=%s', 'single-property.php',  $item['ID']); ?>"><img src="<?php echo $item['Image3']?>" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For <?php echo $item['Status']?></span>
											<h4 class="listing-name verified"><a href="<?php printf('%s?ID=%s', 'single-property.php',  $item['ID']); ?>" class="prt-link-detail"><?php echo $item['Name']?></a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price"><?php echo $item['Price']?></h6>
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
								
								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" /><?php echo $item['Adress']?>,<?php echo $item['Location']?></div>
									</div>
									<div class="footer-flex">
										<a href="<?php printf('%s?ID=%s', 'single-property.php',  $item['ID']); ?>" class="prt-view">View</a>
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Property -->
						
						<?php }?>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="multi-property.php" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
						</div>
					</div>
					
				</div>	
			</section>
			<!-- ================================= Explore Property =============================== -->
			