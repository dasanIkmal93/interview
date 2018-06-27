
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main');
    }

    public function index()
    {
        $data['category'] = $this->Main->getCategory();

        $this->load->view('advertisement',$data);
    }
    public function newAdd(){

    if($this->input->post('name')!="" || $this->input->post('description')!="" )
    {


        $data['user_id']=$_SESSION['user_id'];
        $data['name']=$this->input->post('name');
        $data['package']=$this->input->post('radio');
        $data['category']=$this->input->post('category');
        $data['description']=$this->input->post('description');

        $result=$this->Main->newAdd($data);
        if($result){
            redirect('/Advertisement');

        }else{
            $error= array('error' => "Not Successful Try Again!!");
            echo "<script>
            alert(\"Not Successful Try Again!!\");
            window.location.href='/Advertisement';
            </script>";

        }
    }else{
        echo "<script>
            alert(\"Please Fill Name and Description!!\");
            window.location.href='/CA/index.php/Advertisement';
            </script>";
    }
    }
}
