<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listado Asignaturas Estudiante</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Lugar</th>
                        <th>Materia</th>
                        <th>Teoría</th>
                        <th>Materia</th>
                    </tr>
                    <?php foreach($materias as $a){ ?>
                    <tr>
						<td><?= trim($a['grade_id']); ?></td>
						<td><?= trim($a['location_name']); ?></td>
                        <td><?= trim($a['subject_name']); ?></td>
                        <td><?= trim($a['theory_grade']); ?></td>
                        <td><?= trim($a['practice_grade']); ?></td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>