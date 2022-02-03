<?php
function hapus($id)
{
          global $conn;
          mysqli_query($conn, "delete from member where id = '$id'");
          mysqli_affected_rows($conn);
}


function getrow($conn,$query){
    $db = mysqli_query($conn,$query);
    return mysqli_fetch_assoc($db);
}
      
