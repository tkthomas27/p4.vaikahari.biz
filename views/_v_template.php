<!DOCTYPE html>
<html>

<head>

	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
																											 
	<!-- Controller Specific JS/CSS -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" >
	<link rel="stylesheet" type="text/css" href="/css/quizymemorygame.css" />
	<link rel="stylesheet" type="text/css" href="/css/jquery-ui-1.10.3.custom.css" />

	<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

	<?php if(isset($client_files_head)) echo $client_files_head; ?>
					
</head>

<body>	
<div class="wrap">
	<div id='nav'>
		<div id="navigation">
			<p lang='hi' class='header'>देवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरीदेवनागरी</p>
		</div>
	</div>



<div id="body">
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	<!-- log confirming user is logged in -->
	<?php if($user): ?>
	<aside>
		<p class="log">
			<img src="<?=$user->devata?>" class='side-devata'> <br>
			<?=$user->first_name?> <?=$user->last_name?> <br><br>
			<a href='/' class='sideButton'>Home</a> <br> <br>
			<a href='/users/profileedit' class='sideButton'>Profile</a> <br> <br>
			<a href='/scores/index' class='sideButton'>Scores</a> <br> <br>
			<a href='/help/faq' class='sideButton'>Help</a> <br> <br>
			<a href='#' id='quit-button'>Logout</a> <br> <br>
			<img src="<?=$user->avatara?>" class='side-avatar'> <br>
		</p>
	</aside>

	<?php endif; ?>
	
	</div>
</div>
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" /></script>
<!-- jQuery UI -->
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js" /></script>
<script type="text/javascript" language="javascript" src="/js/jquery.flip.min.js" /></script>
<script type="text/javascript" language="javascript" src="/js/jquery.quizymemorygame.js" /></script>

<script type="text/javascript" language="javascript">
 $('#my-memorygame').quizyMemoryGame({itemWidth: 156, itemHeight: 156, itemsMargin:40, colCount:5, animType:'flip' , flipAnim:'tb', animSpeed:150, resultIcons:true});
 </script>

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script src="/js/sample-app.js"></script>


</body>
</html>