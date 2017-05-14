$(document).ready(function()
	{
		$('#btnSendMessage').on('click', function( event ){
			event.preventDefault();

			$.ajax({
				headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        },
	            url:'contact',
				type:'post',
	            success:function( response ) {
					console.log( response );
				},
				error: function ( jqXHR, textStatus, errorThrown )
				{
					console.log( 'error = ' + errorThrown );
				},
	            
	        });		
			
			
		});
	
	}); //end document.ready