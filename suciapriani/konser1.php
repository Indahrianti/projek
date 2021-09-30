<!DOCTYPE html>
<html>
<head>
    <title>Konser Amal</title>
</head>
<body>
    <h2>KONSER AMAL ASSALAM BAHAGIA</h2>
    <hr>
     <form method = "POST" action = "konser2.php">
        <table>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama'> </td>
            </tr>   
            <tr>
                <td>Kode Studio</td>
                <td>:</td>
                <td><select name = "studio">
                <option value= "1">STUDIO 1</option>
                <option value= "2">STUDIO 2</option>
                </td>
            </tr>   
            <tr>
                <td>Jenis Kelas</td>
                <td>:</td>
                <td><input type = 'radio' name = 'jenis' value = "VIP"> VIP 
                <input type = 'radio' name = 'jenis' value = "Festival"> Festival </td>
            </tr>   
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type = 'text' name = 'tiket'> </td>
            </tr>   
            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = "simpan" value = 'KIRIM'>
                <input type = "reset" name = "reset" value = 'BATAL'></td>
            </tr>   
</table>
</form>

</body>
</html>

