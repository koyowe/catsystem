
<html lang="en">
	<head>
		<?php
			include "../shared/inner_header.php";
		?>
	</head>
	<body>
<div class="jumbotron desktop-hero sc-module homepage-heroimage _8d16763c-dbf5-4d24-8a94-3abf4cce76ae" style="background-color:white; ">
	
	<script src="../js/homelet.scripts.min.js.download" type="text/javascript"></script>
	
	<div id="container" class="container" style="width:90%">
		
		<div class="row" style="">
			<div style="padding-left:10px">
				<h3>Patients</h3>
			</div>
			<!--
			<div id="homeDesktop" class="col-sm-5 col-md-6" style="width:100%;padding-left:0px">
				<iframe id="desktopFrame" frameborder="1" scrolling="no" src="patients/find_patient.php" style="overflow:hidden" onload='javascript:(function(o){o.style.height=50+o.contentWindow.document.body.scrollHeight+"px";}(this));'>
					
				</iframe>
			</div>-->
			<div id="homeDesktop" class="col-sm-5 col-md-6" style="width:100%;padding-left:0px">
				<iframe id="desktopFrame" frameborder="1" scrolling="no" src="patients/find_patient.php" style="overflow:hidden" onload="">
					
				</iframe>
			</div>
			
		</div>
	</div>
</div>

		<script type="text/javascript">
			function menuHome(){
				window.location.href = "home_index.php";
			}
			function menuFindPatients(){
				window.location.href = "patient_index.php";
			}
		</script>