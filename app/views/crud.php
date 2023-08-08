<div class="container mt-3 ">
    <h2>Tareas</h2>
    <p>Tabla de tareas realizadas o por realizar</p>     
    
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tarea</th>
                    <th>Fecha</th>
                    <th>Materia</th>
                    <th>Entregada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("../app/models/DB.php");
                    $DBconnection = new DBMysql();
                    include("../app/controllers/filterHomeworksController.php");
                   
                 
                    $result = $DBconnection->FectAll('SELECT * FROM homeworks');
                    
                    
                    
                    foreach ($result as $value) {
                        $classSpan = 'bg-danger';
                        if($value[5] == "Entregada"){
                            $classSpan = 'bg-success';
                        }
                        echo "
                            <tr>
                                <td>$value[1]</td>
                                <td>$value[3]</td>
                                <td>$value[4]</td>
                                <td><span class='badge $classSpan'>$value[5]</span></td>
                                <td>
                                    <form action='../app/controllers/HomeworkController.php' method='POST'>
                                        <button type='submit'  name='ver' value='$value[0]' class='btn btn-primary btn-block' data-bs-toggle='modal' data-bs-target='#myModalVer'>Ver</button>
                                        <button type='submit' name='delete' value='$value[0]' class='btn btn-danger'>Delete</button>
                                        <button type='submit' name='ready' value='$value[0]' class='btn btn-success'>Ready</button>
                                    </form>
                                </td>
                            </tr>
                            ";
                        
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="footer_homeworks">
            <?php include("../app/models/HomeworkControl.php"); ?>
        </div>
        
</div>