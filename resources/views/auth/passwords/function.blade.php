<?php 
include 'koneksi.blade.php';
if (isset($_POST["login"])) {

    //echo 'sudah login';

    $username = $_POST['usrname'];
    $password = $_POST['password'];

    //menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($con, "select * from data where username='$username' and password= '$password'");
    //menghitung jumlah daya yang ditemukan 
    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        sesion_start();

        $_SESSION['username'] = $username;
        header('Location:home.blade.php');
    } else {
        header("location:login.php?pesan=gagal");
    }
}elseif (isset($_POST['Register'])) {
        $username = $_POST["userbame"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "INSERT INTO data (username, email, password) VALUES ('$username', "$email", '$password')";

        if (mysqli_query($con, $query)) {
            echo "<h1>Username $username berhasil terdaftar</h1>
                    <a href='login'>Kembali Login</h1>";
        } else {
            echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
        }
     }
