<?php

 
class Asignaturas_estudiante_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_asignaturas_estudiante($id)
    {
        return $this->db->get_where('grades',array('grade_id'=>$id))->row_array();
    }
        

    function get_all_asignaturas_estudiante()
    {
        return $this->db->join('locations', 'grades.location_id = locations.location_id')
        ->join('subjects', 'grades.subject_id = subjects.subject_id')
        ->order_by('grade_id', 'desc')
        ->select('grade_id,location_name,subject_name')
        ->get('grades')->result_array();
    }
        

    function add_asignaturas_estudiante($params)
    {
        $this->db->insert_batch('grades',$params);
    }
    

    function update_asignaturas_estudiante($id,$params)
    {
        $this->db->where('grade_id',$id);
        return $this->db->update('grades',$params);
    }
    

    function delete_asignaturas_estudiante($id)
    {
        return $this->db->delete('grades',array('grade_id'=>$id));
    }
}
