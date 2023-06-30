<?php

include_once "Cliente.php";
include_once "Moto.php";
include_once "MotoNacional.php";
include_once "MotoInternacional.php";
include_once "Venta.php";
include_once "Empresa.php";
include_once "VentaOnline.php";
include_once "VentaLocal.php";

ini_set('memory_limit', '1024M');



$objCliente1 = new Cliente("fausto", "bilo", 1, "DNI", 44705523);
$objCliente2 = new Cliente("Hernan", "Croceri", 1, "DNI", 24078592);

$colClientes = array($objCliente1, $objCliente2);

$moto1 = new MotoNacional(11, 2230000, 2022, "Benelli Imperiale 400", 85, true, 10);
$moto2 = new MotoNacional(12, 584000, 2021, "Zanella Zr 150 Ohc", 70, true, 10);
$moto3 = new MotoNacional(13, 999900, 2023, "Zanella Patagonian Eagle 250", 55, false, 15);
$moto4 = new MotoInternacional(14, 12499900, 2020, "Pitbike Enduro Motocross Apollo Aiii 190cc Plr", 100, true, "Francia", 6244400);


//ejercicio 3...
$colMotos = array($moto1, $moto2, $moto3, $moto4);

$objEmpresa = new Empresa("Alta Gama", "Av Argenetina 123", $colClientes, $colMotos, []);


//ejercicio 4...
$colCodigosMoto1 = array(11, 12, 13, 14);
$info1 = ["direccion" => "Arrayanes 234", "dni" => "44705523", "telefono" => "299473596"];

$ejercicio4 = $objEmpresa->registrarVenta($colCodigosMoto1, $objCliente2, "online", $info1);

echo "\n\n" . $ejercicio4;


//ejercicio 5...
$colCodigosMoto2 = array(13, 14);
$info2 = ["dia" => "22/06/23", "horario" => "17:40"];

$ejercicio5 = $objEmpresa->registrarVenta($colCodigosMoto2, $objCliente2, "local", $info2);

echo "\n\n" . $ejercicio5;


//ejercicio 6...
$colCodigosMoto3 = array(14, 2);
$info3 = ["dia" => "31/01/94", "horario" => "19:25"];

$ejercicio6 = $objEmpresa->registrarVenta($colCodigosMoto3, $objCliente2, "local", $info3);

echo "\n\n" . $ejercicio6;


//ejercicio 7...
$ejercicio7 = $objEmpresa->retornarVentasOnline();
echo "\n\n";
print_r($ejercicio7);


//ejercicio 8...
$ejercicio8 = $objEmpresa->retornarImporteVentasEnLocal();

echo "\n\n" . $ejercicio8;


//ejercicio 9...

echo "\n\n" . $objEmpresa;


