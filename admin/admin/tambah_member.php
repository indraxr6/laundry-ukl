<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.m
in.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title>Tambah Member</title>
</head>
<body>
    <br>
    <h3>Tambah Member</h3>
    <form action="proses_tambah_member.php" method="post" class="col-md-5 mx-auto">
    
    Nama :
    <input type="text" name="nama" value="" class="form-control">

    Alamat : 
    <input type="text" name="alamat" value="" class="form-control">

    Jenis Kelamin :

    <select name="jenis_kelamin" class="form-control">
          <option value="0"></option>    
          <option value="1">Laki-laki</option>
          <option value="2">Perempuan</option>
          <option value="3">Lain-lain</option>
  </select>

    No. Telpon :
    <input type="number" name="tlp" value="" class="form-control">

    Role :
    <select name="id_role" class="form-control">

    <?php
        include "koneksi.php";
        $qry_kelas=mysqli_query($conn,"select * from role where id_role=3");
        while($data_kelas=mysqli_fetch_array($qry_kelas)){
        echo '<option
        value="'.$data_kelas['id_role'].'">'.$data_kelas['level'].'</option>';
        }
    ?>
    </select>
       
<br>
    <input type="submit" name="simpan" value="Tambah User" class="btn btn-primary">
    </form>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
        dle.min.js" integrity="sha384-
        gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>
</body>
</html>