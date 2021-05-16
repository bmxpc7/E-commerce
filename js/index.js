$(document).ready(function () {
    var datos = new FormData();
	datos.append("metodo", "mostrarPiezas");
    $.ajax({
		url:"ajax/inicio.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
            for (let index = 0; index < respuesta.length; index++) {
                $('.contenidoPrincipal').append('<div class="col-lg-3 col-md-6 mb-4 cardPieza">'+
                '<div class="card">'+
                '<div class="view overlay">'+
                '<img src="'+respuesta[index].foto+'" class="card-img-top">'+
                '<a href="/E-commerce/vistas/pieza.php?id='+respuesta[index].id+'"><div class="mask rgba-white-slight"></div></a>'+
                '</div>'+
                '<div class="card-body text-center">'+
                '<h5><strong><a href="/E-commerce/vistas/pieza.php?id='+respuesta[index].id+'" class="dark-grey-text">'+respuesta[index].nombre+'</a></strong></h5>'+
                '<h5>'+respuesta[index].descripcion+'</h5'+
                '<br>'+
                '<h4 class="font-weight-bold blue-text"><strong>$'+respuesta[index].precio+'</strong></h4>'+
                '</div>'+
                '</div>'
                );
            }
		}
	});
});

$(".btnIniciar").click(function () { 
    $('#modalLogin').modal('show');
    
});


$(".btnIniciarSesion").click(function (e) {
    e.preventDefault();
    var user = e.target.form[0].value;
    var pass = e.target.form[1].value;
    var dataLogin = new FormData();
	dataLogin.append("metodo", "iniciarSesion");
    dataLogin.append("user", user);
    dataLogin.append("pass", pass);
    console.log(dataLogin);
    $.ajax({
		url:"ajax/inicio.ajax.php",
		method: "POST",
		data: dataLogin,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
            
		}
	});
});