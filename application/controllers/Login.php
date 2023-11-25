<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('security');  
        $this->load->library('form_validation');  
        $this->load->model('Usuario_model');
    }
    
    function index()
    {         
        $loggin = $this->session->userdata('currently_logged_in');
        if($loggin==1)
            redirect(base_url('Dashboard'));
        $this->load->view('partes/login');
    }

    public function login() {
        $loggin = $this->session->userdata('currently_logged_in');
        if($loggin==1)
            base_url('Dashboard');
        $this->form_validation->set_rules('email', 'Email:', 'valid_email|required|trim|xss_clean');  
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');   
        if ($this->form_validation->run())   
        {
            $mail=$this->input->post('email');
            $password=$this->input->post('password');    
            $usuario=$this->Usuario_model->get_usuario($mail);  
            
            if(!password_verify($password,$usuario['password'])) {
				$this->session->set_flashdata('login_error', 'No existe el correo, o la contraseña no coincide con el correo.', 300);
				redirect(base_url());
			}
            $data = array('email' => $mail, 'currently_logged_in' => 1,'role'=>$usuario['role']);    
            $this->session->set_userdata($data);  
            redirect('Dashboard');
        }   
        else {  
            $this->load->view('partes/login');  
        }  
    }

    public function registrar() {
        $loggin = $this->session->userdata('currently_logged_in');
        if($loggin==1)
            base_url('Dashboard');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Contraseña', 'required|trim');        
        if ($this->form_validation->run()) {
            $nombre = $this->input->post('nombre');
            $email = $this->input->post('email');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data = array(
                'mail' => $email,
                'password' => $password,
                'role' => 1
            );
            $this->Usuario_model->add_usuario($data);            
            $this->session->set_flashdata('registro_success', 'Usuario registrado exitosamente.');
            redirect(base_url('login'));
        } else {
            $this->load->view('partes/registrar');
        }
    }

    public function logout() {
        $this->session->sess_destroy();  
        redirect('');  
    }
}