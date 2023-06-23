<?php
session_start();
$id=$_SESSION['det'];
include('include/header.php');
if(empty($id)){
    include('include/login.php');
}else{
    include('include/home.php');
}

include('include/footer.php');
?>