<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1><?php echo $liu['name']; ?><small> <?php _e('Edit profile'); ?></small></h1>
		<ol class="breadcrumb"><li><a href="?route=dashboard"><i class="fa fa-dashboard"></i> <?php _e('Home'); ?></a></li><li class="active"><?php _e('My Profile'); ?></li></ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<?php if(!empty($statusmessage)): ?>
				<div class="row"><div class='col-md-12'><div class="alert alert-<?php print $statusmessage["type"]; ?> alert-auto" role="alert"><?php print __($statusmessage["message"]); ?></div></div></div>
		<?php endif; ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-default">
                    <div class="box-body">
						<div class="container-fluid">
						<div class="row">
							<form role="form" enctype="multipart/form-data" method="post">

							  <div class="col-md-9">
									<!-- !-->
								<div class="row">									 
								  <div class="col-md-6">
								  		<div class="form-group">
										<label for="name"><?php _e('Name'); ?> *</label>
										<input type="text" class="form-control" id="name" name="name" value="<?php echo $liu['name']; ?>" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="email"><?php _e('Email Address'); ?> *</label>
										<input type="email" class="form-control" id="email" name="email" value="<?php echo $liu['email']; ?>" required>
										</div>
									</div>
								</div>
<!-- !-->
<!-- !-->
								<div class="row">									 
									<div class="col-md-6">
									 	<div class="form-group">
										<label for="text"><?php _e('First Name'); ?></label>
										<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $liu['firstname']; ?>">
										</div>
   									</div>
   									<div class="col-md-6">
  										<div class="form-group">
										<label for="text"><?php _e('Last Name'); ?></label>
										<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $liu['lastname']; ?>">
										</div>
   									</div> 
   								</div>
   <!-- !-->
									
<!-- !-->
								<div class="row">									 
									 <div class="col-md-6">
									 <div class="form-group">
										<label for="text"><?php _e('date of birth'); ?></label>
										<input type="date" class="form-control" id="dob" name="dob" value="<?php echo $liu['dob']; ?>">
									</div>
   									</div>
   									<div class="col-md-6">
  										<div class="form-group">
										<label for="text"><?php _e('Country'); ?></label>										
										<select class="form-control" name="country" value="<?php echo $liu['country']; ?>">
											<option>--Country--</option>
											<option value="AFG">Afghanistan</option>
											<option value="ALA">Åland Islands</option>
											<option value="ALB">Albania</option>
											<option value="DZA">Algeria</option>
											<option value="ASM">American Samoa</option>
											<option value="AND">Andorra</option>
											<option value="AGO">Angola</option>
											<option value="AIA">Anguilla</option>
											<option value="ATA">Antarctica</option>
											<option value="ATG">Antigua and Barbuda</option>
											<option value="ARG">Argentina</option>
											<option value="ARM">Armenia</option>
											<option value="ABW">Aruba</option>
											<option value="AUS">Australia</option>
											<option value="AUT">Austria</option>
											<option value="AZE">Azerbaijan</option>
											<option value="BHS">Bahamas</option>
											<option value="BHR">Bahrain</option>
											<option value="BGD">Bangladesh</option>
											<option value="BRB">Barbados</option>
											<option value="BLR">Belarus</option>
											<option value="BEL">Belgium</option>
											<option value="BLZ">Belize</option>
											<option value="BEN">Benin</option>
											<option value="BMU">Bermuda</option>
											<option value="BTN">Bhutan</option>
											<option value="BOL">Bolivia, Plurinational State of</option>
											<option value="BES">Bonaire, Sint Eustatius and Saba</option>
											<option value="BIH">Bosnia and Herzegovina</option>
											<option value="BWA">Botswana</option>
											<option value="BVT">Bouvet Island</option>
											<option value="BRA">Brazil</option>
											<option value="IOT">British Indian Ocean Territory</option>
											<option value="BRN">Brunei Darussalam</option>
											<option value="BGR">Bulgaria</option>
											<option value="BFA">Burkina Faso</option>
											<option value="BDI">Burundi</option>
											<option value="KHM">Cambodia</option>
											<option value="CMR">Cameroon</option>
											<option value="CAN">Canada</option>
											<option value="CPV">Cape Verde</option>
											<option value="CYM">Cayman Islands</option>
											<option value="CAF">Central African Republic</option>
											<option value="TCD">Chad</option>
											<option value="CHL">Chile</option>
											<option value="CHN">China</option>
											<option value="CXR">Christmas Island</option>
											<option value="CCK">Cocos (Keeling) Islands</option>
											<option value="COL">Colombia</option>
											<option value="COM">Comoros</option>
											<option value="COG">Congo</option>
											<option value="COD">Congo, the Democratic Republic of the</option>
											<option value="COK">Cook Islands</option>
											<option value="CRI">Costa Rica</option>
											<option value="CIV">Côte d'Ivoire</option>
											<option value="HRV">Croatia</option>
											<option value="CUB">Cuba</option>
											<option value="CUW">Curaçao</option>
											<option value="CYP">Cyprus</option>
											<option value="CZE">Czech Republic</option>
											<option value="DNK">Denmark</option>
											<option value="DJI">Djibouti</option>
											<option value="DMA">Dominica</option>
											<option value="DOM">Dominican Republic</option>
											<option value="ECU">Ecuador</option>
											<option value="EGY">Egypt</option>
											<option value="SLV">El Salvador</option>
											<option value="GNQ">Equatorial Guinea</option>
											<option value="ERI">Eritrea</option>
											<option value="EST">Estonia</option>
											<option value="ETH">Ethiopia</option>
											<option value="FLK">Falkland Islands (Malvinas)</option>
											<option value="FRO">Faroe Islands</option>
											<option value="FJI">Fiji</option>
											<option value="FIN">Finland</option>
											<option value="FRA">France</option>
											<option value="GUF">French Guiana</option>
											<option value="PYF">French Polynesia</option>
											<option value="ATF">French Southern Territories</option>
											<option value="GAB">Gabon</option>
											<option value="GMB">Gambia</option>
											<option value="GEO">Georgia</option>
											<option value="DEU">Germany</option>
											<option value="GHA">Ghana</option>
											<option value="GIB">Gibraltar</option>
											<option value="GRC">Greece</option>
											<option value="GRL">Greenland</option>
											<option value="GRD">Grenada</option>
											<option value="GLP">Guadeloupe</option>
											<option value="GUM">Guam</option>
											<option value="GTM">Guatemala</option>
											<option value="GGY">Guernsey</option>
											<option value="GIN">Guinea</option>
											<option value="GNB">Guinea-Bissau</option>
											<option value="GUY">Guyana</option>
											<option value="HTI">Haiti</option>
											<option value="HMD">Heard Island and McDonald Islands</option>
											<option value="VAT">Holy See (Vatican City State)</option>
											<option value="HND">Honduras</option>
											<option value="HKG">Hong Kong</option>
											<option value="HUN">Hungary</option>
											<option value="ISL">Iceland</option>
											<option value="IND">India</option>
											<option value="IDN">Indonesia</option>
											<option value="IRN">Iran, Islamic Republic of</option>
											<option value="IRQ">Iraq</option>
											<option value="IRL">Ireland</option>
											<option value="IMN">Isle of Man</option>
											<option value="ISR">Israel</option>
											<option value="ITA">Italy</option>
											<option value="JAM">Jamaica</option>
											<option value="JPN">Japan</option>
											<option value="JEY">Jersey</option>
											<option value="JOR">Jordan</option>
											<option value="KAZ">Kazakhstan</option>
											<option value="KEN">Kenya</option>
											<option value="KIR">Kiribati</option>
											<option value="PRK">Korea, Democratic People's Republic of</option>
											<option value="KOR">Korea, Republic of</option>
											<option value="KWT">Kuwait</option>
											<option value="KGZ">Kyrgyzstan</option>
											<option value="LAO">Lao People's Democratic Republic</option>
											<option value="LVA">Latvia</option>
											<option value="LBN">Lebanon</option>
											<option value="LSO">Lesotho</option>
											<option value="LBR">Liberia</option>
											<option value="LBY">Libya</option>
											<option value="LIE">Liechtenstein</option>
											<option value="LTU">Lithuania</option>
											<option value="LUX">Luxembourg</option>
											<option value="MAC">Macao</option>
											<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
											<option value="MDG">Madagascar</option>
											<option value="MWI">Malawi</option>
											<option value="MYS">Malaysia</option>
											<option value="MDV">Maldives</option>
											<option value="MLI">Mali</option>
											<option value="MLT">Malta</option>
											<option value="MHL">Marshall Islands</option>
											<option value="MTQ">Martinique</option>
											<option value="MRT">Mauritania</option>
											<option value="MUS">Mauritius</option>
											<option value="MYT">Mayotte</option>
											<option value="MEX">Mexico</option>
											<option value="FSM">Micronesia, Federated States of</option>
											<option value="MDA">Moldova, Republic of</option>
											<option value="MCO">Monaco</option>
											<option value="MNG">Mongolia</option>
											<option value="MNE">Montenegro</option>
											<option value="MSR">Montserrat</option>
											<option value="MAR">Morocco</option>
											<option value="MOZ">Mozambique</option>
											<option value="MMR">Myanmar</option>
											<option value="NAM">Namibia</option>
											<option value="NRU">Nauru</option>
											<option value="NPL">Nepal</option>
											<option value="NLD">Netherlands</option>
											<option value="NCL">New Caledonia</option>
											<option value="NZL">New Zealand</option>
											<option value="NIC">Nicaragua</option>
											<option value="NER">Niger</option>
											<option value="NGA">Nigeria</option>
											<option value="NIU">Niue</option>
											<option value="NFK">Norfolk Island</option>
											<option value="MNP">Northern Mariana Islands</option>
											<option value="NOR">Norway</option>
											<option value="OMN">Oman</option>
											<option value="PAK">Pakistan</option>
											<option value="PLW">Palau</option>
											<option value="PSE">Palestinian Territory, Occupied</option>
											<option value="PAN">Panama</option>
											<option value="PNG">Papua New Guinea</option>
											<option value="PRY">Paraguay</option>
											<option value="PER">Peru</option>
											<option value="PHL">Philippines</option>
											<option value="PCN">Pitcairn</option>
											<option value="POL">Poland</option>
											<option value="PRT">Portugal</option>
											<option value="PRI">Puerto Rico</option>
											<option value="QAT">Qatar</option>
											<option value="REU">Réunion</option>
											<option value="ROU">Romania</option>
											<option value="RUS">Russian Federation</option>
											<option value="RWA">Rwanda</option>
											<option value="BLM">Saint Barthélemy</option>
											<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
											<option value="KNA">Saint Kitts and Nevis</option>
											<option value="LCA">Saint Lucia</option>
											<option value="MAF">Saint Martin (French part)</option>
											<option value="SPM">Saint Pierre and Miquelon</option>
											<option value="VCT">Saint Vincent and the Grenadines</option>
											<option value="WSM">Samoa</option>
											<option value="SMR">San Marino</option>
											<option value="STP">Sao Tome and Principe</option>
											<option value="SAU">Saudi Arabia</option>
											<option value="SEN">Senegal</option>
											<option value="SRB">Serbia</option>
											<option value="SYC">Seychelles</option>
											<option value="SLE">Sierra Leone</option>
											<option value="SGP">Singapore</option>
											<option value="SXM">Sint Maarten (Dutch part)</option>
											<option value="SVK">Slovakia</option>
											<option value="SVN">Slovenia</option>
											<option value="SLB">Solomon Islands</option>
											<option value="SOM">Somalia</option>
											<option value="ZAF">South Africa</option>
											<option value="SGS">South Georgia and the South Sandwich Islands</option>
											<option value="SSD">South Sudan</option>
											<option value="ESP">Spain</option>
											<option value="LKA">Sri Lanka</option>
											<option value="SDN">Sudan</option>
											<option value="SUR">Suriname</option>
											<option value="SJM">Svalbard and Jan Mayen</option>
											<option value="SWZ">Swaziland</option>
											<option value="SWE">Sweden</option>
											<option value="CHE">Switzerland</option>
											<option value="SYR">Syrian Arab Republic</option>
											<option value="TWN">Taiwan, Province of China</option>
											<option value="TJK">Tajikistan</option>
											<option value="TZA">Tanzania, United Republic of</option>
											<option value="THA">Thailand</option>
											<option value="TLS">Timor-Leste</option>
											<option value="TGO">Togo</option>
											<option value="TKL">Tokelau</option>
											<option value="TON">Tonga</option>
											<option value="TTO">Trinidad and Tobago</option>
											<option value="TUN">Tunisia</option>
											<option value="TUR">Turkey</option>
											<option value="TKM">Turkmenistan</option>
											<option value="TCA">Turks and Caicos Islands</option>
											<option value="TUV">Tuvalu</option>
											<option value="UGA">Uganda</option>
											<option value="UKR">Ukraine</option>
											<option value="ARE">United Arab Emirates</option>
											<option value="GBR">United Kingdom</option>
											<option value="USA">United States</option>
											<option value="UMI">United States Minor Outlying Islands</option>
											<option value="URY">Uruguay</option>
											<option value="UZB">Uzbekistan</option>
											<option value="VUT">Vanuatu</option>
											<option value="VEN">Venezuela, Bolivarian Republic of</option>
											<option value="VNM">Viet Nam</option>
											<option value="VGB">Virgin Islands, British</option>
											<option value="VIR">Virgin Islands, U.S.</option>
											<option value="WLF">Wallis and Futuna</option>
											<option value="ESH">Western Sahara</option>
											<option value="YEM">Yemen</option>
											<option value="ZMB">Zambia</option>
											<option value="ZWE">Zimbabwe</option>
</select>
										</div>
   									</div>
   								</div>
   <!-- !-->


   <!-- !-->
									<div class="row">									 
									 	<div class="col-md-6">
									 		<div class="form-group">
											<label for="text"><?php _e('City'); ?></label>
											<input type="text" class="form-control" id="city" name="city" value="<?php echo $liu['city']; ?>">
											</div>
   										</div>
   										<div class="col-md-6">
	   										<div class="form-group">
											<label for="text"><?php _e('State'); ?></label>
											<input type="text" class="form-control" id="state" name="state" value="<?php echo $liu['state']; ?>">
											</div>
   										</div> 
   									</div>
   <!-- !-->

   <!-- !-->
									<div class="row">									 
									 	<div class="col-md-6">
										 	<div class="form-group">
											<label for="text"><?php _e('Address'); ?></label>
											<input type="text" class="form-control" id="address" name="address" value="<?php echo $liu['address']; ?>">
											</div>
   										</div>
   										<div class="col-md-6">
   											<div class="form-group">
											<label for="text"><?php _e('Zip'); ?></label>
											<input type="text" class="form-control" id="zip" name="zip" value="<?php echo $liu['zip']; ?>">
											</div>
  										</div>
   									</div>
   <!-- !-->


   <!-- !-->
									<div class="row">									 
									  	<div class="col-md-6">
									 		<div class="form-group">
											<label for="text"><?php _e('Phone'); ?></label>
											<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $liu['phone']; ?>">
											</div>
   										</div>
   										<div class="col-md-6">
   											<div class="form-group">
											<label for="avatar"><?php _e('Avatar'); ?></label>
											<input type="file" name="avatar" accept="image/jpeg">
											<p class="help-block"><?php _e('Square JPG image only, recommended size: 128x128px.'); ?></p>
											<p><a href="?qa=removeAvatar"><?php _e('Remove Avatar Image'); ?></a></p>
											</div>
   										</div>   
   									</div>
   <!-- !-->
									<div class="form-group">
										<label for="password"><?php _e('Change Password'); ?></label>
										<input type="password" class="form-control" id="password" name="password" placeholder="<?php _e('Enter only if you want to change'); ?>">
									</div>
								</div>

								<div class="col-md-3">

									<div class="form-group">
										<label for="lang"><?php _e('Language'); ?></label>
										<select class="form-control select2 select2-hidden-accessible" id="lang" name="lang" style="width: 100%;" tabindex="-1" aria-hidden="true">
											<?php foreach ($languages as $language) { ?>
												<option <?php if($liu['lang'] == $language['code']) echo 'selected'; ?> value="<?php echo $language['code']; ?>"><?php echo $language['name']; ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label for="theme"><?php _e('Theme'); ?></label>
										<select class="form-control select2 select2-hidden-accessible" id="theme" name="theme" style="width: 100%;" tabindex="-1" aria-hidden="true">
											<option value="skin-dark" <?php if($liu['theme']=="skin-dark") echo "selected"; ?>><?php _e('Dark'); ?></option>
											<option value="skin-blue" <?php if($liu['theme']=="skin-blue") echo "selected"; ?>><?php _e('Blue'); ?></option>
											<option value="skin-black" <?php if($liu['theme']=="skin-black") echo "selected"; ?>><?php _e('Black'); ?></option>
											<option value="skin-purple" <?php if($liu['theme']=="skin-purple") echo "selected"; ?>><?php _e('Purple'); ?></option>
											<option value="skin-green" <?php if($liu['theme']=="skin-green") echo "selected"; ?>><?php _e('Green'); ?></option>
											<option value="skin-red" <?php if($liu['theme']=="skin-red") echo "selected"; ?>><?php _e('Red'); ?></option>
											<option value="skin-yellow" <?php if($liu['theme']=="skin-yellow") echo "selected"; ?>><?php _e('Yellow'); ?></option>
											<option value="skin-blue-light" <?php if($liu['theme']=="skin-blue-light") echo "selected"; ?>><?php _e('Blue Light'); ?></option>
											<option value="skin-black-light" <?php if($liu['theme']=="skin-black-light") echo "selected"; ?>><?php _e('Black Light'); ?></option>
											<option value="skin-purple-light" <?php if($liu['theme']=="skin-purple-light") echo "selected"; ?>><?php _e('Purple Light'); ?></option>
											<option value="skin-green-light" <?php if($liu['theme']=="skin-green-light") echo "selected"; ?>><?php _e('Green Light'); ?></option>
											<option value="skin-red-light" <?php if($liu['theme']=="skin-red-light") echo "selected"; ?>><?php _e('Red Light'); ?></option>
											<option value="skin-yellow-light" <?php if($liu['theme']=="skin-yellow-light") echo "selected"; ?>><?php _e('Yellow Light'); ?></option>
										</select>
									</div>

									<div class="form-group">
										<label for="sidebar"><?php _e('Sidebar'); ?></label>
										<select class="form-control select2 select2-hidden-accessible" id="sidebar" name="sidebar" style="width: 100%;" tabindex="-1" aria-hidden="true">
											<option value="opened" <?php if($liu['sidebar']=="opened") echo "selected"; ?>><?php _e('Opened'); ?></option>
											<option value="collapsed" <?php if($liu['sidebar']=="collapsed") echo "selected"; ?>><?php _e('Collapsed'); ?></option>
										</select>
									</div>

									<div class="form-group">
										<label for="layout"><?php _e('Layout'); ?></label>
										<select class="form-control select2 select2-hidden-accessible" id="layout" name="layout" style="width: 100%;" tabindex="-1" aria-hidden="true">
											<option value="" <?php if($liu['layout']== "") echo "selected"; ?>><?php _e('Standard'); ?></option>
											<option value="fixed" <?php if($liu['layout']=="fixed") echo "selected"; ?>><?php _e('Fixed'); ?></option>
											<option value="layout-boxed" <?php if($liu['layout']=="layout-boxed") echo "selected"; ?>><?php _e('Boxed'); ?></option>
										</select>
									</div>

									<br><br>
									<div class="form-group">
										<label for="password"><?php _e('Confirm Password'); ?></label>
										<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
										<p class="help-block"><?php _e('Please confirm your current password to make changes to your profile.'); ?></p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> <?php _e('Save'); ?></button>
									</div>
								</div>
								<input type="hidden" name="action" value="editProfile">
								<input type="hidden" name="route" value="profile">
								<input type="hidden" name="id" value="<?php echo $liu['id']; ?>">



							</form><!-- /.form -->
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>







	</section><!-- /.content -->
</aside><!-- /.right-side -->
