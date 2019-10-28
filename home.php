<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Welcome | E-Auth</title>

	<meta name="description" content="E-Auth/ E-Auth Authentication" />
	<meta name="keywords" content="E-Auth, Auth, Authentication" />
	<!-- <base href="https://e-auth.ga"> -->
	<meta name="author" content="Mhizta Mammut">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="/images/banner.jpg" />
    <meta property="og:image:secure_url" content="/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="E-Auth" />
    <meta property="og:description" content="E-Auth is a secure php authentication class that easily integrates into any website." />

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

	<link rel="stylesheet" type="text/css" href="assets/prism/prism.css">
	<link rel="stylesheet" type="text/css" href="assets/font/css/all.css">
</head>
<body>
	<?php include 'inc/header.php'; ?>
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
	<main>
		<div class="container">
			<h3>Home</h3>
			<div class="row">
				<?php include 'inc/side.php'; ?>
				<div class="col s12 m9 l9">
					<div class="card-panel">
						<h5>About E-Auth</h5><br>
						<p>E-Auth is a secure user authentication class for PHP websites, using a powerful <b>password hashing system</b> and <b>attack blocking</b> to keep your website and users secure.</p><br>
						<h5>E-Auth Features</h5>
						<ol>
							<li>
								<p>Authentication by Email and Password Combination.</p>
							</li>
							<li>
								<p>Uses <a href="http://wikipedia.org/wiki/Bcrypt">Bcrypt</a> to hash passwords ( a secure algorithm that uses an expensive key setup phase).</p>
							</li>
							<li>
								<p>It uses an individual 128bit salt for each user, pulled from <code class="language-html">/dev/urandom</code> making rainbow table useless.</p>
							</li>
							<li>
								<p>It uses PHP's <a href="http://php.net/manual/en/book.pdo.php">PDO</a> (which support 12 different database) interface and uses prepared statements (meaning an efficient system, resilent against SQL injection).</p>
							</li>
							<li>
								<p>Blocks (or varify) attackers by using IP for any defined time after any amount of failed action on the portal.</p>
							</li>
							<li>
								<p>No plain text passwords are sent or stored by the system</p>
							</li>
							<li>
								<p>Integrates easily into most existing websites , and can be a great starting point for new projects.</p>
							</li>
							<li>
								<p>Easy configuration  of multiple parameters.</p>
							</li>
							<li>
								<p>It allows sending emails via SMTP or sendmail.</p>
							</li>
							<li>
								<p>It blocks disposable email addresses from registration.</p>
							</li>
							<li>
								<p>It supports 29 message languages including <a href="#">Hausa</a></p>
							</li>
						</ol><br>

						<h5>Users Action on the Portal</h5>
						<ol>
							<li>
								<p>Login</p>
							</li>
							<li>
								<p>Register</p>
							</li>
							<li>
								<p>Activate Account</p>
							</li>
							<li>
								<p>Resend Activation email</p>
							</li>
							<li>
								<p>Reset password</p>
							</li>
							<li>
								<p>Change Password</p>
							</li>
							<li>
								<p>Change email address</p>
							</li>
							<li>
								<p>Logout</p>
							</li>
							<li>
								<p>Delete Account</p>
							</li>
						</ol>
						<h5>Requirements</h5>
						<p>- PHP 7.0+</p>
						<p>- MySQL/MariaDB database, or PostGreSQL database</p><br>
						<p>To see how to configure the class <a href="login.php?attempt=1">Login</a> or <a href="register.php?dafault=101">Register</a></p><br>

						<h5>How to secure a page.</h5>
						<p>making a page accessible only to authenticated users is quick and easy, requiring only a few lines of code at the top of the page:</p>
<pre class="line-numbers">
<code class="language-php" data-language="php">
&lt;?php
	#Including Authentication Classes.
	include("Config.php");
	include("Auth.php");

	#Initializing database connection
	$pdo = new PDO("mysql:host=localhost;dbname=eauth","username","password");

	$config = new EAuth\Config($pdo);
	$auth = new EAuth\Auth($pdo,$config);

	if(!$auth->isLogged()){
		header('HTTP/1.0 403 Forbidden');

		exit();
    }
	
?&gt;
</code>
</pre>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php require 'inc/footer.php'; ?>
	<script type="text/javascript" src="assets/prism/prism.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			// $(".button-collapse").sideNav();
		});
	</script>
</body>
</html>