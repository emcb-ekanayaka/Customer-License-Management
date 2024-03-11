<?php
session_start();
    if($_SESSION['User'] == 'userAdmin'){
      
        if(isset($_SESSION['User']) && !empty($_SESSION['User'])){
            
        }else{
            header("location:index.php");
        }  
    }else{
        header("location:index.php");
    }

?>

<?php
include 'connection.php';
$index = $_GET['updateid'];
$sql = "Select * from licensetable where id=$index";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$customername = $row['customer_name'];
$licensetype = $row['license_type'];
$licensenumber = $row['license_number'];
$activateddate = $row['activated_date'];
$licenseexpiry = $row['license_expiry'];
$description = $row['description'];
echo "<script>console.log('Debug Objects: " .$index. "' );</script>";

if(isset($_POST['Submit'])){
    
    $ID =  $_POST['ID'];
    $customerName =  $_POST['customerName'];
    $licenseType =  $_POST['licenseType'];
    $licenseNumber =  $_POST['licenseNumber'];
    $activatedDate =  $_POST['activatedDate'];
    $licenseexpiry =  $_POST['licenseexpiry'];
    $description =  $_POST['description'];
    
    $sql = "UPDATE licensetable SET id='$ID', customer_name='$customerName',license_type='$licenseType', license_number='$licenseNumber', activated_date='$activatedDate',license_expiry='$licenseexpiry', description='$description'
    WHERE id=$ID";
    
    $result=mysqli_query($conn,$sql);
   
    if($result){
         header("location:viewlicense.php");
    }else{
        
        die('Your Getting Error : '.mysqli_error($con));
    }
}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://inetsl.com/a_dmin4De_-v+04licens-e/style/style.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">

<div class="container">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid  text-center">
        <a class="navbar-brand " href="#">I-NET SYSTEMS AND SOLUTIONS</a>
      </div>
    </nav>
</div>


<form action="/a_dmin4De_-v+04licens-e/update.php" method="post">
    <div class="row mb-3">
        <div class="col-lg-2">
          <label for="exampleFormControlInput1" class="form-label">CID</label>
          <input type="text" class="form-control" id="ID"  name="ID" required value=<?php echo $id?> >
        </div>
        <div class="col-lg-10">
          <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
          <input type="text" class="form-control" id="customerName" placeholder="Enter Here" name="customerName" required value=<?php echo $customername?> >
        </div>
    </div>
    
    <div class="row">
       
        <div class="col-lg-6">
             <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">License Type</label>
              <input type="text" class="form-control" id="licenseType" placeholder="Enter Here" name="licenseType" required value=<?php echo $licensetype?> >
            </div>
        </div>
        <div class="col-lg-6">
             <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">License Number</label>
              <input type="text" class="form-control" id="licenseNumber" placeholder="Enter Here" name="licenseNumber" required value=<?php echo $licensenumber?> >
            </div>
        </div>

    </div>
    
    <div class="row">
       
        <div class="col-lg-6">
             <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Activated Date</label>
              <input type="date" class="form-control" id="activatedDate" placeholder="Enter Here" name="activatedDate" required value=<?php echo $activateddate?> >
            </div>
        </div>
        <div class="col-lg-6">
             <div class="mb-3">
              <label for="licenseExpiry" class="form-label">License Expiry</label>
            
            <select class="form-select" id="licenseExpiry" required name="licenseexpiry" onchange="licenseChange()">
                <option <?php echo ($licenseexpiry == 'yes') ? 'selected' : ''; ?> value="yes">Yes</option>
                <option <?php echo ($licenseexpiry == 'no') ? 'selected' : ''; ?> value="no">No</option>
            </select>
            </div>
        </div>

    </div>
    
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea  class="form-control" id="description" name="description" rows="3" value=<?php echo $description?>></textarea>
    </div>
    
    <div class="row">
      <div class="text-end mt-2">
         <a href='logout.php' class="logoutbtn btn btn-danger"><i class="bi bi-box-arrow-left"> LogOut</i></a>
         <button class="viewTble btn btn-primary"><a href='viewlicense.php' id="viewTable">Table</a></button> 
         <button type="submit" class="btn btn-primary" name="Submit" >Update</button> 
      </div>
  </div>
  
</form>
</div>

<script src="https://inetsl.com/a_dmin4De_-v+04licens-e/js/licensescript.js"></script>
</body>
</html>