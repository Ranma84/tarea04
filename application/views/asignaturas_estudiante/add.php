<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Asignaturas Estudiante Add</h3>
            </div>
            <?= form_open('asignaturas_estudiante/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="lugar_id" class="control-label">Lugare</label>
						<div class="form-group">
							<select name="lugar_id" class="form-control">
								<option value="">select lugare</option>
								<?php 
								foreach($all_lugares as $lugare)
								{
									$selected = ($lugare['id'] == $this->input->post('lugar_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$lugare['id'].'" '.$selected.'>'.$lugare['nombre'].'</option>';
								} 
								?>
							</select>
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