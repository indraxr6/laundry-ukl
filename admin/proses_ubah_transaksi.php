<?php     
include 'koneksi.php';

$id = $_GET['id'];
$id_transaksi = $_GET['id'];

// $member = $_POST['nama'];
// $qty = $_POST['qty'];
$tgl_bayar = $_POST['tgl_bayar'];
$batas = $_POST['batas_waktu'];
$dibayar = $_POST['dibayar'];
$status = $_POST['status'];

$sql = "
UPDATE transaksi
    set tgl_bayar= '". $tgl_bayar . "', batas_waktu= '". $batas . "', dibayar= '". $dibayar . "', status= '". $status . "' where id = '".$id."'
    ;
";
    
$result =mysqli_query($conn,$sql);

if($result){

          echo "<script>alert('Berhasil update data');location.href='transaksi.php';</script>";
        

}else{
    printf('Failed update data'.mysqli_error($conn));
    exit();
}
?>
