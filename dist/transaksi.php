<?php
include 'ref.php';
?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
  
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Transaksi</li>
      
    </ul>
   
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Tabel Transaksi Laundry
    </h1>
    <a href="add_transaksi.php" class="button light">Tambah</a>
  </div>
</section>

  
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-store"></i></span>
          
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>

      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>

            <!-- //TABLE HEAD -->
            <th class="image-cell"></th>  
            
            <th>Nama Member</th>
            <th>Tanggal</th>
            <!-- <th>Batas Waktu</th> -->
            <th>Tanggal Dibayar</th>
            <th>Status</th>
            <th>Status Pembayaran</th>
            <th>Batas Waktu</th>
            <!-- <th>ID Pegawai</th> -->
            <th>Aksi</th>
            
          </tr>
          </thead>

          
          <tbody>
            <!-- //CHECKBOX -->
          
            <?php
include "koneksi.php";
if (isset($_GET["id_transaksi"])) {
  $id_transaksi = $_GET["id_transaksi"];
  $sql = "select * from transaksi where id='$id_transaksi'";
  $data = mysqli_query($connect, $sql);
  $transaksi = mysqli_fetch_array($data);
  ?>

<?php
$no=0;
while($data=mysqli_fetch_array($qry)){
$no++;
}

?>

            <!-- //TABEL -->
            <tr>
         ></td>
            <td><?=$data['nama']?></td>  
            <td><?=$data['alamat']?></td>
            <td><?=$data['tlp']?></td>
          

            <!-- //AKSI -->
            <td class="actions-cell">
              <div class="buttons left nowrap">
              <a href="detail_transaksi.php?id=<?=$data['id']?>" class="button medium green --jb-modal" type="button">
                  <span class="icon"><i class="mdi mdi-eye"></i></span>
                </a>
                <a href="edit_outlet.php?id=<?=$data['id']?>" class="button medium blue --jb-modal" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </a>
                <a  href="hapus_outlet.php?id=<?=$data['id']?>" class="button medium red --jb-modal" type="button">
                  <span  class="icon"><i class="mdi mdi-trash-can"></i></span>
                </a>

              </div>
            </td>
            </tr>
<?php  } ?>            
          </tbody>
        </table>
        </div>
      </div>
    </div>
    

    <div class="card empty">
      <div class="card-content">
        <div>
          <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
        </div>
        <p>Nothing's here…</p>
      </div>
    </div>
  </section>

<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2021, JustBoil.me
      </div>
      
    </div>
   
     
    </a>
  </div>
</footer>


<!-- hapus -->
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
      <a class="button red --jb-modal-close">Confirm</a>
    </footer>
  </div>
</div>


<!-- edit -->
<div id="sample-modal-2" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Hapus User</p>
    </header>
    <section class="modal-card-body">
      <p>Apakah anda yakin akan menghapus data ini?<b>Konfirmasi :</b></p>
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
