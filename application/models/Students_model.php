<?php

 
class Students_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_students($id)
    {
        return $this->db->get_where('students',array('student_id'=>$id))->row_array();
    }
        

    function get_all_students()
    {
        $this->db->order_by('student_id', 'desc');
        return $this->db->get('students')->result_array();
    }
        

    function add_students($params)
    {
        $this->db->insert('students',$params);
        return $this->db->insert_id();
    }

    function update_students($id,$params)
    {
        $this->db->where('student_id',$id);
        return $this->db->update('students',$params);
    }
    
 
    function delete_students($id)
    {
        return $this->db->delete('students',array('student_id'=>$id));
    }
}
