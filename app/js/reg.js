var reg = (function() {

	var init = function() {
		_setupListeners();
	};

	var _setupListeners = function() {
		$(".autorisation").on('submit', _submitForm);
	};

	var _submitForm = function(form){
		//e.preventDefault();

		console.log("отправка формы");
		var form  = $(this),
			url = form.attr("action");
		if (!validate.checkForm(form)) return false;

		
		var	data  = new FormData($(form)[0]);
			console.log(data);	
			$.ajax({
			url: url,
			type: 'POST',
			dataType: 'json',
			processData: false,
			contentType: false,
			data: data,
			});
			
			
			
	}	


	return {
		init : init
	}

}());

reg.init();