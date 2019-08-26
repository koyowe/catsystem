<?php
	 
	if(isset($_GET['logout'])){
		session_start();
		$loginMessage="Logged out.";
		session_unset(); 
		session_destroy();
	}
?>
<html>
	<head>
		<style>
			@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
			 *, *::before, *::after {
				 box-sizing: border-box;
			}
			 html, body {
				 height: 100%;
				 overflow: hidden;
				 outline: none;
				 margin:0px;
			}
			 body {
				 font-family: "Open Sans", Arial, sans-serif;
				 font-size: 16px;
				 line-height: 1.5em;
				 background-color: #2d3237;
				 color: #f0f5fa;
			}
			 .login {
				 position: absolute;
				 margin: 0 auto;
				 top: 50%;
				 left: 50%;
				 width: 300px;
				 height: 300px;
				 transform: translate(-50%, -50%);
			}
			 .login h1 {
				 position: relative;
				 margin-top: 20px;
				 margin-bottom: 40px;
				 color: #f0f5fa;
				 text-align: center;
			}
			 .login h1 span {
				 color: #84bc44;
			}
			 .login form {
				 height: 100%;
				 padding: 20px;
				 padding-bottom: 40px;
				 background-color: #23282d;
				 border-top: 4px solid #3c4146;
				 border-bottom: 4px solid #3c4146;
			}
			 .login form input, .login form button {
				 width: 100%;
				 margin-bottom: 10px;
				 border: none;
				 outline: none;
				 padding: 10px;
				 background-color: #3c4146;
				 color: #f8f8f2;
				 font-size: 16px;
				 line-height: 1.5em;
				 border-radius: 4px;
				 transition: all 0.5s ease;
			}
			 .login form input::placeholder, .login form button::placeholder {
				 color: #8c9196;
			}
			 .login form input:focus, .login form button:focus {
				 background-color: #50555a;
			}
			 .login form button[type="submit"] {
				 text-transform: uppercase;
				 font-weight: 700;
				 background-color: #84bc44;
				 color: #f0f5fa;
				 cursor: pointer;
				 transition: all 0.5s ease;
			}
			 .login form button[type="submit"]:hover {
				 background-color: #a1e553;
				 color: #6b9937;
			}
			 .morestuff {
				 margin-top: 20px;
				 text-align: center;
				 font-size: 14px;
			}
			 .morestuff a {
				 transition: color 0.5s ease;
			}
			 .morestuff a:link {
				 color: #84bc44;
			}
			 .morestuff a:hover {
				 color: #a1e553;
			}
			 .morestuff a:visited {
				 color: #6b9937;
			}
			 
		</style>
		
		<style>
			 #loading-bg {
			  width: 100%;
			  height: 100vh;
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
		<script type="text/javascript" src="js/jquery.min.js.download"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js.download"></script>
		<script type="text/javascript">
		$(window).on('load', function() {
			$('#loading-bg').hide();
			$('#loading-image').hide();
		});

		$(window).on('beforeunload', function() {
			$('#loading-bg').show();
			$('#loading-image').show();
		});
	</script>
	</head>
	
	<body>
		<div id="loading-bg"><span style="background-color:pink">Loading..</span></div>
		<img id="loading-image" src="images/pages/recycler_2.gif" alt="Loading ...">
		<div style="width:100%;height:95px;background-color:green">
			<div style="max-height:120px;">
				<div style="position: absolute;height: 55px;top: 0;width:100%">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 237.436 119.988" enable-background="new 0 0 237.436 119.988" xml:space="preserve" preserveAspectRatio="xMinYMin meet" style="height: 85px;left: 0;position: absolute;top: 0;width: 170px;">
						<path fill="#ffffff" d="M44.27,54.991c-0.011,0.013-0.022,0.026-0.033,0.039c28.068-11.335,56.663-21.368,85.704-29.896
						C166.096,14.517,204.297,5.994,237.436,0H103.492C81.323,16.445,61.633,34.86,44.27,54.991z"></path>
						
						<path fill="#ffffff" d="M44.237,55.03c-0.013,0.005-0.027,0.011-0.04,0.016c-9.148,3.695-18.241,7.527-27.275,11.492
						C11.471,68.931,5.759,71.274,0,73.695v46.294c6.98-13.504,15.079-27.081,25.101-40.846C31.134,70.856,37.519,62.821,44.237,55.03z"></path>
						
						<path fill="#000000" d="M44.197,55.046c0.002-0.001,0.004-0.003,0.005-0.004c0.023-0.018,0.045-0.034,0.068-0.051
						C61.635,34.859,81.329,16.444,103.502,0H85.466c-13.625,3.47-27.28,6.879-40.687,10.989C29.551,15.657,14.547,21.272,0,27.878
						v45.817c5.759-2.42,11.471-4.763,16.922-7.156C25.955,62.573,35.048,58.741,44.197,55.046z"></path>
						
						<path fill="#BB0000" d="M85.466,0H0v27.878c14.547-6.606,29.551-12.221,44.779-16.889C58.186,6.879,71.841,3.47,85.466,0z"></path>
					</svg>
					<table style="width:100%">
						<tr>
							<td style="width:33%;padding-left:85px">
								<img src="../images/pages/moh_kenya.png" width="100px;">
							</td>
							<td style="width:33%;text-align:center">
								<span style="font-family:Bungee Inline; font-size:28px"> CAT</span>
								<span style="font-family:Calibri Light (Headings); font-size:28px">System </span>
								<span>- Cancer Tracking System</span>
							</td>
							<td style="33%">
								<br>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div style="background-color:white; height:2px"></div>
		<div style="background-color:black; height:6px"></div>
		<div style="background-color:white; height:2px"></div>
		<div style="background-color:#BB0000; height:6px"></div>
		
		<div style="height:100vh">
		<div class="login">
		  <form method="post" action="/">
			<div style="text-align:center">
				<span>
					<?php 
						if(isset($loginMessage)){
							echo $loginMessage;
						}
					?>
				</span>
			</div>
			<h1>CAT<span><span>System</span></h1>
			<!-- <label for="username">Username:</label> -->
			<input type="text" id="username" name="username" placeholder="Username" value="koyowe" required>
			<!-- <label for="password">Password:</label> -->
			<input type="password" id="password" name="password" placeholder="Password" value="Koyowe123" required>
			<button type="submit">Login</button>
		  </form>
		  <div class="morestuff">
			<p>
				<a href="/">Reset page</a> | <a href="">Request Account</a> <br>
				<a style="cursor:pointer" onClick="alert('We are working on it')">Forgot password?</a>
			</p>
			<!-- <p><a href="#3">Create an account</a></p> -->
		  </div>
		</div>
		</div>
		
		<div style="background-color:white; height:2px"></div>
		<div style="background-color:black; height:6px"></div>
		<div style="background-color:white; height:2px"></div>
		<div style="background-color:#BB0000; height:6px"></div>
		
	</body>
</html>