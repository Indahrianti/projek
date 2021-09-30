<?php
include '../database.php';
$dosen = new Dosen();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_donasi = $_POST['id_donasi'];
    $nama_donatur = $_POST['nama_donatur'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];


    if ($aksi == "create") {
        $dosen->create($nama_donatur, $jumlah, $tanggal, $keterangan);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $dosen->update($id_donasi, $nama_donatur, $jumlah,$tanggal, $keterangan);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $dosen->delete($id_donasi);
        header("location:index.php");
    }

}
