<?php

 
class Lugare_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_lugare($id)
    {
        return $this->db->get_where('locations',array('location_id'=>$id))->row_array();
    }
        

    function get_all_lugares()
    {
        $this->db->order_by('location_id', 'desc');
        return $this->db->get('locations')->result_array();
    }
        

    function add_lugare($params)
    {
        $this->db->insert('locations',$params);
        return $this->db->insert_id();
    }

    function update_lugare($id,$params)
    {
        $this->db->where('location_id',$id);
        return $this->db->update('locations',$params);
    }
    
 
    function delete_lugare($id)
    {
        return $this->db->delete('locations',array('location_id'=>$id));
    }
}
