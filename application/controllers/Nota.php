<?php


class Nota extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nota_model');
    } 

    /*
     * Listing of notas
     */
    function index()
    {
        $data['notas'] = $this->Nota_model->get_all_notas();
        
        $data['_view'] = 'nota/index';
        $this->load->view('partes/main',$data);
    }

    /*
     * Adding a new nota
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('parcial','Parcial','required|numeric');
		$this->form_validation->set_rules('practica','Practica','decimal');
		$this->form_validation->set_rules('teoria','Teoria','decimal');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'asignatura_id' => $this->input->post('asignatura_id'),
				'parcial' => $this->input->post('parcial'),
				'teoria' => $this->input->post('teoria'),
				'practica' => $this->input->post('practica'),
				'obs' => $this->input->post('obs'),
            );
            
            $nota_id = $this->Nota_model->add_nota($params);
            redirect('nota/index');
        }
        else
        {
			$this->load->model('Asignatura_model');
			$data['all_asignaturas'] = $this->Asignatura_model->get_all_asignaturas();
            
            $data['_view'] = 'nota/add';
            $this->load->view('partes/main',$data);
        }
    }  

    /*
     * Editing a nota
     */
    function edit($id)
    {   
        // check if the nota exists before trying to edit it
        $data['nota'] = $this->Nota_model->get_nota($id);
        
        if(isset($data['nota']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('parcial','Parcial','required|numeric');
			$this->form_validation->set_rules('practica','Practica','decimal');
			$this->form_validation->set_rules('teoria','Teoria','decimal');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'asignatura_id' => $this->input->post('asignatura_id'),
					'parcial' => $this->input->post('parcial'),
					'teoria' => $this->input->post('teoria'),
					'practica' => $this->input->post('practica'),
					'obs' => $this->input->post('obs'),
                );

                $this->Nota_model->update_nota($id,$params);            
                redirect('nota/index');
            }
            else
            {
				$this->load->model('Asignatura_model');
				$data['all_asignaturas'] = $this->Asignatura_model->get_all_asignaturas();

                $data['_view'] = 'nota/edit';
                $this->load->view('partes/main',$data);
            }
        }
        else
            show_error('The nota you are trying to edit does not exist.');
    } 

    /*
     * Deleting nota
     */
    function remove($id)
    {
        $nota = $this->Nota_model->get_nota($id);

        // check if the nota exists before trying to delete it
        if(isset($nota['id']))
        {
            $this->Nota_model->delete_nota($id);
            redirect('nota/index');
        }
        else
            show_error('The nota you are trying to delete does not exist.');
    }
    
}
