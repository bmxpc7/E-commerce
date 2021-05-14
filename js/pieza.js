var colores = [];
var tallas = [];
var coloresResult
const addColor =(e)=>{
    colores.push(e.target.style);
    coloresResult = colores.filter((item,index)=>{
        return colores.indexOf(item) === index;
        
      })
}

const addTalla =(e) => {
    console.log(e);
    if(e.target.checked==true){
        tallas.push(e.target.id);
    }else{
        tallas.splice(tallas.indexOf(e.target.id),1);
    }
    console.log(tallas);
}
$("#btnAgregarCarrito").click(function () {
    console.log(coloresResult[0].background)
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
    '<div class="col-12 form-inline"">'+
    '<div class="col-4"><div style="background: '+coloresResult[0].background+'; width: 50px;height: 50px;border-radius: 50%"></div></div>'+
    '<div class="col-4"><div>'+tallas+'</div></div>'+
    '<div class="col-4"><input type="number" class="form-control"></div>'+
    '</div>'+
    '<button class="btn btn-success btnGuardar">Guardar en el Carrito</button>'+
    '</div>'+
    '</div>');
    
    }else{
        $(".modal-body").html('Por Favor Seleccione Color y Talla');
    } 
    $('#modalAfterCart').modal('show');
});

