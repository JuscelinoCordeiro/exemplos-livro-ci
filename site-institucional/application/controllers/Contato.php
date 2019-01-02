<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller
{

	public function faleConosco()
	{
		$data['title'] = "LCI | Fale Conosco";
		$data['description'] = "Exercício de exemplo do capítulo 5 do livro CodeIgniter";
		$this->load->view('fale-conosco', $data);
	}

	public function trabalheConosco()
	{
		$data['title'] = "LCI | Trabalhe Conosco";
		$data['description'] = "Informações sobre a empresa";
		$this->load->view('trabalhe-conosco', $data);
	}

}
