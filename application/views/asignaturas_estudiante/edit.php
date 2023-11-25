<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Asignaturas Estudiante Editar</h3>
            </div>
			<?= form_open('asignaturas_estudiante/edit/'.$asignaturas_estudiante['grade_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="lugar_id" class="control-label">Lugare</label>
						<div class="form-group">
							<select disabled name="lugar_id" class="form-control">
								<option value="">select lugare</option>
								<?php 
								foreach($all_lugares as $lugare)
								{
									$selected = ($lugare['location_id'] == $asignaturas_estudiante['location_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$lugare['location_id'].'" '.$selected.'>'.$lugare['location_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<label for="subject_id" class="control-label">Asignatura</label>
						<div class="form-group">
							<select disabled name="subject_id" class="form-control">
								<option value="">select lugare</option>
								<?php 
								foreach($all_subject as $lugare)
								{
									$selected = ($lugare['subject_id'] == $asignaturas_estudiante['subject_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$lugare['subject_id'].'" '.$selected.'>'.$lugare['subject_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="student_id" class="control-label">Estudiante</label>
						<div class="form-group">
							<select disabled name="student_id" class="form-control">
								<option value="">select Estudiante</option>
								<?php 
								foreach($all_students as $lugare)
								{
									$selected = ($lugare['student_id'] == $asignaturas_estudiante['student_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$lugare['student_id'].'" '.$selected.'>'.$lugare['first_name'].' '.$lugare['last_name'] .'</option>';
								} 
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-12">
						<table class="table" id="TablaEstudiantes" name="TablaEstudiantes">
							<thead>
								<tr>
									<th>Teoría</th>
									<th>Práctica</th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<td><input type="number" name="theory_grade" value="<?= $asignaturas_estudiante['theory_grade'] ?>" class="form-control" id="theory_grade" required/></td>
								<td><input type="number" name="practice_grade" value="<?= $asignaturas_estudiante['practice_grade'] ?>" class="form-control" id="practice_grade" required/></td>
							</tr>
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