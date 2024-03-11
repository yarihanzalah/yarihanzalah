<?php 
session_start();
include 'config.php';
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from user where username='$username' and password='$password'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$cek = mysql_fetch_array($query);
        $_SESSION['username'] = $cek['username'];
        $_SESSION['id_level'] = $cek['id_level'];
        if($cek['id_level']=="A001"){
            header("location:../admin/home-admin.php");
        }else if($cek['id_level']=="A002"){
            header("location:../waiter/home-waiter.php");
        }else if($cek['id_level']=="A003"){
            header("location:../kasir/home-kasir.php");
        }else if($cek['id_level']=="A004"){
            header("location:../owner/home-owner.php");
        }else if($cek['id_level']=="A005"){
            header("location:../pelanggan/home-pelanggan.php");
        }
}else{
    header("location:../login.php?login=failed")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>