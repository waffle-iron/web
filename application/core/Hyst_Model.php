<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hyst_Model extends CI_Model {
	public function __construct()
	{
		// Construct CI_Model
		parent::__construct();

		/*
		 * Load the database library.
		 * We only do this in models to force strict use of the MVC pattern.
		 */
		$this->load->database();
	}
}
