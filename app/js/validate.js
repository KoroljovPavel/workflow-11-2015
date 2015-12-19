var validate = (function() {

	var init = function() {
		_setupListeners();
	};

	var _setupListeners = function() {
		$('form').on("keydown", '.error', _hideTooltip);
	};
	
	
	/*					ShowTooltip 									*/

	var _showTooltip = function(target){
		var showTooltip = '<span class="tooltip">'+$(target).data('tooltip')+'</span>';
		var showTooltipRight = '<span class="right-tooltip">'+$(target).data('tooltip')+'</span>';

		if ($(target).hasClass('t-right')) {
			$(target).before(showTooltipRight);
		}else{
			$(target).before(showTooltip);
		}

	};

/*						Hide Tooltip 							*/

	var _hideTooltip = function(){
		$(this).removeClass('error');
		if ($(this).hasClass('t-right')) {
			$(this).prev('.right-tooltip').remove();
		}else{
			$(this).prev('.tooltip').remove();
		}
		if($(this).hasClass('input-popup-img')) {
			$(this).next().removeClass('error');
			$(this).prev('.tooltip').remove();
		};
	};

	var checkForm = function(form) {
		console.log('я из левого модуля');
		
		var items = form.find("input, textarea").not('button[type="submit"], input[type="reset"]'),
			valid = true;
				

		$.each(items, function(index, value){
			var content = $(value).val();
			
			if (content.length === 0) {
				valid = false;
				$(this).addClass('error');
				if($(this).hasClass('input-popup-img')){
					$(this).next().addClass('error');
				}
					_showTooltip(this);
				}
		});

		return valid;

	};

	return {
		init : init,
		checkForm: checkForm
	}

}());

validate.init();