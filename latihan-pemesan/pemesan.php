<?php
class Pemesan extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $pemesan = mysqli_query($this->koneksi, "select * from pemesan");
        // var_dump($datapemesan);
        return $pemesan;
    }

    // Menambah Data
    public function create($nama, $nama_kereta, $jenis, $harga)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pemesan values(null,'$nama','$nama_kereta','$jenis','$harga')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $pemesan = mysqli_query(
            $this->koneksi,
            "select * from pemesan where id='$id'"
        );
        return $pemesan;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $pemesan = mysqli_query(
            $this->koneksi,
            "select * from pemesan where id='$id'"
        );
        return $pemesan;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $nama_kereta, $jenis, $harga, $tanggal)
    {
        mysqli_query(
            $this->koneksi,
            "update pemesan set tanggal='$tanggal', harga='$harga', jenis='$jenis', nama_kereta='$nama_kereta', nama='$nama' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from pemesan where id='$id'");
    }
}
?>`