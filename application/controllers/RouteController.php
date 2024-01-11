<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RouteController extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Anasayfa',
            'description' => 'Anasayfa hakkında ki açıklamadır.',
        );

        $this->load->view('index', $data);
    }

    public function about()
    {
        $data = array(
            'title' => 'Hakkımızda',
            'description' => 'Hakkımızda hakkında ki açıklamadır.',
        );

        $this->load->view('about', $data);
    }

    public function contact()
    {
        $data = array(
            'title' => 'İletişim',
            'description' => 'İletişim hakkında ki açıklamadır.',
        );

        $this->load->view('contact', $data);
    }

    public function register()
    {
        $this->load->view('admin/register');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }
}
