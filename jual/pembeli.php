<?php
class beli extends Database
{
    //menampilkan semua data
    public function index()
    {
        $databeli = mysqli_query($this->koneksi, "select * from pembeli");
        //var_dump($databeli);
        return $databeli;

    //menambah data
    public function create ($nama_buku, $nama_pembeli, $harga)
    {
        mysqli_query(
            $this->koneksi,
            "insert into  values (null,'$nama_buku','$nama_pembeli','$harga')"
        );
    }
    //menampilkan data berdasarkan ID
    public function show($id_buku)
    {
        $databeli = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id_buku ='$id_buku'"
        );
        return $databeli;
    }
    //mengupdate data berdasarkan id
    public function update($id_buku, $nama_buku, $nama_pembeli,$harga)
    {
        mysqli_query(
            $this->koneksi,
            "update  set nama_buku= '$nama_buku',nama_pembeli='$nama_pembeli',harga='$harga' where id_buku='id_buku'"
        );
    }
    //menghapus data berdasarkan id
    public function dalete($id_buku)
    {
        mysqli_query($this->koneksi, "delete from pembeli  where id_buku='$id_buku'");
    }
}
