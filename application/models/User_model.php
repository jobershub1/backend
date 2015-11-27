<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User_model Extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    function insert_signup_details()
    {
        /*$this->load->database();
        $id=$this->input->post('id');
        $title=$this->input->post('title');
        $text=$this->input->post('text');

        $data=array('id'=>$id,'title'=>$title,'text'=>$text);
        $this->db->insert('data',$data);*/
		echo 'hello';exit;
    }
}
