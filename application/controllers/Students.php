<?php

 
class Students extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $loggin = $this->session->userdata('currently_logged_in');
        if($loggin!=1)
            redirect(base_url());
        $this->load->model('Students_model');
    } 


    function index()
    {
        $data['students'] = $this->Students_model->get_all_Students();        
        $data['_view'] = 'Students/index';
        $this->load->view('partes/main',$data);
    }


    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $this->load->model('Usuario_model');
            $params = $this->input->post();
            $params_usuario = array(
				'mail' => $this->input->post('email'),
				'role' => 'Estudiante',
				'password' => password_hash('123456', PASSWORD_DEFAULT)
		    );
            $params['user_id']  = $this->Usuario_model->add_usuario($params_usuario);
            $Students_id = $this->Students_model->add_Students($params);
            die;
            redirect('Students/index');
        }
        else
        {            
            $data['_view'] = 'Students/add';
            $this->load->view('partes/main',$data);
        }
    }  


    function edit($id)
    {   
        $data['students'] = $this->Students_model->get_Students($id);
        
        if(isset($data['students']['student_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = $this->input->post();
                $this->Students_model->update_Students($id,$params);            
                redirect('Students/index');
            }
            else
            {
                $data['_view'] = 'Students/edit';
                $this->load->view('partes/main',$data);
            }
        }
        else
            show_error('The Students you are trying to edit does not exist.');
    } 


    function remove($id)
    {
        $Students = $this->Students_model->get_Students($id);

        if(isset($Students['student_id']))
        {
            $this->Students_model->delete_Students($id);
            redirect('Students/index');
        }
        else
            show_error('The Students you are trying to delete does not exist.');
    }
    
}
