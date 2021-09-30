<!DOCTYPE html>
<html>
    <head><title>document</title></head>
<body><fieldset>
    <center>
       <legend><h2>konfirmasi donasi </h2></legend>
         <a href="form.php">Tambah donasi| </a>
        <a href="profil.php">Beranda | </a>
        <table border="1">
            <br><tr>
                <th>NO</th>
                <th>id_donasi</th>
                <th >nama_donatur</th>
                <th >jumlah</th>
                <th >tanggal</th>
                <th >keterangan</th>

                <th colspan="3">Aksi</th>
            </tr></center>
            <?php
include '../database.php';
$dosen = new Dosen();
$no = 1;
// var_dump($dosen->index());
foreach ($dosen->index() as $data) {
    ?>
                <tr>
                    <td ><?php echo $no++; ?></td>
                    <td ><?php echo $data['id_donasi']; ?></td>
                    <td ><?php echo $data['nama_donatur']; ?></td>
                    <td ><?php echo $data['jumlah']; ?></td>
                    <td ><?php echo $data['tanggal']; ?></td>
                    <td ><?php echo $data['keterangan']; ?></td>


                    <td>
                        <a href="show.php?id_donasi=<?php echo $data['id_donasi']; ?>">show</a>
                    </td>
                    <td>
                        <a href="edit.php?id_donasi=<?php echo $data['id_donasi']; ?>">edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                    <input type="hidden" name="id_donasi" value="<?php echo $data['id_donasi']; ?>">
                <input type="hidden" name="aksi" value="delete">
            <button type="submit" name="save" onclick="return confirm('Apakah anda yakin mau menghapus
            data ini?')">Delete
            </button>
              </form>
                    </td>
                </tr>
                <?php
}?>
        </table>
    </fieldset>
</body>
    </html>