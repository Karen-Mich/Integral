//FactorialModel.php
<?php

class FactorialModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function guardarFactorial($numero, $resultado) {
        $query = "INSERT INTO resultado (numero, resultado) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ii", $numero, $resultado);
        $stmt->execute();
        $stmt->close();
    }
}

?>
