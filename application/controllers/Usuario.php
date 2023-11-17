<?php

class Usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    } 

    /*
     * Listing of usuarios
     */
    function index()
    {
        $data['usuarios'] = $this->Usuario_model->get_all_usuarios();
        
        $data['_view'] = 'usuario/index';
        $this->load->view('partes/main',$data);
    }

    /*
     * Adding a new usuario
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('contrasena','Contrasena','required|min_length[5]');
		$this->form_validation->set_rules('email','Email','is_unique[email]|required|valid_email');
		$this->form_validation->set_rules('nombre','Nombre','required|min_length[3]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'email' => $this->input->post('email'),
				'rol' => $this->input->post('rol'),
				'contrasena' => $this->input->post('contrasena'),
				'obs' => $this->input->post('obs'),
            );
            
            $usuario_id = $this->Usuario_model->add_usuario($params);
            redirect('usuario/index');
        }
        else
        {            
            $data['_view'] = 'usuario/add';
            $this->load->view('partes/main',$data);
        }
    }  

    /*
     * Editing a usuario
     */
    function edit($id)
    {   
        // check if the usuario exists before trying to edit it
        $data['usuario'] = $this->Usuario_model->get_usuario($id);
        
        if(isset($data['usuario']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('contrasena','Contrasena','required|min_length[5]');
			$this->form_validation->set_rules('email','Email','is_unique[email]|required|valid_email');
			$this->form_validation->set_rules('nombre','Nombre','required|min_length[3]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'email' => $this->input->post('email'),
					'rol' => $this->input->post('rol'),
					'contrasena' => $this->input->post('contrasena'),
					'obs' => $this->input->post('obs'),
                );

                $this->Usuario_model->update_usuario($id,$params);            
                redirect('usuario/index');
            }
            else
            {
                $data['_view'] = 'usuario/edit';
                $this->load->view('partes/main',$data);
            }
        }
        else
            show_error('The usuario you are trying to edit does not exist.');
    } 

    /*
     * Deleting usuario
     */
    function remove($id)
    {
        $usuario = $this->Usuario_model->get_usuario($id);

        // check if the usuario exists before trying to delete it
        if(isset($usuario['id']))
        {
            $this->Usuario_model->delete_usuario($id);
            redirect('usuario/index');
        }
        else
            show_error('The usuario you are trying to delete does not exist.');
    }
    
}
