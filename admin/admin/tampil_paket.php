<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Tampil Paket</title>
    </head>
    <body>
        <h3>Tampil Paket</h3>
        <table class="table">
        <thead>
        <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th>Outlet</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php
include "koneksi.php";

$qry=mysqli_query($conn,"select * from paket");

$no=0;
while($data =mysqli_fetch_array($qry)){
    $no++;?>
    <tr>
    <td><?=$no?></td><td><?=$data['nama']?></td>
    <td><?=$data['jenis']?></td>
    <td><?=$data['harga']?></td>
    <td><?=$data['id_outlet']?></td> 
    

    <td><a href="ubah_paket.php?id=<?=$data['id']?>" class="btn btn-success">Ubah</a> 
    <a href="hapus_paket.php?id=<?=$data['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>

<?php
}
?>
<td><a href="tambah_paket.php" class="btn btn-success">Tambah paket</a></td>

<?php
?>

</tbody>
</table>
<script src=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</body>
</html>