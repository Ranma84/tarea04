<?php

 
class Lugare extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $loggin = $this->session->userdata('currently_logged_in');
        if($loggin!=1)
            redirect(base_url());
        $this->load->model('Lugare_model');
    } 


    function index()
    {
        $data['lugares'] = $this->Lugare_model->get_all_lugares(); 
        $data['_view'] = 'lugare/index';
        $this->load->view('partes/main',$data);
    }


    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'location_name	' => $this->input->post('location_name')
            );
            
            $lugare_id = $this->Lugare_model->add_lugare($params);
            redirect('lugare/index');
        }
        else
        {            
            $data['_view'] = 'lugare/add';
            $this->load->view('partes/main',$data);
        }
    }  


    function edit($id)
    {   

        $data['lugare'] = $this->Lugare_model->get_lugare($id);
        
        if(isset($data['lugare']['location_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'location_name' => $this->input->post('location_name')
                );

                $this->Lugare_model->update_lugare($id,$params);            
                redirect('lugare/index');
            }
            else
            {
                $data['_view'] = 'lugare/edit';
                $this->load->view('partes/main',$data);
            }
        }
        else
            show_error('The lugare you are trying to edit does not exist.');
    } 


    function remove($id)
    {
        $lugare = $this->Lugare_model->get_lugare($id);

        if(isset($lugare['location_id']))
        {
            $this->Lugare_model->delete_lugare($id);
            redirect('lugare/index');
        }
        else
            show_error('The lugare you are trying to delete does not exist.');
    }
    
}
