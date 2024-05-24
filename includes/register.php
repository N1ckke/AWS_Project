<?php
require "conn.php";
session_start();

if (isset($_SESSION['logged']) AND $_SESSION['logged'] === true) {
	header("Location: ../pages/");
	return;
}

$email = strtolower($_POST["email"]);
$password = md5($_POST["password"]);

if (!isset($email) || !isset($password)) {
	header("location: ../pages/register/");
}

$sql = "SELECT * FROM utenti WHERE email ='$email'";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
	header("location: ../pages/register/index.php");
	return;
}

$sql = "INSERT INTO utenti(email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
	$_SESSION['logged'] = true;
	header("location: ../pages/");
	return;
}

header("location: ../pages/register/");

$conn->close();
?>