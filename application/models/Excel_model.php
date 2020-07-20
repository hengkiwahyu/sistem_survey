<?php
if(!defined('BASEPATH')) die('No access');

/**
 * 
 */
class Excel_model extends CI_Model
{
	
	public function readSurvey()
	{
		$qry = $this->db->get('survey');
		$data = $qry->result_array();
		$qry->free_result();

		return $data;
	}
}