<!DOCTYPE html>
<html>
    <head>
        <title>From sederhana</title>
</head>
<body>
    <h2>from sederhana</h2>
    <form method = "POST" action= "">
        <table>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
           </tr>
           <tr>
                <td>UMUR</td>
                <td>:</td>
                <td><input type='text' name='umur'></td>
           </tr>
           <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><input type='text' name="Alamat"></td>
           </tr>
           <tr>
               <td></td>
               <td></td>
               <td><input type="submit" name="simpan" value = 'KIRIM'></td>
           </tr>
   </table>
</form>  
</body>
</html>

<?php 
if (isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur= $_POST['umur'];
    $alamat = $_POST['Alamat'];
    
    echo "nama = $nama <br> umur = $umur <br> alamat = $alamat";
}
?>

