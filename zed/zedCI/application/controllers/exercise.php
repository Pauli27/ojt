<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercise extends CI_Controller {


function index()
{
$this->load->view('exercises');// loading form view
}
function form_validation(){
	echo 'OK';
		 
}

}
