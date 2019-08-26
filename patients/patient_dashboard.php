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
				  width:%;
				  padding:10px;
				  background-color:white;
				  display: inline-block; 
				  //height:100vh;
				}
				
				#searchResult th{
					color:#555;
					text-align:left;
					background-color:#e6e6e6;
				}
				
				#searchResult tr{
					font-size:14px;
				}
				
				#searchNavigation tr{
					font-size:12px;
					color:grey;
				}
				
				#searchResult tr:hover{
					background: #007fff;
					cursor: pointer;
					color: white;
				}
				
				#patientDetails {
					background: #f2f2f2;
					border-bottom:1px solid pink;
				}
				
				#quickActions li:hover {
					border-bottom:1px solid pink;
					background-color: rgba(132, 123, 186, 1);
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
							Patient Dashboard
						</td>
					</tr>
				</table>
				
				<table width="100%">
					<tr>
						<td style="width:1%;  white-space:nowrap;">
							<h1 style="font-size: 1.5em; color: #00463f;">
								<span style="font-weight: normal;display: inline-block;">
									Patient
								</span>
								
								<span style="font-weight: normal;">
									
								</span>
								
								<span style="font-weight: normal;">
									Zero
								</span>
							</h1>
						</td>
						<td style="font-size: 14px;">
							&nbsp;
							<span>Female&nbsp;</span>
							<span>
								34 year(s) 
							   (15.Jan.1985)          
							</span>
						</td>
						<td style="text-align:right">
							<em style="color: #888;font-size: 0.9em;border-bottom: 1px solid #DDD;">
								Patient ID
							</em>
							<span style="background: #666666;color: white;letter-spacing: 1px;margin: 2px;padding: 2px 8px;font-size: 0.8em;border-radius: 50px;">
								15288-2019-01-001
							</span>
						</td>
					</tr>
				</table>
			</div>
			
			<div id="wrap" class="wrap">
				<br>
				<div style="float: left;width: 35.41667%;margin: 0 1.04167%;">
					<div style="float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/diagnoses.png" style="float:left">
							<h4>DIAGNOSES</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 2px;color: #363463;">
							<ul style="list-style: none;margin-block-start: 0px;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;padding-inline-start: 0px;">
								<li style="line-height: 1.1em;border-bottom: 1px solid #eeeeee;margin-bottom: 5px;display: list-item;text-align: -webkit-match-parent;">
									<a onClick="window.location.href='patient_encounters.php';" style="color: #007fff;text-decoration: none;cursor: pointer;">
										July.28.2019 VIA Positive
									</a>
								</li>
								<li style="line-height: 1.1em;border-bottom: 1px solid #eeeeee;margin-bottom: 5px;display: list-item;text-align: -webkit-match-parent;">
									<a onClick="window.location.href='patient_encounters.php';" style="color: #007fff;text-decoration: none;cursor: pointer;">
										May.10.2019 Suspicious for Cancer
									</a>
								</li>
								<li style="line-height: 1.1em;border-bottom: 1px solid #eeeeee;margin-bottom: 5px;display: list-item;text-align: -webkit-match-parent;">
									<a onClick="window.location.href='patient_encounters.php';" style="color: #007fff;text-decoration: none;cursor: pointer;">
										Feb.28.2019 HIV Positive
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<br>
					
					<div style="float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/observations.png" style="float:left">
							<h4>LATEST RECORDS</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 5px;color: #363463;">
							None
						</div>
					</div>
					
					<br>
					
					<div style="float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/visits.png" style="float:left">
							<h4>APPOINTMENTS</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 5px;color: #363463;">
							<ul style="list-style: none;margin-block-start: 1px;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;padding-inline-start: 4px;">
								<li style="line-height: 1.1em;border-bottom: 1px solid #eeeeee;margin-bottom: 5px;display: list-item;text-align: -webkit-match-parent;">
									<a onClick="window.location.href='patient_encounters.php';" style="color: #007fff;text-decoration: none;cursor: pointer;">
										Oct.1	.2019
									</a>
								</li>
							</ul>
						</div>
					</div>
				
				</div>
				
				<div style="float: left;width: 35.41667%;margin: 0 1.04167%;">
					<div style="float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/visits.png" style="float:left">
							<h4>RECENT VISITS</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 5px;color: #363463;">
							<ul style="list-style: none;margin-block-start: 1px;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;padding-inline-start: 4px;">
								<li style="line-height: 1.1em;border-bottom: 1px solid #eeeeee;margin-bottom: 5px;display: list-item;text-align: -webkit-match-parent;">
									<a onClick="window.location.href='patient_encounters.php';" style="color: #007fff;text-decoration: none;cursor: pointer;">
										July.8.2019
									</a>
								</li>
								<li style="line-height: 1.1em;border-bottom: 1px solid #eeeeee;margin-bottom: 5px;display: list-item;text-align: -webkit-match-parent;">
									<a href="" style="color: #007fff;text-decoration: none;cursor: pointer;">
										May.10.2019
									</a>
								</li>
								<li style="line-height: 1.1em;border-bottom: 1px solid #eeeeee;margin-bottom: 5px;display: list-item;text-align: -webkit-match-parent;">
									<a href="" style="color: #007fff;text-decoration: none;cursor: pointer;">
										Feb.28.2019
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<br>
					
					<div style="float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/attachments.png" style="float:left">
							<h4>COLPOSCOPES</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 5px;color: #363463;">
							<div style="cursor: pointer;position: relative;height: 110px;">
								<img src="../images/icons/safety.png" style="height:90px;float:left">
								<figcaption style="margin-left:10px;float:left;font-size:11px; width:100px">You will need special clearence to access this information</figcaption>
								<a href="" class="button " style="text-decoration:none">
								  View attachments
								</a>
								<br/>
								<a style="margin-left:20px" href="">Request Access</a>
							</div>
						</div>
					</div>
				
				</div>
				
				<div style="float: left;width: 22.91667%;margin: 0 1.04167%;">
					<div style="margin-top: 30px;background: white;border: 1px solid #dddddd;">
						<ul id="quickActions" style="background: #363463;color: white;padding: 5px;float: left;clear: left;width: 97.91666%;list-style: none;margin: 0;">
							<h3 style="margin: 0;color: white;border-bottom: 1px solid white;margin-bottom: 5px;font-size:1em;margin-top: 5px;">
								Quick Actions
							</h3>
							<li style="font-size: 0.8em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:auto">
								<a style="color: white;text-decoration:none;cursor:pointer" onClick="window.location.href='cervical_cancer_screening_and_enrollment_form.php';"> 
									<table>
										<tr>
											<td style="width:1%;vertical-align:top">
												<img src="../images/icons/medical-history.png" style="width:20px;float:left">
											</td>
											<td style="vertical-align:top">
												Cervical Cancer Screening Appointment
											</td>
										</tr>
									</table>
								</a>
							</li>
							<li style="font-size: 0.8em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:auto">
								<a style="color: white;text-decoration:none;cursor:pointer" onClick="window.location.href='/referrals/cervical_cancer_treatment_and_referral_form.php?status=new';"> 
									<table>
										<tr>
											<td style="width:1%;vertical-align:top">
												<img src="../images/icons/medical-history.png" style="width:20px;float:left">
											</td>
											<td style="vertical-align:top">
												Cervical Cancer Treatment and Referral
											</td>
										</tr>
									</table>
								</a>
							</li>
							<li style="font-size: 0.8em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:auto">
								<a style="color: white;text-decoration:none;cursor:pointer" onClick="alert('we are working on it');"> 
									<table>
										<tr>
											<td style="width:1%;vertical-align:top">
												<img src="../images/icons/medical-history.png" style="width:20px;float:left">
											</td>
											<td style="vertical-align:top">
												Post-treatment follow-up
											</td>
										</tr>
									</table>
								</a>
							</li>
							<li style="font-size: 0.8em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:auto">
								<a href="" style="color: white;text-decoration:none"> 
									<table>
										<tr>
											<td style="width:1%;vertical-align:top">
												<img src="../images/icons/appointment.png" style="width:20px;float:left">
											</td>
											<td style="vertical-align:top">
												Schedule Appointment
											</td>
										</tr>
									</table>
								</a>
							</li>
							<li style="font-size: 0.8em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:auto">
								<a href="" style="color: white;text-decoration:none"> 
									<table>
										<tr>
											<td style="width:1%;vertical-align:top">
												<img src="../images/icons/send.png" style="width:20px;float:left">
											</td>
											<td style="vertical-align:top">
												Send Text Message
											</td>
										</tr>
									</table>
								</a>
							</li>
							<li style="font-size: 0.8em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:auto">
								<a href="" style="color: white;text-decoration:none"> 
									<table>
										<tr>
											<td style="width:1%;vertical-align:top">
												<img src="../images/icons/hospital_cross.png" style="width:20px;float:left">
											</td>
											<td style="vertical-align:top">
												Mark Patient Deceased
											</td>
										</tr>
									</table>
								</a>
							</li>
							<li style="font-size: 0.8em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:auto">
								<a href="" style="color: white;text-decoration:none"> 
									<table>
										<tr>
											<td style="width:1%;vertical-align:top">
												<img src="../images/icons/delete.png" style="width:20px;float:left">
											</td>
											<td style="vertical-align:top">
												Delete Patient
											</td>
										</tr>
									</table>
								</a>
							</li>
							<li style="font-size: 0.8em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:auto">
								<a href="" style="color: white;text-decoration:none"> 
									<table>
										<tr>
											<td style="width:1%;vertical-align:top">
												<img src="../images/icons/paperclip.png" style="width:20px;float:left">
											</td>
											<td style="vertical-align:top">
												Attachments
											</td>
										</tr>
									</table>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php
				include "../desktop_menu_sub_scripts.php";
			?>
		</body>
	</html>