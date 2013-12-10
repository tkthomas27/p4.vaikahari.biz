<?php
class scores_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($user_id = NULL){
		// set up the views
		$this->template->content = View::instance('v_scores_index');
		$this->template->title = "Scores";

		// render the view
		echo $this->template;
	}



} # end of the class