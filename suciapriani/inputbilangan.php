<!DOCTYPE html>
<html>
<head>
<title>input bilangan</title>
</head>
<body>
    <h2>input bilangan</h2>
     <form method = "post" action = " ">
        masukan banyaknya bilangan :<input type = "text" name ="n" />
        <input type = 'submit' name ='submit' value ='submit' />
    </form>
</body>
    </html>
    <?php
    echo "<br>";
    if (isset($_POST['submit'])){
      $n = $_POST['n'];
      echo "<form method= 'post' action = 'inputbilangan1.php'>";
      echo "<h2> input bilangan </h2>";
   for($a=0; $a <=$n - 1; $a++){
  echo "bil ke-".($a+1)."<input type = 'text' name= 'data".$a."' /><br>";
    }
    echo "<input type = 'submit' name ='simpan' value ='submit' />";
    echo "<input type = 'hidden' name ='n' value ='".$n."' />";
    echo "</form>";
  }
  ?>
    