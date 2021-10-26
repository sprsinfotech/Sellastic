<?php

class Apicall extends CI_Controller {

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
	echo json_encode($result);

    
}






}