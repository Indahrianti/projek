<?php
include '../database.php';
$dosen = new Dosen();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $askol = $_POST['askol'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create") {
        $dosen->create($nama, $askol,$alamat);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $dosen->update($id, $nama,$askol, $alamat);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $dosen->delete($id);
        header("location:index.php");
    }

}
