<?php
    ob_start();
    session_start();
    $user        = $_POST['user'];
    $password    = $_POST['password'];
    $_SESSION['user'] = $user;
        $Open = mysql_connect("localhost","root","");
            if (!$Open){
            die ("Koneksi ke Engine MySQL Gagal !");
                }
        $Koneksi = mysql_select_db("login");
            if (!$Koneksi){
            die ("Koneksi ke Database Gagal !");
            }
    $sql = "SELECT * FROM admin where user='$user'";
    $qry = mysql_query($sql);
    $num = mysql_num_rows($qry);
    $row = mysql_fetch_array($qry);

    if ($num==0 OR $password!=$row['password']) {
    ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai !');
            document.location='index.php';
        </script>
    <?php
    }
    else {
        $_SESSION['login']=1;
        header("Location: home.php");
    }
    mysql_close($Open); //Tutup koneksi engine MySQL
?>