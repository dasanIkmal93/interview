<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');

    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        if($this->input->post('username')=="" || $this->input->post('password')==""){

            $this->load->view('login');
        }
        $email=$this->input->post('username');
        $password=$this->input->post('password');

        $password=md5($password);

        $data['email']=$email;
        $data['password']=$password;

        $result= $this->LoginModel->validate($data);
//       var_dump($result[0]->user_id);
        if($result[0]->user_id){
            $_SESSION["user_id"]=$result[0]->user_id;
            redirect('Welcome');
        }else{
            $error= array('error' => "Login Details Incorrect");
            $this->load->view('login', $error);
        }


    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('Welcome');

    }
}