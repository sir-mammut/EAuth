<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="description" content="EAuth is the strong User Authentication system,Created for security purpose. ">
	<meta name="keywords" content="EAuth, security, Security template, Login and Registeration,Login, Logout, Register here">
	<title>Login with EAuth</title>

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
			<h4>Login</h4>
			<div class="row">
				<!-- Aside nav -->
				<?php require 'inc/side.php'; ?>
				<!-- Aside nav -->

				<div class="col s12 l9" id="content">
					<div class="row">
						<div class="col s12 m6">
							<div class="card-panel">
								<div id="get"></div>
								<h4>Returning User</h4>
								<p>
									<strong>I am a returning user</strong>
								</p>
								<form id="myLoginForm" action="process/log-user.php" enctype="multipart/form-data" method="POST">
									<div class="input-field">
										<i class="material-icons prefix">email</i>
										<input name="email" class="validate" id="input-email" type="email" value="">
										<label class="text-bold" for="input-email">E-Mail Address</label>
										<span class="helper-text" data-success="E-mail Valid" data-error="Wrong e-mail"></span>
									</div>
									<div class="input-field">
										<i class="material-icons prefix">lock</i>
										<input name="password" id="input-password" type="password" value="">
										<label class="text-bold" for="input-password">Password</label>
									</div>
									<div class="remember section">
										<label for="remember-me">
											<input type="checkbox" id="remember-me" />
											<span>Remember me</span>
										</label>
										<a class="right" href="forgottenpassword.php">Forgotten Password</a>
									</div>
									<input type="hidden" name="attempt" id="attempt" value="<?php echo $attempt ?>">
									
									<div class="flex-reverse">
										<button class="btn waves-effect waves-light" type="submit" value="Login">Login
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col s12 m6">
							<div class="card-panel">
								<h4>New User</h4>

								<div class="row">
									<div class="col s12">
										<ul class="center collection href-underline">
											<li class="collection-item">
												<a href="register.php?default=1" class="waves-effect waves-light  btn social"><i class="fas fa-globe"></i> Create new Account</a>
											</li>
											<li class="collection-item">
												<a class="waves-effect waves-light btn social google"><i class="fab fa-google"></i> Sign in with Google</a>
											</li>
											<li class="collection-item">
												<a class="waves-effect waves-light btn social facebook"><i class="fab fa-facebook"></i> Sign in with Facebook</a>
											</li>
											<li class="collection-item">
												<a class="waves-effect waves-light btn social twitter"><i class="fab fa-twitter"></i> Sign in with Twitter</a>
											</li>
										</ul>
									</div>
								</div>

								<p>
									<strong>Create new Account</strong>
								</p>
								
								<p>By creating an account you will be able to interact with us faster.
								</p>
								<!-- <div class="flex-reverse">
									<a class="btn waves-effect waves-light blue-grey darken-1 href-underline" href="#">Continue</a>
								</div> -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- END MAIN -->
    <?php require 'inc/footer.php'; ?>
	<script type="text/javascript">

		$(document).ready(function() {

			
			

			$("#myLoginForm").on('submit',function(e){
				e.preventDefault();

				// loader 
				$('#modal-loading').modal({
				  dismissible: false,
				  opacity: .7,
				  endingTop: '40%',
				}).modal('open');
				
				var attempt = $('#attempt').val();
				var formData = {
					'email'      :  $('#input-email').val(),
					'password'   :  $('#input-password').val(),
					'remember'   :  $('#remember-me').prop('checked'),
					'attempt'    :  $('#attempt').val()
				};

				//doing my ajax stuff here
				$.ajax({
					url: 'process/log-user.php',
					type: 'POST',
					data: formData,
					dataType: 'json',
					encode: true
				})
				.done(function(data){
					if (data['errors']) {
						lodGet();
						attempt++;
						$('#modal-loading').modal('close').remove();
						var errors = data['errors'];

						for (error in errors) {
							M.toast({
							  html: '<i class = "material-icons left">warning</i>'+errors[error],
							  classes: 'toast-warning'
							});
						}
						cUrl('http://localhost/eauth/login.php?attempt='+attempt);
					}
					if (data['success']) {
						window.location.href = data['url']+'?uid='+data['uid'];
					}
				})
				.fail(function(xhr, ajaxOptions, thrownError){
				  $('#modal-loading').modal('close').remove();
				  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				});
				
			});
		});
		function cUrl(new_url) {
			window.history.pushState("data","title",new_url);
		}
		function lodGet() {
			$('#get').load('laodGet.php');
		}
	</script>
</body>
</html>