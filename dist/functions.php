<?php
function hapus($id)
{
          global $conn;
          mysqli_query($conn, "delete from member where id = '$id'");
          mysqli_affected_rows($conn);
}

function ubah($data)
{
          global($conn)

          $id = $data['id'];
          $nama  = htmlspecialchars($data['nama']);
          $alamat  = htmlspecialchars($data['alamat']);
          $gender  = htmlspecialchars($data['jenis_kelamin']);
          $tlp  = htmlspecialchars($data['tlp']);
          
          $query = "update member set 
                           nama = '$nama';
                           alamat = '$alamat';
                           jenis_kelamin = '$gender';
                           tlp = '$nama';
          ";
          mysqli_query($conn, $query);
          return mysqli_affected_rows($conn);

}