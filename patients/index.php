<html lang="en">
	<head>
		<?php
			include($_SERVER['DOCUMENT_ROOT'].'/shared/inner_header.php');
		?>
	</head>
	<body>
<div class="jumbotron desktop-hero sc-module homepage-heroimage _8d16763c-dbf5-4d24-8a94-3abf4cce76ae" style="background-color:white; ">
	
	<script src="../js/homelet.scripts.min.js.download" type="text/javascript"></script>
	<br>
	<div class="container" style="width:90%">
		
		<div class="row" style="min-height:100px">
			
			<div id="homeDesktop" class="col-sm-5 col-md-6" style="width:100%;text-align:right">
				<?php
					include "../desktop_menu.php";
				?>
			</div>
			
		</div>
	</div> 
	
	<div class="container" style="width:90%">
		
		<div class="row" style="">
			
			<div id="homeDashboard" class="col-sm-7 col-md-6" style="width:30%">
				<div id="homelet">
					<link rel="stylesheet" type="text/css" href="../css/homelet.css">
					<div class="homelet" id="formletTabPanel" style="width:100%">
						<?php
							include "../home_dashboard.php";
						?>
					</div>
				</div>
			</div>
			
			<div id="homeDesktop" class="col-sm-5 col-md-6" style="width:70%;">
				<?php
					include "../home_desktop.php";
				?>
			</div>
			
		</div>
	</div> 
	
</div>