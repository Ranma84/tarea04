<?php

class Usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $loggin = $this->session->userdata('currently_logged_in');
        if($loggin!=1)
            redirect(base_url());
        $this->load->model('Usuario_model');
    } 


    function index()
    {
        $data['usuarios'] = $this->Usuario_model->get_all_usuarios();
        
        $data['_view'] = 'usuario/index';
        $this->load->view('partes/main',$data);
    }

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Contrasena','required|min_length[5]');
		$this->form_validation->set_rules('mail','mail','is_unique[users.mail]|required|valid_email');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'mail' => $this->input->post('mail'),
				'role' => 'Docente',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
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


    function edit($id)
    {   

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


    function remove($id)
    {
        $usuario = $this->Usuario_model->get_usuario($id);
        if(isset($usuario['id']))
        {
            $this->Usuario_model->delete_usuario($id);
            redirect('usuario/index');
        }
        else
            show_error('The usuario you are trying to delete does not exist.');
    }
    
}
