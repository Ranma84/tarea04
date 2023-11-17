<?php
/* 
 * Generated by CRUDigniter v3.4 
 * www.crudigniter.com
 */
 
class Asignatura_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get asignatura by id
     */
    function get_asignatura($id)
    {
        return $this->db->get_where('asignaturas',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all asignaturas
     */
    function get_all_asignaturas()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('asignaturas')->result_array();
    }
        
    /*
     * function to add new asignatura
     */
    function add_asignatura($params)
    {
        $this->db->insert('asignaturas',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update asignatura
     */
    function update_asignatura($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('asignaturas',$params);
    }
    
    /*
     * function to delete asignatura
     */
    function delete_asignatura($id)
    {
        return $this->db->delete('asignaturas',array('id'=>$id));
    }
}
