<?php 
session_start();
print_r($_SESSION);
 session_destroy();
 header('location: index.php');
?>