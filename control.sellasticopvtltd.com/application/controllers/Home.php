<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('pages/login_pg');
		$this->load->view('template/footer');
	}

	public function checking(){
	$result=array();
	$name = $this->input->post('nam');
	$password = $this->input->post('pass');
	$userfind =$this->Home_model->finder(array('name' => $name,'password' => $password), 'login_tbl'); 
	if($userfind){
		$this->session->set_userdata('ses_data',$userfind->row());
		$result['status']='0';
	}
	else{
		$result['status']='2';
	}
	echo json_encode($result);
	}
	
	public function logout(){
		$this->session->unset_userdata('ses_data');
		$this->session->sess_destroy();
		redirect('home/index');
		}

	public function land(){
		if($this->session->has_userdata('ses_data')){
			$data['user_data']=$this->session->ses_data;
			$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('template/nav',$data);
		$this->load->view('pages/landing',$data);
		$this->load->view('template/sidebar_right',$data);
		$this->load->view('template/footer');
		}else{
			redirect('home/index');
		}
		
	}

	public function data_tbl(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/nav');
		$this->load->view('pages/data_tbl');
		$this->load->view('template/sidebar_right');
		$this->load->view('template/footer');
	}

	public function user(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/nav');
		$this->load->view('pages/user_management/user_tbl');
		$this->load->view('template/sidebar_right');
		$this->load->view('template/footer');
	}
	public function credential(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/nav');
		$this->load->view('pages/user_management/cred');
		$this->load->view('template/sidebar_right');
		$this->load->view('template/footer');
	}
	public function member(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/nav');
		$this->load->view('pages/user_management/members');
		$this->load->view('template/sidebar_right');
		$this->load->view('template/footer');
	}

	public function Payment(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/nav');
		$this->load->view('pages/Payment_pg');
		$this->load->view('template/footer');
	}

	public function Earning(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/nav');
		$this->load->view('pages/Earning_pg');
		$this->load->view('template/footer');
	}

	public function Referral(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/nav');
		$this->load->view('pages/Referral_pg');
		$this->load->view('template/footer');
	}




public function test_pg(){
		
	$this->load->view('pages/test_pg');
}

public function upi(){
	if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('template/header');
	$this->load->view('template/sidebar',$data);
	$this->load->view('template/nav',$data);
	$this->load->view('pages/bank_management/upi',$data);
	$this->load->view('template/sidebar_right',$data);
	$this->load->view('template/footer');
	}else{
		redirect('home/index');
	}
	
}

public function wallet(){
	if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('template/header');
	$this->load->view('template/sidebar',$data);
	$this->load->view('template/nav',$data);
	$this->load->view('pages/bank_management/wallet',$data);
	$this->load->view('template/sidebar_right',$data);
	$this->load->view('template/footer');
	}else{
		redirect('home/index');
	}
	
}

public function neft(){
	if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('template/header');
	$this->load->view('template/sidebar',$data);
	$this->load->view('template/nav',$data);
	$this->load->view('pages/bank_management/neft',$data);
	$this->load->view('template/sidebar_right',$data);
	$this->load->view('template/footer');
	}else{
		redirect('home/index');
	}
	
}

public function master(){
	if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('template/header');
	$this->load->view('template/sidebar',$data);
	$this->load->view('template/nav',$data);
	$this->load->view('pages/payout_pg/master_pay',$data);
	$this->load->view('template/sidebar_right',$data);
	$this->load->view('template/footer');
	}else{
		redirect('home/index');
	}
	
}

public function wallet_bonus(){
	if($this->session->has_userdata('ses_data')){
		$data['user_data']=$this->session->ses_data;
		$this->load->view('template/header');
	$this->load->view('template/sidebar',$data);
	$this->load->view('template/nav',$data);
	$this->load->view('pages/bank_management/bonus',$data);
	$this->load->view('template/sidebar_right',$data);
	$this->load->view('template/footer');
	}else{
		redirect('home/index');
	}
	
}



public function test(){
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('template/nav');
	$this->load->view('pages/test');
	$this->load->view('template/sidebar_right');
	$this->load->view('template/footer');
}

public function invoice(){
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('template/nav');
	$this->load->view('pages/payout_pg/Invoice_pg');
	$this->load->view('template/sidebar_right');
	$this->load->view('template/footer');
}

public function reports(){
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('template/nav');
	$this->load->view('pages/payout_pg/Reports_pg');
	$this->load->view('template/sidebar_right');
	$this->load->view('template/footer');
}

public function setings(){
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('template/nav');
	$this->load->view('pages/payout_pg/Setings_pg');
	$this->load->view('template/sidebar_right');
	$this->load->view('template/footer');
}

public function settlements(){
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('template/nav');
	$this->load->view('pages/payout_pg/Settlement_pg');
	$this->load->view('template/sidebar_right');
	$this->load->view('template/footer');
}

public function transection(){
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	$this->load->view('template/nav');
	$this->load->view('pages/payout_pg/Transection_pg');
	$this->load->view('template/sidebar_right');
	$this->load->view('template/footer');
}

}