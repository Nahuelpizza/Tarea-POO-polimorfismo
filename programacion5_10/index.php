<?php
declare(strict_types=1);


require_once __DIR__ . '/Empleado.php';
require_once __DIR__ . '/EmpleadoFijo.php';
require_once __DIR__ . '/EmpleadoPorHora.php';
require_once __DIR__ . '/Vendedor.php';


$empleados = [
    new EmpleadoFijo("Ana Pérez"),
    new EmpleadoPorHora("Luis Gómez", 120, 800),
    new Vendedor("Marta Ruiz", 30000, 15, 2500),
    new EmpleadoFijo("Carlos Díaz"),
    new EmpleadoPorHora("Sofía López", 90, 950),
    new Vendedor("Pedro Sosa", 25000, 30, 1800),
];


$totalNomina = 0.0;

echo "===== LIQUIDACIÓN DE SUELDOS =====" . PHP_EOL;


foreach ($empleados as $empleado) {


    $sueldo = $empleado->calcularSueldo();


    $totalNomina = $totalNomina + $sueldo;


    echo $empleado->getNombre() . " | " . get_class($empleado) . " | $" . number_format($sueldo, 2) . PHP_EOL;
}


echo "----------------------------------------" . PHP_EOL;
echo "Total de la nómina: $" . number_format($totalNomina, 2) . PHP_EOL;