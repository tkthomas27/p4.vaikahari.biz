$(document).ready(function () {

	$(function(){
		$('.instructions').click(function(){
			$('body').chardinJs('toggle');
		});
	});

		$("#signup-form").validate({
		});


	$(function() {
		$( "#accordion" ).accordion({
			heightStyle: "content",
			clearStyle: true
	});
  });



  if ($('#fake-image').is(':hidden')) {
		$('.sideButton').removeClass('sideButton').addClass('sideStop');
	}


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

			$(function() {
			$('#example').dataTable();
			} );

 });