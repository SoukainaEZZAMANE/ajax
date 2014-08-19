<?php

$login = $_POST['login'];
$password = $_POST['password'];

sleep(1);

if($login=='fabrice' && $password=='jquery') {
	echo 'OK';
}

?>