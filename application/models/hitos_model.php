<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hitos_Model extends CI_Model {

	
	public function getHitos()
	{

		$query = $this->db->get('hitos');
		$count=0;
		$data = array();
		foreach ($query->result() as $row)
		{
			$data[$count]['idHito'] = $row->idHito;
			$data[$count]['description'] = $row->description;
			$data[$count]['inicio'] = $row->inicio;
			$data[$count]['fin'] = $row->fin;
			$count++;
		}

		$datos['hitos'] = $data;

		return $datos;
	}




	function updateHitos($a,$b,$c,$d){

		for ($i=0; $i < count($a) ; $i++) { 
			echo $a[$i];
			$data = array(
               'description' => $b[$i],
               'inicio' => $c[$i],
               'fin' => $d[$i]
            );

			$this->db->where('idHito', $a[$i]);
			$this->db->update('hitos', $data); 
		}
	}
}