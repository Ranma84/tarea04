<?php

 
class Nota_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_nota($id)
    {
        return $this->db->get_where('notas',array('id'=>$id))->row_array();
    }

    function get_all_notas()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('notas')->result_array();
    }
        

    function add_nota($params)
    {
        $this->db->insert('notas',$params);
        return $this->db->insert_id();
    }
    

    function update_nota($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('notas',$params);
    }
    

    function delete_nota($id)
    {
        return $this->db->delete('notas',array('id'=>$id));
    }
}
