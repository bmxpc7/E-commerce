var colores = {}
$("#btnAgregarCarrito").click(function () { 
    var img = $("#imgProducto").attr("src");

    alert(img);
    $('#modalAfterCart').modal('show');
});

const addColor =(e)=>{
    colores = {
        nombre: e.target.id,
        hexa: e.target.style.background
    }
console.log(colores);
}