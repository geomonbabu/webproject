<?php
session_start();
require"config.php";
if($id=$_SESSION['id']){
    $cart_id=$_POST['deleteid'];
    $sql="DELETE FROM cart WHERE cart_id='$cart_id'";
    $result=$connect->query($sql);
}
?>