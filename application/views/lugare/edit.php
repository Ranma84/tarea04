<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lugare Editar</h3>
            </div>
			<?= form_open('lugare/edit/'.$lugare['location_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="location_name" class="control-label">Nombre</label>
						<div class="form-group">
							<input required type="text" name="location_name" value="<?= ($this->input->post('location_name') ? $this->input->post('location_name') : $lugare['location_name']); ?>" class="form-control" id="location_name" required />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Guardar
				</button>
	        </div>				
			<?= form_close(); ?>
		</div>
    </div>
</div>