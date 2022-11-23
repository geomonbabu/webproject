<?php
session_start();
require"config.php";

        $id=$_SESSION['id'];
        $pdt_id =$_POST['pdt_id'];
        $quantity=$_POST['quantity'];
        $query="INSERT INTO cart(id,pdt_id,quantity)VALUES($id,$pdt_id,$quantity)";
        if($result=$connect->query($query)){?>

            <script type="text/javascript">
            alert("Product added to cart Successfully.");
            window.location = "productdetail.php?pdt_id=<?php echo $pdt_id;?>";
            </script>
         <?php
    }

?>








