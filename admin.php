
<?php
session_start();
require"config.php";
$id=$_SESSION['id'];
$sql="SELECT * FROM register WHERE id='$id'";
$result=$connect->query($sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
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
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="container-fluid" style="background-color: #ADD8E6;">


<?php
while($row=mysqli_fetch_array($result)){
  ?>
  <div class="row vh-100">
    <div class="col-lg-4">
        <div class="card my-3">
          <div class="card-body text-center">
          <img src="<?php echo"uploads/".$row['photo'];?>" class="rounded-circle img-fluid" style="width: 100px;" />
            <h5 class="my-3 fs-4 fw-bold"><?php echo $row['name'];?></h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary text-light">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
     </div>
     <div class="card my-3 mb-lg-0">
          <div class="card-body p-0">
            <h2 class="text-center fs-5">Reach Out</h2>
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-center align-items-center p-3">
                <i class="fas fa-globe fa-lg text-primary">https://www.linkedin.com/in//</i>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card my-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 fw-semibold">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0 fw-bold text-dark"><?php echo $row['name'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 fw-semibold">Username</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0 fw-bold text-dark"><?php echo $row['username'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 fw-semibold">Age</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0 fw-bold text-dark"><?php echo $row['age'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 fw-semibold">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0 fw-bold text-dark"><?php echo $row['ph'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 fw-semibold">Place</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0 fw-bold text-dark"><?php echo $row['place'];?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-2 text-center"><span class="text-dark fs-5 fw-bold">Take a look</span>*****
                </p>
                <a href="viewuser.php" class="mb-1 fs-6 btn btn-outline-primary">View Users</a>
                <a href="viewproducts.php" class="mb-1 fs-6 btn btn-outline-primary">Products List</a>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                 <p class="mb-2 text-center"><span class="text-dark fs-5 fw-bold">Take a move</span>*****
                </p>
                <a href="addproducts.php" class="mb-1 fs-6 btn btn-outline-primary">Add Product</a>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php
}
?>

</div>
  
</body>
</html>