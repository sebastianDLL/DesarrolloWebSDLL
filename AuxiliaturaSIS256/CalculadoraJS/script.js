v1 = 0; v2 = 0;

pantalla_1 = document.getElementById("sec-1");
pantalla_2 = document.getElementById("sec-2");

igual = document.getElementById("igual");

botones = document.getElementsByClassName("boton");
for (var i = 0; i < botones.length; i++) {
    botones[i].onclick = function () {
        escribir(this);
    }
}

function escribir(elemento) {
    boton = elemento.innerHTML;
    switch (boton) {
        case "pow":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_1.innerHTML = v1 + "^";
            pantalla_2.innerHTML = "";
            igual.onclick = function () {
                potencia();
            }
            break;
        case "raiz":
            pantalla_1.innerHTML += "√";
            igual.onclick = function () {
                raiz();
            }
            break;
        case "!":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_2.innerHTML += "!";
            igual.onclick = function () {
                factorial();
            }
            break;
        case "log":
            pantalla_1.innerHTML = "log";
            igual.onclick = function () {
                logaritmo();
            }
            break;
        case "+":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_1.innerHTML = v1 + "+";
            pantalla_2.innerHTML = "";
            igual.onclick = function () {
                sumar();
            }
            break;
        case "-":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_1.innerHTML = v1 + "-";
            pantalla_2.innerHTML = "";
            igual.onclick = function () {
                restar();
            }
            break;
        case "x":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_1.innerHTML = v1 + "x";
            pantalla_2.innerHTML = "";
            igual.onclick = function () {
                multiplicar();
            }
            break;
        case "/":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_1.innerHTML = v1 + "/";
            pantalla_2.innerHTML = "";
            igual.onclick = function () {
                dividir();
            }
            break;
        case "DEL":
            pantalla_1.innerHTML = "";
            pantalla_2.innerHTML = "";
            break
        default:
            pantalla_2.innerHTML += boton;
            break
    }
}

function sumar() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = v1 + v2;
}

function restar() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = v1 - v2;
}

function multiplicar() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = v1 * v2;
}

function dividir() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = (v1 / v2).toFixed(2);
}

function potencia() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = Math.pow(v1, v2);
}

function raiz() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML +=  v2;
    pantalla_2.innerHTML = Math.sqrt(v2).toFixed(2);
}

function factorial() {  
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2 + "!";
    var total = 1; 
    for (i=1; i<=v1; i++) {
        total = total * i; 
    }
    pantalla_2.innerHTML = total;
}

function logaritmo() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = Math.log10(v2).toFixed(2);
}
