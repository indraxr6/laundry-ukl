<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $dt_login['id_role'] = '1';
                $_SESSION['id_role']='1';

                $_SESSION['username']=$dt_login['username'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['password']=$dt_login['password'];
                $_SESSION['id_role']=$dt_login['1']; 
                $_SESSION['status_login']=true; 
                header("location: admin/index.php");
                
            } else {
                include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $dt_login['id_role'] == '2';
                $_SESSION['id_role']='2';

                $_SESSION['username']=$dt_login['username'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['password']=$dt_login['password'];
                $_SESSION['id_role']=$dt_login['2']; 
                $_SESSION['status_login']=true; 
                header("location: kasir/index.php");
            } else {
                echo "<script>alert('Username atau Password tidak benar');location.href='index.php';</script>";
            }
        }
    }
}
?>
