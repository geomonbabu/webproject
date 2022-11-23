<?php
session_start();
require"config.php";
  $id=$_SESSION['id'];
  $sql="SELECT * FROM register WHERE id='$id'";
  $result=$connect->query($sql);

  if(isset($_POST['update'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $ph=$_POST['ph'];
    $place=$_POST['place'];
    
    //photo upload
    $photo=$_FILES['photo']['name'];
    $temp=$_FILES['photo']['tmp_name'];
    $folder = "./uploads/" . $photo;
    if(move_uploaded_file($temp,$folder)){
    $query = "UPDATE register SET name='$name',age='$age',ph='$ph',place='$place', photo ='$photo' WHERE id='$id'";
    if($result=$connect->query($query)){?>
        <script type="text/javascript">
        alert("Updated Successfully.");
        window.location = "profile.php";
    </script>
    <?php
}
}
}
?>
    

<!--html code-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 col-6">
      <div class="card">
          <div class="card-body">
            <h1 class="card-title text-center">Update your profile</h1>
            <?php
                while($row=mysqli_fetch_array($result)){
                    ?>
            <img src="<?php echo"uploads/".$row['photo'];?>" style="border-radius: 50%;width: 100px;" class="d-block mx-auto">
            <form method="POST" class="form-group" enctype="multipart/form-data">
              <div class="mt-2">
                <input type="text" name="name" class="form-control"  value="<?php echo $row['name'];?>">
              </div>
              <div class="mt-2">
                <input type="number" name="age" class="form-control"  value="<?php echo $row['age'];?>">
              </div>
              <div class="mt-2">
                <input type="number" name="ph" class="form-control"  value="<?php echo $row['ph'];?>">
              </div>
              <div class="mt-2">
                <input type="text" name="place" class="form-control" value="<?php echo $row['place'];?>">
              </div>
              <div class="mt-2">
                <input type="file" name="photo" class="form-control" id="photo">
              </div>
              <div class="d-flex justify-content-center mt-2">
                <input type="submit" name="update" value="Update" class="btn btn-success btn-lg">
              </div>
              <?php
                }
                ?>
              <div class="mt-2 text-center">
                <a href="viewuser.php" class="link-primary fw-semibold fs-6 text-decoration-none">Back</a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </body>
</html>