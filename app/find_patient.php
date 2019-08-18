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
			<h2 style="font-size: 1.3em; color: #009384;">
				Find Patient Record
			</h2>
			<div class="wrap">
			   <div class="search">
				  <input type="text" class="searchTerm" placeholder="Search by ID or Name">
				  <button type="submit" class="searchButton">
					<i class="fa fa-search"></i>
				 </button>
			   </div>
			   
			   <br>
			   
			   <div>
					<table id="searchResult" width="100%" border="1" cellspacing="0" bordercolor="pink">
						<tr>
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
						
						<tr onclick="window.location.href = 'patient_encounter.php';">
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
								15288-2019-01-002
							</td>
							<td>
								Ebby C. Dee
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
			</div>
		</body>
	</html>