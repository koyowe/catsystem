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
				  width:91%;
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
				
				#numberScreened::before {
				  content: "";
				  transform: scaley(0.7);
				}
				#numberScreened::after {
				  content: "No. screened";
				}
				
				#numberPositive::before {
				  content: "";
				  transform: scaley(0.7);
				}
				#numberPositive::after {
				  content: "No. positive";
				}
				
				#numberSuspicious::before {
				  content: "";
				  transform: scaley(0.7);
				}
				#numberSuspicious::after {
				  content: "No. suscpicious";
				}
				
				#numberTreated::before {
				  content: "";
				  transform: scaley(0.7);
				}
				#numberTreated::after {
				  content: "No. treated";
				}
				
				#numberReferred::before {
				  content: "";
				  transform: scaley(0.7);
				}
				#numberReferred::after {
				  content: "No. referred";
				}
				
				h2::before, h2::after {
					display: block;
					text-transform: uppercase;
					font-size: 11px;
					letter-spacing: 1.125px;
					//text-shadow: 2.25px 0 2.25px #000000, 0 2.25px 2.25px #000000, -2.25px 0 2.25px #000000, 0 -2.25px 2.25px #000000, 1.125px 0 1.125px #000000, 0 1.125px 1.125px #000000, -1.125px 0 1.125px #000000, 0 -1.125px 1.125px #000000;
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
			
			<script type="text/javascript" src="../js/jquery.min.js.download"></script>
			<script type="text/javascript" src="../js/jquery-ui.min.js.download"></script>
			
			<style>
				 #loading-bg {
				  width: 100%;
				  height: 6vh;
				  position: absolute;
				  top: 0;
				  left: 0;
				  background-color: rgba(0, 0, 0, 0.4);
				  z-index: 500;
				}
				
				#loading-image {
					background-color:pink; border-radius:50%;
				  position: fixed;
				  top: 50%;
				  left: 51.5%;
				  width: 100px;
				  margin: -75px;
				  z-index: 510;
				}
			</style>
	
			<script type="text/javascript">
				$(function() {
				  $('#loading-bg').hide();
				  $('#loading-image').hide();

				  $(window).on('beforeunload', function() {
					$('#loading-bg').show();
					$('#loading-image').show();
				  });
				});
			</script>
		</head>
		
		<body>
			
			<div id="searchHeader">
				<h1 style="font-size: 1.4em; color: #00463f;">
					<span style="font-weight: normal;display: inline-block;">
						Facility Dashboard
					</span>
				</h1>
			</div>
			
			<div style="background-color:white; padding:5px;">
			<div class="wrap" style="font-family: Lato, sans-serif;color: #ffffff;background-color:#01426A;padding: 36px;">
			    <div style="line-height: 1;font-size: 100%;font: inherit;vertical-align: baseline;">
					<div style="line-height: 1.414;border: 1px solid #ffffff;display: flex;flex-wrap: wrap;background-image: linear-gradient(-45deg, #ffffff 0, transparent 1px);background-size: 6px 6px;background-position: center center;">
						<section style="padding: 18px;box-sizing: border-box;display: block;align-items: stretch;border-top: 1px solid #ffffff;border-left: 1px solid #ffffff;margin-left: -1px;margin-top: -1px;flex-grow: 1;">
							<h2 id="numberScreened" style="text-align: center;font-weight: bold;font-size: 36px;vertical-align: baseline;">
								126
							</h2>
						</section>
						
						<section style="padding: 18px;box-sizing: border-box;display: block;align-items: stretch;border-top: 1px solid #ffffff;border-left: 1px solid #ffffff;margin-left: -1px;margin-top: -1px;flex-grow: 1;">
							<h2 id="numberPositive" style="text-align: center;font-weight: bold;font-size: 36px;vertical-align: baseline;">
								46
							</h2>
						</section>
						
						<section style="padding: 18px;box-sizing: border-box;display: block;align-items: stretch;border-top: 1px solid #ffffff;border-left: 1px solid #ffffff;margin-left: -1px;margin-top: -1px;flex-grow: 1;">
							<h2 id="numberSuspicious" style="text-align: center;font-weight: bold;font-size: 36px;vertical-align: baseline;">
								21
							</h2>
						</section>
						
						<section style="padding: 18px;box-sizing: border-box;display: block;align-items: stretch;border-top: 1px solid #ffffff;border-left: 1px solid #ffffff;margin-left: -1px;margin-top: -1px;flex-grow: 1;">
							<h2 id="numberTreated" style="text-align: center;font-weight: bold;font-size: 36px;vertical-align: baseline;">
								34
							</h2>
						</section>
						
						<section style="padding: 18px;box-sizing: border-box;display: block;align-items: stretch;border-top: 1px solid #ffffff;border-left: 1px solid #ffffff;margin-left: -1px;margin-top: -1px;flex-grow: 1;">
							<h2 id="numberReferred" style="text-align: center;font-weight: bold;font-size: 36px;vertical-align: baseline;">
								33
							</h2>
						</section>
					</div>
				</div>
			</div>
			
			<a class="button button-purple" style="text-decoration:none" onclick="window.location.href = '';">
			  View Project Dashboard
			</a>
			</div>
		</body>
	</html>