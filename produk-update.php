<?php
include "koneksi.php";

extract($_POST);

$perintah = mysqli_query($db, "UPDATE produk set namaproduk='$namaproduk', jumlah='$jumlah', fotoproduk='$fotoproduk' where idproduk='$idproduk' ");
if ($perintah) {
    echo "Data Produk Berhasil Diedit";
} else {
    echo "Data Produk Gagal Diedit";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <br><br>
    <div class="container">
        <div class="card">
            <a href="produk.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
        </div>
    </div>
</body>

</html>