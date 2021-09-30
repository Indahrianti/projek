<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
    <fieldset>
        <legend>Input Data Pemesan</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                
                <tr>
                    <th>Nama Pemesan</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Nama kereta</th>
                    <td><input type="text" name="nama_kereta" required></td>
                </tr>
                <tr>
                    <th>jenis</th>
                    <td><input type="text" name="jenis" required></td>
                </tr>
                <tr>
                    <th>harga</th>
                    <td><input type="text" name="harga" required></td>
                </tr>
                <tr>
                    <th>tanggal</th>
                    <td><input type="date" name="tanggal" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>