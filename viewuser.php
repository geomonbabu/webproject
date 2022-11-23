<?php
session_start();
require"config.php";
$id='';
$id=isset($_GET['id']);
$sql="SELECT * FROM register ORDER BY id ASC";
$result=$connect->query($sql);
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
    <div class="col">
        <div class="card my-3">
            <div class="card-body">
                <h1 class="text-center fs-4 mb-1">Customers Info</h1>
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Place</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Action</th>
                                </tr>

                                <tr>
                                    <?php
                                    $row = array();
                                    while ($row =  mysqli_fetch_assoc($result)){?>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['username'];?></td>
                                    <td><?php echo $row['age'];?></td>
                                    <td><?php echo $row['ph'];?></td>
                                    <td><?php echo $row['place'];?></td>
                                    <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary">Edit</a></td>
                                    <td><a href="remove.php?id=<?php echo $row['id'];?>" class="btn btn-outline-secondary">Remove</a></td>
                                </tr>
                        </div>
                    </div>
                </div>
                <?php
                 }
                 ?>



            </div>
        </div>
    </div>
</div>
</div>


</body>
</html>