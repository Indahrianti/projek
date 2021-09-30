<?Php 
echo " GRADE PENILAIAN DENGAN KETENTUAN : <br>";

 $nilai = 101;
 if ($nilai >= 91 && $nilai <= 100) {
     echo "nilai anda adalah = A";
 } elseif ($nilai >= 80 && $nilai <= 90) {
     echo "nilai anda adalah = B";
 } elseif ($nilai >= 71 && $nilai <= 80) {
     echo "nilai anda adalah = C";
 } elseif ($nilai >= 61 && $nilai <= 75) {
     echo "nilai anda adalah = D";
 } elseif ($nilai <= 51 && $nilai <= 60) {
     echo "nilai anad adalah = E";
 } else {
     echo " Anda tidak bisa menampilkan !!";
 }
 ?>