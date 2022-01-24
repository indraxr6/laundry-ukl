<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Tampil Member</title>
    </head>
    <body>
        <h3>Tampil Member</h3>
        <table class="table">
        <thead>
        <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>No. Telpon</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php
include "koneksi.php";

$qry=mysqli_query($conn,"select * from member");

$no=0;
while($data =mysqli_fetch_array($qry)){
    $no++;?>
    <tr>
    <td><?=$no?></td>
    <td><?=$data['nama']?></td>
    <td><?=$data['alamat']?></td>
    <td><?=$data['jenis_kelamin']?></td>
    <td><?=$data['tlp']?></td> 
    

    <td><a href="ubah_member.php?id=<?=$data['id']?>" class="btn btn-success">Ubah</a> 
    <a href="hapus_member.php?id=<?=$data['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>

<?php
}
?>
<td><a href="tambah_member.php" class="btn btn-success">Tambah Member</a></td>

<?php
?>

</tbody>
</table>
<script src=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</body>
</html>