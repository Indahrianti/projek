<!DOCTYPE html>
<html>
    <head><title>document</title></head>
    <body>
       <?php
include '../database.php';
$dosen = new Dosen();
foreach ($dosen->show($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $askol = $data['askol'];
    $alamat = $data['alamat'];

}
?>
       <fieldset>
           <legend>show data dosen</legend>
           <table>
               <tr>
                   <th>id</th>
                   <td><input type="number" name="id" value="<?php echo $id; ?>" readonly></td>
               </tr>
                <tr>
                   <th>Nama</th>
                   <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
               </tr>
               
                <tr>
                   <th>askol</th>
                   <td><input type="text" name="askol" value="<?php echo $askol; ?>" readonly></td>
               </tr>
               <tr>
                   <th>alamat</th>
                   <td><input type="text" name="alamat" value="<?php echo $alamat; ?>" readonly></td>
               </tr>


           </table>
       </fieldset>
    </body>
</html>