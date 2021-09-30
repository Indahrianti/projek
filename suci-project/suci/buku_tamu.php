<!DOCTYPE html>
<html>
    <head><title>document</title></head>
<body><fieldset><h1 border="1" style="padding: 20px; background-color: pink;">
  <center>PANTI YATIM INDONESIA</center></h1></fieldset>
  <center>
    <fieldset>
    <h1 border="1" style="padding: 100px; background-color: pink;">
  <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="profil.php">Beranda</a></li>
            <li><a href="kegiatan.php">Kegiatan</a></li>
            <li><a href="anak_asuh.php">Anak Asuh</a></li>
            <li><a href="galeri_poto.php">Galeri</a></li>
            <li><a href="buku_tamu.php">Buku Tamu</a></li>
            <li><a href="donasi.php">Donasi</a></li>
            <li><a href="kontak.php">kontak</a></li>
          </ul>
        </div>
      </nav>
       <legend><h2>Data tamu yatim</h2></legend>
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
<style type="text/css">
    a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
    ul{padding: 14px}
    li{list-style: none; display: inline;}
    li a{background: salmon; color:brown;}
</style>
</head>
    </html>