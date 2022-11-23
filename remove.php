<?php
session_start();
require"config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql="DELETE FROM register WHERE id='$id'";
    $result=$connect->query($sql);
    if($result==true){?>
        <script type="text/javascript">
        alert("Deleted Successfully.");
        window.location = "viewuser.php";
    </script><?php
    }
}

?>