<?php
session_start();
include "koneksi.php";

$username = $_SESSION['username'];
$user_id = $_POST['user_id'];
$server = $_POST['server'];
$game = $_POST['game'];
$nominal = $_POST['nominal'];
$metode = $_POST['metode'];
$status = "sukses";

mysqli_query($conn, "INSERT INTO transaksi (user_id, game, nominal, metode, status, username)
VALUES ('$user_id-$server', '$game', '$nominal', '$metode', '$status', '$username')");

// ambil ID terakhir
$id = mysqli_insert_id($conn);

// redirect ke struk
header("Location: struk.php?id=$id");
?>