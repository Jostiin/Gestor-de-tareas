<?php 

include_once("../models/DB.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $materia = $_POST["materia"];
    $titulo = $_POST["titulo"];
    $tarea = $_POST["homework"];
    $date = $_POST["presentation"];
    $DBconnection = new DBMysql();
    $DBconnection->InsertDB("INSERT INTO homeworks (Tarea, Instruccion, Fecha, Materia,Entregada)
    VALUES ('$titulo', '$tarea', '$date', '$materia','No entregada')");
}