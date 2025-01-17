<?php

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $data['css'] = ['nav.css', 'styles.css', 'ionicons.min.css'];
        $data['minimal_header'] = true; // opsi 1
        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/main_footer', $data);
    }

    public function login() {
        $data['judul'] = 'Login';
        $data['css'] = ['styles.css', 'ionicons.min.css'];
        $data['minimal_header'] = true;
        $this->view('templates/header', $data);
        $this->view('home/login', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/main_footer', $data);
    }

    public function about() {
        $data['judul'] = 'About';
        $data['css'] = ['nav.css', 'styles.css', 'ionicons.min.css'];
        $data['minimal_header'] = true;
        $data['js'] = 'script.js';
        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('home/about', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/main_footer', $data);
    }

    public function guide() {
        $data['judul'] = 'Guide';
        $data['css'] = ['nav.css','styles.css', 'ionicons.min.css'];
        $data['minimal_header'] = true;
        $data['js'] = 'script.js';
        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('home/guide', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/main_footer', $data);
    }

    public function features() {
        $data['judul'] = 'Features';
        $data['css'] = ['nav.css','styles.css', 'ionicons.min.css'];
        $data['minimal_header'] = true;
        $data['js'] = 'script.js';
        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('home/features', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/main_footer', $data);
    }
}
