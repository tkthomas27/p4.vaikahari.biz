<!DOCTYPE html>
<html>

<head>

	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
																											 
	<!-- Controller Specific JS/CSS -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" >
	<link rel="stylesheet" type="text/css" href="/css/quizymemorygame.css" />

<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.min.css">
	<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

<link href="/css/chardinjs.css" rel="stylesheet">


	<?php if(isset($client_files_head)) echo $client_files_head; ?>
					
</head>

<body>	
<div class="wrap">
	<div id='nav'>
		<div id="navigation">
			<p lang='hi' class='header' data-intro="The Gayatri Mantra to bless you experience" data-position="bottom">ॐ भूर्भुव: स्व: तत्सवितुर्वरेण्यं भर्गो देवस्य धीमहि धियो यो प्रचोदयात ॐ भूर्भुव: स्व: तत्सवितुर्वरेण्यं भर्गो देवस्य धीमहि धियो यो प्रचोदयात ॐ भूर्भुव: स्व: तत्सवितुर्वरेण्यं भर्गो देवस्य धीमहि धियो यो प्रचोदयात</p>
		</div>
	</div>



<div id="body">
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	<!-- log confirming user is logged in -->
	<?php if($user): ?>
	<aside>
		<p class="log">
			<img src="<?=$user->devata?>" class='side-devata' data-intro="Go to Profile to select your Ishta Devata" data-position="right"> <br>
			<?=$user->first_name?> <?=$user->last_name?> <br><br>
			<a href='/' class='sideButton' data-intro="Return to this page for level select" data-position="right">Home</a> <br> <br>
			<a href='/users/profileedit' class='sideButton' data-intro="Edit you Profile" data-position="right">Profile</a> <br> <br>
			<a href='/scores/index' class='sideButton' data-intro="Check where you rank in the high scores" data-position="right">Scores</a> <br> <br>
			<a href='/help/faq' class='sideButton' data-intro="Have questions about Devanagari? Click here" data-position="right">Help</a> <br> <br>
			<a href='/users/logout' id='quit-button'>Logout</a> <br> <br>
			<img src="<?=$user->avatara?>" class='side-avatar' data-intro="Go to Profile to select your Avatara" data-position="right"> <br>
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
<script src="/js/chardinjs.min.js"></script>
<script src="/js/sample-app.js"></script>


</body>
</html>