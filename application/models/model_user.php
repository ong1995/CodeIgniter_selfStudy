<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class database extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getFirstPlace(){
		$query = $this->db->query('SELECT place from places');

		if ($query->num_row() > 0) {
			return $query->result();
		}else{
			return NULL;
		}
	}
}


 ?>