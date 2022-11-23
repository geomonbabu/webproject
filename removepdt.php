<?php
session_start();
require"config.php";
if (isset($_GET['pdt_id'])) {
    $id = $_GET['pdt_id'];
    $sql="DELETE FROM products WHERE pdt_id='$pdt_id'";
    $result=$connect->query($sql);
    if($result==true){?>
        <script type="text/javascript">
        alert("Product removed Successfully.");
        window.location = "viewproducts.php";
    </script><?php
    }
}

?>