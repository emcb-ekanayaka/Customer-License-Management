<?php
require_once('connection.php');
if (isset($_GET['id'])) {  
    
    $id = $_GET['id'];  
    $query = "DELETE FROM licensetable WHERE id = '$id'";
    $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:viewlicense.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?> 