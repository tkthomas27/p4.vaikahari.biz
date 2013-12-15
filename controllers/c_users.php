<?php
class users_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	} 


	public function signup($error = NULL) {

		// set up the views
		$this->template->content = View::instance('v_users_signup');
		$this->template->content->error = $error;

		// render the view
		echo $this->template;

	}

	public function p_signup() {


		//check if email already exists
		$exists = DB::instance(DB_NAME)->select_field('SELECT email FROM users WHERE email = "'.$_POST['email'].'"');

		//if email exists, die and show an error message
		if($exists){
			# Note the addition of the parameter "error"
			Router::redirect("/users/login/error"); 
		}

		else {

		//add a created time to users
		$_POST['created'] = Time::now();

		$_POST['devata'] = '/images/placeholder.gif';
		$_POST['avatara'] = '/images/placeholder.gif';

		//encode the password and create a token
		$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
		$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

		//add form info and time/token to DB
		DB::instance(DB_NAME)->insert_row('users',$_POST);

		//route user to the login page
		Router::redirect('/users/login');

		}
		
	}

	public function login($error = NULL) {

		//set up the view
		$this->template->content = View::instance('v_users_login');
		$this->template->title   = "Login";

		# Pass data to the view
		$this->template->content->error = $error;


		//Render Template
		echo $this->template;

	}

	public function p_login() {

		//encode the password following the signup procedure
		$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

		//establish a query to check password and email match in the DB to generate a cookie based on corresponding token
		$q = 
			'SELECT token
			FROM users
			WHERE email = "'.$_POST['email'].'"
			AND password = "'.$_POST['password'].'"';


		$token = DB::instance(DB_NAME)->select_field($q);

		# Login failed
		if(!$token) {
			# Note the addition of the parameter "error"
			Router::redirect("/users/login/error"); 
		}
		# Login passed
		else {
			setcookie("token", $token, strtotime('+2 weeks'), '/');
			Router::redirect("/");
		}


	}

	public function problem(){
		//set up the view
		$this->template->content = View::instance('v_users_problem');
		$this->template->title   = "Problem";

		//Render Template
		echo $this->template;
	}


	public function logout() {

		$new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

		$data = Array('token'=>$new_token);

		//change to token based on loged out status
		DB::instance(DB_NAME)->update('users',$data,'Where user_id ='.$this->user->user_id);

		//set expiration date of cookie
		setcookie('token','',strtotime('-1 year'),'/');

		//redirect user to homepage
		Router::redirect('/');

	}


	public function profileedit($user_name = NULL) {

		//if user is not logged in, they cannot see the page
		if(!$this->user){
			die('Please, <a href="/users/login">Login</a>');
		}

		//set up the view
		$this->template->content = View::instance('v_users_profileedit');
		$this->template->title = "Profile Edit";

		//pass the data to the view
		$this->template->content->user_name = $user_name;

		//pass error data to the view
		$this->template->content->error = $error;

		//display the view
		echo $this->template;

	}

	public function p_profileedit() {

		//accept the information from the field
		$new_city = $_POST['city'];
		$new_state = $_POST['state'];
		$new_avatara = $_POST['avatara-radio'];
		$new_devata = $_POST['devata-radio'];

		//set incoming data as an array
		$prodata = Array('city'=>$new_city,'state'=>$new_state,'avatara'=>$new_avatara,'devata'=>$new_devata);

		//use sql to update the DB with the information stored in the array above
		DB::instance(DB_NAME)->update('users',$prodata,'Where user_id ='.$this->user->user_id);

		//route the user back to the profile page
		Router::redirect('/');


	}

	public function pwdchange($user_name = NULL, $error = NULL, $error2 = NULL) {

		//if user is not logged in, they cannot see the page
		if(!$this->user){
			Router::redirect('/users/problem');
		}

		else {
		//set up the view
		$this->template->content = View::instance('v_users_pwdchange');
		$this->template->title = "Profile Edit";

		//pass the data to the view
		$this->template->content->user_name = $user_name;

		//pass error data to the view
		$this->template->content->error = $error;

		//pass error data to the view
		$this->template->content->error2 = $error2;

		//display the view
		echo $this->template;

	}

	}

	public function p_password() {

		//check input for blank fields, if blanks exist, die and show error message
		foreach($_POST as $field => $value) {
			if(empty($value)) {
				Router::redirect('/users/pwdchange/error');
			}
		}

		//encode posted password
		$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

		//generate query to match password and email
		$q = 
			'SELECT password
			FROM users
			WHERE email = "'.$_POST['email'].'"
			AND password = "'.$_POST['password'].'"';

		//generte var for selecting fields matching the query
		$pwd = DB::instance(DB_NAME)->select_field($q);

		//if var is true carry out these commands to generate a new password
		if($pwd) {

			//encode the new posted password
			$new_password = sha1(PASSWORD_SALT.$_POST['newpassword']);

			//set var for changing password to new password
			$pwdset = Array('password'=>$new_password);

			//update the users table with the above array where the logged in user equals the user_id
			DB::instance(DB_NAME)->update('users',$pwdset,'Where user_id ='.$this->user->user_id);

			//logout process same as above
			$new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

			$data = Array('token'=>$new_token);

			DB::instance(DB_NAME)->update('users',$data,'Where user_id ='.$this->user->user_id);

			setcookie('token','',strtotime('-1 year'),'/');

			//route the user back to the home page
			Router::redirect('/');
		}
		else {
			Router::redirect('/users/pwdchange/error2');;
		}

	}

} # end of the class

