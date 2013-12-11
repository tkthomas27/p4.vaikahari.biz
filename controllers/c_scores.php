<?php
class scores_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($user_id = NULL){
    # Set up the View
    $this->template->content = View::instance('v_scores_index');
    $this->template->title   = "scores";

    # Build the query
    $q = "SELECT 
            scores .* , 
            users.first_name, 
            users.last_name
        FROM scores
        INNER JOIN users 
            ON scores.user_id = users.user_id";

    # Run the query
    $scores = DB::instance(DB_NAME)->select_rows($q);

    # Pass data to the View
    $this->template->content->scores = $scores;

    # Render the View
    echo $this->template;
	}


} # end of the class