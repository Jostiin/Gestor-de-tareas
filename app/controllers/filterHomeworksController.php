<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $materia = $_POST['materia_filter']; 
    echo "<script>window.location.href='/Tareas/public'</script>";
}else{
    
}