<!DOCTYPE html>
<?php
	$nextFrameHeight = 0;
?>
<html lang="en">
	<head>
		<?php
			include "../shared/inner_header.php";
		?>
	</head>

	<body class="default" style="overflow:auto;">
		<div id="loading-bg"><span style="background-color:pink">Loading..</span></div>
		<img id="loading-image" src="../images/pages/recycler_2.gif" alt="Loading ...">
    
		<div id="hf-h" class="hf hf-h signed-in-false" no-print-web-checkin="" style="margin-bottom:4px">
			<?php
				include "../shared/inner_page_header.php";
			?>
		</div>
		
		<main id="content" role="main" tabindex="-1" style="min-height:100vh">
		
			<div class="container-hero" style="background:url(../images/pages/recycler_2.gif) center center no-repeat;background-size: 50px 50px;">
				
				<div><span id="myspan">what is here</span></div>
				<script>
					document.getElementById("myspan").textContent=window.defaultStatus;
				</script>
				<div id="homeMobile" class="mobile-block" style="width:100%; text-align:right">
					<?php
						include "home_mobile.php";
					?>
				</div>
				<div class="container" style="width:90%">
				
					<div class="row" style="">
						
						<div id="homeDesktop" class="col-sm-5 col-md-6" style="width:100%;text-align:right">
							<?php
								include "desktop_menu.php";
							?>
						</div>
						
					</div>
				</div> 
				
				<br>
				<div class="container" style="width:90%">
				
					<div class="row" style="">
						
						<iframe id="desktopFrame" frameborder="1" scrolling="no" src="patients/find_patient.php" style="overflow:hidden;" onload='javascript:(function(o){o.style.height=20+o.contentWindow.document.body.scrollHeight+"px";}(this));'>
							
						</iframe>
						
					</div>
				</div> 
				
            </div>
			<br/><br/>
		</main>
		
		<script type="text/javascript">
			function menuHome(){
				document.getElementById('desktopFrame').contentWindow.menuHome();
			}
			
			function menuFindPatients(){
				document.getElementById('desktopFrame').contentWindow.menuFindPatients();
				
			}
		</script>
		
		
		<footer role="contentinfo" style="clear: both; position: relative; height: 40px; margin-top: -40px;">
		<?php
			include "../shared/inner_footer.php";
		?>
		</footer>

</body></html>
