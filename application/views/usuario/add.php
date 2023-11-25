<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Add</h3>
            </div>
            <?= form_open('usuario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="mail" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input require type="text" name="mail" value="<?= $this->input->post('mail'); ?>" class="form-control" id="mail" />
							<span class="text-danger"><?= form_error('mail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="rol" class="control-label">Rol</label>
						<div class="form-group">
							<select disabled name="rol" class="form-control">
								<?php 
								$all_roll=array(0=>'Docente',1=>'Estudiante');
								foreach($all_roll as $clave => $roles)
								{
									$selected = ($clave == $this->input->post('rol')) ? ' selected="selected"' : "";
									echo '<option value="'.$clave.'" >'.$roles.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Contrasena</label>
						<div class="form-group">
							<input require type="password" name="password" value="<?= $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?= form_error('password');?></span>
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