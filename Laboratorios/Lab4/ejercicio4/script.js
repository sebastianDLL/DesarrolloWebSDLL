function agregarElemento() {
    var elementoInput = document.getElementById("elemento-input");
    var elemento = elementoInput.value.trim();
    elementoInput.value = "";
  
    if (elemento !== "") {
      var lista = document.getElementById("lista");
      var li = document.createElement("li");
  
      if (elemento.toLowerCase().includes("de")) {
        li.classList.add("resaltado");
      }
  
      li.textContent = elemento;
      lista.appendChild(li);
    }
  }
  