<html>
    <head>
        <title>d</title>
    </head>
    <body>
        <?php
include '../database.php';
$dosen = new Dosen();
foreach ($dosen->edit($_GET['id_donasi']) as $data) {
    $id_donasi = $data['id_donasi'];
    $nama_donatur = $data['nama_donatur'];
    $jumlah =  @$_POST['jumlah'];
    $tanggal = @$_POST['tanggal'];
    $keterangan = @$_POST['keterangan'];

}
?>
        <fieldset>
            <legend>Edit Data Siswa</legend>
            <form action="proses.php" method="Post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id_donasi" value="<?php echo $id_donasi; ?>">
                <table>

                    <tr>
                        <th>Nama</th>
                        <td><input type="text" name="nama_donatur" value="<?php echo $nama_donatur; ?>" required> </td>
                    </tr>
                    <tr>
                        <th>jumlah</th>
                        <td><input type="text" name="jumlah" value="<?php echo $jumlah; ?>" required> </td>
                    </tr>
                     <tr>
                        <th>tanggal</th>
                        <td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>" required> </td>
                    </tr>
                    
                     <tr>
                        <th>keterangan</th>
                        <td><input type="text" name="keterangan" value="<?php echo $keterangan; ?>" required> </td>
                    </tr>
                    <tr>
                        <th><input type="submit" name="save" value="simpan"> </th>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>