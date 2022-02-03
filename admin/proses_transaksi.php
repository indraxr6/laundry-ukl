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
    // $tgl_bayar = $_POST['tgl_bayar'];
    // $dibayar = $_POST['dibayar'];
    $batas_waktu = $_POST['batas_waktu'];
    $status = $_POST['status'];

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
        } else if($paket == 'Paket Kering Wan   gi') {
            $harga += 2000;
        } else if($paket == 'Shoe Cleaner'){
            $harga += 500;
        } else if($paket == 'Spesial Baju Jamuranz'){
          $harga += 2000;
        }
        $total += $qty * $harga;
    }
    # perintah SQL untuk insert ke table transaksi

    $sql = "insert into transaksi (id_member, tgl, batas_waktu, status, dibayar, id_user, id_outlet, total) value ('".$nama."','".$tgl."','".$batas_waktu."','".$status."','belum_bayar','".$id_user."','".$id_outlet."','".$total."')";
    if (mysqli_query($conn, $sql)) {
        $id_transaksi = mysqli_insert_id($conn);
        for ($i=0; $i < count(array($paket)); $i++) { 
            $id_paket = $paket[$i];
            $sql = "insert into detil_transaksi (id_transaksi, id_paket, qty, jenis) values ($id_transaksi, $id_paket, $qty, '$jenis')";

            $insert=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        }
        if($insert){
            echo "<script>alert('Sukses menambahkan detail transaksi');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan detail transaksi');location.href='add_transaksi.php';</script>";
        }
    } 
}

// detail transaksi 



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

// }

?>