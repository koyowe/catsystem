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
				  //background: url(https://subtlepatterns.com/patterns/scribble_light.png) #FFF;
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
				  width:98%;
				  padding:10px;
				  background-color:white;
				  display: inline-block; 
				  //height:100vh;
				}
				
				#searchResult th, td{
					border:1px solid pink;
				}
				#searchResult th{
					color:#555;
					text-align:left;
					background-color:#e6e6e6;
				}
				
				#searchResult tr{
					font-size:14px;
				}
				
				#searchResult tr:nth-child(odd) {background: #fffdf7;}
				
				#searchNavigation tr{
					font-size:12px;
					color:grey;
				}
				
				#searchNavigation td{
					border:0px;
				}
				
				#searchResult tr:hover{
					background: #007fff;
					cursor: pointer;
					color: white;
				}
				
				#searchHeader {
					background: #f2f2f2;
					border-bottom:1px solid pink;
				}
			</style>
	
			<script type="text/javascript">
				//parent.iframeLoaded();
			</script>
			
			<script>
				function searchFunction() {
				  var input, filter, table, tr, td, i, txtValue;
				  input = document.getElementById("searchInput");
				  filter = input.value.toUpperCase();
				  table = document.getElementById("searchResult");
				  tr = table.getElementsByTagName("tr");
				  
				
				  for (i = 0; i < tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[2];
					if (td) {
					  txtValue = td.textContent || td.innerText;
					  if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
						tr[i].setAttribute("class", "complete");
					  } else {
						tr[i].style.display = "none";
						tr[i].setAttribute("class", "empty");
					  }
					}
				  }
				  
				  var rows = document.getElementById("searchResult").getElementsByClassName("complete").length;
				  //alert("rows="+rows);
				  if(rows < 1){
					document.getElementById("enrollmentDiv").style.display="block";
				  }else{
					document.getElementById("enrollmentDiv").style.display="none";
				  }
				}
				
				
				
				
			</script>
		</head>
		
		<body>
			
			<div id="searchHeader">
				<h1 style="font-size: 1.4em; color: #00463f;">
					<span style="font-weight: normal;display: inline-block;">
						Find Patient Record
					</span>
				</h1>
				<div class="search">
					<input id="searchInput" type="text" class="searchTerm" placeholder="Search by ID or Name" onkeyup="searchFunction()">
					<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					</button>
				</div>
				<br>
			</div>
			
			<div class="wrap">
				
			   <div>
					<table id="searchResult" width="100%" cellspacing="0" style="background:white;border-collapse:collapse;">
					
						<tr>
							<th>
								CATS ID
							</th>
							<th>
								Patient ID
							</th>
							<th>
								Name
							</th>
							<th>
								Gender
							</th>
							<th>
								Age
							</th>
							<th>
								Birthdate
							</th>
						</tr>
						
						<tr onclick="<?php $nextFrameHeight=300;?>window.location.href = 'patient_dashboard.php';">
							<td>
								CATS001
							</td>
							<td>
								15288-2019-01-001
							</td>
							<td>
								Patient Zero
							</td>
							<td>
								F
							</td>
							<td>
								34
							</td>
							<td>
								Jan 15 1985
							</td>
						</tr>
						
						
						
						<tr>
							<td>
								CATS002
							</td>
							<td>
								15288-2019-01-002
							</td>
							<td>
								Ebby Zedeki
							</td>
							<td>
								F
							</td>
							<td>
								29
							</td>
							<td>
								Feb 15 1990
							</td>
						</tr>
						
						<tr>
							<td>
								CATS003
							</td>
							<td>
								15288-2019-01-003
							</td>
							<td>
								Effy G.H
							</td>
							<td>
								F
							</td>
							<td>
								42
							</td>
							<td>
								Mar 15 1977
							</td>
						</tr>
						
						<tr>
							<td>
								CATS004
							</td>
							<td>
								15288-2019-01-004
							</td>
							<td>
								Emma N. Opiyo
							</td>
							<td>
								F
							</td>
							<td>
								36
							</td>
							<td>
								Apr 15 1983
							</td>
						</tr>
						
						<tr>
							<td>
								CATS005
							</td>
							<td>
								15288-2019-01-005
							</td>
							<td>
								Kiu Aresti
							</td>
							<td>
								F
							</td>
							<td>
								32
							</td>
							<td>
								May 15 1987
							</td>
						</tr>
						
						<tr>
							<td>
								CATS006
							</td>
							<td>
								15288-2019-01-006
							</td>
							<td>
								Eksi Wai Zedi
							</td>
							<td>
								F
							</td>
							<td>
								24
							</td>
							<td>
								Jun 15 1995
							</td>
						</tr>
						
					</table>
			   </div>
			   
			   <div>
					<table id="searchNavigation" width="100%">
						<tr>
							<td style="width:50%">
								Showing 1 to 6 of 6 entries
							</td>
							
							<td style="width:50%;text-align:right">
								First | Previous | Next | Last
							</td>
						</tr>
					</table>
			   </div>
			   
			   <div id="enrollmentDiv" style="display:none">
					Patient not found. Would you like to enroll a new Patient?
					<br>
					<a class="button button-purple" style="text-decoration:none" onclick="window.location.href = 'cervical_cancer_screening_and_enrollment_form.php?enrollmentStatus=new';">
					  New Patient
					</a>
					
					<a class="button button-orange" style="text-decoration:none" onclick="window.location.href = 'cervical_cancer_screening_and_enrollment_form.php?enrollmentStatus=new';">
					  Transfer In
					</a>
				</div>
			</div>
			
		</body>
		<?php
			include "../desktop_menu_scripts.php";
		?>
	</html>