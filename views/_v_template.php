<!DOCTYPE html>
<html>

<head>

	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
																											 
	<!-- Controller Specific JS/CSS -->
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="/css/quizymemorygame.css" />
	<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css" />
	<link rel="stylesheet" type="text/css" href="/css/demo_table.css" />


	<?php if(isset($client_files_head)) echo $client_files_head; ?>
					
</head>

<body>	

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
			<a href='/users/profile' class='sideButton'>Profile</a> <br> <br>
			<a href='/scores/index' class='sideButton'>Scores</a> <br> <br>
			<a href='#' id='quit-button'>Logout</a> <br> <br>
			<img src="<?=$user->avatara?>" class='side-avatar'> <br>
		</p>
	</aside>

	<?php endif; ?>
	
	</div>
<script type="text/javascript" language="javascript" src="/js/jquery.dataTables.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" /></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js" /></script>
<script src="/js/jquery.flip.min.js" /></script>
<script src="/js/jquery.quizymemorygame.js" /></script>
<script src="/js/sample-app.js"></script>
<script>
$('#my-memorygame').quizyMemoryGame({itemWidth: 156, itemHeight: 156, itemsMargin:40, colCount:5, animType:'flip' , flipAnim:'tb', animSpeed:250, resultIcons:true});
</script>
<script>
	$('#example').dataTable();
</script>

</body>
</html>