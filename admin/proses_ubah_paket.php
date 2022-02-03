<?php     
include 'koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$outlet = $_POST['id_outlet'];

$sql = "
    UPDATE paket
    set nama = '".$nama."', jenis= '". $jenis . "', harga= '". $harga . "', id_outlet= '". $outlet . "' where id = '".$id."'
    ;
";

$result =mysqli_query($conn,$sql);

if($result){

          echo "<script>alert('Berhasil update data');location.href='paket.php';</script>";

}else{
    printf('Failed update data'.mysqli_error($conn));
    exit();
}
?>
