<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Nota Editar</h3>
            </div>
			<?= form_open('nota/edit/'.$nota['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="asignatura_id" class="control-label">Asignatura</label>
						<div class="form-group">
							<select name="asignatura_id" class="form-control">
								<option value="">select asignatura</option>
								<?php 
								foreach($all_asignaturas as $asignatura)
								{
									$selected = ($asignatura['id'] == $nota['asignatura_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$asignatura['id'].'" '.$selected.'>'.$asignatura['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="parcial" class="control-label"><span class="text-danger">*</span>Parcial</label>
						<div class="form-group">
							<input type="text" name="parcial" value="<?= ($this->input->post('parcial') ? $this->input->post('parcial') : $nota['parcial']); ?>" class="form-control" id="parcial" />
							<span class="text-danger"><?= form_error('parcial');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="teoria" class="control-label">Teoria</label>
						<div class="form-group">
							<input type="text" name="teoria" value="<?= ($this->input->post('teoria') ? $this->input->post('teoria') : $nota['teoria']); ?>" class="form-control" id="teoria" />
							<span class="text-danger"><?= form_error('teoria');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="practica" class="control-label">Practica</label>
						<div class="form-group">
							<input type="text" name="practica" value="<?= ($this->input->post('practica') ? $this->input->post('practica') : $nota['practica']); ?>" class="form-control" id="practica" />
							<span class="text-danger"><?= form_error('practica');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="obs" class="control-label">Obs</label>
						<div class="form-group">
							<textarea name="obs" class="form-control" id="obs"><?= ($this->input->post('obs') ? $this->input->post('obs') : $nota['obs']); ?></textarea>
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