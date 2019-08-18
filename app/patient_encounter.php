<!DOCTYPE html>
	<html lang="en">
		<head>
			<style>
				@import url(https://fonts.googleapis.com/css?family=Open+Sans);

				body{
				  background: #f2f2f2;
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
			</style>
	
			<script type="text/javascript">
				
			</script>
		</head>
		
		<body>
			<div id="patientDetails">
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
			<hr>
			<div id="patientWidgets" style="background-color:white; height:100vh">
				<br>
				<div style="display: inline;float: left;width: 35.41667%;margin: 0 1.04167%;">
					<div style="display: inline;float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/diagnoses.png" style="float:left">
							<h4>DIAGNOSES</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 5px;color: #363463;">
							None
						</div>
					</div>
					
					<br>
					
					<div style="display: inline;float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/observations.png" style="float:left">
							<h4>LATEST RECORDS</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 5px;color: #363463;">
							None
						</div>
					</div>
					
					<br>
					
					<div style="display: inline;float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/visits.png" style="float:left">
							<h4>APPOINTMENTS</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 5px;color: #363463;">
							None
						</div>
					</div>
				
				</div>
				
				<div style="display: inline;float: left;width: 35.41667%;margin: 0 1.04167%;">
					<div style="display: inline;float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/visits.png" style="float:left">
							<h4>RECENT VISITS</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 5px;color: #363463;">
							None
						</div>
					</div>
					
					<br>
					
					<div style="display: inline;float: left;width: 97.91667%; margin: 5px;margin-top: 10px;">
						<div style="border-bottom: 6px solid #00463f;">
							<img src="../images/icons/attachments.png" style="float:left">
							<h4>ATTACHMENTS</h4>
						</div>
						<div style="background: #F9F9F9;border: 1px solid #eeeeee;padding: 5px;color: #363463;">
							None
						</div>
					</div>
				
				</div>
				
				<div style="display: inline;float: left;width: 22.91667%;margin: 0 1.04167%;">
					<div style="margin-top: 30px;background: white;border: 1px solid #dddddd;">
						<ul style="background: #363463;color: white;padding: 5px;float: left;clear: left;width: 97.91666%;list-style: none;margin: 0;">
							<h3 style="margin: 0;color: white;border-bottom: 1px solid white;margin-bottom: 5px;font-size:1em;margin-top: 5px;">
								General Actions
							</h3>
							<li style="font-size: 0.9em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:30px">
								<a href="" style="color: white;text-decoration:none"> 
									<img src="../images/icons/medical-history.png" style="width:15px;float:left">
									&nbsp;Cancer Screening Form
								</a>
							</li>
							<li style="font-size: 0.9em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:30px">
								<a href="" style="color: white;text-decoration:none"> 
									<img src="../images/icons/medical-book.png" style="width:15px;float:left">
									&nbsp;Schedule Appointment
								</a>
							</li>
							<li style="font-size: 0.9em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:30px">
								<a href="" style="color: white;text-decoration:none"> 
									<img src="../images/icons/hospital_cross.png" style="width:15px;float:left">
									&nbsp;Mark Patient Deceased
								</a>
							</li>
							<li style="font-size: 0.9em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:30px">
								<a href="" style="color: white;text-decoration:none"> 
									<img src="../images/icons/x-mark.png" style="width:15px;float:left">
									&nbsp;Delete Patient
								</a>
							</li>
							<li style="font-size: 0.9em;float: left;clear: left;width: 97.91666%;margin: 0;    padding: 0;display: list-item;text-align: -webkit-match-parent;color: white;list-style: none;height:30px">
								<a href="" style="color: white;text-decoration:none"> 
									<img src="../images/icons/paperclip.png" style="width:15px;float:left">
									&nbsp;Attachments
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</body>
	</html>