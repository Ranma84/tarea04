<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listado Lugares</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('lugare/add'); ?>" class="btn btn-success btn-sm">Agregar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lugares as $l){ ?>
                    <tr>
						<td><?= $l['location_id']; ?></td>
						<td><?= $l['location_name']; ?></td>
						<td>
                            <a href="<?= site_url('Lugare/edit/'.$l['location_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('Lugare/remove/'.$l['location_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
