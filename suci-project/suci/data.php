<html>
    <!DOCTYPE html>
<html>
    <head><title>document</title></head>
<body>

<fieldset><center>
        <legend><h2>Data Siswa Yang Diterima</h2></legend>
        <a href="form.php">Tambah data siswa</a>
       <table border="1">
            <tr>
                <th>NO</th>
                <th>id</th>
                <th>Nama</th>
                <th>askol</th>
                <th>keterangan</th>
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
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['askol']; ?></td>
                    <td><?php echo $data['ket']; ?></td>

                    <td>
                        <a href="show.php?id=<?php echo $data['id']; ?>">show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
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
</html>
