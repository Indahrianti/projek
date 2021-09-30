<?php
class Dosen extends Database
{
    // menampilkan semua data
    public function index()
    {
        $datadosen = mysqli_query($this->koneksi, "select * from donasi");
        //var_dump($database);
        return $datadosen;
    }

    //menambah data
    public function create($nama_donatur, $jumlah,$tanggal,$keterangan)
    {
        mysqli_query(
            $this->koneksi,
            "insert into donasi values(null,'$nama_donatur','$jumlah','$tanggal','$keterangan')"
        );
    }
    //menampilkan data berdasarkan id
    public function show($id_donasi)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from donasi where id_donasi='$id_donasi'"
        );
        return $datadosen;
    }
    //menampilkan data berdasarkan id_donasi
    public function edit($id_donasi)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from donasi where id_donasi='$id_donasi'"
        );
        return $datadosen;
    }
    //mengupdate data berdasarkan id_donasi
    public function update($id_donasi, $nama_donatur, $jumlah,$tanggal,$keterangan)
    {
        mysqli_query(
            $this->koneksi,
            "update donasi set nama_donatur='$nama_donatur', jumlah='$jumlah',  tanggal='$tanggal', 
             keterangan='$keterangan', where id_donasi='$id_donasi'"
        );
    }
    //menghapus data berdasarkan id_donasi
    public function delete($id_donasi)
    {
        mysqli_query($this->koneksi, "delete from donasi where id_donasi='$id_donasi'");
    }

}
