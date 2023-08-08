<!DOCTYPE html>
<html lang="en">
<head>
    <title>TAREA</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../public/css/pag_ver.css">
</head>
<body>
    <?php
        include("header.php");
        
    ?>
    <div class="container">
        <h1><?php echo $result2[0][4]; ?></h1>
        <h2><?php echo $result2[0][1]; ?></h2>
    </div>
    <div class="container container2">
        <textarea class="form-control" rows="5" id="comment" name="text" disabled><?php echo $result2[0][2]; ?></textarea>
    </div>
    <div class="container">
        <a href="/Tareas/public">
            <button type="button" class="btn btn-info">Back</button>
        </a>
    </div>
</body>
</html>