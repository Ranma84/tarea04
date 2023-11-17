<?php

 
class Asignatura extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Asignatura_model');
    } 

    /*
     * Listing of asignaturas
     */
    function index()
    {
        $data['asignaturas'] = $this->Asignatura_model->get_all_asignaturas();
        
        $data['_view'] = 'asignatura/index';
        $this->load->view('partes/main',$data);
    }

    /*
     * Adding a new asignatura
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'obs' => $this->input->post('obs'),
            );
            
            $asignatura_id = $this->Asignatura_model->add_asignatura($params);
            redirect('asignatura/index');
        }
        else
        {            
            $data['_view'] = 'asignatura/add';
            $this->load->view('partes/main',$data);
        }
    }  

    /*
     * Editing a asignatura
     */
    function edit($id)
    {   
        // check if the asignatura exists before trying to edit it
        $data['asignatura'] = $this->Asignatura_model->get_asignatura($id);
        
        if(isset($data['asignatura']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'obs' => $this->input->post('obs'),
                );

                $this->Asignatura_model->update_asignatura($id,$params);            
                redirect('asignatura/index');
            }
            else
            {
                $data['_view'] = 'asignatura/edit';
                $this->load->view('partes/main',$data);
            }
        }
        else
            show_error('The asignatura you are trying to edit does not exist.');
    } 

    /*
     * Deleting asignatura
     */
    function remove($id)
    {
        $asignatura = $this->Asignatura_model->get_asignatura($id);

        // check if the asignatura exists before trying to delete it
        if(isset($asignatura['id']))
        {
            $this->Asignatura_model->delete_asignatura($id);
            redirect('asignatura/index');
        }
        else
            show_error('The asignatura you are trying to delete does not exist.');
    }
    
}
