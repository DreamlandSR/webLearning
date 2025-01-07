<?php

class Controller {
    public function view($view, $data = []) {
        // Ekstrak data array menjadi variabel
        extract($data);

        // Sertakan file view
        require_once '../app/view/' . $view . '.php';
    }
}
