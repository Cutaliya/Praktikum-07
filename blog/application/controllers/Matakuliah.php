<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('matakuliah_model', 'mk1');

        // buat object model 1 dan nilai nya
        $this->mk1->id=1;
        $this->mk1->nama='Pemograman web';
        $this->mk1->sks='3';
        $this->mk1->kode='PW1';

        $this->load->model('matakuliah_model', 'mk2');
        // buat object model 2 dan nilai nya
        $this->mk2->id=2;
        $this->mk2->nama='Dasar-Dasar Pemograman';
        $this->mk2->sks='3';
        $this->mk2->kode='DDP2';

        $this->load->model('matakuliah_model', 'mk3');
        // buat object model 3 dan nilai nya
        $this->mk3->id=3;
        $this->mk3->nama='Basis Data';
        $this->mk3->sks='3';
        $this->mk3->kode='BD3';

       // simpan object yang kita buat tadi ke dalam array
       $list_mk = [$this->mk1, $this->mk2, $this->mk3];
       // siapkan data untuk di kirim ke dalam view, dimana datanya di ambil dari object yang kita simpan ke dalam view
       $data['list_mk'] = $list_mk;
       // render data dan kirim data ke dalam view
       $this->load->view('matakuliah/index', $data);
    }
}
?>