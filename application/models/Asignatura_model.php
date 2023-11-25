<?php

 
class Asignatura_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
 
    function get_asignatura($id)
    {
        return $this->db->get_where('subjects',array('subject_id'=>$id))->row_array();
    }
        

    function get_all_asignaturas()
    {
        $this->db->order_by('subject_id', 'desc');
        return $this->db->get('subjects')->result_array();
    }
        

    function add_asignatura($params)
    {
        $this->db->insert('subjects',$params);
        return $this->db->insert_id();
    }
    

    function update_asignatura($id,$params)
    {
        $this->db->where('subject_id',$id);
        return $this->db->update('subjects',$params);
    }
    

    function delete_asignatura($id)
    {
        return $this->db->delete('subjects',array('subject_id'=>$id));
    }
}
