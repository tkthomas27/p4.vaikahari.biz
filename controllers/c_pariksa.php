<?php
class pariksa_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	}


	public function p_init_game(){


		//initialize a new game on start game button click
		//insert the current time and to tattva selected by the radio buttons on the main page
		$new_date_play=Time::now();
		$new_tattva=$_POST['tattva'];

		//set the above data as an array
		$gamedata = Array('date_play'=>$new_date_play,'tattva'=>$new_tattva);

		//use sql to update the DB with the information stored in the array above
		DB::instance(DB_NAME)->update('users',$gamedata,'Where user_id ='.$this->user->user_id);

		//route the user to the game
		Router::redirect('/pariksa/game');

	}


	public function game() {

		//if user is not logged in, they cannot see the page; route them to the problem page
		if(!$this->user){
			die(Router::redirect('/users/problem'));
		}

		// set up the views
		$this->template->content = View::instance('v_pariksa_game');
		$this->template->title = "Game";

		// render the view
		echo $this->template;

	}


	public function p_cont_game(){

		//accept the information from the field; tattva is hardcoded in, score is passed into a hidden
		//input from javascript
		$new_tattva = $_POST['tattva'];
		$new_date_play =Time::now();
		$new_score = $_POST['score'];

		//set incoming data as an array
		$scoredata = Array('tattva'=>$new_tattva,'date_play'=>$new_date_play,'score'=>'score'+$new_score);

		//update the scoredata by adding in the data from javascript
		$q_score_update = 
		'UPDATE users
		SET score = score + '.$new_score;

		//use sql to update the DB with the information stored in the array above
		DB::instance(DB_NAME)->update('users',$scoredata,'Where user_id ='.$this->user->user_id);
		DB::instance(DB_NAME)->query($q_score_update,'Where user_id ='.$this->user->user_id);

		//route the game with updated tattva
		Router::redirect('/pariksa/game');

	}


	public function p_quit_game(){

		//create a query that will select all relevant game data
		$q_submit = 
		'INSERT INTO scores ( 
      		tattva, 
      		score, 
      		date_play,
      		user_id)
		SELECT       		
			tattva, 
      		score, 
      		date_play,
      		user_id
		FROM users
		WHERE user_id ='.$this->user->user_id;

		//use sql to insert game data from users table into scores table
		DB::instance(DB_NAME)->query($q_submit);

		//reset the game data in the user table to blanks
		$del_score = '';
		$del_date_play ='';
		$del_tattva = '';

		//put this data into an array
		$deldata = Array('tattva'=>$del_tattva,'date_play'=>$del_date_play,'score'=>$del_score);

		//use sql to update the DB with the information stored in the array above
		DB::instance(DB_NAME)->update('users',$deldata,'Where user_id ='.$this->user->user_id);

		//redirect to the main page
		Router::redirect("/");

	}

	
	public function p_complete_game(){

		//accept the information from the field
		$new_tattva = $_POST['tattva'];
		$new_date_play =Time::now();
		$new_score = $_POST['score'];

		//set incoming data as an array
		$scoredata = Array('tattva'=>$new_tattva,'date_play'=>$new_date_play);

		//update the scoredata by adding in the data from javascript
		$q_score_update = 
		'UPDATE users
		SET score = score + '.$new_score;

		//use sql to update the DB with the information stored in the array above
		DB::instance(DB_NAME)->update('users',$scoredata,'Where user_id ='.$this->user->user_id);
		DB::instance(DB_NAME)->query($q_score_update,'Where user_id ='.$this->user->user_id);

		Router::redirect("/pariksa/p_quit_game");

	}


} # end of the class