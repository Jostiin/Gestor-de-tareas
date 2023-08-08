
<div class="d-grid">
    <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#myModal">Agregar tarea</button>
</div>

<div class="modal" id="myModal">
    
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Agregar tarea</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form action="../app/controllers/addHomeworkController.php" class="form_container d-grid" method="POST">
                <div class="mb-3 mt-3">
                    <div class="input-group">
                        <span class="input-group-text">Materia</span>
                        <select class="form-select" name="materia">
                            <option>Ninguna</option>
                            <option>Quimica</option>
                            <option>Lengua y literatura</option>
                            <option>Programacion</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Tarea:
                    </label>
                    <input type="text" class="form-control"  placeholder="Enter Title" name="titulo">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="comment" name="homework" placeholder="Homework is here"></textarea>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text">Entrega</span>
                        
                        <input type="date" class="form-control"  placeholder="Enter Title" name="presentation">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
    
    </div>
  </div>
</div>

