//FactorialController.php
<?php

class FactorialController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function calcularFactorial($numero) {
        $resultado = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $resultado *= $i;
        }

        $this->model->guardarFactorial($numero, $resultado);

        return $resultado;
    }
}

?>
