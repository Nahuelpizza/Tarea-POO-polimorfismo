<?php
declare(strict_types=1);

require_once __DIR__ . '/Empleado.php';

class EmpleadoPorHora extends Empleado
{
    private float $horasTrabajadas;
    private float $tarifaPorHora;

    public function __construct(
        string $nombre,
        float $horasTrabajadas,
        float $tarifaPorHora = 800
    ) {
        parent::__construct($nombre);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->tarifaPorHora = $tarifaPorHora;
    }

    public function calcularSueldo(): float
    {
        return $this->horasTrabajadas * $this->tarifaPorHora;
    }
}
