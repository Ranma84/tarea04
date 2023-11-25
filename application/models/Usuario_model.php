<?php

 
class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    


    function get_usuario($mail)
    {
        return $this->db->get_where('users',array('mail'=>$mail))->row_array();
    }
        


    function get_all_usuarios()
    {
        $this->db->order_by('user_id', 'desc');
        return $this->db->get('users')->result_array();
    }
        

    function add_usuario($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    

    function update_usuario($id,$params)
    {
        $this->db->where('user_id',$id);
        return $this->db->update('users',$params);
    }
    

    function delete_usuario($id)
    {
        return $this->db->delete('users',array('user_id'=>$id));
    }
}
