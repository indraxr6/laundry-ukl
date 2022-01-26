<?php
include 'koneksi.php';
// if (isset($_POST["submit"])) {
if($_POST){
    
    $id_outlet = $_POST['id_outlet'];
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $paket = $_POST['id_paket'];
    $jenis= $_POST['jenis'];
    $id_user = $_POST['id_user'];
    $tgl = $_POST['tgl'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $dibayar = $_POST['dibayar'];
    $batas_waktu = $_POST['batas_waktu'];
    $status = $_POST['status'];
//     $tgl_bayar = $_POST['tgl_bayar'];

    $total = 0;
   
    for ($i=0; $i < count(array($paket)); $i++) { 
    // select transaksi
        $id_paket = $paket[$i];
        $sql = "select * from paket where id ='$id_paket'";
        $hasil = mysqli_query($conn, $sql);
        $laund = mysqli_fetch_array($hasil);
        $harga = $laund['harga'];
        if ($jenis == 'Paket Kering Wangi') {
            $harga += 0;
        } else if($paket == 'Paket Kering Wangi') {
            $harga += 1500;
        } else if($paket == 'Shoe Cleaner'){
            $harga += 500;
        } else if($paket == 'Spesial Baju Jamuranz'){
          $harga += 2000;
        
        $total += $qty * $harga;
    }
}
    // $total_bayar = $biaya_transaksi*$batas_waktu;
    # perintah SQL untuk insert ke table transaksi
    $insert=mysqli_query($conn,"insert into transaksi (id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user, id_outlet, total) value ('".$nama."','".$tgl."','".$batas_waktu."','".$tgl_bayar."','".$status."','".$dibayar."','".$id_user."','".$id_outlet."','".$total."')") or die(mysqli_error($conn));

    if($insert){
        echo "<script>alert('Sukses menambahkan transaksi');location.href='transaksi.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan transaksi');location.href='add_transaksi.php';</script>";
    }
  


//     if (mysqli_query($conn, $sql)) {
//         # jika berhasil insert ke tabel transaksi
//         # insert ke tabel detail transaksi
//         for ($i=0; $i < count($paket); $i++) { 
//             $id_paket = $paket[$i];
        
//             $insert=mysqli_query($conn,"insert into detil_transaksi (id_transaksi, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user, id_outlet, total) value ('".$nama."','".$tgl."','".$batas_waktu."','".$tgl_bayar."','".$status."','".$dibayar."','".$id_user."','".$id_outlet."','".$total."')") or die(mysqli_error($conn));

//     if($insert){
//         echo "<script>alert('Sukses menambahkan transaksi');location.href='transaksi.php';</script>";
//     } else {
//         echo "<script>alert('Gagal menambahkan transaksi');location.href='add_transaksi.php';</script>";
//     } 
            
//             }else {
//                 # jika gaga insert ke table detail_transaksi
//                 echo mysqli_error($conn);
//                 exit;
//             }
//         }
//         header('Location: transaksi.php');
//     }else{
//         # jia gagal insert tabel transaksi
//         echo mysqli_error($conn);
//     }
// }
// }else if(isset($_POST["edit_transaksi"])){
//     $id_transaksi = $_POST["id_transaksi"];
//     $id_member = $_POST["id_member"];
//     $id_user = $_POST["id_user"];    
//     $tgl_laundry = $_POST["tgl_laundry"];
//     $batas_waktu = $_POST["batas_waktu"];
//     $status = $_POST["status"];
//     $pembayaran = $_POST["pembayaran"];
//     $kategori = $_POST["kategori"];
//     $qty = $_POST["qty"];
//     $total = $_POST["total"];


//     $sql = "update transaksi set 
//     status='$status',pembayaran='$pembayaran'
//     where id_transaksi='$id_transaksi'";
        
//         $edit = mysqli_query($connect, $sql);
        
//         if ($edit) {
//             header('Location:list-transaksi.php');
//         } else {
//             printf('Gagal'.mysqli_error($connect));
//             exit();
//         }
// 
}

?>