<?php

class Admin extends Controller {
    public function index() {
        $data['judul'] = 'dashboard';
        $data['minimal_header'] = false; // opsi 2
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer', $data);
    }

    public function register() {
        $data['judul'] = 'register';
        $data['minimal_header'] = false;
        $this->view('templates/header', $data);
        $this->view('admin/register', $data);
        $this->view('templates/footer', $data);
    }

    public function panduan() {
        $data['judul'] = 'panduan';
        $data['minimal_header'] = false;
        $this->view('templates/header', $data);
        $this->view('admin/panduan', $data);
        $this->view('templates/footer', $data);
    }

    public function profile() {
        $data['judul'] = 'Profile';
        $data['minimal_header'] = false;
        $data['css'] = ['styling.css'];
        $this->view('templates/header', $data);
        $this->view('admin/profile', $data);
        $this->view('templates/footer', $data);
    }

    public function tabelMaster($kategori = '') {
        $data['judul'] = 'Tabel Master - ' . ucfirst($kategori);
        $data['css'] = 'table.css';
        $data['kategori'] = $kategori;
        $data['minimal_header'] = false;
    
        // Validasi kategori untuk memastikan file view ada
        $validKategori = ['guru', 'siswa', 'guruMapel', 'masterMapel', 'masterKelas'];
    
        if (in_array($kategori, $validKategori)) {
            $this->view('templates/header', $data);
            $this->view("admin/tabelMaster/$kategori", $data);
            $this->view('templates/footer', $data);
        } else {
            // Jika kategori tidak valid, tampilkan halaman error atau default
            $data['judul'] = 'Halaman Tidak Ditemukan';
            $this->view('templates/header', $data);
            $this->view('templates/404', $data); // Pastikan Anda memiliki view ini
            $this->view('templates/footer', $data);
        }
    }
    
    
}
