<?php
class pariksa_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	} 


	public function index($error = NULL) {

		// set up the views
		$this->template->content = View::instance('v_pariksa_index');
		$this->template->content->error = $error;

		// render the view
		echo $this->template;

	}
} # end of the class