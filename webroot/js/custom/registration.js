var Registration = function(){
	return {
		submit : function(registrationApi){
			let dob = new Date($('#dob').val());
			if(dob.toString() == 'Invalid Date'){
				alert('Dob of birth format is incorrect');
				return ;
			}

			let postObj = {
				name : $('#name').val(),
				dob : dob,
				locality : $('#locality').val(),
				profession : $('input[name="profession"]:checked').val(),
				number_of_guests : $('#no_of_guests').val(),
				address : $('#address').val(),
			}

			var parameter = {
                url: registrationApi,
                data: postObj,
                type: 'POST',
                dataType: 'JSON',
                crossDomain: true,
                success: function(response) {
                    if(response.success){
                    	$('#name').val('')
                    	$('#dob').val('')
                    	$('#locality').val('')
                    	$('#no_of_guests').val('')
                    	$('#address').val('')
                    }
                    alert(response.message);
                }
            };
			
			$.ajax(parameter);

		}
	}
}()