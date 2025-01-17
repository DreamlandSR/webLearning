<?php

class Siswa extends Controller {
    public function index() {
        $data ['judul'] = 'dashboard';
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
}