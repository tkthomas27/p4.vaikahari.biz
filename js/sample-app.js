$(document).ready(function () {


	$(function() {
		$('.trigger').click(function() {
			$('.content').hide();
			$('.' + $(this).data('rel')).show();
		});
	});

	$(function() {
		$( "#quit-dialog" ).dialog({
			autoOpen: false,
			width: 600,
			show: {
				effect: "blind",
				duration: 1000
			},
			hide: {
				effect: "explode",
				duration: 1000
			}
		});

		$( "#quit-button" ).click(function() {
			$( "#quit-dialog" ).dialog( "open" );
		});
	});

	$(function(){
	$('.score-holder').change(function(){
			var score = parseInt($('.score-holder').val(),10);

			if(score > 0) {
				$('.score-stop').removeClass('score-stop').addClass('continue-button');
			}
		});

	});

	$(function(){
		$("#fake-image").load(function(){
			$('.sideButton').removeClass('sideButton').addClass('score-stop');
			console.log('hello');
		});


	});


 });