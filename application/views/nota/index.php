<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Notas Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('nota/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Asignatura Id</th>
						<th>Parcial</th>
						<th>Teoria</th>
						<th>Practica</th>
						<th>Obs</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($notas as $n){ ?>
                    <tr>
						<td><?= $n['id']; ?></td>
						<td><?= $n['asignatura_id']; ?></td>
						<td><?= $n['parcial']; ?></td>
						<td><?= $n['teoria']; ?></td>
						<td><?= $n['practica']; ?></td>
						<td><?= $n['obs']; ?></td>
						<td>
                            <a href="<?= site_url('nota/edit/'.$n['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?= site_url('nota/remove/'.$n['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
