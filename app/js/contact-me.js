var contact = (function() {

	var init = function() {
		_setupListeners();
	};

	var _setupListeners = function() {
		$(".client-validated").on('submit', _submitForm);
	};

	var _submitForm = function(form){
		console.log("отправка почты");
		var form  = $(this),
			url = form.attr("action");
		if (!validate.checkForm(form)) return false;

		
		var	data  = form.serialize();
			console.log(data);
			$.ajax({
				url: url,
				type: 'POST',
				dataType: 'json',
				data: data,
			})
			.done(function() {
				console.log("Письмо отправлено");
			})
			.fail(function() {
				console.log("error");
			});			
	}	

	return {
		init : init
	}

}());

contact.init();