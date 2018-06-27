<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Upload_Save');

    }


    public function do_upload()
    {
        if ($this->input->post('first_name')!=""|| $this->input->post('last_name')!="" || $this->input->post('email')!="" || $this->input->post('password') != "" ) {


            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = $this->input->post('first_name') . "_" . $this->input->post('last_name');

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('registerView', $error);
            } else {
                $data = array('upload_data' => $this->upload->data());
                $data['upload_data']['fname'] = $this->input->post('first_name');
                $data['upload_data']['lname'] = $this->input->post('last_name');
                $data['upload_data']['address'] = $this->input->post('address');
                $data['upload_data']['email'] = $this->input->post('email');
                $data['upload_data']['contactNumber'] = $this->input->post('contactNumber');
                $data['upload_data']['password'] = md5($this->input->post('password'));

                //change path
                $path = $data['upload_data']['full_path'];
                $name = $data['upload_data']['raw_name'];
                $finalPath = strstr($path, $name);
                $data['upload_data']['full_path'] = "../uploads/" . $finalPath;

//            //change name
                $data['upload_data']['raw_name'] = str_replace("_", " ", $name);

                $this->Upload_Save->dbsave($data);
                $this->load->view('Login');
            }
        }else{
            echo "<script>
            alert(\"Please Fill All Fields!!\");
            window.location.href='/CA/index.php/Register';
            </script>";
        }
    }



}
