<?php
require_once('connection.php');
if (isset($_POST['Submit'])) {
    $customerName = $_POST["customerName"];
    $licenseType = $_POST["licenseType"];
    $licenseNumber = $_POST["licenseNumber"];
    $activatedDate = $_POST["activatedDate"];
    $licenseexpiry = $_POST["licenseexpiry"];
    $description = $_POST["description"];


    $sql = "INSERT INTO licensetable (customer_name, license_type, 	license_number, activated_date, license_expiry, description)
    VALUES ('$customerName', '$licenseType', '$licenseNumber', '$activatedDate', '$licenseexpiry','$description')";

    if ($conn->query($sql) === TRUE) {
            header("location:createlicense.php?Valid=Record added successfully");
           
    } else {
            
            header("location:createlicense.php?Invalid=Server is busy.. please contact the admin");
    }

}


$conn->close();
?>