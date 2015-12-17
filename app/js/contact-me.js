var contact = (function() {

	var init = function() {
		_setupListeners();
	};

	var _setupListeners = function() {
		$(".client-validated").on('submit', _submitForm);
	};

	var _submitForm = function(e){
		e.preventDefault();
		console.log("отправка формы");
		var form  = $(this),
			url = form.attr("action"),
			defObj = _ajaxForm(form, url);
	}

	var _ajaxForm = function (form, url){
		console.log("отправка с проверкой");
		if (!validate.checkForm(form)) return false;
	}

	return {
		init : init
	}

}());

contact.init();