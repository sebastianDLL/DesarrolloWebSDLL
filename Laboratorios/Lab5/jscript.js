function cargarContenido(abrir) {
  var contenedor;
  contenedor = document.getElementById("contenido");
  var ajax = new XMLHttpRequest(); //crea el objeto ajax
  ajax.open("get", abrir, true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      contenedor.innerHTML = ajax.responseText;
    }
  };
  ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
  ajax.send();
}

function cargarContenido(abrir) {

    var contenedor;
    contenedor = document.getElementById('contenido');
    fetch(abrir)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}


function cambiarAtributos() {
  const alto = document.getElementById("alto").value;
  const ancho = document.getElementById("ancho").value;
  const Ccolor = document.getElementById("colorSeleccionado").value;
  const color = document.getElementById("color").value;
  const objetoSeleccionado = document.getElementById("objeto").value;

  const objeto = document.getElementById(objetoSeleccionado);

  if (alto !== "") {
    objeto.style.height = alto + "px";
  }

  if (ancho !== "") {
    objeto.style.width = ancho + "px";
  }

  if (color === "fondo") {
    objeto.style.backgroundColor = objetoSeleccionado;
    objeto.style.backgroundColor = Ccolor;
  } else if (color === "primerplano") {
    objeto.style.color = objetoSeleccionado;
    objeto.style.color = Ccolor;
  }
}


function generarTabla() {
    var num = parseInt(document.getElementById("numero1").value);
    var num2 = parseInt(document.getElementById("numero2").value);
    var operacion = document.querySelector('input[name="operacion"]:checked').value;
    var resultado = document.getElementById("resultado");
  
    resultado.innerHTML = ""; // Limpiar el contenido anterior
  
    if (isNaN(num) || num < 1 || num >= 10) {
      resultado.innerHTML = "Ingrese un número válido (menor a 10) en el primer cuadro.";
      return;
    }
  
    // Crear la tabla
    var tablaHTML = "<table>";
  
    for (i = 1; i <= num2; i++) {
      var signo;
      var res;
      if (operacion === "suma") {
        res = num + i;
        signo = "+";
      } else if (operacion === "resta") {
        res = num - i;
        signo = "-";
      } else if (operacion === "multiplicacion") {
        res = num * i;
        signo = "*";
      } else if (operacion === "division") {
        res = num / i;
        signo = "/";
      }
  
      tablaHTML += "<tr>";
      tablaHTML += "<td>" + num + "</td>";
      tablaHTML += "<td>" + signo + "</td>";
      tablaHTML += "<td>" + i + "</td>";
      tablaHTML += "<td>=</td>";
      tablaHTML += "<td>" + res + "</td>";
      tablaHTML += "</tr>";
    }
  
    tablaHTML += "</table>";
  
    resultado.innerHTML = tablaHTML;
  }
  

function cargarCalendario() {
    var ajax = new XMLHttpRequest();
  
    ajax.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        document.getElementById("resultado").innerHTML = this.responseText;
      }
    };
  
    var mes = document.getElementById("mes").value;
    var anio = document.getElementById("anio").value;
  
    ajax.open("GET", "calendario.php?mes=" + mes + "&anio=" + anio, true);
    ajax.send();
}
  