<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class='bliinx-header'>
			<img class='bliinx-header-title' onclick="openPage('bliinx-main-page')" src='assets/bliinx_logo.webp'>
			<div class='bliinx-header-pages'>
				<div id='login-page-text' class='bliinx-header-page'><a style="text-decoration:none" href="/web/PHPWork/index.php"> Login / Register </a></div>
				<div class='bliinx-header-page' onclick="openPage('bliinx-why-page')">Why Bliinx</div>
				<div class='bliinx-header-page' onclick="openPage('bliinx-product-page')">Our Product</div>
				<div class='bliinx-header-page' onclick="openPage('bliinx-pricing-page')">Pricing</div>
				<div class='bliinx-header-page' onclick="openPage('bliinx-review-page')">Leave a Comment</div>
			</div>
		</div>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="signup.php">
					<span class="login100-form-title p-b-26">
						Sign Up
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "First Name">
						<input class="input100" type="text" name="firstname">
						<span class="focus-input100" data-placeholder="First Name"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Last Name">
						<input class="input100" type="text" name="lastname">
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					
					
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="gender">
						<span class="focus-input100" data-placeholder="Gender"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="date" name="dob">
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already Have an Account?
						</span>

						<a class="txt2" href="index.php">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	
<?php

if (isset($_POST['email']) && isset($_POST['pass'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpproject";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{	 
	 $first_name = $_POST['firstname'];
	 $last_name = $_POST['lastname'];
	 $Email = $_POST['email'];
     $Gender = $_POST['gender'];
     $Pass = $_POST['pass'];
	 $DOB = $_POST['dob'];	  
	 $sql = "INSERT INTO `users`( `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `DOB`) 
VALUES ('$first_name', '$last_name', '$Email','$Pass','$Gender','$DOB')";  
	 if (mysqli_query($conn, $sql)) {    
		 {
			 echo "<script> alert('Account Created Successfully.....!');  </script>";
			 echo'<script> window.location="index.php"; </script> ';
			   exit;
		 }
   } 
   else 
   {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
else
{
//  echo "Chechhhhhh !";
}
} 	
?>

<script>

		var reviewList = [{
			rating: 5,
			title: 'Incredible!!',
			description: 'My company\'s efficiency near doubled since we added Bliinx to Outlook!',
			timestamp: '2020/6/16 at 0:29'
		},{
			rating: 1,
			title: 'Meh',
			description: 'The app is good but I had too many crashes. FIX IT!',
			timestamp: '2020/6/1 at 13:29'
		},{
			rating: 4,
			title: 'Good for Team Cohesion',
			description: 'Aside from the few crashes, the extension really helped our cohesion.',
			timestamp: '2020/5/29 at 17:29'
		}];

		var createdComment = {
			rating: 0,
			title: '',
			description: ''
		}

		var isUserLoggedIn = false;
		var userData = {};

		function clickOnLoginLogout(pageName){
			// If logged in
			if(isUserLoggedIn){
				logout();
			}else{
				openPage('bliinx-login-register-page')
			}
		}

		function login(){
			let username = document.getElementById("signin-username").value;
			let password = document.getElementById("signin-password").value;
			// Ensure credentials are okay. If response is 200
			isUserLoggedIn = true;
			document.getElementById('login-page-text').innerHTML = 'Log Out';
			openPage('bliinx-main-page');
			alert('You succesfully logged in.');

		}

		function logout(){
			console.log('logout')
			isUserLoggedIn = false;
			alert('You are now logged out.');
			document.getElementById('login-page-text').innerHTML = 'Login / Register';
		}

		function register(){
			// If both passwords are the same
			if(document.getElementById("register-password").value === document.getElementById("register-password-confirm").value){
				let registerSuccesfull = registerUserToDB();
				isUserLoggedIn = true;
				document.getElementById('login-page-text').innerHTML = 'Log Out';
				openPage('bliinx-main-page');
				alert('You succesfully created your account.');
			}else{
				alert('Please enter two identical password.')
			}
		}

		// START TO DO
		function registerUserToDB(username, password){
			let username = document.getElementById("register-username").value;
			let password = document.getElementById("register-password").value;
			// Execute your backend code to create a user with username and password above
			// Return true if the user could be created. Return false otherwise
			return true;
		}

		function loginUserToDB(username, password){
			let username = document.getElementById("register-username").value;
			let password = document.getElementById("register-password").value;
			// Login the user if the username and password were succesfull
			// Return true if succesfull, false otherwise
			return true;
		}
		// END TO DO

		function openPage(pageName){

			// Hide all the pages
			document.getElementById("bliinx-main-page").setAttribute("style","display:none");
			document.getElementById("bliinx-login-register-page").setAttribute("style","display:none");
			document.getElementById("bliinx-why-page").setAttribute("style","display:none");
			document.getElementById("bliinx-product-page").setAttribute("style","display:none");
			document.getElementById("bliinx-pricing-page").setAttribute("style","display:none");
			document.getElementById("bliinx-review-page").setAttribute("style","display:none");

			// Show the one called for
			document.getElementById(pageName).setAttribute("style","display:inline-block");
		}

		function clickRating(rating){ // 1 to 5
			createdComment.rating = rating;

			// Hide all the pages
			for(let i = 1 ; i < 6 ; i++){
				if(i !== rating){
					document.getElementById("unselected-" + i).setAttribute("style","display:inline-block");
					document.getElementById("selected-" + i).setAttribute("style","display:none");
				}else{
					document.getElementById("unselected-" + i).setAttribute("style","display:none");
					document.getElementById("selected-" + i).setAttribute("style","display:inline-block");
				}
			}
		}

		function titleUpdated(){
			createdComment.title = document.getElementById("review-title").value;
		}

		function descriptionUpdated(){
			createdComment.description = document.getElementById("review-description").value;
		}

		function submitReview(){

			// Check if all data is present
			if(createdComment.rating === 0){
				alert('You need to select a rating (emoji) before submitting the review.');
				return;
			}else if(createdComment.title === ''){
				alert('You need add a review title before submitting the review.');
				return;
			}else if(createdComment.description === ''){
				alert('You need add a review before submitting the review.');
				return;
			}

			// Add the date
			var dateObj = new Date();
			var minute = dateObj.getMinutes();
			var hour = dateObj.getHours();
			var month = dateObj.getUTCMonth() + 1; //months from 1-12
			var day = dateObj.getUTCDate();
			var year = dateObj.getUTCFullYear();

			createdComment.timestamp = year + "/" + month + "/" + day + ' at ' + hour + ':' + minute;

			// Add review to review list
			reviewList.unshift(JSON.parse(JSON.stringify(createdComment)));
			updateReviewList();

			// Wipe current review
			createdComment = {
				rating: 0,
				title: '',
				description: ''
			}

			// Wipe UI Data
			document.getElementById("review-title").value = '';
			document.getElementById("review-description").value = '';
			clickRating(0);
		}

		function updateReviewList(){
			var reviewTemplateHTML = "<div class='bliinx-review'><div class='bliinx-review-emoji'><img class='bliinx-review-creator-image-selected' src='assets/rate-%rating%.png'></div><div class='bliinx-review-title'>%title%</div><div class='bliinx-review-description'>%description%</div><div class='bliinx-review-timestamp'>%timestamp%</div></div>";

			var currentHTML = '';

			for(let i = 0 ; i < reviewList.length ; i++){
				var currentReview = reviewList[i];
				var currentReviewHTML = reviewTemplateHTML.replace('%rating%',currentReview.rating).replace('%title%',currentReview.title).replace('%description%',currentReview.description).replace('%timestamp%',currentReview.timestamp);
				currentHTML = currentHTML.concat(currentReviewHTML);
			}

			document.getElementById("bliinx-reviews").innerHTML = currentHTML;
		}

		// On openning
		openPage("bliinx-main-page");
		clickRating(0);
		updateReviewList();
	</script>

	<style>

	 :root {
		 --Bliinx-Blue: #27B4FF;
		 --Bliinx-Purple: #683A91;
		 --Bliinx-Grey: #333;
		 --Bliinx-Grey-Pale: #eee;
	 }

		*{
			font-family: 'Source Sans Pro', sans-serif;
		}

		html{
			height: 100%;
			width: 100%;
		}

		body{
			position: relative;
			margin: 0px;
			height: 100%;
		}

		.bliinx-header{
			position: relative;
			display: inline-block;
			height: 55px;
			width: 100%;
			background-color: var(--Bliinx-Grey-Pale);
    	box-shadow: 0px 0px 8px 2px #000000;
			z-index: 1;
		}

		.bliinx-header-title{
			display: inline-block;
			height: 45px;
			color: white;
			margin-top: 5px;
			margin-left: 20px;
			margin-right: 0px;
			overflow: hidden;
			cursor: pointer;
		}

		.bliinx-header-pages{
			display: inline-block;
			float: right;
			height: 100%;
			vertical-align: middle;
			margin-right: 20px;
		}

		.bliinx-header-page{
			position: relative;
			display: inline-block;
			top: calc(50% - 15px);
			padding: 5px 10px;
			border-radius: 20px;
    	font-size: 16px;
			margin-left: 20px;
			color: var(--Bliinx-Grey);
			background-image: linear-gradient(to bottom right, var(--Bliinx-Grey-Pale), var(--Bliinx-Grey-Pale));
			cursor: pointer;
		  -webkit-transition: 0.35s;
		  -moz-transition: 0.35s;
		  -ms-transition: 0.35s;
		  -o-transition: 0.35s;
		  transition: 0.35s;
		}

		.bliinx-header-page:hover{
			background-image: linear-gradient(to bottom right, var(--Bliinx-Blue), var(--Bliinx-Purple));
			color: white;
		}

		.bliinx-body{
			display: inline-block;
			position: relative;
			height: calc(100% - 55px);
			width: 100%;
		}

		.bliinx-main-page{
			display: inline-block;
			height: 100%;
			width: 100%;
    	overflow: hidden;
		}

		.bliinx-why-page{
			display: inline-block;
			height: 100%;
			width: 100%;
    		overflow: hidden;
		}

		.bliinx-product-page{
			display: inline-block;
			height: 100%;
			width: 100%;
    		overflow: hidden;
		}

		.bliinx-pricing-page{
			display: inline-block;
			height: 100%;
			width: 100%;
    	overflow: hidden;
		}

		.bliinx-pricing-card-container{
			position: absolute;
			left: 50%;
			top: 40%;
			width: 800px;
			transform: translate(-50%, -50%);
			display: inline-block;
			text-align: center;
			z-index: 100;
		}

		.bliinx-login-card{
			width: 250px;
			height: 290px;
			display: inline-block;
			float: center;
			border: 1px solid rgba(6,6,6,0.2);
			background-color: white;
			text-align: center;
			margin-right: 30px;
			vertical-align: middle;
		}

		.bliinx-register-card{
			width: 250px;
			height: 350px;
			display: inline-block;
			float: center;
			border: 1px solid rgba(6,6,6,0.2);
			background-color: white;
			text-align: center;
			vertical-align: middle;
		}

		.bliinx-card-title{
			font-weight: bold;
			font-size: 22px;
			padding-top: 20px;
		}

		.bliinx-card-desc{
			font-size: 12px;
		}

		.bliinx-card-input{
			font-size: 12px;
		}

		.bliinx-card-button{
			margin-top: 20px;
			padding: 5px 10px;
			border-radius: 20px;
    		font-size: 12px;
			color: white;
			background-color: var(--Bliinx-Purple);
			border: 0px;
			cursor: pointer;
		}

		.bliinx-card-subtitle{
			font-weight: bold;
			font-size: 14px;
			padding-top: 20px;
		}

		.bliinx-pricing-card-1{
			width: 250px;
			height: 400px;
			display: inline-block;
			float: left;
			border: 1px solid rgba(6,6,6,0.2);
			background-color: white;
			text-align: center;
		}

		.bliinx-pricing-card-2{
			width: 250px;
			height: 400px;
			display: inline-block;
			border-top: 3px solid var(--Bliinx-Blue);
			background-color: white;
			-webkit-box-shadow: 0px 10px 22px 0px rgba(0,0,0,0.34);
			-moz-box-shadow: 0px 10px 22px 0px rgba(0,0,0,0.34);
			box-shadow: 0px 10px 22px 0px rgba(0,0,0,0.34);
			text-align: center;
		}

		.bliinx-pricing-card-3{
			width: 250px;
			height: 400px;
			display: inline-block;
			float: right;
			border: 1px solid rgba(6,6,6,0.2);
			background-color: white;
			text-align: center;
		}

		.bliinx-pricing-card-title{
			font-weight: bold;
			font-size: 22px;
			padding-top: 20px;
		}

		.bliinx-pricing-card-price{
			font-weight: bold;
			font-size: 30px;
			padding-top: 5px;
		}

		.bliinx-pricing-card-price-desc{
			font-size: 12px;
		}

		.bliinx-pricing-card-try-button-1{
			margin-top: 20px;
			padding: 7px 20px;
			background-color: #A0A0A0;
			width: fit-content;
			margin-left: auto;
			margin-right: auto;
			border-radius: 5px;
			color: white;
		}

		.bliinx-pricing-card-try-button-2{
			margin-top: 20px;
			padding: 7px 20px;
			background-color: var(--Bliinx-Blue);
			width: fit-content;
			margin-left: auto;
			margin-right: auto;
			border-radius: 5px;
			color: white;
		}

		.bliinx-pricing-card-try-button-3{
			margin-top: 20px;
			padding: 7px 20px;
			background-color: var(--Bliinx-Purple);
			width: fit-content;
			margin-left: auto;
			margin-right: auto;
			border-radius: 5px;
			color: white;
		}

		.bliinx-pricing-card-listing{
			font-size: 14px;
			text-align: left;
			width: fit-content;
			margin-left: auto;
			margin-right: auto;
			transform: translateX(-18px);
		}

		.bliinx-img-filler{
	    min-width: 100%;
	    min-height: 100%;
	    position: relative;
	    left: 50%;
	    top: 50%;
	    transform: translate(-50%, -50%);
		}

		.bliinx-review-page{
			display: inline-block;
    	overflow: scroll;
			height: 100%;
			width: 100%;
			background-image: linear-gradient(to bottom right, var(--Bliinx-Blue), var(--Bliinx-Purple));
		}

		.bliinx-review-creator{
			display: inline-block;
			width: 50%;
			background-color: var(--Bliinx-Grey-Pale);
			margin-top: 60px;
			position: relative;
			left: 50%;
			transform: translate(-50%);
			border-radius: 20px;
 			box-shadow: rgba(0,0,0,0.8) 0 0 10px;
		}

		.bliinx-review-creator-ratings{
			text-align: center;
			vertical-align: top;
			display: inline-block;
			height: 70px;
			width: 100%;
		}

		.bliinx-review-creator-rating{
			display: inline-block;
			vertical-align: top;
			height: 30px;
			width: 30px;
			margin-top: 20px;
			margin-left: 5px;
			margin-right: 5px;
			cursor: pointer;
		}

		.bliinx-review-creator-image{
			display: block;
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			filter: grayscale(100%);
			height: 30px;
			width: 30px;
		  transition: 0.35s;
		}

		.bliinx-review-creator-image:hover{
			display: block;
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			filter: none;
			height: 40px;
			width: 40px;
		}

		.bliinx-review-creator-image-selected{
			display: block;
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			height: 40px;
			width: 40px;
		}

		.bliinx-review-creator-title{
			width: calc(100% - 30px);
			margin-left: 10px;
			border-radius: 5px;
			font-size: 16px;
			border: 0px !important;
			box-shadow: inset rgba(0,0,0,0.8) 0 0 4px;
		}

		.bliinx-review-creator-description{
			resize: none;
			height: 100px;
			width: calc(100% - 30px);
			border-radius: 5px;
			margin-top: 10px;
			margin-left: 10px;
			font-size: 16px;
			border: 0px !important;
			box-shadow: inset rgba(0,0,0,0.8) 0 0 4px;
		}

		.bliinx-review-creator-buttons{
			display: inline-block;
			height: 50px;
			width: 100%;
		}

		.bliinx-review-creator-button{
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 5px 15px;
			border-radius: 10px;
			border: 0px;
			color: white;
			background-image: linear-gradient(to bottom right, var(--Bliinx-Blue), var(--Bliinx-Purple));
			font-weight: bold;
			cursor: pointer;
		  transition: 0.35s;
		}

		.bliinx-review-creator-button:hover{
			transform: translate(-50%, -50%) scale(1.15);
		}

		.bliinx-reviews{
			height: calc(100% - 325px);
			width: 100%;
			margin-bottom: 100px;
		}

		.bliinx-review{
			display: block;
			width: 50%;
			background-image: linear-gradient(to bottom right, var(--Bliinx-Grey-Pale), var(--Bliinx-Grey-Pale));
			margin-top: 30px;
			position: relative;
			left: 50%;
			transform: translate(-50%);
			border-radius: 20px;
 			box-shadow: rgba(0,0,0,0.8) 0 0 10px;
		}

		.bliinx-review-emoji{
			display: inline-block;
			margin-top: 15px;
			height: 30px;
			width: 100%;
		}

		.bliinx-review-title{
			text-align: center;
			display: inline-block;
			width: 100%;
			font-size: 18px;
			font-weight: bold;
			margin-top: 15px;
			color: var(--Bliinx-Grey);
		}

		.bliinx-review-description{
			text-align: center;
			display: inline-block;
			width: 100%;
			font-size: 16px;
			margin-top: 10px;
			color: var(--Bliinx-Grey);
		}

		.bliinx-review-timestamp{
			text-align: right;
			margin-right: 20px;
			display: inline-block;
			width: calc(100% - 20px);
			font-size: 15px;
			margin-top: 10px;
			margin-bottom: 10px;
			color: var(--Bliinx-Grey);
		}

		/** BLIINX MAIN PAGE **/

		.bliinx-main-page-background {
		    min-width: 100%;
		    top: 100%;
		    position: relative;
		    transform: translate(0%, -100%);
		}

		.bliinx-pricing-page-background {
		    min-width: 200%;
		    top: 100%;
		    position: relative;
				left: -100%;
		    transform: translate(0%, -70%);
		}

		.bliinx-why-page-background {
		    min-width: 200%;
		    top: 100%;
		    position: relative;
				left: -100%;
		    transform: translate(0%, -70%);
		}

		.bliinx-why-container{
			display: inline-block;
			position: absolute;
			top: 20px;
			height: 75%;
			width: 100%;
			z-index: 1;
		}

		.bliinx-why-container-title{
			text-align: center;
			margin-top: 30px;
			display: inline-block;
			width: 100%;
			font-size: 17px;
			font-weight: bold;
		}

		.bliinx-why-container-description{
			text-align: center;
			position: relative;
			margin-top: 10px;
			left: 50%;
			transform: translateX(-50%);
			width: 80% !important;
			max-width: 700px;
			font-size: 14px;
		}

		.bliinx-product-page-background {
		    min-width: 200%;
		    top: 100%;
		    position: relative;
				left: 0%;
		    transform: translate(0%, -70%);
		}

		.bliinx-product-page-image {
			position: absolute;
			left: 25%;
			top: 40%;
			transform: translate(-50%, -50%);
			width: 40%;
			z-index: 1;
		}

		.bliinx-product-page-text-container {
			position: absolute;
			left: 50%;
			top: 25%;
		}

		.bliinx-product-page-title {
			position: absolute;
			left: 50%;
			top: 35%;
			font-size: 26px;
			font-weight: bold;
			transform: translateY(-100%);
		}

		.bliinx-product-page-description {
			position: absolute;
			left: 50%;
			width: 45%;
			top: 35%;
			font-size: 20px;
		}

		.bliinx-main-page-logo {
			position: absolute;
			left: 50%;
			top: 35%;
			transform: translate(-50%, -100%);
		}

		.bliinx-main-page-description {
			font-size: 16px;
			font-weight: bold;
			text-align: center;
			position: absolute;
			width: 50%;
			left: 50%;
			top: 35%;
			transform: translate(-50%, 15px);
		}

	</style>
</body>
</html>