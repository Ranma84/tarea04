<?php

 
class Asignatura extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Asignatura_model');
    } 


    function index()
    {
        $data['asignaturas'] = $this->Asignatura_model->get_all_asignaturas();
        
        $data['_view'] = 'asignatura/index';
        $this->load->view('partes/main',$data);
    }


    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'subject_name' => $this->input->post('nombre'),
				'subjects_obs' => $this->input->post('obs'),
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


    function edit($id)
    {   

        $data['asignatura'] = $this->Asignatura_model->get_asignatura($id);
        if(isset($data['asignatura']['subject_id']))
        {
            $this->load->library('form_validation');
			$this->form_validation->set_rules('nombre','Nombre','required');		
			if($this->form_validation->run())     
            {   
                $params = array(
					'subject_name' => $this->input->post('nombre'),
					'subjects_obs' => $this->input->post('obs'),
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


    function remove($id)
    {
        $asignatura = $this->Asignatura_model->get_asignatura($id);
        if(isset($asignatura['subject_id']))
        {
            $this->Asignatura_model->delete_asignatura($id);
            redirect('asignatura/index');
        }
        else
            show_error('The asignatura you are trying to delete does not exist.');
    }
    
}
