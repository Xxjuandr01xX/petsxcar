<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->helper(["form" => "url"]);
    }
    public function index(){

        if($this->session->userdata("id_rol") == "1"){
            $this->load->view("dashboard/pages/HeadAdministrador");
            $this->load->view("dashboard/administrador");
        }else if($this->session->userdata("id_rol") == "2"){
            return $this->load->view("dashboard/usuario");
        }else if($this->session->userdata("id_rol") == "3"){
            return $this->load->view("dashboard/agente");
        }else{
            redirect("Home/index");
        }
    }
}

/* End of file Dashboard.php and path \application\controllers\Dashboard.php */
