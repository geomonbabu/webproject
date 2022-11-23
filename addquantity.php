<?php
session_start();
require"config.php";

        $id=$_SESSION['id'];
        if (isset($_SESSION['id'])) {
            $cartid=$_POST['cartid'];
            $quantity=$_POST['cartqty'];
            $price=$_POST['cartprice'];
            $subtotal=$price*$quantity;
            $sql = "UPDATE cart SET quantity = '$quantity' ,subtotal = '$subtotal' WHERE cart_id = $cartid";
            $result=$connect->query($sql);
            if ($result) {
                echo $subtotal;
                            } }
        ?> 
        