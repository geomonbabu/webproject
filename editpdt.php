<?php
session_start();
require"config.php";
if (isset($_GET['pdt_id'])) {
    $id = $_GET['pdt_id'];
$sql="SELECT * FROM products WHERE pdt_id='$id'";
$result=$connect->query($sql);
}


if(isset($_POST['editpdt'])){
    $name=$_POST['name'];
    $sku=$_POST['sku'];
    $price=$_POST['price'];
    $description=$_POST['description'];
   
    //photo upload
    $image=$_FILES['image']['name'];
    $temp=$_FILES['image']['tmp_name'];
    $folder = "./products/" . $image;
    if(move_uploaded_file($temp,$folder)){
    $query = "UPDATE products SET name='$name',sku='$sku',price='$price',description='$description',image ='$image' WHERE pdt_id='$id'";
    if($result=$connect->query($query)){?>
        <script type="text/javascript">
        alert("Product Updated Successfully.");
        window.location = "viewproducts.php";
    </script>
    <?php 
}
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add new products</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light fs-3" style="font-family:verdana;" href="#">Welcome Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light"  style="font-family:verdana;" aria-current="page" href="update.php">Update</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light"  style="font-family:verdana;" aria-current="page" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light"  style="font-family:verdana;" aria-current="page" href="admin.php">Back</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid" style="background-color: #ADD8E6;">
  <div class="row vh-100">
    <div class="col-lg-4">
        <div class="card my-3">
          <div class="card-body text-center">
            <img src="image/products.jpg">
            <a class="mb-4 btn btn-outline-primary btn-hover" href="viewproducts.php">Products List</a>
          </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card my-3">
          <div class="card-body">
            <img src="image/addpdt.png" class="rounded mx-auto d-block" style="width:53px;height:53px;" alt="Sample photo">
            <h3 class="pb-md-0 mb-md-5 text-center">Edit your product</h3>
            
            <form class="form-group" method="POST" enctype="multipart/form-data">

            <?php
                while($row=mysqli_fetch_array($result)){
                    ?>
                <input type="text" name="name" class="form-control mb-3" value="<?php echo $row['name'];?>">
                <input type="text" name="sku" class="form-control my-3" value="<?php echo $row['sku'];?>">
                <input type="number" name="price" class="form-control my-3" value="<?php echo $row['price'];?>">
                <input type="text" name="description" class="form-control my-3" value="<?php echo $row['description'];?>">
                <input type="file" name="image" class="form-control mt-3" value="<?php echo $row['image'];?>">
                <div class="d-flex justify-content-center">
                <input type="submit" name="editpdt" value="Update" class="btn btn-outline-primary btn-hover px-5 mt-2">
                </div> 

                <?php
                }
                ?>
            </form>

          </div>
        </div>
    </div>
    



  </div>
</div>

</body>
</html>