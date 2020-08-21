<?php
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
	
	$uid = $_POST["uid"];
	$email = $_POST["email"];
	$pwd = $_POST["pwd"];
	$pwdrpt = $_POST["pwdrpt"];
	$newsletter = $_POST["newsletter"];

	require_once "dbh.inc.php";

	emptyInputSignup($uid, $email, $pwd, $pwdrpt, $newsletter);
	invalidUid($uid);
	invalidEmail($email);
	pwdMatch($pwd, $pwdrpt);

	$sql = "SELECT usersUid FROM users WHERE usersUid=?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	} 

	mysqli_stmt_bind_param($stmt, "s", $uid);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	$resultCount = mysqli_stmt_num_rows($stmt);
	mysqli_stmt_close($stmt);

	if ($resultCount > 0) {
		header("location: ../signup.php?error=usernametaken");
		exit();
	}

	$sql = "INSERT INTO users (usersUid, usersEmail, usersPwd, usersNl) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	} 

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $uid, $email, $hashedPwd, $newsletter);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../signup.php?error=none");
	exit();
	
} else {
	header("location: ../signup.php");
    exit();
}