<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(["form" => "url"]);
        $this->load->library("session");
    }

    public function Error_msg($msg){
        $this->load->model("Usuarios_model");
        $this->load->view("dashboard/pages/HeadAdministrador");
        $this->load->view("configuracion/usuarios/insert", ["data" => $this->Usuarios_model->get_All_countries(), "msg"=>$msg]);
    }

    public function index(){
        /**
         * Ventana para los Diferentes Modulos de la parte de Configuracion.
         */
        $this->load->view("dashboard/pages/HeadAdministrador");
        $this->load->view("configuracion/index");
    }

    public function users_list(){
        /**
         * Ventana principal para CRUD de usuarios
         */
        $this->load->model("Usuarios_model");
        $this->load->view("dashboard/pages/HeadAdministrador");
        $this->load->view("configuracion/usuarios/list", ["data" => $this->Usuarios_model->get_All_users()]);
    }

    public function new_user(){
        $this->load->model("Usuarios_model");
        $this->load->view("dashboard/pages/HeadAdministrador");
        $this->load->view("configuracion/usuarios/insert", ["data" => $this->Usuarios_model->get_All_countries(), "msg"=>"", "rl"=>$this->Usuarios_model->get_All_roles()]);
    }

    public function upd_user($id){
        $this->load->model("Usuarios_model");
        $this->load->view("dashboard/pages/HeadAdministrador");
        $this->load->view("configuracion/usuarios/update",["data" => $this->Usuarios_model->get_upd_info_user($id), "msg" => ""]);
    }

    public function del_user($id){
        $this->load->model("Usuarios_model");
        $nomApe = "";
        foreach($this->Usuarios_model->get_user_info($id)->result() as $user){
            $nomApe = $user->nombre." ".$user->apellido;
        }
        $this->load->view("dashboard/pages/HeadAdministrador");
        $this->load->view("configuracion/usuarios/Delete_alert",["id"=>$id, "name"=> $nomApe]);
    }

    public function elim_user($id){
        $this->load->model("Usuarios_model");
        if($this->Usuarios_model->drop_user($id) == true){
            redirect("/Configuracion/users_list");
        }
    }

    public function insert_user(){
        $id_nacionalidad    = $this->input->post("sel-nac");
        $dni                = $this->input->post("dni");
        $nombre             = $this->input->post("nom");
        $apellido           = $this->input->post("ape");
        $telefono           = $this->input->post("tel");
        $correo             = $this->input->post("cor");
        $direccion          = $this->input->post("dir");
        $contrasena         = $this->input->post("pas");
        $rol                = $this->input->post("sel_rol");
        if($id_nacionalidad == 0){
            $this->Error_msg("Debe elegir una nacionalidad.");
        }else if($rol == 0){
            $this->Error_msg("Debe elegir un tipo de permiso para el usuario !!");
        }else if($dni == ""){
            $this->Error_msg("Debe llenar el campo Dni correctamente !");
        }else if($nombre == ""){
            $this->Error_msg("Debe llenar el campo nombre correctamente !");
        }else if($apellido == ""){
            $this->Error_msg("Debe llenar el campo apellido correctamente !");
        }else if($telefono == ""){
            $this->Error_msg("Debe llenar el campo telefono correctamente !");
        }else if($correo == ""){
            $this->Error_msg("Debe llenar el campo correo correctamente !");
        }else if($direccion == ""){
            $this->Error_msg("Debe llenar el campo direccion correctamente !");
        }else if($contrasena == ""){
            $this->Error_msg("Debe llenar el campo contrasenia correctamente !");
        }else{
            $this->load->model("Usuarios_model");
            if($this->Usuarios_model->inser_user($id_nacionalidad, $dni, $nombre, $apellido, $telefono, $correo, $direccion, $contrasena, $rol)){
                redirect("/Configuracion/users_list");
            }else{
                $this->Error_msg("Error al ingresar los datos, intente nuevamente");
            }
        }
    }
}

/* End of file Configuracion.php and path \application\controllers\Configuracion.php */
