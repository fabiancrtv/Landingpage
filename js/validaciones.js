$(document).ready(function(){

	$('form').submit(function(e){
		e.preventDefault();
		var nombreUsuario = $('form input[name="nombre"]').val();
		var emailUsuario = $('form input[name="email"]').val();
		var comentarioUsuario = $('form textarea[name="comentario"]').val();

		if (nombreUsuario == ""){
			alert('No has escrito tu nombre');
		}else{
			console.log(nombreUsuario);
		}; 

		if (emailUsuario){
			var email = emailUsuario.indexOf("@");
			if (email == -1){
				alert('Debes escribir tu email');

			}else{
				console.log(emailUsuario);
			};
		};

		if (comentarioUsuario == ""){
			alert('Debes escribir algo');
		}else{
			console.log(comentarioUsuario);
		};

	});

});