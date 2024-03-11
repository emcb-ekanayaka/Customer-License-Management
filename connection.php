<?php 

$conn = new mysqli("localhost","inetslcomngsl_user_license","RX?GFwdN4lge","inetslcomngsl_user_inetlicense");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

?>