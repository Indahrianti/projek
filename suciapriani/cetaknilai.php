<!DOCTYPE html>
<html>
<head>
    <title>CETAK NILAI</title>
</head>
<body style = "">
<center>
    <h5>FROM CETAK NILAI SISWA</h5>
    <h5>SMK ASSALAAM BANDUNG</h5>
    <h5>tahun 2021</h5>
</center>
<form method = "POST" action = "nilai.php">
<label>Nama</label><br>
<input type = 'text' name = 'nama'><br>
<label>Nis<label><br>
<input type = 'text' name = 'nis'><br>
<table border="1">
<tr align="center" bgcolor="pink">
        <th>No</th>
        <th>Mata pelajaran</th>
        <th>Nilai</th>
       </tr>
        <td>1</td>
        <td>pendidikan agama</td>
        <td><input type = 'text' name = 'agama'> </td>
        <tr>
        <td>2</td>
        <td>PPKN</td>
        <td><input type='text' name = 'pkn'></td>
        <tr> 
        <td>3</td>
        <td>bahasa indonesia</td>
        <td><input type='text' name = 'indo'></td>
        <tr>
        <td>4</td>
        <td>Matematika</td>
        <td><input type='text' name = 'mtk'></td>
        <tr>
        <td>5</td>
        <td>bahasa inggris</td>
        <td><input type='text' name = 'inggris'></td>
        <tr>
        <td>6</td>
        <td>Produk Kreatif dan Kewirausahaan</td>
        <td><input type='text' name = 'kwu'></td>
        <tr>
        <td>7</td>
        <td>AL-Quran</td>
        <td><input type='text' name = 'quran'></td>
        <tr>
        <td>9</td>
        <td>Produktif PRL</td>
        <td><input type='text' name = 'rpl'></td>
        <tr>
        <td>10</td>
        <td>Produktif TKJ</td>
        <td><input type='text' name = 'tkj'></td>
        </tr>
</table>
<p>
<center> 
<input type = "submit" name = "simpan" value = 'cetak nilai'>
</center>
</form>
</body>
</html>
