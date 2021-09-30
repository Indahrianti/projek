<?php
include '../database.php';
$pemesan = new Pemesan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $nama_kereta = $_POST['nama_kereta'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];



    if ($aksi == "create") {
        $pemesan->create($nama, $nama_kereta, $jenis, $harga,$tanggal);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $pemesan->update($id, $nama, $nama_kereta, $jenis, $harga,$tanggal);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $pemesan->delete($id);
        header("location:index.php");
    }

}