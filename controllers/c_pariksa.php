<?php
class pariksa_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	}


	public function p_init_game(){


		//insert this data to start a new game row
		$new_date_play=Time::now();
		$new_vyanjana=$_POST['vyanjana'];

		//set incoming data as an array
		$gamedata = Array('date_play'=>$new_date_play,'vyanjana'=>$new_vyanjana);

		//use sql to update the DB with the information stored in the array above
		DB::instance(DB_NAME)->update('users',$gamedata,'Where user_id ='.$this->user->user_id);

		//route the user to the game
		Router::redirect('/pariksa/game');

	}


	public function game($user_id = NULL) {

		// set up the views
		$this->template->content = View::instance('v_pariksa_game');
		$this->template->title = "Game";

		// render the view
		echo $this->template;

	}


	public function p_cont_game($user_id = NULL){


		//accept the information from the field
		$new_vyanjana = $_POST['vyanjana'];
		$new_date_play =Time::now();

		//set incoming data as an array
		$scoredata = Array('vyanjana'=>$new_vyanjana,'date_play'=>$new_date_play);

		//use sql to update the DB with the information stored in the array above
		DB::instance(DB_NAME)->update('users',$scoredata,'Where user_id ='.$this->user->user_id);

		//route the user back to the profile page
		Router::redirect('/pariksa/game');

	}

	public function p_submit_game(){

		$q_submit = 
		'INSERT INTO scores ( 
      		vyanjana, 
      		score, 
      		date_play,
      		user_id) 
		SELECT       		
			vyanjana, 
      		score, 
      		date_play,
      		user_id
		FROM users';

		//use sql to update the DB with the information stored in the array above
		DB::instance(DB_NAME)->query($q_submit);

		//route the user back to the profile page
		Router::redirect('/pariksa/game');
	}

	public function p_quit_game(){

		$del_score = '';
		$del_date_play ='';
		$del_vyanjana = '';

		$deldata = Array('vyanjana'=>$del_vyanjana,'date_play'=>$del_date_play,'score'=>$del_score);

		//use sql to update the DB with the information stored in the array above
		DB::instance(DB_NAME)->update('users',$deldata,'Where user_id ='.$this->user->user_id);

		Router::redirect("/");
	}


} # end of the class