<?php

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function register_user($username, $email, $password)
    {
        // Veritabanına kullanıcıyı ekle
        $data = array(
            'kullanici' => $username,
            'email' => $email,
            'parola' => password_hash($password, PASSWORD_DEFAULT) // Parolayı güvenli bir şekilde hashle
        );

        return $this->db->insert('users', $data);
    }
}
