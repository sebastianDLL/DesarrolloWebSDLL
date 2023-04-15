<?php

class examen {
    public $n;
    public $cadena;
    public $a;
    public $b;
    public $c;
    
    public function __construct($n, $cadena, $a, $b, $c) {
        $this->n = $n;
        $this->cadena = $cadena;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    public function calcularFibonacci() {
        $fibonacci = array();
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;
        for ($i = 2; $i <= $this->n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return $fibonacci;
    }
    
    public function calcularMayor() {
        $numeros = array($this->a, $this->b, $this->c);
        $maximo = max($numeros);
        for ($i = 0; $i < count($numeros); $i++) {
            if ($numeros[$i] == $maximo) {
                $numeros[$i] = "<b>" . $numeros[$i] . "</b>";
            }
        }
        return $numeros;
    }
    
    public function piramide() {
        $cadena = $this->cadena;
        for ($i = 0; $i < strlen($cadena); $i++) {
            echo "<p>" . substr($cadena, 0, $i+1) . "</p>";
        }
    }
    
}

?>
