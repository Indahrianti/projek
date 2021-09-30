<!DOCTYPE html>
<html>
    <head>
        <title>ASSALAAM</title>
</head>
<body>

   <center> <h1>KONSER AMAL ASSALAAM BAHAGIA<h2></center>
    <form method = "POST" action= "hasil.php">
        <table>
           <tr>
                <td>Nama pemesan</td>
                <td>:</td>
                <td><input type='text' name='nama' value =""></td>
           </tr>
           <tr>
                <td>kode studio</td>
                <td>:</td>
                <td><select name="studio">
                    <option value="studio1">studio1</option>
                    <option value="studio2">studio2</option>
                   </td>
                   </select>
           </tr>
           <tr>
                <td>jenis kelas</td>
                <td>:</td>
                <td><input type ="radio" name='jenis' value ='vip'>VIP 
                    <input type ="radio" name='jenis' value = 'festifal'>FESTIVAL
         </td>
           </tr>
           <tr>
                <td>jumlah tiket</td>
                <td>:</td>
                <td><input type='text' name='tiket'>
            </td>
           </tr>
           <tr>
               <td></td>
               <td></td>
               <td><input type="submit" name='simpan' value = 'Tampil'>
               <input type="reset" name="reset" value = 'Batal'>
            </td>
           </tr>
           </table>
     </form>  
</body>
</html>