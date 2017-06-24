<?php 

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$connect = new mysqli($servername, $username, $password, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
  )";
 ?>
