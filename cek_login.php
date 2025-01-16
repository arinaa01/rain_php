<?php
include "koneksi.php";
if(isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");

    if(mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_array($cek);
        $_SESSION['user'] = $data;
        echo '<script>alert("Selamat Datang, Janggan lupa logout setelah selesai menggunakan halaman ini"); location.href = "index.php"</script>';
    }else{
        echo '<script>alert("Username/Password salah.");</script>';
    }
}
?>