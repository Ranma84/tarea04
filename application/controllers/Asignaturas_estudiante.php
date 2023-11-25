<?php

 
class Asignaturas_estudiante extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $loggin = $this->session->userdata('currently_logged_in');
        if($loggin!=1)
            redirect(base_url());
        $this->load->model(array('Asignatura_model','Asignaturas_estudiante_model','Lugare_model','Students_model'));
    } 


    function index()
    {
        $data['asignaturas_estudiante'] = $this->Asignaturas_estudiante_model->get_all_asignaturas_estudiante();
        $data['_view'] = 'asignaturas_estudiante/index';
        $this->load->view('partes/main',$data);
    }

    /*
     * Adding a new asignaturas_estudiante
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $tabla=$this->input->post('tabla');
            $insert=null;
            foreach ($tabla as $valor){
                $insert[]=array('student_id'=> $valor['students_id'],
                'location_id'=> $valor['location_id'],
                'subject_id'=>$valor['subject_id'],
                'theory_grade'=>0,
                'practice_grade'=>0);
            }
            $this->Asignaturas_estudiante_model->add_asignaturas_estudiante($insert);
            redirect('asignaturas_estudiante/index');
        }
        else
        {
			
			$data['all_lugares'] = $this->Lugare_model->get_all_lugares(); 
            $data['all_asignaturas'] = $this->Asignatura_model->get_all_asignaturas();
            $data['all_students'] = $this->Students_model->get_all_Students();     
            $data['js'] =array('asset/js/javascript.js');
            $data['_view'] = 'asignaturas_estudiante/add';
            $data['css'] = array('asset/css/tabla.css');
            $this->load->view('partes/main',$data);
        }
    }  

    public function agregar() {
        $row=array( 'location_id'=>$this->input->post('location_id'),
                    'location_name'=>$this->input->post('location_name'),
                    'subject_id'=>$this->input->post('subject_id'),
                    'subject_name'=>$this->input->post('subject_name'),
                    'students_id'=>$this->input->post('students_id'),
                    'students_name'=>$this->input->post('students_name')
                );                
        $tabla = $this->input->post('tabla');
        $tabla=json_decode($tabla);
        $data=null;
        $i=1;
        $arra_linea=array('location_id'=>'','location_name'=>'','subject_id'=>'','subject_name'=>'','students_id'=>'','students_name'=>'');
        $patron = "/\[(.*?)\]/"; //"/\['?([^']+)'?\]/";
        
        $indice = 0;
        foreach ($tabla as  $valor){
              $linea=(array)$valor;
              if(isset($linea['name']) && strpos($linea['name'],'tabla')!== false){
                $matches = null;
                preg_match_all($patron, $linea['name'], $matches);
                $indice = $matches[1][0];
                $nombreCampo = $matches[1][1];
                if(isset($data[$indice])){
                    $data[$indice][$nombreCampo]=$arra_linea;
                }
                $data[$indice][$nombreCampo]=$linea['value'];     
              }
        }
        ++$indice; 
        $data[$indice]=$row;
        echo $this->load->view('asignaturas_estudiante/fila', array('tabla' => $data), TRUE);
    }

    public function eliminar($id) {
        $tabla = $this->input->post('tabla');
        $tabla=json_decode($tabla);
        $data=null;
        $arra_linea=array('location_id'=>'','location_name'=>'','subject_id'=>'','subject_name'=>'','students_id'=>'','students_name'=>'');
        $patron = "/\['([^']+)'(?:\]\['([^']+)'|\])/";
        $indice = 0;
        foreach ($tabla as  $valor){
              $linea=(array)$valor;
              if(isset($linea['name']) && strpos($linea['name'],'tabla')!== false){
                $matches = null;
                preg_match($patron, $linea['name'], $matches);
                $indice = $matches[1];
                $nombreCampo = $matches[2];
                if(isset($data[$indice])){
                    $data[$indice][$nombreCampo]=$arra_linea;
                }
                $data[$indice][$nombreCampo]=$linea['value'];     
              }
        }
        unset($data[$id]);
        echo $this->load->view('asignaturas_estudiante/fila', array('tabla' => $data), TRUE);
    }


    function edit($id)
    {   
        $data['asignaturas_estudiante'] = $this->Asignaturas_estudiante_model->get_asignaturas_estudiante($id);      
        if(isset($data['asignaturas_estudiante']['grade_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = $this->input->post();
                $this->Asignaturas_estudiante_model->update_asignaturas_estudiante($id,$params);            
                redirect('asignaturas_estudiante/index');
            }
            else
            {
				$data['all_lugares'] = $this->Lugare_model->get_all_lugares();
                $data['all_subject'] = $this->Asignatura_model->get_all_asignaturas();
                $data['all_students'] = $this->Students_model->get_all_students();

                $data['_view'] = 'asignaturas_estudiante/edit';
                $this->load->view('partes/main',$data);
            }
        }
        else
            show_error('The asignaturas_estudiante you are trying to edit does not exist.');
    } 


    function remove($id)
    {
        $asignaturas_estudiante = $this->Asignaturas_estudiante_model->get_asignaturas_estudiante($id);
        if(isset($asignaturas_estudiante['grade_id']))
        {
            $this->Asignaturas_estudiante_model->delete_asignaturas_estudiante($id);
            redirect('asignaturas_estudiante/index');
        }
        else
            show_error('The asignaturas_estudiante you are trying to delete does not exist.');
    }
    
}
