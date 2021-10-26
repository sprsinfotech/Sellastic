<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Model {

    var $order = array('id' => 'desc');
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    public function get_category(){
        $query = $this->db->get('cat_tbl');
        return $query;  
    }
 
public function get_sub_category($category_id){
        $query = $this->db->get_where('sub_cat_tbl', array('cat_code' => $category_id));
        return $query;
    }
    
private function make_query($tbl){
        $column_order = $this->db->list_fields($tbl); //this sql query will fetch only feild/column names from given table - user = id, name, f,b,v
	 	$column_search = $this->db->list_fields($tbl); //this sql query will fetch only feild/column names from given table
		$this->db->from($tbl);
        $this->db->where('date','2021-10-25');
        $i = 0;
        foreach ($column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

public function make_datatables($tbl){  
           $this->make_query($tbl);  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

public function find_datatables($tbl, $search_data){  
           $this->db->where('customer_id','12');  
           $query=$this->db->get($tbl);  
           return $query->result();  
      }
public function get_filtered_data($tbl){  
        $this->make_query($tbl);
        $query = $this->db->get();
        return $query->num_rows();
      }       
public function get_all_data($tbl){
           $this->db->from($tbl);
           return $this->db->count_all_results();  
      }  
public function insert_crud($tbl,$data){  
           $this->db->insert($tbl, $data);  
      }  
public function get_by_id($id,$tbl){
        $this->db->from($tbl);
        $this->db->where('id',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
public function fetch_single_user($user_id, $tbl){  
           $this->db->where("id", $user_id);  
           $query=$this->db->get($tbl);  
           return $query->result();  
      }
public function update_crud($id, $data, $tbl){  
           $this->db->where("id", $id);  
           $this->db->update($tbl, $data);  
      }
public function delete_row($id, $tbl){
    $this -> db -> where('id', $id);
    $this -> db -> delete($tbl);
}
public function count_all($tbl){
  $query = $this->db->get($tbl);
  return $query->num_rows();
 }
public function fetch_details($limit, $start, $tbl){
 
  $this->db->select("*");
  $this->db->from($tbl);
  $this->db->order_by("id", "ASC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
     return $query;
 }

}