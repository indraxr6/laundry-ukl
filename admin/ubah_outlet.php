<?php  include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.m
in.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title>Ubah Outlet</title>
</head>
<body>
    <br>
    <h3>Ubah Outlet</h3>
    <form action="proses_ubah_outlet.php? id= <?php echo $_GET['id'] ?> "  method="post" class="col-md-5 mx-auto">
    <?php 
   
     $sql = 'select * from outlet where id = '. $_GET['id'];
     $result = mysqli_query($conn, $sql);
     $data  = mysqli_fetch_assoc($result);
    ?>
    
    Nama :
    
    <input type="text" name="nama" class="form-control" value= "<?php echo $data['nama']?> ">

    Alamat :        
    <input type="text" name="alamat" class="form-control" value= "<?php echo $data['alamat']?> ">
 
    No. Telpon :

    <input type="text" name="tlp" class="form-control" value= "<?php echo $data['tlp']?> ">
    

   
<br>
    <input type="submit" name="simpan" value="Ubah Outlet" class="btn btn-primary">
    </form>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
        dle.min.js" integrity="sha384-
        gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>
</body>
</html>