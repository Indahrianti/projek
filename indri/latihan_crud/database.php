<?php
class Database {
    public $host = "localhost",$user ="root", $pass="",$db ="latihan-crud";
    public $koneksi;

    public function __construct()
    {
        $this ->koneksi =mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            //echo *berhasil";
        }else {
            echo "koneksi database Gagal";
        }
    }
}
//data tabel dosen & mahasiswa
include 'dosen.php';
//include 'mahasiswa.php';
//koneksi db
$db =new Database();