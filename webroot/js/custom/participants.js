var Participant = function(){
	return {
		update : function(updateApi){
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
				_method : "PUT"
			}

			var parameter = {
				type: 'POST',
                url: updateApi,
                data: postObj,
                dataType: 'JSON',
                crossDomain: true,
                success: function(response) {
                    alert(response.message);
                }
            };
			
			$.ajax(parameter);

		}
	}
}()