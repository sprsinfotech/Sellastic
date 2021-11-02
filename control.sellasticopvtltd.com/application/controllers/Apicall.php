<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');
require(APPPATH . '/libraries/Format.php');
use Restserver\Libraries\REST_Controller;

class Apicall extends REST_Controller{
	
	function __construct($config = 'rest') {
		parent::__construct($config);
		} 
		
		function index_post() {
			$result=array();
			$username = $this->post('username');
			$mobile_number = $this->post('mobile_number');

			if(empty($username)){
				$result['status']= 0;
				$result['msg']="Mobile Number Already Exists";
				$result['data']=array();
			}else{
					$result['status']= 1;
					$result['msg']="Successfully Account Created";
					$result['data']=array(
						'username'=> $username,
						'mobile_number'=> $mobile_number 
					);

				}
	
		$this->response($result);
		
		}
		
		function index_put() {
		$id = $this->put('item_id');
		$data = array(
		'item_name' => $this->put('item_name'),
		'note' => $this->put('note'),
		'stock' => $this->put('stock'),
		'price' => $this->put('price'),
		'unit' => $this->put('unit')
		);
		$this->db->where('id_item', $id);
		$update = $this->db->update('m_item', $data);
		if ($update) {
		$this->response($data, 200);
		} else {
		$this->response(array('status' => 'fail', 502));
		}
		}
		
		function index_delete() {
		$id = $this->delete('item_id');
		$this->db->where('id_item', $id);
		$delete = $this->db->delete('m_item');
		if ($delete) {
		$this->response(array('status' => 'success'), 201);
		} else {
		$this->response(array('status' => 'fail', 502));
		}
		}




	/*
	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

function signUp(){
    
    $result=array();
    $username = $this->input->get('username');
    $mobile_number = $this->input->get('mobile_number');

	$userfind =$this->Home_model->finder(array('name' => $username,'password' => $mobile_number), 'login_tbl');
    
	if($userfind){
		$result['status']= 0;
        $result['msg']="Mobile Number Already Exists";
        $result['data']=array();
	}else{
		$result['status']= 1;
        $result['msg']="Successfully Account Created";
        $result['data']=array(
            'username'=> $username,
            'mobile_number'=> $mobile_number 
        );
	}
	echo json_encode($result);*/

    
}