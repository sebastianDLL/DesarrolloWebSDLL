function agrandarImagen() {
  var cantidad = parseInt(document.getElementById("cantidad").value);
  var imagen = document.getElementById("my-image");
  var width = imagen.clientWidth;
  imagen.style.width = (width + cantidad) + "px";
}

function reducirImagen() {
  var cantidad = parseInt(document.getElementById("cantidad").value);
  var imagen = document.getElementById("my-image");
  var width = imagen.clientWidth;
  imagen.style.width = (width - cantidad) + "px";
}
