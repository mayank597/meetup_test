var Registration = function(){
	return {
		submit : function(){
			$("#myform").validate({
				rules: {
					// no quoting necessary
					name: "required",
					// quoting necessary!
					"user[email]": "email",
					// dots need quoting, too!
					"user.address.street": "required"
				}
			});
		}
	}
}()