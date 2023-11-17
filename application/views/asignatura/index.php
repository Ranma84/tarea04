<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Asignaturas Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('asignatura/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Obs</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($asignaturas as $a){ ?>
                    <tr>
						<td><?= $a['id']; ?></td>
						<td><?= $a['nombre']; ?></td>
						<td><?= $a['obs']; ?></td>
						<td>
                            <a href="<?= site_url('asignatura/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?= site_url('asignatura/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
