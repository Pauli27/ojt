<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercise extends CI_Controller {

	
	public function index()
	{	
		$this->load->model('exercise_model');
		// $haha = array();
		// echo "<pre>",print_r($this->db),"</pre>";die();
		$haha = $this->exercise_model->get();
		// echo $this->db->last_query();die();

		 // echo print_r($haha);
		 $this->load->view('exercises');
	}
}
