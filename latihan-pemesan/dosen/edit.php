<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$pemesan = new Pemesan();
foreach ($pemesan->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $nama_kereta = $data['nama_kereta'];
    $jenis = $data['jenis'];
    $harga = $data['harga'];
    $tanggal = $data['tanggal'];
}
?>
  <fieldset>
        <legend>Edit Data Pemesan</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>id</th>
                    <td><input type="number" name="id" value="<?php echo $id; ?>" required></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Nama Kereta</th>
                    <td><input type="text" name="nama_kereta" value="<?php echo $nama_kereta; ?>" required></td>
                </tr>
                <tr>
                    <th>Jenis</th>
                    <td><input type="text" name="jenis" value="<?php echo $jenis; ?>" required></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td><input type="text" name="harga" value="<?php echo $harga; ?>" required></td>
                </tr>
                <tr>
                    <th>tanggal</th>
                    <td><input type="text" name="tanggal" value="<?php echo $tanggal; ?>" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>