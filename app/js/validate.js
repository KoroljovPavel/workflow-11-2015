var validate = (function() {

	var init = function() {
		_setupListeners();
	};

	var _setupListeners = function() {
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

	var checkForm = function(form) {
		
		console.log('я из левого модуля');
		var items = form.find("input, textarea").not('button[type="submit"], input[type="reset"]');
				

		$.each(items, function(index, value){
			var content = $(value).val();
			if (content.length === 0) {
				$(this).addClass('error');
				if($(this).hasClass('input-popup-img')){
					$(this).next().addClass('error');
				}
				_showTooltip(this);
			}
			_hideTooltip(this);
		});
			
	};

	return {
		init : init,
		checkForm: checkForm
	}

}());

validate.init();