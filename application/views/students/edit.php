<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lugare Editar</h3>
            </div>
			<?= form_open('students/edit/'.$students['student_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="first_name" class="control-label">Nombre</label>
						<div class="form-group">
							<input required type="text" name="first_name" value="<?= ($this->input->post('first_name') ? $this->input->post('first_name') : $students['first_name']); ?>" class="form-control" id="first_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_name" class="control-label">Apellido</label>
						<div class="form-group">
							<input required type="text" name="last_name" value="<?= ($this->input->post('last_name') ? $this->input->post('last_name') : $students['last_name']); ?>" class="form-control" id="last_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input required type="email" name="email" value="<?= ($this->input->post('email') ? $this->input->post('email') : $students['email']); ?>" class="form-control" id="email" />
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