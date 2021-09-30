<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$datapemesan = new Dosen();
foreach ($datapemesan->show($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $nama_kereta = $data['nama_kereta'];
    $jenis = $data['jenis'];
    $harga = $data['harga'];
    $tanggal = $data['tanggal'];
}
?>
    <fieldset>
        <legend>Show Data dosen</legend>
        <table>
            <tr>
                <th>id</th>
                <td><input type="number" name="id" value="<?php echo $id; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Kereta</th>
                <td><input type="text" name="nama_kereta" value="<?php echo $nama_kereta; ?>" readonly></td>
            </tr>
            <tr>
                <th>jenis</th>
                <td><input type="text" name="jenis" value="<?php echo $jenis; ?>" readonly></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td><input type="text" name="harga" value="<?php echo $harga; ?>" readonly></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>