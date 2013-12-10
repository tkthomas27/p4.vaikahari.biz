$(document).ready(function () {



	$('.trigger').click(function() {
		$('.content').hide();
		$('.' + $(this).data('rel')).show();
	});


		$(function() {
			$("#dialog-confirm").dialog({
				autoOpen: false
			});
			$("#quit-button").click(function() {
				$("#dialog-confirm").dialog("open");
			});
		});

 });