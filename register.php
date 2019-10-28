<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="description" content="EAuth is the strong User Authentication system,Created for security purpose. ">
	<meta name="keywords" content="EAuth, security, Security template, Login and Registeration,Login, Logout, Register here">
	<title>Register with EAuth</title>

	<!-- Favicons-->
	<link rel="icon" href="#" sizes="32x32">
	<!-- Favicons for apple-->
	<link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
	<!-- For  Windows Phone  -->
	<meta name="msapplication-TileColor" content="#00bcd4">
	<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">

	<!-- CORE CSS -->
	<link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<!-- Custome CSS-->    
	<link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize-social.css">
	<link rel="stylesheet" type="text/css" href="assets/font/css/all.css">
	<style type="text/css">
		@font-face {
		  font-family: 'Material Icons';
		  font-style: normal;
		  font-weight: 400;
		  src: local("Material Icons"), local("MaterialIcons-Regular"), url(assets/css/meh.woff2) format("woff2");
		}

		.material-icons {
		  font-family: 'Material Icons';
		  font-weight: normal;
		  font-style: normal;
		  font-size: 24px;
		  line-height: 1;
		  letter-spacing: normal;
		  text-transform: none;
		  display: inline-block;
		  white-space: nowrap;
		  word-wrap: normal;
		  direction: ltr;
		  -webkit-font-feature-settings: 'liga';
		  -webkit-font-smoothing: antialiased;
		}
	</style>
</head>
<body>
	<?php include 'inc/header.php'; ?>

	<!-- MAIN -->

	<main>
		<!-- <script type="text/javascript" src="https://google.com/recaptcha/api.js?render=6Lerfl4AAAAACEubeCWvcuC2WkgfXZW6Zm6sKrj"></script>
		<script type="text/javascript">
			grecaptcha.ready(function(){
				grecaptcha.execute('6Lerfl4AAAAACEubeCWvcuC2WkgfXZW6Zm6sKrj',{action: 'dashboard.php'});
			})
		</script> -->
			<!-- //modal loader// -->
		  <div id="modal-loading" class="modal">
		    <div class="modal-content">
		      <div class="row valign-wrapper">
		        <div class="col s4 m3 center">
		          <div class="preloader-wrapper active">
		            <div class="spinner-layer spinner-blue">
		              <div class="circle-clipper left">
		                <div class="circle"></div>
		              </div>
		              <div class="gap-patch">
		                <div class="circle"></div>
		              </div>
		              <div class="circle-clipper right">
		                <div class="circle"></div>
		              </div>
		            </div>
		            <div class="spinner-layer spinner-red">
		              <div class="circle-clipper left">
		                <div class="circle"></div>
		              </div>
		              <div class="gap-patch">
		                <div class="circle"></div>
		              </div>
		              <div class="circle-clipper right">
		                <div class="circle"></div>
		              </div>
		            </div>
		            <div class="spinner-layer spinner-yellow">
		              <div class="circle-clipper left">
		                <div class="circle"></div>
		              </div>
		              <div class="gap-patch">
		                <div class="circle"></div>
		              </div>
		              <div class="circle-clipper right">
		                <div class="circle"></div>
		              </div>
		            </div>
		            <div class="spinner-layer spinner-green">
		              <div class="circle-clipper left">
		                <div class="circle"></div>
		              </div>
		              <div class="gap-patch">
		                <div class="circle"></div>
		              </div>
		              <div class="circle-clipper right">
		                <div class="circle"></div>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="col s10 m9">
		          <p id="loading-text" class="flow-text text-bold">Loading...</p>
		        </div>
		      </div>
		    </div>
		  </div>
		  <!-- //modal loader/ -->

		<div class="container">
			
			<h4>Registration</h4>
			<div class="row">
				<!-- Aside nav -->
				<?php require 'inc/side.php'; ?>
				<!-- Aside nav -->
				  <div class="col s12 l9" id="content">
				  <form id="regForm" action="upload.php" enctype="multipart/form-data" method="POST">
				   <div class="card-panel">
				      <p>If you already have an account with us, please login at the <a href="login.php?attempt=1">Login Page</a>.</p>
				      <div id="account">
				        <h5>Your Personal Details</h5>
				        
				        <div class="input-field form-group">
				          <input name="firstname" class="fname validate" id="input-firstname" type="text">
				          <label class="text-bold required" for="input-firstname">First Name</label>
				        </div>
				        <div class="input-field form-group">
				          <input name="lastname" class="validate" id="input-lastname" type="text" value="">
				          <label class="text-bold required" for="input-lastname">Last Name</label>
				        </div>
				        <div class="input-field form-group">
				          <input name="email" class="validate" id="input-email" type="email" value="">
				          <label class="text-bold required" for="input-email">E-Mail</label>
				          <span class="helper-text" data-success="E-mail Valid" data-error="Wrong e-mail">
				          </span>
				        </div>
				        <div class="input-field form-group">
				          <input name="mobile" class="validate" id="input-mobile" type="tel" value="">
				          <label class="text-bold required" for="input-mobile">Mobile Number</label>
				        </div>

				        <h5>Your Password</h5>
				        <div class="input-field form-group">
				          <input name="password" class="validate" id="input-password" type="password" value=""><label class="text-bold required" for="input-password">Password</label>
				        </div>
				        <div class="input-field form-group">
				          <input name="confirm" class="validate" id="input-confirm" type="password" value=""><label class="text-bold required" for="input-confirm">Password Confirm</label>
				        </div>
				        <h5>Newsletter</h5>
				        <div class="section switch form-group"><label>
				            No
				            <input name="newsletter" id="newsletter" value="0" type="checkbox"><span class="lever"></span>
				            Yes
				          </label>
				        </div>
				        <div class="section agreement">
				          <label for="agree-check">
				            <input name="agree" value="0" id="agree-check" type="checkbox"><span>I have read and agree to the
				              <a class="agree" href="#">
				                <b>Privacy Policy</b>
				              </a>
				              </span>
				          </label>
				        </div>
				        </div>
				        <div class="flex-reverse">
				          <button class="btn waves-effect waves-light" type="submit" value="Continue">Continue</button>
				        </div>
				      </div>
				    </div>
				  </form>
				</div>
				  


			</div>
		</div>

	</main>

	<!-- END MAIN -->

	<?php require 'inc/footer.php'; ?>
	<script type="text/javascript">
		// document.addEventListener('DOMContentLoaded',function(){
		// 	var elems = document.querySelectorAll('.sidenav');
		// 	var instances = M.Sidenav.init(elems,options);
		// });
		$(document).ready(function() {

			

			$('#regForm').on('submit',function(e) {
				e.preventDefault();

				//loader 
				$('#modal-loading').modal({
				  dismissible: false,
				  opacity: .7,
				  endingTop: '40%',
				}).modal('open');

				
				//Collecting form data.
				var formData = {
					'firstname' : $('#input-firstname').val(),
					'lastname' : $('#input-lastname').val(),
					'email' : $('#input-email').val(),
					'mobile' : $('#input-mobile').val(),
					'password' : $('#input-password').val(),
					'confirm' : $('#input-confirm').val(),
					'newsletter' : $('#newsletter').prop('checked'),
					'agree' : $('#agree-check').prop('checked')
				};

				//doing my ajax stuff here.
				$.ajax({
					url: 'process/reg-user.php',
					type: 'POST',
					data: formData,
					dataType: 'json',
					encode: true
				})
				.done(function(data){ //using a done function
					console.log(data);
					if(data['errors']){

						$('#modal-loading').modal('close').remove();
						var myObj = data['errors'];

						for(x in myObj){
						    M.toast({
						      html: '<i class = "material-icons left">warning</i>'+myObj[x],
						      classes: 'toast-warning'
						    });
						}
					}
					if (data['success']) {
					  //window.location.href = data['url']+'?uid='+data['uid']+'&id='+data['id'];
					  $('#modal-loading').modal('close').remove();
					  M.toast({
					    html: '<i class = "material-icons left">check</i>'+data['message'],
					    classes: 'toast-success'
					  });
					}
				})
				.fail(function(xhr, ajaxOptions, thrownError){
				  $('#modal-loading').modal('close').remove();
				  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				});
			});
			// $(".button-collapse").sideNav();
		});
	</script>
</body>
</html>