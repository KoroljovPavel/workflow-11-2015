var app = (function() {

	var init = function() {
		_setupListeners();
	};

	var _setupListeners = function() {
		console.log('Listen');
		$(".add").on("click", _showForm);
		$(".fog, .close-popup-form").on("click", _hideForm);
		$(".close-popup-ok").on("click", function(){$(".server-message-ok").fadeOut('slow')});
		$(".close-popup-er").on("click", function(){$(".server-message-er").fadeOut('slow')});
		$(".input-popup-img").on("change", _showText);
		$("form").on("submit", _checkForm);
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


/*						Check Form 									*/

	var _checkForm = function(e) {
		e.preventDefault();

		var form  = $(this),
			items = form.find("input, textarea").not('button[type="submit"], input[type="reset"]'),
			flag  = true;
				

		$.each(items, function(index, value){
			var content = $(value).val();
			if (content.length === 0) {
				$(this).addClass('error');
				if($(this).hasClass('input-popup-img')){
					$(this).next().addClass('error');
				}
				_showTooltip(this);
				flag = false;
			}
			_hideTooltip(this);
		});

		if(flag){
			_submitForm(form);
		}
			
	};

/*						Запрос на сервер								*/



		var _submitForm = function(form){	

			var url   = form.attr("action");
			var	data  = new FormData($(form)[0]);
			
			$.ajax({
				url: url,
				type: 'POST',
				processData: false,
				contentType: false,
				dataType: 'json',
				data: data
			})
			.done(function() {
				form.find('.server-message-ok').show('slow');
			})
			.fail(function() {
				form.find('.server-message-er').show('slow');
			});

	};

/*					ShowTooltip 									*/

	var _showTooltip = function(target){
		var showTooltip = '<span class="tooltip">'+$(target).data('tooltip')+'</span>';
		var showTooltipRight = '<span class="right-tooltip">'+$(target).data('tooltip')+'</span>'

		if ($(target).hasClass('t-right')) {
			$(target).before(showTooltipRight);
		}else{
			$(target).before(showTooltip);
		}
		//console.log(showTooltip);
	};

/*						Hide Tooltip 							*/

	var _hideTooltip = function(target){
		$(target).on("input", function(){
			$(target).removeClass('error');
			if ($(target).hasClass('t-right')) {
				$(target).prev('.right-tooltip').remove();
			}else{
				$(target).prev('.tooltip').remove();
			}
		
		});	
		if($(target).hasClass('input-popup-img')) {
				$(target).on("change", function(){
					$(target).next().removeClass('error');
					$(target).prev('.tooltip').remove();
				});
		};
	};





	return {
		init : init
	}

}());

app.init();