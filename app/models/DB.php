<?php

class DBMysql{
    public $DB;
    function __construct()
    {
        $this->DB = $this->Connection();
    }
    function Connection(){
        return new mysqli("localhost","root","","homeworks");
    }
    function InsertDB($sql){
        if($this->DB->query($sql)){
            echo "<script>window.location.href='/Tareas/public'</script>";
        }else{
            echo "Error in BD connection insert new homework";
        }
    }
    function FectAll($sql){
        
        return $this->DB->query($sql)->fetch_all();
    }
    function UpdateDB($sql){
        $this->DB->query($sql);
        echo "<script>window.location.href='/Tareas/public'</script>";
    }
    function DeleteDB($sql){
        $this->DB->query($sql);
        echo "<script>window.location.href='/Tareas/public'</script>";
    }

}
/*
$v = new DBMysql();
$v->InsertDB("INSERT INTO homeworks (Tarea, Fecha, Materia,Entregada)
VALUES ('Mapa conceptual', '2023-08-02', 'Quimica','no entragada')");
*/