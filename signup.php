<?php
session_start();
require"config.php";
if(isset($_POST['signup'])){
  $_SESSION['register'] = true;
  $name=$_POST['name'];
  $age=$_POST['age'];
  $ph=$_POST['ph'];
  $place=$_POST['place'];
  $username=$_POST['username'];
  $password=$_POST['password'];
   
  //photo upload
  $photo=$_FILES['photo']['name'];
  $temp=$_FILES['photo']['tmp_name'];
  $folder = "./uploads/" . $photo;

  /*check file exist or not
  if(file_exists($folder)){
  echo"File already exists";
  }*/

  //check email already exists
  $check=mysqli_query($connect,"SELECT username FROM register WHERE username='$username'");
  if(mysqli_num_rows($check)>0){
    echo"Username already exist";
  }
  else{
    $sql="INSERT INTO register(name,age,ph,place,username,password,photo)VALUES('$name','$age','$ph','$place','$username','$password','$photo')";
    $result=$connect->query($sql);
    move_uploaded_file($temp,$folder);
    header("location:login.php");
  } 
}
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>   


  <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-2 mx-1 mx-md-4">Sign up</p>

                <form class="mx-1 mx-md-4" method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" id="form3Example1c" class="form-control" placeholder="Your Name" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" name="age" id="form3Example3c" class="form-control" placeholder="Your Age" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" name="ph" id="form3Example4c" class="form-control" placeholder="Contact Number" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="place" id="form3Example4cd" class="form-control" placeholder="Your Place" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="username" id="form3Example4cd" class="form-control" placeholder="Username" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" id="form3Example4cd" class="form-control" placeholder="Password" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="file" name="photo" id="form3Example4cd" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-2">
                    <input type="submit" value="Create Account" name="signup" class="btn btn-primary" id="form2Example3c"/>
                  </div>
                  <div class="d-flex justify-content-center">Already have an account?<a href="login.php" class="text-decoration-none"> Sign In</a></div>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center justify-content-end order-1 order-lg-2">

                <img src="image/sign-up.jpg" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!--<div class="container mt-5 col-6">
      <div class="card">
          <div class="card-body">
            <h1 class="card-title text-center">Create Account</h1>
            <form method="POST" class="form-group" enctype="multipart/form-data">
              <div class="mt-2">
                <input type="text" name="name" class="form-control"  placeholder="Name" required>
              </div>
              <div class="mt-2">
                <input type="number" name="age" class="form-control"  placeholder="Age" required>
              </div>
              <div class="mt-2">
                <input type="number" name="ph" class="form-control"  placeholder="Phone" required>
              </div>
              <div class="mt-2">
                <input type="text" name="place" class="form-control" placeholder="Place" required>
              </div>
              <div class="mt-2">
                <input type="email" name="username" class="form-control"  placeholder="Username" required>
              </div>
              <div class="mt-2">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="mt-2">
                <input type="file" name="photo" class="form-control" id="photo" required>
              </div>
              <div class="d-flex justify-content-center mt-2">
                <input type="submit" name="signup" value="Create Account" class="btn btn-primary">
              </div>
              <div class="mt-2 text-center">
                <a href="login.php">Login</a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </body>
</html>