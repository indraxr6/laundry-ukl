<!DOCTYPE html>
<html lang="en" class="">
<head>
  <?php
include 'ref.php'; 
include 'koneksi.php'; 
date_default_timezone_set('Asia/Jakarta');
?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forms - Admin One Tailwind CSS Admin Dashboard</title>

  
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Transaksi</li>
      <li>Detail</li>
    </ul>
    
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Halaman Detail Transaksi
    </h1>
    <a href="transaksi.php" class="button light">Kembali</a>
  </div>
</section>
<?php 

$sql = "select transaksi.*, detil_transaksi.*, member.nama, transaksi.id as id_t from transaksi inner join member on member.id = transaksi.id_member inner join detil_transaksi on detil_transaksi.id where transaksi.id = ". $_GET['id']; 

  // $sql = "select * from detil_transaksi where id = ". $_GET['id'];
   $result = mysqli_query($conn, $sql);
   $data  = mysqli_fetch_assoc($result);


$sql_outlet = "select * from outlet where id = ". $data['id_outlet']; 

  // $sql = "select * from detil_transaksi where id = ". $_GET['id'];
   $result_outlet= mysqli_query($conn, $sql_outlet);
   $data_outlet  = mysqli_fetch_assoc($result_outlet);
  ?>


  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Detail Transaksi
        </p>
      </header>
      <div class="card-content">
        <form action="proses_transaksi.php" method="post">
          <div class="field">
            
            <div class="field-body">
          
          <!-- ID Outlet -->
              
          <div class="field">
            <label class="label">ID Outlet</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data_outlet['nama'] ?>" readonly></input>
                

                <!-- nama -->
              
          <div class="field">
            <label class="label">ID Member</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['nama'] ?>" readonly></input>

                 <!-- qty-->
              
          <div class="field">
            <label class="label">Jumlah</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['qty'] ?>" readonly></input>

                 <!-- Paket -->
              
          <div class="field">
            <label class="label">ID Paket</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['id_paket'] ?>" readonly></input>

                 <!-- jenis -->
              
          <div class="field">
            <label class="label">Jenis Laundry</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['jenis'] ?>" readonly></input>

                 <!-- petugas -->
              
          <div class="field">
            <label class="label">ID Petugas</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['id_user'] ?>" readonly></input>

                 <!-- Tanggal -->
              
          <div class="field">
            <label class="label">Tanggal Transaksi</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['tgl'] ?>" readonly></input>

                 <!-- Tanggal bayar -->
              
          <div class="field">
            <label class="label">Tanggal Bayar</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['tgl_bayar'] ?>" readonly></input>

                 <!-- Tanggal batas -->
              
          <div class="field">
            <label class="label">Batas Waktu</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['batas_waktu'] ?>" readonly></input>

                <!-- pembayaran -->
              
          <div class="field">
            <label class="label">Status Pembayaran</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['dibayar'] ?>" readonly></input>

                <!-- Status -->
              
          <div class="field">
            <label class="label">Status</label>
            <div class="control">
              <div class="select">
                <input class="input" name="nama" value= "<?php echo $data['status'] ?>" readonly></input>

                 <!-- total -->
              
          <div class="field">
            <label class="label">Total</label>
            <div class="control">
              <div class="select">
                <input class="input" name="total" value= "Rp. <?php echo $data['total'] ?>" readonly></input>


<br>
<br>

          <div class="field grouped">
            <div class="control">
            <a href="edit_transaksi.php?id=<?=$data['id_t']?>" class="button green" name="sumbit">
                Edit Data
              </a>
            </div>
            </div>
          </div>
        </form>
      </div>
    </div>

   


<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2021, JustBoil.me
      </div>
      <a href="https://github.com/justboil/admin-one-tailwind" style="height: 20px">
        <img src="https://img.shields.io/github/v/release/justboil/admin-one-tailwind?color=%23999">
      </a>
    </div>
    
  </div>
</footer>

<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button red --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

<div id="sample-modal-2" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button blue --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
