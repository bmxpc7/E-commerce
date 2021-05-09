$("#btnAgregarCarrito").click(function () { 
    var img = $("#imgProducto").attr("src");

    alert(img);
    $('#modalAfterCart').modal('show');
});

const addColor =(e)=>{
console.log(e);
}