<?php

class Chat_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

     /*
    * Deletes the message
    */
    function delete($id){
        try{ 
            if(isset($id) && $id > 0){
                $this->db->where('id', $id);
                $this->db->delete(CHAT_TABLE);
            }else{
                $this->db->from(CHAT_TABLE);
                $this->db->truncate();
            }
            return true;
       }catch(Exception $e){
           return false;
           throw new Exception($e->getMessage());
       }
    }

    /*
    * Send the message
    */
    function send($data){
        try{ 
             $this->db->insert(CHAT_TABLE, $data); 
             return true;
        }catch(Exception $e){
            return false;
            throw new Exception($e->getMessage());
        }
    }

    /*
    * Get messages
    */
    function get($data){
        try{ 
            $this->db->join(USER_TABLE, 'user.id = chat.from');
            $query = $this->db->get_where(CHAT_TABLE, $data);
            $result = $query->result_array();
            return $result;
        }catch(Exception $e){
            return null;
            throw new Exception($e->getMessage());
        }
    }
}