<?php
class Mahasiswa_model extends CI_Model{
    // buat property atau variable
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        // contoh penggunaan ternary operator
        $predikat = ($this->ipk >= 3.75) ? "Caumlaude" : "Baik";
        return $predikat;
    }

}
?>