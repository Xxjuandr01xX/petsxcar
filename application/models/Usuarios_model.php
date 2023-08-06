<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Usuarios_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function get_All_countries(){
        return $this->db->get("pets_nacionalidad");
    }
    public function get_All_roles(){
        return $this->db->get("pets_roles");
    }
    public function Select_like_mail($mail,$password){
        $sql = "SELECT ps.email as 'mail',ps.nombre as 'nombre',ps.apellido as 'apellido',us.id as 'id_usuario',us.id_rol_fk as 'rol', us.pass_usuario as 'pwd' FROM pets_persona ps INNER JOIN pets_usuarios us WHERE ps.id=us.id_persona_fk AND ps.email = '$mail' AND us.pass_usuario = PASSWORD('$password');";
        return $this->db->query($sql);
    }
    public function stringToPassword($password){
        $sql = "SELECT PASSWORD('$password') as 'pw'";
        $result = "";
        $query = $this->db->query($sql);
        foreach ($query->result() as $value) {
            $result = $value->pw;
        }
        return $result;
    }
    public function get_All_users(){
        return $this->db->query("select b.id as 'id_persona', b.nombre as 'nombre', b.apellido as 'apellido', b.dni as 'dni', c.descripcion as 'rol_name' from pets_usuarios a inner join pets_persona b on a.id_persona_fk=b.id LEFT JOIN pets_roles c ON a.id_rol_fk=c.id");
    } 
    
    public function inser_user($id_nacionalidad, $dni, $nombre, $apellido, $telefono, $correo, $direccion, $contrasena, $rol){
        $person_insert = $this->db->insert("pets_persona", [
            "id" => null,
            "id_nac_fk" => $id_nacionalidad,
            "dni" => $dni,
            "nombre" => $nombre,
            "apellido" => $apellido,
            "telefono" => $telefono,
            "email" => $correo,
            "direccion" => $direccion,
            "fec_nac" => "1999-12-31" 
        ]);
        if($person_insert){
            $user_insert = $this->db->insert("pets_usuarios", [
                "id" => null,
                "id_persona_fk" => $this->db->insert_id(),
                "id_rol_fk" => $rol
            ]);
            if($user_insert){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}


/* End of file Usuarios_model.php and path \application\models\Usuarios_model.php */
