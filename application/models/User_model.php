<?php
class User_model extends CI_Model{
    public $id;
    public $msg;
    public $datahora;
    public $email;
    public $data_nascimento;
    public $faculdade;
    public $semestre;
    public $presenca;
    public $atividades_hoje;

    public function _construct(){
        parent::_construct();
    }
    public function inserir(){

       $dados= array("msg"=>$this->msg);
       $dados= array("email"=>$this->email);
       $dados= array("data_nascimento"=>$this->data_nascimento);
       $dados= array("faculdade"=>$this->faculdade);
       $dados= array("semestre"=>$this->semestre);
       $dados= array("presenca"=>$this->presenca);
       $dados= array("atividades_hoje"=>$this->atividades_hoje);
       
       return $this->db->insert('post',$dados);
}
}