<?php
include("php/controllers/CrudCliente.php");
include("php/model/Cliente.php");

$idCliente = 'qwertyuiop';
$nombre = 'Samuel';
$direccion = 'Sepa la verga 55';
$telefono = '2281242049';

$cliente = new Cliente();
$crud_cliente = new CrudCliente();

$cliente->set_id_cliente($idCliente);
$cliente->set_nombre($nombre);
$cliente->set_direccion($direccion);
$cliente->set_telefono($telefono);

$resultado = $crud_cliente->select($cliente->get_id_cliente());

print_r($resultado);
 ?>