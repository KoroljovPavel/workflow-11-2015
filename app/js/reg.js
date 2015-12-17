var reg = (function() {

	var init = function() {
		_setupListeners();
	};

	var _setupListeners = function() {
		$(".autorisation").on('submit', _submitForm);
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
		if (!validate.checkForm(form)) console.log('ошибка');
		var data = form.serialize();
		console.log(data);
		$.ajax({
			url: url,
			type: 'POST',
			dataType: 'json',
			data: data,
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	}

	return {
		init : init
	}

}());

reg.init();