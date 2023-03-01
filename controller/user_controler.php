<?php
 session_start();
include '../model/user.php';
$submit = $_POST[ 'btn_action' ];

if($submit=='login'){
    $tendn = addslashes($_POST['txt_tendn']);
    $matkhau = addslashes (($_POST['txt_matkhau']));

    $user = new user('','','','','','','','');
    $data=$user->getAllUser();
    foreach ( $data as $u ) {
        if($tendn==$u['TenDN']&&md5($matkhau)==$u['MatKhau']){
            $_SESSION[ 'is_user' ] = true;
            $_SESSION[ 'tendn' ] = $tendn;
            header( 'location: ../view/trangchu.php' );
            exit;
        }else if( addslashes( $_POST[ 'txt_tendn' ] == 'admin' ) &&  addslashes( $_POST[ 'txt_matkhau' ] == 'admin' ) ) {
            header( 'location: ../view/admin.php' );
        }
        else{
            var_dump($_POST);
            header( 'Location:../index.php' );
        }
    }
}   else if ( $submit == 'register' ) {
    $user=new user('',$_POST['txt_hoten'],$_POST['txt_sdt'],$_POST['txt_cccd'],$_POST['txt_email'],$_POST['txt_diachi'],$_POST['txt_tendn'],MD5($_POST['txt_matkhau']));
    $data = $user->getAllUser();
       if($data==null){
        $user->insertUser();
        header('location:../view/Welcome.php');
        }   
        else {
            foreach ( $data as $value ) {
                if ( $value[ 'TenDN' ] == $_POST['txt_tendn'] ) {
                    header( 'location:../index.php' );
                    exit;
                } else {
                    $user->insertUser();
                    header( 'location:../view/Welcome.php' );
                    exit;
                }
            }
        }
    }
?>