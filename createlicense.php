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

<div>
    <?php 
    if(@$_GET['Valid']==true)
    {
    ?>
    <div id="myAlert" class="alert-secondary text-light bg-success text-center py-3"><?php echo $_GET['Valid'] ?></div>                                
    <?php
    }
    ?>

    <?php 
    if(@$_GET['Invalid']==true)
    {
    ?>
    <div  id="errorAlert" class="alert-secondary text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
    <?php
    }
    ?>
</div>



<div class="container">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid  text-center">
        <a class="navbar-brand " href="#">I-NET SYSTEMS AND SOLUTIONS</a>
      </div>
    </nav>
</div>


<form action="/a_dmin4De_-v+04licens-e/savelicense.php" method="post">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
      <input type="text" class="form-control" id="customerName" placeholder="Enter Here" name="customerName" required>
    </div>
    
    <div class="row">
       
        <div class="col-lg-6">
             <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">License Type</label>
              <input type="text" class="form-control" id="licenseType" placeholder="Enter Here" name="licenseType" required>
            </div>
        </div>
        <div class="col-lg-6">
             <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">License Number</label>
              <input type="text" class="form-control" id="licenseNumber" placeholder="Enter Here" name="licenseNumber" required>
            </div>
        </div>

    </div>
    
    <div class="row">
       
        <div class="col-lg-6">
             <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Activated Date</label>
              <input type="date" class="form-control" id="activatedDate" placeholder="Enter Here" name="activatedDate" required>
            </div>
        </div>
        <div class="col-lg-6">
             <div class="mb-3">
              <label for="licenseExpiry" class="form-label">License Expiry</label>
              <select class="form-select" id="licenseExpiry" name="licenseexpiry" onchange="licenseChange()">
                  <option selected>Select - Yes / No</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
            </select>
            </div>
        </div>

    </div>
    
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea  class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    
    <div class="row">
      <div class="text-end mt-2">
         <a href='logout.php' class="logoutbtn btn btn-danger"><i class="bi bi-box-arrow-left"> LogOut</i></a>
         <button class="viewTble btn btn-primary"><a href='viewlicense.php' id="viewTable">Table</a></button> 
         <button type="submit" class="submit btn btn-dark" name="Submit" >Submit</button> 
      </div>
  </div>
  
</form>
</div>

<script src="https://inetsl.com/a_dmin4De_-v+04licens-e/js/licensescript.js"></script>
</body>
</html>