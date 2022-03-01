<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    
  
    
    if(empty($nama)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='add_member.php';</script>";
 
    } elseif(empty($tlp)){
        echo "<script>alert('username tidak boleh kosong');location.href='add_member.php';</script>";
 
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$gender."','0".$tlp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='add_member.php';</script>";
        }
    }  
}
?>
