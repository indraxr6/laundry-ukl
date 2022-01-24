<?php  include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.m
in.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title>Ubah Paket</title>
</head>
<body>
    <br>
    <h3>Ubah Paket</h3>
    <form action="proses_ubah_paket.php? id= <?php echo $_GET['id'] ?> "  method="post" class="col-md-5 mx-auto">
    <?php 
   
     $sql = 'select * from paket where id = '. $_GET['id'];
     $result = mysqli_query($conn, $sql);
     $data  = mysqli_fetch_assoc($result);
    ?>
    
    Nama 
    
    <input type="text" name="nama" class="form-control" value= "<?php echo $data['nama']?> ">

    Jenis        
    <select type="text" name="jenis" class="form-control" value= "<?php echo $data['jenis']?> ">
                        <option value=""></option>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bedcover">Bedcover</option>
                        <option value="kaos">Kaos</option>
                        <option value="lain">Lain</option>
                    </select>
 
    Harga

    <input type="number" name="harga" class="form-control" value= "<?php echo $data['harga']?> ">

    Outlet

    <select type="text" name="id_outlet" class="form-control" value= "<?php echo $data['id_outlet']?> ">
    <option value=""></option>
    <?php
        include "koneksi.php";
        $qry_outlet=mysqli_query($conn,"select * from outlet");
        while($data_outlet=mysqli_fetch_array($qry_outlet)){
        echo '<option
        value="'.$data_outlet['id'].'">'.$data_outlet['nama'].'</option>';
        }
    ?>
    </select>
    
<br>
    <input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
    </form>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
        dle.min.js" integrity="sha384-
        gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>
</body>
</html>