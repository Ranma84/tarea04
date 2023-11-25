function agregar() {
    const selectLugar = document.getElementById("lugar_id");
    const valorSelectLugar = selectLugar.value;
    const textoSelectLugar = selectLugar.options[selectLugar.selectedIndex].text;

    const selectSubject = document.getElementById("subject_id");
    const valorSubject = selectSubject.value;
    const textoSelectSubject = selectSubject.options[selectSubject.selectedIndex].text;

    const selectStudents = document.getElementById("students_id");
    const valorStudents = selectStudents.value;
    const textoSelectStudents = selectStudents.options[selectStudents.selectedIndex].text;

    if(valorSelectLugar==''){
        alert("Escoja el Lugar");
        return false;
    }

    if(valorSubject==''){
        alert("Escoja la materia");
        return false;
    }

    if(valorStudents==''){
        alert("Escoja a un estudiante");
        return false;
    }
    const formData = $("form").serializeArray();
    const tabla=JSON.stringify(formData);
    const datos = {
        location_id: valorSelectLugar,
        location_name: textoSelectLugar,
        subject_id: valorSubject,
        subject_name: textoSelectSubject,
        students_id: valorStudents,
        students_name: textoSelectStudents,
        tabla: tabla
    };
    $.ajax({
        type: 'POST',
        url: 'agregar',
        data: datos,
        success: function(response) {
            $('#TablaEstudiantes tbody').html(response);
        },
        error: function(error) {
            console.log(error);
        }
    });
}



function eliminar(id) {
    const formData = $("form").serializeArray();
    const tabla=JSON.stringify(formData);
    const datos = {
        tabla: tabla
    };
    $.ajax({
        type: 'POST',
        url: 'eliminar/'+id,
        data: datos,
        success: function(response) {
            $('#TablaEstudiantes tbody').html(response);
        },
        error: function(error) {
            console.log(error);
        }
    });
}