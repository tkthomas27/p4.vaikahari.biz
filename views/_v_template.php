<!DOCTYPE html>
<html>

<head>

	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
																											 
	<!-- Controller Specific JS/CSS -->
	<link rel="stylesheet" href="/css/style.css" type="text/css">



	<?php if(isset($client_files_head)) echo $client_files_head; ?>

	<!-- jQuery standard -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- jQuery UI -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

					
</head>

<body>	

	<div id='nav'>
		<ul id="navigation">
			<li><a href='/'>Home</a></li>       
			<?php if($user): ?>
				<li><a href='/users/profile'>Profile</a></li>
				<li><a href='/socres/index'>Scores</a></li>
			<?php else: ?>
				<li><a href='/users/signup'>Sign Up</a></li>
				<li><a href='/users/login'>Log In</a></li>
			<?php endif; ?>
		</ul>
	</div>





<div id="body">
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	<!-- log confirming user is logged in -->
	<?php if($user): ?>
	<aside>
		<p class="log">
			<img src="<?=$user->devata?>" class='side-devata'> <br>
			<?=$user->first_name?> <?=$user->last_name?> <br>
			<?=$user->city?>, <?=$user->state?> <br><br>
			<img src="<?=$user->avatara?>" class='side-avatar'> <br>
		</p>
	</aside>
	<?php endif; ?>
	
	</div>

<script src="/js/sample-app.js"></script>
</body>
</html>