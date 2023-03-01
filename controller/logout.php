<?php
session_start();
if(isset($_SESSION['is_user'])){
    unset($_SESSION['is_user']);
    header ('location:../index.php'); 
}
else{
    header ('location:./index.php');
}
?>