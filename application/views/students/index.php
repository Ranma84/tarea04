<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Nombre de Estudiante</h3>
            	<div class="box-tools">
                    <a href="<?= base_url('Students/add'); ?>" class="btn btn-success btn-sm">Agregar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($students as $l){ ?>
                    <tr>
						<td><?= $l['student_id']; ?></td>
						<td><?= $l['first_name'].' '.$l['last_name']; ?></td>	
						<td><?= $l['email']; ?></td>
						<td>
                            <a href="<?= base_url('Students/edit/'.$l['student_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= base_url('Students/remove/'.$l['student_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
