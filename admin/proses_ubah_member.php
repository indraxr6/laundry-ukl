<?php     
include 'koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$gender = $_POST['jenis_kelamin'];
$tlp = $_POST['tlp'];

$sql = "
    UPDATE member
    set nama = '".$nama."', alamat= '". $alamat . "', jenis_kelamin= '". $gender . "', tlp= '". $tlp . "' where id = '".$id."'
    ;
";

$result =mysqli_query($conn,$sql);

if($result){

          echo "<script>alert('Berhasil update data');location.href='pelanggan.php';</script>";

//           echo "<script>alert('Sukses ubah data')</script>";
//     header('Location: tampil_outlet.php');
   

}else{
    printf('Failed update data'.mysqli_error($conn));
    exit();
}
?>
