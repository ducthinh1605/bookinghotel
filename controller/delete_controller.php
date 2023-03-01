<?php
include "../model/user.php";
    $makh=$_GET['id'];
    $user=new user($makh,"","","","","","","");
    $user->deleteUser($makh);
    header('location:../view/admin.php');
?>