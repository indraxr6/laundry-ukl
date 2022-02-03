<?php     
include 'koneksi.php';

$id = $_GET['id'];
$date = date('d-m-y');

$sql = "
UPDATE transaksi
    set tgl_bayar = '". $date . "', dibayar= 'dibayar', status= 'selesai' where id = '".$id."'
    ;
";
    
$result =mysqli_query($conn,$sql);

if($result){

          echo "<script>alert('Berhasil konfirmasi ');location.href='transaksi.php';</script>";

}else{
    printf('Failed update data'.mysqli_error($conn));
    exit();
}
?>
