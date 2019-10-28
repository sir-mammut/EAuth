<?php
   
   header('Content-type: application/json; charset=UTF-8');
   
   $errors = array();  //array that hold validation error
   $data = array();    //array that pass back data to ajax call.

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   	  
		include '../EAuth/Config.php';
		include '../EAuth/Auth.php';
		include 'conn.php';

		$config = new EAuth\Config($pdo);
		$auth = new EAuth\Auth($pdo, $config);

	  	$firstname = $_POST['firstname'];
	  	$lastname = $_POST['lastname'];
	  	$email = $_POST['email'];
	  	$mobile = $_POST['mobile'];
	  	$password = $_POST['password'];
	  	$confirm = $_POST['confirm'];
	  	//agree field will return boolean but, json has stringify it,so in here we will go with it as a string boolean value.
	  	$agree = $_POST['agree']; 
	  	$newsletter = $_POST['newsletter'];
	    $ip = $auth->getIp();

	    if (empty($_POST['firstname'])) {
	    	$errors['firstname'] = 'First Name must be between 1 and 32 characters!';
	    }
	    if (empty($lastname)) {
	    	$errors['lastname'] = 'Last Name must be between 1 and 32 characters!';
	    }
	    if (empty($email)) {
	    	$errors['email'] = 'E-Mail Address does not appear to be valid!';
	    }
	    if (empty($mobile)) {
	    	$errors['mobile'] = 'Moble number must be between 11 and 15 digit!';
	    }
	    if (empty($password)) {
	    	$errors['password'] = 'Password must be between 8 and 20 characters long!';
	    }
	    
	    if (empty($confirm)) {
	    	$errors['confirm'] = 'Re-enter your Password to cornfirm the Password!';
	    }
	    
	    //making string boolean value to integer
	    if ($agree == 'true') {
	    	$agre = 1;
	    }
	    if ($agree == 'false') {
	    	$agre = 0;
	    }
	    if ($newsletter == 'true') {
	    	$nl = 1;
	    }
	    if ($newsletter == 'false') {
	    	$nl = 0;
	    }

    	$register = $auth->register($email,$password,$confirm,$params = array(
        'firstName'     => $firstname,
        'lastName'      => $lastname,
        'mobile'        => $mobile,
        'newsletter'    => $nl,
        'ip'            => $ip
        ),$agre);

	    if ($register['error']) {
	        $errors['reg'] = $register['message'];
	    }

    	//return a response ====================================

    	if (!empty($errors)) {
    		//there are elements in errors array ,return those errors
    		$data['success'] = false;
    		$data['errors'] = $errors;
        
    	}else{
	        // $data['url'] = 'success.php';
    		$data['success'] = true;
    		$data['message'] = $register['message'];
	        $data['id'] = $auth->getUID($email);
    	}
    	echo json_encode($data);
   }