<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style>
    .container{
        padding:100px 0px 0px 0px;
        width:400px;
    }
    .btn{
        width:100px;
    }
</style>
</head>
<body>

<div class="container">
    
     <div class="row">
      <div class="text-center">
        <h2>Login Form</h2> 
      </div>
     </div>

<div>
    <?php 
    if(@$_GET['Empty']==true)
    {
    ?>
    <div class="alert-secondary text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
    <?php
    }
    ?>


    <?php 
    if(@$_GET['Invalid']==true)
    {
    ?>
    <div class="alert-secondary text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
    <?php
    }
    ?>
</div>

<form action="/a_dmin4De_-v+04licens-e/process.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  
  <div class="form-text">forgotten username or password? <a href="#">contact-admin</a></div>
  
  <div class="row">
      <div class="text-end mt-2">
         <button name="Login" type="submit" class="btn btn-primary">Login</button> 
      </div>
      
  </div>
  
  
</form>
</div>

</body>
</html>
