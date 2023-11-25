<?php foreach ($tabla as $clave => $valor) { ?>
    <tr>
        <td><?= strtoupper($valor['location_name']) ?></td>
        <td><?= strtoupper($valor['subject_name']) ?></td>
        <td><?= strtoupper($valor['students_name']) ?></td>
        <td><?= form_button(array('content' => 'Eliminar', 'class' => 'btn btn-success', 'onclick' => 'eliminar('.$clave.')')) ?></td>
        <?php
        $clave=trim($clave);
        $data = array(
        "tabla[$clave][location_id]"  => trim($valor['location_id']),
        "tabla[$clave][location_name]" => trim($valor['location_name']),
        "tabla[$clave][subject_id]"   => trim($valor['subject_id']),
        "tabla[$clave][subject_name]"   => trim($valor['subject_name']),
        "tabla[$clave][students_id]"   => trim($valor['students_id']),
        "tabla[$clave][students_name]"   => trim($valor['students_name'])
        );
        echo form_hidden($data);
        ?>
    </tr>
<?php } ?>