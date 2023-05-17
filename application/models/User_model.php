<?php
class User_model extends CI_Model{
    public function salvar($usuario){
       return $this->db->insert("post",$usuario);
}
}