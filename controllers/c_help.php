<?php
class help_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	}

	public function faq($user_id = NULL) {

		// set up the view
		$this->template->content = View::instance('v_help_faq');
		$this->template->title = "FAQ";

		// render the view
		echo $this->template;

	}

} # end of the class