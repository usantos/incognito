<?php

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    /* Authenticate the user*/
    function signin($data){
        return $this->db->get_where(USER_TABLE, $data)->result_array();
    }

     /*
    * Register the user
    */
    function save($data){
        try{ 
            if($data['id'] != null){
                $this->db->where('id',$data['id']);
                $this->db->update(USER_TABLE, $data); 
            }else{
                $this->db->insert(USER_TABLE, $data); 
            }
            return true;
       }catch(Exception $e){
           return false;
           throw new Exception($e->getMessage());
       }
    }

    function getAll($id){
        try{ 
            $this->db->where_not_in('id',$id);
            $query = $this->db->get(USER_TABLE);
            return $query->result_array();
       }catch(Exception $e){
           return false;
           throw new Exception($e->getMessage());
       }
    }

    function get($id){
        try{ 
            $this->db->where('id',$id);
            $query = $this->db->get(USER_TABLE);
            return $query->result_array();
       }catch(Exception $e){
           return false;
           throw new Exception($e->getMessage());
       }
    }
	
	function signFacebook($email){
        try{ 
            $this->db->where('email',$email);
            $query = $this->db->get(USER_TABLE);
            $result = $query->result_array();
			
            return $result;
       }catch(Exception $e){
           return false;
           throw new Exception($e->getMessage());
       }
    }

    function getByGender($gender, $id){
        try{ 
            $this->db->where_not_in('id',$id);
            if($gender != "")
                $this->db->where('gender',$gender);
            $query = $this->db->get(USER_TABLE);
            return $query->result_array();
       }catch(Exception $e){
           return false;
           throw new Exception($e->getMessage());
       }
    }

    function getOppositeGender($gender, $id){
        try{ 
            $this->db->where_not_in('id', $id);
            switch ($gender) {
                case "masculino":
                    $this->db->where('gender','feminino');
                    $query = $this->db->get(USER_TABLE);
                    break;
                case "feminino":
                    $this->db->where('gender','masculino');
                    $query = $this->db->get(USER_TABLE);
                    break;
                case "":
                    $query = $this->db->get(USER_TABLE);
                    break;
            }
            return $query->result_array();
       }catch(Exception $e){
           return false;
           throw new Exception($e->getMessage());
       }
    }
}