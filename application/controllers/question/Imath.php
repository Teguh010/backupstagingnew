<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Imath extends CI_Controller {
    function __construct() {
		parent::__construct();
		$this->load->library('api');
		$this->load->library('jwt');
    }
    
    function index() {
		// use the get method
		$this->api->method_required("GET");

		// posted data saved into variable
		$this->load->model("question/imath_m");
		$rest_data = $this->api->get_rest_data();
		$info = $rest_data["data"];

		// Get Questions base on qid (from smartJen server)
		$status = $this->imath_m->get_question($info);

		// get the session
		$sess = $this->session->userdata();

		// create jwt token and pass to header
		if(array_key_exists("user_id", $sess)) {
			$user_id = $this->session->userdata('user_id');
			$data = array(
				// 'user_id' => $user_id
				'username' => 'klho'
			);
			$key = "Sm@rtJen2@2@!@#!math1";
			$token = $this->jwt->encode($data, $key);
			header("Authorization: Bearer " . $token);
		} else {
			header("HTTP/1.1 401 Unauthorized");
		}
		
		// return api error message
		if($status === false) {
			api_return("Something wrong while getting the data.", 500);
		} else if(is_string($status)) {
			api_return($status, 400);
		}
		
		// return api
		api_return($status);
    }
}