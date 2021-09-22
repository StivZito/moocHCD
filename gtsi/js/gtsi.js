//////////////////////////////////////////////////////////////////////gtsi
function reporteGtsiAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/gtsi.php?op=reporteGtsiAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaGtsiAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo  + "</td>";
                    tabla += "<td align='center'>" + data[i].fechaExamen + "</td>";
                    tabla += "<td align='center'>" + data[i].ExamenTeorico + "</td>";
                    tabla += "<td align='center'>" + data[i].word  + "</td>";
                    tabla += "<td align='center'>" + data[i].ppt + "</td>";
                    tabla += "<td align='center'>" + data[i].excel + "</td>";
                    tabla += "<td align='center'>" + data[i].Aprobaron + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";                  
                    tabla += "</tr>";
                }
            }
            $('#tablaGtsiAdmisionP').dataTable().fnClearTable();
            $('#tablaGtsiAdmisionP').dataTable().fnDestroy();
            $("#bodytablaGtsiAdmisionP").html("");
            $("#tablaGtsiAdmisionP").append(tabla);
            $('#tablaGtsiAdmisionP').dataTable().
            $('#tablaGtsiAdmisionP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reporteGtsiAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/gtsi.php?op=reporteGtsiAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaGtsiAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo  + "</td>";
                    tabla += "<td align='center'>" + data[i].fechaExamen + "</td>";
                    tabla += "<td align='center'>" + data[i].ExamenTeorico + "</td>";
                    tabla += "<td align='center'>" + data[i].word  + "</td>";
                    tabla += "<td align='center'>" + data[i].ppt + "</td>";
                    tabla += "<td align='center'>" + data[i].excel + "</td>";
                    tabla += "<td align='center'>" + data[i].Aprobaron + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";                  
                    tabla += "</tr>";
                }
            }
            $('#tablaGtsiAdmisionTP').dataTable().fnClearTable();
            $('#tablaGtsiAdmisionTP').dataTable().fnDestroy();
            $("#bodytablaGtsiAdmisionTP").html("");
            $("#tablaGtsiAdmisionTP").append(tabla);
            $('#tablaGtsiAdmisionTP').dataTable().
            $('#tablaGtsiAdmisionTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reporteGtsiEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/gtsi.php?op=reporteGtsiEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaGtsiEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo  + "</td>";
                    tabla += "<td align='center'>" + data[i].fechaExamen + "</td>";
                    tabla += "<td align='center'>" + data[i].ExamenTeorico + "</td>";
                    tabla += "<td align='center'>" + data[i].word  + "</td>";
                    tabla += "<td align='center'>" + data[i].ppt + "</td>";
                    tabla += "<td align='center'>" + data[i].excel + "</td>";
                    tabla += "<td align='center'>" + data[i].Aprobaron + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";                
                    tabla += "</tr>";
                }
            }
            $('#tablaGtsiEspolP').dataTable().fnClearTable();
            $('#tablaGtsiEspolP').dataTable().fnDestroy();
            $("#bodytablaGtsiEspolP").html("");
            $("#tablaGtsiEspolP").append(tabla);
            $('#tablaGtsiEspolP').dataTable().
            $('#tablaGtsiEspolP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reporteGtsiEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/gtsi.php?op=reporteGtsiEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaGtsiEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo  + "</td>";
                    tabla += "<td align='center'>" + data[i].fechaExamen + "</td>";
                    tabla += "<td align='center'>" + data[i].ExamenTeorico + "</td>";
                    tabla += "<td align='center'>" + data[i].word  + "</td>";
                    tabla += "<td align='center'>" + data[i].ppt + "</td>";
                    tabla += "<td align='center'>" + data[i].excel + "</td>";
                    tabla += "<td align='center'>" + data[i].Aprobaron + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";                
                    tabla += "</tr>";
                }
            }
            $('#tablaGtsiEspolTP').dataTable().fnClearTable();
            $('#tablaGtsiEspolTP').dataTable().fnDestroy();
            $("#bodytablaGtsiEspolTP").html("");
            $("#tablaGtsiEspolTP").append(tabla);
            $('#tablaGtsiEspolTP').dataTable().
            $('#tablaGtsiEspolTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

