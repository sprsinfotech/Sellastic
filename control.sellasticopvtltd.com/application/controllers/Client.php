<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index(){
        $ccode = $this->uri->segment(3,0);

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/nav');
		$this->load->view('pages/landing');
		$this->load->view('template/footer');
	}



public function inserteventdata(){
	 $result=array();

	 $Riya = array(
		'full_name' => $this->input->post('full_name'),
		'org_name' => $this->input->post('org_name'),
		'dob_name' => $this->input->post('dob_name'),
		'gender' => $this->input->post('gender'),
		'f_h_name' => $this->input->post('f_h_name'),
		'mail' => $this->input->post('mail'),
		'city' => $this->input->post('city'),
		'district' => $this->input->post('district'),
		'address' => $this->input->post('address'),
		'inputState' => $this->input->post('inputState'),
		'zip' => $this->input->post('zip'),
		'mobile_no' => $this->input->post('mobile_no'),
		'email' => $this->input->post('email'),
		'quli' => $this->input->post('quli'),
		'exp' => $this->input->post('exp'),
		'achivements' => $this->input->post('achivements'),
		'cata' => $this->input->post('cata'),
		'date' => $this->input->post('date'),
		'sign1' => $this->input->post('sign1'),
		'sign2' => $this->input->post('sign2'),
		'status'=>'1',
	 );

	 $nibedita_stor_kore_janao =  $this->Home_model->Nibedita_store_koro($Riya, 'register_form');
	 
	 if($nibedita_stor_kore_janao){
		$result['status']='0';
	}else{
		$result['status']= '2';
	}

echo json_encode($result);



}

public function getData(){
    
    //$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    //$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
    //$sort = isset($_POST['sort']) ? strval($_POST['sort']) : date('Y-m-d');
    //$order = isset($_POST['order']) ? strval($_POST['order']) : '';

    //$offset = ($page-1)*$rows;

    $tbl = $this->uri->segment(3,0);

    $result = array();
    $items = array();

    $rs = $this->home_model->counter($tbl);
    
    $result["total"] = $rs;
    //$data = $this->home_model->fetchdata($sort, $order,$offset,$rows,$tbl);
	 $data = $this->home_model->finder(array('date'=>date('Y-m-d')),$tbl);

     foreach($data->result() as $key){
         array_push($items, $key);
        }
        
     $result["rows"] = $items;
    echo json_encode($result);
}


public function insertData(){
	date_default_timezone_set('Asia/Kolkata');
	$msg=array();
	$data = $this->input->post();
	$fields = array();
	$row = array();
    $tbl =  $tbl = $this->uri->segment(3, 0);

    array_shift($data);

    foreach($data as $key => $value){
        $row[$key] = strip_tags($value);
        }

        $fields = $row;
        $insert = $this->home_model->insert($fields, $tbl);

        if ($insert){
            echo json_encode($fields);
    } else {
        echo json_encode(array('errorMsg'=>'Invalid data.'));
	}
}


public function updateData(){
	date_default_timezone_set('Asia/Kolkata');
	$data = $this->input->post();
	$fields = array();
	$row = array();
    $uri = $this->post_uri($this->uri);
    $tbl = $this->uri->segment(3, 0);

	$searchkey = $this->getFirstkey($data);

	foreach($data as $key => $value){
		$row[$key] = strip_tags($value);
	}

    $fields = $row;
    $update = $this->Home_model->update($fields, $tbl, $searchkey);
}

function getFirstkey($data){
    foreach($data as $key => $value) break;
    if($value){
        return array($key => strip_tags($value));
    }else{
        return false;
    }
}

public function post_uri($uri){
    $data = array();
    if($this->uri->total_segments($uri) > 2){
    $row = array();
    $segment = $this->uri->uri_to_assoc(3);
    foreach($segment as $key => $value){
       $row[$key] = $value;
   }
    $data = $row;
    return $data;
    }
}
}