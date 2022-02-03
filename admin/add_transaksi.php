<!DOCTYPE html>
<html lang="en" class="">
<head>
  <?php
include 'ref.php';
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
      <li>Tambah</li>
    </ul>
    
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Halaman Tambah Transaksi
    </h1>
    <a href="transaksi.php" class="button light">Kembali</a>
  </div>
</section>

  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Form registrasi Kasir dan Admin
        </p>
      </header>
      <div class="card-content">
        <form action="proses_transaksi.php" method="post">
          <div class="field">
            
            <div class="field-body">
          
            <!-- ID OUTLET -->
              
          <div class="field">
            <label class="label">ID Outlet</label>
            <div class="control">
              <div class="select">
                <select name="id_outlet">
                <option value="0"></option>
                <?php
        include "koneksi.php";
        $qry=mysqli_query($conn,"select * from outlet");
        while($data=mysqli_fetch_array($qry)){
        echo '<option
        value="'.$data['id'].'">'.$data['nama'].'</option>';
        }
    ?>

                </select>

                <!-- nama -->
              
          <div class="field">
            <label class="label">Member</label>
            <div class="control">
              <div class="select">
                <select name="nama">
                <option value="0"></option>
                <?php
        include "koneksi.php";
        $qry=mysqli_query($conn,"select * from member");
        while($data=mysqli_fetch_array($qry)){
        echo '<option
        value="'.$data['id'].'">'.$data['nama'].'</option>';
        }
    ?>
 </select>

   

 <!-- qyt -->
 <div class="field">
            <label class="label">Jumlah</label>
            <div class="control">
              <div class="select">
              <input class="input" type="number" placeholder="Jumlah"  name="qty">
              </div>
            </div>
          
               <!-- paket -->
              
     <div class="field">
            <label class="label">Paket</label>
            <div class="control">
              <div class="select">
                <select name="id_paket">
                <option value="0"></option>
                <?php
        include "koneksi.php";
        $qry=mysqli_query($conn,"select * from paket");
        while($data=mysqli_fetch_array($qry)){
        echo '
        <option value="'.$data['id'].'">'.$data['nama'].' | Harga : Rp. '.$data['harga'].'</option>';
        }
    ?>
 </select>

  <!-- jenis-->
              
  <div class="field">
            <label class="label">Jenis Laundry</label>
            <div class="control">
              <div class="select">
                <select name="jenis">
                <option value="0"></option>
                <option value="kiloan">Kiloan</option>
                <option value="selimut">Selimut</option>
                <option value="bedcover">Bedcover</option>
                <option value="kaos">Kaos</option>
                <option value="sepatu">Sepatu</option>
                <option value="lain">Lain</option>

 </select>

          <!-- petugas  -->
         
          <div class="field">
            <label class="label">Petugas</label>
            <div class="control">
              <div class="select">
                <select name="id_user">
                <option value="0"></option>
                <?php
        include "koneksi.php";
        $qry=mysqli_query($conn,"select * from user");
        while($data=mysqli_fetch_array($qry)){
        echo '<option
        value="'.$data['id'].'">'.$data['nama'].'</option>';
        }
    ?>
</select>

          <!-- Tanggal -->
          <div class="field">
            <label class="label">Tanggal Transaksi</label>
            <div class="control">
              <div class="select">
                
              <input class="input" placeholder="Jumlah"  name="tgl" value="<?=(date("Y-m-d | H:i"))?>">
              </div>
            </div>
          </div>


           <!-- Batas waktu -->
           <div class="field">
            <label class="label">Batas Tanggal Bayar</label>
            <div class="control">
              <div class="select">
              <input class="input" type="date" placeholder="Jumlah"  name="batas_waktu">
              </div>
            </div>
          </div>

         
              </div>
            </div>
          </div>


          <!-- Status -->
          <div class="field">
            <label class="label">Status</label>
            <div class="control">
              <div class="select">
              <select name="status">
              <option value="0"></option>
                <option value="1">Baru</option>
                <option value="2">Proses</option>
</select>
              </div>
            </div>
          </div>

<br>

          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green" name="sumbit">
                Tambah
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red">
                Reset
              </button>
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
