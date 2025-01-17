<?php

class Guru extends controller {
    public function index() {
        $data ['judul'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('templates/footer', $data);
        $this->view('guru/index', $data);
    }
}