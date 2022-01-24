<?php  include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.m
in.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title>Ubah user</title>
</head>
<body>
    <br>
    <h3>Ubah user</h3>
    <form method="post" class="col-md-5 mx-auto" action="proses_ubah_user.php? id= <?php echo $_GET['id'] ?>" >
    <?php 
   
     $sql = 'select * from user where id = '. $_GET['id'];
     $result = mysqli_query($conn, $sql);
     $data  = mysqli_fetch_assoc($result);
    ?>
    
    Nama :
    
    <input type="text" name="nama" class="form-control" value= "<?php echo $data['nama']?> ">

    Username :
    <input type="username" name="username" class="form-control" value= "<?php echo $data['username']?> ">

    Password :
    <input type="password" name="password" class="form-control" value= "<?php echo $data['password']?> ">
 
    No. Telpon :

    <input type="text" name="tlp" class="form-control" value= "<?php echo $data['tlp']?> ">

    Role :
    <select name="id_role" class="form-control" value= "<?php echo $data['id_role']?>">

    <?php
        include "koneksi.php";
        $qry_kelas=mysqli_query($conn,"select * from role");
        while($data_kelas=mysqli_fetch_array($qry_kelas)){
        echo '<option
        value="'.$data_kelas['id_role'].'">'.$data_kelas['level'].'</option>';
        }
    ?>
    </select>
    
    Outlet :
    <select name="id_outlet" class="form-control" value= "<?php echo $data['id_outlet']?>">
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
    <input type="submit" name="simpan" value="Ubah user" class="btn btn-primary">
    </form>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
        dle.min.js" integrity="sha384-
        gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>
</body>
</html>