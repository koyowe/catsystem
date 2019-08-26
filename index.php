		
		<?php
			session_start();
			$loginMessage="";
			
			
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				if (isset($_POST['username'])){
					$username=$_POST['username'];
				}else{
					$username="";
				}
				if (isset($_POST['password'])){
					$password=$_POST['password'];
				}else{
					$password="";
				}
				
				
				if(($username=='koyowe') && ($password=='Koyowe123')){
					$_SESSION['userIsLoggedIn']="yes";
					include "app.php";
				}else{
					$loginMessage="Invalid Login!";
					include "login.php";
				}
				
				
			} else {
				if(isset($_SESSION['userIsLoggedIn'])){
					if($_SESSION['userIsLoggedIn']=="yes"){
						include "app.php";
					}else{
						include "login.php";
					}
				}else{
					include "login.php";
				}
				
			}
		?>
		