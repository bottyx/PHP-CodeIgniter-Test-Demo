<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hitos extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Hitos_Model');
		$datos = $this->Hitos_Model->getHitos();
		$this->load->view('index',$datos);
	}

	function editHitos(){

		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$d = $_POST['d'];

		$this->load->model('Hitos_Model');
		$this->Hitos_Model->updateHitos($a,$b,$c,$d);
		
	}
}