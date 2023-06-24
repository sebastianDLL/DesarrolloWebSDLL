function cargarContenido(abrir, abrir2) {
  var contenedor = document.getElementById("contenido");

  var ajax = new XMLHttpRequest();
  ajax.open("GET", abrir, true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      contenedor.innerHTML = ajax.responseText;

      var ajax2 = new XMLHttpRequest();
      ajax2.open("GET", abrir2, true);
      ajax2.onreadystatechange = function () {
        if (ajax2.readyState == 4 && ajax2.status == 200) {
          var contador = document.getElementById("contador");
          contador.textContent = ajax2.responseText;
        }
      };
      ajax2.send();
    }
  };
  ajax.send();
}

function cargarContenido2(abrir) {
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


function ContenidoFetch(url) {
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById('reemplazar').innerHTML = data;
        })
        .catch(error => console.log(error));
}


function crearProducto() {
    var contenedor = document.getElementById('contenido');
    var formulario = document.getElementById("formInsertar");
    var parametros = new FormData(formulario);
  
    fetch("create.php", {
        method: "POST",
        body: parametros
      })
      .then(response => response.text())
      .then(() => {
        fetch("read.php")
          .then(response => response.text())
          .then(data => contenedor.innerHTML = data);
      });
  }
  

  function cargarClientes() {
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'clientes.php', true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            contenedor.innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}
