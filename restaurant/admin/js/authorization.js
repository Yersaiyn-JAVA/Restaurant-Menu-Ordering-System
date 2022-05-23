$(document).ready(function(){

	$('#auth_comp').on('click',function(){
		var login = $('#auth_login').val();
		var pass = $('#auth_password').val();
		if(login != '' && pass != ''){
			$.ajax({
				url: 'authorization.php',
				method: 'POST',
				data: {
					login: login,
					password: pass
				},
				success: function(data){
					if(data == "True"){
						window.location.href = 'mainpanel.php';
					} else {
						alert('Wrong login or password');
					}
				}
			});

		} else {
			alert('Not all fields were filled');
		}
	});
});