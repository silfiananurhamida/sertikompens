<?php

require_once __DIR__.'/AwalanBase.php';

class dataPegawai extends BaseModel {
    public function getAll() {
        $sql = "SELECT p.*, d.nama AS nama_departemen 
            FROM pegawai AS p
            JOIN departemen AS d ON p.id_departemen = d.id
            ORDER BY p.id";
        return $this->db->getMultiResult($sql);
    }
    // untuk mendapatkan data dari server
    public function get(int $id) {
        $sql = "SELECT * FROM pegawai WHERE id=$id LIMIT 1";
        return $this->db->getSingleResult($sql);
    // untuk membuat data
    }public function create($idDepartemen, $nama, $gender, $alamat) {
        $sql = "INSERT INTO pegawai (id_departemen, nama, gender, alamat)
            VALUES ('$idDepartemen', '$nama', '$gender', '$alamat')";
        return $this->db->getResult($sql);
    // Untuk update data
    }public function update(int $id, $idDepartemen, $nama, $gender, $alamat) {
        $sql = "UPDATE pegawai
            SET id_departemen='$idDepartemen', nama='$nama', gender='$gender', alamat='$alamat'
            WHERE id=$id";
        return $this->db->getResult($sql);
    // Untuk hapus data
    }public function delete(int $id) {
        $sql = "DELETE FROM pegawai WHERE id=$id";
        return $this->db->getResult($sql);
    }
}