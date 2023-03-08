$(document).on('click', '#submit', function(e){
	e.preventDefault();

	//alert('click');
	var usuario = $('#usuario').val();
	var email = $('#email').val();
	var password = $('#password').val();
	var submit = $('#submit').val();

	//alert(usuario);

	$.ajax({
		url: 'registrar.php',
		type: 'post',
		data: {
			usuario:usuario,
			email:email,
			password:password,
			submit:submit
		},
		success: function(data){
			$('#result').html(data);
		}
	});

	$('#form')[0].reset();

});

