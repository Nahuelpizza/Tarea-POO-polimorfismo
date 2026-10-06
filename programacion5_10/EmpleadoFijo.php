<?php
declare(strict_types=1);

require_once __DIR__ . '/Empleado.php';

class EmpleadoFijo extends Empleado
{
    private const SUELDO_MENSUAL = 50000;

    public function calcularSueldo(): float
    {
        return self::SUELDO_MENSUAL;
    }
}
