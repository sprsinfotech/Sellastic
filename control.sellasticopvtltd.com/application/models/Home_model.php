<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model{

function __construct(){
			parent::__construct();
			$this->load->database();
}



 public function Nibedita_store_koro($storekikorbo, $kothayekorbo){ 
  $insert = $this->db->insert($kothayekorbo,$storekikorbo);
       if($insert){
              return true;
       }else{
            return false;
        }
}

public function counter($tbl){

     $query = $this->db->get($tbl);
     return $query->num_rows();
     
     }
     
     public function fetchdata($sort, $order,$offset,$rows,$tbl){
         $this->db->select('*');
         $this->db->from($tbl);
         $this->db->order_by($sort,$order);
         
         if($offset!='' && $rows!=''){
                $this->db->limit($offset, $rows);
         }
         $query=$this->db->get();
         return $query->result();
     
     }
     
     public function insert($data,$tbl){
         $insert = $this->db->insert($tbl,$data);
                if($insert){
                    return true;
                        }else{
                    return false;
                }
     }
     
     public function update($data,$tbl, $finderarray){
         $update =  $this->db->update($tbl,$data,$finderarray);
               if($update){
                   return true;
                       }else{
                   return false;
               }
     }

     public function finder($param, $tbl){
        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->where($param);
        $query = $this->db->get();
        
        if($query->num_rows()>0){
        return $query;
        }else{
        return false;
        }
  
}

}