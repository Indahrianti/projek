<?php
class Dosen extends Database
{
    // menampilkan semua data
    public function index()
    {
        $datadosen = mysqli_query($this->koneksi, "select * from daftar");
        //var_dump($database);
        return $datadosen;
    }

    //menambah data
    public function create($nama, $askol, $ket)
    {
        mysqli_query(
            $this->koneksi,
            "insert into daftar values(null,'$nama','$askol','$ket')"
        );
    }
    //menampilkan data berdasarkan id
    public function show($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from daftar where id='$id'"
        );
        return $datadosen;
    }
    //menampilkan data berdasarkan id
    public function edit($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from daftar where id='$id'"
        );
        return $datadosen;
    }
    //mengupdate data berdasarkan id
    public function update($id, $nama, $askol, $ket)
    {
        mysqli_query(
            $this->koneksi,
            "update daftar set nama='$nama', askol='$askol', ket='$ket' where id='$id'"
        );
    }
    //menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from daftar where id='$id'");
    }

}
