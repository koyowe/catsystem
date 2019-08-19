	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Gabriela|Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/result-j6dk4j47.min.css">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- manifesty things -->
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Cancer Tracking System">
    <meta name="apple-mobile-web-app-title" content="CATSystem">
    <meta name="msapplication-navbutton-color" content="#ffe3ff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/index.php">
	
	<title>Welcome to CATSystem - Login</title>
	
	<meta name="description" content="CATSystem Project - Cancer Tracking System, University of Kansas Medical Center">
	<meta name="author" content="Kevin Oyowe, Health Informatics - CATSystem Programmer">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="publisher" href="www.kumc.edu">
	<meta name="twitter:site" content="@oyowek">
	<meta name="twitter:creator" content="@oyowek">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.catsystem.org/">
	<meta property="og:site_name" content="CATSystem Project">
	<meta name="theme-color" content="#01426a">
	<meta name="ahrefs-site-verification" content=""> 
	<link rel="canonical" href="">
	<meta itemprop="name" content="CATSystem - Cancer Tracking System">
	<meta name="twitter:title" content="CATSystem Project - Cancer Tracking System">
	<meta property="og:title" content="CATSystem Project - Cancer Tracking System">
	<meta itemprop="description" content="Official website for the CATSystem Project - Cancer Tracking System.">
	<meta name="twitter:description" content="Official website for the CATSystem Project - Cancer Tracking System.">
	<meta property="og:description" content="Official website for the CATSystem Project - Cancer Tracking System."> 
	
    <link rel="icon" type="image/png" sizes="192x192" density="1" href="./images/beer-icon-192.png">
    <link rel="apple-touch-icon" type="image/png" sizes="192x192" density="1" href="./images/beer-icon-192.png">
    <link rel="icon" type="image/png" sizes="144x144" density="1" href="./images/beer-icon-144.png">
    <link rel="apple-touch-icon" type="image/png" sizes="144x144" density="1" href="./images/beer-icon-144.png">
    <link rel="icon" type="image/png" sizes="240x240" density="1" href="./images/beer-icon-240.png">
    <link rel="apple-touch-icon" type="image/png" sizes="240x240" density="1" href="./images/beer-icon-240.png">
    <link rel="icon" type="image/png" sizes="96x96" density="1" href="./images/beer-icon-96.png">
    <link rel="apple-touch-icon" type="image/png" sizes="96x96" density="1" href="./images/beer-icon-96.png">
	
	<script type="text/javascript" src="../js/adrum.js.download"></script>
	
	<script type="text/javascript" src="../js/handlebars-v4.0.2.js.download"></script>
	<script type="text/javascript" src="../js/jquery.min.js.download"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js.download"></script>
	
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/core.css">
	<link rel="stylesheet" href="../css/sitecore.css">
	
	<style id="holderjs-style" type="text/css"></style>
	<style type="text/css">
		#hf-h {
			border-bottom: none !important;
		}
		.navbar-wrapper-brand {
			border-bottom: none !important;
			padding-bottom: 0 !important;
		}
		#content .welcome {
			color: #fff;
			font-size: 22px;
			margin: 20px 0 10px;
		}
		@media (max-width: 767px) {
			#content .welcome {
				color: #01426A;
				margin-top: 35px;
			}
		}
		.EzPopopOuter {
			overflow: visible !important; /* IE8 browser dialog close button gets clipped otherwise */
		}
		
		.add-button {
			display: none;
		}
	</style>
	<style type="text/css">.st-install-pAcC2eE7jjZxvyeUDsqJ .st-ui-result .st-ui-type-heading { color:#2774ae !important }
	.st-install-pAcC2eE7jjZxvyeUDsqJ .st-ui-result em {font-style:normal; font-weight:bold; background-color:#f6fcfe !important}</style>
	
	
	<style>
		 #loading-bg {
          width: 100%;
          height: 100%;
          position: absolute;
          top: 0;
          left: 0;
          background-color: rgba(0, 0, 0, 0.4);
          z-index: 500;
        }
        
        #loading-image {
		  background-color:pink; 
		  border-radius:5px;
          position: fixed;
          top: 50%;
          left: 50%;
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
		
		$(document).ready(function() {
		
			var signalStrength = navigator.connection.effectiveType;
			console.log("signal strength = " + signalStrength);
			
			var systemIsOnline = navigator.onLine;
			console.log("System is online = "+ systemIsOnline);
			
			if ((signalStrength == '4g') || (signalStrength == '3g')){
			
				$("#bodyDiv").css("background-image", "url('images/pages/cancer_facility.jpg')");
			  
				$("#loginDiv").css("background-image", "url('images/pages/counsellingxx.jpg')");
			  
			}else{
				$("#loginMobile").css("display", "none");
				$("#messageSpan").html('Slow network detected.');
			}
			
			if($(window).width() < 769){
				$("#loginMobile").css("display", "none");
				$("#desktopBreak").css("display", "none");
				$("#loginDiv").css("top", "40%");
			}
			
			if($(window).height() > 824){
				$("#desktopBreak").css("display", "block");
			}
			
			if($(window).height() < 699){
				$("#aboutDiv").css("display", "none");
				//$("#loginDiv").css("top", "60%");
			}
			
			if($(window).height() < 560){
				
				$("#loginDiv").css("top", "60%");
			}
			
			if(($(window).height() > 560) && $(window).height() < 800){
				
				$("#loginDiv").css("top", "60%");
			}
			
			if(!systemIsOnline){
			
				$("#messageSpan").html('You are offline.');
			}
		  
        });
		
		
	</script>
	