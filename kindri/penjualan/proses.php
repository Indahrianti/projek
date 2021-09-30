<?php
include '../database.php';
$buku = new beli();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_buku = @$_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $harga = $_POST['harga'];

    if ($aksi == "create") {
        $buku->create($nama_buku, $nama_pembeli, $harga);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $buku->update($id_buku, $nama_buku, $nama_pembeli, $harga);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $buku->delete($id_buku);
        header("location:index.php");
    }

}
