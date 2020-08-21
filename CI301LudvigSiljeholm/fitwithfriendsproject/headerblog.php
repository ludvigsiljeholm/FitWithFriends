<?php
session_start();
require_once "includes/functions.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>💻Ludvig</title>
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    </head>
    <body>
    	<div id="wrapper">
    		<a id="top"></a>
    		<nav class="menu">
    		  <ul>
    			 <li><a href="index.php">Home</a></li>
                  <li><a href="weeklychallenges.php">Weekly Challenges</a></li>
                 <li class="link"><a href="blog.php">Blog</a></li>
    		     <li><a href="contact.php">Contact</a></li>
                 <?php
                 if (!isset($_SESSION["id"])) {
                    echo '<li><a href="signup.php">Sign up</a></li>';
                    echo '<li><a href="login.php">Log in</a></li>';
                 }
                 else {
                    echo '<li><a href="profile.php">Profile</a></li>';
                    echo '<li><a href="includes/logout.inc.php">Log out</a></li>';
                 }
                 ?>
    		  </ul>
    		</nav>
