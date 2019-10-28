<?php

include 'EAuth/Config.php';
include 'EAuth/Auth.php';

include 'process/conn.php';

$config = new EAuth\Config($pdo);
$auth = new EAuth\Auth($pdo,$config);

$user_info = $auth->getCurrentUser();

$firstname = $user_info['firstName'];
$middleName = $user_info['middleName'];
// $lastName = $userInfo['lastName'];
// $username = $userInfo['username'];
// $email = $userInfo['email'];
// $address = $userInfo['adress'];
// $gender = $userInfo['gender'];
// $accessLevel = $userInfo['accessLevel'];
// $photo = $userInfo['photo'];

// $fullName = $firstName." ".$middleName." ".$lastName;

// get session hash of the current logged user
$hAsh = $auth->getCurrentSessionHash();
?>