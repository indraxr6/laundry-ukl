<!DOCTYPE html>
<html lang="en" class="">
<head>
  <?php
include 'ref.php';
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forms - Admin One Tailwind CSS Admin Dashboard</title>

  

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Pelanggan</li>
      <li>Tambah</li>
    </ul>
    
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Halaman Tambah Member
    </h1>
    <a href="pelanggan.php" class="button light">Kembali</a>
  </div>
</section>

  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Form registrasi untuk calon pelanggan
        </p>
      </header>
      <div class="card-content">
        <form action="proses_tambah_member.php" method="post">
          <div class="field">
            
            <div class="field-body">
          
            <!-- nama -->
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" placeholder="Nama" name="nama">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>

              <!-- alamat -->
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" type="text" placeholder="Alamat"  name="alamat">
                  <span class="icon left"><i class="mdi mdi-mail"></i></span>
                  <span class="icon right"><i class="mdi mdi-check"></i></span>
                </div>
              </div>
            </div>
          </div>

          <!-- no telp -->
          <div class="field">
            <div class="field-body">
              <div class="field">
                <div class="field addons">
                  <div class="control">
                    <input class="input" value="+62(ID)" size="3" readonly>
                  </div>
                  <div class="control expanded">
                    <input class="input" type="number" placeholder="No. telpon" name="tlp" minlength="12">
                  </div>
                </div>
                <p class="help">Tidak perlu menambahkan 'nol' pertama</p>
              </div>
            </div>
          </div>

          <!-- gender -->
          <div class="field">
            <label class="label">Jenis Kelamin</label>
            <div class="control">
              <div class="select">
                <select placeholder="Jenis Kelamin" name="jenis_kelamin">
                <option value="0" ></option>    
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                    <option value="3">Lain-lain</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Role -->
          <div class="field">
            <label class="label">Role</label>
            <div class="control">
              <div class="select">
                <select placeholder="Jenis Kelamin" name="id_role">
                <?php
                     include "koneksi.php";
                     $qry_kelas=mysqli_query($conn,"select * from role where id_role=3");
                     while($data_kelas=mysqli_fetch_array($qry_kelas)){
                     echo '<option
                    value="'.$data_kelas['id_role'].'">'.$data_kelas['level'].'</option>';
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
