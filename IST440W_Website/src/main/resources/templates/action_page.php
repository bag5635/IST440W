<?php
$connect = mysql_connect(“blue-moon-whippets.cgcqol9kl31f.us-east-1.rds.amazonaws.com”, “root”, “watashi65”); if (!connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db(“bmwhippets”, $connect);

$user_info = “INSERT INTO Puppies (PippieID, Gender, Color, Pup_Name, Pup_Description, Pup_image) VALUES ('$_POST[PuppieID]', '$_POST[Gender]', '$_POST[Color]', '$_POST[Pup_Name]', '$_POST[Pup_Description]', '$_POST[Pup_image]')”; if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

echo “Your information was added to the database.”;

mysql_close($connect); ?>