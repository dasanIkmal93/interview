<?php
class Main extends CI_Model{

    Public function __construct() {
        parent::__construct();
        $this->load->database();

    }

    function getCategory(){
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result();
    }

    function newAdd($data){
        $items = array('u_id'=>$data['user_id'],
                        'a_name'=>$data['name'],
                        'a_discription'=>$data['description'],
                        'plan'=>$data['package'],
                        'category'=>$data['category']);
        $this->db->insert('add', $items);

        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }

        return FALSE;
    }
    function getAdds(){
        $this->db->select('*');
        $this->db->from('add');
        $this->db->join('user', 'user.user_id = add.u_id');
        $query = $this->db->get();

        if($query->num_rows()>0) {

            return $query->result();

        }else {

            return "empty";
        }
    }

}
?>