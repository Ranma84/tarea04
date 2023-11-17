<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Asignaturas Estudiante Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('asignaturas_estudiante/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Lugar Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($asignaturas_estudiante as $a){ ?>
                    <tr>
						<td><?= $a['id']; ?></td>
						<td><?= $a['lugar_id']; ?></td>
						<td>
                            <a href="<?= site_url('asignaturas_estudiante/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?= site_url('asignaturas_estudiante/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
