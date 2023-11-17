<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lugares Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('lugare/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                    <?php foreach($lugares as $l){ ?>
                    <tr>
						<td><?= $l['id']; ?></td>
						<td><?= $l['nombre']; ?></td>
						<td><?= $l['obs']; ?></td>
						<td>
                            <a href="<?= site_url('lugare/edit/'.$l['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?= site_url('lugare/remove/'.$l['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
