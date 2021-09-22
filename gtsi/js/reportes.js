
///////////////////////////////////////////////////////////////////////pruebas de diagnostico
function reportePruebaDiagnosticoAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reportePruebaDiagnosticoAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDiagnosticoAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod1  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod2  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod3  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod6  + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM6  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaDiagnosticoAdmisionP').dataTable().fnClearTable();
            $('#tablaPruebaDiagnosticoAdmisionP').dataTable().fnDestroy();
            $("#bodytablaPruebaDiagnosticoAdmisionP").html("");
            $("#tablaPruebaDiagnosticoAdmisionP").append(tabla);
            $('#tablaPruebaDiagnosticoAdmisionP').dataTable().
            $('#tablaPruebaDiagnosticoAdmisionP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePruebaDiagnosticoAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reportePruebaDiagnosticoAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDiagnosticoAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod1  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod2  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod3  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod6  + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM6  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaDiagnosticoAdmisionTP').dataTable().fnClearTable();
            $('#tablaPruebaDiagnosticoAdmisionTP').dataTable().fnDestroy();
            $("#bodytablaPruebaDiagnosticoAdmisionTP").html("");
            $("#tablaPruebaDiagnosticoAdmisionTP").append(tabla);
            $('#tablaPruebaDiagnosticoAdmisionTP').dataTable().
            $('#tablaPruebaDiagnosticoAdmisionTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePruebaDiagnosticoEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reportePruebaDiagnosticoEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDiagnosticoEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod1  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod2  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod3  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod6  + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM6  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaDiagnosticoEspolP').dataTable().fnClearTable();
            $('#tablaPruebaDiagnosticoEspolP').dataTable().fnDestroy();
            $("#bodytablaPruebaDiagnosticoEspolP").html("");
            $("#tablaPruebaDiagnosticoEspolP").append(tabla);
            $('#tablaPruebaDiagnosticoEspolP').dataTable().
            $('#tablaPruebaDiagnosticoEspolP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePruebaDiagnosticoEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reportePruebaDiagnosticoEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDiagnosticoEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod1  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod2  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod3  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod6  + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM6  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaDiagnosticoEspolTP').dataTable().fnClearTable();
            $('#tablaPruebaDiagnosticoEspolTP').dataTable().fnDestroy();
            $("#bodytablaPruebaDiagnosticoEspolTP").html("");
            $("#tablaPruebaDiagnosticoEspolTP").append(tabla);
            $('#tablaPruebaDiagnosticoEspolTP').dataTable().
            $('#tablaPruebaDiagnosticoEspolTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}


//////////////////////////////////////////////////////////////////////curso mooc
function reporteCursoMoocAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteCursoMoocAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].ppt  + "</td>";
                    tabla += "<td align='center'>" + data[i].excel  + "</td>";
                    tabla += "<td align='center'>" + data[i].word  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoPpt  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoExcel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoWord  + "</td>";

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

function reporteCursoMoocAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteCursoMoocAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod1  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod2  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod3  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod6  + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM6  + "</td>";
                    tabla += "<td align='center'>" + data[i].estado  + "</td>";
                   
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

function reporteCursoMoocEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteCursoMoocEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].ppt  + "</td>";
                    tabla += "<td align='center'>" + data[i].excel  + "</td>";
                    tabla += "<td align='center'>" + data[i].word  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoPpt  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoExcel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoWord  + "</td>";

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

function reporteCursoMoocEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteCursoMoocEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";                    
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod1  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod2  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod3  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5  + "</td>";
                    tabla += "<td align='center'>" + data[i].mod6  + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM6  + "</td>";
                    tabla += "<td align='center'>" + data[i].estado  + "</td>";
                   
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


/////////////////////////////////////////////////////////Rubricas PPT
function reporteRubricasPPTAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasPPTAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaRubricaPPTAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].IdeaPrincipal   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoIdeaPrincipal + "</td>";
                    tabla += "<td align='center'>" + data[i].TitulosAdecuados    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTitulosAdecuados  + "</td>";
                    tabla += "<td align='center'>" + data[i].DiapositivaNoSobrecargada   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoDiapositivaNoSobrecargada + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalContenidos + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalContenidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].InsertaVineta   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInsertaVineta + "</td>";
                    tabla += "<td align='center'>" + data[i].BuenasPracticasUsoFormato   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoBuenasPracticasUsoFormato + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalRepresentacionAdecuada + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalRepresentacionAdecuada   + "</td>";
                    tabla += "<td align='center'>" + data[i].NumeroDiapositivas  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoNumeroDiapositivas    + "</td>";
                    tabla += "<td align='center'>" + data[i].UsoDeTodasImagenes  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoUsoDeTodasImagenes    + "</td>";
                    tabla += "<td align='center'>" + data[i].BuenasPracticasUsoFormato2  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoBuenasPracticasUsoFormato2    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalUsoImagenes    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalUsoImagenes  + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoFuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].Tamanio2    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanio   + "</td>";
                    tabla += "<td align='center'>" + data[i].FormatoFuente   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFormatoFuente + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorRellenoTexto   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorRellenoTexto + "</td>";
                    tabla += "<td align='center'>" + data[i].ContornoYEfecto + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoYEfecto   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalPortada    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalPortada  + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoDeFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoDeFuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].TamanioTres + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanioTres   + "</td>";
                    tabla += "<td align='center'>" + data[i].FormatoDeFuente + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFormatoDeFuente   + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorDeRelleno  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorDeRelleno    + "</td>";
                    tabla += "<td align='center'>" + data[i].ContornoEfecto  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalTitulo + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto0   + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoDeFuente4   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoDeFuente4 + "</td>";
                    tabla += "<td align='center'>" + data[i].TamanioColor    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanioColor  + "</td>";
                    tabla += "<td align='center'>" + data[i].Interlineado    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInterlineado  + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalTexto  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto1   + "</td>";
                    tabla += "<td align='center'>" + data[i].Trama   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTrama + "</td>";
                    tabla += "<td align='center'>" + data[i].TextoColor  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTextoColor    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFondo  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto2   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";

                   
                    tabla += "</tr>";
                }
            }
            $('#tablaRubricaPPTAdmisionP').dataTable().fnClearTable();
            $('#tablaRubricaPPTAdmisionP').dataTable().fnDestroy();
            $("#bodyTablaRubricaPPTAdmisionP").html("");
            $("#tablaRubricaPPTAdmisionP").append(tabla);
            $('#tablaRubricaPPTAdmisionP').dataTable().
            $('#tablaRubricaPPTAdmisionP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reporteRubricasPPTAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasPPTAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaRubricaPPTAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].IdeaPrincipal   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoIdeaPrincipal + "</td>";
                    tabla += "<td align='center'>" + data[i].TitulosAdecuados    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTitulosAdecuados  + "</td>";
                    tabla += "<td align='center'>" + data[i].DiapositivaNoSobrecargada   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoDiapositivaNoSobrecargada + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalContenidos + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalContenidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].InsertaVineta   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInsertaVineta + "</td>";
                    tabla += "<td align='center'>" + data[i].BuenasPracticasUsoFormato   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoBuenasPracticasUsoFormato + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalRepresentacionAdecuada + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalRepresentacionAdecuada   + "</td>";
                    tabla += "<td align='center'>" + data[i].NumeroDiapositivas  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoNumeroDiapositivas    + "</td>";
                    tabla += "<td align='center'>" + data[i].UsoDeTodasImagenes  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoUsoDeTodasImagenes    + "</td>";
                    tabla += "<td align='center'>" + data[i].BuenasPracticasUsoFormato2  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoBuenasPracticasUsoFormato2    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalUsoImagenes    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalUsoImagenes  + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoFuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].Tamanio2    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanio   + "</td>";
                    tabla += "<td align='center'>" + data[i].FormatoFuente   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFormatoFuente + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorRellenoTexto   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorRellenoTexto + "</td>";
                    tabla += "<td align='center'>" + data[i].ContornoYEfecto + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoYEfecto   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalPortada    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalPortada  + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoDeFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoDeFuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].TamanioTres + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanioTres   + "</td>";
                    tabla += "<td align='center'>" + data[i].FormatoDeFuente + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFormatoDeFuente   + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorDeRelleno  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorDeRelleno    + "</td>";
                    tabla += "<td align='center'>" + data[i].ContornoEfecto  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalTitulo + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto0   + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoDeFuente4   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoDeFuente4 + "</td>";
                    tabla += "<td align='center'>" + data[i].TamanioColor    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanioColor  + "</td>";
                    tabla += "<td align='center'>" + data[i].Interlineado    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInterlineado  + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalTexto  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto1   + "</td>";
                    tabla += "<td align='center'>" + data[i].Trama   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTrama + "</td>";
                    tabla += "<td align='center'>" + data[i].TextoColor  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTextoColor    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFondo  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto2   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaRubricaPPTAdmisionTP').dataTable().fnClearTable();
            $('#tablaRubricaPPTAdmisionTP').dataTable().fnDestroy();
            $("#bodyTablaRubricaPPTAdmisionTP").html("");
            $("#tablaRubricaPPTAdmisionTP").append(tabla);
            $('#tablaRubricaPPTAdmisionTP').dataTable().
            $('#tablaRubricaPPTAdmisionTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reporteRubricasPPTEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasPPTEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaRubricaPPTEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].IdeaPrincipal   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoIdeaPrincipal + "</td>";
                    tabla += "<td align='center'>" + data[i].TitulosAdecuados    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTitulosAdecuados  + "</td>";
                    tabla += "<td align='center'>" + data[i].DiapositivaNoSobrecargada   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoDiapositivaNoSobrecargada + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalContenidos + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalContenidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].InsertaVineta   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInsertaVineta + "</td>";
                    tabla += "<td align='center'>" + data[i].BuenasPracticasUsoFormato   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoBuenasPracticasUsoFormato + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalRepresentacionAdecuada + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalRepresentacionAdecuada   + "</td>";
                    tabla += "<td align='center'>" + data[i].NumeroDiapositivas  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoNumeroDiapositivas    + "</td>";
                    tabla += "<td align='center'>" + data[i].UsoDeTodasImagenes  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoUsoDeTodasImagenes    + "</td>";
                    tabla += "<td align='center'>" + data[i].BuenasPracticasUsoFormato2  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoBuenasPracticasUsoFormato2    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalUsoImagenes    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalUsoImagenes  + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoFuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].Tamanio2    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanio   + "</td>";
                    tabla += "<td align='center'>" + data[i].FormatoFuente   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFormatoFuente + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorRellenoTexto   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorRellenoTexto + "</td>";
                    tabla += "<td align='center'>" + data[i].ContornoYEfecto + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoYEfecto   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalPortada    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalPortada  + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoDeFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoDeFuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].TamanioTres + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanioTres   + "</td>";
                    tabla += "<td align='center'>" + data[i].FormatoDeFuente + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFormatoDeFuente   + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorDeRelleno  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorDeRelleno    + "</td>";
                    tabla += "<td align='center'>" + data[i].ContornoEfecto  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalTitulo + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto0   + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoDeFuente4   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoDeFuente4 + "</td>";
                    tabla += "<td align='center'>" + data[i].TamanioColor    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanioColor  + "</td>";
                    tabla += "<td align='center'>" + data[i].Interlineado    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInterlineado  + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalTexto  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto1   + "</td>";
                    tabla += "<td align='center'>" + data[i].Trama   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTrama + "</td>";
                    tabla += "<td align='center'>" + data[i].TextoColor  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTextoColor    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFondo  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto2   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";                   
                    tabla += "</tr>";
                }
            }
            $('#tablaRubricaPPTEspolP').dataTable().fnClearTable();
            $('#tablaRubricaPPTEspolP').dataTable().fnDestroy();
            $("#bodyTablaRubricaPPTEspolP").html("");
            $("#tablaRubricaPPTEspolP").append(tabla);
            $('#tablaRubricaPPTEspolP').dataTable().
            $('#tablaRubricaPPTEspolP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reporteRubricasPPTEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasPPTEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaRubricaPPTEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].IdeaPrincipal   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoIdeaPrincipal + "</td>";
                    tabla += "<td align='center'>" + data[i].TitulosAdecuados    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTitulosAdecuados  + "</td>";
                    tabla += "<td align='center'>" + data[i].DiapositivaNoSobrecargada   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoDiapositivaNoSobrecargada + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalContenidos + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalContenidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].InsertaVineta   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInsertaVineta + "</td>";
                    tabla += "<td align='center'>" + data[i].BuenasPracticasUsoFormato   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoBuenasPracticasUsoFormato + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalRepresentacionAdecuada + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalRepresentacionAdecuada   + "</td>";
                    tabla += "<td align='center'>" + data[i].NumeroDiapositivas  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoNumeroDiapositivas    + "</td>";
                    tabla += "<td align='center'>" + data[i].UsoDeTodasImagenes  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoUsoDeTodasImagenes    + "</td>";
                    tabla += "<td align='center'>" + data[i].BuenasPracticasUsoFormato2  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoBuenasPracticasUsoFormato2    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalUsoImagenes    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalUsoImagenes  + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoFuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].Tamanio2    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanio   + "</td>";
                    tabla += "<td align='center'>" + data[i].FormatoFuente   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFormatoFuente + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorRellenoTexto   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorRellenoTexto + "</td>";
                    tabla += "<td align='center'>" + data[i].ContornoYEfecto + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoYEfecto   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalPortada    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalPortada  + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoDeFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoDeFuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].TamanioTres + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanioTres   + "</td>";
                    tabla += "<td align='center'>" + data[i].FormatoDeFuente + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFormatoDeFuente   + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorDeRelleno  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorDeRelleno    + "</td>";
                    tabla += "<td align='center'>" + data[i].ContornoEfecto  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalTitulo + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto0   + "</td>";
                    tabla += "<td align='center'>" + data[i].TipoDeFuente4   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTipoDeFuente4 + "</td>";
                    tabla += "<td align='center'>" + data[i].TamanioColor    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanioColor  + "</td>";
                    tabla += "<td align='center'>" + data[i].Interlineado    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInterlineado  + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalTexto  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto1   + "</td>";
                    tabla += "<td align='center'>" + data[i].Trama   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTrama + "</td>";
                    tabla += "<td align='center'>" + data[i].TextoColor  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTextoColor    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFondo  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContornoEfecto2   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaRubricaPPTEspolTP').dataTable().fnClearTable();
            $('#tablaRubricaPPTEspolTP').dataTable().fnDestroy();
            $("#bodyTablaRubricaPPTEspolTP").html("");
            $("#tablaRubricaPPTEspolTP").append(tabla);
            $('#tablaRubricaPPTEspolTP').dataTable().
            $('#tablaRubricaPPTEspolTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}


/////////////////////////////////////////////////////////Rubricas WORD
function reporteRubricasWordAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasWordAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].GeneraTC    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoGeneraTC  + "</td>";
                    tabla += "<td align='center'>" + data[i].AplicaEstilos   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoAplicaEstilos + "</td>";
                    tabla += "<td align='center'>" + data[i].AsociaMultiNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoAsociaMultiNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalContenidos + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalContenidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].Interlineado    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInterlineado  + "</td>";
                    tabla += "<td align='center'>" + data[i].Espaciado   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoEspaciado + "</td>";
                    tabla += "<td align='center'>" + data[i].Fuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].Tamanio + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanio   + "</td>";
                    tabla += "<td align='center'>" + data[i].Color   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColor + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFormatoDocumento   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalFormatoDocumento + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorBorde  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorBorde    + "</td>";
                    tabla += "<td align='center'>" + data[i].Contorno    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContorno  + "</td>";
                    tabla += "<td align='center'>" + data[i].Grosor  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoGrosor    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalBorde  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalBorde    + "</td>";
                    tabla += "<td align='center'>" + data[i].NotaPie + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoNotaPie   + "</td>";
                    tabla += "<td align='center'>" + data[i].PiePagina   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoPiePagina + "</td>";
                    tabla += "<td align='center'>" + data[i].LetraCapital    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoLetraCapital  + "</td>";
                    tabla += "<td align='center'>" + data[i].Columnas    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColumnas  + "</td>";
                    tabla += "<td align='center'>" + data[i].SaltoPagina + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoSaltoPagina   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
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

function reporteRubricasWordAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasWordAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].GeneraTC    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoGeneraTC  + "</td>";
                    tabla += "<td align='center'>" + data[i].AplicaEstilos   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoAplicaEstilos + "</td>";
                    tabla += "<td align='center'>" + data[i].AsociaMultiNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoAsociaMultiNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalContenidos + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalContenidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].Interlineado    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInterlineado  + "</td>";
                    tabla += "<td align='center'>" + data[i].Espaciado   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoEspaciado + "</td>";
                    tabla += "<td align='center'>" + data[i].Fuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].Tamanio + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanio   + "</td>";
                    tabla += "<td align='center'>" + data[i].Color   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColor + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFormatoDocumento   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalFormatoDocumento + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorBorde  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorBorde    + "</td>";
                    tabla += "<td align='center'>" + data[i].Contorno    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContorno  + "</td>";
                    tabla += "<td align='center'>" + data[i].Grosor  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoGrosor    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalBorde  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalBorde    + "</td>";
                    tabla += "<td align='center'>" + data[i].NotaPie + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoNotaPie   + "</td>";
                    tabla += "<td align='center'>" + data[i].PiePagina   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoPiePagina + "</td>";
                    tabla += "<td align='center'>" + data[i].LetraCapital    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoLetraCapital  + "</td>";
                    tabla += "<td align='center'>" + data[i].Columnas    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColumnas  + "</td>";
                    tabla += "<td align='center'>" + data[i].SaltoPagina + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoSaltoPagina   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
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

function reporteRubricasWordEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasWordEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].GeneraTC    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoGeneraTC  + "</td>";
                    tabla += "<td align='center'>" + data[i].AplicaEstilos   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoAplicaEstilos + "</td>";
                    tabla += "<td align='center'>" + data[i].AsociaMultiNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoAsociaMultiNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalContenidos + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalContenidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].Interlineado    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInterlineado  + "</td>";
                    tabla += "<td align='center'>" + data[i].Espaciado   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoEspaciado + "</td>";
                    tabla += "<td align='center'>" + data[i].Fuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].Tamanio + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanio   + "</td>";
                    tabla += "<td align='center'>" + data[i].Color   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColor + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFormatoDocumento   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalFormatoDocumento + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorBorde  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorBorde    + "</td>";
                    tabla += "<td align='center'>" + data[i].Contorno    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContorno  + "</td>";
                    tabla += "<td align='center'>" + data[i].Grosor  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoGrosor    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalBorde  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalBorde    + "</td>";
                    tabla += "<td align='center'>" + data[i].NotaPie + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoNotaPie   + "</td>";
                    tabla += "<td align='center'>" + data[i].PiePagina   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoPiePagina + "</td>";
                    tabla += "<td align='center'>" + data[i].LetraCapital    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoLetraCapital  + "</td>";
                    tabla += "<td align='center'>" + data[i].Columnas    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColumnas  + "</td>";
                    tabla += "<td align='center'>" + data[i].SaltoPagina + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoSaltoPagina   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
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

function reporteRubricasWordEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasWordEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].GeneraTC    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoGeneraTC  + "</td>";
                    tabla += "<td align='center'>" + data[i].AplicaEstilos   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoAplicaEstilos + "</td>";
                    tabla += "<td align='center'>" + data[i].AsociaMultiNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoAsociaMultiNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalContenidos + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalContenidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].Interlineado    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoInterlineado  + "</td>";
                    tabla += "<td align='center'>" + data[i].Espaciado   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoEspaciado + "</td>";
                    tabla += "<td align='center'>" + data[i].Fuente  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoFuente    + "</td>";
                    tabla += "<td align='center'>" + data[i].Tamanio + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTamanio   + "</td>";
                    tabla += "<td align='center'>" + data[i].Color   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColor + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFormatoDocumento   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalFormatoDocumento + "</td>";
                    tabla += "<td align='center'>" + data[i].ColorBorde  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColorBorde    + "</td>";
                    tabla += "<td align='center'>" + data[i].Contorno    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoContorno  + "</td>";
                    tabla += "<td align='center'>" + data[i].Grosor  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoGrosor    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalBorde  + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalBorde    + "</td>";
                    tabla += "<td align='center'>" + data[i].NotaPie + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoNotaPie   + "</td>";
                    tabla += "<td align='center'>" + data[i].PiePagina   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoPiePagina + "</td>";
                    tabla += "<td align='center'>" + data[i].LetraCapital    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoLetraCapital  + "</td>";
                    tabla += "<td align='center'>" + data[i].Columnas    + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoColumnas  + "</td>";
                    tabla += "<td align='center'>" + data[i].SaltoPagina + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoSaltoPagina   + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
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


/////////////////////////////////////////////////////////Rubricas EXCEL
function reporteRubricasExcelAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasExcelAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP1  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP1    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP2  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP2    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP3  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP3    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP4  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP4    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP5  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP5    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFuncionesBasicas   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalFuncionesBasicas + "</td>";
                    tabla += "<td align='center'>" + data[i].OrdenarPorUnNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoOrdenarPorNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].OrdenarPorDosNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoOrdenarPorDosNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].FiltrarPorUnNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFiltrarPorUnNivel + "</td>";
                    tabla += "<td align='center'>" + data[i].FiltrarPorDosNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFiltrarPorDosNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP10    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP10   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP11    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP11   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP12    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP12   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP13    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP13   + "</td>";
                    tabla += "<td align='center'>" + data[i].tablaDinamica   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoTablaDinamica + "</td>";
                    tabla += "<td align='center'>" + data[i].siSencillo  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadosiSencillo    + "</td>";
                    tabla += "<td align='center'>" + data[i].siConcatenado   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoSiConcatenado + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
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

function reporteRubricasExcelAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasExcelAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP1  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP1    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP2  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP2    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP3  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP3    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP4  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP4    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP5  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP5    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFuncionesBasicas   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalFuncionesBasicas + "</td>";
                    tabla += "<td align='center'>" + data[i].OrdenarPorUnNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoOrdenarPorNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].OrdenarPorDosNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoOrdenarPorDosNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].FiltrarPorUnNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFiltrarPorUnNivel + "</td>";
                    tabla += "<td align='center'>" + data[i].FiltrarPorDosNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFiltrarPorDosNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP10    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP10   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP11    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP11   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP12    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP12   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP13    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP13   + "</td>";
                    tabla += "<td align='center'>" + data[i].tablaDinamica   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoTablaDinamica + "</td>";
                    tabla += "<td align='center'>" + data[i].siSencillo  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadosiSencillo    + "</td>";
                    tabla += "<td align='center'>" + data[i].siConcatenado   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoSiConcatenado + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
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

function reporteRubricasExcelEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasExcelEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP1  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP1    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP2  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP2    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP3  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP3    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP4  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP4    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP5  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP5    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFuncionesBasicas   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalFuncionesBasicas + "</td>";
                    tabla += "<td align='center'>" + data[i].OrdenarPorUnNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoOrdenarPorNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].OrdenarPorDosNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoOrdenarPorDosNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].FiltrarPorUnNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFiltrarPorUnNivel + "</td>";
                    tabla += "<td align='center'>" + data[i].FiltrarPorDosNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFiltrarPorDosNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP10    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP10   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP11    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP11   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP12    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP12   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP13    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP13   + "</td>";
                    tabla += "<td align='center'>" + data[i].tablaDinamica   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoTablaDinamica + "</td>";
                    tabla += "<td align='center'>" + data[i].siSencillo  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadosiSencillo    + "</td>";
                    tabla += "<td align='center'>" + data[i].siConcatenado   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoSiConcatenado + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
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

function reporteRubricasExcelEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/reportes.php?op=reporteRubricasExcelEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaCursoMoocEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].franja  + "</td>";
                    tabla += "<td align='center'>" + data[i].paralelo    + "</td>";
                    tabla += "<td align='center'>" + data[i].docente + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP1  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP1    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP2  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP2    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP3  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP3    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP4  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP4    + "</td>";
                    tabla += "<td align='center'>" + data[i].FuncionesBasicasP5  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP5    + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalFuncionesBasicas   + "</td>";
                    tabla += "<td align='center'>" + data[i].EstadoTotalFuncionesBasicas + "</td>";
                    tabla += "<td align='center'>" + data[i].OrdenarPorUnNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoOrdenarPorNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].OrdenarPorDosNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoOrdenarPorDosNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].FiltrarPorUnNivel   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFiltrarPorUnNivel + "</td>";
                    tabla += "<td align='center'>" + data[i].FiltrarPorDosNivel  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFiltrarPorDosNivel    + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP10    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP10   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP11    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP11   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP12    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP12   + "</td>";
                    tabla += "<td align='center'>" + data[i].TablaDinamicaP13    + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoFuncionesBasicasP13   + "</td>";
                    tabla += "<td align='center'>" + data[i].tablaDinamica   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoTablaDinamica + "</td>";
                    tabla += "<td align='center'>" + data[i].siSencillo  + "</td>";
                    tabla += "<td align='center'>" + data[i].estadosiSencillo    + "</td>";
                    tabla += "<td align='center'>" + data[i].siConcatenado   + "</td>";
                    tabla += "<td align='center'>" + data[i].estadoSiConcatenado + "</td>";
                    tabla += "<td align='center'>" + data[i].TotalGeneral    + "</td>";
                    tabla += "<td align='center'>" + data[i].NivelConocimiento   + "</td>";
                    tabla += "<td align='center'>" + data[i].termino + "</td>";
                    tabla += "<td align='center'>" + data[i].tipo    + "</td>";
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