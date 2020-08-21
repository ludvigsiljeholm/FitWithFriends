<?php

//Check for empty input
function emptyInputLogin($email, $pwd) {
	if (empty($email) || empty($pwd)) {
		header("location: ../login.php?error=emptyinput");
		exit();
	}
}

function emptyInputSignup($uid, $email, $pwd, $pwdrpt, $newsletter) {
	if (empty($email) || empty($pwd) || empty($uid) || empty($pwdrpt) || empty($newsletter)) {
		header("location: ../login.php?error=emptyinput");
		exit();
	}
}

//Check invalid username
function invalidUid($uid) {
	if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
		header("location: ../login.php?error=invaliduid");
		exit();
	}
}

//Check invalid email
function invalidEmail($email) {
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("location: ../login.php?error=invalidemail");
		exit();
	}
}

//Check if passwords matches
function pwdMatch($pwd, $pwdrpt) {
	if ($pwd !== $pwdrpt) {
		header("location: ../login.php?error=passwordsdontmatch");
		exit();
	}
}

//Show challenge data
function challengesData($user) {
	

	require_once "dbh.inc.php";
	
	$sql = "SELECT *, MAX(challengesNumber) FROM challenges WHERE challengesUserId=?;";
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "i", $user);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($result)) {
		return $row;

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}

//Compare challenge data
function challengesDataCompare() {
	
$array=[];
	require "dbh.inc.php";
	$sql1 = "SELECT * FROM currentchallenge;";
	$stmt1 = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt1, $sql1);
	mysqli_stmt_execute($stmt1);
	$result1 = mysqli_stmt_get_result($stmt1);
	if ($row1 = mysqli_fetch_assoc($result1)) {
		$currentchallengeNumber = $row1["currentchallengeNumber"];
		$sql2 = "SELECT * FROM challenges WHERE challengesNumber=$currentchallengeNumber ORDER BY challengesScore DESC;";
		$stmt2 = mysqli_stmt_init($conn);
		mysqli_stmt_prepare($stmt2, $sql2);
		mysqli_stmt_execute($stmt2);
		mysqli_stmt_bind_result($stmt2, $col1, $col2, $col3, $col4, $col5);
		$a=1;
		while (mysqli_stmt_fetch($stmt2)) {
			getRanking($col5, $col3, $a);
			$a++;
			
		}

		mysqli_stmt_close($stmt1);
		mysqli_stmt_close($stmt2);
		mysqli_close($conn);
	

	}

	
}
	function getRanking($col5, $col3, $a) {
		require "dbh.inc.php";
		$sql3 = "SELECT * FROM users WHERE usersId=$col5;";
		$stmt3 = mysqli_stmt_init($conn);
		mysqli_stmt_prepare($stmt3, $sql3);
		mysqli_stmt_execute($stmt3);
		$result3 = mysqli_stmt_get_result($stmt3);
		if ($row3 = mysqli_fetch_assoc($result3)) {
			

			if ($a == 1) {
				echo "<h1><a href='#firstplace'>" . $a . ". " . $row3["usersUid"] . " : " . $col3 . "</a></h1>";
			}

			elseif ($a == 2) {
				echo "<h1><a href='#secondplace'>" . $a . ". " . $row3["usersUid"] . " : " . $col3 . "</a></h1>";
			}

			elseif ($a == 3) {
				echo "<h1><a href='#thirdplace'>" . $a . ". " . $row3["usersUid"] . " : " . $col3 . "</a></h1>";
			}
		}

		

	}


	// Creating a log in system https://www.youtube.com/watch?v=LC9GaXkdxF8&t=5s Dani Krossing