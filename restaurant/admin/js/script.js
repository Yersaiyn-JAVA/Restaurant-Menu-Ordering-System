$(document).ready(function(){
		$.ajax({
				url: 'cookie.php',
				success: function(data){
					if(data == "False"){
						window.location.href = 'index.html';
					}
				},
		});

	$('.hide_left_panel').on('click',function(){
		$('.left_panel').css('transform','translate(-100%,-50%)');
		$('.right_panel').css('width','96.4%');
		$('.show_left_panel').css('transform','translate(0%,-50%)');
		$('.show_left_panel > div').delay(300).fadeIn(300);
	});


	$('.show_left_panel').on('click',function(){
		$('.left_panel').css('transform','translate(0%,-50%)');
		$('.right_panel').css('width','81%');
		$('.show_left_panel').css('transform','translate(-100%,-50%)');
		$('.show_left_panel > div').fadeOut(300);
	});

	$('.add_product').on('click',function(){
		$('.action').html('<h1><strong>Детали</strong></h1>'+
				'<div class="add_product_details">'+
					'<div class="product_img" style="height: 35%;"><input type="text" style="height: 40px;" placeholder="URL картинки" id="url" /><p class="preview"></p></div>'+
					'<div class="product_name"><input type="text" placeholder="Название"></div>'+
					'<div class="product_category"><input type="text" placeholder="Категория"></div>'+
					'<div class="product_price"><input type="number" placeholder="Цена"></div>'+
					'<div class="product_detail"><textarea placeholder="Описание"></textarea></div>'+
					'<button class="product_add_btn">Добавить</button>'+
				'</div>');
	});

	$('.add_news').on('click',function(){
		$('.action').html('<h1><strong>Детали</strong></h1>'+
				'<div class="add_product_details">'+
					'<div class="news_img" style="height: 35%;"><input type="text" style="height: 40px;" placeholder="URL картинки" id="url" /><p class="preview"></p></div>'+
					'<div class="news_title"><input type="text" placeholder="Заголовок"></div>'+
					'<div class="news_detail_preview"><textarea placeholder="Текст на превью"></textarea></div>'+
					'<div class="news_detail"><textarea placeholder="Полный текст"></textarea></div>'+
					'<button class="news_add_btn">Добавить</button>'+
				'</div>');
	});

	$('.delete_product').on('click',function(){
		$('.action').html('<h1><strong>Удалить</strong></h1>'+
				'<div class="add_product_details">'+
					'<div class="product_id"><input type="text" placeholder="ID" id="delete_product_id"></div>'+
					'<button class="product_delete_btn">Удалить</button>'+
				'</div>');
	});

	$('.alter_product').on('click',function(){
		$('.action').html('<h1><strong>Изменить</strong></h1>'+
				'<div class="add_product_details">'+
					'<div class="product_id"><input type="text" placeholder="ID" id="alter_product_id"></div>'+
					'<button class="alter_product_btn">Изменить</button>'+
				'</div>');
	});


	$('.delete_news').on('click',function(){
		$('.action').html('<h1><strong>Удалить</strong></h1>'+
				'<div class="add_product_details">'+
					'<div class="news_id"><input type="text" placeholder="ID" id="delete_news_id"></div>'+
					'<button class="news_delete_btn">Удалить</button>'+
				'</div>');
	});

	$('.alter_news').on('click',function(){
		$('.action').html('<h1><strong>Изменить</strong></h1>'+
				'<div class="add_product_details">'+
					'<div class="news_id"><input type="text" placeholder="ID" id="alter_news_id"></div>'+
					'<button class="alter_news_btn">Изменить</button>'+
				'</div>');
	});

	$('.finish_order').on('click',function(){
		$('.action').html('<h1><strong>Завершить</strong></h1>'+
				'<div class="add_product_details">'+
					'<div class="order_id"><input type="text" placeholder="ID" id="finish_order_id"></div>'+
					'<button class="finish_order_btn">Завершить</button>'+
				'</div>');
	});

	$('.action').on('click', '.alter_product_btn',function(){
		let id = $('#alter_product_id').val();
		$.ajax({
				url: 'alter_item.php',
				method: 'POST',
				data: {
					id: id
				},
				success: function(data){
					if(data != "False"){
						$('.action').html(data);
					} else {
						alert("Product with this ID does not exist");
					}
				},
		});
	});


	$('.action').on('click', '.alter_news_btn',function(){
		let id = $('#alter_news_id').val();
		$.ajax({
				url: 'alter_news.php',
				method: 'POST',
				data: {
					id: id
				},
				success: function(data){
					if(data != "False"){
						$('.action').html(data);
					} else {
						alert("Article does not exist");
					}
				},
		});
	});

	$('.action').on('click', '.product_delete_btn',function(){
		if(confirm("Are you sure you want to delete this item ?") == true){
			let id = $('#delete_product_id').val();
			$.ajax({
					url: 'delete_item.php',
					method: 'POST',
					data: {
						id: id
					},
					success: function(data){
						if(data == "True"){
							location.reload();
						} else{
							alert("Product with this ID does not exist");
						}
					},
			});
		}
	});


	$('.action').on('click', '.news_delete_btn',function(){
		if(confirm("Are you sure you want to delete this article ?") == true){
			let id = $('#delete_news_id').val();
			$.ajax({
					url: 'delete_news.php',
					method: 'POST',
					data: {
						id: id
					},
					success: function(data){
						if(data == "True"){
							location.reload();
						} else{
							alert("Article does not exist");
						}
					},
			});
		}
	});

	$('.action').on('click', '.finish_order_btn',function(){
		if(confirm("Continue ?") == true){
			let id = $('#finish_order_id').val();
			$.ajax({
					url: 'delete_order.php',
					method: 'POST',
					data: {
						id: id
					},
					success: function(data){
						if(data == "True"){
							location.reload();
						} else{
							alert("Order does not exist");
						}
					},
			});
		}
	});


	$('.action').on('click', '.product_add_btn',function(){
		let image = $('#url').val(),
		name = $('.product_name').find('input').val(),
		text = $('.product_detail').find('textarea').val(),
		price = $('.product_price').find('input').val(),
		category = $('.product_category').find('input').val();
		if(image != '' && name != '' && text != '' && price != '' && category != ''){
			$.ajax({
				url: 'add_item.php',
				method: 'POST',
				data: {
					image: image,
					name: name,
					text: text,
					price: price,
					category: category 
				},
				success: function(data){
					if(data == "True"){
						window.location.reload(true);
					} else{
						alert("Error");
					}
				},
			});
		} else {
			alert("Fill all gaps");
		}
	});

	$('.action').on('click', '.news_add_btn',function(){
		let image = $('#url').val(),
		title = $('.news_title').find('input').val(),
		text_preview = $('.news_detail_preview').find('textarea').val(),
		text = $('.news_detail').find('textarea').val();
		if(image != '' && title != '' && text != '' && text_preview != ''){
			$.ajax({
				url: 'add_news.php',
				method: 'POST',
				data: {
					image: image,
					title: title,
					text: text,
					text_preview: text_preview
				},
				success: function(data){
					if(data == "True"){
						window.location.reload(true);
					} else{
						alert("Error");
					}
				},
			});
		} else {
			alert("Fill all gaps");
		}
	});


	$('.action').on('click', '.product_save_btn',function(){
		let id = $('.add_product_details').attr('id'),
		image = $('#url').val(),
		name = $('.product_name').find('input').val(),
		text = $('.product_detail').find('textarea').val(),
		price = $('.product_price').find('input').val(),
		category = $('.product_category').find('input').val();
		if(id != '' && image != '' && name != '' && text != '' && price != '' && category != ''){
			$.ajax({
				url: 'alter_product_details.php',
				method: 'POST',
				data: {
					id: id,
					image: image,
					name: name,
					text: text,
					price: price,
					category: category
				},
				success: function(data){
					if(data == "True"){
						window.location.reload(true);
					} else{
						alert("Error");
					}
				},
			});
		} else {
			alert("Fill all gaps");
		}
	});

	$('.action').on('click', '.news_save_btn',function(){
		let id = $('.add_product_details').attr('id'),
		image = $('#url').val(),
		title = $('.news_title').find('input').val(),
		text_preview = $('.news_detail_preview').find('textarea').val(),
		text = $('.news_detail').find('textarea').val();
		if(id != '' && image != '' && title != '' && text != '' && text_preview != ''){
			$.ajax({
				url: 'alter_news_details.php',
				method: 'POST',
				data: {
					id: id,
					image: image,
					title: title,
					text: text,
					text_preview: text_preview
				},
				success: function(data){
					if(data == "True"){
						location.reload();
					} else{
						alert("Error");
					}
				},
			});
		} else {
			alert("Fill all gaps");
		}
	});

	$('#admin_exit').on('click', function(){
		$.ajax({
				url: 'logout.php',
				success: function(data){
					if(data == "True"){
						window.location.href = '../index.php';
					} else{
						alert("Error");
					}
				},
		});
	});

    $('.action').on('input', '#url', function(){
      let img = $(this).val();
      $('.preview').css('background-image','url('+img+')');
    });

});