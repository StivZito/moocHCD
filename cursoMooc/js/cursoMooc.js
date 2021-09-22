//////////////////////////////////////////////////////////////////////curso mooc
function reporteCursoMoocAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/cursoMooc.php?op=reporteCursoMoocAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grado + "</td>";

                    tabla += "<td align='center'>" + data[i].avm3  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm4  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm5  + "</td>";

                    tabla += "<td align='center'>" + data[i].estadoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM5  + "</td>";

                    tabla += "<td align='center'>" + data[i].NivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM5  + "</td>";
                    
                    tabla += "<td align='center'>" + data[i].estado  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaCursoMoocAdmisionP').dataTable().fnClearTable();
            $('#tablaCursoMoocAdmisionP').dataTable().fnDestroy();
            $("#bodytablaCursoMoocAdmisionP").html("");
            $("#tablaCursoMoocAdmisionP").append(tabla);
            $('#tablaCursoMoocAdmisionP').dataTable().
            $('#tablaCursoMoocAdmisionP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reporteCursoMoocEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/cursoMooc.php?op=reporteCursoMoocEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grado + "</td>";

                    tabla += "<td align='center'>" + data[i].avm3  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm4  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm5  + "</td>";

                    tabla += "<td align='center'>" + data[i].estadoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM5  + "</td>";

                    tabla += "<td align='center'>" + data[i].NivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM5  + "</td>";
                    
                    tabla += "<td align='center'>" + data[i].estado  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaCursoMoocEspolP').dataTable().fnClearTable();
            $('#tablaCursoMoocEspolP').dataTable().fnDestroy();
            $("#bodytablaCursoMoocEspolP").html("");
            $("#tablaCursoMoocEspolP").append(tabla);
            $('#tablaCursoMoocEspolP').dataTable().
            $('#tablaCursoMoocEspolP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reporteCursoMoocAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/cursoMooc.php?op=reporteCursoMoocAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grado + "</td>";

                    tabla += "<td align='center'>" + data[i].avm1  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm2  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm3  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm4  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm5  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm6  + "</td>";

                    tabla += "<td align='center'>" + data[i].estadoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM6  + "</td>";

                    tabla += "<td align='center'>" + data[i].NivelConocimientoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM6  + "</td>";
                    
                    tabla += "<td align='center'>" + data[i].estado  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaCursoMoocAdmisionTP').dataTable().fnClearTable();
            $('#tablaCursoMoocAdmisionTP').dataTable().fnDestroy();
            $("#bodytablaCursoMoocAdmisionTP").html("");
            $("#tablaCursoMoocAdmisionTP").append(tabla);
            $('#tablaCursoMoocAdmisionTP').dataTable().
            $('#tablaCursoMoocAdmisionTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reporteCursoMoocEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/cursoMooc.php?op=reporteCursoMoocEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grado + "</td>";

                    tabla += "<td align='center'>" + data[i].avm1  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm2  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm3  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm4  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm5  + "</td>";
                    tabla += "<td align='center'>" + data[i].avm6  + "</td>";

                    tabla += "<td align='center'>" + data[i].estadoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoM6  + "</td>";

                    tabla += "<td align='center'>" + data[i].NivelConocimientoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimientoM6  + "</td>";
                    
                    tabla += "<td align='center'>" + data[i].estado  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaCursoMoocEspolTP').dataTable().fnClearTable();
            $('#tablaCursoMoocEspolTP').dataTable().fnDestroy();
            $("#bodytablaCursoMoocEspolTP").html("");
            $("#tablaCursoMoocEspolTP").append(tabla);
            $('#tablaCursoMoocEspolTP').dataTable().
            $('#tablaCursoMoocEspolTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}
