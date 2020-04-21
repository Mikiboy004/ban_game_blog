<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dynamic_dependent_model');
    }

    public function index()
    {
        $data['post'] = $this->db->get_where('tbl_post',['status' => 1])->result_array();
        $data['banner'] = $this->db->get('tbl_banner')->result_array();
        $this->load->view('option/header');
        $this->load->view('home',$data);
        $this->load->view('option/footer');    
    }


  
}
