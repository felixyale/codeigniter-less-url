<?php
class Less extends CI_Controller {

	public function index()
	{
		$data = Array();
		if (isset($_GET['path']))
		{	
			$path = $_GET['path'];
			$data['path'] = $path;
		}
		$this->load->view('less', $data);
	}
}