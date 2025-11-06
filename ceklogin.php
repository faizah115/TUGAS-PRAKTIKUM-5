<?php
session_start();

// Daftar akun yang valid
$users = [
    "Admin" => "pass@admiN1",
    "Anita" => "pass@anitA2",
    "Sapta" => "pass@saptA3",
    "Faizah" => "010105" 
];

$username = $_POST['username'];
$password = $_POST['password'];

// Cek input kosong
if (empty($username) || empty($password)) {
    echo "<script>alert('Username dan Password belum diisi');</script>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    exit;
}

if (array_key_exists($username, $users)) {
    // Jika username terdaftar, cek password
    if ($users[$username] === $password) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header('location:index.php');
        exit;
    } else {
        echo "<script>alert('Password yang dimasukkan salah');</script>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
        exit;
    }
} else {
    echo "<script>alert('Username tidak terdaftar');</script>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    exit;
}
?>
