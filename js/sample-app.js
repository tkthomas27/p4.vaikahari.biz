$(document).ready(function () {



	$('.trigger').click(function() {
		$('.content').hide();
		$('.' + $(this).data('rel')).show();
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
			alert('dont');
		});
	});


	$('#example').dataTable( {
        "aaSorting": [[ 4, "desc" ]]
    } );

 });