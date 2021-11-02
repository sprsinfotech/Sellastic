<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->model('datatables', 'crdm');
	//	$this->load->model('homemodel'); 
		$this->load->database();
	}
	
	function fetch_multi_tbl_data(){
		$tbl = $this->input->post('tbl');
		$tbl1 = $this->input->post('tbl1');
	
		$fetch_multi_data = $this->crdm->getmultidata('master_pay_tbl','fund_acc_tbl','userid');
		
		$data = array();
		$fields = $this->db->list_fields($tbl);
		$fields1 = $this->db->list_fields($tbl1);
		$fields = array_merge($fields,$fields1);
		$no = $_POST['start'];
		foreach ($fetch_multi_data as $person) {
			$no++;
            $row = array();
			// loop through fields //
			foreach ($fields as $field){
			 $row[$field] = $person->$field; 
			}
		 
		 $row['action_sel'] = '';
		 $row['action_view'] = '<button type="button" class="btn btn-success btn-sm view" onclick="view_person('."'".$person->id."'".')" data-toggle="modal" data-target=".bd-example-modal-lg" >View</button>';
		 $row['action_edit'] = '<button type="button" data-tbl="'.$tbl.'" name="edit" id="'.$person->id.'" class="btn btn-primary btn-sm edit" onclick="view_person('."'".$person->id."'".')">Edit</button>';
		 $row['action_delete'] = '<button type="button" class="btn btn-danger btn-sm" onclick="delete_person('."'".$person->id."'".')">Delete</button>';
		 $data[] = $row;
	 }

	 $output = array(
					 "draw" => $_POST['draw'],
					 "recordsTotal" => $this->crdm->get_all_data($tbl),
					 "recordsFiltered" => $this->crdm->get_multi_filtered_data($tbl,$tbl1),
					 "data" => $data,
			 );
	 echo json_encode($output);
   }

     function fetch_products_list_data(){
		   $tbl = $this->input->post('tbl'); 
           $fetch_data = $this->crdm->make_datatables($tbl);
           $data = array();
		   $fields = $this->db->list_fields($tbl);
		   $no = $_POST['start'];
		  foreach ($fetch_data as $person) {
            $no++;
            $row = array();
			// loop through fields //
			foreach ($fields as $field){
			 $row[$field] = $person->$field; 
			} 
            //add html for action
            
            $row['action_sel'] = '';
			$row['action_view'] = '<button type="button" class="btn btn-success btn-sm view" onclick="view_person('."'".$person->id."'".')" data-toggle="modal" data-target=".bd-example-modal-lg" >View</button>';
			$row['action_edit'] = '<button type="button" data-tbl="'.$tbl.'" name="edit" id="'.$person->id.'" class="btn btn-primary btn-sm edit" onclick="view_person('."'".$person->id."'".')">Edit</button>';
			$row['action_delete'] = '<button type="button" class="btn btn-danger btn-sm" onclick="delete_person('."'".$person->id."'".')">Delete</button>';
            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->crdm->get_all_data($tbl),
                        "recordsFiltered" => $this->crdm->get_filtered_data($tbl),
                        "data" => $data,
                );
        echo json_encode($output);
      }

	 function fetch_data_by_search(){  
		   $tbl = $this->input->post('tbl'); 
		   $search_array = array($this->input->post('searchby') => $this->input->post('id'));
           $fetch_data = $this->crdm->find_datatables($tbl, $search_array);  
           $data = array();
		   $fields = $this->db->list_fields($tbl);
		   $no = $_POST['start'];
		  foreach ($fetch_data as $person) {
            $no++;
            $row = array();
			// loop through fields //
			foreach ($fields as $field){
			 $row[$field] = $person->$field; 
			}
            //add html for action
			$row['action_view'] = '<button type="button" class="btn btn-success btn-sm view" onclick="view_person('."'".$person->id."'".')">View</button>';
			$row['action_edit'] = '<button type="button" class="btn btn-primary btn-sm edit" onclick="edit_person('."'".$person->id."'".')">Edit</button>';
			$row['action_delete'] = '<button type="button" class="btn btn-danger btn-sm" onclick="delete_person('."'".$person->id."'".')">Delete</button>';
            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->crdm->get_all_data($tbl),
                        "recordsFiltered" => $this->crdm->get_filtered_data($tbl),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
	  }
	  
	 public function fetch_single_data(){
		  $tbl = $this->input->post('tbl'); 
		  $id = $this->input->post('id'); 
        	$data = $this->crdm->get_by_id($id, $tbl);
        echo json_encode($data);
	}
	
	 function do_upload(){
        $config['upload_path'] = './uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
        $config['encrypt_name'] = TRUE; //encrypt file name
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
  		echo ($title.$image);        
        }else{
            echo "Failed, Image file is empty.";
        }
                 
    }
     
	 function update_action(){
	date_default_timezone_set('Asia/Kolkata');
	$output=array();
	$tbl_name =  $this->uri->segment(3, 0);
	$id = $this->input->post('id');
	$data = $this->input->post();
	$fields = array();
	$row = array();
        //Make array from post data//		
        foreach($data as $key => $value){
            $row[$key] = strip_tags($value);
            }
            $fields = $row;
                $checkrt = $this->home_model->finder(array('id'=>$this->input->post('id')),$tbl_name );
                if(!empty($checkrt) && ($checkrt->num_rows() > 0) ){
                    $update_data = $this->crdm->update_crud($id, $fields, $tbl_name);
                    $output['error']=false;
                    $output['status']='Updated Successfull';
                }else{
                    $output['error']=false;
                    $output['status']='Data not found!';
                }
                echo json_encode($output);
            }
            
            function fetch_single_user(){
                $tbl = $this->input->post('tbl'); 
                $data = $this->crdm->fetch_single_user($_POST["id"], $tbl);
                foreach($data as $key => $value){
                        $fields[$key] = $value;
            }
                echo json_encode($fields);
            }
            
            function crud_delete(){
                $output = array();
                
                $tbl = $this->input->post('tbl'); 
            
                $delete = $this->crdm->delete_row($this->input->post("id"), $tbl);  
                
                if($delete){
                    $output['status']='Data Deleted Successfully';
                    $output['error']= false;
                }else{
                    $output['status']='No Data Found!';
                    $output['error']= true; 
                }
                
                echo json_encode($output);
                
            }
            
        // New data insert func //
public function api_ins(){
	date_default_timezone_set('Asia/Kolkata');
	$msg=array();
	$output=array();
	$tbl_name = $this->input->get('tbl');
	$type = $this->input->get('type');

	$data = $this->input->post();
	$fields = array();
	$row = array();

		if($type == "addN"){
			foreach($data as $key => $value){
				$row[$key] = strip_tags($value);
				}
		
				if (array_key_exists('user_image', $row)) {
					$row['status']= "Yaap, got an Image";
				}else{
					$upload = $this->upload_image();
					if($upload['error'] == 1){
						$msg=array('error' => true);
						$msg['message'] = $upload['message'];
					}else{
						$newfile = pathinfo($upload['message'], PATHINFO_FILENAME);
						$ext = pathinfo($upload['message'], PATHINFO_EXTENSION);
						$row['item_img'] = 'uploads/products/'.$newfile.'.'.$ext;
						$productdata = $row;
						$insert_product = $this->crdm->insert_crud($tbl_name,$productdata);
						$msg=array('error' => false);
						$msg['message'] = 'Product Added Successfully.';
					}
				}
		}elseif($type == "addU"){
			foreach($data as $key => $value){
				$row[$key] = strip_tags($value);
				}
			$user_image = '';

			if($_FILES["user_image"]["name"] != ''){  
					$upload = $this->upload_image();  
					if($upload['error'] == 1){
						$msg=array('error' => true);
						$msg['message'] = $upload['message'];
						//$row['item_img'] = $this->input->post("hidden_user_image");
					}else{
						$newfile = pathinfo($upload['message'], PATHINFO_FILENAME);
						$ext = pathinfo($upload['message'], PATHINFO_EXTENSION);
						$row['item_img'] = 'uploads/products/'.$newfile.'.'.$ext;
					}
                }else{  
					 $user_image = $this->input->post("hidden_user_image");
				}
					$productdata = $row;
					$update_product = $this->crdm->update_crud($this->input->post("id"),$productdata,$tbl_name);
					$msg=array('error' => false);
					$msg['message'] = 'Product Added Successfully.';	
		}else{
			$msg['status']='No data received!';
		}
	echo json_encode($msg);
}

public function upload_image(){
$msg = array();
if(isset($_FILES["user_image"]))
{
$extension = explode('.', $_FILES['user_image']['name']);
$new_name = rand() . '.' . $extension[1];
$config = array(
'upload_path' => "./uploads/products/",
'allowed_types' => "gif|jpg|png|jpeg",
'overwrite' => TRUE,
'file_name' => $new_name,
'max_size' => "4194304", // Can be set to particular file size , here it is 2 MB(2048 Kb)
'max_height' => "2480",
'max_width' => "2480"
);
$this->load->library('upload', $config);
if (!$this->upload->do_upload('user_image')) {
		$msg['error'] = 1;
		$msg['message'] = $this->upload->display_errors();
} else {
		$data = array('image_metadata' => $this->upload->data());
		$msg['error'] = 0;
		$msg['message'] = $new_name;
}
return $msg;
}
}


}