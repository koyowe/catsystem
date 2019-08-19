<!DOCTYPE html>

<html lang="en">
	<head>
		<?php
			include "../shared/inner_header.php";
		?>
	</head>

	<body class="default" style="overflow: auto;">
		<div id="loading-bg"><span style="background-color:pink">Loading..</span></div>
		<img id="loading-image" src="../images/pages/recycler_2.gif" alt="Loading ...">
    
		<div id="hf-h" class="hf hf-h signed-in-false" no-print-web-checkin="">
			<?php
				include "../shared/inner_page_header.php";
			?>
		</div>
		
		<main id="content" role="main" tabindex="-1">
			<div class="container-hero" style="">
				<div id="homeMobile" class="mobile-block" style="width:100%; text-align:right">
					<?php
						include "home_mobile.php";
					?>
				</div>
		
				<div class="jumbotron desktop-hero sc-module homepage-heroimage _8d16763c-dbf5-4d24-8a94-3abf4cce76ae" style="background-color:white; ">
					<div class="homepage-heroimage-container">
						<div class="homepage-heroimage--desktop homepage-heroimage--tablet"></div>
					</div>
					<div class="geo-city white visible-lg visible-md js-hide"></div>
					<div class="container" style="width:90%">
						<div class="row" style="min-height:100vh">
						
							<div id="homeDashboard" class="col-sm-7 col-md-6" style="width:30%">
								<h2 class="homepage-heroimage--welcome">Welcome, Kevin</h2>
								<div id="homelet">
									<link rel="stylesheet" type="text/css" href="../css/homelet.css">
									<div class="homelet" id="formletTabPanel" style="height:450px; width:100%">
										<?php
											include "home_dashboard.php";
										?>
									</div>
									<script src="../js/homelet.scripts.min.js.download" type="text/javascript"></script>
								</div>
							</div>
							
							<div id="homeDesktop" class="col-sm-5 col-md-6" style="width:70%;">
								<?php
									include "home_desktop.php";
								?>
							</div>
							
						</div>
					</div> 
				</div>
            </div>
			<br/><br/>
		</main>
		
		<footer role="contentinfo" style="clear: both; position: relative; height: 40px; margin-top: -40px;">
		<?php
			include "../shared/inner_footer.php";
		?>
		</footer>

</body></html>
