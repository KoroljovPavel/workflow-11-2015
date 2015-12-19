var addProject = (function() {

	var init = function() {
		_setupListeners();
	};

	var _setupListeners = function() {
		$(".add").on("click", _showForm);
		$(".fog, .close-popup-form, .close-popup-ok").on("click", _hideForm);
		$(".close-popup-er").on("click", function(){$(".server-message-er").fadeOut('slow')});
		$(".input-popup-img").on("change", _showText);
		$(".popup-form").on("submit", _submitForm);
	};

/*						SHOW FORM 									*/
	var _showForm = function(){
		$(".fog").fadeIn("slow");
		$(".popup-window").fadeIn("slow");
	};

/*						HIDE FORM 									*/
	var _hideForm = function(e){
		e.preventDefault();
		var clearPopup = $(".popup-window");
			form = clearPopup.find('form');

		$(".fog").fadeOut("slow");
		clearPopup.fadeOut("slow");
		form.find('.tooltip').remove();
		form.find('input, textarea, .input-file-upload').removeClass('error');
	};

/*						Show puth to image 							*/
	var _showText = function(){
		var imgLink = $(this).val();
		var	imgLinkPosition = imgLink.lastIndexOf("\\");
		var	imgLinkLength = imgLink.length;
		var	imgLinkRes = imgLink.substring(imgLinkPosition + 1, imgLinkLength);

		$(".input-file-upload").html(imgLinkRes);
		
	};




/*						Запрос на сервер								*/

	var _submitForm = function(e){
		e.preventDefault();
		console.log("отправка формы");
		var form  = $(this);
			
		_ajaxSend(form);
	}
		
	var _ajaxSend = function(form) {
		var	data  = new FormData($(form)[0]),
			url = form.attr("action");
		if (!validate.checkForm(form)) return false;
		console.log("Отправка с проверкой");
		$.ajax({
			url: url,
			type: 'POST',
			processData: false,
			contentType: false,
			dataType: 'json',
			data: data
		})
		.done(function() {
			if (data = "true"){
				form.find('.server-message-ok').show('slow');
			}else{
				form.find('.server-message-er').show('slow');
			}
		})
		.fail(function() {
			form.find('.server-message-er').show('slow');
		});
	}
	





	return {
		init : init
	}

}());

addProject.init();