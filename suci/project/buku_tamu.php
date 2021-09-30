<html>
 <body>
 <div align="center">
 <form name="myform" method="post">
 <table>
 <tr><td colspan="3"><b><center>BUKU TAMU</center></b></td></tr>
<tr><td></td><td></td><td></td></tr>
    <tr><td>Nama</td>
             <td> : </td>
             <td><input type="text" name="Nama"></td> </tr>
  <tr><td>Alamat</td>
             <td> : </td>
             <td><input type="text" name="Alamat"></td></tr>
   <tr><td>No.Telp</td>
            <td> : </td>
            <td><input type="text" name="No.Telp"></td></tr>
   <tr><td>Pilihan Sebagai</td>
         <td>    :</td>
         <td> <SELECT NAME="state">
                    <OPTION VALUE=”tas”>Siswa
                    <OPTION VALUE=”vic”select>Guru
                    <OPTION VALUE=”wa” SELECTED>Umum
 </SELECT>
</td>
 </tr>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td> : </td>
<td><input type="radio" name="jenis_kelamin" value="L"> Laki Laki &nbsp;
<input type="radio" name="jenis_kelamin" value="P"> Perempuan</td>
</tr>
<tr>
<td>Komentar</td>
<td> : </td>
<td><textarea input type="text" name="komentar" rows=5 cols=30></textarea></td>
</tr>
 <tr>
<td><br><input type="submit" name="submit" value="Simpan" style="width:80px;"></td>
<td><br></td>
<td><br><input type="reset" name="reset" value="Ulangi" style="width:80px;"></td>
<td><br><input type="reset" name="reset" value="Batal" style="width:80px;"></td>      
</tr>
 </table>
 </form>
 </div>
 <script type="text/javascript">
 var myform = document.forms['myform']
myform.onsubmit = function() 
 {
     if (this.elements['Nama'].value == '')
     { alert('Nama belum diisi !'); }
     
else if (this.elements['Alamat'].value == '')
     { alert('Alamat belum diisi !'); } else if (this.elements['No.Telp'].value == '')
     { alert('No.Telp belum diisi !'); }
else if (this.elements['jenis_kelamin'][0].
checked == false && this.elements['jenis_kelamin'][1].checked == false)
     { alert('Jenis kelamin belum dipilih !'); } 
else if (this.elements['komentar'].value == '')
     { alert('Komentar belum diisi !'); }
else 
     { document.write('Sukses; }
  return false;
 }
 </script>
 </body>
 </html>