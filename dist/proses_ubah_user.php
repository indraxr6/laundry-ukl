<?php     
include 'koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$tlp = $_POST['tlp'];
$role = $_POST['id_role'];
$outlet = $_POST['id_outlet'];

$sql = "

UPDATE user
set nama = '".$nama."', username= '". $username . "', password= '". md5($password) . "', tlp= '". $tlp . "', id_role= '". $role . "', id_outlet= '". $outlet . "' where id = '".$id."'
;
";


$result =mysqli_query($conn,$sql);

if($result){

    echo "<script>alert('Berhasil update data');location.href='users.php';</script>";
   

}else{
    printf('Failed update data'.mysqli_error($conn));
    exit();
}
?>
