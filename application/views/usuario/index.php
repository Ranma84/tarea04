<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuarios Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('usuario/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Rol</th>
						<th>Contrasena</th>
						<th>Obs</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($usuarios as $u){ ?>
                    <tr>
						<td><?= $u['id']; ?></td>
						<td><?= $u['nombre']; ?></td>
						<td><?= $u['email']; ?></td>
						<td><?= $u['rol']; ?></td>
						<td><?= $u['contrasena']; ?></td>
						<td><?= $u['obs']; ?></td>
						<td>
                            <a href="<?= site_url('usuario/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?= site_url('usuario/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
