<!DOCTYPE html>
	<html lang="en">
		<head>
			<style>
				*{
				  box-sizing:border-box;
				  -webkit-box-sizing:border-box;
				  -moz-box-sizing:border-box;
				}
				body{
				  padding:0;
				  margin:0;
				  //background: url(https://subtlepatterns.com/patterns/scribble_light.png) #FFF;
				  background: #f2f2f2;
				  font-size:42.5%;
				  font-family: 'Open Sans', sans-serif;
				}
				img{
				  max-width: 100%;
				}
				#wrap{
				  width:95%;
				  margin:auto;
				  padding-top:10px;
				}
				#accordian{
				  width:100%; height:50vh;
				  padding:10px;
				  background:white;
				}
				#accordian .number{
				  width:30px;
				  height:30px;
				  background:#fff;
				  color:#888;
				  font-size:20px;
				  text-align: center;
				  border-radius:50%;
				  float:left;
				}
				#accordian .step{
				  width:100%;
				  height:43px;
				  background: #00B4CC;
				  color:#FFF;
				  padding-left:1%;
				  padding-top:5px;
				  border-bottom:3px solid #d9d9d9;
				  border-radius:2px;
				  float:left;
				}
				#accordian .title{
				  float:left;
				  width:80%;
				  height:50px;
				  margin-left:1%;
				  font-size:1em;
				  font-weight:300;
				}
				#accordian .title h1{
				  font-size:2em;
				  font-weight:400;
				  margin-top:10px;

				}
				#accordian .modify{
				  float:left;
				  width:40px;
				  height:40px;
				  color:#aaa;
				  background:#FFF;
				  text-align:center;
				  font-size:4em;
				  border-radius:50%;
				  margin-top:5px;
				  padding-top:0px;
				  cursor:pointer;
				}
				#accordian .modify i{
				  margin-top:0px;
				  display:block;
				}
				#accordian .content{
				  padding:2em 2em;
				  width:100%;
				  margin:0 auto;
				  background:#FFF;
				  height:auto;
				  display:block;
				  float:left;
				}
				#accordian .content label{
				  font-size:1.3em;
				}
				#accordian .content input{
				  padding:10px 15px;
				  border:1px solid #ccc;
				  border-radius:3px;
				  display:inline-block;
				  font-size: 2em;
				}
				#accordian .content button{
				  display:block;
				  float:right;
				  background:#80c0ff;
				  width:200px;
				  border:0;
				  padding:5px 15px;
				  font-size:1.6em;
				  color:#FFF;
				  border-bottom:3px solid #4da7ff;
				  border-radius:2px;
				  clear:both;
				}
				#accordian .content .continue{
				  display:block;
				  float:right;
				  background:#80c0ff;
				  width:200px;
				  border:0;
				  padding:5px 15px;
				  font-size:1.6em;
				  color:#FFF;
				  border-bottom:3px solid #4da7ff;
				  border-radius:2px;
				  clear:both;
				  text-align:center;
				  text-decoration: none;
				  margin-top:15px;
				}
				#accordian #address label{
				  width:100px;
				  display:inline-block;
				}

				#accordian .select{
				  width: 100%;
				  overflow: hidden;
				  border: 1px solid #ccc;
				  border-radius: 2px;
				  display: inline-block;
				  margin-left:0;
				  margin-bottom: 5px;
				  margin-top:5px;
				  border: 1px solid #ccc;
				  border-radius: 3px;
				  display: inline-block;
				}
				#accordian .country_options label,
				#accordian .state_options label{
				  background: #80c0ff;
				  color: white;
				  padding: 4px 6px;
				  z-index: 2;
				  text-transform: uppercase;
				  top: 5px;
				  right: 100%;
				  width: 100%;
				  margin-right: -100%;
				  bottom: 8px;
				  border-bottom-right-radius: 3px;
				  border-top-right-radius: 3px;
				}
				#accordian .state_options select,
				#accordian .country_options select{
				  background: transparent;
				  display:inline-block;
				  width: 100%;
				  padding: 5px;
				  font-size: 2em;
				  line-height: 1;
				  border: 0;
				  border-radius:0;
				  height: 40px;
				}
				#accordian #address label.state,
				#accordian #address label.country{
				  display:block;
				  float:left;
				}
				#accordian #address input[type="checkbox"]{
				  width:30px;
				}
				#accordian #address label.same,
				form.go-right input:focus + label.same{
				  width:300px;
				  padding:0 30px;
				  margin-right:0;
				  top:0;
				  left:30px;
				  background:transparent;
				  color:initial;
				  text-transform:uppercase;
				}
				#accordian #shipping input[type="radio"]{
				  width:30px;
				}
				#accordian #shipping div{
				  margin-top:5px;
				}
				#accordian #shipping label{
				  padding:0;
				}
				#accordian #shipping .price{
				  text-align:center;
				  display:inline-block;
				}
				#accordian #payment #card_number{
				  width:100%;
				}
				#accordian .left,
				#accordian .right{
				  width:50%;
				  float:left;
				}
				#accordian #payment label{
				  display:inline-block;
				}
				#accordian #payment .expiry{
				  margin-top:5px;
				}
				#accordian #payment label.exp_date{
				  margin-right:0;
				  background: #80c0ff;
				  color: white;
				  padding: 4px 6px;
				  z-index: 2;
				  text-transform: uppercase;
				  right: 100%;
				  width: 100%;
				  margin-right: -100%;
				  border-bottom-right-radius: 3px;
				  border-top-right-radius: 3px;
				  width:70px;
				  height:40px;
				  top:5px;
				}
				#accordian #payment .month_select,
				#accordian #payment .year_select{
				  width: 100px;
				  height: 40px;
				  border: 1px solid #ccc;
				  border-radius: 2px;
				  display: inline-block;
				}
				#accordian #payment span.divider{
				  font-size: 2em;
				  display: inline-block;
				  padding-left:5px;
				  padding-right:5px;
				  margin-top:-10px;
				}
				#accordian .month_select select,
				#accordian .year_select select{
				  background: transparent;
				  display:inline-block;
				  width: 100%;
				  padding: 5px;
				  font-size: 2em;
				  line-height: 1;
				  border: 0;
				  border-radius:0;
				  height: 40px;
				}
				#accordian #payment .sec_num,
				#accordian #payment .expiry{
				  display:block;
				  float:left;
				}
				#accordian #payment .sec_num{
				  margin-top:5px;
				}
				#accordian .credit_card{
				  padding:3em 1em;
				}
				#accordian #payment .sec_num input{
				}
				#accordian .accepted{
				  width:100%;
				  padding-right:1em;
				  padding-left:1em;
				  margin-top:30px;
				}
				#accordian .accepted span{
				  display: table-cell;
				  padding:3px;
				}
				#accordian .secured {
				  margin-top:5px;
				  padding-left:1em;
				  padding-right:1em;
				}
				#accordian .secured .lock{
				  float:left;
				  padding:3px;
				  width:25%;
				}
				#accordian .secured .security{
				  float:left;
				  margin-right:5px;
				  font-style: italic;
				  color:#aaa;
				  width:70%;
				}
				#accordian #ordered{
				  padding-right:1em;
				}
				#accordian #reviewed{
				  padding-left:1em;
				}
				#accordian .products{
				  width:100%;
				  float:left;
				  padding-bottom:3px;
				  border-bottom:3px solid #aaa;
				}
				#accordian .products .product_image{
				  width:20%;
				  float:left;
				  margin-left: 10%;
				}
				#accordian .products .product_details{
				  width:70%;
				  display: table;
				  vertical-align: middle;
				}
				#accordian .products .product_details span{
				  display:table-cell;
				  vertical-align: middle;
				  margin-top:30%;
				  font-size: 1.5em;
				  color:#aaa;
				}
				#accordian .totals{
				  width:100%;
				  float:left;
				  border-bottom:3px solid #aaa;
				}
				#accordian .totals .subtitle{
				  font-size:2em;
				  display:block;
				  text-align: right;
				  color:#aaa;
				  width:95%;
				  margin-right:5%;
				}
				#accordian .totals .subtitle .sub_price{
				  font-style:italic;
				  width:100px;
				}
				#accordian .final{
				  width:100%;
				  float:left;
				  font-size:2.2em;
				  text-align: right;
				  color:#888;
				}
				#accordian .final .title{
				  width:95%;
				  margin-right:5%;
				  font-weight:bold;
				}
				#accordian #reviewed .title{
				  width:49%;
				  font-size:1.8em;
				  float:left;
				}
				#accordian #reviewed .billing,
				#accordian #reviewed .shipping{
				  width:100%;
				  float:left;
				  margin-bottom:5px;
				}
				#accordian #reviewed .billing .address_reviewed,
				#accordian #reviewed .shipping .address_reviewed,
				#accordian #reviewed .payment .payment_reviewed{
				  color:#aaa;
				  font-size:1.2em;
				  height:80px;
				  width:50%;
				  float:left;
				}
				#accordian #reviewed .billing .address_reviewed span,
				#accordian #reviewed .shipping .address_reviewed span,
				#accordian #reviewed .payment .payment_reviewed span{
				  display:block;
				}
				#accordian #reviewed #complete{
				  float:left;
				  width:100%;
				  padding-top:5px;
				  border-top:1px dotted #aaa;
				}
				#accordian #reviewed .big_button{
				  clear:both;
				  display:block;
				  width:70%;
				  margin:0 auto;
				  padding-top:15px;
				  padding-bottom:10px;
				  color:#fff;
				  font-size:2em;
				  text-decoration: none;
				  background:rgba(117, 104, 186, 1);;
				  text-align:center;
				  border-bottom: 3px solid #4da7ff;
				  border-radius: 2px;
				}

				#accordian #reviewed #complete .sub{
				  color:#aaa;
				  display:block;
				  text-align:center;
				  margin-top:15px;
				  width:80%;
				  margin:5px auto;
				}
				@media(max-width:768px){
				  #accordian .left, #accordian .right {
					  width: 100%;
					  float: left;
				  }
				}
				form > div {
				  position: relative;
				  overflow: hidden;
				  width:100%;
				  max-width:320px;
				  
				}
				form input, form textarea {
				  width: 100%;
				  max-width:320px;
				  border: 2px solid gray;
				  background: none;
				  position: relative;
				  top: 0;
				  left: 0;
				  z-index: 1;
				  padding: 8px 12px;
				  outline: 0;
				}
				form input:valid, form textarea:valid {
				  background: white;
				}
				form input:focus, form textarea:focus {
				  border-color: #f06d06;
				}
				form input:focus + label, form textarea:focus + label {
				  background:#80c0ff;
				  color: white;
				  font-size: 70%;
				  padding: 1px 6px;
				  z-index: 2;
				  text-transform: uppercase;
				}
				form label {
				  transition: background 0.4s, color 0.4s, top 0.4s, bottom 0.4s, right 0.4s, left 0.4s;
				  position: absolute;
				  color: #999;
				  padding: 7px 6px;
				}
				form textarea {
				  display: block;
				  resize: vertical;
				}

				form.go-right label {
				  top: 2px;
				  right: 100%;
				  width: 100%;
				  margin-right: -100%;
				  bottom: 2px;
				  border-bottom-right-radius:3px;
				  border-top-right-radius:3px;
				}
				form.go-right input:focus + label, form.go-right textarea:focus + label {
				  right: 0;
				  margin-right: 0;
				  width: 40%;
				  padding-top: 5px;
				}

				@media screen and (max-width:600px){
				#accordian #address label{
				  display:none;
				}
				  
				#accordian #address input[type=checkbox] {
				  outline: none;
				  width: 90%;
				  height: 35px;
				  font-size: 12px;
				  line-height: 2;
				  display: block;
				  font-weight: bold;
				  border: 1px solid #e6e6e6;
				  -webkit-appearance: none;
				  color: #FFFFFF;
				  cursor:pointer;
				  border-radius:15px;
				  transform: scale(1);
				  -webkit-transform: scale(1);
				  transition: all .3s ease-out;
				  padding:0;
				}
				 
				#accordian #address input[type=checkbox]:checked {
				  color: #fff;
				  background:#FFF;
				  border-radius:15px;
				}
				 
				#accordian #address input[type=checkbox]:before {
				  content: 'Ship to Other Address';
				  width: 50%;
				  height:100%;
				  padding-top:3px;
				  display: inline-block;
				  text-indent: 13px;
				  background:#80c0ff;
				  border-radius:15px;
				  transition: all 0.1s ease-in .1s;
				}
				#accordian #shipping input[type="radio"]{
				  outline:0;
				}
				#accordian #address input[type=checkbox]:checked:before {
				  content: 'Ship To This Address';
				  text-indent: 7px;
				  margin-left: 50%;
				  background:#80c0ff;
				  border-radius:15px;
				}
				#accordian #shipping input[type=radio]:checked {
				  box-shadow: inset 0px 0px 0px 20px #80c0ff;
				}
				#accordian #shipping input[type=radio]:after {
				  content: '';
				  position: absolute;
				  width: 29px;
				  height: 29px;
				  border-radius: 15px;
				  box-shadow: 0px 2px 2px 1px rgba(0,0,0,.2);
				  cursor: pointer;
				  background-color: #fff;
				  transition: all 0.1s ease-in .1s;
				}
				#accordian #shipping input[type="radio"]:checked:after {
				  left: 22px;
				}
				#accordian #shipping input[type=radio] {
				  appearance: none;
				  -webkit-appearance: none;
				  box-shadow: inset 0px 0px 0px 1px #e6e6e6;
				  border-radius: 15px;
				  background-color: #fff;
				  padding: 1px;
				  display: inline-block;
				  width: 52px;
				  height: 31px;
				  position: relative;
				  cursor: pointer;
				  transition: all .3s ease-out;
				  margin: 0px;
				  transform: scale(1);
				  -webkit-transform: scale(1); /* Adjust size here */
				}
				}
				
				#registrationHeader {
					background: #f2f2f2;
					border-bottom:1px solid pink;
				}
			</style>
			
			<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
	
			<script type="text/javascript">
				
			</script>
		</head>
		
		<body>
			<div id="wrap">
				<div id="registrationHeader">
					<h1 style="font-size: 3.0em; color: #00463f;">
						<span style="font-weight: normal;display: inline-block;">
							Patient Registration
						</span>
					</h1>
				</div>
				<div id="accordian">
					<div class="step" id="step1">
						<div class="number">
							<span>1</span>
						</div>
						<div class="title">
							<h1>Demographics</h1>
						</div>
					</div>
					<div class="content" id="email">
						<form class="go-right">
							<div>
								<input type="text" name="first_name" value="" id="first_name" placeholder="First Name" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Required"/><label for="first_name">First Name</label>
							</div>
							<div style="height:2px"></div>
							<div>
								<input type="text" name="middle_name" value="" id="middle_name" placeholder="Middle Name" data-trigger="change" data-validation-minlength="0" data-type="text" data-required="false" data-error-message=""/><label for="middle_name">Middle Name</label>
							</div>
							<div style="height:2px"></div>
							<div>
								<input type="text" name="last_name" value="" id="last_name" placeholder="Last Name" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Required"/><label for="last_name">Last Name</label>
							</div>
						</form>
					</div>
					<div class="step" id="step2">
						<div class="number">
							<span>2</span>
						</div>
						<div class="title">
							<h1>Patient Contacts</h1>
						</div>
					</div>
					<div class="content" id="address">
						<form class="go-right">
							
							<div>
							<input type="phone" name="telephone" value="" id="telephone" placeholder="0728765507" data-trigger="change" data-validation-minlength="10" data-type="number" data-required="true" data-error-message="Enter Patient Telephone Number"/><label for="telephone">Telephone</label>
							</div>
							<div style="height:2px"></div>
							<div>
							<input type="text" name="address" value="" id="address" placeholder="Town/Village/Estate" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Patient Address"/><label for="address">Address</label>
							</div>
							
						</form>
					</div>
					<div class="step" id="step3">
						<div class="number">
							<span>3</span>
						</div>
						<div class="title">
							<h1>Relatives Info</h1>
						</div>
					</div>
					<div class="content" id="address">
						<form class="go-right">
							<span style="font-size:14px;color:grey">Who is the patient related to?</span>
							<div style="clear:both"></div>
							<div>
							<div class="state_options">
								<div class="select">
									<select id="reletionship">
										<option value = "1">Sibling</option>
										<option value = "2">Parent</option>
										<option value = "3">Aunt/Uncle</option>
										<option value = "4">Child</option>
										<option value = "5">Niece/Nephew</option>
										<option value = "6">Spouse</option>
									</select>
								</div>
							  <label class="state" for="reletionship">Relationship</label>
							</div>
							</div>
							
							<div>
							<input type="text" name="relative_name" value="" id="relative_name" placeholder="Relative's Name" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Patient's Relative"/><label for="relative_name">All Names</label>
							</div>
							
						</form>
					</div>
					
					<div class="content" id="final_products">
						<div class="right" id="reviewed" style="padding-left:0em">
							<div id="complete">
							<a class="big_button" id="complete" href="#">Submit</a>
							</div>
						</div>
					</div>
				</div>
			
		</body>
	</html>