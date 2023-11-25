<?php

 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $loggin = $this->session->userdata('currently_logged_in');
        if($loggin!=1)
            redirect(base_url());
    }

    function index()
    {
        $data['_view'] = 'dashboard';
        $this->load->view('partes/main',$data);
    }
}
