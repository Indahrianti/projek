<html>
    <head>
        <title>document</title>
    </head>
    <body>
        <fieldset>
            <legend>Input data dosen</legend>
            <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
        <table>
            <tr>
                <th>id</th>
                <td><input type="number" name="id" required></td>
            </tr>
             <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" required></td>
            </tr>
        
             <tr>
                <th>askol</th>
                <td><input type="text" name="askol" required></td>
            </tr>
             <tr>
                <th>alamat</th>
                <td><input type="text" name="alamat" required></td>
            </tr>
             <tr>
                <th><input type="submit" name="save" ></th>

            </tr>
        </table>
    </form>
        </fieldset>
    </body>
</html>
