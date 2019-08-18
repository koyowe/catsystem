<!DOCTYPE html>

<html>
	<head>
    <?php
		include "shared/header.php";
	?>
	</head>
   
	<body class="default" style="overflow: auto;background-color:black">
		<div id="loading-bg"><span style="background-color:pink">Loading..</span></div>
		<img id="loading-image" src="../images/pages/recycler_2.gif" alt="Loading ..." style="border-radius:50%">
    
		<div id="hf-h" class="hf hf-h signed-in-false" no-print-web-checkin="">
		<?php
			include "shared/page_header.php";
		?>
		</div>
    
		<main id="content" role="main" tabindex="-1" >
		<?php
			include "users/login.php";
		?>
		</main>
    
		<footer role="contentinfo" style="clear: both; position: relative; height: 40px; margin-top: -40px;">
		<?php
			include "shared/footer.php";
		?>
		</footer>
		<script src="js/load_button_installer.js"></script>
	</body>
</html>
