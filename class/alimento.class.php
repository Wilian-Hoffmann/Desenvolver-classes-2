<?php
class alimento {
    private $Alimento;
    private $Pais;

    public function getAlimento() {
        return $this->Alimento;
    }

    public function getPais() {
        return $this->Pais;
    }

    public function __construct($Alimento, $Pais) {
        $this->Alimento = $Alimento;
        $this->Pais = $Pais;
    }

    public function __toString() {
        return "<li>{$this->Alimento} | \"{$this->Pais}</li>";
    }
}