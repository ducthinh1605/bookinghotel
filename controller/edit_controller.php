<?php
include '../model/user.php';
if(isset($_POST['edit'])){
    
    $makh = $_POST['txt_makh'];
    $hoten=$_POST['txt_hoten'];
    $diachi=$_POST['txt_diachi'];
    $sdt=$_POST['txt_sdt'];
    $email=$_POST['txt_email'];
    $cccd=$_POST['txt_cccd'];
    $user = new user("",$hoten,$sdt,$cccd,$email,$diachi,"","");
    $data = $user->getAllUser();
    foreach ( $data as $value ) {
        if ( $value[ 'cccd' ] == $_POST['txt_cccd'] || $value[ 'email' ] == $_POST['txt_email']  ) {
            echo 'Trung so cccd hoac email';
            // $str=$sdt;
            // echo strlen($sdt);
            // var_dump($data);
            exit;
        } else {
            $data = $user->updateUser($makh);
            header('location: ../view/admin.php');
            exit;
        }
    }
    
}
 // if($user->kiemtraCCCD($cccd)==true){
    //     echo'trung cccd';
    // }
    // else{
    //     $data = $user->updateUser($makh);
    //     header('location: ../view/admin.php');

?>