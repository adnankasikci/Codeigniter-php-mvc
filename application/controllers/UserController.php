<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function register()
    {
        // Kullanıcı kayıt formunu göster
        $this->load->view('register_form');
    }

    public function success_register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form verilerini alma
            $username = $_POST['kullanici'];
            $email = $_POST['email'];
            $password = $_POST['parola'];

            // Kullanıcı ekleme işlemini çağırma
            $addUserResult =  $this->UserModel->register_user($username, $email, $password);
            header('Location:success_register');
            exit;
        } else {
            $this->load->view('admin/success_register');
        }
    }
}
