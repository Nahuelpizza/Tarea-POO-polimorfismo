<?php
declare(strict_types=1);

abstract class Empleado
{
    protected string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    abstract public function calcularSueldo(): float;
}
