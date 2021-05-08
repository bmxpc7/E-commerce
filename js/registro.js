$("#btnRegistrar").click(function () {
    var datos = new FormData();
	datos.append("metodo", "registrarCliente");
    $.ajax({

		url:"ajax/registro.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
            $(document).html(respuesta);
		}
	});
});