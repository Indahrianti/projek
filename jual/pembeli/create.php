<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>
<body>
    <fieldset>
        <legend>Input Data buku</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Nama Buku</th>
                    <td><input type="text" name="nama_buku" required></td>
                </tr>
                <tr>
                    <th>Nama pembeli</th>
                    <td><input type="text" name="nama_pembeli" required></td>
                </tr>
                 <tr>
                    <th>harga</th>
                    <td><input type="number" name="harga" required></td>
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
