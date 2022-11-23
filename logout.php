<?php
require"config.php";
session_start();
if(session_unset() && session_destroy()){     
    header("location:index.php");
}
?>
//session_unset - remove all session variables
//session_destroy - destroy session