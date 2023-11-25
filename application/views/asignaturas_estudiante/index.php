<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listado Asignaturas Estudiante</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('asignaturas_estudiante/add'); ?>" class="btn btn-success btn-sm">Agregar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Lugar</th>
                        <th>Materia</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($asignaturas_estudiante as $a){ ?>
                    <tr>
						<td><?= trim($a['grade_id']); ?></td>
						<td><?= trim($a['location_name']); ?></td>
                        <td><?= trim($a['subject_name']); ?></td>
						<td>
                            <a href="<?= site_url('asignaturas_estudiante/edit/'.$a['grade_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('asignaturas_estudiante/remove/'.$a['grade_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
