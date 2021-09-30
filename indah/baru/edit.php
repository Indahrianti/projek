<html>
    <head>
        <title>d</title>
    </head>
    <body>
        <?php
include '../database.php';
$dosen = new Dosen();
foreach ($dosen->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $askol = $_POST['askol'];
    $alamat = $_POST['alamat'];

}
?>
        <fieldset>
            <legend>Edit data dosen</legend>
            <form action="proses.php" method="Post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <table>
                    <tr>
                        <th>id</th>
                        <td><input type="number" name="id" value="<?php echo $id; ?>" required> </td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><input type="text" name="nama" value="<?php echo $nama; ?>" required> </td>
                    </tr>
                    
                     <tr>
                        <th>askol</th>
                        <td><input type="text" name="askol" value="<?php echo $askol; ?>" required> </td>
                    </tr>
                     <tr>
                        <th>alamat</th>
                        <td><input type="text" name="alamat" value="<?php echo $alamat; ?>" required> </td>
                    </tr>
                    <tr>
                        <th><input type="submit" name="save" value="simpan"> </th>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>