jQuery(document).on('submit','#formlg',function(event){
	event.preventDefault();
    jQuery.ajax({
		url: '../view/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Validando...');

		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if (!respuesta.error) {
			if (respuesta.tipo == "1") {
				location.href = "../view/administrator/index.php?id=1"
			}else if (respuesta.tipo == "2") {
                location.href = "../view/employee/index.php?id=2"
            }else if (respuesta.tipo == "3") {
				location.href = "../view/user/index.php?id=3"
			}
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			$('.botonlg').val('Iniciar Sesión');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("Complete");
	});
});
