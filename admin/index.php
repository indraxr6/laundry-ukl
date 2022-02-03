
<!DOCTYPE html>
<?php
include 'ref.php';
include 'koneksi.php';
include 'functions.php';
?>


<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Admin One Tailwind CSS Admin Dashboard</title>


<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Dashboard</li>
    </ul>
    
  </div>
</section>
<?php
$minggu = getrow($conn,"SELECT SUM(total) AS total FROM transaksi WHERE dibayar = 'dibayar'");
$jumlah_pelanggan = getrow($conn,'SELECT COUNT(id) as jumlahmember FROM member');




// $tahun = getrow($conn,"SELECT SUM(total) AS total FROM transaksi WHERE dibayar = 'dibayar' and year(tgl_bayar) = year(now()");

// $tahun = getrow($conn,"SELECT SUM(total_harga) AS total FROM detail_transaksi INNER JOIN transaksi ON transaksi.id_transaksi = detail_transaksi.transaksi_id WHERE status_bayar = 'dibayar' AND YEAR(tgl_pembayaran) = YEAR(NOW())");
// $minggu = getrow($conn,"SELECT SUM(total_harga) AS total FROM detail_transaksi INNER JOIN transaksi ON transaksi.id_transaksi = detail_transaksi.transaksi_id WHERE status_bayar = 'dibayar' AND WEEK(tgl_pembayaran) = WEEK(NOW())");
?>


<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Dashboard
    </h1>
    
  </div>
</section>

<section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div  div class="widget-label">
              <h3>
                Total Penghasilan
              </h3>
              <h1>
              <?= $minggu['total'] ?>
              </h1>
            </div>
            <span class="icon widget-icon text-red-500"><i class="mdi mdi-finance mdi-48px"></i></span>

            
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Total Member
              </h3>
              <h1>
              <?= $jumlah_pelanggan['jumlahmember'] ?>
              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>

      </div>
  </div>
  <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          

          <span class="icon"><i class="mdi mdi-ballot"></i></span>10 Transaksi terakhir</p>
          
          
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
            
            <th>Member</th>
            <th>Tanggal Transaksi</th>      
            <th>Paket</th>
            <th>Jumlah</th>
            <th>Total</th>

            

          </tr>
          </thead>

          
          <tbody>
            <!-- //CHECKBOX -->

            
          
            <?php
include "koneksi.php";
// $qry_user=mysqli_query($conn,"select * from transaksi");
$qry_user=mysqli_query($conn,"select transaksi.*, detil_transaksi.qty, member.nama from transaksi inner join member on member.id = transaksi.id_member inner join detil_transaksi where dibayar = 'dibayar'");

$no=0;
while($data_user=mysqli_fetch_array($qry_user)){
$no++;
?>
            <!-- //TABEL -->
            
             <td><?=$no?></td>
            <td><?=$data_user['nama']?></td>  
            <td><?=$data_user['tgl']?></td>
            <td><?=$data_user['dibayar']?></td>
            <td><?=$data_user['qty']?></td>
            <td>Rp. <?=$data_user['total']?></td>
            
            <!-- //AKSI -->
            <td class="actions-cell">
              <div class="buttons left nowrap">
              <a href="detail_transaksi.php?id=<?=$data_user['id']?>" class="button long green --jb-modal" type="button">
                  <span class="icon"><i class="mdi mdi-eye"></i></span>
                
            </td>
            </tr>
<?php  } ?>            
          </tbody>
        </table>
        </div>
      </div>
    </div>
</footer>


</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="js/chart.sample.min.js"></script>


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
