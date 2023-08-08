<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(isset($_POST['ready'])){
        $id = $_POST['ready'];
        include("../models/DB.php");
        $DBconnection = new DBMysql();
        $result = $DBconnection->UpdateDB("UPDATE homeworks SET Entregada='Entregada' WHERE id=$id");
    }
    if(isset($_POST['delete'])){
        $id = $_POST['delete'];
        include("../models/DB.php");
        $DBconnection = new DBMysql();
        $result = $DBconnection->UpdateDB("DELETE FROM homeworks WHERE id=$id");
    }
    if(isset($_POST['ver'])){
        $id = $_POST['ver'];
        include("../models/DB.php");
        $DBconnection = new DBMysql();
        $result2 = $DBconnection->FectAll("SELECT * from homeworks WHERE id=$id");
        include("../views/pag_ver.php");
    }
}