<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analisis program</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>
                <h1>analisis program</h1>
            </legend>
            <table>
                 <tr>
                    <td>
                        Pilih program 
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="program" required>
                            <option value="bulan">pemograman bulan</option>
                            <option value="jurusan">pemograman jurusan</option>
                            <option value="biodata">Biodata</option>
                        </select>
                    </td>  
                    <td><input type="submit" name="submit" value='Submit'></td>
                 </tr> 
            </table> 
        </fieldset>
    </form>
</body>
</html>