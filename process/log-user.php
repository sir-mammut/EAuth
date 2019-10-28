<?php

header('Content-type: application/json; charset=UTF-8');

$errors = array();  //array that hold validation error
$data = array();  //array that pass back data to ajax call.


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	include '../EAuth/Config.php';
	include '../EAuth/Auth.php';

	include 'conn.php';

	$config = new EAuth\Config($pdo);
	$auth = new EAuth\Auth($pdo,$config);

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$remember = $_POST['remember'];

	if ($remember == 'true') {
		$rem = 1;
	}
	if ($remember == 'false') {
		$rem = 0;
	}
	$recap = 63536;

	$login = $auth->login($email, $pass, $remember);

	if ($login['error']) {
		$errors['log'] = $login['message'];
	}

	if (!empty($errors)) {
		$data['success'] = false;
		$data['errors'] = $errors;
	}else{
		$data['url'] = 'index.php';
		$data['success'] = true;
		$data['uid'] = $auth->getUID($email);
		$data['remember'] = $rem;
	}
	echo json_encode($data);
	

	
}
?>