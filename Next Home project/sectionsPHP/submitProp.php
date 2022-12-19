		<?php

		if(isset($_POST['submitted2']))
			{		
				$Name = $_POST['Name'];
				$Location = $_POST['Location'];
				$Adress = $_POST['Adress'];
				$Image1 = $_POST['Image1'];
				$Image2 = $_POST['Image2'];
				$Image3 = $_POST['Image3'];
				$Image4 = $_POST['Image4'];
				$Image5 = $_POST['Image5'];
				$Image6 = $_POST['Image6'];
				$Description = $_POST['Description'];
				$Price = $_POST['Price'];
				$Area = $_POST['Area'];
				$Property_type = $_POST['Property_type'];
				$Status = $_POST['Status'];
				$Bedrooms = $_POST['Bedrooms'];
				$Garage = $_POST['Garage'];
				$Kitchen_features = $_POST['Kitchen_features'];
				$Elevator = $_POST['Elevator'];
				$Bathrooms = $_POST['Bathrooms'];
				$Cooling = $_POST['Cooling'];
				$Exterior = $_POST['Exterior'];
				$Fireplace = $_POST['Fireplace'];
				$Year = $_POST['Year'];
				$Heating_type = $_POST['Heating_type'];
				$Swimming_pool = $_POST['Swimming_pool'];
				$Free_wifi = $_POST['Free_wifi'];

				$insert2 = $db->con->query("INSERT INTO `properties`(`Name`, `Location`, `Adress`, `Image1`, `Image2`, `Image3`, `Image4`, `Image5`, `Image6`, `Description`, `Price`, `Area`, `Property_type`, `Status`, `Bedrooms`, `Garage`, `Kitchen_features`, `Elevator`, `Bathrooms`, `Cooling`, `Exterior`, `Fireplace`, `Year`, `Heating_type`, `Swimming_pool`, `Free_wifi`) VALUES 
				('$Name','$Location','$Adress','$Image1','$Image2','$Image3','$Image4','$Image5','$Image6',
				'$Description','$Price','$Area','$Property_type','$Status','$Bedrooms','$Garage',$Kitchen_features','$Elevator',
				'$Bathrooms','$Cooling','$Exterior','$Fireplace','$Year','$Heating_type','$Swimming_pool','$Free_wifi')");

				if(!$insert2)
				{
					echo mysqli_error();
				}
				else
				{
					echo '<script>alert("Property upload successfull")</script>';
				}
			}
        ?>
<!-- ============================ Page Title Start================================== -->
			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Submit Property</h2>
							<span class="ipn-subtitle">Just Submit Your Property</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Submit Property Start ================================== -->
			<section class="gray-simple">
			
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
						
							<div class="alert alert-success" role="alert">
							<p>Please, Sign In before you submit a property. If you don't have an account you can create one by <a href="#">Clicking Here</a></p>
							</div>
						
						</div>
						
						<!-- Submit Form -->
						<form action="header.php" method="POST">
						<div class="col-lg-12 col-md-12">
						
							<div class="submit-page">
								
								<!-- Basic Information -->
								<div class="form-submit">
								<form action="submitProp.php" method="POST">	
									<h3>Basic Information</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-12">
												<label>Property Title<span class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></span></label>
												<input type="text" class="form-control" name="Name">
											</div>
											
											<div class="form-group col-md-6">
												<label>Status</label>
												<select id="status" class="form-control" name="Status">
													<option value="">&nbsp;</option>
													<option value="Rent">For Rent</option>
													<option value="Sale">For Sale</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Property Type</label>
												<select id="ptypes" class="form-control" name="Property_type">
													<option value="">&nbsp;</option>
													<option value="1">Houses</option>
													<option value="2">Apartment</option>
													<option value="3">Villas</option>
													<option value="4">Commercial</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Price</label>
												<input type="text" class="form-control" name="Price" placeholder="FCFA">
											</div>
											
											<div class="form-group col-md-6">
												<label>Area</label>
												<input type="text" class="form-control" placeholder="msq" name="Area">
											</div>
											
											<div class="form-group col-md-6">
												<label>Bedrooms</label>
												<select id="bedrooms" class="form-control" name="Bedrooms">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Bathrooms</label>
												<select id="bathrooms" class="form-control" name="Bathrooms">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
											<h3>Gallery</h3>
												<label>Upload Gallery</label>
												<input type="text" class="form-control" name="Image1" placeholder="Enter Image address">
												<input type="text" class="form-control" name="Image2" placeholder="Enter Image address">
												<input type="text" class="form-control" name="Image3" placeholder="Enter Image address">
												<input type="text" class="form-control" name="Image4" placeholder="Enter Image address">
												<input type="text" class="form-control" name="Image5" placeholder="Enter Image address">
												<input type="text" class="form-control" name="Image6" placeholder="Enter Image address">

											</div>

										</div>
									</div>
									</form>
								</div>
								
								<!-- Gallery -->
								<!-- <div class="form-submit">	
									<h3>Gallery</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-12">
												<label>Upload Gallery</label>
												<form action="https://themezhub.net/upload-target" class="dropzone dz-clickable primary-dropzone">
													<div class="dz-default dz-message" name="">
														<i class="ti-gallery"></i>
														<span>Drag & Drop To Change Logo</span>
													</div>
												</form>
											</div>
											
										</div>
									</div>
								</div> -->
								
								<!-- Location -->
								<div class="form-submit">	
									<h3>Location</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-6">
												<label>Location</label>
												<input type="text" name="Location" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Address</label>
												<input name="Adress" type="text" class="form-control">
											</div>											
										</div>
									</div>
								</div>
								
								<!-- Detailed Information -->
								<div class="form-submit">	
									<h3>Detailed Information</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-12">
												<label>Description</label>
												<textarea class="form-control h-120" name="Description"></textarea>
											</div>
											
											<div class="form-group col-md-4">
												<label>Building Age (optional)</label>
												<select id="bage" class="form-control" name="Year">
													<option value="">&nbsp;</option>
													<option value="2017">0 - 5 Years</option>
													<option value="2012">0 - 10Years</option>
													<option value="2007">0 - 15 Years</option>
													<option value="2002">0 - 20 Years</option>
													<option value="1990">20+ Years</option>
												</select>
											</div>
											
											<div class="form-group col-md-4">
												<label>Garage (optional)</label>
												<select id="garage" class="form-control" name="Garage">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											
											<!-- <div class="form-group col-md-4">
												<label>Rooms (optional)</label>
												<select id="rooms" class="form-control" name="">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div> -->
											
											<div class="form-group col-md-12">
												<label>Other Features (optional)</label>
												<div class="o-features">
													<ul class="no-ul-list third-row">
														<li>
															<input id="a-1" class="checkbox-custom" value="Effortlessly stylish worktops" name="Kitchen_features" type="checkbox">
															<label for="a-1" class="checkbox-custom-label">Kitchen_features</label>
														</li>
														<li>
															<input id="a-2" class="checkbox-custom" value="Yes" name="Elevator" type="checkbox">
															<label for="a-2" class="checkbox-custom-label">Elevator</label>
														</li>
														<li>
															<input id="a-3" class="checkbox-custom" value="Central A/C" name="Cooling" type="checkbox">
															<label for="a-3" class="checkbox-custom-label">Cooling</label>
														</li>
														<li>
															<input id="a-4" class="checkbox-custom" value="Finished Brick" name="Exterior" type="checkbox">
															<label for="a-4" class="checkbox-custom-label">Exterior</label>
														</li>
														<li>
															<input id="a-5" class="checkbox-custom" value="Yes" name="Fireplace" type="checkbox">
															<label for="a-5" class="checkbox-custom-label">Fireplace</label>
														</li>
														<li>
															<input id="a-6" class="checkbox-custom" value="Electric System" name="Heating_type" type="checkbox">
															<label for="a-6" class="checkbox-custom-label">Heating Type</label>
														</li>
														<li>
															<input id="a-7" class="checkbox-custom" value="Yes" name="Swimming_pool" type="checkbox">
															<label for="a-7" class="checkbox-custom-label">Swimming Pool</label>
														</li>
														<li>
															<input id="a-8" class="checkbox-custom" value="Yes" name="Free_wifi" type="checkbox">
															<label for="a-8" class="checkbox-custom-label">Free WiFi</label>
														</li>
											
													</ul>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Contact Information -->
								<!-- <div class="form-submit">	
									<h3>Contact Information</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-4">
												<label>Name</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-4">
												<label>Email</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-4">
												<label>Phone (optional)</label>
												<input type="text" class="form-control">
											</div>
											
										</div>
									</div>
								</div> -->
								
								<div class="form-group col-lg-12 col-md-12">
									<label>Agreement *</label>
									<ul class="no-ul-list">
										<li>
											<input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox" required>
											<label for="aj-1" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
										</li>
									</ul>
								</div>
								
								<div class="form-group col-lg-12 col-md-12">
									<button class="btn btn-theme-light-2 rounded" type="submit" name="submitted2">Submit & Preview</button>
								</div>
											
							</div>
						</div>
						</form>
					</div>
				</div>
						
			</section>
			<!-- ============================ Submit Property End ================================== -->