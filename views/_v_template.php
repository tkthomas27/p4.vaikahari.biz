<!DOCTYPE html>
<html>

<head>

	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Basic CSS -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" >
	<!-- Quizy Plugin CSS -->
	<link rel="stylesheet" type="text/css" href="/css/quizymemorygame.css" />
	<!-- jQuery UI plugin Lightness theme roller CSS -->
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.min.css">
	<!-- DataTables plugin CSS -->
	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
	<!-- Chardin plugin CSS -->
	<link href="/css/chardinjs.css" rel="stylesheet">
	<!-- Icon -->
	<link rel="icon" type="image/ico" href="/images/favicon.ico"></link> 
					
</head>

<body>	
<div class="wrap">

	<!-- div for the top banner - the gayatri mantra -->
	<div id='nav'>
		<div id="navigation">
			<p lang='hi' class='header' data-intro="The Gayatri Mantra to bless you experience" data-position="bottom">ॐ भूर्भुव: स्व: तत्सवितुर्वरेण्यं भर्गो देवस्य धीमहि धियो यो प्रचोदयात ॐ भूर्भुव: स्व: तत्सवितुर्वरेण्यं भर्गो देवस्य धीमहि धियो यो प्रचोदयात ॐ भूर्भुव: स्व: तत्सवितुर्वरेण्यं भर्गो देवस्य धीमहि धियो यो प्रचोदयात</p>
		</div>
	</div>



	<div id="body">
		<!-- php for echoing out the content from the controllers -->
		<?php if(isset($content)) echo $content; ?>

		<?php if(isset($client_files_body)) echo $client_files_body; ?>

		<!-- php if user is logged in show an aside that will act as navigation -->
		<?php if($user): ?>
			<!-- the aside  -->
			<aside>
				<p class="log">
					<!-- if the user left the devata blank, show the placeholder  -->
					<?php  if($user->devata == ''):  ?> 
						<img src="/images/placeholder.gif" class='side-devata' data-intro="Go to Profile to select your Ishta Devata" data-position="right"> <br>
					<?php elseif($user->devata !== ''): ?>
						<img src="<?=$user->devata?>" class='side-devata' data-intro="Go to Profile to select your Ishta Devata" data-position="right"> <br>
					<?php endif; ?>

					<!-- display the user's name -->
					<?=$user->first_name?> <?=$user->last_name?> <br><br>
					<!-- the basic navigation -->
					<a href='/' class='sideButton' data-intro="Return to this page for level select" data-position="right">Home</a> <br> <br>
					<a href='/users/profileedit' class='sideButton' data-intro="Edit you Profile" data-position="right">Profile</a> <br> <br>
					<a href='/scores/index' class='sideButton' data-intro="Check where you rank in the high scores" data-position="right">Scores</a> <br> <br>
					<a href='/help/faq' class='sideButton' data-intro="Have questions about Devanagari? Click here" data-position="right">Help</a> <br> <br>
					<a href='/users/logout' id='quit-button'>Logout</a> <br> <br>

					<!-- if the user left the avatara blank, show the placeholder  -->
					<?php  if($user->avatara == ''):  ?> 
						<img src="/images/placeholder.gif" class='side-avatar' data-intro="Go to Profile to select your Avatara" data-position="right"> <br>
					<?php elseif($user->Avatara !== ''): ?>
						<img src="<?=$user->avatara?>" class='side-avatar' data-intro="Go to Profile to select your Avatara" data-position="right"> <br>
					<?php endif; ?>
				</p>
			</aside>
		<?php endif; ?>
	
	</div>
</div>

<!-- jQuery -->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- jQuery UI -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>

<!-- flip plugin for quizy plugin -->
<script type="text/javascript" src="/js/jquery.flip.min.js"></script>
<!-- quizy plugin for the memory card game -->
<script type="text/javascript" src="/js/jquery.quizymemorygame.js"></script>

<!-- javascript calling the memory game; doesn't seem to work unless it is placed here -->
<script type="text/javascript" >
	$('#my-memorygame').quizyMemoryGame({itemWidth: 156, itemHeight: 156, itemsMargin:40, colCount:5, animType:'flip' , flipAnim:'tb', animSpeed:150, resultIcons:true});
</script>

<!-- DataTables plugin -->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<!-- validate plugin -->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<!-- extras for the validate plugin -->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>

<!-- chardin plugin -->
<script type="text/javascript" src="/js/chardinjs.min.js"></script>

<!-- main javascript -->
<script type="text/javascript" src="/js/sample-app.js"></script>

</body>
</html>