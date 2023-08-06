<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(["form"=>"url"]);
        $this->load->library('session');
    }

    public function index(){
        return $this->load->view("Login/Index", ["mensaje" => "PetxCars | Inicio de Session.", "error_msg" => ""]);
    }

    public function Error_msg($mensaje){
        return $this->load->view("Login/Index", ["mensaje" => "PetxCars | Inicio de Session.", "error_msg" => $mensaje]);
    }

    public function Sing_in(){
        $mail = $this->input->post('mail');
        $pass = $this->input->post('pass');
        $this->load->model("Usuarios_model");
        if($mail == ""){
            $this->Error_msg("Asegurece de llenar el campo de Correo Electronico Correctamente !");
        }else if($pass == ""){
            $this->Error_msg("Asegurece de llenar el campo de Contraseña Correctamente !");
        }else{
            $data = $this->Usuarios_model->Select_like_mail($mail, $pass);
            foreach ($data->result() as $obj) {
                if($obj->mail == $mail && $this->Usuarios_model->stringToPassword($pass) == $obj->pwd){
                    $this->session->set_userdata("id_usuario", $obj->id_usuario);
                    $this->session->set_userdata("mail", $obj->mail);
                    $this->session->set_userdata("id_rol", $obj->rol);
                    $this->session->set_userdata("nombre", $obj->nombre);
                    $this->session->set_userdata("apellido", $obj->apellido);
                    redirect("Dashboard/index");
                }else{
                    $this->Error_msg("Error al validar los datos, verifique y vuelva a intentar !");
                }
            }
        }
    }
}

/* End of file Home.php and path \application\controllers\Home.php */
