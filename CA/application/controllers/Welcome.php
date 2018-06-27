<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main');
    }

	public function index()
	{
        $data['category'] = $this->Main->getCategory();
        $data['adds'] = $this->Main->getAdds();
		$this->load->view('index',$data);
	}

}
