<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logon_model extends CI_Model {
    // your model

    public function login($username, $password) {
      $this->db->where('email', $username);
      //$this->db->where('password', $password); // You should hash and salt your passwords securely.
      $query = $this->db->get('users');
      //echo $this->db->last_query();die;
      return $query->row_array();
  }
    
    public function get_alldata($table, $where){

      //$this->db->select('*')->from($table);
      $this->db->select(' t1.*,t2.name ')->from($table .'  as t1');
      $this->db->join('roles as t2', 't1.role_id = t2.id', 'LEFT');
      if($where !=""){
         $this->db->where('role_id', $where);
      }
      $query=$this->db->get();
     
      return $query->result('array');
  
   }

    public function get_data($table, $rolid){

        
        if($rolid !=""){
         $this->db->select('*')->from($table);
             $this->db->where('role_id', $rolid);
             
        }else{
            $this->db->select(' t1.*,t2.username ')->from($table .'  as t1');
            $this->db->join('users as t2', 't1.assigned_to = t2.role_id', 'LEFT');
        }
        $query=$this->db->get();
       
        return $query->result('array');
    
     }

     public function get_scholl_data_ByID($id=""){

        $this->db->select('*')->from('tbl_schools');
        $this->db->where('school_id', $id);
        $query=$this->db->get();
        return $query->row_array();

     }

     public function register_user($data){

        $response = $this->db->insert('users',$data);
        if($response==true){

           return $data = array(
				'msg' => 'Registered Successfully',
				'status' => true,
			);
            
        }else{
            return $data = array(
				'msg' => 'Something went Wrong !',
				'status' => false,
			);
        }

     }

     public function generate_license($data){
      $response = $this->db->insert('manage_license',$data);
        if($response==true){

           return $data = array(
				'msg' => 'Registered Successfully',
				'status' => true,
			);
            
        }else{
            return $data = array(
				'msg' => 'Something went Wrong !',
				'status' => false,
			);
        }

     }


 }
