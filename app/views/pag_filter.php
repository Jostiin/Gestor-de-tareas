<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/modal_add.css">
    <title>TAREAS</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!--HEADER-->
    <?php
        include("../app/views/header.php")
    ?>
    <!--HEADER CANVAS-->
    
    <?php
        include("../app/views/modal_add.php")
    ?>
    
    <!--CRUD-->

    <?php
        include("../app/views/crud.php");
    ?>
    
</body>
</html>