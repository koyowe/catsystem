<!DOCTYPE html>
	<html lang="en">
		<head>
			<style>
				@import url(https://fonts.googleapis.com/css?family=Open+Sans);

				body{
				  background: #f2f2f2;
				  //background: url(https://subtlepatterns.com/patterns/scribble_light.png) #FFF;
				  font-family: 'Open Sans', sans-serif;
				}

				.search {
				  width: 100%;
				  position: relative;
				  display: flex;
				}

				.searchTerm {
				  width: 100%;
				  border: 3px solid #00B4CC;
				  border-right: none;
				  padding: 5px;
				  height: 20px;
				  border-radius: 5px 0 0 5px;
				  outline: none;
				  color: #9DBFAF;
				}

				.searchTerm:focus{
				  color: #00B4CC;
				}

				.searchButton {
				  width: 40px;
				  height: 36px;
				  border: 1px solid #00B4CC;
				  background: #00B4CC;
				  text-align: center;
				  color: #fff;
				  border-radius: 0 5px 5px 0;
				  cursor: pointer;
				  font-size: 20px;
				}

				/*Resize the wrap to see the search bar change!*/
				.wrap{
				  width: 100%;
				}
				
				#patientDetails {
					background: #f2f2f2;
					border-bottom:1px solid pink;
				}
				
				#patientFormHeader{
					cellspacing:0px;
					cellpadding:0px;
					border-collapse:collapse;
					border-spacing:0px;
				}
				
				#patientFormDetails{
					cellspacing:0px;
					cellpadding:0px;
					border-collapse:collapse;
					border-spacing:0px;
				}
				#patientFormDetails td{
					border:1px solid pink;
					text-align:left;
				}
				
				#inputTable td{
					border:0px;
				}
				
			</style>
			
			<style>
				strong {
				  font-weight: bold;
				}
				.button {
				  background-color: rgba(242, 242, 242, 1);
				  background-image: linear-gradient(to bottom, rgba(242, 242, 242, 1), rgba(242, 242, 242, 1));
				  border: 1px solid rgba(191, 191, 191, 1);
				  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 1), inset 0 -1px 0 rgba(217, 217, 217, 1), inset 0 0 0 1px rgba(242, 242, 242, 1), 0 2px 4px rgba(0, 0, 0, 0.2);
				  color: rgba(140, 140, 140, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
				  border-radius: 3px;
				  cursor: pointer;
				  display: inline-block;
				  font-family: Verdana, sans-serif;
				  font-size: 12px;
				  font-weight: 400;
				  line-height: 20px;
				  padding: 9px 16px 9px;
				  margin: 5px 0 0 5px;
				  transition: all 20ms ease-out;
				  vertical-align: top;
				}
				.button-purple {
				  background-color: rgba(132, 123, 186, 1);
				  background-image: linear-gradient(to bottom, rgba(132, 123, 186, 1), rgba(117, 104, 186, 1));
				  border: 1px solid rgba(73, 62, 135, 1);
				  box-shadow: inset 0 1px 0 rgba(186, 182, 212, 1), inset 0 -1px 0 rgba(101, 90, 161, 1), inset 0 0 0 1px rgba(0, 0, 0, 1), 0 2px 4px rgba(0, 0, 0, 0.2);
				  color: white;
				  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
				}
				.button-purple:hover, .button-purple:focus {
				  background: rgba(117, 104, 186, 1);
				  border-color: rgba(31, 22, 84, 1);
				  box-shadow: inset 0 1px 0 rgba(186, 182, 212, 1), inset 0 -1px 0 rgba(101, 90, 161, 1), inset 0 0 0 1px rgba(0, 0, 0, 1);
				}
				.button-purple:active {
				  background: rgba(117, 104, 186, 1);
				  box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
				}
				.button-purple .fa {
				  color: rgba(73, 62, 135, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
				}
				.button .fa {
				  color: rgba(191, 191, 191, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
				}
				
				#fetchedData {
					border:1px solid pink;padding:8px;
				}
			</style>
			
	
			<script type="text/javascript">
				
			</script>
		</head>
		<?php
			$enrollmentStatus = "followUp";
			if(isset($_GET['enrollmentStatus'])){
				$enrollmentStatus = $_GET['enrollmentStatus'];
			}
		?>
		
		<body>
			<div id="patientDetails">
				<table width="100%" style="border-collapse:collapse;">
					<tr>
						<td style="width:10%;border-right:3px solid pink;">
							<a onClick="history.back(-1);" style="cursor:pointer">
								<img src="../images/icons/keyboard-left-arrow-button.png" style="width:10px;">
								<u>Back</u>
							</a>
						</td>
						<td style="width:;border-bottom:1px solid pink;background-color:#363463;color:pink">
							
							<?php
								if($enrollmentStatus=="new"){
									echo 'Form Entry - Cervical Cancer Screening and Enrollment';
								}else{
									echo 'Form Entry - Cervical Cancer Screening Appointment';
								}
							?>
						</td>
					</tr>
				</table>
				<table width="100%">
					<tr>
						<td style="width:1%;  white-space:nowrap;">
							<h1 style="font-size: 1.5em; color: #00463f;">
								<span style="font-weight: normal;display: inline-block;">
									<?php
										if($enrollmentStatus=="new"){
											echo 'New';
										}else{
											echo 'Patient';
										}
									?>
								</span>
								
								<span style="font-weight: normal;">
									
								</span>
								
								<span style="font-weight: normal;">
									<?php
										if($enrollmentStatus=="new"){
											echo 'Patient';
										}else{
											echo 'Zero';
										}
									?>
							</h1>
						</td>
						<td style="font-size: 14px;">
							&nbsp;
							<?php
								if($enrollmentStatus=="new"){
									echo '';
								}else{
									echo '
										<span>Female&nbsp;</span>
										<span>
											34 year(s) 
										   (15.Jan.1985)          
										</span>
									';
								}
							?>
						</td>
						<td style="text-align:right">
							<em style="color: #888;font-size: 0.9em;border-bottom: 1px solid #DDD;">
								Patient ID
							</em>
							<span style="background: #666666;color: white;letter-spacing: 1px;margin: 2px;padding: 2px 8px;font-size: 0.8em;border-radius: 50px;">
								
								<?php
									if($enrollmentStatus=="new"){
										echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
									}else{
										echo '15288-2019-01-001';
									}
								?>
							</span>
						</td>
					</tr>
				</table>
			</div>
			
			<div id="patientWidgets" style="background-color:white; height:auto; text-align:center; padding:10px" >
				
				<div class="" style="width:100%">
				<div class=" generic-content" style="border:1px solid pink; width:100%;">
				<div>
				<table id="patientFormHeader" style="width:100%;">
					<tbody><tr>
						<td style="width:10%">
							<img src="../images/pages/cc-icon-trans.png" width="100px">
						</td>
						
						<td style="width:80%;text-align:center;">
							<img src="../images/pages/moh_kenya.png" width="100px">
							<br>
							<span style="font-size:11px">
								Ministry of Public Health and Sanitation
								<br>
								Ministry of Medical Services
							</span>
						</td>
						
						<td style="width:10%">
							<img src="../images/pages/cc-icon-trans.png" width="100px">
						</td>
					</tr>
					<tr style="<?php if($enrollmentStatus=="new"){ echo 'background-color:orange'; }else{  echo 'background-color:grey'; } ?>">
						<td style="width:10%">
							<br>
						</td>
						
						<td style="width:80%;text-align:center;">
							<h4 style="color:white">
								<?php
									if($enrollmentStatus=="new"){
										echo 'Cervical Cancer Screening and Enrollment Form';
									}else{
										echo 'Cervical Cancer Screening Appointment Form';
									}
								?>
							</h4>
						</td>
						
						<td style="width:10%">
							<br>
						</td>
					</tr>
				</tbody></table>
				</div>
				<div class="table-responsive">
				<table id="patientFormDetails" width="100%">
					<tbody>
						<tr>
							<th id="ourtimelineRowHdr4" class="col4" rowspan="3"> <span class="mobile-none">Client Information</span></th>
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5" style="text-align:left">
								<div style="padding-top:10px;padding-bottom:10px">
									<span style="background-color:pink; border:1px solid green; padding:5px; border-radius:5px">
										Client Number
									</span>
								</div>
								<div>
									<div id="firstNameDiv" class="form-group" style="float:left; padding-right:35px">
										
										<div class="form-group-field">
										   <div class="birthDateFields" style="text-align:center;color:grey;">
												
												<?php
													if($enrollmentStatus=="new"){
														
														echo '<input type="text" placeholder="Patient ID" style="height:30px;"/>';
													}else{
														echo '<span style="border:1px solid pink;padding:2px 15px">15288-2019-01-001</span>';
													}
												?>
										   </div>
											<label for="FirstName">Client Number</label>
										</div>
									</div>
									<div id="middleNameDiv" class="form-group" style="float:left; padding-right:5px">
										
										<div class="form-group-field">
											<!-- mp_trans_disable_start -->
											<input autocorrect="off" class="form-control hkjs--empty hkjs--pristine hkjs--untouched" id="MiddleName" maxlength="26" name="MiddleName" type="date" value="">
											<!-- mp_trans_disable_end -->
											<label for="MiddleName">Date</label>
										</div>
									</div>
									</div>
							</td>
						</tr>
						
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div style="padding-top:10px;padding-bottom:10px">
									<span style="background-color:pink; border:1px solid green; padding:5px; border-radius:5px">
										Client Name
									</span>
								</div>
								<div class="userPersonalData">
									 
										<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel" style="width:100%">
											<div class="birthDateFields" style="float:left; padding-right:5px">
												<div id="" style="text-align:center;color:grey;">
													<?php
													if($enrollmentStatus=="new"){
														echo '<input type="text" placeholder="First Name" style="height:30px;"/>';
													}else{
														echo '<span style="border:1px solid pink;padding:2px 15px">Patient</span>';
													}
												?>
												</div>
											
												<label for="BirthMonth" id="birthMonthInputLabel">First Name</label>
											</div>
											<div class="birthDateFields" style="float:left; padding-right:5px">
												<div id="" style="text-align:center;color:grey">
													<?php
													if($enrollmentStatus=="new"){
														echo '<input type="text" placeholder="Middle Name" style="height:30px;"/>';
													}else{
														echo '<span style="border:1px solid pink;padding:2px 15px">________</span>';
													}
												?>
												</div>
											
												<label for="BirthMonth" id="birthMonthInputLabel">Middle Name</label>
											</div>
											<div class="birthDateFields" style="float:left; padding-right:5px">
												<div id="" style="text-align:center;color:grey">
													<?php
													if($enrollmentStatus=="new"){
														echo '<input type="text" placeholder="Last Name" style="height:30px;"/>';
													}else{
														echo '<span style="border:1px solid pink;padding:2px 15px">Zero</span>';
													}
												?>
												</div>
											
												<label for="BirthMonth" id="birthMonthInputLabel">Last Name</label>
											</div>
											<div class="birthDateFields" style="float:left; padding-right:5px">
												<div class="birthDateFields" id="" style="text-align:center; color:grey">
													<?php
														if($enrollmentStatus=="new"){
															echo '<input id="BirthDay" type="date" style="height:30px;"/>';
														}else{
															echo '34';
														}
													?>
												</div>
												</div>
												<label for="BirthDay" id="birthDayInputLabel" style="text">Birthdate/Age</label>
											</div>
											<div style="clear:both;height:10px"></div>
											<div class="birthDateFields" style="float:left; padding-right:5px">
												<div style="text-align:center; color:grey">
													<?php
														if($enrollmentStatus=="new"){
															echo '<input type="text" placeholder="07.." style="height:30px;"/>';
														}else{
															echo '0728765507';
														}
													?>
												</div>
												<label for="BirthYear" id="birthYearInputLabel">Phone No.</label>
											</div>
											
										</div>
							</div></td>		
						</tr>
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div style="padding-top:10px;padding-bottom:10px">
									<span style="background-color:pink; border:1px solid green; padding:5px; border-radius:5px">
										Service Area
									</span>
								</div>
									<div>
									<div id="birthDayDiv" class="form-group">
									 
										<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
											<div class="birthDateFields" style="float:left; padding-right:5px">
												<!-- mp_trans_disable_start -->
												
												<table id="inputTable">
													<tbody><tr>
														<td style="vertical-align:middle"> 
															<input style="height:30px;width:30px" type="checkbox" value="">
														</td>
														<td style="vertical-align:middle">MCH/FP</td>
													</tr>
												</tbody></table>
											</div>
											<div class="birthDateFields" style="float:left; padding-right:5px">
												<!-- mp_trans_disable_start -->
												
												<table id="inputTable">
													<tbody><tr>
														<td style="vertical-align:middle"> 
															<input style="height:30px;width:30px" type="checkbox" value="">
														</td>
														<td style="vertical-align:middle">GOPC</td>
													</tr>
												</tbody></table>
											</div>
											<div class="birthDateFields" style="float:left; padding-right:5px">
												<!-- mp_trans_disable_start -->
												
												<table id="inputTable">
													<tbody><tr>
														<td style="vertical-align:middle"> 
															<input style="height:30px;width:30px" type="checkbox" value="">
														</td>
														<td style="vertical-align:middle">Outreach</td>
													</tr>
												</tbody></table>
											</div>
											 <div class="birthDateFields" style="float:left; padding-right:5px">
												<!-- mp_trans_disable_start -->
												
												<table id="inputTable">
													<tbody><tr>
														<td style="vertical-align:middle"> 
															<input style="height:30px;width:30px" type="checkbox" value="">
														</td>
														<td style="vertical-align:middle">Other</td>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
									</div>
							</td>
						</tr>
						
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<th id="ourtimelineRowHdr3" class="col4" rowspan="4"> <span class="mobile-none">Visit Type</span></th>
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div style="padding-top:10px;padding-bottom:10px">
									<span style="background-color:pink; border:1px solid green; padding:5px; border-radius:5px">
										Visit Type
									</span>
								</div> ( pick only one visit type and mark with an X in the box)
								<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<!-- mp_trans_disable_start -->
										
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Screening → </td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Innitial</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Routine screening</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">1 Year Follow-Up Visit Post treatment</td>
											</tr>
										</tbody></table>
									</div>
									
								</div>
							</td>
						</tr>
						 <tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<!-- mp_trans_disable_start -->
										
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Postponed Cryotherapy Visit </td>
											</tr>
										</tbody></table>
									</div>
								</div>
							</td>
						</tr>
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
						   
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">           
								
								<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<!-- mp_trans_disable_start -->
										
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Post-Treatment Complication  - Related to: </td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Cryotherapy</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">LEEP</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Other (specify)</td>
											</tr>
										</tbody></table>
									</div>
									
								</div>
							</td>
						</tr>
						 <tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<!-- mp_trans_disable_start -->
										
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Other Cervical Cancer related treatment (Advanced Care Sites only), Specify</td>
											</tr>
										</tbody></table>
									</div>
								</div>
							</td>
						</tr>
						
						 <tr class="mobile-none" style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<th id="ourtimelineRowHdr3" class="col4" rowspan="">Cervical Map</th>
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								
								<div style="padding-top:10px;padding-bottom:10px">
									<span style="background-color:pink; border:1px solid green; padding:5px; border-radius:5px">
										Cervical Map
									</span>
								</div>
								
								<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
									 <div class="birthDateFields" style="padding-right:5px">
										<!-- mp_trans_disable_start -->
										
										<table id="inputTable" width="100%">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<img src="../images/pages/cervical_map_drawing.png">
												</td>
												<td style="vertical-align:middle;text-align:right">
													<img src="../images/pages/cervical_map_illustration.png">
												</td>
											</tr>
										</tbody></table>
									</div>
								</div>
							</td>
						</tr>
						
						 <tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<th id="ourtimelineRowHdr3" class="col4" rowspan="4"><span class="mobile-none">Screening Method and Result</span></th>
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div style="padding-top:10px;padding-bottom:10px">
									<span style="background-color:pink; border:1px solid green; padding:5px; border-radius:5px">
										Screening Method
									</span>
								</div>
								<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<!-- mp_trans_disable_start -->
										
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle"> VIA → </td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">VIA Negative</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">VIA Positive</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Suspicious for Cancer</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Other (specify):</td>
											</tr>
										</tbody></table>
									</div>
									
								</div>
							</td>
						</tr>
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<!-- mp_trans_disable_start -->
										
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle"> VILI → </td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">VILI Negative</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">VILI Positive</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Suspicious for Cancer</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Other (specify):</td>
											</tr>
										</tbody></table>
									</div>
									
								</div>
							</td>
						</tr>
						
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<!-- mp_trans_disable_start -->
										
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Pap smear → </td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Low Grade Lesion</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">High Grade Lesion</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Invasive Cancer</td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Other (specify):</td>
											</tr>
										</tbody></table>
									</div>
									
								</div>
							</td>
						</tr>
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div id="birthDateContainer" class="required" role="group" aria-labelledby="birthDateLabel">
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<!-- mp_trans_disable_start -->
										
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle"> HPV Test → </td>
											</tr>
										</tbody></table>
									</div>
									
									 <div class="birthDateFields" style="float:left; padding-right:5px">
										<table id="inputTable">
											<tbody><tr>
												<td style="vertical-align:middle"> 
													<input style="height:30px;width:30px" type="checkbox" value="">
												</td>
												<td style="vertical-align:middle">Negative Positive</td>
											</tr>
										</tbody></table>
									</div>
									
								</div>
							</td>
						</tr>
						
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<th id="ourtimelineRowHdr3" class="col4" rowspan=""><span class="mobile-none">Next Appointment</span></th>
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								
								<div style="padding-top:10px;padding-bottom:10px">
									<span style="background-color:pink; border:1px solid green; padding:5px; border-radius:5px">
										Next Appointment
									</span>
								</div>
								 <div class="form-group-field">
									<input style="" type="date">
									
								</div>
							</td>
						</tr>
						
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<th id="ourtimelineRowHdr3" class="col4" rowspan=""><span class="mobile-none">Provider</span></th>
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr3" class="col5">
								<div style="padding-top:10px;padding-bottom:10px">
									<span style="background-color:pink; border:1px solid green; padding:5px; border-radius:5px">
										Provider
									</span>
								</div>
								<div>
									<div id="firstNameDiv" class="form-group" style="float:left; padding-right:5px">
										
										<div class="form-group-field">
											<!-- mp_trans_disable_start -->
											<input autocorrect="off" class="form-control hkjs--empty hkjs--pristine hkjs--untouched" id="FirstName" maxlength="26" name="FirstName" required="required" type="text" value="">
											<!-- mp_trans_disable_end -->
											<label for="FirstName">Provider's Name</label>
										</div>
									</div>
									<div id="middleNameDiv" class="form-group" style="float:left; padding-right:5px">
										
										<div class="form-group-field">
											<!-- mp_trans_disable_start -->
											<input autocorrect="off" class="form-control hkjs--empty hkjs--pristine hkjs--untouched" id="MiddleName" maxlength="26" name="MiddleName" type="text" value="">
											<!-- mp_trans_disable_end -->
											<label for="MiddleName">Cadre</label>
										</div>
									</div>
									<div class="birthDateFields" style="float:left; padding-right:5px">
										<div class="birthDateFields" style="float:left; padding-right:5px">
												<div style="text-align:center;color:grey"><br></div>
												<div style="height:1px"></div>
												_____________________<br>
												<label for="BirthMonth" id="birthMonthInputLabel">Signature</label>
											</div>
									</div>
									</div>
							</td>
						</tr>
						
						
						<tr style="border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;">
							<th id="ourtimelineRowHdr4" class="col4"></th>
							<td headers="ourtimelineColHdr2 ourtimelineRowHdr4" class="col5" style="text-align:center">
								<br>
								 <a class="button button-purple" style="text-decoration:none;width:200px">
									  <i class="fa fa-check"></i>
										Submit Form
									</a>
									<br><br>
							</td>
						</tr>
					</tbody>
				</table>
				</div>

				</div>
				</div>
				
				
				<?php
					include "../desktop_menu_sub_scripts.php";
				?>
						
				
			</div>
		</body>
	</html>