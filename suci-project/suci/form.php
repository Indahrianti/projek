<html>
    <head>
        <title>document</title>
    </head>
    <body>
        <fieldset>
            <legend><h3>Input data siswa</h3></legend>
            <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
        <center>
       <legend><h2>Data siswa </h2></legend>
         <a href="form.php">Tambah data siswa | </a>
        <a href="menu.php">Beranda | </a>
        <a href="data.php">Siswa yang diterima | </a></center></br>
        <table>
       
             <tr>
                <td>Nama</td><td>:</td>
                <td><input type="text" name="nama_donatur" required></td>
            </tr>

             <tr>
                <td>jumlah</td><td>:</td>
                <td><input type="text" name="jumlah" required></td>
            </tr>
             <tr>
                <td>tanggal</td><td>:</td>
                <td><input type="date" name="tanggal" required></td>
            </tr>
            <tr>
                <td>keterangan</td><td>:</td>
                <td><input type="text" name="keterangan" required></td>
            </tr>
             <tr>
                <td><input type="submit" name="save" ></td>

            </tr>
        </table>
    </form>
        </fieldset>
    </body>
</html>
