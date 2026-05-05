<?php
include "koneksi.php";

$id = $_GET['id'];

// ambil data dari DB
$query = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

// format rupiah
function rupiah($angka){
    return number_format($angka, 0, ',', '.');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Struk Transaksi</title>
    <link rel="stylesheet" href="struk.css">
</head>
<body>

<div class="wrapper">  
    <div id="card">
        <img src="asset/akazachibi.png" alt="Logo AkazaStore" class="logo">
        <h2>AkazaStore</h2>
    
        <hr class="line">

        <div class="row">
            <span>ID Transaksi: <?= $data['id']; ?></span>
        </div>
        <div class="row">
            <span>Game: <?= $data['game']; ?></span>
        </div>
        <div class="row">
            <span>User: <?= $data['user_id']; ?></span>
        </div>

        <div class="row">
            <span>Metode: <?= $data['metode']; ?></span>
        </div>

        <h3>Total: Rp <?= rupiah($data['nominal']); ?></h3>
        
        <hr class="line">
        <p class="footer">Terima kasih telah berbelanja di AkazaStore!</p>
        
        <div class="buttons">
            <a href="index.php" class="button kembali">Kembali</a>
            <button onclick="window.print()" class="button cetak">Cetak PDF</button>
        </div>
    </div>
</div>