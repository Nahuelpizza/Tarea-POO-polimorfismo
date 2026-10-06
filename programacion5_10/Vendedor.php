<?php
declare(strict_types=1);

require_once __DIR__ . '/Empleado.php';

class Vendedor extends Empleado
{
    private float $sueldoBase;
    private int $cantidadVentas;
    private float $comisionPorVenta;

    public function __construct(
        string $nombre,
        float $sueldoBase,
        int $cantidadVentas,
        float $comisionPorVenta
    ) {
        parent::__construct($nombre);
        $this->sueldoBase = $sueldoBase;
        $this->cantidadVentas = $cantidadVentas;
        $this->comisionPorVenta = $comisionPorVenta;
    }

    public function calcularSueldo(): float
    {
        return $this->sueldoBase + ($this->cantidadVentas * $this->comisionPorVenta);
    }
}
