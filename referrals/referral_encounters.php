<!DOCTYPE html>
	<html lang="en">
		<head>
			
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
				
				#patientWidgets {
					//padding:10px;
				}
				
				
				#encounterList li {
					//cursor:pointer;
					background: #eee;
					color: #666;
				}
				#encounterList li:hover {
					cursor:pointer;
					background-color: #5b57a6;
					color:white;
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
							Referral Encounters
						</td>
					</tr>
				</table>
				<table width="100%">
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
			
			<div id="patientWidgets" style="background-color:white;padding-right:10px">
				<br><br>
				<table>
				<tr>
				<td style="width:1%;vertical-align:top">
				<div id="encounterMenu" style="border: 1px solid #dddddd;border-top: ;">
					<ul id="encounterList" style="display: inline-block;border: 1px solid #cccccc;border-left: none;list-style: none;margin-block-start: 0em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;padding-inline-start: 0px;">
						<li onClick="menuRefferalTo()" style="background: white;color: #363463;border-bottom: 1px solid white;padding: 10px 10px 0px 10px;min-height: 55px;width: 180px;padding-bottom: 5px;position: relative;display: list-item;text-align: -webkit-match-parent;">
							<span style="border-bottom: 1px dotted #888888;display: block;font-size: 0.75em;padding-bottom: 7px;color: #363463;">
								<img src="../images/icons/twenty-to-ten.png" style="width:10px">
								July.15.2019 <span style="font-weight:bold">[Referral Out]</span>
							</span>
							<span style="line-height: 1.3em;display: block;font-size: 0.95em;padding-top: 7px;color: #363463;list-style: none;">
								Cervical Canncer Treatment and Referral
							</span>
						</li>
						
						<li onClick="menuRefferalFrom()" style="border-bottom: 1px solid white;padding: 10px 10px 0px 10px;min-height: 55px;width: 180px;padding-bottom: 5px;position: relative;    display: list-item;text-align: -webkit-match-parent;">
							<span style="display: block;font-size: 0.75em;border-bottom: 1px dotted #cccccc;padding-bottom: 7px;">
								<img src="../images/icons/twenty-to-ten.png" style="width:10px">
								July.12.2019 <span style="font-weight:bold">[Referral In]</span>
							</span>
							<span style="line-height: 1.3em;display: block;font-size: 0.95em;padding-top: 7px;">
								Cervical Canncer Treatment and Referral
							</span>
						</li>
						
						<span  style="border-bottom: 1px solid white;padding: 10px 10px 0px 10px;min-height: 55px;width: 180px;padding-bottom: 5px;position: relative;    display: list-item;text-align: -webkit-match-parent;">
							<a onClick="menuRefferalNew()" class="button button-orange" style="text-decoration:none;text-align:center">
							  <i class="fa fa-check"></i>
								New Treatment <br> and Referral Form
							</a>
						</span>
					</ul>
				</div>
				</td>
				
				<td style="background:url(../images/pages/recycler_2.gif) center top no-repeat;background-size: 50px 50px;">
					<iframe id="referralEncounterForm" frameborder="0" scrolling="no" src="cervical_cancer_treatment_and_referral_form.php" style="padding-left:10px;overflow:hidden;width:100%" onload='javascript:(function(o){o.style.height=100+o.contentWindow.document.body.scrollHeight+"px";}(this));'>
						
					</iframe>
				</td>
				</tr>
				</table>
			</div>
			<script type="text/javascript">
				function menuRefferalFrom() {
					document.getElementById('referralEncounterForm').src = 'cervical_cancer_treatment_and_referral_form.php?status=ti';
				}
				
				function menuRefferalTo() {
					document.getElementById('referralEncounterForm').src = 'cervical_cancer_treatment_and_referral_form.php?status=to';
				}
				
				function menuRefferalNew() {
					document.getElementById('referralEncounterForm').src = 'cervical_cancer_treatment_and_referral_form.php?status=new';
				}
			</script>
			<?php
				include "../desktop_menu_sub_scripts.php";
			?>
		</body>
	</html>