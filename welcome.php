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
<title>Welcome</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://inetsl.com/a_dmin4De_-v+04licens-e/style/welcomestyle.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container mainBody">
    
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand " href="#">I-NET SYSTEMS AND SOLUTIONS</a>
      </div>
    </nav>
    

    <div class="card">
         
          <div class="card-body">
            
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="image/1.jpg">
                </div>
                <div class="carousel-item">
                  <img src="image/2.jpg" >
                </div>
              </div>
            </div>  
              
              
            <div class="row pt-1">
                <div class="col-lg-12 text-center">
                <button class="addLicense btn btn-dark"><i class="bi bi-file-earmark-plus"></i><a href='createlicense.php' id="addLicense"> Add License</a></button>
                <button class=" viewtable btn btn-warning"><i class="bi bi-table"></i> <a href='viewlicense.php' id="viewTable"> View License</a> </button>
                <a href='logout.php' class="btn btn-danger"><i class="bi bi-box-arrow-left"></i> Log-Out</a>
                </div>
                
            </div>
          </div>
    </div>

    
</div>
</body>
</html>
