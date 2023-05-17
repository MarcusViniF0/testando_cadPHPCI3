<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cad extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Pagina_principal');
		$this->load->view('conteudo');
		$this->load->view('rodape');
	}
	public function Enviar()
	{
		$this->load->view('Pagina_principal');
		$this->load->view('tuitar');
		$this->load->view('rodape');
	}
	public function formulario(){
		$this->load->view('Pagina_principal');
	}
	public function novo(){
		$usuario=array(
			"msg"=>$this->input->post("msg"),
			"datahora"=>$this->input->post("datahora"),
			"email"=>$this->input->post("email"),
			"data_nascimento"=>$this->input->post("data_nascimento"),
			"faculdade"=>$this->input->post("faculdade"),
			"semestre"=>$this->input->post("semestre"),
			"presenca"=>$this->input->post("presenca"),
			"atividades_hoje"=>$this->input->post("atividades_hoje"),
		);
		$this->load->model("User_model");
		$this->User_model->salvar($usuario);
		$this->session->set-flashdata("success","Produto cadastrado com sucesso!");
		redirect('/');
	}
}
