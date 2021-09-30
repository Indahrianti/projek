<!DOCTYPE html>
<html>
    <head><title>document</title></head>
    <body>

       <?php
include '../database.php';
$dosen = new Dosen();
foreach ($dosen->show($_GET['id_donasi']) as $data) {
    $id_donasi = $data['id_donasi'];
    $nama_donatur = $data['nama_donatur'];
    $jumlah = $data['jumlah'];
    $tanggal = $data['tanggal'];
    $keterangan = $data['keterangan'];

}
?>

       <fieldset>
           <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
             <li class="active"><a href="profil.php">Beranda |</a></li>
             <li><a href="form.php">Form Siswa |</a></li>
            <li><a href=".php">Data Siswa Yang Diterima |</a></li>
          </ul>
        </div>
      </nav>
<style type="text/css">
    a{text-decoration: none; font-size: 20px;padding: 5px 7px}
    ul{padding: 10px}
    li{list-style: none; display: inline;}
    li a{background: #F0F8FF
; color:black;}
    li a:hover{background: #4da4ff; color:#fff;}

</style>

           <legend><h2>Menampilkan Data siswa</h2></legend>
           <table>
               <tr>
                   <td>id_donasi</td><td>:</td>
                   <td><input type="number" name="id_donasi" value="<?php echo $id_donasi; ?>" readonly></td>
               </tr>
                <tr>
                   <td>nama_donatur</td><td>:</td>
                   <td><input type="text" name="nama_donatur" value="<?php echo $nama_donatur; ?>" readonly></td>
               </tr>

                <tr>
                   <td>jumlah</td><td>:</td>
                   <td><input type="text" name="jumlah" value="<?php echo $jumlah; ?>" readonly></td>
               </tr>
               <tr>
                   <td>tanggal</td><td>:</td>
                   <td><input type="text" name="tanggal" value="<?php echo $tanggal; ?>" readonly></td>
               </tr>
               <tr>
                   <td>keterangan</td><td>:</td>
                   <td><input type="text" name="keterangan" value="<?php echo $keterangan; ?>" readonly></td>
               </tr>

           </table>
       </fieldset>
    </body>
</html>