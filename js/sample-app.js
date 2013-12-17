$(document).ready(function () {

	//use Chardin plugin for overlay of instructions
	$(function(){
		$('.instructions').click(function(){
			$('body').chardinJs('toggle');
		});
	});

		//use parsley plugin to validate the signup form
		$("#signup-form").validate({});


	//use jQuery UI accordion plugin on the faq page
	$(function() {
		$( "#accordion" ).accordion({
			heightStyle: "content",
			clearStyle: true
		});
	});


		//I have put a hidden 'fake' image on the pariksa/game pages. if this image is present and hidden, the sidebuttons are
		//disabled to prevent the user from leaving the game without quitting.
		if ($('#fake-image').is(':hidden')) {
			$('.sideButton').removeClass('sideButton').addClass('sideStop');
		}

	//used to show hidden data, i.e. the avatara/devata info that is hidden on the profile-edit page
	$(function() {
		$('.trigger').click(function() {
			$('.content').hide();
			$('.' + $(this).data('rel')).show();
		});
	});


	//jQuery UI modal box plugin for the quit dialog during the game
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

	//jQuery UI modal box plugin for the cheat sheet dialog during the game
	$(function() {
		$( "#cheat-dialog" ).dialog({
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


		$( "#cheat-button" ).click(function() {
			$( "#cheat-dialog" ).dialog( "open" );
		});
	});

	//use the Datatable plugin
	$(function() {
		$('#example').dataTable();
	} );

 });