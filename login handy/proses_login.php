<?php
include 'koneksi.php'; 

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: dashboard.php"); 
    exit();
} else {
    echo "<script>
            alert('Username atau password salah!');
            window.location.href='login.html';
          </script>";
}
?>