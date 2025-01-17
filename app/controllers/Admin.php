<?php

class Admin extends Controller {
    public function index() {
        $data['judul'] = 'dashboard';
        $data['minimal_header'] = false; // opsi 2
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer', $data);
    }
}
