<?php


class LoginModel extends CI_Model
{
    Public function __construct() {
        parent::__construct();
        $this->load->database();

    }
    public function validate($data){
        $username= $data['email'];
        $password=$data['password'];
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email',$username);
        $this->db->where('user_password	',$password);
        $query = $this->db->get();

        if($query->num_rows()>0) {
            return $query->result();
        }else {
            return "empty";
        }

    }

//    public function insertdata($data){
//
//        $items = array('userName'=>$data['name'],'userPassword'=>$data['password']);
//
//        $this->db->insert('users', $items);
//
//        if ($this->db->affected_rows() == '1')
//        {
//            return TRUE;
//        }
//
//        return FALSE;
//
//    }
//    public function getPassword($pass,$passnew){
//
//        $data=array('userPassword'=>$passnew);
//        $this->db->where('userPassword',$pass);
//        $this->db->update('users', $data);
//        if ($this->db->affected_rows()==1)
//        {
//            return FALSE;
//
//        }else{
//
//            return TRUE;
//        }
//
//
//
//
//    }
//    public function deleteUser($userId){
//
//        $this->db->where('userId', 12);
//        $this->db->delete('users');
//        if ($this->db->affected_rows() == '1')
//        {
//            return TRUE;
//        }
//
//        return FALSE;
//    }

}