	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Gabriela|Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/result-j6dk4j47.min.css">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    
	
	<title>CATSystem - Cancer Tracking System</title>
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<script type="text/javascript" src="../js/adrum.js.download"></script>
	<script type="text/javascript" src="../js/adrum-4.3.7.1.js.download"></script>
	<script type="text/javascript" src="../js/handlebars-v4.0.2.js.download"></script>
	<script type="text/javascript" src="../js/jquery.min.js.download"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js.download"></script>
	<script src="../js/intent_media_data.js.download"></script>
	<script src="../js/numscroller-1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js" charset="utf-8"></script>
	<script src="../js/nvd3/build/nv.d3.js"></script>
	
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/core.css">
	<link rel="stylesheet" href="../css/sitecore.css">
	<link rel="shortcut icon" href="../images/pages/cc-icon_2.png">
	<link href="../js/nvd3/build/nv.d3.css" rel="stylesheet" type="text/css">
	
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
	</style>
	<style type="text/css">.st-install-pAcC2eE7jjZxvyeUDsqJ .st-ui-result .st-ui-type-heading { color:#2774ae !important }
	.st-install-pAcC2eE7jjZxvyeUDsqJ .st-ui-result em {font-style:normal; font-weight:bold; background-color:#f6fcfe !important}</style>
	
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
          left: 50%;
		  width: 100px;
          margin: -75px;
          z-index: 510;
        }
		
		@media (min-width: 769px) {
			#homeMobile {
				display:none;
			}
			#mobileBanner {
				display:none;
			}
		}
		
		@media (max-width: 769px) {
			#homeDashboard {
				display:none;
			}
			
			#desktopBanner {
				display:none;
			}
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
				if($(window).width() < 769){
					$("#homeDashboard").css("display", "none");
					$("#homeDesktop").css("display", "none");
					$("#homeMobile").css("display", "block");
					
					
				}else{
					$("#homeMobile").css("display", "none");
					$("#homeDashboard").css("display", "block");
					$("#homeDesktop").css("display", "block");
				}
		});
	</script>
	
	<style>

		.push_button {
			position: relative;
			width:90%;
			height:60px;
			text-align:center;
			color:#FFF;
			text-decoration:none;
			line-height:43px;
			font-family:'Oswald', Helvetica;
			display: block;
			margin: 20px;
		}
		
		.push_button:before {
			background:#f0f0f0;
			background-image:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#D0D0D0), to(#f0f0f0));
			
			-webkit-border-radius:5px;
			-moz-border-radius:5px;
			border-radius:5px;
			
			-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF; 
			-moz-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF; 
			box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;
			
			position: absolute;
			content: "";
			left: -6px; right: -6px;
			top: -6px; bottom: -10px;
			z-index: -1;
		}
			
		.push_button:active {
			-webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset;
			top:5px;
		}
		
		.push_button:active:before{
			top: -11px;
			bottom: -5px;
			content: "";
		}

		.red {
			text-shadow:-1px -1px 0 #A84155;
			background: #D25068;
			border:1px solid #D25068;
			
			background-image:-webkit-linear-gradient(top, #F66C7B, #D25068);
			background-image:-moz-linear-gradient(top, #F66C7B, #D25068);
			background-image:-ms-linear-gradient(top, #F66C7B, #D25068);
			background-image:-o-linear-gradient(top, #F66C7B, #D25068);
			background-image:linear-gradient(to bottom, #F66C7B, #D25068);
			
			-webkit-border-radius:5px;
			-moz-border-radius:5px;
			border-radius:5px;
			
			-webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
			-moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
			box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
		}

		.red:hover {
			background: #F66C7B;
			background-image:-webkit-linear-gradient(top, #D25068, #F66C7B);
			background-image:-moz-linear-gradient(top, #D25068, #F66C7B);
			background-image:-ms-linear-gradient(top, #D25068, #F66C7B);
			background-image:-o-linear-gradient(top, #D25068, #F66C7B);
			background-image:linear-gradient(top, #D25068, #F66C7B);
		}

		.blue {
			text-shadow:-1px -1px 0 #2C7982;
			background: #3EACBA;
			border:1px solid #379AA4;
			background-image:-webkit-linear-gradient(top, #48C6D4, #3EACBA);
			background-image:-moz-linear-gradient(top, #48C6D4, #3EACBA);
			background-image:-ms-linear-gradient(top, #48C6D4, #3EACBA);
			background-image:-o-linear-gradient(top, #48C6D4, #3EACBA);
			background-image:linear-gradient(top, #48C6D4, #3EACBA);
			
			-webkit-border-radius:5px;
			-moz-border-radius:5px;
			border-radius:5px;
			
			-webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
			-moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
			box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
		}

		.blue:hover {
			background: #48C6D4;
			background-image:-webkit-linear-gradient(top, #3EACBA, #48C6D4);
			background-image:-moz-linear-gradient(top, #3EACBA, #48C6D4);
			background-image:-ms-linear-gradient(top, #3EACBA, #48C6D4);
			background-image:-o-linear-gradient(top, #3EACBA, #48C6D4);
			background-image:linear-gradient(top, #3EACBA, #48C6D4);
		}
	</style>
		
	<style>
		@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,700);

		/* General Buttons */
		button {
		  width: 130px;
		  height: 40px;
		  background: linear-gradient(to bottom, green 0%, red 100%); /* W3C */
		  border: none;
		  border-radius: 5px;
		  position: relative;
		  border-bottom: 4px solid #2b8bc6;
		  color: #fbfbfb;
		  font-weight: 600;
		  font-family: 'Open Sans', sans-serif;
		  text-shadow: 1px 1px 1px rgba(0,0,0,.4);
		  font-size: 15px;
		  text-align: left;
		  text-indent: 5px;
		  box-shadow: 0px 3px 0px 0px rgba(0,0,0,.2);
		  cursor: pointer;

		/* Just for presentation */  
		  display: block;
		  margin: 0 auto;
		  margin-bottom: 20px;
		}
		button:active {
		  box-shadow: 0px 2px 0px 0px rgba(0,0,0,.2);
		  top: 1px;
		}

		button:after {
		  content: "";
		  width: 0;
		  height: 0;
		  display: block;
		  border-top: 20px solid #187dbc;
		  border-bottom: 20px solid #187dbc;
		  border-left: 16px solid transparent;
		  border-right: 20px solid #187dbc;
		  position: absolute;
		  opacity: 0.6; 
		  right: 0;
		  top: 0;
		  border-radius: 0 5px 5px 0;  
		}

		/* Button pointing left */

		button.back {
		  text-align: right;
		  padding-right: 12px;
		  box-sizing: border-box;
		}
		
		button.back:after {
		  content: "";
		  width: 0;
		  height: 0;
		  display: block;
		  border-top: 20px solid #187dbc;
		  border-bottom: 20px solid #187dbc;
		  border-right: 16px solid transparent;
		  border-left: 20px solid #187dbc;
		  position: absolute;
		  opacity: 0.6; 
		  left: 0;
		  top: 0;
		  border-radius: 5px 0 0 5px;    
		}

		/* Single buttons */

		button.site {
		  width: 40px;
		  text-align: center;
		  text-indent: 0;
		}
		button.site:after{
		  display: none;
		}
	</style>
		
	<style>
		@import url(https://fonts.googleapis.com/css?family=Open+Sans);

		body{
		  //background: #f2f2f2;
		  //font-family: 'Open Sans', sans-serif;
		}

		.search {
		  width: 90%;
		  position: relative
		}

		.searchTerm {
		  float: left;
		  width: 100%;
		  border: 3px solid #00B4CC;
		  padding: 2px;
		  height: 50px;
		  border-radius: 5px;
		  outline: none;
		  color: #9DBFAF;
		}

		.searchTerm:focus{
		  color: purple;
		}

		.searchButton {
		  position: absolute;  
		  right: -55px;
		  width: 50px;
		  height: 50px;
		  border: 1px solid #00B4CC;
		  background: #00B4CC;
		  text-align: center;
		  color: #fff;
		  border-radius: 5px;
		  cursor: pointer;
		  font-size: 20px;
		}

		/*Resize the wrap to see the search bar change!*/
		.wrap{
		  width: 80%;
		  position: absolute;
		  //top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
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