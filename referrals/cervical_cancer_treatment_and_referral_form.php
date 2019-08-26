<?php
	$formStatus = "To:";
	if(isset($_GET['status'])){
		if($_GET['status']=='to'){
			$formStatus = $_GET['status'];
		}
		
		if($_GET['status']=='ti'){
			$formStatus = $_GET['status'];
		}
		
		if($_GET['status']=='new'){
			$formStatus = $_GET['status'];
		}
	}
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<style>
				@import url(https://fonts.googleapis.com/css?family=Open+Sans);

				body{
				  //background: url(https://subtlepatterns.com/patterns/scribble_light.png) #FFF;
				  background: #f2f2f2;
				  font-family: 'Open Sans', sans-serif;
				}

				.search {
				  width: 50%;
				  position: relative;
				  display: flex;
				}

				.searchTerm {
				  width: 100%;
				  border: 3px solid rgba(245, 124, 32, 1);
				  border-right: none;
				  padding: 5px;
				  height: 20px;
				  border-radius: 5px 0 0 5px;
				  outline: none;
				  color: #9DBFAF;
				}

				.searchTerm:focus{
				  color: rgba(245, 124, 32, 1);
				}

				.searchButton {
				  width: 40px;
				  height: 36px;
				  border: 1px solid rgba(245, 124, 32, 1);
				  background: rgba(245, 124, 32, 1);
				  text-align: center;
				  color: #fff;
				  border-radius: 0 5px 5px 0;
				  cursor: pointer;
				  font-size: 20px;
				}

				/*Resize the wrap to see the search bar change!*/
				.wrap{
				  width:98%;
				  padding:10px;
				  background-color:white;
				  display: inline-block; 
				  //height:100vh;
				}
				
				#searchResult th, td{
					border:1px solid #ffc0cb;
				}
				
				#formHeader th, td{
					border:0px;
				}
				
				#searchResult th{
					color:#555;
					text-align:left;
					background-color:#e6e6e6;
				}
				
				#searchResult tr{
					font-size:14px;
					height:40px;
				}
				
				#searchResult tr:nth-child(odd) {background:;}
				
				#patientDetails tr{
					//font-size:12px;
					//color:grey;
				}
				
				#patientDetails td{
					border:0px;
				}
				
				#searchHeader {
					background: #f2f2f2;
					border-bottom:1px solid #ffc0cb;
				}
				
				.checkInput {
					transform: scale(2.5);
					-ms-transform: scale(2.5);
					-webkit-transform: scale(2.5);
					padding: 10px;
				}
				
				.textInput {
					height:20px;
					padding: 10px;
					font-size:17px;
					color: #666666;
					width:20%;
					font-weight:bold;
				}
				
				.selectInput {
					-webkit-appearance: menulist-button;
					height: 50px;
					width:30%;
					font-size:14px;
					color: #666666;
					font-weight:bold;
				}
				
				#searchResult td{
					font-size:17px;
					padding:10px 10px 10px 30px;
				}
				
				.inputLabel {
					padding-left:10px;
					padding-right:10px;
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
				.button:hover, .button:focus {
				  background: rgba(242, 242, 242, 1);
				  border-color: rgba(140, 140, 140, 1);
				  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 1), inset 0 -1px 0 rgba(217, 217, 217, 1), inset 0 0 0 1px rgba(242, 242, 242, 1);
				}
				.button:active {
				  background: rgba(242, 242, 242, 1);
				  box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
				}
				.button .fa {
				  color: rgba(191, 191, 191, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
				}
				.button-blue {
				  background-color: rgba(66, 176, 227, 1);
				  background-image: linear-gradient(to bottom, rgba(66, 176, 227, 1), rgba(43, 169, 227, 1));
				  border: 1px solid rgba(16, 125, 176, 1);
				  box-shadow: inset 0 1px 0 rgba(124, 212, 252, 1), inset 0 -1px 0 rgba(38, 150, 201, 1), inset 0 0 0 1px rgba(0, 0, 0, 1), 0 2px 4px rgba(0, 0, 0, 0.2);
				  color: white;
				  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
				}
				.button-blue:hover, .button-blue:focus {
				  background: rgba(43, 169, 227, 1);
				  border-color: rgba(0, 76, 111, 1);
				  box-shadow: inset 0 1px 0 rgba(124, 212, 252, 1), inset 0 -1px 0 rgba(38, 150, 201, 1), inset 0 0 0 1px rgba(0, 0, 0, 1);
				}
				.button-blue:active {
				  background: rgba(43, 169, 227, 1);
				  box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
				}
				.button-blue .fa {
				  color: rgba(16, 125, 176, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
				}
				.button-green {
				  background-color: rgba(151, 204, 118, 1);
				  background-image: linear-gradient(to bottom, rgba(151, 204, 118, 1), rgba(139, 204, 98, 1));
				  border: 1px solid rgba(95, 153, 58, 1);
				  box-shadow: inset 0 1px 0 rgba(198, 230, 179, 1), inset 0 -1px 0 rgba(121, 179, 86, 1), inset 0 0 0 1px rgba(0, 0, 0, 1), 0 2px 4px rgba(0, 0, 0, 0.2);
				  color: white;
				  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
				}
				.button-green:hover, .button-green:focus {
				  background: rgba(139, 204, 98, 1);
				  border-color: rgba(50, 102, 18, 1);
				  box-shadow: inset 0 1px 0 rgba(198, 230, 179, 1), inset 0 -1px 0 rgba(121, 179, 86, 1), inset 0 0 0 1px rgba(0, 0, 0, 1);
				}
				.button-green:active {
				  background: rgba(139, 204, 98, 1);
				  box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
				}
				.button-green .fa {
				  color: rgba(95, 153, 58, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
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
				.button-orange {
				  background-color: rgba(245, 138, 56, 1);
				  background-image: linear-gradient(to bottom, rgba(245, 138, 56, 1), rgba(245, 124, 32, 1));
				  border: 1px solid rgba(194, 87, 6, 1);
				  box-shadow: inset 0 1px 0 rgba(255, 185, 132, 1), inset 0 -1px 0 rgba(219, 111, 29, 1), inset 0 0 0 1px rgba(0, 0, 0, 1), 0 2px 4px rgba(0, 0, 0, 0.2);
				  color: white;
				  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
				}
				.button-orange:hover, .button-orange:focus {
				  background: rgba(245, 124, 32, 1);
				  border-color: rgba(119, 51, 0, 1);
				  box-shadow: inset 0 1px 0 rgba(255, 185, 132, 1), inset 0 -1px 0 rgba(219, 111, 29, 1), inset 0 0 0 1px rgba(0, 0, 0, 1);
				}
				.button-orange:active {
				  background: rgba(245, 124, 32, 1);
				  box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
				}
				.button-orange .fa {
				  color: rgba(194, 87, 6, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
				}
				.button-red {
				  background-color: rgba(237, 109, 100, 1);
				  background-image: linear-gradient(to bottom, rgba(237, 109, 100, 1), rgba(237, 87, 76, 1));
				  border: 1px solid rgba(186, 51, 41, 1);
				  box-shadow: inset 0 1px 0 rgba(255, 176, 170, 1), inset 0 -1px 0 rgba(212, 77, 68, 1), inset 0 0 0 1px rgba(0, 0, 0, 1), 0 2px 4px rgba(0, 0, 0, 0.2);
				  color: white;
				  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
				}
				.button-red:hover, .button-red:focus {
				  background: rgba(237, 87, 76, 1);
				  border-color: rgba(135, 12, 3, 1);
				  box-shadow: inset 0 1px 0 rgba(255, 176, 170, 1), inset 0 -1px 0 rgba(212, 77, 68, 1), inset 0 0 0 1px rgba(0, 0, 0, 1);
				}
				.button-red:active {
				  background: rgba(237, 87, 76, 1);
				  box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
				}
				.button-red .fa {
				  color: rgba(186, 51, 41, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
				}
				.button-yellow {
				  background-color: rgba(252, 227, 116, 1);
				  background-image: linear-gradient(to bottom, rgba(252, 227, 116, 1), rgba(252, 223, 91, 1));
				  border: 1px solid rgba(201, 174, 52, 1);
				  box-shadow: inset 0 1px 0 rgba(255, 246, 206, 1), inset 0 -1px 0 rgba(227, 200, 82, 1), inset 0 0 0 1px rgba(0, 0, 0, 1), 0 2px 4px rgba(0, 0, 0, 0.2);
				  color: rgba(150, 125, 9, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
				}
				.button-yellow:hover, .button-yellow:focus {
				  background: rgba(252, 223, 91, 1);
				  border-color: rgba(150, 125, 9, 1);
				  box-shadow: inset 0 1px 0 rgba(255, 246, 206, 1), inset 0 -1px 0 rgba(227, 200, 82, 1), inset 0 0 0 1px rgba(0, 0, 0, 1);
				}
				.button-yellow:active {
				  background: rgba(252, 223, 91, 1);
				  box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
				}
				.button-yellow .fa {
				  color: rgba(201, 174, 52, 1);
				  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
				}
				.button .fa {
				  float: left;
				  font-size: 14px;
				  line-height: 20px;
				  margin: -1px 8px 0 -4px;
				  vertical-align: top;
				}

			</style>
	
			<script type="text/javascript">
				
			</script>
		</head>
		
		<body>
			<div id="patientDetails" style="height:105px; border-bottom:1px solid #ffc0cb">
				<table width="100%" border="0" style="border-collapse:collapse;">
					<tr>
						<td style="width:10%;border-right:3px solid #ffc0cb;">
							<a onClick="history.back(-1);" style="cursor:pointer">
								<img src="../images/icons/keyboard-left-arrow-button.png" style="width:10px;">
								<u>Back</u>
							</a>
						</td>
						<td style="width:;border-bottom:1px solid #ffc0cb;background:#666666;color:white">
							Cervical Cancer Treatment and Referral
						</td>
					</tr>
				</table>
				
				<table width="100%" border="0" style="border-collapse:collapse;">
					<tr>
						<td style="width:1%;  white-space:nowrap;">
							<h1 style="font-size: 1.5em; color: #00463f;">
								<span style="font-weight: normal;display: inline-block;">
									Ebby
								</span>
								
								<span style="font-weight: normal;">
									
								</span>
								
								<span style="font-weight: normal;">
									Zedeki
								</span>
							</h1>
						</td>
						<td style="font-size: 14px;">
							&nbsp;
							<span>Female&nbsp;</span>
							<span>
								29 year(s) 
							   (15.Feb.1990)          
							</span>
						</td>
						<td style="width:1%;  white-space:nowrap;">
							<h1 style="font-size: 1.5em; color: #00463f;">
								<span style="font-weight: bold;display: inline-block;">
									<?php
										if($formStatus == 'to'){
											echo 'To:';
										} elseif ($formStatus == 'ti'){
											echo 'From:';
										} elseif ($formStatus == 'new'){
											echo '';
										} else {
											echo $formStatus;
										}
									?>
								</span>
								
								<span style="font-weight: normal;">
									
								</span>
								
								<span style="font-weight: normal;">
									<?php
										if($formStatus == 'to'){
											echo 'Kenyatta National Hospital';
										} elseif ($formStatus == 'ti'){
											echo 'Kapsabet Sub County Hospital';
										} elseif ($formStatus == 'new'){
											echo 'New Treatment and Referral';
										} else {
											echo 'Kenyatta National Hospital';
										}
									?>
								</span>
							</h1>
						</td>
						<td style="text-align:right">
							<em style="color: #888;font-size: 0.9em;border-bottom: 1px solid #DDD;">
								Patient ID
							</em>
							<span style="background: #666666;color: white;letter-spacing: 1px;margin: 2px;padding: 2px 8px;font-size: 0.8em;border-radius: 50px;">
								15288-2019-01-002
							</span>
						</td>
					</tr>
				</table>
			</div>
			
			<div class="wrap">
				
			   <div>
					<table id="searchResult" width="100%" cellspacing="0" style="background:white;border-collapse:collapse;border:1px solid #ffc0cb;">
						
						<tr >
							<td colspan="2" style="padding:2px">
								<table id="formHeader" border="0" style="width:100%; border-collapse:collapse">
									<tr>
										<td style="text-align:left; padding:0px">
											<img src="../images/pages/cc-icon-trans.png" style="width:100px">
										</td>
										<td style="text-align:center;padding:0px">
											<img src="../images/pages/moh_kenya.png" style="width:100px"> <br>
											<span style="font-size:11px">
												Ministry of Public Health and Sanitation <br> Ministry of Medical Services
											</span>
										</td>
										<td style="text-align:right;padding:0px">
											<img src="../images/pages/cc-icon-trans.png" style="width:100px">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<tr>
							<th colspan="2" style="text-align:center;background:#666666;color:white">
								<h2>Cervical Cancer Treatment and Referral Form</h2>
							</th>
						</tr>
						
						<tr>
							<th rowspan="5" style="width:25%;text-align:center">
								<h3>Treatment</h3>
							</th>
							<td>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Screening today, Cryotherapy performed today (Single Visit Approach - SVA)</label>
							</td>
						</tr>
						
						<tr>
							<td>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Screening today, Cryotherapy postponed.</label>
								<label for="" class="inputLabel">Reason</label><input class="textInput" type="text" name="">
							</td>
						</tr>
						<tr>
							<td>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Postponed Cryotherapy done today</label>
							</td>
						</tr>
						<tr>
							<td>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Other Cervical cancer specific treatment performed today (e.g LEEP):</label> <input class="textInput" type="text" name="">
							</td>
						</tr>
						<tr>
							<td>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Treatment for other ailments (specify):</label> <input class="textInput" type="text" name="">
							</td>
						</tr>
						
						<tr>
							<th colspan="2" style="text-align:center;border:0px;background-color:white">
								
							</th>
						</tr>
						
						<tr>
							<th rowspan="5" style="width:25%;text-align:center">
								<h3>Referral Out</h3>
							</th>
							<td>
								<label for="" class="inputLabel">Reffered To:</label> 
								<select class="selectInput">
									<option value="">Select</option>
									<option value="">Kenyatta National Hospital</option>
									<option value="">Moi Teaching and Referral Hospital</option>
								</select>
								<label for="" class="inputLabel">Reasons: (Tick Below)</label> 
							</td>
						</tr>
						
						<tr>
							<td>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Site does not have cryotherapy machine</label>
							</td>
						</tr>
						<tr>
							<td>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Large lesion.</label>
								<label for="" class="inputLabel">Result of Large Lesion Referral:</label>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">LEEP Performed</label>
								<label for="" class="inputLabel">Other</label><input class="textInput" type="text" name="" style="width:10%">
							</td>
						</tr>
						<tr>
							<td>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Suspect Cancer.</label>
								<label for="" class="inputLabel">Result of Suspect Cancer Referral:</label>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Cancer Confirmed</label>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Cancer  not Confirmed</label>
							</td>
						</tr>
						<tr>
							<td>
								<input class="checkInput" type="checkbox" name=""/> <label for="" class="inputLabel">Gynaecological problem</label>
								<label for="" class="inputLabel">(specify):</label>
								<input class="textInput" type="text" name=""/> 
							</td>
						</tr>
						
						<tr>
							<th colspan="2" style="text-align:center;border:0px;background-color:white">
								
							</th>
						</tr>
						
						<tr >
							<th rowspan="1" style="width:25%;text-align:center">
								<h3>Next Appointment</h3>
							</th>
							<td>
								<input class="textInput" type="date" name=""/> 
							</td>
						</tr>
						
						<tr>
							<th colspan="2" style="text-align:center;border:0px;background-color:white">
								
							</th>
						</tr>
						
						<tr >
							<th rowspan="1" style="width:25%;text-align:center">
								<h3>provider</h3>
							</th>
							<td>
								<label for="" class="inputLabel">Provider's Name:</label> 
								<select class="selectInput">
									<option value="">Select</option>
									<option value="">Kevin Oyowe</option>
									<option value="">Clifford Njoroge</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<th colspan="2" style="text-align:center;border:0px;background-color:white">
								
							</th>
						</tr>
						
						<tr >
							<th rowspan="1" style="width:25%;text-align:center">
								<h3></h3>
							</th>
							<td style="text-align:">
								<a class="button button-purple" style="text-decoration:none;width:200px;text-align:center">
								  <i class="fa fa-check"></i>
									Submit Form
								</a>
							</td>
						</tr>
						
					</table>
			   </div>
			<?php
				include "../desktop_menu_sub_scripts.php";
			?>
		</body>
	</html>