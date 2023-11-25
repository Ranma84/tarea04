<?php

 
class Materias extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $loggin = $this->session->userdata('currently_logged_in');
        if($loggin!=1)
            redirect(base_url());
        $this->load->model(array('Asignaturas_estudiante_model'));
    } 


    function index()
    {
        $mail = $this->session->userdata('email');
        $data['materias'] = $this->Asignaturas_estudiante_model->get_id_asignaturas_estudiante($mail);        
        $data['_view'] = 'materias/index';
        $this->load->view('partes/main',$data);
    }

   
}
