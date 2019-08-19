	
	
	<?php
		include "desktop_menu.php";
	?>
	<div style="padding-left:10px">
		<h3>Patients</h3>
	</div>
	<iframe id="desktopFrame" frameborder="1" scrolling="no" src="find_patient.php" style="padding-left:10px;overflow:hidden;" onload='javascript:(function(o){o.style.height=100+o.contentWindow.document.body.scrollHeight+"px";}(this));'>
		
	</iframe>