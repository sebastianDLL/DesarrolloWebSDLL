// Crear el arreglo de estudiantes
var estudiantes = [];
var cantidadEstudiantes = parseInt(
  prompt("Ingrese la cantidad de estudiantes:")
);

// Pedir los datos de cada estudiante y agregarlos al arreglo
for (var i = 0; i < cantidadEstudiantes; i++) {
  var estudiante = {};
  estudiante.apellidos_nombres = prompt(
    "Ingrese apellidos y nombres del estudiante " + (i + 1) + ":"
  );
  estudiante.edad = parseInt(
    prompt("Ingrese la edad del estudiante " + (i + 1) + ":")
  );
  estudiante.calificaciones = [];

  // Pedir las calificaciones del estudiante
  var cantidadCalificaciones = parseInt(
    prompt(
      "Ingrese la cantidad de calificaciones del estudiante " + (i + 1) + ":"
    )
  );

  for (var j = 0; j < cantidadCalificaciones; j++) {
    var materia = prompt(
      "Ingrese la materia " + (j + 1) + " del estudiante " + (i + 1) + ":"
    );
    var nota = parseFloat(
      prompt(
        "Ingrese la nota de la materia " +
          (j + 1) +
          " del estudiante " +
          (i + 1) +
          ":"
      )
    );

    estudiante.calificaciones.push({
      materia: materia,
      nota: nota,
    });
  }

  estudiantes.push(estudiante);
}

var tablaEstudiantes = document.getElementById("tabla-estudiantes");

// Agregar filas a la tabla con los datos de los estudiantes
for (var i = 0; i < estudiantes.length; i++) {
  var estudiante = estudiantes[i];

  var row = document.createElement("tr");

  var nroCell = document.createElement("td");
  nroCell.textContent = i + 1;
  row.appendChild(nroCell);

  var apellidosNombresCell = document.createElement("td");
  apellidosNombresCell.textContent = estudiante.apellidos_nombres;
  row.appendChild(apellidosNombresCell);

  var edadCell = document.createElement("td");
  edadCell.textContent = estudiante.edad;
  row.appendChild(edadCell);

  for (var j = 0; j < estudiante.calificaciones.length; j++) {
    var calificacion = estudiante.calificaciones[j];

    var materiaCell = document.createElement("td");
    materiaCell.textContent = calificacion.materia;
    row.appendChild(materiaCell);

    var notaCell = document.createElement("td");
    notaCell.textContent = calificacion.nota;
    row.appendChild(notaCell);
  }

  tablaEstudiantes.appendChild(row);
}

// Función para encontrar el estudiante con mayor nota y cambiar su color a verde
function encontrarMejorEstudiante() {
  var mejorEstudianteIndex = 0;
  var mejorNota = 0;

  // Recorrer el arreglo de estudiantes
  for (var i = 0; i < estudiantes.length; i++) {
    var estudiante = estudiantes[i];

    // Obtener la nota más alta del estudiante
    var notaMaxima = Math.max(
      ...estudiante.calificaciones.map((calificacion) => calificacion.nota)
    );

    // Si la nota del estudiante actual es mayor que la nota almacenada como la mejor hasta el momento, actualizar la información
    if (notaMaxima > mejorNota) {
      mejorEstudianteIndex = i;
      mejorNota = notaMaxima;
    }
  }

  var filaMejorEstudiante = tablaEstudiantes.rows[mejorEstudianteIndex + 1];
  filaMejorEstudiante.classList.add("mejor-estudiante");
}
