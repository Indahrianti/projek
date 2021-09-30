<html>
    <head>
    <title>Gabungan pemograman</title>
  </head>
  <body>
    <h1><center>Donasi</center></h1>
    <form action="donasi1.php" method="post">
        <input type="hidden" name="aksi" value="create">
    <center>
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
    <img src = "enam.jpeg" align = "center" width="1000px" right="2000px">
    </center>
  </body>
  <style type="text/css">
      a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
      ul{padding: 14px}
      li{list-style: none; display: inline;}
      li a{background: pink; color:brown;}
  </style>
        <fieldset>
            <legend>Input data dosen</legend>
            <form action="donasi1.php" method="post">
        <input type="hidden" name="aksi" value="create">
        
        <table>
            
           
             <tr>
                <th>Nama Donatur</th>
                <td>:</td>
                <td><input type="text" name="nama_donatur" required></td>
            </tr>
            <tr>
                <th>Jumlah nominal</th>
                <td>:</td>
                <td><input type="text" name="jumlah" required></td>
            </tr>
             <tr>
                <th>tanggal</th>
                <td>:</td>
                <td><input type="date" name="tanggal" required></td>
            </tr>
             <tr>
                <th>keterangan</th>
                <td>:</td>
                <td><input type="text-area" name="keterangan" required></td>
            </tr>
           
             <tr>
                <th><input type="submit" name="save" ></th>
            </tr>
        </table>
    </form>
        </fieldset>
    </body>
</html>
