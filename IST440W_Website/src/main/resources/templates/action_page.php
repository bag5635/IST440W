<?php
// Database configuration
$connect = mysql_connect(“blue-moon-whippets.cgcqol9kl31f.us-east-1.rds.amazonaws.com, 3306”, “root”, “watashi65”);

if (!connect) { die('Connection Failed: ' . mysql_error());

{ mysql_select_db(“bmwhippets”, $connect);

$user_info = “INSERT INTO Puppies (PuppieID, Gender, Color, Name, Pup_Description, Pup_image) VALUES ('$_POST[PuppieID]', '$_POST[Gender]', '$_POST[Color]', '$_POST[Name]', '$_POST[Pup_Description]', '$_POST[Pup_image]')”;
if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
?>

