<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

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
		$dados['titulo']="Alterando o titulo da Página";
		$dados['conteudo']="Vou colocar outro conteúdo aqui!";
		$this->load->view('Pagina_principal',$dados);
	}
	public function sobre(){
		$dados['titulo']="Sobre";
		$dados['conteudo']="Aqui você vai aprender muito sobre CI";
		$dados['valor']=$this->uri->segment(2);

		$this->load->view('pagina_principal',$dados);
	}
}
