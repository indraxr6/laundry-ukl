<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Tampil User</title>
    </head>
    <body>
        <h3>Tampil User</h3>
        <table class="table">
        <thead>
        <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th>No. Telpon</th>
        <th>Role</th>
        <th>Outlet</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php
include "koneksi.php";

$qry_user=mysqli_query($conn,"select * from user");

$no=0;
while($data_user=mysqli_fetch_array($qry_user)){
    $no++;?>
    <tr>
    <td><?=$no?></td>
    <td><?=$data_user['nama']?></td>
    <td><?=$data_user['username']?></td>
    <td><?=$data_user['password']?></td>
    <td><?=$data_user['tlp']?></td> 
    <td><?=$data_user['id_role']?></td> 
   

    <td><?=$data_user['id_outlet']?></td> 
    
    
    <td><a href="ubah_user.php?id=<?=$data_user['id']?>" class="btn btn-success">Ubah</a> 
    <a href="hapus_user.php?id=<?=$data_user['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>

<?php
}
?>
<td><a href="tambah_user.php" class="btn btn-success">Tambah User</a></td>

<?php
?>

</tbody>
</table>
<script src=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</body>
</html>