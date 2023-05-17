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
	public function salvar(){
		$this->load->model('User_model');
		$msg = $_POST["mensagem"];
		$email = $_POST["mensagem"];
		$data_nascimento = $_POST["mensagem"];
		$faculdade = $_POST["mensagem"];
		$semestre = $_POST["mensagem"];
		$presenca = $_POST["mensagem"];
		$atividades_hoje = $_POST["mensagem"];
		

		$this->User_model->msg=$msg;
		$this->User_model->email=$email;
		$this->User_model->data_nascimento=$data_nascimento;
		$this->User_model->faculdade=$faculdade;
		$this->User_model->presenca=$presenca;
		$this->User_model->atividades_hoje=$atividades_hoje;
		
		$this->User_model->inserir();
	}
}
