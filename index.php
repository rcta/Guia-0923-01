<?php

//incluir la logica del modelo

require_once('modelo.php');

// obtener la lista de las unidades

$datos =obtener_unidades_medida();

//incluir la logica de la vista
require ('vista.php');

?>