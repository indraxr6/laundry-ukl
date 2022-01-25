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


function ambildata($conn,$query){
    $data = mysqli_query($conn,$query);
    if (mysqli_num_rows($data) > 0) {
        while($row = mysqli_fetch_assoc($data)){
        $hasil[] = $row;
    }

    return $hasil;
    }
}

function bisa($conn,$query){
    $db = mysqli_query($conn,$query);

    if($db){
        return 1;
    }else{
        return 0;
    }
}


function ambilsatubaris($conn,$query){
    $db = mysqli_query($conn,$query);
    return mysqli_fetch_assoc($db);
}
      
      function hapus($where,$table,$redirect){
          $query = 'DELETE FROM ' . $table . ' WHERE ' . $where;
          echo $query;
      }

}