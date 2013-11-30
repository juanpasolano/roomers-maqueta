$(document).ready(function(){

	/*
	|-----------------------------------------------------------------------------
	| MENU FROM SCROLL
	|-----------------------------------------------------------------------------
	*/
	$(window).scroll(function (e) {
		var s = $('body').scrollTop();
		if(s>200){
			$('nav.header-fixed').addClass('shown');
		}else{
			$('nav.header-fixed').removeClass('shown');
		}
	});

	/*
	|-----------------------------------------------------------------------------
	| Slider
	|-----------------------------------------------------------------------------
	*/

	$('.next').on('click', function(e){
		e.preventDefault();
		var slider = $(this).closest('.slider');
		var numofSldies = slider.find('.item').length;
		var activeItem = slider.find('.active');
		var nextActiveIndex;
		if(activeItem.index() == numofSldies-1){
			nextActiveIndex = 0;
		}else{
			nextActiveIndex = activeItem.index() +1;
		}


		activeItem.css('z-index', 0);
		activeItem.removeClass('active');

		slider.find('.item').eq(nextActiveIndex).css('z-index', 1);
		slider.find('.item').eq(nextActiveIndex).addClass('active');
		console.log(slider.find('.item').eq(nextActiveIndex));
	});

	$('.prev').on('click', function(e){
		e.preventDefault();
		var slider = $(this).closest('.slider');
		var numofSldies = slider.find('.item').length;
		var activeItem = slider.find('.active');
		var nextActiveIndex;
		if(activeItem.index() === 0){
			nextActiveIndex = numofSldies-1;
		}else{
			nextActiveIndex = activeItem.index() -1;
		}


		activeItem.css('z-index', 0);
		activeItem.removeClass('active');

		slider.find('.item').eq(nextActiveIndex).css('z-index', 1);
		slider.find('.item').eq(nextActiveIndex).addClass('active');
		console.log(slider.find('.item').eq(nextActiveIndex));
	});

	/*
	|-----------------------------------------------------------------------------
	| SHOW HIDE CART
	|-----------------------------------------------------------------------------
	*/
	var accountWidget = $('.accountWidget');
	accountWidget.find('.cartBtn').on('click', function(e){
		e.preventDefault();
		$(e.currentTarget).toggleClass('shown');
		accountWidget.find('.hidden').toggleClass('showIt');
	});


	/*
	|-----------------------------------------------------------------------------
	| LOGIN
	|-----------------------------------------------------------------------------
	*/

	$(document).on('click', '#loginForm .recoverBtn', function(){
		$('#loginForm').hide(0);
		$('#recoverForm').show(0);
		$('#loginLabel').hide();
		$('#rocoverLabel').show();
	});
	$(document).on('click', '#recoverForm .loginBtn', function(){
		$('#loginForm').show(0);
		$('#recoverForm').hide(0);
		$('#loginLabel').show();
		$('#rocoverLabel').hide();
	});

});