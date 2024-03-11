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
   
    $num_per_page=05;
    if(isset($_GET["page"])){
        $page=$_GET["page"];
    }else{
        $page=1;
    }

    $start_from=($page-1)*05;
    $query = "SELECT * FROM licensetable LIMIT $start_from,$num_per_page";
    
    $result=mysqli_query($conn,$query);
?>

<?php

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $sql = "
	SELECT * FROM licensetable 
	WHERE id LIKE '%".$search."%'
	OR customer_name LIKE '%".$search."%' 
	OR license_type LIKE '%".$search."%'
	OR license_number LIKE '%".$search."%' 
	OR activated_date LIKE '%".$search."%' 
	OR license_expiry LIKE '%".$search."%'
	OR description LIKE '%".$search."%'
	";

    $result = $conn->query($sql);
}


?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="/a_dmin4De_-v+04licens-e/style/viewstyle.css" />

</head>
<body>

<div class="container">
    <div class="row">
    
            <div class="col-lg-6">
                
                
                <form method="post" action="">
                    <label for="search">Search by Customer Name:</label>
                    <input type="text" id="search" name="search">
                    <input type="submit" value="Search">
                </form>
            </div>
            
            <div class="col-lg-6">
                <div class="text-end">
                  <button class="addbtn btn btn-dark" ><a href="createlicense.php" id="addLicense">Add License</a></button>
                </div>
            </div>

    </div>

<?php

if ($result->num_rows > 0) {
    echo "<table class=\"table \" border='1'>
            <tr>
                
                <th>Customer Name</th>
                <th>License Type</th>
                <th>License Number</th>
                <th>Activated Date</th>
                <th>License Expiry</th>
                <th>Story</th>
                <th>Modify</th>
            </tr>";


    while($rows = mysqli_fetch_array($result)) {
        
        $id = $rows['id'];
        $customername = $rows['customer_name'];
        $licensetype = $rows['license_type'];
        $licensenumber = $rows['license_number'];
        $activateddate = $rows['activated_date'];
        $licenseexpiry = $rows['license_expiry'];
        $description = $rows['description'];
        
        echo "<tr>
                <td>$customername</td>
                <td>$licensetype</td>
                <td>$licensenumber</td>
                <td>$activateddate</td>
                <td>$licenseexpiry</td>
                <td>$description</td>
                <td>
                    <a class=\"btn\" href=\"update.php?updateid=" . htmlspecialchars($id) . "\"><i class=\"bi bi-gear\"></i></a>
                    <a class=\"btn\" href=\"delete.php?id=" . htmlspecialchars($id) . "\"><i class=\"bi bi-trash\"></i></a>
                </td>
            </tr>";
    }

        echo "</table>";
} else {
    echo "0 results";
}

?>

<?php
$num_per_page=05;
$countQuery = "SELECT * FROM licensetable";
$countResult = mysqli_query($conn, $countQuery);
$total_records=mysqli_num_rows($countResult);
$total_pages=ceil($total_records/$num_per_page);

for($i=1; $i<=$total_pages; $i++){
    
    echo "<a class=\"btn btn-light\" href='viewlicense.php?page=".$i."'>".$i."</a>";
    
}

?>
</div>
</body>
</html>