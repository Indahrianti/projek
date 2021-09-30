<?php
class Dosen extends Database
{
    // menampilkan semua data
    public function index()
    {
        $datadosen = mysqli_query($this->koneksi, "select * from form");
        //var_dump($database);
        return $datadosen;
    }

    //menambah data
    public function create($nama, $askol,$alamat)
    {
        mysqli_query(
            $this->koneksi,
            "insert into siswa values(null,'$nama','$askol','$alamat')"
        );
    }
    //menampilkan data berdasarkan id
    public function show($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from form where id='$id'"
        );
        return $datadosen;
    }
    //menampilkan data berdasarkan id
    public function edit($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from form where id='$id'"
        );
        return $datadosen;
    }
    //mengupdate data berdasarkan id
    public function update($id, $nama, $askol, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "update form set nama='$nama' where id='$id'"
        );
    }
    //menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from form where id='$id'");
    }

}
