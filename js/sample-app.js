$(document).ready(function () {



	$('.trigger').click(function() {
		$('.content').hide();
		$('.' + $(this).data('rel')).show();
	});


		$(function() {
			$("#dialog").dialog({
				autoOpen: false
			});
			$("#button").on("click", function() {
				$("#dialog").dialog("open");
			});
		});

 });