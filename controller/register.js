$(document).ready(function() {
	$('#btnRegister').on('click', function() {
		$("#btnRegister").attr("disabled", "disabled");
		var username = $('#username').val();
        var password = $('#password').val();
        var repeat_password = $('#repeat_password').val();
		if(username!="" && password!="" && repeat_password!="" ){
			$.ajax({
				url: "../model/getRegister.php",
				type: "POST",
				data: {
					type: 1,
					username: username,
                    password: password,
                    repeat_password: repeat_password					
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
                        location.href = "login.php";
					}
					else if(dataResult.statusCode==201){
                        alert('error !');
					}
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});