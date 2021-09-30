<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <nav>
            <a href="/pembeli">Data Beli</a> |
            <a href="/transaksi">bayar</a>
        </nav>
    </center>
    <center>Data buku</center>
    <fieldset>
        <legend>Data dosen</legend>
        <a href="/pembeli/create.php">Tambah Data buku</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama buku</th>
                <th>nama pembeli</th>
                 <th>harga</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$buku = new buku();
$no = 1;
// var_dump($dosen->index());
foreach ($buku->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_buku']; ?></td>
                    <td><?php echo $data['nama_pembeli']; ?></td>
                      <td><?php echo $data['harga']; ?></td>
                    <td>
                        <a href="/pembeli/show.php?id_buku=<?php echo $data['id_buku']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="/pembeli/edit.php?id_buku=<?php echo $data['id_buku']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="/pembeli/proses.php" method="post">
                            <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
                            <input type="hidden" name="nama_buku" value="<?php echo $data['nama_pembeli']; ?>">
                            <input type="hidden" name="nama_pembeli" value="<?php echo $data['nama_pembeli']; ?>">
                            <input type="hidden" name="harga" value="<?php echo $data['harga']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>