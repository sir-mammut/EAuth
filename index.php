<?php

    try {
       require 'session.php';
         
       if (!$auth->isLogged()) {
            header('HTTP/1.0 403 Forbidden');
			header("location:home.php");
            

            exit();
        }else{
         //    if ($accessLevel == 1) {
         //        # do nothing stay on this page...
            // }else{
            //     #go to forbidden page, you are not Authorized to view this page!
            //     header("location:forbidden.html");
            // }
        }
     }catch (PDOException $e) {
       echo $e->getMessage();
     }
     
     $uid = $auth->getCurrentUID();

?>
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
	<link rel="stylesheet" type="text/css" href="assets/prism2/prism.css">
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
			
			<h3>Account</h3>
			<div class="row">
				<!-- Aside nav -->
				<aside class="col l3 hide-on-med-and-down href-underline" id="column-right">
					<div class="collection z-depth-1">
						<a class="collection-item waves-effect blue-grey-text text-darken-4" href="#" rel="nofollow">My Account</a>
						<!-- <a class="collection-item waves-effect blue-grey-text text-darken-4" href="#" rel="nofollow">Login</a>
						<a class="collection-item waves-effect blue-grey-text text-darken-4" href="#" rel="nofollow">Register</a> -->
						<a class="collection-item waves-effect blue-grey-text text-darken-4" href="changePassword.php" rel="nofollow">Change Password</a>
						<a class="collection-item waves-effect blue-grey-text text-darken-4" href="logout.php" rel="nofollow">Logout</a>
						
					</div>
				</aside>
				<!-- Aside nav -->
				<div class="col s12 m12 l9">
					<h5 class="header">Configuration of E-Auth Class</h5>
					<div>
						<p>The database table <code class="language-php"> config</code> contains multiple parameters allowing you to configure certain functions of the class.</p>
						<ul>
							<li>~
								<code class="language-php">
									site_name :</code> is the name of the website that display in the activation and password reset Emails.
							</li>
							<li>~
								<code class="language-php">site_url :</code> the URL of the Auth root, where you installed the system, without the trailing slash, used for emails.
							</li>
							<li>~
								<code class="language-php">site_email :</code> the email address from which to send activation and password reset emails.
							</li>
							<li>~
								<code class="language-php">site_key :</code> a random string that you should modify used to validate cookies to ensure they are not tampered with.
							</li>
							<li>~
								<code class="language-php">site_timezone :</code> the timezone for correct datetime values.
							</li>
							<li>~
								<code class="language-php">site_activation_page :</code> the activation page name appended to the <code class="language-php">site_url</code> in the activation email
							</li>
							<li>~
								<code class="language-php">site_password_reset_page :</code> the password reset page name appended to the <code class="language-php">site_url</code> in the password reset email
							</li>
							<li>~
								<code class="language-php">cookie_name :</code> the name of the cookie that contains session information, do not change unless necessary.
							</li>
							<li>~
								<code class="language-php">cookie_path :</code> the path of the session cookie, do not change unless necessary
							</li>
							<li>~
								<code class="language-php">cookie_domain :</code> the domain of the session cookie, do not change unless necessary
							</li>
							<li>~
								<code class="language-php">cookie_secure :</code>the HTTPS only setting of the session cookie, do not change unless necessary
							</li>
							<li>~
								<code class="language-php">cookie_http :</code> the HTTP only protocol setting of the session cookie, do not change unless necessary
							</li>
							<li>~
								<code class="language-php">cookie_remember :</code>the time that a user will remain logged in for when ticking "remember me" on login. Must respect PHP's <a href="http://php.net/manual/en/function.strtotime.php">strtotime</a> format.
							</li>
							<li>~
								<code class="language-php">cookie_forget :</code>the time a user will remain logged in when not ticking "remember me" on login. Must respect PHP's <a href="http://php.net/manual/en/function.strtotime.php">strtotime</a> format.
							</li>
							<li>~
								<code class="language-php">cookie_renew :</code>the maximum time difference between session expiration and last page load before allowing the session to be renewed. Must respect PHP`s <a href="http://php.net/manual/en/function.strtotime.php">strtotime</a> format.
							</li>
							<li>~
								<code class="language-php">allow_concurrent_sessions :</code> Allow a user to have multiple active sessions (boolean). If false (default), logging in will end any existing sessions.
							</li>
							<li>~
								<code class="language-php">bcrypt_cost :</code> the algorithmic cost of the bcrypt hashing function, can be changed based on hardware capabilities
							</li>
							<li>~
								<code class="language-php">smtp :</code> <code class="language-php">0</code> to use sendmail for emails, <code class="language-php">1</code> to use SMTP.
							</li>
							<li>~
								<code class="language-php">smtp_debug :</code> <code class="language-php">0</code>  to disable SMTP debugging, <code class="language-php">1</code>  to enable SMTP debugging, useful when you are having email/smtp issues.
							</li>
							<li>~
								<code class="language-php">smtp_host :</code> hostname of the SMTP server
							</li>
							<li>~
								<code class="language-php">smtp_auth :</code> <code class="language-php">0</code>  if the SMTP server doesn't require authentication, <code class="language-php">1</code>  if authentication is required.
							</li>
							<li>~
								<code class="language-php">smtp_username :</code> the username for the SMTP server
							</li>
							<li>~
								<code class="language-php">smtp_password :</code> the password for the SMTP server
							</li>
							<li>~
								<code class="language-php">smtp_port :</code> the port for the SMTP server
							</li>
							<li>~
								<code class="language-php">smtp_security : </code> <code class="language-php">NULL</code> for no encryption, <code class="language-php">tls</code> for TLS encryption, <code class="language-php">ssl</code> for SSL encryption.
							</li>
							<li>~
								<code class="language-php">verify_password_min_length :</code> minimum password length, default is <code class="language-php">3</code>
							</li>
							<li>~
								<code class="language-php">verify_email_min_length :</code>  minimum EMail length, default is <code class="language-php">5</code>
							</li>
							<li>~
								<code class="language-php">verify_email_max_length :</code>  maximum EMail length, default is <code class="language-php">100</code>
							</li>
							<li>~
								<code class="language-php">verify_email_use_banlist :</code> use banlist while checking allowed EMails (see <code class="language-php">/files/domains.json</code>), default is <code class="language-php">1</code> (<code class="language-php">true</code>).
							</li>
							<li>~
								<code class="language-php">attack_mitigation_time :</code> time used for rolling attempts timeout, default is <code class="language-php">+30 minutes</code> Must respect PHP's <a href="">strtotime</a> format.
							</li>
						    <li>~
								<code class="language-php">attempts_before_verify :</code> maximum amount of attempts to be made within <code class="language-php">attack_mitigation_time</code>  before requiring captcha. Default is <code class="language-php">5</code>
							</li>
							<li>~
								<code class="language-php">attempt_before_ban :</code> maximum amount of attempts to be made within <code class="language-php">attack_mitigation_time</code> before temporally blocking the IP address. Default is <code class="language-php">30</code>
							</li>
							<li>~
								<code class="language-php">password_min_score :</code> the minimum score given by <a href="https://github.com/bjeavons/zxcvbn-php">zxcvbn</a> that is allowed. Default is <code class="language-php">3</code>
							</li>
							<li>~
								<code class="language-php">translation_source: </code> source of translation, possible values: 'sql' (data from <table_translations> will be used), 'php' (default, translations will be loaded from languages/<i>.php</i>), <i>'ini' (will be used languages</i>/.ini files)
							</li>
							<li>~
								<code class="language-php">table_translations :</code> name of table with translation for all messages
							</li>
							<li>~
								<code class="language-php">table_attempts :</code> name of table with all attempts (default is 'e_auth_attempts').
							</li>
							<li>~
								<code class="language-php">table_requests :</code> name of table with all requests (default is 'e_auth_requests')
							</li>
							<li>~
								<code class="language-php">table_sessions :</code> name of table with all sessions (default is 'e_auth_sessions').
							</li>
							<li>~
								<code class="language-php">table_users :</code>  name of table with all users (default is 'e_auth_users').
							</li>
							<li>~
								<code class="language-php">table_emails_banned :</code> name of table with all banned email domains (default is 'e_auth_emails_banned')
							</li>

								<code class="language-php">recaptcha_enabled :</code>  1 for Google reCaptcha enabled, 0 - disabled (default)
							</li>
							<li>~
								<code class="language-php">recaptcha_site_key :</code> string, contains public reCaptcha key (for javascripts).
							</li>
							<li>~
								<code class="language-php">recaptcha_secret_key :</code> string, contains secret reCaptcha key.
							</li>
							<ul class="pagination">
								<li class="disabled"><a href="#!"><i class="material-icons">left</i></a></li>
								<li></li>
							</ul>

							 
						</ul>
					</div>
				</div>


			</div>
		</div>

	</main>

	<!-- END MAIN -->
	<?php require 'inc/footer.php'; ?>
	<script type="text/javascript">
		$(document).ready(function() {
			// $(".button-collapse").sideNav();
		});
	</script>
</body>
</html>