<?php

$tareas_entregadas = 0;
$tareas_no_entregadas = 0;

foreach ($result as $value) {
    if($value[5] == "Entregada"){
        $tareas_entregadas += 1;
        
    }else
    if($value[5] = "no entregada"){
        $tareas_no_entregadas += 1;
     
    }
    
}

echo "
    <span class='badge bg-success'>Total Entregadas $tareas_entregadas</span>
    <span class='badge bg-danger'>Total faltantes $tareas_no_entregadas</span>
";