<!DOCTYPE html>
<html lang="en" class="">
<head>
  <?php
include 'ref.php';
include 'koneksi.php';
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forms - Admin One Tailwind CSS Admin Dashboard</title>

  

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Paket</li>
      <li>Edit</li>
    </ul>
    
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Halaman Edit Paket
    </h1>
    <a href="paket.php" class="button light">Kembali</a>
  </div>
</section>

  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Form edit data paket laundry
        </p>
      </header>
      <div class="card-content">
        <form action="proses_ubah_paket.php? id= <?php echo $_GET['id'] ?> " method="post">

<?php 
   
   $sql = 'select * from paket where id = '. $_GET['id'];
   $result = mysqli_query($conn, $sql);
   $data  = mysqli_fetch_assoc($result);
  ?>

          <div class="field">
            
            <div class="field-body">
          
            <!-- nama -->
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" placeholder="Nama" name="nama" value= "<?php echo $data['nama']?> ">
                  <span class="icon left"><i class="mdi mdi-tshirt-crew"></i></span>
                </div>
              </div>

              <!-- harga-->
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" type="text" placeholder="Harga (Rp.)"  name="harga" value= "<?php echo $data['harga']?> ">
                  <span class="icon left"><i class="mdi mdi-coin"></i></span>
                  <span class="icon right"><i class="mdi mdi-check"></i></span>
                </div>
              </div>
            </div>
          </div>

          <!-- jenis  -->   
          <div class="field">
            <label class="label">Jenis Laundry</label>
            <div class="control">
              <div class="select">
                    <select name="jenis" value= "<?php echo $data['jenis']?> ">
                        <option value="0"></option>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bedcover">Bedcover</option>
                        <option value="kaos">Kaos</option>
                        <option value="lain">Lain</option>
                    </select>

          <!-- ID outlet -->
          <div class="field">
            <label class="label">ID Outlet</label>
            <div class="control">
              <div class="select">
                <select name="id_outlet" value= "<?php echo $data['id_outlet']?> ">
                <?php
                    include "koneksi.php";
                     $qry=mysqli_query($conn,"select * from outlet");
                    while($data=mysqli_fetch_array($qry)){
                    echo '<option
                    value="'.$data['id'].'">'.$data['nama'].'</option>';
        }
    ?>
                </select>
              </div>
            </div>
          </div>
<br>

          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
                Update
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
<br>

<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2021, JustBoil.me
      </div>
      <a style="height: 20px">
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
