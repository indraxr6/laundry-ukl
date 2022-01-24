<?php
if($_POST){
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $outlet=$_POST['id_outlet'];

   

    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='add_outlet.php';</script>";
 
    } elseif(empty($harga)){
        echo "<script>alert('password tidak boleh kosong');location.href='add_outlet.php';</script>";
        
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into paket (nama, jenis, harga, id_outlet) value ('".$nama."','".$jenis."','".$harga."','".$outlet."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan paket');location.href='paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan paket');location.href='paket.php';</script>";
        }
    }  
}
?>
