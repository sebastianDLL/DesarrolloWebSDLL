function cargarContenido(abrir) {

    var contenedor;
    contenedor = document.getElementById('datos');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function crearPersona() {
    var contenedor;
    contenedor = document.getElementById('datos');
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);
    f = new FormData();
    f.add
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("post", 'create.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }

    ajax.send(parametros);
}

function editarPersona(id) {
    var contenedor;
    contenedor = document.getElementById('datos');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'form_update.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function actualizarPersona() {
    var contenedor;
    contenedor = document.getElementById('datos');
    var formulario = document.getElementById("form-act-persona");
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("post", 'update.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.send(parametros);
}

function eliminarPersona(id) {
    var contenedor;
    contenedor = document.getElementById('datos');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'delete.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}