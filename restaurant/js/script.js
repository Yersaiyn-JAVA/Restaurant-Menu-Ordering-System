$(document).ready(function(){

	$('.news').on('click','.card',function(){
		let id = $(this).attr('id');
		$.ajax({
				url: 'session.php',
				method: 'POST',
				data: {
					id: id
				},
				success: function(){
					window.location.href = 'news_page.php';
				},
		});
	});

	//Slider

	var num = 0, timer, firstLoad = true,
	img_count = $('#slider').children('img').length;

	function sliderAnimation(num){
		if(firstLoad != true){
			$('#slider').children('img').fadeOut(500);
			var timerSlide = setTimeout(() => {
				$('#slider').children('img').eq(num).removeClass('active');
			}, 100);
			clearTimeout(timerSlide);
			if(num + 1 >= img_count){
				num = 0;
			} else {
				num++;
			}
			$('#slider').children('img').eq(num).delay(500).fadeIn(500);
		}
		$('#slider').children('img').eq(num).addClass('active');
		firstLoad = false;
		timer = setTimeout(() => sliderAnimation(num), 6000);
	}
	timer = setTimeout(() => sliderAnimation(num), 1000);

	$('.btn_slider').on('click', function(){
		clearTimeout(timer);
		$('#slider').children('img').fadeOut();
		var timerSlide = setTimeout(() => {
			$('#slider').children('img').eq(num).removeClass('active');
		}, 100);
		clearTimeout(timerSlide);
		if($(this).attr('id') == 'slider_left'){
			if(num - 1 < 0){
				num = img_count-1;
			} else {
				num--;
			}
			$('#slider').children('img').eq(num).delay(250).fadeIn(250);
		} else {
			if(num + 1 >= img_count){
				num = 0;
			} else {
				num++;
			}
			$('#slider').children('img').eq(num).delay(250).fadeIn(250);
		}
		$('#slider').children('img').eq(num).addClass('active');
		timer = setTimeout(() => sliderAnimation(num), 6000);
	});

	// Menu
	$('.circle').on('click',function(){
		if($('.menu').css('left') == '0px'){
			$('.menu').animate({
				left: '-20vw',
				top: '0px'
			},500);
			$('.context').animate({
				left: '0px',
				top: '0px'
			},500);
			$('.search').fadeOut('slow');
			$('#search').val('');
			$('.search_result').fadeOut('slow');
			$('.search_result').html('');
			$('.search_opacity').fadeOut('slow');
		} else {
			$('.menu').animate({
				left: '0px',
				top: '100px'
			},500);
			$('.context').animate({
				left: '20vw',
				top: '100px'
			},500);
			$('.search').fadeIn('slow');
			$('.search_result').fadeIn('slow');
			$('.search_opacity').fadeIn();

		}
	});
	$('.menu_ul li').on('click', function(){
		var category = $(this).children().html();
		$.ajax({
				url: 'ajax_category.php',
				method: 'POST',
				data: {
					ct: category
				},
				success: function(data){
					$('.context').html(data);
				},
		});
			$('.menu').animate({
				left: '-20vw',
				top: '0px'
			},500);
			$('.context').animate({
				left: '0px',
				top: '0px'
			},500);
			$('.search').fadeOut('slow');
			$('.search_result').fadeOut('slow');
			$('.search_opacity').fadeOut('slow');
	});

	//Menu Search

	$('#search').on('keyup', function(){
		var str =  $(this).val();
		if(str.length > 1){
			$.ajax({
				url: 'ajax.php',
				method: 'POST',
				data: {
					text: str
				},
				success: function(data){
					$('.search_result').html(data);
				},
			});
		} else {
			$('.search_result li').fadeOut();
		}
	});

	$('.search_result').on('click', 'li.item', function(){
		var item = $(this).children().html();
		$.ajax({
				url: 'ajax_item.php',
				method: 'POST',
				data: {
					it: item
				},
				success: function(data){
					$('.context').html(data);
				},
		});
			$('.menu').animate({
				left: '-20vw',
				top: '0px'
			},500);
			$('.context').animate({
				left: '0px',
				top: '0px'
			},500);
			$('.search').fadeOut('slow');
			$('.search_result').fadeOut('slow');
			$('.search_opacity').fadeOut('slow');
	});
	$('.search_result').on('click', 'li.class', function(){
		var category = $(this).children().html();
		$.ajax({
				url: 'ajax_category.php',
				method: 'POST',
				data: {
					ct: category
				},
				success: function(data){
					$('.context').html(data);
				},
		});
			$('.menu').animate({
				left: '-20vw',
				top: '0px'
			},500);
			$('.context').animate({
				left: '0px',
				top: '0px'
			},500);
			$('.search').fadeOut('slow');
			$('.search_result').fadeOut('slow');
			$('.search_opacity').fadeOut('slow');
		});
	$('.search_button').on('click', function(){
		if($('.search').css('display') == 'none'){
			$('.search').fadeIn();
			$('.search_result').fadeIn('slow');
			$('.search_opacity').fadeIn();
			$('.order').fadeOut();
			$('.logo').fadeOut();
			$('.nav').fadeOut();
			$('.store_item').fadeOut();
			$('.user_box').fadeOut();
			$('.enter').fadeOut();
		} else {
			$('.search').fadeOut();
			$('.search_result').fadeOut('slow');
			$('.search_opacity').fadeOut();
			$('.order').fadeIn();
			$('.logo').fadeIn();
			$('.nav').fadeIn();
			$('.user_box').fadeIn();
			$('.enter').fadeIn();
		}
	});
	$('.content').on('click', '.add_to_cart', function(){
		let name = $(this).parent().children('h4').html(),
		price = $(this).parent().children('.price').html(),
		items = $('.place').children().length;
		var total_price = Number($('.sum_price').find('p').html()),
		amount = 1,
		state = false,
		p = price.split('тг');
		for(let i = 0; i < items; i++){
			if($('.place').children().eq(i).find('.order_item_name').html() == name){
				let item = $('.place').children('li').eq(i).find('.order_item_amount').html(),
				item_amount = item.split('шт');
				amount = amount + Number(item_amount[0]);
				$('.place').children().eq(i).find('.order_item_amount').html(amount+' шт');
				state = true;
			}
		}
		if(state == false){
			$('.place').append('<li class="order_items"><p class="order_item_name">'+name+'</p><p class="order_item_price">'+price+'</p><p class="order_item_amount">'+amount+' шт</p><div class="reduce_amount fa fa-minus-circle" id="reduce_btn" style="font-size: 23px; line-height: 30px;"></div><div class="add_amount fa fa-plus-circle" id="add_btn" style="font-size: 23px; line-height: 30px;"></div></li>');
		}
		total_price = total_price + Number(p[0]);
		$('.sum_price').find('p').html(total_price);
		$(this).transfer({
			to: $('.order_btn'),
			duration: 100
		});
		order_count = Number($('#order_count').html()) + 1;
		$('#order_count').html(order_count);
	});



	$('.place').on('click', '#reduce_btn', function(){
		var amount = 1,
		item = $(this).parent().find('.order_item_amount').html(),
		item_amount = item.split('шт'),
		order_count = Number($('#order_count').html()) - 1;
		amount = Number(item_amount[0]) - amount;
		if(amount <= 0){
			$(this).parent().remove();
		}
		$(this).parent().children('.order_item_amount').html(amount+' шт');
		$('#order_count').html(order_count);

		var total_price = Number($('.sum_price').find('p').html()),
		price = $(this).parent().find('.order_item_price').html(),
		p = price.split('тг');
		total_price = total_price - Number(p[0]);
		$('.sum_price').find('p').html(total_price);
	});
	$('.place').on('click','#add_btn', function(){
		var amount = 1,
		item = $(this).parent().find('.order_item_amount').html(),
		item_amount = item.split('шт'),
		order_count = Number($('#order_count').html()) + 1;
		amount = Number(item_amount[0]) + amount;
		$(this).parent().children('.order_item_amount').html(amount+' шт');
		$('#order_count').html(order_count);

		var total_price = Number($('.sum_price').find('p').html()),
		price = $(this).parent().find('.order_item_price').html(),
		p = price.split('тг');
		total_price = total_price + Number(p[0]);
		$('.sum_price').find('p').html(total_price);
	});


	$('.order').on('click', function(){
		if($('.store_item').css('display') == 'none'){
			$('.store_item').fadeIn();
		} else {
			$('.store_item').fadeOut();
		}
	});
	$('.store_item > form').on('submit', function(e){
		e.preventDefault();
		if($('.place').children().length == 0){
			alert('Вы не добавили ничего в список покупок');
		} else {
			$.ajax({
				url: 'order_list.php',
				method: 'POST',
				data: {
					order: $('.place').html(),
					total_price: $('.sum_price').find('p').html(),
					count: $('#order_count').html()
				},
				success: function(data){
					if(data == "True"){
						window.location.href= "order.php";
					}
				},
			});
		}
	});

	$('.log_out').on('click', function(){
		$.ajax({
			url: 'logout.php',
			success: function(data){
				if(data == "True"){
					window.location.reload();
				}
			},
		});
	});
});