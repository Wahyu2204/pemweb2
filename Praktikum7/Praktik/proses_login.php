<?php
// tangkap input login
$email = $_POST['email'];
$password = md5($_POST['password']);

$credential = [$email,$password];

include_once ('koneksi.php');

//query login
$query = "SELECT * FROM user WHERE email = ? && password = ?";
$statement = $dbh->prepare($query, $credential);
$statement->execute($credential);
$result = $statement->fetch();

// validasi login
if ($result) {
    //simpan data login ke session
    session_start();
    $_SESSION ['name'] = $result ['name'];
    $_SESSION ['email'] = $result ['email'];
    //pindahkan halaman ke dashboard.php
    header('Location: dashboard.php');
} else {
    header ("Location: index.html");
}