<?php
class Upload_Save extends CI_Model{

    Public function __construct() {
        parent::__construct();
        $this->load->database();

    }

    function dbsave($data){

        $items = array('user_fname'=>$data['upload_data']['fname'],
                        'user_lname'=>$data['upload_data']['lname'],
                        'user_email'=>$data['upload_data']['email'],
                        'user_password'=>$data['upload_data']['password'],
                        'user_address'=>$data['upload_data']['address'],
                        'user_telephon'=>$data['upload_data']['contactNumber'],
                        'user_image'=>$data['upload_data']['full_path'],
                        );


        $this->db->insert('user', $items);

        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }

        return FALSE;
    }

}
?>