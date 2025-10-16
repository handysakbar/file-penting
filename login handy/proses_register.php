<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($conn, "SELECT * FROM users WHERE Username='$username'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script>
            alert('Username sudah terdaftar, silakan gunakan username lain.');
            window.location.href='register.html';
          </script>";
    exit();
}

$query = "INSERT INTO users (Username, Password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $query)) {
    echo "<script>
            alert('Akun berhasil dibuat! Silakan login.');
            window.location.href='login.html';
          </script>";
} else {
    echo "<script>
            alert('Gagal membuat akun: " . mysqli_error($conn) . "');
            window.location.href='register.html';
          </script>";
}
?>
