$(document).ready(function(){
	
	// Listen for a change event on the cities select element
	$('#cities').change(function(){
		

		// Get the ID of the chosen city
		var cityID = $(this).val();

		// Basic Validation
		if( cityID == '') {
			return;
		}



		// AJAX
		$.ajax({

			url: 'api/cities-and-suburbs.php',
			data: {
				cityID: cityID
			},
			success: function( dataFromServer ){
				console.log(dataFromServer);
				// clear old results from suburbs select element
				$('#suburbs').html('');

				// Loop over the results
				for ( var i=0; i<dataFromServer.length; i++ ) {
					$('#suburbs').append('<option value="'+dataFromServer[i].suburbID+'">'+dataFromServer[i].suburbName+'</option>');
				};
			},
			error: function(){
				alert('Something went wrong');
			}

		});

	});

});