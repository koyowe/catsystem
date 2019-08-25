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
								<img src="/../app/images/icons/keyboard-left-arrow-button.png" style="width:10px;">
								<u>Back</u>
							</a>
						</td>
						<td style="width:;border-bottom:1px solid pink;background-color:#363463;color:pink">
							Patient Encounters
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
			
			<div id="patientWidgets" style="background-color:white;">
				<table>
				<tr>
				<td style="width:1%;vertical-align:top">
				<div id="encounterMenu" style="border: 1px solid #dddddd;border-top: ;">
					<ul id="encounterList" style="display: inline-block;border: 1px solid #cccccc;border-left: none;list-style: none;margin-block-start: 0em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;padding-inline-start: 0px;">
						<li style="background: white;color: #363463;border-bottom: 1px solid white;padding: 10px 10px 0px 10px;min-height: 55px;width: 180px;padding-bottom: 5px;position: relative;display: list-item;text-align: -webkit-match-parent;">
							<span style="border-bottom: 1px dotted #888888;display: block;font-size: 0.75em;padding-bottom: 7px;color: #363463;">
								<img src="/../app/images/icons/twenty-to-ten.png" style="width:10px">
								July.8.2019
							</span>
							<span style="line-height: 1.3em;display: block;font-size: 0.95em;padding-top: 7px;color: #363463;list-style: none;">
								Cervical Canncer Screening
							</span>
						</li>
						
						<li style="border-bottom: 1px solid white;padding: 10px 10px 0px 10px;min-height: 55px;width: 180px;padding-bottom: 5px;position: relative;    display: list-item;text-align: -webkit-match-parent;">
							<span style="display: block;font-size: 0.75em;border-bottom: 1px dotted #cccccc;padding-bottom: 7px;">
								<img src="/../app/images/icons/twenty-to-ten.png" style="width:10px">
								May.10.2019
							</span>
							<span style="line-height: 1.3em;display: block;font-size: 0.95em;padding-top: 7px;">
								Cervical Canncer Screening
							</style>
						</li>
						
						<li style="border-bottom: 1px solid white;padding: 10px 10px 0px 10px;min-height: 55px;width: 180px;padding-bottom: 5px;position: relative;    display: list-item;text-align: -webkit-match-parent;">
							<span style="display: block;font-size: 0.75em;border-bottom: 1px dotted #cccccc;padding-bottom: 7px;">
								<img src="/../app/images/icons/twenty-to-ten.png" style="width:10px">
								Feb.28.2019
							</span>
							<span style="line-height: 1.3em;display: block;font-size: 0.95em;padding-top: 7px;">
								Cervical Canncer Screening
							</style>
						</li>
					</ul>
				</div>
				</td>
				
				<td>
					<iframe id="encounterInnerFrame" frameborder="0" scrolling="no" src="patient_encounter_details.php" style="padding-left:10px;overflow:hidden;width:100%" onload='javascript:(function(o){o.style.height=100+o.contentWindow.document.body.scrollHeight+"px";}(this));'>
						
					</iframe>
				</td>
				</tr>
				</table>
			</div>
		</body>
		<?php
			include "../desktop_menu_scripts.php";
		?>
	</html>