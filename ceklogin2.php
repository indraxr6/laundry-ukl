<?php
session_start();
$conn = mysqli_connect('localhost','root','','laundry');

$username = $_POST['username'];
$password = md5($_POST['password']);
$query = "SELECT * FROM user where username='$username' AND password = '$password'";
$row = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($row);
$cek = mysqli_num_rows($row);


if($cek > 0){
    if($data['id_role'] == '1'){
        $_SESSION['id_role'] = '1';
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['nama']=$dt_data['nama'];
        $_SESSION['status_login']=true; 
        header("location: admin/index.php");

    }else if($data['id_role'] == '2'){
        $_SESSION['id_role'] = '2';
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['nama']=$dt_data['nama'];
        $_SESSION['status_login']=true; 
        header("location: kasir/index.php");

}else{
    $msg = 'Username Atau Password Salah';
    header('location:index.php?msg='.$msg);
}
}
?>