<?php

 
class Asignaturas_estudiante extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Asignaturas_estudiante_model');
    } 

    /*
     * Listing of asignaturas_estudiante
     */
    function index()
    {
        $data['asignaturas_estudiante'] = $this->Asignaturas_estudiante_model->get_all_asignaturas_estudiante();
        
        $data['_view'] = 'asignaturas_estudiante/index';
        $this->load->view('partes/main',$data);
    }

    /*
     * Adding a new asignaturas_estudiante
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'lugar_id' => $this->input->post('lugar_id'),
            );
            
            $asignaturas_estudiante_id = $this->Asignaturas_estudiante_model->add_asignaturas_estudiante($params);
            redirect('asignaturas_estudiante/index');
        }
        else
        {
			$this->load->model('Lugare_model');
			$data['all_lugares'] = $this->Lugare_model->get_all_lugares();
            
            $data['_view'] = 'asignaturas_estudiante/add';
            $this->load->view('partes/main',$data);
        }
    }  

    /*
     * Editing a asignaturas_estudiante
     */
    function edit($id)
    {   
        // check if the asignaturas_estudiante exists before trying to edit it
        $data['asignaturas_estudiante'] = $this->Asignaturas_estudiante_model->get_asignaturas_estudiante($id);
        
        if(isset($data['asignaturas_estudiante']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'lugar_id' => $this->input->post('lugar_id'),
                );

                $this->Asignaturas_estudiante_model->update_asignaturas_estudiante($id,$params);            
                redirect('asignaturas_estudiante/index');
            }
            else
            {
				$this->load->model('Lugare_model');
				$data['all_lugares'] = $this->Lugare_model->get_all_lugares();

                $data['_view'] = 'asignaturas_estudiante/edit';
                $this->load->view('partes/main',$data);
            }
        }
        else
            show_error('The asignaturas_estudiante you are trying to edit does not exist.');
    } 

    /*
     * Deleting asignaturas_estudiante
     */
    function remove($id)
    {
        $asignaturas_estudiante = $this->Asignaturas_estudiante_model->get_asignaturas_estudiante($id);

        // check if the asignaturas_estudiante exists before trying to delete it
        if(isset($asignaturas_estudiante['id']))
        {
            $this->Asignaturas_estudiante_model->delete_asignaturas_estudiante($id);
            redirect('asignaturas_estudiante/index');
        }
        else
            show_error('The asignaturas_estudiante you are trying to delete does not exist.');
    }
    
}
