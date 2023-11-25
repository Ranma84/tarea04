<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Asignaturas Estudiante Agregar</h3>
            </div>
            <?= form_open('asignaturas_estudiante/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="lugar_id" class="control-label">Lugar</label>
						<div class="form-group">
							<select name="lugar_id" id="lugar_id" class="form-control">
								<option value="">Selecciona Lugar</option>
								<?php 
								foreach($all_lugares as $lugare)
								{		
									$selected = ($lugare['location_id'] == $this->input->post('location_id')) ? ' selected="selected"' : "";
									echo '<option value="'.$lugare['location_id'].'" '.$selected.'>'.$lugare['location_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="subject_id" class="control-label">Asignatura</label>
						<div class="form-group">
							<select id="subject_id" name="subject_id" class="form-control">
								<option value="">Selecciona Asignatura</option>
								<?php 
								foreach($all_asignaturas as $asignatura)
								{		
									$selected = ($asignatura['subject_id'] == $this->input->post('subject_id')) ? ' selected="selected"' : "";
									echo '<option value="'.$asignatura['subject_id'].'" '.$selected.'>'.$asignatura['subject_name'].'</option>';
								} 
								unset($all_lugares,$all_Asignaturas,$asignatura,$lugare);
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="row clearfix">
				<div class="col-md-6">
						<label for="students_id" class="control-label">Estudiante</label>
						<div class="form-group">
							<select id="students_id" name="students_id" class="form-control">
								<option value="">Selecciona Estudiante</option>
								<?php 
								foreach($all_students as $estudiante)
								{		
									$selected = ($estudiante['student_id'] == $this->input->post('student_id')) ? ' selected="selected"' : "";
									echo '<option value="'.$estudiante['student_id'].'" '.$selected.'>'.strtoupper($estudiante['first_name'].' '.$estudiante['last_name']).'</option>';
								} 
								unset($all_students,$estudiante);
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<?= form_button(array('content' => 'Agregar', 'class' => 'btn btn-success', 'onclick' => 'agregar()')) ?>
					</div>
				</div>	

				<div class="row clearfix">
					<div class="col-md-12">
						<table class="table" id="TablaEstudiantes" name="TablaEstudiantes">
							<thead>
								<tr>
									<th>Lugar</th>
									<th>Asignatura</th>
									<th>Estudiante</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>				
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