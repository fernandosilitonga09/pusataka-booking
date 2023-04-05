<?php

class Biodata extends CI_Controller {

    public function index()
    {
        $this->load->view('biodata');
    }
    public function penjumlahan($nilai1, $nilai2){
        echo $this->Model_aritmatika->penjumlahan($nilai1, $nilai2);
    }
}