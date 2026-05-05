<?php
$conn = mysqli_connect("localhost", "root", "", "akaza_topup");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>