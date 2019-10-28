<?php
include 'process/conn.php';
include 'session.php';

$hAsh = $auth->getCurrentSessionHash();

$auth->logout($hAsh);


session_unset();
session_destroy();
header("location:./");
?>