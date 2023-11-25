<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listado Usuarios</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('usuario/add'); ?>" class="btn btn-success btn-sm">Agregar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Email</th>
						<th>Rol</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($usuarios as $u){ ?>
                    <tr>
						<td><?= $u['user_id']; ?></td>
						<td><?= $u['mail']; ?></td>
						<td><?= $u['role']; ?></td>
						<td>
                            <a href="<?= site_url('usuario/edit/'.$u['user_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('usuario/remove/'.$u['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
