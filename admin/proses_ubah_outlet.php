<?php     
include 'koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];

$sql = "
    UPDATE outlet
    set nama = '".$nama."', alamat= '". $alamat . "', tlp= '". $tlp . "' where id = '".$id."'
    ;
";

$result =mysqli_query($conn,$sql);

if($result){

          echo "<script>alert('Berhasil update data');location.href='tampil_outlet.php';</script>";

//           echo "<script>alert('Sukses ubah data')</script>";
//     header('Location: tampil_outlet.php');
   

}else{
    printf('Failed update data'.mysqli_error($conn));
    exit();
}
?>
