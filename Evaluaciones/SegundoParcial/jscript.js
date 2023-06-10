function cambiarBlancoNegro() {
  var titulo = document.getElementById("titulo");
  var mensaje = document.getElementById("mensaje");
  var cont = document.getElementById("contenido");
  var preg = document.getElementsByClassName("pregunta");

  preg[0].style.border="2px solid black";
  preg[1].style.border="2px solid black";
  preg[2].style.border="2px solid black";
  preg[3].style.border="2px solid black";
  cont.style.border = "2px solid black";
  titulo.style.backgroundColor = "black";
  mensaje.style.backgroundColor = "black";
  titulo.style.color = "white";
  mensaje.style.color = "white";
}

function Contenidofetch(abrir) {
  var titulo = document.getElementById("titulo");
  titulo.innerHTML = "";
  titulo.innerHTML = "<h2>Pregunta 3 Insertar en fetch</h2>";
  var contenedor;
  contenedor = document.getElementById("contenido");
  fetch(abrir)
    .then((response) => response.text())
    .then((data) => (contenedor.innerHTML = data));
}

function cargarContenido(abrir) {
  var contenedor;
  contenedor = document.getElementById("contenido");
  var ajax = new XMLHttpRequest(); //crea el objetov ajax
  ajax.open("get", abrir, true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      contenedor.innerHTML = ajax.responseText;
    }
  };
  ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
  ajax.send();
}

function crearLibro() {
  var mensaje = document.getElementById("mensaje");
  mensaje.innerHTML = "";
  mensaje.innerHTML = "<h2>Se creó el registro correctamente</h2>";
  var contenedor;
  contenedor = document.getElementById("contenido");
  var formulario = document.getElementById("formInsertar");
  var parametros = new FormData(formulario);
  f = new FormData();
  f.add;
  var ajax = new XMLHttpRequest(); //crea el objetov ajax
  ajax.open("post", "create.php", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      contenedor.innerHTML = ajax.responseText;
    }
  };

  ajax.send(parametros);
}

function dibujarFormulario() {
  var titulo = document.getElementById("titulo");
  titulo.innerHTML = "";
  titulo.innerHTML = "<h2>Pregunta 2 DOM en Javascript</h2>";

  var contenedor = document.getElementById("contenido");

  var input1 = document.createElement("input");
  input1.setAttribute("type", "number");
  input1.setAttribute("id", "filas");
  contenedor.appendChild(input1);
  input1.setAttribute("placeholder", "Filas");
  contenedor.appendChild(input1);
  contenedor.appendChild(document.createElement("br"));

  var input2 = document.createElement("input");
  input2.setAttribute("type", "number");
  input2.setAttribute("id", "columnas");
  contenedor.appendChild(input2);
  input2.setAttribute("placeholder", "Columnas");
  contenedor.appendChild(input2);
  contenedor.appendChild(document.createElement("br"));

  var btnDibujarTabla = document.createElement("button");
  btnDibujarTabla.textContent = "Dibujar Tabla";
  btnDibujarTabla.addEventListener("click", dibujarTabla);
  contenedor.appendChild(btnDibujarTabla);
}

function dibujarTabla() {
  var filasInput = document.getElementById("filas");
  var columnasInput = document.getElementById("columnas");
  var contenido = document.getElementById("contenido");

  var filas = parseInt(filasInput.value);
  var columnas = parseInt(columnasInput.value);

  if (!isNaN(filas) && !isNaN(columnas)) {
    // Crea una tabla y agrega las filas y columnas
    var tabla = document.createElement("table");

    for (var i = 0; i < filas; i++) {
      var fila = document.createElement("tr");

      for (var j = 0; j < columnas; j++) {
        var celda = document.createElement("td");
        fila.appendChild(celda);
      }

      tabla.appendChild(fila);
    }

    // Reemplaza el contenido existente con la nueva tabla
    contenido.innerHTML = "";
    contenido.appendChild(tabla);
  } else {
    alert("Ingresa valores válidos para filas y columnas.");
  }
}

function cargarDatos() {
  var divSelect = document.getElementById("divSelect");
  var divImagen = document.getElementById("divImagen");

  fetch('datos.php')
    .then(response => response.json())
    .then(datos => {
      llenarSelect(datos);
      actualizarImagen();
    })
    .catch(error => console.error('Error:', error));

  // Llenar el select con los títulos de los libros
  function llenarSelect(datos) {
    var titulos = datos.titulos;
    var selectLibros = document.createElement("select");
    selectLibros.id = "selectLibros";

    for (var i = 0; i < titulos.length; i++) {
      var option = document.createElement("option");
      option.value = titulos[i];
      option.text = titulos[i];
      selectLibros.appendChild(option);
    }

    // Agregar el select al div contenedor
    divSelect.appendChild(selectLibros);

    // Agregar evento al cambio de selección del select
    selectLibros.addEventListener("change", actualizarImagen);
  }

  // Actualizar la imagen al cambiar la selección en el select
  function actualizarImagen() {
    var selectLibros = document.getElementById("selectLibros");
    var index = selectLibros.selectedIndex;
    var imagen = datos.imagenes[index];

    // Actualizar la imagen en el div
    divImagen.style.backgroundImage = "url(" + imagen + ")";
  }
}
