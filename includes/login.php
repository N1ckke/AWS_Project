<?php
require "conn.php";
session_start();

if (isset($_SESSION['logged']) AND $_SESSION['logged'] === true) {
	header("Location: ../pages/");
	return;
}

$email = strtolower($_POST['email']);
$password = md5($_POST['password']);

if (!isset($email) || !isset($password)){
	header("location: ../pages/login/");
	return;
}

$sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$password'";
$res = $conn -> query($sql);

if ($res -> num_rows > 0) {
	$_SESSION['logged'] = true;
	header("location: ../pages/");
	return;
}

header("location: ../pages/login/");

$conn->close();
?>