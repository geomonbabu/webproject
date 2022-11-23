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
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<?php
while($row=mysqli_fetch_array($result)){ 
?>


<section style="background-color: #D8A296;">
  <div class="container-fluid py-3">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4" style="background-color: #922B21  ;">
          <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item active fs-5 text-light" aria-current="page">User Profile</li>
            <li class="breadcrumb-item fs-5"><a href="update.php" class="text-decoration-none text-light">Update</a></li>
            <li class="breadcrumb-item fs-5"><a href="logout.php" class="text-decoration-none text-light">Logout</a></li> 
            <li class="breadcrumb-item fs-5"><a href="home.php" class="text-decoration-none text-light">Back</a></li> 
          </ol>
        </nav>
      </div>
    </div>

    <div class="row vh-100">
      <div class="col-lg-4">
        <div class="card mb-4 p-4">
          <div class="card-body text-center">
          <img src="<?php echo"uploads/".$row['photo'];?>" class="rounded-circle img-fluid" style="width: 100px;" />
            <h5 class="my-3 fs-4 fw-bold"><?php echo $row['name'];?></h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-2 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">https://www.linkedin.com/in/<?php echo $row['name'];?>/</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
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
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
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
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
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
</section>

<?php
}
?>


        


                                    
