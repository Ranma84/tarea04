<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Estudiante Agregar</h3>
            </div>
            <?= form_open('students/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombres</label>
						<div class="form-group">
							<input type="text" name="first_name" value="<?= $this->input->post('first_name'); ?>" class="form-control" id="first_name" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label">Apellidos</label>
						<div class="form-group">
							<input type="text" name="last_name" value="<?= $this->input->post('last_name'); ?>" class="form-control" id="last_name" required />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label">email</label>
						<div class="form-group">
							<input type="email" name="email" value="<?= $this->input->post('email'); ?>" class="form-control" id="email" required/>
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