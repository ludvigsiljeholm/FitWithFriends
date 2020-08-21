<?php
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
	
	$email = $_POST["email"];
	$pwd = $_POST["pwd"];

	require_once "dbh.inc.php";

	emptyInputLogin($email, $pwd);
	
	$sql = "SELECT * FROM users WHERE usersUid=? OR usersEmail=?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../login.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $email, $email);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($result)) {
		$pwdCheck = password_verify($pwd, $row["usersPwd"]);
		if ($pwdCheck === false) {
			header("location: ../login.php?error=incorrectlogin");
			exit();
		}
		elseif ($pwdCheck === true) {
			session_start();
			$_SESSION["id"] = $row["usersId"];
			$_SESSION["uid"] = $row["usersUid"];
			header("location: ../index.php");
			exit();
		}
	}
	else {
		header("location: ../login.php?error=incorrectlogin");
		exit();
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("location: ../login.php");
    exit();
}