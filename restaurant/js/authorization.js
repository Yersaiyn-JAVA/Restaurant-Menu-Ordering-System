$(document).ready(function(){
	$('.toogle').on('click', function(){
		$('.tab1').toggleClass('tab_display');
		$('.tab2').toggleClass('tab_display');
	});
	$('#auth_comp').on('click',function(){
		var email = $('#auth_email').val();
		var pass = $('#auth_password').val();
		if(email != '' && pass != ''){
			$.ajax({
				url: 'authorization.php',
				method: 'POST',
				data: {
					email: email,
					password: pass
				},
				success: function(data){
					if(data == "True"){
						window.location.href = 'index.php';
					} else {
						alert('Incorrect login or password, try again');
					}
				}
			});

		} else {
			alert('Not all fields were filled');
		}
	});
	$('.input').keypress(function (e) {
	    var key = e.which;
	 	if(key == 13){
	   		if($('#tab1').hasClass('tab_display') == true){
	   			$('#auth_comp').click();
	   		} else {
	   			$('#reg_comp').click();
	   		}
	 	}
	});
	$('#reg_comp').on('click',function(){
		var firstname = $('#reg_firstname').val();
		var lastname = $('#reg_lastname').val();
		var email = $('#reg_email').val();
		var pass = $('#reg_password').val();
		var telephone = $('#reg_telephone').val();
		if(firstname != '' && lastname != '' && email != '' && pass != '' && telephone != ''){
			if(pass != ''){

				$.ajax({
					url: 'registration.php',
					method: 'POST',
					data: {
						Firstname: firstname,
						Lastname: lastname,
						Email: email,
						Telephone: telephone,
						Password: pass
					},
					success: function(data){
						if(data == "True"){
							$('.tab1').toggleClass('tab_display');
							$('.tab2').toggleClass('tab_display');
						} else if(data == "False"){
							alert("User with same email was registered");
						}
					}
				});
			} else {
			}
		} else {
			alert('Not all fields were filled');
		}
	});
});