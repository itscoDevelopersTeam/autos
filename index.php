<?php
include 'include/header.php';
//include 'php/view/login/login.php';
// include 'include/footer.php';
include 'php/model/crud/CrudModelo.php';
include 'php/model/entity/Modelo.php';

$modelo = new Modelo();
$crudModelo = new CrudModelo();

$modelo->set_id_modelo("lobo");
$modelo->set_nombre("LOBO");
$modelo->set_id_marca("ford");

$modelo = $crudModelo->insert($modelo);


?>