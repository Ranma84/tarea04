<?php

 
class Lugare extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lugare_model');
    } 

    /*
     * Listing of lugares
     */
    function index()
    {
        $data['lugares'] = $this->Lugare_model->get_all_lugares();
        
        $data['_view'] = 'lugare/index';
        $this->load->view('partes/main',$data);
    }

    /*
     * Adding a new lugare
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'obs' => $this->input->post('obs'),
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

    /*
     * Editing a lugare
     */
    function edit($id)
    {   
        // check if the lugare exists before trying to edit it
        $data['lugare'] = $this->Lugare_model->get_lugare($id);
        
        if(isset($data['lugare']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'obs' => $this->input->post('obs'),
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

    /*
     * Deleting lugare
     */
    function remove($id)
    {
        $lugare = $this->Lugare_model->get_lugare($id);

        // check if the lugare exists before trying to delete it
        if(isset($lugare['id']))
        {
            $this->Lugare_model->delete_lugare($id);
            redirect('lugare/index');
        }
        else
            show_error('The lugare you are trying to delete does not exist.');
    }
    
}
