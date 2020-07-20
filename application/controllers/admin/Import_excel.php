<?php
if(!defined('BASEPATH')) die('No access');

/**
 * 
 */
class Import_excel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('excel_model');
	}

	public function index()
	{
		$data = array(
			'data_survey' => $this->excel_model->readSurvey()
			);

		$this->load->view('responden', $data);
	}

	public function upload()
	{
		
	}
}