<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Edit</h3>
            </div>
			<?= form_open('usuario/edit/'.$usuario['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?= ($this->input->post('nombre') ? $this->input->post('nombre') : $usuario['nombre']); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?= form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?= ($this->input->post('email') ? $this->input->post('email') : $usuario['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?= form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="rol" class="control-label">Rol</label>
						<div class="form-group">
							<input type="text" name="rol" value="<?= ($this->input->post('rol') ? $this->input->post('rol') : $usuario['rol']); ?>" class="form-control" id="rol" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="contrasena" class="control-label"><span class="text-danger">*</span>Contrasena</label>
						<div class="form-group">
							<input type="text" name="contrasena" value="<?= ($this->input->post('contrasena') ? $this->input->post('contrasena') : $usuario['contrasena']); ?>" class="form-control" id="contrasena" />
							<span class="text-danger"><?= form_error('contrasena');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="obs" class="control-label">Obs</label>
						<div class="form-group">
							<textarea name="obs" class="form-control" id="obs"><?= ($this->input->post('obs') ? $this->input->post('obs') : $usuario['obs']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?= form_close(); ?>
		</div>
    </div>
</div>