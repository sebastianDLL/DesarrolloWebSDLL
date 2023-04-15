<?php
class Cola {
    private $tipo;
    private $elementos;

    public function __construct($tipo) {
        $this->tipo = $tipo;
        $this->elementos = array();
    }

    public function insertarDelante($elemento) {
        array_unshift($this->elementos, $elemento);
    }

    public function insertarDetras($elemento) {
        array_push($this->elementos, $elemento);
    }

    public function eliminar() {
        if (!$this->estaVacia()) {
            array_shift($this->elementos);
        }
    }

    public function mostrar() {
        foreach ($this->elementos as $elemento) {
            echo $elemento . " ";
        }
    }

    public function estaVacia() {
        return empty($this->elementos);
    }

    public function getTipo() {
        return $this->tipo;
    }
}
