<!DOCTYPE html>
<html>
<head>
    <title>tamu hotel</title>
</head>
<body>
    <h2>PENDATAAN TAMU HOTEL</h2>
    <hr>
     <form method = "POST" action = "latihanhotel2.php">
        <table>
            <tr>
                <td>Nama tamu</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama'> </td>
            </tr> 
            <tr>
                <td>NO IDENTITAS</td>
                <td>:</td>
                <td><input type = 'text' name = 'identitas'> </td>
            </tr> 
            <tr>
                <td>Durasi menginap</td>
                <td>:</td>
                <td><input type = 'text' name = 'durasi'> </td>
            </tr>
            <tr>
                <td>Tanggal Menginap</td>
                <td>:</td>
                <td><input type = 'date' name = 'tgl' required> </td>
            </tr> 
            <tr>
                <td>Tipe Kamar</td>
                <td>:</td>
                <td><select name = "kamar">
                <option value= "tipe">pilih</option>
                <option value= "superior">superior</option>
                <option value= "deluxe">deluxe</option>
                <option value= "junior_suite">junior_suite</option>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = "simpan" value = 'KIRIM'>
                <input type = "reset" name = "reset" value = 'BATAL'></td>
            </tr>  
</head>            
 </html>           