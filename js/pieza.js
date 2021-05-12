var colores = [];
var tallas = [];

const addColor =(e)=>{
    colores.push(e.target.id);
    var coloresResult = colores.filter((item,index)=>{
        return colores.indexOf(item) === index;
      })
      console.log(coloresResult);
}

const addTalla =(e) => {
    console.log(e);
    
    // var tallasResult = tallas.filter((item,index)=>{
    //     return tallas.indexOf(item) === index;
    //   })

    if(e.target.checked==true){
        tallas.push(e.target.id);
    }else{
        tallas.splice(tallas.indexOf(e.target.id),1);
    }
    console.log(tallas);
}
$("#btnAgregarCarrito").click(function () {
    if(tallas.length>0 && colores.length>0){
        var img = $("#imgProducto").attr("src");
    var nombre = $("#nombrePieza").html();
    var precio = $("#precioPieza").html();
    $(".modal-body").html('<div class="row form-inline">'+
    '<div class="col-6">'+
    '<img style="margin-left: -15%;" src="'+img+'" width="200px">'+
    '</div>'+
    '<div class="col-6">'+
    '<h1>'+nombre+'</h1>'+
    '<h3>'+precio+'</h3>'+
    '<button class="btn btn-success btnGuardar">Guardar en el Carrito</button>'+
    '</div>'+
    '</div>');
    
    }else{
        $(".modal-body").html('Por Favor Seleccione Color y Talla');
    } 
    $('#modalAfterCart').modal('show');
});

