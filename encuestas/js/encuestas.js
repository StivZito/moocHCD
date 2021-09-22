///////////////////////////////////////////////////////////////////////pruebas de demografica practico
function num_estudiantes_registrados_demografica_p(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_p",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_p').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_p_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_p_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_p_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_p_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_p_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_p_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_p_espol_hombres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_p_espol_hombres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_p_espol_hombres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_p_espol_mujeres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_p_espol_mujeres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_p_espol_mujeres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_p_admision_hombres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_p_admision_hombres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_p_admision_hombres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_p_admision_mujeres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_p_admision_mujeres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_p_admision_mujeres').html(resp['estudiantes']);
        }    
    });
}

function detalleGeneroEstudiantesP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleGeneroEstudiantesP",
        success: function(data){  
            let tabla = "";
            $('#headTablaGeneroEstudiantesP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].sexo  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaGeneroEstudiantesP').dataTable().fnClearTable();
            $('#tablaGeneroEstudiantesP').dataTable().fnDestroy();
            $("#bodyTablaGeneroEstudiantesP").html("");
            $("#tablaGeneroEstudiantesP").append(tabla);           
        }    
    });
}

function grafico_barra_genero_estudiantes_p(datos){   

    let femeninoEspol     = parseInt(datos[0]['espol']);
    let femeninoAdmision  = parseInt(datos[0]['admision']);
    let masculinoEspol    = parseInt(datos[1]['espol']);
    let masculinoAdmision = parseInt(datos[1]['admision']);

    let estudiantes_espol    = parseInt(datos[2]['espol']);
    let estudiantes_admision = parseInt(datos[2]['admision']);

    let estudiantes_hombres = masculinoEspol + masculinoAdmision; 
    let estudiantes_mujeres = femeninoEspol + femeninoAdmision;

    let p_femeninoEspol     = ((femeninoEspol     * 100) / estudiantes_espol);
    let p_femeninoAdmision  = ((femeninoAdmision  * 100) / estudiantes_admision);
    let p_masculinoEspol    = ((masculinoEspol    * 100) / estudiantes_espol);
    let p_masculinoAdmision = ((masculinoAdmision * 100) / estudiantes_admision);

    Highcharts.chart('grafico_barra_genero_estudiantes_p', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'GENERO DEL ESTUDIANTE'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            poinPadding: 0.2,
            borderWidth: 0,
            stacking: 'normal'
        }
    },
    xAxis: {
        categories: [
            'HOMBRES',
            'MUJERES'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        tickInterval: 10, 
         stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        },
        title: {
            text: 'Estudiantes'
        }
    },
    series: [{
        name: 'Espol',
        data: [masculinoEspol, femeninoEspol]

    }, {
        name: 'Admisiones',
        data: [masculinoAdmision, femeninoAdmision]
    }]
});
}

function barra_genero_estudiantes_p(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleGeneroEstudiantesP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleEdadEstudiantesP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleEdadEstudiantesP",
        success: function(data){  
            let tabla = "";
            $('#headTablaEdadEstudiantesP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].edad  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaEdadEstudiantesP').dataTable().fnClearTable();
            $('#tablaEdadEstudiantesP').dataTable().fnDestroy();
            $("#bodyTablaEdadEstudiantesP").html("");
            $("#tablaEdadEstudiantesP").append(tabla);           
        }    
    });
}

function grafico_barra_edad_estudiantes_p(datos){   

    let edad_nn_Espol      = parseInt(datos[0]['espol']);
    let edad_nn_Admision   = parseInt(datos[0]['admision']);
    let edad_1720_Espol    = parseInt(datos[1]['espol']);
    let edad_1720_Admision = parseInt(datos[1]['admision']);
    let edad_2125_Espol    = parseInt(datos[2]['espol']);
    let edad_2125_Admision = parseInt(datos[2]['admision']);
    let edad_2630_Espol    = parseInt(datos[3]['espol']);
    let edad_2630_Admision = parseInt(datos[3]['admision']);
    let edad_mas_Espol     = parseInt(datos[4]['espol']);
    let edad_mas_Admision  = parseInt(datos[4]['admision']);

    let estudiantes_espol    = parseInt(datos[5]['espol']);
    let estudiantes_admision = parseInt(datos[5]['admision']);

    Highcharts.chart('grafico_barra_edad_estudiantes_p', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'EDAD DEL ESTUDIANTE'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'NN',
                '17 - 20',
                '21 - 25',
                '26 - 30',
                'MAS'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [edad_nn_Espol, edad_1720_Espol, edad_2125_Espol, edad_2630_Espol, edad_mas_Espol]

        }, {
            name: 'Admisiones',
            data: [edad_nn_Admision, edad_1720_Admision, edad_2125_Admision, edad_2630_Admision, edad_mas_Admision]
        }]
    });
}

function barra_edad_estudiantes_p(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleEdadEstudiantesP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleColegioEstudiantesP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleColegioEstudiantesP",
        success: function(data){  
            let tabla = "";
            $('#headTablaColegioEstudiantesP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].tipo_colegio  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaColegioEstudiantesP').dataTable().fnClearTable();
            $('#tablaColegioEstudiantesP').dataTable().fnDestroy();
            $("#bodyTablaColegioEstudiantesP").html("");
            $("#tablaColegioEstudiantesP").append(tabla);           
        }    
    });
}

function grafico_barra_colegio_estudiantes_p(datos){   

    let fiscal_Espol      = parseInt(datos[0]['espol']);
    let fiscal_Admision   = parseInt(datos[0]['admision']);
    let fiscomisional_Espol    = parseInt(datos[1]['espol']);
    let fiscomisional_Admision = parseInt(datos[1]['admision']);
    let municipal_Espol    = 0;
    let municipal_Admision = 0;
    let nacional_Espol    = parseInt(datos[2]['espol']);
    let nacional_Admision = parseInt(datos[2]['admision']);
    let particular_Espol     = parseInt(datos[3]['espol']);
    let particular_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_colegio_estudiantes_p', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'INSTITUCION EDUCATIVA'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'FISCAL',
                'FISCOMISIONAL',
                'MUNICIPAL',
                'NACIONAL',
                'PARTICULAR'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [fiscal_Espol, fiscomisional_Espol, municipal_Espol, nacional_Espol, particular_Espol]

        }, {
            name: 'Admisiones',
            data: [fiscal_Admision, fiscomisional_Admision, municipal_Admision, nacional_Admision, particular_Admision]
        }]
    });
}

function barra_colegio_estudiantes_p(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleColegioEstudiantesP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleDemograficaR1P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR1P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR1P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r1  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR1P').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR1P').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR1P").html("");
            $("#tablaDetalleDemograficaR1P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R1P(datos){   

    let estudio_Espol      = parseInt(datos[0]['espol']);
    let estudio_Admision   = parseInt(datos[0]['admision']);
    let trabajo_Espol    = parseInt(datos[1]['espol']);
    let trabajo_Admision = parseInt(datos[1]['admision']);

    let estudiantes_espol    = parseInt(datos[2]['espol']);
    let estudiantes_admision = parseInt(datos[2]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R1P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿CUAL ES SU OCUPACION?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'ESTUDIO',
                'ESTUDIO/TRABAJO'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [estudio_Espol, trabajo_Espol]

        }, {
            name: 'Admisiones',
            data: [estudio_Admision, trabajo_Admision]
        }]
    });
}

function barra_detalle_demografica_R1P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR1P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function detalleDemograficaR2P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR2P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR2P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r2  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR2P').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR2P').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR2P").html("");
            $("#tablaDetalleDemograficaR2P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R2P(datos){   

    let presencial_Espol      = parseInt(datos[0]['espol']);
    let presencial_Admision   = parseInt(datos[0]['admision']);
    let virtual_Espol    = parseInt(datos[1]['espol']);
    let virtual_Admision = parseInt(datos[1]['admision']);
    
    let estudiantes_espol    = parseInt(datos[2]['espol']);
    let estudiantes_admision = parseInt(datos[2]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R2P', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'USTED COMO ESTUDIANTE, ¿DE QUE FORMA PREFIERE RECIBIR CLASES?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'PRESENCIAL',
                'VIRTUAL'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [presencial_Espol, virtual_Espol]

        }, {
            name: 'Admisiones',
            data: [presencial_Admision, virtual_Admision]
        }]
    });
}

function barra_detalle_demografica_R2P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR2P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function detalleDemograficaR3P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR3P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR3P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r3  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR3P').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR3P').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR3P").html("");
            $("#tablaDetalleDemograficaR3P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R3P(datos){   

    let alto_Espol      = parseInt(datos[0]['espol']);
    let alto_Admision   = parseInt(datos[0]['admision']);
    let bajo_Espol    = parseInt(datos[1]['espol']);
    let bajo_Admision = parseInt(datos[1]['admision']);
    let intermedio_Espol    = parseInt(datos[2]['espol']);
    let intermedio_Admision = parseInt(datos[2]['admision']);

    let estudiantes_espol    = parseInt(datos[3]['espol']);
    let estudiantes_admision = parseInt(datos[3]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R3P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿EN QUE NIVEL CONSIDERAS ESTAN TUS CONOCIMIENTOS DE OFIMATICA?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'BAJO',
                'INTERMEDIO',
                'ALTO'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [bajo_Espol, intermedio_Espol, alto_Espol]

        }, {
            name: 'Admisiones',
            data: [bajo_Admision, intermedio_Admision, alto_Admision]
        }]
    });
}

function barra_detalle_demografica_R3P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR3P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function detalleDemograficaR4P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR4P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR4P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r4  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR4P').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR4P').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR4P").html("");
            $("#tablaDetalleDemograficaR4P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R4P(datos){   

    let charla_Espol      = parseInt(datos[0]['espol']);
    let charla_Admision   = parseInt(datos[0]['admision']);
    let companiero_Espol    = parseInt(datos[1]['espol']);
    let companiero_Admision = parseInt(datos[1]['admision']);
    let correo_Espol    = parseInt(datos[2]['espol']);
    let correo_Admision = parseInt(datos[2]['admision']);
    let otros_Espol    = 0;
    let otros_Admision = 0;

    let estudiantes_espol    = parseInt(datos[3]['espol']);
    let estudiantes_admision = parseInt(datos[3]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R4P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿PORQUE MEDIO SE ENTERO QUE ESTABA REGISTRADO EN EL CURSO MOOC?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'CHARLA DE INDUCCION',
                'CORREO ELECTRONICO',
                'COMPAÑEROS',
                'OTROS'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [charla_Espol, correo_Espol, companiero_Espol, otros_Espol]

        }, {
            name: 'Admisiones',
            data: [charla_Admision, correo_Admision, companiero_Admision, otros_Admision]
        }]
    });
}

function barra_detalle_demografica_R4P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR4P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function detalleDemograficaR5P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR5P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR5P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r5  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR5P').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR5P').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR5P").html("");
            $("#tablaDetalleDemograficaR5P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R5P(datos){   

    let analisis_Espol      = 0;
    let analisis_Admision   = 0;
    let comunicacion_Espol    = 0;
    let comunicacion_Admision = 0;
    let emprendimiento_Espol    = 0;
    let emprendimiento_Admision = 0;
    let fundamentos_Espol    = parseInt(datos[0]['espol']);
    let fundamentos_Admision = parseInt(datos[0]['admision']);

    let estudiantes_espol    = parseInt(datos[1]['espol']);
    let estudiantes_admision = parseInt(datos[1]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R5P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿CUAL ES LA MATERIA QUE SE HABILITA AL MOMENTO DE APROBAR EL MOOC HCD?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'FUNDAMENTOS DE PROGRAMACION',
                'ANALISIS Y RESOLUCION DE PROBLEMAS',
                'EMPRENDIMIENTO E INNOVACION',
                'COMUNICACION'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [fundamentos_Espol, analisis_Espol, emprendimiento_Espol, comunicacion_Espol]

        }, {
            name: 'Admisiones',
            data: [fundamentos_Admision, analisis_Admision, emprendimiento_Admision, comunicacion_Admision]
        }]
    });
}

function barra_detalle_demografica_R5P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR5P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}




function detalleDemograficaR6P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR6P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR6P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r6  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR6P').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR6P').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR6P").html("");
            $("#tablaDetalleDemograficaR6P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R6P(datos){   

    let celular_Espol      = parseInt(datos[0]['espol']);
    let celular_Admision   = parseInt(datos[0]['admision']);
    let computador_Espol    = parseInt(datos[1]['espol']);
    let computador_Admision = parseInt(datos[1]['admision']);
    let tablet_Espol    = parseInt(datos[2]['espol']);
    let tablet_Admision = parseInt(datos[2]['admision']);

    let estudiantes_espol    = parseInt(datos[3]['espol']);
    let estudiantes_admision = parseInt(datos[3]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R6P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿CON QUE EQUIPOS TECNOLOGICOS CUENTA EN SU HOGAR PARA REALIZAR EL CURSO?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'COMPUTADOR/LAPTOP',
                'CELULAR',
                'TABLET'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [computador_Espol, celular_Espol, tablet_Espol]

        }, {
            name: 'Admisiones',
            data: [computador_Admision, celular_Admision, tablet_Admision]
        }]
    });
}

function barra_detalle_demografica_R6P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR6P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}




function detalleDemograficaR7P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR7P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR7P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r7  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR7P').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR7P').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR7P").html("");
            $("#tablaDetalleDemograficaR7P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R7P(datos){   

    let datos_Espol      = parseInt(datos[0]['espol']);
    let datos_Admision   = parseInt(datos[0]['admision']);
    let prestado_Espol    = parseInt(datos[1]['espol']);
    let prestado_Admision = parseInt(datos[1]['admision']);
    let propio_Espol    = parseInt(datos[2]['espol']);
    let propio_Admision = parseInt(datos[2]['admision']);
    let publico_Espol    = parseInt(datos[3]['espol']);
    let publico_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R7P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿QUE CONEXION DE INTERNET UTILIZA?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'PROPIO (FIJO)',
                'PRESTADO',
                'DATOS MOVILES',
                'PUBLICO (ALCALDIA/CENTROS COMERCIALES)'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [propio_Espol, prestado_Espol, datos_Espol, publico_Espol]

        }, {
            name: 'Admisiones',
            data: [propio_Admision, prestado_Admision, datos_Admision, publico_Admision]
        }]
    });
}

function barra_detalle_demografica_R7P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR7P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}






///////////////////////////////////////////////////////////////////////pruebas de demografica teorico practico
function num_estudiantes_registrados_demografica_tp(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_tp",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_tp').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_tp_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_tp_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_tp_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_tp_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_tp_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_tp_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_tp_espol_hombres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_tp_espol_hombres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_tp_espol_hombres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_tp_espol_mujeres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_tp_espol_mujeres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_tp_espol_mujeres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_tp_admision_hombres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_tp_admision_hombres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_tp_admision_hombres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_demografica_tp_admision_mujeres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_demografica_tp_admision_mujeres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_demografica_tp_admision_mujeres').html(resp['estudiantes']);
        }    
    });
}

function detalleGeneroEstudiantesTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleGeneroEstudiantesTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaGeneroEstudiantesTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].sexo  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaGeneroEstudiantesTP').dataTable().fnClearTable();
            $('#tablaGeneroEstudiantesTP').dataTable().fnDestroy();
            $("#bodyTablaGeneroEstudiantesTP").html("");
            $("#tablaGeneroEstudiantesTP").append(tabla);           
        }    
    });
}

function grafico_barra_genero_estudiantes_tp(datos){   

    let femeninoEspol     = parseInt(datos[0]['espol']);
    let femeninoAdmision  = parseInt(datos[0]['admision']);
    let masculinoEspol    = parseInt(datos[1]['espol']);
    let masculinoAdmision = parseInt(datos[1]['admision']);

    let estudiantes_espol    = parseInt(datos[2]['espol']);
    let estudiantes_admision = parseInt(datos[2]['admision']);

    let estudiantes_hombres = masculinoEspol + masculinoAdmision; 
    let estudiantes_mujeres = femeninoEspol + femeninoAdmision;

    let p_femeninoEspol     = ((femeninoEspol     * 100) / estudiantes_espol);
    let p_femeninoAdmision  = ((femeninoAdmision  * 100) / estudiantes_admision);
    let p_masculinoEspol    = ((masculinoEspol    * 100) / estudiantes_espol);
    let p_masculinoAdmision = ((masculinoAdmision * 100) / estudiantes_admision);

    Highcharts.chart('grafico_barra_genero_estudiantes_tp', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'GENERO DEL ESTUDIANTE'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
            stacking: 'normal'
        }
    },
    xAxis: {
        categories: [
            'HOMBRES',
            'MUJERES'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        tickInterval: 10, 
         stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        },
        title: {
            text: 'Estudiantes'
        }
    },
    series: [{
        name: 'Espol',
        data: [masculinoEspol, femeninoEspol]

    }, {
        name: 'Admisiones',
        data: [masculinoAdmision, femeninoAdmision]
    }]
});
}

function barra_genero_estudiantes_tp(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleGeneroEstudiantesTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleEdadEstudiantesTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleEdadEstudiantesTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaEdadEstudiantesTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].edad  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaEdadEstudiantesTP').dataTable().fnClearTable();
            $('#tablaEdadEstudiantesTP').dataTable().fnDestroy();
            $("#bodyTablaEdadEstudiantesTP").html("");
            $("#tablaEdadEstudiantesTP").append(tabla);           
        }    
    });
}

function grafico_barra_edad_estudiantes_tp(datos){   

    let edad_nn_Espol      = parseInt(datos[0]['espol']);
    let edad_nn_Admision   = parseInt(datos[0]['admision']);
    let edad_1720_Espol    = parseInt(datos[1]['espol']);
    let edad_1720_Admision = parseInt(datos[1]['admision']);
    let edad_2125_Espol    = parseInt(datos[2]['espol']);
    let edad_2125_Admision = parseInt(datos[2]['admision']);
    let edad_2630_Espol    = parseInt(datos[3]['espol']);
    let edad_2630_Admision = parseInt(datos[3]['admision']);
    let edad_mas_Espol     = parseInt(datos[4]['espol']);
    let edad_mas_Admision  = parseInt(datos[4]['admision']);

    let estudiantes_espol    = parseInt(datos[5]['espol']);
    let estudiantes_admision = parseInt(datos[5]['admision']);

    Highcharts.chart('grafico_barra_edad_estudiantes_tp', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'EDAD DEL ESTUDIANTE'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'NN',
                '17 - 20',
                '21 - 25',
                '26 - 30',
                'MAS'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [edad_nn_Espol, edad_1720_Espol, edad_2125_Espol, edad_2630_Espol, edad_mas_Espol]

        }, {
            name: 'Admisiones',
            data: [edad_nn_Admision, edad_1720_Admision, edad_2125_Admision, edad_2630_Admision, edad_mas_Admision]
        }]
    });
}

function barra_edad_estudiantes_tp(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleEdadEstudiantesTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleColegioEstudiantesTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleColegioEstudiantesTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaColegioEstudiantesTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].tipo_colegio  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaColegioEstudiantesTP').dataTable().fnClearTable();
            $('#tablaColegioEstudiantesTP').dataTable().fnDestroy();
            $("#bodyTablaColegioEstudiantesTP").html("");
            $("#tablaColegioEstudiantesTP").append(tabla);           
        }    
    });
}

function grafico_barra_colegio_estudiantes_tp(datos){   

    let fiscal_Espol      = parseInt(datos[0]['espol']);
    let fiscal_Admision   = parseInt(datos[0]['admision']);
    let fiscomisional_Espol    = parseInt(datos[1]['espol']);
    let fiscomisional_Admision = parseInt(datos[1]['admision']);
    let municipal_Espol    = parseInt(datos[2]['espol']);
    let municipal_Admision = parseInt(datos[2]['admision']);
    let nacional_Espol    = parseInt(datos[3]['espol']);
    let nacional_Admision = parseInt(datos[3]['admision']);
    let particular_Espol     = parseInt(datos[4]['espol']);
    let particular_Admision = parseInt(datos[4]['admision']);

    let estudiantes_espol    = parseInt(datos[5]['espol']);
    let estudiantes_admision = parseInt(datos[5]['admision']);

    Highcharts.chart('grafico_barra_colegio_estudiantes_tp', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'INSTITUCION EDUCATIVA'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'FISCAL',
                'FISCOMISIONAL',
                'MUNICIPAL',
                'NACIONAL',
                'PARTICULAR'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [fiscal_Espol, fiscomisional_Espol, municipal_Espol, nacional_Espol, particular_Espol]

        }, {
            name: 'Admisiones',
            data: [fiscal_Admision, fiscomisional_Admision, municipal_Admision, nacional_Admision, particular_Admision]
        }]
    });
}

function barra_colegio_estudiantes_tp(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleColegioEstudiantesTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleDemograficaR1TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR1TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR1TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r1  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR1TP').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR1TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR1TP").html("");
            $("#tablaDetalleDemograficaR1TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R1TP(datos){   

    let estudio_Espol      = parseInt(datos[0]['espol']);
    let estudio_Admision   = parseInt(datos[0]['admision']);
    let trabajo_Espol    = parseInt(datos[1]['espol']);
    let trabajo_Admision = parseInt(datos[1]['admision']);

    let estudiantes_espol    = parseInt(datos[2]['espol']);
    let estudiantes_admision = parseInt(datos[2]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R1TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿CUAL ES SU OCUPACION?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'ESTUDIO',
                'ESTUDIO/TRABAJO'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [estudio_Espol, trabajo_Espol]

        }, {
            name: 'Admisiones',
            data: [estudio_Admision, trabajo_Admision]
        }]
    });
}

function barra_detalle_demografica_R1TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR1TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function detalleDemograficaR2TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR2TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR2TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r2  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR2TP').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR2TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR2TP").html("");
            $("#tablaDetalleDemograficaR2TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R2TP(datos){   

    let presencial_Espol      = parseInt(datos[0]['espol']);
    let presencial_Admision   = parseInt(datos[0]['admision']);
    let virtual_Espol    = parseInt(datos[1]['espol']);
    let virtual_Admision = parseInt(datos[1]['admision']);
    
    let estudiantes_espol    = parseInt(datos[2]['espol']);
    let estudiantes_admision = parseInt(datos[2]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R2TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'USTED COMO ESTUDIANTE, ¿DE QUE FORMA PREFIERE RECIBIR CLASES?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'PRESENCIAL',
                'VIRTUAL'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [presencial_Espol, virtual_Espol]

        }, {
            name: 'Admisiones',
            data: [presencial_Admision, virtual_Admision]
        }]
    });
}

function barra_detalle_demografica_R2TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR2TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function detalleDemograficaR3TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR3TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR3TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r3  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR3TP').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR3TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR3TP").html("");
            $("#tablaDetalleDemograficaR3TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R3TP(datos){   

    let alto_Espol      = parseInt(datos[0]['espol']);
    let alto_Admision   = parseInt(datos[0]['admision']);
    let bajo_Espol    = parseInt(datos[1]['espol']);
    let bajo_Admision = parseInt(datos[1]['admision']);
    let intermedio_Espol    = parseInt(datos[2]['espol']);
    let intermedio_Admision = parseInt(datos[2]['admision']);

    let estudiantes_espol    = parseInt(datos[3]['espol']);
    let estudiantes_admision = parseInt(datos[3]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R3TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿EN QUE NIVEL CONSIDERAS ESTAN TUS CONOCIMIENTOS DE OFIMATICA?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'BAJO',
                'INTERMEDIO',
                'ALTO'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [bajo_Espol, intermedio_Espol, alto_Espol]

        }, {
            name: 'Admisiones',
            data: [bajo_Admision, intermedio_Admision, alto_Admision]
        }]
    });
}

function barra_detalle_demografica_R3TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR3TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function detalleDemograficaR4TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR4TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR4TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r4  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR4TP').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR4TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR4TP").html("");
            $("#tablaDetalleDemograficaR4TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R4TP(datos){   

    let charla_Espol      = parseInt(datos[0]['espol']);
    let charla_Admision   = parseInt(datos[0]['admision']);
    let companiero_Espol    = parseInt(datos[1]['espol']);
    let companiero_Admision = parseInt(datos[1]['admision']);
    let correo_Espol    = parseInt(datos[2]['espol']);
    let correo_Admision = parseInt(datos[2]['admision']);
    let otros_Espol    = parseInt(datos[3]['espol']);
    let otros_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R4TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿PORQUE MEDIO SE ENTERO QUE ESTABA REGISTRADO EN EL CURSO MOOC?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'CHARLA DE INDUCCION',
                'CORREO ELECTRONICO',
                'COMPAÑEROS',
                'OTROS'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [charla_Espol, correo_Espol, companiero_Espol, otros_Espol]

        }, {
            name: 'Admisiones',
            data: [charla_Admision, correo_Admision, companiero_Admision, otros_Admision]
        }]
    });
}

function barra_detalle_demografica_R4TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR4TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function detalleDemograficaR5TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR5TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR5TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r5  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR5TP').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR5TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR5TP").html("");
            $("#tablaDetalleDemograficaR5TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R5TP(datos){   

    let analisis_Espol      = parseInt(datos[0]['espol']);
    let analisis_Admision   = parseInt(datos[0]['admision']);
    let comunicacion_Espol    = parseInt(datos[1]['espol']);
    let comunicacion_Admision = parseInt(datos[1]['admision']);
    let emprendimiento_Espol    = parseInt(datos[2]['espol']);
    let emprendimiento_Admision = parseInt(datos[2]['admision']);
    let fundamentos_Espol    = parseInt(datos[3]['espol']);
    let fundamentos_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R5TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿CUAL ES LA MATERIA QUE SE HABILITA AL MOMENTO DE APROBAR EL MOOC HCD?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'FUNDAMENTOS DE PROGRAMACION',
                'ANALISIS Y RESOLUCION DE PROBLEMAS',
                'EMPRENDIMIENTO E INNOVACION',
                'COMUNICACION'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [fundamentos_Espol, analisis_Espol, emprendimiento_Espol, comunicacion_Espol]

        }, {
            name: 'Admisiones',
            data: [fundamentos_Admision, analisis_Admision, emprendimiento_Admision, comunicacion_Admision]
        }]
    });
}

function barra_detalle_demografica_R5TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR5TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}




function detalleDemograficaR6TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR6TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR6TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r6  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR6TP').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR6TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR6TP").html("");
            $("#tablaDetalleDemograficaR6TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R6TP(datos){   

    let celular_Espol      = parseInt(datos[0]['espol']);
    let celular_Admision   = parseInt(datos[0]['admision']);
    let computador_Espol    = parseInt(datos[1]['espol']);
    let computador_Admision = parseInt(datos[1]['admision']);
    let tablet_Espol    = parseInt(datos[2]['espol']);
    let tablet_Admision = parseInt(datos[2]['admision']);

    let estudiantes_espol    = parseInt(datos[3]['espol']);
    let estudiantes_admision = parseInt(datos[3]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R6TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿CON QUE EQUIPOS TECNOLOGICOS CUENTA EN SU HOGAR PARA REALIZAR EL CURSO?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'COMPUTADOR/LAPTOP',
                'CELULAR',
                'TABLET'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [computador_Espol, celular_Espol, tablet_Espol]

        }, {
            name: 'Admisiones',
            data: [computador_Admision, celular_Admision, tablet_Admision]
        }]
    });
}

function barra_detalle_demografica_R6TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR6TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}




function detalleDemograficaR7TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR7TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDemograficaR7TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].r7  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDemograficaR7TP').dataTable().fnClearTable();
            $('#tablaDetalleDemograficaR7TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleDemograficaR7TP").html("");
            $("#tablaDetalleDemograficaR7TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_demografica_R7TP(datos){   

    let datos_Espol      = parseInt(datos[0]['espol']);
    let datos_Admision   = parseInt(datos[0]['admision']);
    let prestado_Espol    = parseInt(datos[1]['espol']);
    let prestado_Admision = parseInt(datos[1]['admision']);
    let propio_Espol    = parseInt(datos[2]['espol']);
    let propio_Admision = parseInt(datos[2]['admision']);
    let publico_Espol    = parseInt(datos[3]['espol']);
    let publico_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_demografica_R7TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿QUE CONEXION DE INTERNET UTILIZA?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'PROPIO (FIJO)',
                'PRESTADO',
                'DATOS MOVILES',
                'PUBLICO (ALCALDIA/CENTROS COMERCIALES)'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [propio_Espol, prestado_Espol, datos_Espol, publico_Espol]

        }, {
            name: 'Admisiones',
            data: [propio_Admision, prestado_Admision, datos_Admision, publico_Admision]
        }]
    });
}

function barra_detalle_demografica_R7TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDemograficaR7TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}






function reportePruebaDemograficaAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=reportePruebaDemograficaAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDemograficaAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos  + "</td>";
                    tabla += "<td align='center'>" + data[i].email  + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula  + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].edad + "</td>";
                    tabla += "<td align='center'>" + data[i].colegio + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].R1 + "</td>";
                    tabla += "<td align='center'>" + data[i].R2 + "</td>";
                    tabla += "<td align='center'>" + data[i].R3 + "</td>";
                    tabla += "<td align='center'>" + data[i].R4 + "</td>";
                    tabla += "<td align='center'>" + data[i].R5 + "</td>";
                    tabla += "<td align='center'>" + data[i].R6 + "</td>";
                    tabla += "<td align='center'>" + data[i].R7 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaDemograficaAdmisionP').dataTable().fnClearTable();
            $('#tablaPruebaDemograficaAdmisionP').dataTable().fnDestroy();
            $("#bodytablaPruebaDemograficaAdmisionP").html("");
            $("#tablaPruebaDemograficaAdmisionP").append(tabla);
            $('#tablaPruebaDemograficaAdmisionP').dataTable().
            $('#tablaPruebaDemograficaAdmisionP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePruebaDemograficaAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=reportePruebaDemograficaAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDemograficaAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos  + "</td>";
                    tabla += "<td align='center'>" + data[i].email  + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula  + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].edad + "</td>";
                    tabla += "<td align='center'>" + data[i].colegio + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].R1 + "</td>";
                    tabla += "<td align='center'>" + data[i].R2 + "</td>";
                    tabla += "<td align='center'>" + data[i].R3 + "</td>";
                    tabla += "<td align='center'>" + data[i].R4 + "</td>";
                    tabla += "<td align='center'>" + data[i].R5 + "</td>";
                    tabla += "<td align='center'>" + data[i].R6 + "</td>";
                    tabla += "<td align='center'>" + data[i].R7 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaDemograficaAdmisionTP').dataTable().fnClearTable();
            $('#tablaPruebaDemograficaAdmisionTP').dataTable().fnDestroy();
            $("#bodytablaPruebaDemograficaAdmisionTP").html("");
            $("#tablaPruebaDemograficaAdmisionTP").append(tabla);
            $('#tablaPruebaDemograficaAdmisionTP').dataTable().
            $('#tablaPruebaDemograficaAdmisionTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePruebaDemograficaEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=reportePruebaDemograficaEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDemograficaEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos  + "</td>";
                    tabla += "<td align='center'>" + data[i].email  + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula  + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].edad + "</td>";
                    tabla += "<td align='center'>" + data[i].colegio + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].R1 + "</td>";
                    tabla += "<td align='center'>" + data[i].R2 + "</td>";
                    tabla += "<td align='center'>" + data[i].R3 + "</td>";
                    tabla += "<td align='center'>" + data[i].R4 + "</td>";
                    tabla += "<td align='center'>" + data[i].R5 + "</td>";
                    tabla += "<td align='center'>" + data[i].R6 + "</td>";
                    tabla += "<td align='center'>" + data[i].R7 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaDemograficaEspolP').dataTable().fnClearTable();
            $('#tablaPruebaDemograficaEspolP').dataTable().fnDestroy();
            $("#bodytablaPruebaDemograficaEspolP").html("");
            $("#tablaPruebaDemograficaEspolP").append(tabla);
            $('#tablaPruebaDemograficaEspolP').dataTable().
            $('#tablaPruebaDemograficaEspolP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePruebaDemograficaEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=reportePruebaDemograficaEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDemograficaEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos  + "</td>";
                    tabla += "<td align='center'>" + data[i].email  + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula  + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo + "</td>";
                    tabla += "<td align='center'>" + data[i].edad + "</td>";
                    tabla += "<td align='center'>" + data[i].colegio + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].R1 + "</td>";
                    tabla += "<td align='center'>" + data[i].R2 + "</td>";
                    tabla += "<td align='center'>" + data[i].R3 + "</td>";
                    tabla += "<td align='center'>" + data[i].R4 + "</td>";
                    tabla += "<td align='center'>" + data[i].R5 + "</td>";
                    tabla += "<td align='center'>" + data[i].R6 + "</td>";
                    tabla += "<td align='center'>" + data[i].R7 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaDemograficaEspolTP').dataTable().fnClearTable();
            $('#tablaPruebaDemograficaEspolTP').dataTable().fnDestroy();
            $("#bodytablaPruebaDemograficaEspolTP").html("");
            $("#tablaPruebaDemograficaEspolTP").append(tabla);
            $('#tablaPruebaDemograficaEspolTP').dataTable().
            $('#tablaPruebaDemograficaEspolTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}



///////////////////////////////////////////////////////////////////////pruebas de diagnostico
function reportePruebaDiagnosticoAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=reportePruebaDiagnosticoAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDiagnosticoAdmisionP').show();
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
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod3 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5 + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5 + "</td>";

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
        url: "ajax/encuestas.php?op=reportePruebaDiagnosticoAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDiagnosticoAdmisionTP').show();
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
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod1 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod2 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod3 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod6 + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM1 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM2 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM6 + "</td>";
                   
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
        url: "ajax/encuestas.php?op=reportePruebaDiagnosticoEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDiagnosticoEspolP').show();
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
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod3 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5 + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5 + "</td>";
                   
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
        url: "ajax/encuestas.php?op=reportePruebaDiagnosticoEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaDiagnosticoEspolTP').show();
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
                    tabla += "<td align='center'>" + data[i].grade + "</td>";

                    tabla += "<td align='center'>" + data[i].mod1 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod2 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod3 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod4 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod5 + "</td>";
                    tabla += "<td align='center'>" + data[i].mod6 + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoM1 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM2 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM5 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoM6 + "</td>";
                   
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

///////////////////////////////////////////////////////////////////////diagnostico practico 
function num_estudiantes_registrados_diagnostico_p(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_p",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_p').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_p_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_p_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_p_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_p_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_p_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_p_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_realizoPrueba_p(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_realizoPrueba_p",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_realizoPrueba_p').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_realizoPrueba_p_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_realizoPrueba_p_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_realizoPrueba_p_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_realizoPrueba_p_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_realizoPrueba_p_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_realizoPrueba_p_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_noRealizoPrueba_p(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_noRealizoPrueba_p",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_noRealizoPrueba_p').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_noRealizoPrueba_p_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_noRealizoPrueba_p_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_noRealizoPrueba_p_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_noRealizoPrueba_p_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_noRealizoPrueba_p_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_noRealizoPrueba_p_admision').html(resp['estudiantes']);
        }    
    });
}

function detalleDiagnosticoEstudiantesP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDiagnosticoEstudiantesP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDiagnosticoP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].modulo  + "</td>";
                    tabla += "<td align='center'>" + data[i].inicial_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].inicial_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].inicial_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].regular_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].regular_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].regular_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].enDesarrollo_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].enDesarrollo_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].enDesarrollo_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].desarrollado_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].desarrollado_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].desarrollado_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].excelente_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].excelente_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].excelente_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].sinRespuesta_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].sinRespuesta_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].sinRespuesta_total   + "</td>";                                     
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDiagnosticoP').dataTable().fnClearTable();
            $('#tablaDetalleDiagnosticoP').dataTable().fnDestroy();
            $("#bodyTablaDetalleDiagnosticoP").html("");
            $("#tablaDetalleDiagnosticoP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_diagnostico_general_p(datos){   

    let inicial_m3_espol         = parseInt(datos[0]['inicial_espol']);
    let inicial_m3_admision      = parseInt(datos[0]['inicial_admision']);
    let inicial_m3_total         = parseInt(datos[0]['inicial_total']);
    let regular_m3_espol         = parseInt(datos[0]['regular_espol']);
    let regular_m3_admision      = parseInt(datos[0]['regular_admision']);
    let regular_m3_total         = parseInt(datos[0]['regular_total']);
    let enDesarrollo_m3_espol    = parseInt(datos[0]['enDesarrollo_espol']);
    let enDesarrollo_m3_admision = parseInt(datos[0]['enDesarrollo_admision']);
    let enDesarrollo_m3_total    = parseInt(datos[0]['enDesarrollo_total']);
    let desarrollado_m3_espol    = parseInt(datos[0]['desarrollado_espol']);
    let desarrollado_m3_admision = parseInt(datos[0]['desarrollado_admision']);
    let desarrollado_m3_total    = parseInt(datos[0]['desarrollado_total']);
    let excelente_m3_espol       = parseInt(datos[0]['excelente_espol']);
    let excelente_m3_admision    = parseInt(datos[0]['excelente_admision']);
    let excelente_m3_total       = parseInt(datos[0]['excelente_total']);
    let sinRespuesta_m3_espol    = parseInt(datos[0]['sinRespuesta_espol']);
    let sinRespuesta_m3_admision = parseInt(datos[0]['sinRespuesta_admision']);
    let sinRespuesta_m3_total    = parseInt(datos[0]['sinRespuesta_total']);

    let inicial_m4_espol         = parseInt(datos[1]['inicial_espol']);
    let inicial_m4_admision      = parseInt(datos[1]['inicial_admision']);
    let inicial_m4_total         = parseInt(datos[1]['inicial_total']);
    let regular_m4_espol         = parseInt(datos[1]['regular_espol']);
    let regular_m4_admision      = parseInt(datos[1]['regular_admision']);
    let regular_m4_total         = parseInt(datos[1]['regular_total']);
    let enDesarrollo_m4_espol    = parseInt(datos[1]['enDesarrollo_espol']);
    let enDesarrollo_m4_admision = parseInt(datos[1]['enDesarrollo_admision']);
    let enDesarrollo_m4_total    = parseInt(datos[1]['enDesarrollo_total']);
    let desarrollado_m4_espol    = parseInt(datos[1]['desarrollado_espol']);
    let desarrollado_m4_admision = parseInt(datos[1]['desarrollado_admision']);
    let desarrollado_m4_total    = parseInt(datos[1]['desarrollado_total']);
    let excelente_m4_espol       = parseInt(datos[1]['excelente_espol']);
    let excelente_m4_admision    = parseInt(datos[1]['excelente_admision']);
    let excelente_m4_total       = parseInt(datos[1]['excelente_total']);
    let sinRespuesta_m4_espol    = parseInt(datos[1]['sinRespuesta_espol']);
    let sinRespuesta_m4_admision = parseInt(datos[1]['sinRespuesta_admision']);
    let sinRespuesta_m4_total    = parseInt(datos[1]['sinRespuesta_total']);

    let inicial_m5_espol         = parseInt(datos[2]['inicial_espol']);
    let inicial_m5_admision      = parseInt(datos[2]['inicial_admision']);
    let inicial_m5_total         = parseInt(datos[2]['inicial_total']);
    let regular_m5_espol         = parseInt(datos[2]['regular_espol']);
    let regular_m5_admision      = parseInt(datos[2]['regular_admision']);
    let regular_m5_total         = parseInt(datos[2]['regular_total']);
    let enDesarrollo_m5_espol    = parseInt(datos[2]['enDesarrollo_espol']);
    let enDesarrollo_m5_admision = parseInt(datos[2]['enDesarrollo_admision']);
    let enDesarrollo_m5_total    = parseInt(datos[2]['enDesarrollo_total']);
    let desarrollado_m5_espol    = parseInt(datos[2]['desarrollado_espol']);
    let desarrollado_m5_admision = parseInt(datos[2]['desarrollado_admision']);
    let desarrollado_m5_total    = parseInt(datos[2]['desarrollado_total']);
    let excelente_m5_espol       = parseInt(datos[2]['excelente_espol']);
    let excelente_m5_admision    = parseInt(datos[2]['excelente_admision']);
    let excelente_m5_total       = parseInt(datos[2]['excelente_total']);
    let sinRespuesta_m5_espol    = parseInt(datos[2]['sinRespuesta_espol']);
    let sinRespuesta_m5_admision = parseInt(datos[2]['sinRespuesta_admision']);
    let sinRespuesta_m5_total    = parseInt(datos[2]['sinRespuesta_total']);

    Highcharts.chart('grafico_barra_detalle_diagnostico_general_p', {
            title: {
                text: 'CURSO MOOC HCD COMPLETO'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['MODULO 3', 'MODULO 4', 'MODULO 5'],
                title: {
                    text: null
                }
            },
            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {                            
                                return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'INICIAL (0 - 29 PUNTOS)',
                data: [ inicial_m3_total, inicial_m4_total, inicial_m5_total ]
                }, {
                name: 'REGULAR (30 - 59 PUNTOS)',
                data: [ regular_m3_total, regular_m4_total, regular_m5_total ]
                }, {
                name: 'EN DESARROLLO (60 - 74 PUNTOS)',
                data: [ enDesarrollo_m3_total, enDesarrollo_m4_total, enDesarrollo_m5_total ]
                } , {
                name: 'DESARROLLADO (75 - 89 PUNTOS)',
                data: [ desarrollado_m3_total, desarrollado_m4_total, desarrollado_m5_total ]
                }, {
                name: 'EXCELENTE (90 - 100 PUNTOS)',
                data: [ excelente_m3_total, excelente_m4_total, excelente_m5_total ]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function grafico_barra_detalle_diagnostico_espol_p(datos){   

    let inicial_m3_espol         = parseInt(datos[0]['inicial_espol']);
    let inicial_m3_admision      = parseInt(datos[0]['inicial_admision']);
    let inicial_m3_total         = parseInt(datos[0]['inicial_total']);
    let regular_m3_espol         = parseInt(datos[0]['regular_espol']);
    let regular_m3_admision      = parseInt(datos[0]['regular_admision']);
    let regular_m3_total         = parseInt(datos[0]['regular_total']);
    let enDesarrollo_m3_espol    = parseInt(datos[0]['enDesarrollo_espol']);
    let enDesarrollo_m3_admision = parseInt(datos[0]['enDesarrollo_admision']);
    let enDesarrollo_m3_total    = parseInt(datos[0]['enDesarrollo_total']);
    let desarrollado_m3_espol    = parseInt(datos[0]['desarrollado_espol']);
    let desarrollado_m3_admision = parseInt(datos[0]['desarrollado_admision']);
    let desarrollado_m3_total    = parseInt(datos[0]['desarrollado_total']);
    let excelente_m3_espol       = parseInt(datos[0]['excelente_espol']);
    let excelente_m3_admision    = parseInt(datos[0]['excelente_admision']);
    let excelente_m3_total       = parseInt(datos[0]['excelente_total']);
    let sinRespuesta_m3_espol    = parseInt(datos[0]['sinRespuesta_espol']);
    let sinRespuesta_m3_admision = parseInt(datos[0]['sinRespuesta_admision']);
    let sinRespuesta_m3_total    = parseInt(datos[0]['sinRespuesta_total']);

    let inicial_m4_espol         = parseInt(datos[1]['inicial_espol']);
    let inicial_m4_admision      = parseInt(datos[1]['inicial_admision']);
    let inicial_m4_total         = parseInt(datos[1]['inicial_total']);
    let regular_m4_espol         = parseInt(datos[1]['regular_espol']);
    let regular_m4_admision      = parseInt(datos[1]['regular_admision']);
    let regular_m4_total         = parseInt(datos[1]['regular_total']);
    let enDesarrollo_m4_espol    = parseInt(datos[1]['enDesarrollo_espol']);
    let enDesarrollo_m4_admision = parseInt(datos[1]['enDesarrollo_admision']);
    let enDesarrollo_m4_total    = parseInt(datos[1]['enDesarrollo_total']);
    let desarrollado_m4_espol    = parseInt(datos[1]['desarrollado_espol']);
    let desarrollado_m4_admision = parseInt(datos[1]['desarrollado_admision']);
    let desarrollado_m4_total    = parseInt(datos[1]['desarrollado_total']);
    let excelente_m4_espol       = parseInt(datos[1]['excelente_espol']);
    let excelente_m4_admision    = parseInt(datos[1]['excelente_admision']);
    let excelente_m4_total       = parseInt(datos[1]['excelente_total']);
    let sinRespuesta_m4_espol    = parseInt(datos[1]['sinRespuesta_espol']);
    let sinRespuesta_m4_admision = parseInt(datos[1]['sinRespuesta_admision']);
    let sinRespuesta_m4_total    = parseInt(datos[1]['sinRespuesta_total']);

    let inicial_m5_espol         = parseInt(datos[2]['inicial_espol']);
    let inicial_m5_admision      = parseInt(datos[2]['inicial_admision']);
    let inicial_m5_total         = parseInt(datos[2]['inicial_total']);
    let regular_m5_espol         = parseInt(datos[2]['regular_espol']);
    let regular_m5_admision      = parseInt(datos[2]['regular_admision']);
    let regular_m5_total         = parseInt(datos[2]['regular_total']);
    let enDesarrollo_m5_espol    = parseInt(datos[2]['enDesarrollo_espol']);
    let enDesarrollo_m5_admision = parseInt(datos[2]['enDesarrollo_admision']);
    let enDesarrollo_m5_total    = parseInt(datos[2]['enDesarrollo_total']);
    let desarrollado_m5_espol    = parseInt(datos[2]['desarrollado_espol']);
    let desarrollado_m5_admision = parseInt(datos[2]['desarrollado_admision']);
    let desarrollado_m5_total    = parseInt(datos[2]['desarrollado_total']);
    let excelente_m5_espol       = parseInt(datos[2]['excelente_espol']);
    let excelente_m5_admision    = parseInt(datos[2]['excelente_admision']);
    let excelente_m5_total       = parseInt(datos[2]['excelente_total']);
    let sinRespuesta_m5_espol    = parseInt(datos[2]['sinRespuesta_espol']);
    let sinRespuesta_m5_admision = parseInt(datos[2]['sinRespuesta_admision']);
    let sinRespuesta_m5_total    = parseInt(datos[2]['sinRespuesta_total']);

    Highcharts.chart('grafico_barra_detalle_diagnostico_espol_p', {
            title: {
                text: 'CURSO MOOC HCD COMPLETO ( ESPOL )'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['MODULO 3', 'MODULO 4', 'MODULO 5'],
                title: {
                    text: null
                }
            },
            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {                            
                                return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'INICIAL (0 - 29 PUNTOS)',
                data: [ inicial_m3_espol, inicial_m4_espol, inicial_m5_espol ]
                }, {
                name: 'REGULAR (30 - 59 PUNTOS)',
                data: [ regular_m3_espol, regular_m4_espol, regular_m5_espol ]
                }, {
                name: 'EN DESARROLLO (60 - 74 PUNTOS)',
                data: [ enDesarrollo_m3_espol, enDesarrollo_m4_espol, enDesarrollo_m5_espol ]
                } , {
                name: 'DESARROLLADO (75 - 89 PUNTOS)',
                data: [ desarrollado_m3_espol, desarrollado_m4_espol, desarrollado_m5_espol ]
                }, {
                name: 'EXCELENTE (90 - 100 PUNTOS)',
                data: [ excelente_m3_espol, excelente_m4_espol, excelente_m5_espol ]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function grafico_barra_detalle_diagnostico_admision_p(datos){   

    let inicial_m3_espol         = parseInt(datos[0]['inicial_espol']);
    let inicial_m3_admision      = parseInt(datos[0]['inicial_admision']);
    let inicial_m3_total         = parseInt(datos[0]['inicial_total']);
    let regular_m3_espol         = parseInt(datos[0]['regular_espol']);
    let regular_m3_admision      = parseInt(datos[0]['regular_admision']);
    let regular_m3_total         = parseInt(datos[0]['regular_total']);
    let enDesarrollo_m3_espol    = parseInt(datos[0]['enDesarrollo_espol']);
    let enDesarrollo_m3_admision = parseInt(datos[0]['enDesarrollo_admision']);
    let enDesarrollo_m3_total    = parseInt(datos[0]['enDesarrollo_total']);
    let desarrollado_m3_espol    = parseInt(datos[0]['desarrollado_espol']);
    let desarrollado_m3_admision = parseInt(datos[0]['desarrollado_admision']);
    let desarrollado_m3_total    = parseInt(datos[0]['desarrollado_total']);
    let excelente_m3_espol       = parseInt(datos[0]['excelente_espol']);
    let excelente_m3_admision    = parseInt(datos[0]['excelente_admision']);
    let excelente_m3_total       = parseInt(datos[0]['excelente_total']);
    let sinRespuesta_m3_espol    = parseInt(datos[0]['sinRespuesta_espol']);
    let sinRespuesta_m3_admision = parseInt(datos[0]['sinRespuesta_admision']);
    let sinRespuesta_m3_total    = parseInt(datos[0]['sinRespuesta_total']);

    let inicial_m4_espol         = parseInt(datos[1]['inicial_espol']);
    let inicial_m4_admision      = parseInt(datos[1]['inicial_admision']);
    let inicial_m4_total         = parseInt(datos[1]['inicial_total']);
    let regular_m4_espol         = parseInt(datos[1]['regular_espol']);
    let regular_m4_admision      = parseInt(datos[1]['regular_admision']);
    let regular_m4_total         = parseInt(datos[1]['regular_total']);
    let enDesarrollo_m4_espol    = parseInt(datos[1]['enDesarrollo_espol']);
    let enDesarrollo_m4_admision = parseInt(datos[1]['enDesarrollo_admision']);
    let enDesarrollo_m4_total    = parseInt(datos[1]['enDesarrollo_total']);
    let desarrollado_m4_espol    = parseInt(datos[1]['desarrollado_espol']);
    let desarrollado_m4_admision = parseInt(datos[1]['desarrollado_admision']);
    let desarrollado_m4_total    = parseInt(datos[1]['desarrollado_total']);
    let excelente_m4_espol       = parseInt(datos[1]['excelente_espol']);
    let excelente_m4_admision    = parseInt(datos[1]['excelente_admision']);
    let excelente_m4_total       = parseInt(datos[1]['excelente_total']);
    let sinRespuesta_m4_espol    = parseInt(datos[1]['sinRespuesta_espol']);
    let sinRespuesta_m4_admision = parseInt(datos[1]['sinRespuesta_admision']);
    let sinRespuesta_m4_total    = parseInt(datos[1]['sinRespuesta_total']);

    let inicial_m5_espol         = parseInt(datos[2]['inicial_espol']);
    let inicial_m5_admision      = parseInt(datos[2]['inicial_admision']);
    let inicial_m5_total         = parseInt(datos[2]['inicial_total']);
    let regular_m5_espol         = parseInt(datos[2]['regular_espol']);
    let regular_m5_admision      = parseInt(datos[2]['regular_admision']);
    let regular_m5_total         = parseInt(datos[2]['regular_total']);
    let enDesarrollo_m5_espol    = parseInt(datos[2]['enDesarrollo_espol']);
    let enDesarrollo_m5_admision = parseInt(datos[2]['enDesarrollo_admision']);
    let enDesarrollo_m5_total    = parseInt(datos[2]['enDesarrollo_total']);
    let desarrollado_m5_espol    = parseInt(datos[2]['desarrollado_espol']);
    let desarrollado_m5_admision = parseInt(datos[2]['desarrollado_admision']);
    let desarrollado_m5_total    = parseInt(datos[2]['desarrollado_total']);
    let excelente_m5_espol       = parseInt(datos[2]['excelente_espol']);
    let excelente_m5_admision    = parseInt(datos[2]['excelente_admision']);
    let excelente_m5_total       = parseInt(datos[2]['excelente_total']);
    let sinRespuesta_m5_espol    = parseInt(datos[2]['sinRespuesta_espol']);
    let sinRespuesta_m5_admision = parseInt(datos[2]['sinRespuesta_admision']);
    let sinRespuesta_m5_total    = parseInt(datos[2]['sinRespuesta_total']);

    Highcharts.chart('grafico_barra_detalle_diagnostico_admision_p', {
            title: {
                text: 'CURSO MOOC HCD COMPLETO ( ADMISIONES )'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['MODULO 3', 'MODULO 4', 'MODULO 5'],
                title: {
                    text: null
                }
            },
            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {                            
                                return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'INICIAL (0 - 29 PUNTOS)',
                data: [ inicial_m3_admision, inicial_m4_admision, inicial_m5_admision ]
                }, {
                name: 'REGULAR (30 - 59 PUNTOS)',
                data: [ regular_m3_admision, regular_m4_admision, regular_m5_admision ]
                }, {
                name: 'EN DESARROLLO (60 - 74 PUNTOS)',
                data: [ enDesarrollo_m3_admision, enDesarrollo_m4_admision, enDesarrollo_m5_admision ]
                } , {
                name: 'DESARROLLADO (75 - 89 PUNTOS)',
                data: [ desarrollado_m3_admision, desarrollado_m4_admision, desarrollado_m5_admision ]
                }, {
                name: 'EXCELENTE (90 - 100 PUNTOS)',
                data: [ excelente_m3_admision, excelente_m4_admision, excelente_m5_admision ]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function barra_detalle_diagnostico_general_p(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDiagnosticoEstudiantesP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function barra_detalle_diagnostico_espol_p(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDiagnosticoEstudiantesP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function barra_detalle_diagnostico_admision_p(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDiagnosticoEstudiantesP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



///////////////////////////////////////////////////////////////////////diagnostico teorico practico 
function num_estudiantes_registrados_diagnostico_tp(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_tp",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_tp').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_tp_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_tp_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_tp_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_tp_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_tp_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_tp_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_realizoPrueba_tp(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_realizoPrueba_tp",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_realizoPrueba_tp').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_realizoPrueba_tp_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_realizoPrueba_tp_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_realizoPrueba_tp_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_realizoPrueba_tp_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_realizoPrueba_tp_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_realizoPrueba_tp_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_noRealizoPrueba_tp(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_noRealizoPrueba_tp",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_noRealizoPrueba_tp').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_noRealizoPrueba_tp_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_noRealizoPrueba_tp_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_noRealizoPrueba_tp_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_diagnostico_noRealizoPrueba_tp_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_diagnostico_noRealizoPrueba_tp_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_diagnostico_noRealizoPrueba_tp_admision').html(resp['estudiantes']);
        }    
    });
}

function detalleDiagnosticoEstudiantesTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDiagnosticoEstudiantesTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleDiagnosticoTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].modulo  + "</td>";
                    tabla += "<td align='center'>" + data[i].inicial_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].inicial_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].inicial_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].regular_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].regular_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].regular_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].enDesarrollo_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].enDesarrollo_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].enDesarrollo_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].desarrollado_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].desarrollado_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].desarrollado_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].excelente_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].excelente_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].excelente_total   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].sinRespuesta_espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].sinRespuesta_admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].sinRespuesta_total   + "</td>";                                     
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleDiagnosticoTP').dataTable().fnClearTable();
            $('#tablaDetalleDiagnosticoTP').dataTable().fnDestroy();
            $("#bodyTablaDetalleDiagnosticoTP").html("");
            $("#tablaDetalleDiagnosticoTP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_diagnostico_general_tp(datos){   

    let inicial_m1_espol         = parseInt(datos[0]['inicial_espol']);
    let inicial_m1_admision      = parseInt(datos[0]['inicial_admision']);
    let inicial_m1_total         = parseInt(datos[0]['inicial_total']);
    let regular_m1_espol         = parseInt(datos[0]['regular_espol']);
    let regular_m1_admision      = parseInt(datos[0]['regular_admision']);
    let regular_m1_total         = parseInt(datos[0]['regular_total']);
    let enDesarrollo_m1_espol    = parseInt(datos[0]['enDesarrollo_espol']);
    let enDesarrollo_m1_admision = parseInt(datos[0]['enDesarrollo_admision']);
    let enDesarrollo_m1_total    = parseInt(datos[0]['enDesarrollo_total']);
    let desarrollado_m1_espol    = parseInt(datos[0]['desarrollado_espol']);
    let desarrollado_m1_admision = parseInt(datos[0]['desarrollado_admision']);
    let desarrollado_m1_total    = parseInt(datos[0]['desarrollado_total']);
    let excelente_m1_espol       = parseInt(datos[0]['excelente_espol']);
    let excelente_m1_admision    = parseInt(datos[0]['excelente_admision']);
    let excelente_m1_total       = parseInt(datos[0]['excelente_total']);
    let sinRespuesta_m1_espol    = parseInt(datos[0]['sinRespuesta_espol']);
    let sinRespuesta_m1_admision = parseInt(datos[0]['sinRespuesta_admision']);
    let sinRespuesta_m1_total    = parseInt(datos[0]['sinRespuesta_total']);

    let inicial_m2_espol         = parseInt(datos[1]['inicial_espol']);
    let inicial_m2_admision      = parseInt(datos[1]['inicial_admision']);
    let inicial_m2_total         = parseInt(datos[1]['inicial_total']);
    let regular_m2_espol         = parseInt(datos[1]['regular_espol']);
    let regular_m2_admision      = parseInt(datos[1]['regular_admision']);
    let regular_m2_total         = parseInt(datos[1]['regular_total']);
    let enDesarrollo_m2_espol    = parseInt(datos[1]['enDesarrollo_espol']);
    let enDesarrollo_m2_admision = parseInt(datos[1]['enDesarrollo_admision']);
    let enDesarrollo_m2_total    = parseInt(datos[1]['enDesarrollo_total']);
    let desarrollado_m2_espol    = parseInt(datos[1]['desarrollado_espol']);
    let desarrollado_m2_admision = parseInt(datos[1]['desarrollado_admision']);
    let desarrollado_m2_total    = parseInt(datos[1]['desarrollado_total']);
    let excelente_m2_espol       = parseInt(datos[1]['excelente_espol']);
    let excelente_m2_admision    = parseInt(datos[1]['excelente_admision']);
    let excelente_m2_total       = parseInt(datos[1]['excelente_total']);
    let sinRespuesta_m2_espol    = parseInt(datos[1]['sinRespuesta_espol']);
    let sinRespuesta_m2_admision = parseInt(datos[1]['sinRespuesta_admision']);
    let sinRespuesta_m2_total    = parseInt(datos[1]['sinRespuesta_total']);

    let inicial_m3_espol         = parseInt(datos[2]['inicial_espol']);
    let inicial_m3_admision      = parseInt(datos[2]['inicial_admision']);
    let inicial_m3_total         = parseInt(datos[2]['inicial_total']);
    let regular_m3_espol         = parseInt(datos[2]['regular_espol']);
    let regular_m3_admision      = parseInt(datos[2]['regular_admision']);
    let regular_m3_total         = parseInt(datos[2]['regular_total']);
    let enDesarrollo_m3_espol    = parseInt(datos[2]['enDesarrollo_espol']);
    let enDesarrollo_m3_admision = parseInt(datos[2]['enDesarrollo_admision']);
    let enDesarrollo_m3_total    = parseInt(datos[2]['enDesarrollo_total']);
    let desarrollado_m3_espol    = parseInt(datos[2]['desarrollado_espol']);
    let desarrollado_m3_admision = parseInt(datos[2]['desarrollado_admision']);
    let desarrollado_m3_total    = parseInt(datos[2]['desarrollado_total']);
    let excelente_m3_espol       = parseInt(datos[2]['excelente_espol']);
    let excelente_m3_admision    = parseInt(datos[2]['excelente_admision']);
    let excelente_m3_total       = parseInt(datos[2]['excelente_total']);
    let sinRespuesta_m3_espol    = parseInt(datos[2]['sinRespuesta_espol']);
    let sinRespuesta_m3_admision = parseInt(datos[2]['sinRespuesta_admision']);
    let sinRespuesta_m3_total    = parseInt(datos[2]['sinRespuesta_total']);

    let inicial_m4_espol         = parseInt(datos[3]['inicial_espol']);
    let inicial_m4_admision      = parseInt(datos[3]['inicial_admision']);
    let inicial_m4_total         = parseInt(datos[3]['inicial_total']);
    let regular_m4_espol         = parseInt(datos[3]['regular_espol']);
    let regular_m4_admision      = parseInt(datos[3]['regular_admision']);
    let regular_m4_total         = parseInt(datos[3]['regular_total']);
    let enDesarrollo_m4_espol    = parseInt(datos[3]['enDesarrollo_espol']);
    let enDesarrollo_m4_admision = parseInt(datos[3]['enDesarrollo_admision']);
    let enDesarrollo_m4_total    = parseInt(datos[3]['enDesarrollo_total']);
    let desarrollado_m4_espol    = parseInt(datos[3]['desarrollado_espol']);
    let desarrollado_m4_admision = parseInt(datos[3]['desarrollado_admision']);
    let desarrollado_m4_total    = parseInt(datos[3]['desarrollado_total']);
    let excelente_m4_espol       = parseInt(datos[3]['excelente_espol']);
    let excelente_m4_admision    = parseInt(datos[3]['excelente_admision']);
    let excelente_m4_total       = parseInt(datos[3]['excelente_total']);
    let sinRespuesta_m4_espol    = parseInt(datos[3]['sinRespuesta_espol']);
    let sinRespuesta_m4_admision = parseInt(datos[3]['sinRespuesta_admision']);
    let sinRespuesta_m4_total    = parseInt(datos[3]['sinRespuesta_total']);

    let inicial_m5_espol         = parseInt(datos[4]['inicial_espol']);
    let inicial_m5_admision      = parseInt(datos[4]['inicial_admision']);
    let inicial_m5_total         = parseInt(datos[4]['inicial_total']);
    let regular_m5_espol         = parseInt(datos[4]['regular_espol']);
    let regular_m5_admision      = parseInt(datos[4]['regular_admision']);
    let regular_m5_total         = parseInt(datos[4]['regular_total']);
    let enDesarrollo_m5_espol    = parseInt(datos[4]['enDesarrollo_espol']);
    let enDesarrollo_m5_admision = parseInt(datos[4]['enDesarrollo_admision']);
    let enDesarrollo_m5_total    = parseInt(datos[4]['enDesarrollo_total']);
    let desarrollado_m5_espol    = parseInt(datos[4]['desarrollado_espol']);
    let desarrollado_m5_admision = parseInt(datos[4]['desarrollado_admision']);
    let desarrollado_m5_total    = parseInt(datos[4]['desarrollado_total']);
    let excelente_m5_espol       = parseInt(datos[4]['excelente_espol']);
    let excelente_m5_admision    = parseInt(datos[4]['excelente_admision']);
    let excelente_m5_total       = parseInt(datos[4]['excelente_total']);
    let sinRespuesta_m5_espol    = parseInt(datos[4]['sinRespuesta_espol']);
    let sinRespuesta_m5_admision = parseInt(datos[4]['sinRespuesta_admision']);
    let sinRespuesta_m5_total    = parseInt(datos[4]['sinRespuesta_total']);

    let inicial_m6_espol         = parseInt(datos[5]['inicial_espol']);
    let inicial_m6_admision      = parseInt(datos[5]['inicial_admision']);
    let inicial_m6_total         = parseInt(datos[5]['inicial_total']);
    let regular_m6_espol         = parseInt(datos[5]['regular_espol']);
    let regular_m6_admision      = parseInt(datos[5]['regular_admision']);
    let regular_m6_total         = parseInt(datos[5]['regular_total']);
    let enDesarrollo_m6_espol    = parseInt(datos[5]['enDesarrollo_espol']);
    let enDesarrollo_m6_admision = parseInt(datos[5]['enDesarrollo_admision']);
    let enDesarrollo_m6_total    = parseInt(datos[5]['enDesarrollo_total']);
    let desarrollado_m6_espol    = parseInt(datos[5]['desarrollado_espol']);
    let desarrollado_m6_admision = parseInt(datos[5]['desarrollado_admision']);
    let desarrollado_m6_total    = parseInt(datos[5]['desarrollado_total']);
    let excelente_m6_espol       = parseInt(datos[5]['excelente_espol']);
    let excelente_m6_admision    = parseInt(datos[5]['excelente_admision']);
    let excelente_m6_total       = parseInt(datos[5]['excelente_total']);
    let sinRespuesta_m6_espol    = parseInt(datos[5]['sinRespuesta_espol']);
    let sinRespuesta_m6_admision = parseInt(datos[5]['sinRespuesta_admision']);
    let sinRespuesta_m6_total    = parseInt(datos[5]['sinRespuesta_total']);


    Highcharts.chart('grafico_barra_detalle_diagnostico_general_tp', {
            title: {
                text: 'CURSO MOOC HCD COMPLETO'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['MODULO 1', 'MODULO 2', 'MODULO 3', 'MODULO 4', 'MODULO 5', 'MODULO 6'],
                title: {
                    text: null
                }
            },
            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {                            
                                return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'INICIAL (0 - 29 PUNTOS)',
                data: [inicial_m1_total, inicial_m2_total, inicial_m3_total, inicial_m4_total,inicial_m5_total, inicial_m6_total]
                }, {
                name: 'REGULAR (30 - 59 PUNTOS)',
                data: [regular_m1_total, regular_m2_total, regular_m3_total, regular_m4_total,regular_m5_total, regular_m6_total]
                }, {
                name: 'EN DESARROLLO (60 - 74 PUNTOS)',
                data: [enDesarrollo_m1_total, enDesarrollo_m2_total, enDesarrollo_m3_total, enDesarrollo_m4_total,enDesarrollo_m5_total, enDesarrollo_m6_total]
                } , {
                name: 'DESARROLLADO (75 - 89 PUNTOS)',
                data: [desarrollado_m1_total, desarrollado_m2_total, desarrollado_m3_total, desarrollado_m4_total,desarrollado_m5_total, desarrollado_m6_total]
                }, {
                name: 'EXCELENTE (90 - 100 PUNTOS)',
                data: [excelente_m1_total, excelente_m2_total, excelente_m3_total, excelente_m4_total,excelente_m5_total, excelente_m6_total]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function grafico_barra_detalle_diagnostico_espol_tp(datos){   

    let inicial_m1_espol         = parseInt(datos[0]['inicial_espol']);
    let inicial_m1_admision      = parseInt(datos[0]['inicial_admision']);
    let inicial_m1_total         = parseInt(datos[0]['inicial_total']);
    let regular_m1_espol         = parseInt(datos[0]['regular_espol']);
    let regular_m1_admision      = parseInt(datos[0]['regular_admision']);
    let regular_m1_total         = parseInt(datos[0]['regular_total']);
    let enDesarrollo_m1_espol    = parseInt(datos[0]['enDesarrollo_espol']);
    let enDesarrollo_m1_admision = parseInt(datos[0]['enDesarrollo_admision']);
    let enDesarrollo_m1_total    = parseInt(datos[0]['enDesarrollo_total']);
    let desarrollado_m1_espol    = parseInt(datos[0]['desarrollado_espol']);
    let desarrollado_m1_admision = parseInt(datos[0]['desarrollado_admision']);
    let desarrollado_m1_total    = parseInt(datos[0]['desarrollado_total']);
    let excelente_m1_espol       = parseInt(datos[0]['excelente_espol']);
    let excelente_m1_admision    = parseInt(datos[0]['excelente_admision']);
    let excelente_m1_total       = parseInt(datos[0]['excelente_total']);
    let sinRespuesta_m1_espol    = parseInt(datos[0]['sinRespuesta_espol']);
    let sinRespuesta_m1_admision = parseInt(datos[0]['sinRespuesta_admision']);
    let sinRespuesta_m1_total    = parseInt(datos[0]['sinRespuesta_total']);

    let inicial_m2_espol         = parseInt(datos[1]['inicial_espol']);
    let inicial_m2_admision      = parseInt(datos[1]['inicial_admision']);
    let inicial_m2_total         = parseInt(datos[1]['inicial_total']);
    let regular_m2_espol         = parseInt(datos[1]['regular_espol']);
    let regular_m2_admision      = parseInt(datos[1]['regular_admision']);
    let regular_m2_total         = parseInt(datos[1]['regular_total']);
    let enDesarrollo_m2_espol    = parseInt(datos[1]['enDesarrollo_espol']);
    let enDesarrollo_m2_admision = parseInt(datos[1]['enDesarrollo_admision']);
    let enDesarrollo_m2_total    = parseInt(datos[1]['enDesarrollo_total']);
    let desarrollado_m2_espol    = parseInt(datos[1]['desarrollado_espol']);
    let desarrollado_m2_admision = parseInt(datos[1]['desarrollado_admision']);
    let desarrollado_m2_total    = parseInt(datos[1]['desarrollado_total']);
    let excelente_m2_espol       = parseInt(datos[1]['excelente_espol']);
    let excelente_m2_admision    = parseInt(datos[1]['excelente_admision']);
    let excelente_m2_total       = parseInt(datos[1]['excelente_total']);
    let sinRespuesta_m2_espol    = parseInt(datos[1]['sinRespuesta_espol']);
    let sinRespuesta_m2_admision = parseInt(datos[1]['sinRespuesta_admision']);
    let sinRespuesta_m2_total    = parseInt(datos[1]['sinRespuesta_total']);

    let inicial_m3_espol         = parseInt(datos[2]['inicial_espol']);
    let inicial_m3_admision      = parseInt(datos[2]['inicial_admision']);
    let inicial_m3_total         = parseInt(datos[2]['inicial_total']);
    let regular_m3_espol         = parseInt(datos[2]['regular_espol']);
    let regular_m3_admision      = parseInt(datos[2]['regular_admision']);
    let regular_m3_total         = parseInt(datos[2]['regular_total']);
    let enDesarrollo_m3_espol    = parseInt(datos[2]['enDesarrollo_espol']);
    let enDesarrollo_m3_admision = parseInt(datos[2]['enDesarrollo_admision']);
    let enDesarrollo_m3_total    = parseInt(datos[2]['enDesarrollo_total']);
    let desarrollado_m3_espol    = parseInt(datos[2]['desarrollado_espol']);
    let desarrollado_m3_admision = parseInt(datos[2]['desarrollado_admision']);
    let desarrollado_m3_total    = parseInt(datos[2]['desarrollado_total']);
    let excelente_m3_espol       = parseInt(datos[2]['excelente_espol']);
    let excelente_m3_admision    = parseInt(datos[2]['excelente_admision']);
    let excelente_m3_total       = parseInt(datos[2]['excelente_total']);
    let sinRespuesta_m3_espol    = parseInt(datos[2]['sinRespuesta_espol']);
    let sinRespuesta_m3_admision = parseInt(datos[2]['sinRespuesta_admision']);
    let sinRespuesta_m3_total    = parseInt(datos[2]['sinRespuesta_total']);

    let inicial_m4_espol         = parseInt(datos[3]['inicial_espol']);
    let inicial_m4_admision      = parseInt(datos[3]['inicial_admision']);
    let inicial_m4_total         = parseInt(datos[3]['inicial_total']);
    let regular_m4_espol         = parseInt(datos[3]['regular_espol']);
    let regular_m4_admision      = parseInt(datos[3]['regular_admision']);
    let regular_m4_total         = parseInt(datos[3]['regular_total']);
    let enDesarrollo_m4_espol    = parseInt(datos[3]['enDesarrollo_espol']);
    let enDesarrollo_m4_admision = parseInt(datos[3]['enDesarrollo_admision']);
    let enDesarrollo_m4_total    = parseInt(datos[3]['enDesarrollo_total']);
    let desarrollado_m4_espol    = parseInt(datos[3]['desarrollado_espol']);
    let desarrollado_m4_admision = parseInt(datos[3]['desarrollado_admision']);
    let desarrollado_m4_total    = parseInt(datos[3]['desarrollado_total']);
    let excelente_m4_espol       = parseInt(datos[3]['excelente_espol']);
    let excelente_m4_admision    = parseInt(datos[3]['excelente_admision']);
    let excelente_m4_total       = parseInt(datos[3]['excelente_total']);
    let sinRespuesta_m4_espol    = parseInt(datos[3]['sinRespuesta_espol']);
    let sinRespuesta_m4_admision = parseInt(datos[3]['sinRespuesta_admision']);
    let sinRespuesta_m4_total    = parseInt(datos[3]['sinRespuesta_total']);

    let inicial_m5_espol         = parseInt(datos[4]['inicial_espol']);
    let inicial_m5_admision      = parseInt(datos[4]['inicial_admision']);
    let inicial_m5_total         = parseInt(datos[4]['inicial_total']);
    let regular_m5_espol         = parseInt(datos[4]['regular_espol']);
    let regular_m5_admision      = parseInt(datos[4]['regular_admision']);
    let regular_m5_total         = parseInt(datos[4]['regular_total']);
    let enDesarrollo_m5_espol    = parseInt(datos[4]['enDesarrollo_espol']);
    let enDesarrollo_m5_admision = parseInt(datos[4]['enDesarrollo_admision']);
    let enDesarrollo_m5_total    = parseInt(datos[4]['enDesarrollo_total']);
    let desarrollado_m5_espol    = parseInt(datos[4]['desarrollado_espol']);
    let desarrollado_m5_admision = parseInt(datos[4]['desarrollado_admision']);
    let desarrollado_m5_total    = parseInt(datos[4]['desarrollado_total']);
    let excelente_m5_espol       = parseInt(datos[4]['excelente_espol']);
    let excelente_m5_admision    = parseInt(datos[4]['excelente_admision']);
    let excelente_m5_total       = parseInt(datos[4]['excelente_total']);
    let sinRespuesta_m5_espol    = parseInt(datos[4]['sinRespuesta_espol']);
    let sinRespuesta_m5_admision = parseInt(datos[4]['sinRespuesta_admision']);
    let sinRespuesta_m5_total    = parseInt(datos[4]['sinRespuesta_total']);

    let inicial_m6_espol         = parseInt(datos[5]['inicial_espol']);
    let inicial_m6_admision      = parseInt(datos[5]['inicial_admision']);
    let inicial_m6_total         = parseInt(datos[5]['inicial_total']);
    let regular_m6_espol         = parseInt(datos[5]['regular_espol']);
    let regular_m6_admision      = parseInt(datos[5]['regular_admision']);
    let regular_m6_total         = parseInt(datos[5]['regular_total']);
    let enDesarrollo_m6_espol    = parseInt(datos[5]['enDesarrollo_espol']);
    let enDesarrollo_m6_admision = parseInt(datos[5]['enDesarrollo_admision']);
    let enDesarrollo_m6_total    = parseInt(datos[5]['enDesarrollo_total']);
    let desarrollado_m6_espol    = parseInt(datos[5]['desarrollado_espol']);
    let desarrollado_m6_admision = parseInt(datos[5]['desarrollado_admision']);
    let desarrollado_m6_total    = parseInt(datos[5]['desarrollado_total']);
    let excelente_m6_espol       = parseInt(datos[5]['excelente_espol']);
    let excelente_m6_admision    = parseInt(datos[5]['excelente_admision']);
    let excelente_m6_total       = parseInt(datos[5]['excelente_total']);
    let sinRespuesta_m6_espol    = parseInt(datos[5]['sinRespuesta_espol']);
    let sinRespuesta_m6_admision = parseInt(datos[5]['sinRespuesta_admision']);
    let sinRespuesta_m6_total    = parseInt(datos[5]['sinRespuesta_total']);


    Highcharts.chart('grafico_barra_detalle_diagnostico_espol_tp', {
            title: {
                text: 'CURSO MOOC HCD COMPLETO ( ESPOL )'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['MODULO 1', 'MODULO 2', 'MODULO 3', 'MODULO 4', 'MODULO 5', 'MODULO 6'],
                title: {
                    text: null
                }
            },
            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {                            
                                return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'INICIAL (0 - 29 PUNTOS)',
                data: [inicial_m1_espol, inicial_m2_espol, inicial_m3_espol, inicial_m4_espol,inicial_m5_espol, inicial_m6_espol]
                }, {
                name: 'REGULAR (30 - 59 PUNTOS)',
                data: [regular_m1_espol, regular_m2_espol, regular_m3_espol, regular_m4_espol,regular_m5_espol, regular_m6_espol]
                }, {
                name: 'EN DESARROLLO (60 - 74 PUNTOS)',
                data: [enDesarrollo_m1_espol, enDesarrollo_m2_espol, enDesarrollo_m3_espol, enDesarrollo_m4_espol,enDesarrollo_m5_espol, enDesarrollo_m6_espol]
                } , {
                name: 'DESARROLLADO (75 - 89 PUNTOS)',
                data: [desarrollado_m1_espol, desarrollado_m2_espol, desarrollado_m3_espol, desarrollado_m4_espol,desarrollado_m5_espol, desarrollado_m6_espol]
                }, {
                name: 'EXCELENTE (90 - 100 PUNTOS)',
                data: [excelente_m1_espol, excelente_m2_espol, excelente_m3_espol, excelente_m4_espol,excelente_m5_espol, excelente_m6_espol]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function grafico_barra_detalle_diagnostico_admision_tp(datos){   

    let inicial_m1_espol         = parseInt(datos[0]['inicial_espol']);
    let inicial_m1_admision      = parseInt(datos[0]['inicial_admision']);
    let inicial_m1_total         = parseInt(datos[0]['inicial_total']);
    let regular_m1_espol         = parseInt(datos[0]['regular_espol']);
    let regular_m1_admision      = parseInt(datos[0]['regular_admision']);
    let regular_m1_total         = parseInt(datos[0]['regular_total']);
    let enDesarrollo_m1_espol    = parseInt(datos[0]['enDesarrollo_espol']);
    let enDesarrollo_m1_admision = parseInt(datos[0]['enDesarrollo_admision']);
    let enDesarrollo_m1_total    = parseInt(datos[0]['enDesarrollo_total']);
    let desarrollado_m1_espol    = parseInt(datos[0]['desarrollado_espol']);
    let desarrollado_m1_admision = parseInt(datos[0]['desarrollado_admision']);
    let desarrollado_m1_total    = parseInt(datos[0]['desarrollado_total']);
    let excelente_m1_espol       = parseInt(datos[0]['excelente_espol']);
    let excelente_m1_admision    = parseInt(datos[0]['excelente_admision']);
    let excelente_m1_total       = parseInt(datos[0]['excelente_total']);
    let sinRespuesta_m1_espol    = parseInt(datos[0]['sinRespuesta_espol']);
    let sinRespuesta_m1_admision = parseInt(datos[0]['sinRespuesta_admision']);
    let sinRespuesta_m1_total    = parseInt(datos[0]['sinRespuesta_total']);

    let inicial_m2_espol         = parseInt(datos[1]['inicial_espol']);
    let inicial_m2_admision      = parseInt(datos[1]['inicial_admision']);
    let inicial_m2_total         = parseInt(datos[1]['inicial_total']);
    let regular_m2_espol         = parseInt(datos[1]['regular_espol']);
    let regular_m2_admision      = parseInt(datos[1]['regular_admision']);
    let regular_m2_total         = parseInt(datos[1]['regular_total']);
    let enDesarrollo_m2_espol    = parseInt(datos[1]['enDesarrollo_espol']);
    let enDesarrollo_m2_admision = parseInt(datos[1]['enDesarrollo_admision']);
    let enDesarrollo_m2_total    = parseInt(datos[1]['enDesarrollo_total']);
    let desarrollado_m2_espol    = parseInt(datos[1]['desarrollado_espol']);
    let desarrollado_m2_admision = parseInt(datos[1]['desarrollado_admision']);
    let desarrollado_m2_total    = parseInt(datos[1]['desarrollado_total']);
    let excelente_m2_espol       = parseInt(datos[1]['excelente_espol']);
    let excelente_m2_admision    = parseInt(datos[1]['excelente_admision']);
    let excelente_m2_total       = parseInt(datos[1]['excelente_total']);
    let sinRespuesta_m2_espol    = parseInt(datos[1]['sinRespuesta_espol']);
    let sinRespuesta_m2_admision = parseInt(datos[1]['sinRespuesta_admision']);
    let sinRespuesta_m2_total    = parseInt(datos[1]['sinRespuesta_total']);

    let inicial_m3_espol         = parseInt(datos[2]['inicial_espol']);
    let inicial_m3_admision      = parseInt(datos[2]['inicial_admision']);
    let inicial_m3_total         = parseInt(datos[2]['inicial_total']);
    let regular_m3_espol         = parseInt(datos[2]['regular_espol']);
    let regular_m3_admision      = parseInt(datos[2]['regular_admision']);
    let regular_m3_total         = parseInt(datos[2]['regular_total']);
    let enDesarrollo_m3_espol    = parseInt(datos[2]['enDesarrollo_espol']);
    let enDesarrollo_m3_admision = parseInt(datos[2]['enDesarrollo_admision']);
    let enDesarrollo_m3_total    = parseInt(datos[2]['enDesarrollo_total']);
    let desarrollado_m3_espol    = parseInt(datos[2]['desarrollado_espol']);
    let desarrollado_m3_admision = parseInt(datos[2]['desarrollado_admision']);
    let desarrollado_m3_total    = parseInt(datos[2]['desarrollado_total']);
    let excelente_m3_espol       = parseInt(datos[2]['excelente_espol']);
    let excelente_m3_admision    = parseInt(datos[2]['excelente_admision']);
    let excelente_m3_total       = parseInt(datos[2]['excelente_total']);
    let sinRespuesta_m3_espol    = parseInt(datos[2]['sinRespuesta_espol']);
    let sinRespuesta_m3_admision = parseInt(datos[2]['sinRespuesta_admision']);
    let sinRespuesta_m3_total    = parseInt(datos[2]['sinRespuesta_total']);

    let inicial_m4_espol         = parseInt(datos[3]['inicial_espol']);
    let inicial_m4_admision      = parseInt(datos[3]['inicial_admision']);
    let inicial_m4_total         = parseInt(datos[3]['inicial_total']);
    let regular_m4_espol         = parseInt(datos[3]['regular_espol']);
    let regular_m4_admision      = parseInt(datos[3]['regular_admision']);
    let regular_m4_total         = parseInt(datos[3]['regular_total']);
    let enDesarrollo_m4_espol    = parseInt(datos[3]['enDesarrollo_espol']);
    let enDesarrollo_m4_admision = parseInt(datos[3]['enDesarrollo_admision']);
    let enDesarrollo_m4_total    = parseInt(datos[3]['enDesarrollo_total']);
    let desarrollado_m4_espol    = parseInt(datos[3]['desarrollado_espol']);
    let desarrollado_m4_admision = parseInt(datos[3]['desarrollado_admision']);
    let desarrollado_m4_total    = parseInt(datos[3]['desarrollado_total']);
    let excelente_m4_espol       = parseInt(datos[3]['excelente_espol']);
    let excelente_m4_admision    = parseInt(datos[3]['excelente_admision']);
    let excelente_m4_total       = parseInt(datos[3]['excelente_total']);
    let sinRespuesta_m4_espol    = parseInt(datos[3]['sinRespuesta_espol']);
    let sinRespuesta_m4_admision = parseInt(datos[3]['sinRespuesta_admision']);
    let sinRespuesta_m4_total    = parseInt(datos[3]['sinRespuesta_total']);

    let inicial_m5_espol         = parseInt(datos[4]['inicial_espol']);
    let inicial_m5_admision      = parseInt(datos[4]['inicial_admision']);
    let inicial_m5_total         = parseInt(datos[4]['inicial_total']);
    let regular_m5_espol         = parseInt(datos[4]['regular_espol']);
    let regular_m5_admision      = parseInt(datos[4]['regular_admision']);
    let regular_m5_total         = parseInt(datos[4]['regular_total']);
    let enDesarrollo_m5_espol    = parseInt(datos[4]['enDesarrollo_espol']);
    let enDesarrollo_m5_admision = parseInt(datos[4]['enDesarrollo_admision']);
    let enDesarrollo_m5_total    = parseInt(datos[4]['enDesarrollo_total']);
    let desarrollado_m5_espol    = parseInt(datos[4]['desarrollado_espol']);
    let desarrollado_m5_admision = parseInt(datos[4]['desarrollado_admision']);
    let desarrollado_m5_total    = parseInt(datos[4]['desarrollado_total']);
    let excelente_m5_espol       = parseInt(datos[4]['excelente_espol']);
    let excelente_m5_admision    = parseInt(datos[4]['excelente_admision']);
    let excelente_m5_total       = parseInt(datos[4]['excelente_total']);
    let sinRespuesta_m5_espol    = parseInt(datos[4]['sinRespuesta_espol']);
    let sinRespuesta_m5_admision = parseInt(datos[4]['sinRespuesta_admision']);
    let sinRespuesta_m5_total    = parseInt(datos[4]['sinRespuesta_total']);

    let inicial_m6_espol         = parseInt(datos[5]['inicial_espol']);
    let inicial_m6_admision      = parseInt(datos[5]['inicial_admision']);
    let inicial_m6_total         = parseInt(datos[5]['inicial_total']);
    let regular_m6_espol         = parseInt(datos[5]['regular_espol']);
    let regular_m6_admision      = parseInt(datos[5]['regular_admision']);
    let regular_m6_total         = parseInt(datos[5]['regular_total']);
    let enDesarrollo_m6_espol    = parseInt(datos[5]['enDesarrollo_espol']);
    let enDesarrollo_m6_admision = parseInt(datos[5]['enDesarrollo_admision']);
    let enDesarrollo_m6_total    = parseInt(datos[5]['enDesarrollo_total']);
    let desarrollado_m6_espol    = parseInt(datos[5]['desarrollado_espol']);
    let desarrollado_m6_admision = parseInt(datos[5]['desarrollado_admision']);
    let desarrollado_m6_total    = parseInt(datos[5]['desarrollado_total']);
    let excelente_m6_espol       = parseInt(datos[5]['excelente_espol']);
    let excelente_m6_admision    = parseInt(datos[5]['excelente_admision']);
    let excelente_m6_total       = parseInt(datos[5]['excelente_total']);
    let sinRespuesta_m6_espol    = parseInt(datos[5]['sinRespuesta_espol']);
    let sinRespuesta_m6_admision = parseInt(datos[5]['sinRespuesta_admision']);
    let sinRespuesta_m6_total    = parseInt(datos[5]['sinRespuesta_total']);


    Highcharts.chart('grafico_barra_detalle_diagnostico_admision_tp', {
            title: {
                text: 'CURSO MOOC HCD COMPLETO ( ADMISIONES )'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['MODULO 1', 'MODULO 2', 'MODULO 3', 'MODULO 4', 'MODULO 5', 'MODULO 6'],
                title: {
                    text: null
                }
            },
            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {                            
                                return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'INICIAL (0 - 29 PUNTOS)',
                data: [inicial_m1_admision, inicial_m2_admision, inicial_m3_admision, inicial_m4_admision,inicial_m5_admision, inicial_m6_admision]
                }, {
                name: 'REGULAR (30 - 59 PUNTOS)',
                data: [regular_m1_admision, regular_m2_admision, regular_m3_admision, regular_m4_admision,regular_m5_admision, regular_m6_admision]
                }, {
                name: 'EN DESARROLLO (60 - 74 PUNTOS)',
                data: [enDesarrollo_m1_admision, enDesarrollo_m2_admision, enDesarrollo_m3_admision, enDesarrollo_m4_admision,enDesarrollo_m5_admision, enDesarrollo_m6_admision]
                } , {
                name: 'DESARROLLADO (75 - 89 PUNTOS)',
                data: [desarrollado_m1_admision, desarrollado_m2_admision, desarrollado_m3_admision, desarrollado_m4_admision,desarrollado_m5_admision, desarrollado_m6_admision]
                }, {
                name: 'EXCELENTE (90 - 100 PUNTOS)',
                data: [excelente_m1_admision, excelente_m2_admision, excelente_m3_admision, excelente_m4_admision,excelente_m5_admision, excelente_m6_admision]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function barra_detalle_diagnostico_general_tp(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDiagnosticoEstudiantesTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function barra_detalle_diagnostico_espol_tp(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDiagnosticoEstudiantesTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function barra_detalle_diagnostico_admision_tp(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleDiagnosticoEstudiantesTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



///////////////////////////////////////////////////////////////////////pruebas de satisfaccion
function reportePruebaSatisfaccionAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=reportePruebaSatisfaccionAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaSatisfaccionAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos  + "</td>";
                    tabla += "<td align='center'>" + data[i].email  + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula  + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo   + "</td>";
                    tabla += "<td align='center'>" + data[i].edad   + "</td>";
                    tabla += "<td align='center'>" + data[i].colegio + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].R1 + "</td>";
                    tabla += "<td align='center'>" + data[i].R2_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R2_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R2_L3  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L3  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L4  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L5  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L6  + "</td>";
                    tabla += "<td align='center'>" + data[i].R4 + "</td>";
                    tabla += "<td align='center'>" + data[i].R5_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R5_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R6 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaSatisfaccionAdmisionP').dataTable().fnClearTable();
            $('#tablaPruebaSatisfaccionAdmisionP').dataTable().fnDestroy();
            $("#bodytablaPruebaSatisfaccionAdmisionP").html("");
            $("#tablaPruebaSatisfaccionAdmisionP").append(tabla);
            $('#tablaPruebaSatisfaccionAdmisionP').dataTable().
            $('#tablaPruebaSatisfaccionAdmisionP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePruebaSatisfaccionAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=reportePruebaSatisfaccionAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaSatisfaccionAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos  + "</td>";
                    tabla += "<td align='center'>" + data[i].email  + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula  + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo   + "</td>";
                    tabla += "<td align='center'>" + data[i].edad   + "</td>";
                    tabla += "<td align='center'>" + data[i].colegio + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L1 + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L3  + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L4  + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L5  + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L6  + "</td>";
                    tabla += "<td align='center'>" + data[i].R2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L3  + "</td>";
                    tabla += "<td align='center'>" + data[i].R4 + "</td>";
                    tabla += "<td align='center'>" + data[i].R5_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R5_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R6 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaSatisfaccionAdmisionTP').dataTable().fnClearTable();
            $('#tablaPruebaSatisfaccionAdmisionTP').dataTable().fnDestroy();
            $("#bodytablaPruebaSatisfaccionAdmisionTP").html("");
            $("#tablaPruebaSatisfaccionAdmisionTP").append(tabla);
            $('#tablaPruebaSatisfaccionAdmisionTP').dataTable().
            $('#tablaPruebaSatisfaccionAdmisionTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePruebaSatisfaccionEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=reportePruebaSatisfaccionEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaSatisfaccionEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos  + "</td>";
                    tabla += "<td align='center'>" + data[i].email  + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula  + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo   + "</td>";
                    tabla += "<td align='center'>" + data[i].edad   + "</td>";
                    tabla += "<td align='center'>" + data[i].colegio + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].R1 + "</td>";
                    tabla += "<td align='center'>" + data[i].R2_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R2_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R2_L3  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L3  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L4  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L5  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L6  + "</td>";
                    tabla += "<td align='center'>" + data[i].R4 + "</td>";
                    tabla += "<td align='center'>" + data[i].R5_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R5_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R6 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaSatisfaccionEspolP').dataTable().fnClearTable();
            $('#tablaPruebaSatisfaccionEspolP').dataTable().fnDestroy();
            $("#bodytablaPruebaSatisfaccionEspolP").html("");
            $("#tablaPruebaSatisfaccionEspolP").append(tabla);
            $('#tablaPruebaSatisfaccionEspolP').dataTable().
            $('#tablaPruebaSatisfaccionEspolP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePruebaSatisfaccionEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=reportePruebaSatisfaccionEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPruebaSatisfaccionEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos  + "</td>";
                    tabla += "<td align='center'>" + data[i].email  + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula  + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo   + "</td>";
                    tabla += "<td align='center'>" + data[i].edad   + "</td>";
                    tabla += "<td align='center'>" + data[i].colegio + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L1 + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L3  + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L4  + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L5  + "</td>";
                    tabla += "<td align='center'>" + data[i].R1_L6  + "</td>";
                    tabla += "<td align='center'>" + data[i].R2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R3_L3  + "</td>";
                    tabla += "<td align='center'>" + data[i].R4 + "</td>";
                    tabla += "<td align='center'>" + data[i].R5_L1  + "</td>";
                    tabla += "<td align='center'>" + data[i].R5_L2  + "</td>";
                    tabla += "<td align='center'>" + data[i].R6 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaPruebaSatisfaccionEspolTP').dataTable().fnClearTable();
            $('#tablaPruebaSatisfaccionEspolTP').dataTable().fnDestroy();
            $("#bodytablaPruebaSatisfaccionEspolTP").html("");
            $("#tablaPruebaSatisfaccionEspolTP").append(tabla);
            $('#tablaPruebaSatisfaccionEspolTP').dataTable().
            $('#tablaPruebaSatisfaccionEspolTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}


///////////////////////////////////////////////////////////////////////satisfaccion practico
function num_estudiantes_registrados_satisfaccion_p(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_p",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_p').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_p_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_p_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_p_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_p_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_p_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_p_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_p_espol_hombres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_p_espol_hombres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_p_espol_hombres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_p_espol_mujeres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_p_espol_mujeres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_p_espol_mujeres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_p_admision_hombres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_p_admision_hombres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_p_admision_hombres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_p_admision_mujeres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_p_admision_mujeres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_p_admision_mujeres').html(resp['estudiantes']);
        }    
    });
}

function detalleSatisfaccionR1P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR1P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR1P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol_m1  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m1     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m1   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m2  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m2     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m2   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m3  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m3     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m3   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m4  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m4     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m4   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m5  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m5     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m5   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m6  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m6     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m6   + "</td>";                                     
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR1P').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR1P').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR1P").html("");
            $("#tablaDetalleSatisfaccionR1P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R1P(datos){   

    let primer_dato_m1_Espol      = parseInt(datos[0]['espol_m1']);
    let primer_dato_m1_Admision   = parseInt(datos[0]['admision_m1']);
    let primer_dato_m2_Espol      = parseInt(datos[0]['espol_m2']);
    let primer_dato_m2_Admision   = parseInt(datos[0]['admision_m2']);
    let primer_dato_m3_Espol      = parseInt(datos[0]['espol_m3']);
    let primer_dato_m3_Admision   = parseInt(datos[0]['admision_m3']);
    let primer_dato_m4_Espol      = parseInt(datos[0]['espol_m4']);
    let primer_dato_m4_Admision   = parseInt(datos[0]['admision_m4']);
    let primer_dato_m5_Espol      = parseInt(datos[0]['espol_m5']);
    let primer_dato_m5_Admision   = parseInt(datos[0]['admision_m5']);
    let primer_dato_m6_Espol      = parseInt(datos[0]['espol_m6']);
    let primer_dato_m6_Admision   = parseInt(datos[0]['admision_m6']);

    let segundo_dato_m1_Espol      = parseInt(datos[1]['espol_m1']);
    let segundo_dato_m1_Admision   = parseInt(datos[1]['admision_m1']);
    let segundo_dato_m2_Espol      = parseInt(datos[1]['espol_m2']);
    let segundo_dato_m2_Admision   = parseInt(datos[1]['admision_m2']);
    let segundo_dato_m3_Espol      = parseInt(datos[1]['espol_m3']);
    let segundo_dato_m3_Admision   = parseInt(datos[1]['admision_m3']);
    let segundo_dato_m4_Espol      = parseInt(datos[1]['espol_m4']);
    let segundo_dato_m4_Admision   = parseInt(datos[1]['admision_m4']);
    let segundo_dato_m5_Espol      = parseInt(datos[1]['espol_m5']);
    let segundo_dato_m5_Admision   = parseInt(datos[1]['admision_m5']);
    let segundo_dato_m6_Espol      = parseInt(datos[1]['espol_m6']);
    let segundo_dato_m6_Admision   = parseInt(datos[1]['admision_m6']);

    let tercer_dato_m1_Espol      = parseInt(datos[2]['espol_m1']);
    let tercer_dato_m1_Admision   = parseInt(datos[2]['admision_m1']);
    let tercer_dato_m2_Espol      = parseInt(datos[2]['espol_m2']);
    let tercer_dato_m2_Admision   = parseInt(datos[2]['admision_m2']);
    let tercer_dato_m3_Espol      = parseInt(datos[2]['espol_m3']);
    let tercer_dato_m3_Admision   = parseInt(datos[2]['admision_m3']);
    let tercer_dato_m4_Espol      = parseInt(datos[2]['espol_m4']);
    let tercer_dato_m4_Admision   = parseInt(datos[2]['admision_m4']);
    let tercer_dato_m5_Espol      = parseInt(datos[2]['espol_m5']);
    let tercer_dato_m5_Admision   = parseInt(datos[2]['admision_m5']);
    let tercer_dato_m6_Espol      = parseInt(datos[2]['espol_m6']);
    let tercer_dato_m6_Admision   = parseInt(datos[2]['admision_m6']);

    let cuarto_dato_m1_Espol      = parseInt(datos[3]['espol_m1']);
    let cuarto_dato_m1_Admision   = parseInt(datos[3]['admision_m1']);
    let cuarto_dato_m2_Espol      = parseInt(datos[3]['espol_m2']);
    let cuarto_dato_m2_Admision   = parseInt(datos[3]['admision_m2']);
    let cuarto_dato_m3_Espol      = parseInt(datos[3]['espol_m3']);
    let cuarto_dato_m3_Admision   = parseInt(datos[3]['admision_m3']);
    let cuarto_dato_m4_Espol      = parseInt(datos[3]['espol_m4']);
    let cuarto_dato_m4_Admision   = parseInt(datos[3]['admision_m4']);
    let cuarto_dato_m5_Espol      = parseInt(datos[3]['espol_m5']);
    let cuarto_dato_m5_Admision   = parseInt(datos[3]['admision_m5']);
    let cuarto_dato_m6_Espol      = parseInt(datos[3]['espol_m6']);
    let cuarto_dato_m6_Admision   = parseInt(datos[3]['admision_m6']);

    let estudiantes_dato_m1_Espol      = parseInt(datos[4]['espol_m1']);
    let estudiantes_dato_m1_Admision   = parseInt(datos[4]['admision_m1']);
    let estudiantes_dato_m2_Espol      = parseInt(datos[4]['espol_m2']);
    let estudiantes_dato_m2_Admision   = parseInt(datos[4]['admision_m2']);
    let estudiantes_dato_m3_Espol      = parseInt(datos[4]['espol_m3']);
    let estudiantes_dato_m3_Admision   = parseInt(datos[4]['admision_m3']);
    let estudiantes_dato_m4_Espol      = parseInt(datos[4]['espol_m4']);
    let estudiantes_dato_m4_Admision   = parseInt(datos[4]['admision_m4']);
    let estudiantes_dato_m5_Espol      = parseInt(datos[4]['espol_m5']);
    let estudiantes_dato_m5_Admision   = parseInt(datos[4]['admision_m5']);
    let estudiantes_dato_m6_Espol      = parseInt(datos[4]['espol_m6']);
    let estudiantes_dato_m6_Admision   = parseInt(datos[4]['admision_m6']);

    let primer_dato_m1 = parseInt(datos[0]['total_m1']);
    let primer_dato_m2 = parseInt(datos[0]['total_m2']);
    let primer_dato_m3 = parseInt(datos[0]['total_m3']);
    let primer_dato_m4 = parseInt(datos[0]['total_m4']);
    let primer_dato_m5 = parseInt(datos[0]['total_m5']);
    let primer_dato_m6 = parseInt(datos[0]['total_m6']);

    let segundo_dato_m1 = parseInt(datos[1]['total_m1']);
    let segundo_dato_m2 = parseInt(datos[1]['total_m2']);
    let segundo_dato_m3 = parseInt(datos[1]['total_m3']);
    let segundo_dato_m4 = parseInt(datos[1]['total_m4']);
    let segundo_dato_m5 = parseInt(datos[1]['total_m5']);
    let segundo_dato_m6 = parseInt(datos[1]['total_m6']);

    let tercer_dato_m1 = parseInt(datos[2]['total_m1']);
    let tercer_dato_m2 = parseInt(datos[2]['total_m2']);
    let tercer_dato_m3 = parseInt(datos[2]['total_m3']);
    let tercer_dato_m4 = parseInt(datos[2]['total_m4']);
    let tercer_dato_m5 = parseInt(datos[2]['total_m5']);
    let tercer_dato_m6 = parseInt(datos[2]['total_m6']);

    let cuarto_dato_m1 = parseInt(datos[3]['total_m1']);
    let cuarto_dato_m2 = parseInt(datos[3]['total_m2']);
    let cuarto_dato_m3 = parseInt(datos[3]['total_m3']);
    let cuarto_dato_m4 = parseInt(datos[3]['total_m4']);
    let cuarto_dato_m5 = parseInt(datos[3]['total_m5']);
    let cuarto_dato_m6 = parseInt(datos[3]['total_m6']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R1P', {
            title: {
                text: 'CUAL ES EL PORCENTAJE DE CONOCIMIENTO QUE TE APORTO CADA MODULO (AGRUPADO POR MODULO)'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['25%', '50%', '75%', '100%'],
                title: {
                    text: null
                }
            },

            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {
                                if (point.series.name == 'Computador' || point.series.name == 'Internet' || point.series.name == 'PPT' || point.series.name == 'Word' || point.series.name == 'Excel' || point.series.name == 'Herramientas'){
                                    return 'Espol' + ': ' + point.y;
                                }
                                else
                                    return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true

            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'Computador',
                color: '#FFD966',
                id: 'computador',
                data: [primer_dato_m1_Espol, segundo_dato_m1_Espol, tercer_dato_m1_Espol, cuarto_dato_m1_Espol]
                }, {
                color: '#B08600',
                name: 'Admision',
                linkedTo: 'computador',
                data: [primer_dato_m1_Admision, segundo_dato_m1_Admision, tercer_dato_m1_Admision, cuarto_dato_m1_Admision]
                }, {
                color: '#7F6000',
                name: 'Total',
                linkedTo: 'computador',
                data: [primer_dato_m1, segundo_dato_m1, tercer_dato_m1, cuarto_dato_m1]
                } , {
                name: 'Internet',
                color: '#47CFFF',
                id: 'internet',
                data: [primer_dato_m2_Espol, segundo_dato_m2_Espol, tercer_dato_m2_Espol, cuarto_dato_m2_Espol]
                }, {
                color : '#00A1DA',
                name: 'Admision',
                linkedTo: 'internet',
                data: [primer_dato_m2_Admision, segundo_dato_m2_Admision, tercer_dato_m2_Admision, cuarto_dato_m2_Admision]
                }, {
                color: '#00729A',
                name: 'Total',
                linkedTo: 'internet',
                data: [primer_dato_m2, segundo_dato_m2, tercer_dato_m2, cuarto_dato_m2]
                }, {
                name: 'PPT',
                color: '#F8CBAD',
                id: 'ppt',
                data: [primer_dato_m3_Espol, segundo_dato_m3_Espol, tercer_dato_m3_Espol, cuarto_dato_m3_Espol]
                }, {
                color: '#F4B183',
                linkedTo: 'ppt',
                name: 'Admision',
                data: [primer_dato_m3_Admision, segundo_dato_m3_Admision, tercer_dato_m3_Admision, cuarto_dato_m3_Admision]
                }, {
                color: '#C55A11',
                name: 'Total',
                linkedTo: 'ppt',
                data: [primer_dato_m3, segundo_dato_m3, tercer_dato_m3, cuarto_dato_m3]
                }, {
                name: 'Excel',
                color: '#97E597',
                id: 'excel',
                data: [primer_dato_m4_Espol, segundo_dato_m4_Espol, tercer_dato_m4_Espol, cuarto_dato_m4_Espol]
                }, {
                color: '#4AD24A',
                linkedTo: 'excel',
                name: 'Admision',
                data: [primer_dato_m4_Admision, segundo_dato_m4_Admision, tercer_dato_m4_Admision, cuarto_dato_m4_Admision]
                }, {
                color: '#009900',
                name: 'Total',
                linkedTo: 'excel',
                data: [primer_dato_m4, segundo_dato_m4, tercer_dato_m4, cuarto_dato_m4]
                }, {
                name: 'Word',
                color: '#BDD7EE',
                id: 'word',
                data: [primer_dato_m5_Espol, segundo_dato_m5_Espol, tercer_dato_m5_Espol, cuarto_dato_m5_Espol]
                }, {
                color : '#9DC3E6',
                linkedTo: 'word',
                name: 'Admision',
                data: [primer_dato_m5_Admision, segundo_dato_m5_Admision, tercer_dato_m5_Admision, cuarto_dato_m5_Admision]
                }, {
                color: '#2E75B6',
                name: 'Total',
                linkedTo: 'word',
                data: [primer_dato_m5, segundo_dato_m5, tercer_dato_m5, cuarto_dato_m5]
                }, {
                name: 'Herramientas',
                color: '#C7A0E4',
                id: 'herramientas',
                data: [primer_dato_m6_Espol, segundo_dato_m6_Espol, tercer_dato_m6_Espol, cuarto_dato_m6_Espol]
                }, {
                color: '#9A57CD',
                linkedTo: 'herramientas',
                name: 'Admision',
                data: [primer_dato_m6_Admision, segundo_dato_m6_Admision, tercer_dato_m6_Admision, cuarto_dato_m6_Admision]
                }, {
                color: '#7030A0',
                name: 'Total',
                linkedTo: 'herramientas',
                data: [primer_dato_m6, segundo_dato_m6, tercer_dato_m6, cuarto_dato_m6]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function grafico_barra_detalle_satisfaccion_R1PEstudiantes(datos){   

    let primer_dato_m1_Espol      = parseInt(datos[0]['espol_m1']);
    let primer_dato_m1_Admision   = parseInt(datos[0]['admision_m1']);
    let primer_dato_m2_Espol      = parseInt(datos[0]['espol_m2']);
    let primer_dato_m2_Admision   = parseInt(datos[0]['admision_m2']);
    let primer_dato_m3_Espol      = parseInt(datos[0]['espol_m3']);
    let primer_dato_m3_Admision   = parseInt(datos[0]['admision_m3']);
    let primer_dato_m4_Espol      = parseInt(datos[0]['espol_m4']);
    let primer_dato_m4_Admision   = parseInt(datos[0]['admision_m4']);
    let primer_dato_m5_Espol      = parseInt(datos[0]['espol_m5']);
    let primer_dato_m5_Admision   = parseInt(datos[0]['admision_m5']);
    let primer_dato_m6_Espol      = parseInt(datos[0]['espol_m6']);
    let primer_dato_m6_Admision   = parseInt(datos[0]['admision_m6']);

    let segundo_dato_m1_Espol      = parseInt(datos[1]['espol_m1']);
    let segundo_dato_m1_Admision   = parseInt(datos[1]['admision_m1']);
    let segundo_dato_m2_Espol      = parseInt(datos[1]['espol_m2']);
    let segundo_dato_m2_Admision   = parseInt(datos[1]['admision_m2']);
    let segundo_dato_m3_Espol      = parseInt(datos[1]['espol_m3']);
    let segundo_dato_m3_Admision   = parseInt(datos[1]['admision_m3']);
    let segundo_dato_m4_Espol      = parseInt(datos[1]['espol_m4']);
    let segundo_dato_m4_Admision   = parseInt(datos[1]['admision_m4']);
    let segundo_dato_m5_Espol      = parseInt(datos[1]['espol_m5']);
    let segundo_dato_m5_Admision   = parseInt(datos[1]['admision_m5']);
    let segundo_dato_m6_Espol      = parseInt(datos[1]['espol_m6']);
    let segundo_dato_m6_Admision   = parseInt(datos[1]['admision_m6']);

    let tercer_dato_m1_Espol      = parseInt(datos[2]['espol_m1']);
    let tercer_dato_m1_Admision   = parseInt(datos[2]['admision_m1']);
    let tercer_dato_m2_Espol      = parseInt(datos[2]['espol_m2']);
    let tercer_dato_m2_Admision   = parseInt(datos[2]['admision_m2']);
    let tercer_dato_m3_Espol      = parseInt(datos[2]['espol_m3']);
    let tercer_dato_m3_Admision   = parseInt(datos[2]['admision_m3']);
    let tercer_dato_m4_Espol      = parseInt(datos[2]['espol_m4']);
    let tercer_dato_m4_Admision   = parseInt(datos[2]['admision_m4']);
    let tercer_dato_m5_Espol      = parseInt(datos[2]['espol_m5']);
    let tercer_dato_m5_Admision   = parseInt(datos[2]['admision_m5']);
    let tercer_dato_m6_Espol      = parseInt(datos[2]['espol_m6']);
    let tercer_dato_m6_Admision   = parseInt(datos[2]['admision_m6']);

    let cuarto_dato_m1_Espol      = parseInt(datos[3]['espol_m1']);
    let cuarto_dato_m1_Admision   = parseInt(datos[3]['admision_m1']);
    let cuarto_dato_m2_Espol      = parseInt(datos[3]['espol_m2']);
    let cuarto_dato_m2_Admision   = parseInt(datos[3]['admision_m2']);
    let cuarto_dato_m3_Espol      = parseInt(datos[3]['espol_m3']);
    let cuarto_dato_m3_Admision   = parseInt(datos[3]['admision_m3']);
    let cuarto_dato_m4_Espol      = parseInt(datos[3]['espol_m4']);
    let cuarto_dato_m4_Admision   = parseInt(datos[3]['admision_m4']);
    let cuarto_dato_m5_Espol      = parseInt(datos[3]['espol_m5']);
    let cuarto_dato_m5_Admision   = parseInt(datos[3]['admision_m5']);
    let cuarto_dato_m6_Espol      = parseInt(datos[3]['espol_m6']);
    let cuarto_dato_m6_Admision   = parseInt(datos[3]['admision_m6']);

    let estudiantes_dato_m1_Espol      = parseInt(datos[4]['espol_m1']);
    let estudiantes_dato_m1_Admision   = parseInt(datos[4]['admision_m1']);
    let estudiantes_dato_m2_Espol      = parseInt(datos[4]['espol_m2']);
    let estudiantes_dato_m2_Admision   = parseInt(datos[4]['admision_m2']);
    let estudiantes_dato_m3_Espol      = parseInt(datos[4]['espol_m3']);
    let estudiantes_dato_m3_Admision   = parseInt(datos[4]['admision_m3']);
    let estudiantes_dato_m4_Espol      = parseInt(datos[4]['espol_m4']);
    let estudiantes_dato_m4_Admision   = parseInt(datos[4]['admision_m4']);
    let estudiantes_dato_m5_Espol      = parseInt(datos[4]['espol_m5']);
    let estudiantes_dato_m5_Admision   = parseInt(datos[4]['admision_m5']);
    let estudiantes_dato_m6_Espol      = parseInt(datos[4]['espol_m6']);
    let estudiantes_dato_m6_Admision   = parseInt(datos[4]['admision_m6']);

    let primer_dato_m1 = parseInt(datos[0]['total_m1']);
    let primer_dato_m2 = parseInt(datos[0]['total_m2']);
    let primer_dato_m3 = parseInt(datos[0]['total_m3']);
    let primer_dato_m4 = parseInt(datos[0]['total_m4']);
    let primer_dato_m5 = parseInt(datos[0]['total_m5']);
    let primer_dato_m6 = parseInt(datos[0]['total_m6']);

    let segundo_dato_m1 = parseInt(datos[1]['total_m1']);
    let segundo_dato_m2 = parseInt(datos[1]['total_m2']);
    let segundo_dato_m3 = parseInt(datos[1]['total_m3']);
    let segundo_dato_m4 = parseInt(datos[1]['total_m4']);
    let segundo_dato_m5 = parseInt(datos[1]['total_m5']);
    let segundo_dato_m6 = parseInt(datos[1]['total_m6']);

    let tercer_dato_m1 = parseInt(datos[2]['total_m1']);
    let tercer_dato_m2 = parseInt(datos[2]['total_m2']);
    let tercer_dato_m3 = parseInt(datos[2]['total_m3']);
    let tercer_dato_m4 = parseInt(datos[2]['total_m4']);
    let tercer_dato_m5 = parseInt(datos[2]['total_m5']);
    let tercer_dato_m6 = parseInt(datos[2]['total_m6']);

    let cuarto_dato_m1 = parseInt(datos[3]['total_m1']);
    let cuarto_dato_m2 = parseInt(datos[3]['total_m2']);
    let cuarto_dato_m3 = parseInt(datos[3]['total_m3']);
    let cuarto_dato_m4 = parseInt(datos[3]['total_m4']);
    let cuarto_dato_m5 = parseInt(datos[3]['total_m5']);
    let cuarto_dato_m6 = parseInt(datos[3]['total_m6']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R1PEstudiantes', {
            title: {
                text: 'CUAL ES EL PORCENTAJE DE CONOCIMIENTO QUE TE APORTO CADA MODULO (AGRUPADO POR TIPO ESTUDIANTE)'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['25%', '50%', '75%', '100%'],
                title: {
                    text: null
                }
            },

            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {
                                if (point.series.name == 'Espol' || point.series.name == 'Admision' || point.series.name == 'Total'){
                                    return 'Computador' + ': ' + point.y;
                                }
                                else
                                    return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true

            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'Espol',
                color: '#FFD966',
                id: 'espol',
                data: [primer_dato_m1_Espol, segundo_dato_m1_Espol, tercer_dato_m1_Espol, cuarto_dato_m1_Espol]
                } , {
                name: 'Internet',
                color: '#47CFFF',
                linkedTo: 'espol',
                data: [primer_dato_m2_Espol, segundo_dato_m2_Espol, tercer_dato_m2_Espol, cuarto_dato_m2_Espol]
                }, {
                name: 'PPT',
                color: '#F8CBAD',
                linkedTo: 'espol',
                data: [primer_dato_m3_Espol, segundo_dato_m3_Espol, tercer_dato_m3_Espol, cuarto_dato_m3_Espol]
                }, {
                name: 'Excel',
                color: '#97E597',
                linkedTo: 'espol',
                data: [primer_dato_m4_Espol, segundo_dato_m4_Espol, tercer_dato_m4_Espol, cuarto_dato_m4_Espol]
                }, {
                name: 'Word',
                color: '#BDD7EE',
                linkedTo: 'espol',
                data: [primer_dato_m5_Espol, segundo_dato_m5_Espol, tercer_dato_m5_Espol, cuarto_dato_m5_Espol]
                }, {
                name: 'Herramientas',
                color: '#C7A0E4',
                linkedTo: 'espol',
                data: [primer_dato_m6_Espol, segundo_dato_m6_Espol, tercer_dato_m6_Espol, cuarto_dato_m6_Espol]
                }, {

                color: '#FFD966',
                name: 'Admision',
                id: 'admision',
                data: [primer_dato_m1_Admision, segundo_dato_m1_Admision, tercer_dato_m1_Admision, cuarto_dato_m1_Admision]
                }, {
                color : '#47CFFF',
                name: 'Internet',
                linkedTo: 'admision',
                data: [primer_dato_m2_Admision, segundo_dato_m2_Admision, tercer_dato_m2_Admision, cuarto_dato_m2_Admision]
                }, {
                color: '#F8CBAD',
                name: 'PPT',
                linkedTo: 'admision',                
                data: [primer_dato_m3_Admision, segundo_dato_m3_Admision, tercer_dato_m3_Admision, cuarto_dato_m3_Admision]
                }, {
                color: '#97E597',
                linkedTo: 'admision',
                name: 'Excel',
                data: [primer_dato_m4_Admision, segundo_dato_m4_Admision, tercer_dato_m4_Admision, cuarto_dato_m4_Admision]
                }, {
                color : '#BDD7EE',
                linkedTo: 'admision',
                name: 'Word',
                data: [primer_dato_m5_Admision, segundo_dato_m5_Admision, tercer_dato_m5_Admision, cuarto_dato_m5_Admision]
                }, {
                color: '#C7A0E4',
                linkedTo: 'admision',
                name: 'Herramientas',
                data: [primer_dato_m6_Admision, segundo_dato_m6_Admision, tercer_dato_m6_Admision, cuarto_dato_m6_Admision]
                }, {

                color: '#FFD966',
                name: 'Total',
                id: 'total',
                data: [primer_dato_m1, segundo_dato_m1, tercer_dato_m1, cuarto_dato_m1]
                }, {
                color: '#47CFFF',
                name: 'Internet',
                linkedTo: 'total',
                data: [primer_dato_m2, segundo_dato_m2, tercer_dato_m2, cuarto_dato_m2]
                }, {
                color: '#F8CBAD',
                name: 'PPT',
                linkedTo: 'total',
                data: [primer_dato_m3, segundo_dato_m3, tercer_dato_m3, cuarto_dato_m3]
                }, {
                color: '#97E597',
                name: 'Excel',
                linkedTo: 'total',
                data: [primer_dato_m4, segundo_dato_m4, tercer_dato_m4, cuarto_dato_m4]
                }, {
                color: '#BDD7EE',
                name: 'Word',
                linkedTo: 'total',
                data: [primer_dato_m5, segundo_dato_m5, tercer_dato_m5, cuarto_dato_m5]
                }, {
                color: '#C7A0E4',
                name: 'Herramientas',
                linkedTo: 'total',
                data: [primer_dato_m6, segundo_dato_m6, tercer_dato_m6, cuarto_dato_m6]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function barra_detalle_satisfaccion_R1P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR1P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function barra_detalle_satisfaccion_R1PEstudiantes(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR1P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR2P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR2P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR2P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR2P').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR2P').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR2P").html("");
            $("#tablaDetalleSatisfaccionR2P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R2P(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);
    let quinto_dato_Espol    = parseInt(datos[4]['espol']);
    let quinto_dato_Admision = parseInt(datos[4]['admision']);

    let estudiantes_espol    = parseInt(datos[5]['espol']);
    let estudiantes_admision = parseInt(datos[5]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R2P', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'CUANTO TIEMPO LE DEDICAS AL MOOC HCD POR SEMANA'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'DE 1 A 3 HORAS',
                'DE 4 A 6 HORAS',
                'DE 7 A 9 HORAS',
                'NO LE DEDICO TIEMPO',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol, quinto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision, quinto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R2P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR2P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR3L1P(){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L1P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR3L1P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR3L1P').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR3L1P').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR3L1P").html("");
            $("#tablaDetalleSatisfaccionR3L1P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R3L1P(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R3L1P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿TENIAS CONOCIMIENTOS DE LAS FECHAS IMPORTANTES DEL MOOC HCD?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'SI',
                'NO',
                'MAS O MENOS',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R3L1P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L1P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR3L2P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L2P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR3L2P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR3L2P').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR3L2P').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR3L2P").html("");
            $("#tablaDetalleSatisfaccionR3L2P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R3L2P(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R3L2P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿SABIAS ACERCA DEL PROCESO Y POLITICAS DE APROBACION DEL MOOC HCD?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'SI',
                'NO',
                'MAS O MENOS',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R3L2P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L2P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR3L3P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L3P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR3L3P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR3L3P').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR3L3P').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR3L3P").html("");
            $("#tablaDetalleSatisfaccionR3L3P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R3L3P(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R3L3P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿INGRESASTE A LA PESTAÑA "PREGUNTA FRECUENTE" DEL MOOC HCD?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'SI',
                'NO',
                'MAS O MENOS',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R3L3P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L3P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR4P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR4P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR4P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR4P').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR4P').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR4P").html("");
            $("#tablaDetalleSatisfaccionR4P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R4P(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);
    let quinto_dato_Espol    = parseInt(datos[4]['espol']);
    let quinto_dato_Admision = parseInt(datos[4]['admision']);
    let sexto_dato_Espol    = parseInt(datos[5]['espol']);
    let sexto_dato_Admision = parseInt(datos[5]['admision']);

    let estudiantes_espol    = parseInt(datos[6]['espol']);
    let estudiantes_admision = parseInt(datos[6]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R4P', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'A TRAVES DE QUE MEDIO DE COMUNICACION REALIZAS CON MAS FRECUENCIAS TUS CONSULTAS O REPORTAS TUS PROBLEMAS CON LA PLATAFORMA'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'FORO',
                'TWITTER',
                'CORREO',
                'LLAMADAS TELEFONICAS',
                'CITA PRESENCIAL',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol, quinto_dato_Espol, sexto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision, quinto_dato_Admision, sexto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R4P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR4P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR5L1P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR5L1P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR5L1P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR5L1P').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR5L1P').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR5L1P").html("");
            $("#tablaDetalleSatisfaccionR5L1P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R5L1P(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R5L1P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿LA RESPUESTA RECIBIDA POR PARTE DEL EQUIPO MOOC HCD FUE CLARA Y ENTENDIBLE?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'TOTALMENTE SATISFECHO',
                'PARCIALMENTE SATISFECHO',
                'NADA SATISFECHO',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R5L1P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR5L1P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR5L2P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR5L2P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR5L2P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR5L2P').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR5L2P').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR5L2P").html("");
            $("#tablaDetalleSatisfaccionR5L2P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R5L2P(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R5L2P', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿SU CONSULTA O REQUERIMIENTO FUE SOLUCIONADO EFICAZMENTE?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'TOTALMENTE SATISFECHO',
                'PARCIALMENTE SATISFECHO',
                'NADA SATISFECHO',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R5L2P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR5L2P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR6P(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR6P",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR6P').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR6P').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR6P').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR6P").html("");
            $("#tablaDetalleSatisfaccionR6P").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R6P(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);
    let quinto_dato_Espol    = parseInt(datos[4]['espol']);
    let quinto_dato_Admision = parseInt(datos[4]['admision']);
    let sexto_dato_Espol    = parseInt(datos[5]['espol']);
    let sexto_dato_Admision = parseInt(datos[5]['admision']);

    let estudiantes_espol    = parseInt(datos[6]['espol']);
    let estudiantes_admision = parseInt(datos[6]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R6P', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'ESCOJA EL RANGO DE TIEMPO EN QUE SUS CONSULTAS O PROBLEMAS FUERON ATENDIDOS'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                poinPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                '5 A 10 MINUTOS',
                '15 A 30 MINUTOS',
                '1 A 2 HORAS',
                '3 A 5 HORAS',
                '1 A 2 DIAS',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol, quinto_dato_Espol, sexto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision, quinto_dato_Admision, sexto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R6P(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR6P",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}




///////////////////////////////////////////////////////////////////////satisfaccion teorico practico
function num_estudiantes_registrados_satisfaccion_tp(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_tp",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_tp').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_tp_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_tp_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_tp_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_tp_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_tp_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_tp_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_tp_espol_hombres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_tp_espol_hombres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_tp_espol_hombres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_tp_espol_mujeres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_tp_espol_mujeres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_tp_espol_mujeres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_tp_admision_hombres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_tp_admision_hombres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_tp_admision_hombres').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_satisfaccion_tp_admision_mujeres(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=num_estudiantes_registrados_satisfaccion_tp_admision_mujeres",
        success: function(resp){        
            $('#dh_estudiantes_registrados_satisfaccion_tp_admision_mujeres').html(resp['estudiantes']);
        }    
    });
}

function detalleSatisfaccionR1TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR1TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR1TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol_m1  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m1     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m1   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m2  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m2     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m2   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m3  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m3     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m3   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m4  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m4     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m4   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m5  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m5     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m5   + "</td>"; 
                    tabla += "<td align='center'>" + data[i].espol_m6  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision_m6     + "</td>";
                    tabla += "<td align='center'>" + data[i].total_m6   + "</td>";                                     
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR1TP').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR1TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR1TP").html("");
            $("#tablaDetalleSatisfaccionR1TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R1TP(datos){   

    let primer_dato_m1_Espol      = parseInt(datos[0]['espol_m1']);
    let primer_dato_m1_Admision   = parseInt(datos[0]['admision_m1']);
    let primer_dato_m2_Espol      = parseInt(datos[0]['espol_m2']);
    let primer_dato_m2_Admision   = parseInt(datos[0]['admision_m2']);
    let primer_dato_m3_Espol      = parseInt(datos[0]['espol_m3']);
    let primer_dato_m3_Admision   = parseInt(datos[0]['admision_m3']);
    let primer_dato_m4_Espol      = parseInt(datos[0]['espol_m4']);
    let primer_dato_m4_Admision   = parseInt(datos[0]['admision_m4']);
    let primer_dato_m5_Espol      = parseInt(datos[0]['espol_m5']);
    let primer_dato_m5_Admision   = parseInt(datos[0]['admision_m5']);
    let primer_dato_m6_Espol      = parseInt(datos[0]['espol_m6']);
    let primer_dato_m6_Admision   = parseInt(datos[0]['admision_m6']);

    let segundo_dato_m1_Espol      = parseInt(datos[1]['espol_m1']);
    let segundo_dato_m1_Admision   = parseInt(datos[1]['admision_m1']);
    let segundo_dato_m2_Espol      = parseInt(datos[1]['espol_m2']);
    let segundo_dato_m2_Admision   = parseInt(datos[1]['admision_m2']);
    let segundo_dato_m3_Espol      = parseInt(datos[1]['espol_m3']);
    let segundo_dato_m3_Admision   = parseInt(datos[1]['admision_m3']);
    let segundo_dato_m4_Espol      = parseInt(datos[1]['espol_m4']);
    let segundo_dato_m4_Admision   = parseInt(datos[1]['admision_m4']);
    let segundo_dato_m5_Espol      = parseInt(datos[1]['espol_m5']);
    let segundo_dato_m5_Admision   = parseInt(datos[1]['admision_m5']);
    let segundo_dato_m6_Espol      = parseInt(datos[1]['espol_m6']);
    let segundo_dato_m6_Admision   = parseInt(datos[1]['admision_m6']);

    let tercer_dato_m1_Espol      = parseInt(datos[2]['espol_m1']);
    let tercer_dato_m1_Admision   = parseInt(datos[2]['admision_m1']);
    let tercer_dato_m2_Espol      = parseInt(datos[2]['espol_m2']);
    let tercer_dato_m2_Admision   = parseInt(datos[2]['admision_m2']);
    let tercer_dato_m3_Espol      = parseInt(datos[2]['espol_m3']);
    let tercer_dato_m3_Admision   = parseInt(datos[2]['admision_m3']);
    let tercer_dato_m4_Espol      = parseInt(datos[2]['espol_m4']);
    let tercer_dato_m4_Admision   = parseInt(datos[2]['admision_m4']);
    let tercer_dato_m5_Espol      = parseInt(datos[2]['espol_m5']);
    let tercer_dato_m5_Admision   = parseInt(datos[2]['admision_m5']);
    let tercer_dato_m6_Espol      = parseInt(datos[2]['espol_m6']);
    let tercer_dato_m6_Admision   = parseInt(datos[2]['admision_m6']);

    let cuarto_dato_m1_Espol      = parseInt(datos[3]['espol_m1']);
    let cuarto_dato_m1_Admision   = parseInt(datos[3]['admision_m1']);
    let cuarto_dato_m2_Espol      = parseInt(datos[3]['espol_m2']);
    let cuarto_dato_m2_Admision   = parseInt(datos[3]['admision_m2']);
    let cuarto_dato_m3_Espol      = parseInt(datos[3]['espol_m3']);
    let cuarto_dato_m3_Admision   = parseInt(datos[3]['admision_m3']);
    let cuarto_dato_m4_Espol      = parseInt(datos[3]['espol_m4']);
    let cuarto_dato_m4_Admision   = parseInt(datos[3]['admision_m4']);
    let cuarto_dato_m5_Espol      = parseInt(datos[3]['espol_m5']);
    let cuarto_dato_m5_Admision   = parseInt(datos[3]['admision_m5']);
    let cuarto_dato_m6_Espol      = parseInt(datos[3]['espol_m6']);
    let cuarto_dato_m6_Admision   = parseInt(datos[3]['admision_m6']);

    let estudiantes_dato_m1_Espol      = parseInt(datos[4]['espol_m1']);
    let estudiantes_dato_m1_Admision   = parseInt(datos[4]['admision_m1']);
    let estudiantes_dato_m2_Espol      = parseInt(datos[4]['espol_m2']);
    let estudiantes_dato_m2_Admision   = parseInt(datos[4]['admision_m2']);
    let estudiantes_dato_m3_Espol      = parseInt(datos[4]['espol_m3']);
    let estudiantes_dato_m3_Admision   = parseInt(datos[4]['admision_m3']);
    let estudiantes_dato_m4_Espol      = parseInt(datos[4]['espol_m4']);
    let estudiantes_dato_m4_Admision   = parseInt(datos[4]['admision_m4']);
    let estudiantes_dato_m5_Espol      = parseInt(datos[4]['espol_m5']);
    let estudiantes_dato_m5_Admision   = parseInt(datos[4]['admision_m5']);
    let estudiantes_dato_m6_Espol      = parseInt(datos[4]['espol_m6']);
    let estudiantes_dato_m6_Admision   = parseInt(datos[4]['admision_m6']);

    let primer_dato_m1 = parseInt(datos[0]['total_m1']);
    let primer_dato_m2 = parseInt(datos[0]['total_m2']);
    let primer_dato_m3 = parseInt(datos[0]['total_m3']);
    let primer_dato_m4 = parseInt(datos[0]['total_m4']);
    let primer_dato_m5 = parseInt(datos[0]['total_m5']);
    let primer_dato_m6 = parseInt(datos[0]['total_m6']);

    let segundo_dato_m1 = parseInt(datos[1]['total_m1']);
    let segundo_dato_m2 = parseInt(datos[1]['total_m2']);
    let segundo_dato_m3 = parseInt(datos[1]['total_m3']);
    let segundo_dato_m4 = parseInt(datos[1]['total_m4']);
    let segundo_dato_m5 = parseInt(datos[1]['total_m5']);
    let segundo_dato_m6 = parseInt(datos[1]['total_m6']);

    let tercer_dato_m1 = parseInt(datos[2]['total_m1']);
    let tercer_dato_m2 = parseInt(datos[2]['total_m2']);
    let tercer_dato_m3 = parseInt(datos[2]['total_m3']);
    let tercer_dato_m4 = parseInt(datos[2]['total_m4']);
    let tercer_dato_m5 = parseInt(datos[2]['total_m5']);
    let tercer_dato_m6 = parseInt(datos[2]['total_m6']);

    let cuarto_dato_m1 = parseInt(datos[3]['total_m1']);
    let cuarto_dato_m2 = parseInt(datos[3]['total_m2']);
    let cuarto_dato_m3 = parseInt(datos[3]['total_m3']);
    let cuarto_dato_m4 = parseInt(datos[3]['total_m4']);
    let cuarto_dato_m5 = parseInt(datos[3]['total_m5']);
    let cuarto_dato_m6 = parseInt(datos[3]['total_m6']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R1TP', {
            title: {
                text: 'CUAL ES EL PORCENTAJE DE CONOCIMIENTO QUE TE APORTO CADA MODULO (AGRUPADO POR MODULO)'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['25%', '50%', '75%', '100%'],
                title: {
                    text: null
                }
            },

            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {
                                if (point.series.name == 'Computador' || point.series.name == 'Internet' || point.series.name == 'PPT' || point.series.name == 'Word' || point.series.name == 'Excel' || point.series.name == 'Herramientas'){
                                    return 'Espol' + ': ' + point.y;
                                }
                                else
                                    return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true

            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'Computador',
                color: '#FFD966',
                id: 'computador',
                data: [primer_dato_m1_Espol, segundo_dato_m1_Espol, tercer_dato_m1_Espol, cuarto_dato_m1_Espol]
                }, {
                color: '#B08600',
                name: 'Admision',
                linkedTo: 'computador',
                data: [primer_dato_m1_Admision, segundo_dato_m1_Admision, tercer_dato_m1_Admision, cuarto_dato_m1_Admision]
                }, {
                color: '#7F6000',
                name: 'Total',
                linkedTo: 'computador',
                data: [primer_dato_m1, segundo_dato_m1, tercer_dato_m1, cuarto_dato_m1]
                } , {
                name: 'Internet',
                color: '#47CFFF',
                id: 'internet',
                data: [primer_dato_m2_Espol, segundo_dato_m2_Espol, tercer_dato_m2_Espol, cuarto_dato_m2_Espol]
                }, {
                color : '#00A1DA',
                name: 'Admision',
                linkedTo: 'internet',
                data: [primer_dato_m2_Admision, segundo_dato_m2_Admision, tercer_dato_m2_Admision, cuarto_dato_m2_Admision]
                }, {
                color: '#00729A',
                name: 'Total',
                linkedTo: 'internet',
                data: [primer_dato_m2, segundo_dato_m2, tercer_dato_m2, cuarto_dato_m2]
                }, {
                name: 'PPT',
                color: '#F8CBAD',
                id: 'ppt',
                data: [primer_dato_m3_Espol, segundo_dato_m3_Espol, tercer_dato_m3_Espol, cuarto_dato_m3_Espol]
                }, {
                color: '#F4B183',
                linkedTo: 'ppt',
                name: 'Admision',
                data: [primer_dato_m3_Admision, segundo_dato_m3_Admision, tercer_dato_m3_Admision, cuarto_dato_m3_Admision]
                }, {
                color: '#C55A11',
                name: 'Total',
                linkedTo: 'ppt',
                data: [primer_dato_m3, segundo_dato_m3, tercer_dato_m3, cuarto_dato_m3]
                }, {
                name: 'Excel',
                color: '#97E597',
                id: 'excel',
                data: [primer_dato_m4_Espol, segundo_dato_m4_Espol, tercer_dato_m4_Espol, cuarto_dato_m4_Espol]
                }, {
                color: '#4AD24A',
                linkedTo: 'excel',
                name: 'Admision',
                data: [primer_dato_m4_Admision, segundo_dato_m4_Admision, tercer_dato_m4_Admision, cuarto_dato_m4_Admision]
                }, {
                color: '#009900',
                name: 'Total',
                linkedTo: 'excel',
                data: [primer_dato_m4, segundo_dato_m4, tercer_dato_m4, cuarto_dato_m4]
                }, {
                name: 'Word',
                color: '#BDD7EE',
                id: 'word',
                data: [primer_dato_m5_Espol, segundo_dato_m5_Espol, tercer_dato_m5_Espol, cuarto_dato_m5_Espol]
                }, {
                color : '#9DC3E6',
                linkedTo: 'word',
                name: 'Admision',
                data: [primer_dato_m5_Admision, segundo_dato_m5_Admision, tercer_dato_m5_Admision, cuarto_dato_m5_Admision]
                }, {
                color: '#2E75B6',
                name: 'Total',
                linkedTo: 'word',
                data: [primer_dato_m5, segundo_dato_m5, tercer_dato_m5, cuarto_dato_m5]
                }, {
                name: 'Herramientas',
                color: '#C7A0E4',
                id: 'herramientas',
                data: [primer_dato_m6_Espol, segundo_dato_m6_Espol, tercer_dato_m6_Espol, cuarto_dato_m6_Espol]
                }, {
                color: '#9A57CD',
                linkedTo: 'herramientas',
                name: 'Admision',
                data: [primer_dato_m6_Admision, segundo_dato_m6_Admision, tercer_dato_m6_Admision, cuarto_dato_m6_Admision]
                }, {
                color: '#7030A0',
                name: 'Total',
                linkedTo: 'herramientas',
                data: [primer_dato_m6, segundo_dato_m6, tercer_dato_m6, cuarto_dato_m6]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function grafico_barra_detalle_satisfaccion_R1TPEstudiantes(datos){   

    let primer_dato_m1_Espol      = parseInt(datos[0]['espol_m1']);
    let primer_dato_m1_Admision   = parseInt(datos[0]['admision_m1']);
    let primer_dato_m2_Espol      = parseInt(datos[0]['espol_m2']);
    let primer_dato_m2_Admision   = parseInt(datos[0]['admision_m2']);
    let primer_dato_m3_Espol      = parseInt(datos[0]['espol_m3']);
    let primer_dato_m3_Admision   = parseInt(datos[0]['admision_m3']);
    let primer_dato_m4_Espol      = parseInt(datos[0]['espol_m4']);
    let primer_dato_m4_Admision   = parseInt(datos[0]['admision_m4']);
    let primer_dato_m5_Espol      = parseInt(datos[0]['espol_m5']);
    let primer_dato_m5_Admision   = parseInt(datos[0]['admision_m5']);
    let primer_dato_m6_Espol      = parseInt(datos[0]['espol_m6']);
    let primer_dato_m6_Admision   = parseInt(datos[0]['admision_m6']);

    let segundo_dato_m1_Espol      = parseInt(datos[1]['espol_m1']);
    let segundo_dato_m1_Admision   = parseInt(datos[1]['admision_m1']);
    let segundo_dato_m2_Espol      = parseInt(datos[1]['espol_m2']);
    let segundo_dato_m2_Admision   = parseInt(datos[1]['admision_m2']);
    let segundo_dato_m3_Espol      = parseInt(datos[1]['espol_m3']);
    let segundo_dato_m3_Admision   = parseInt(datos[1]['admision_m3']);
    let segundo_dato_m4_Espol      = parseInt(datos[1]['espol_m4']);
    let segundo_dato_m4_Admision   = parseInt(datos[1]['admision_m4']);
    let segundo_dato_m5_Espol      = parseInt(datos[1]['espol_m5']);
    let segundo_dato_m5_Admision   = parseInt(datos[1]['admision_m5']);
    let segundo_dato_m6_Espol      = parseInt(datos[1]['espol_m6']);
    let segundo_dato_m6_Admision   = parseInt(datos[1]['admision_m6']);

    let tercer_dato_m1_Espol      = parseInt(datos[2]['espol_m1']);
    let tercer_dato_m1_Admision   = parseInt(datos[2]['admision_m1']);
    let tercer_dato_m2_Espol      = parseInt(datos[2]['espol_m2']);
    let tercer_dato_m2_Admision   = parseInt(datos[2]['admision_m2']);
    let tercer_dato_m3_Espol      = parseInt(datos[2]['espol_m3']);
    let tercer_dato_m3_Admision   = parseInt(datos[2]['admision_m3']);
    let tercer_dato_m4_Espol      = parseInt(datos[2]['espol_m4']);
    let tercer_dato_m4_Admision   = parseInt(datos[2]['admision_m4']);
    let tercer_dato_m5_Espol      = parseInt(datos[2]['espol_m5']);
    let tercer_dato_m5_Admision   = parseInt(datos[2]['admision_m5']);
    let tercer_dato_m6_Espol      = parseInt(datos[2]['espol_m6']);
    let tercer_dato_m6_Admision   = parseInt(datos[2]['admision_m6']);

    let cuarto_dato_m1_Espol      = parseInt(datos[3]['espol_m1']);
    let cuarto_dato_m1_Admision   = parseInt(datos[3]['admision_m1']);
    let cuarto_dato_m2_Espol      = parseInt(datos[3]['espol_m2']);
    let cuarto_dato_m2_Admision   = parseInt(datos[3]['admision_m2']);
    let cuarto_dato_m3_Espol      = parseInt(datos[3]['espol_m3']);
    let cuarto_dato_m3_Admision   = parseInt(datos[3]['admision_m3']);
    let cuarto_dato_m4_Espol      = parseInt(datos[3]['espol_m4']);
    let cuarto_dato_m4_Admision   = parseInt(datos[3]['admision_m4']);
    let cuarto_dato_m5_Espol      = parseInt(datos[3]['espol_m5']);
    let cuarto_dato_m5_Admision   = parseInt(datos[3]['admision_m5']);
    let cuarto_dato_m6_Espol      = parseInt(datos[3]['espol_m6']);
    let cuarto_dato_m6_Admision   = parseInt(datos[3]['admision_m6']);

    let estudiantes_dato_m1_Espol      = parseInt(datos[4]['espol_m1']);
    let estudiantes_dato_m1_Admision   = parseInt(datos[4]['admision_m1']);
    let estudiantes_dato_m2_Espol      = parseInt(datos[4]['espol_m2']);
    let estudiantes_dato_m2_Admision   = parseInt(datos[4]['admision_m2']);
    let estudiantes_dato_m3_Espol      = parseInt(datos[4]['espol_m3']);
    let estudiantes_dato_m3_Admision   = parseInt(datos[4]['admision_m3']);
    let estudiantes_dato_m4_Espol      = parseInt(datos[4]['espol_m4']);
    let estudiantes_dato_m4_Admision   = parseInt(datos[4]['admision_m4']);
    let estudiantes_dato_m5_Espol      = parseInt(datos[4]['espol_m5']);
    let estudiantes_dato_m5_Admision   = parseInt(datos[4]['admision_m5']);
    let estudiantes_dato_m6_Espol      = parseInt(datos[4]['espol_m6']);
    let estudiantes_dato_m6_Admision   = parseInt(datos[4]['admision_m6']);

    let primer_dato_m1 = parseInt(datos[0]['total_m1']);
    let primer_dato_m2 = parseInt(datos[0]['total_m2']);
    let primer_dato_m3 = parseInt(datos[0]['total_m3']);
    let primer_dato_m4 = parseInt(datos[0]['total_m4']);
    let primer_dato_m5 = parseInt(datos[0]['total_m5']);
    let primer_dato_m6 = parseInt(datos[0]['total_m6']);

    let segundo_dato_m1 = parseInt(datos[1]['total_m1']);
    let segundo_dato_m2 = parseInt(datos[1]['total_m2']);
    let segundo_dato_m3 = parseInt(datos[1]['total_m3']);
    let segundo_dato_m4 = parseInt(datos[1]['total_m4']);
    let segundo_dato_m5 = parseInt(datos[1]['total_m5']);
    let segundo_dato_m6 = parseInt(datos[1]['total_m6']);

    let tercer_dato_m1 = parseInt(datos[2]['total_m1']);
    let tercer_dato_m2 = parseInt(datos[2]['total_m2']);
    let tercer_dato_m3 = parseInt(datos[2]['total_m3']);
    let tercer_dato_m4 = parseInt(datos[2]['total_m4']);
    let tercer_dato_m5 = parseInt(datos[2]['total_m5']);
    let tercer_dato_m6 = parseInt(datos[2]['total_m6']);

    let cuarto_dato_m1 = parseInt(datos[3]['total_m1']);
    let cuarto_dato_m2 = parseInt(datos[3]['total_m2']);
    let cuarto_dato_m3 = parseInt(datos[3]['total_m3']);
    let cuarto_dato_m4 = parseInt(datos[3]['total_m4']);
    let cuarto_dato_m5 = parseInt(datos[3]['total_m5']);
    let cuarto_dato_m6 = parseInt(datos[3]['total_m6']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R1TPEstudiantes', {
            title: {
                text: 'CUAL ES EL PORCENTAJE DE CONOCIMIENTO QUE TE APORTO CADA MODULO (AGRUPADO POR TIPO ESTUDIANTE)'
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Numero de Estudiantes'
                },
                tickInterval: 10, 
                labels: {
                    overflow: 'justify'
                }
            },
            xAxis: {
                categories: ['25%', '50%', '75%', '100%'],
                title: {
                    text: null
                }
            },

            tooltip: {
                formatter: function () {
                    // The first returned item is the header, subsequent items are the points
                    return ['<b>' + this.x + '</b>'].concat(
                        this.points ?
                            this.points.map(function (point) {
                                if (point.series.name == 'Espol' || point.series.name == 'Admision' || point.series.name == 'Total'){
                                    return 'Computador' + ': ' + point.y;
                                }
                                else
                                    return point.series.name + ': ' + point.y;
                            }) : []
                    );
                },
                split: true

            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false 
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                        },

                },
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'Espol',
                color: '#FFD966',
                id: 'espol',
                data: [primer_dato_m1_Espol, segundo_dato_m1_Espol, tercer_dato_m1_Espol, cuarto_dato_m1_Espol]
                } , {
                name: 'Internet',
                color: '#47CFFF',
                linkedTo: 'espol',
                data: [primer_dato_m2_Espol, segundo_dato_m2_Espol, tercer_dato_m2_Espol, cuarto_dato_m2_Espol]
                }, {
                name: 'PPT',
                color: '#F8CBAD',
                linkedTo: 'espol',
                data: [primer_dato_m3_Espol, segundo_dato_m3_Espol, tercer_dato_m3_Espol, cuarto_dato_m3_Espol]
                }, {
                name: 'Excel',
                color: '#97E597',
                linkedTo: 'espol',
                data: [primer_dato_m4_Espol, segundo_dato_m4_Espol, tercer_dato_m4_Espol, cuarto_dato_m4_Espol]
                }, {
                name: 'Word',
                color: '#BDD7EE',
                linkedTo: 'espol',
                data: [primer_dato_m5_Espol, segundo_dato_m5_Espol, tercer_dato_m5_Espol, cuarto_dato_m5_Espol]
                }, {
                name: 'Herramientas',
                color: '#C7A0E4',
                linkedTo: 'espol',
                data: [primer_dato_m6_Espol, segundo_dato_m6_Espol, tercer_dato_m6_Espol, cuarto_dato_m6_Espol]
                }, {

                color: '#FFD966',
                name: 'Admision',
                id: 'admision',
                data: [primer_dato_m1_Admision, segundo_dato_m1_Admision, tercer_dato_m1_Admision, cuarto_dato_m1_Admision]
                }, {
                color : '#47CFFF',
                name: 'Internet',
                linkedTo: 'admision',
                data: [primer_dato_m2_Admision, segundo_dato_m2_Admision, tercer_dato_m2_Admision, cuarto_dato_m2_Admision]
                }, {
                color: '#F8CBAD',
                name: 'PPT',
                linkedTo: 'admision',                
                data: [primer_dato_m3_Admision, segundo_dato_m3_Admision, tercer_dato_m3_Admision, cuarto_dato_m3_Admision]
                }, {
                color: '#97E597',
                linkedTo: 'admision',
                name: 'Excel',
                data: [primer_dato_m4_Admision, segundo_dato_m4_Admision, tercer_dato_m4_Admision, cuarto_dato_m4_Admision]
                }, {
                color : '#BDD7EE',
                linkedTo: 'admision',
                name: 'Word',
                data: [primer_dato_m5_Admision, segundo_dato_m5_Admision, tercer_dato_m5_Admision, cuarto_dato_m5_Admision]
                }, {
                color: '#C7A0E4',
                linkedTo: 'admision',
                name: 'Herramientas',
                data: [primer_dato_m6_Admision, segundo_dato_m6_Admision, tercer_dato_m6_Admision, cuarto_dato_m6_Admision]
                }, {

                color: '#FFD966',
                name: 'Total',
                id: 'total',
                data: [primer_dato_m1, segundo_dato_m1, tercer_dato_m1, cuarto_dato_m1]
                }, {
                color: '#47CFFF',
                name: 'Internet',
                linkedTo: 'total',
                data: [primer_dato_m2, segundo_dato_m2, tercer_dato_m2, cuarto_dato_m2]
                }, {
                color: '#F8CBAD',
                name: 'PPT',
                linkedTo: 'total',
                data: [primer_dato_m3, segundo_dato_m3, tercer_dato_m3, cuarto_dato_m3]
                }, {
                color: '#97E597',
                name: 'Excel',
                linkedTo: 'total',
                data: [primer_dato_m4, segundo_dato_m4, tercer_dato_m4, cuarto_dato_m4]
                }, {
                color: '#BDD7EE',
                name: 'Word',
                linkedTo: 'total',
                data: [primer_dato_m5, segundo_dato_m5, tercer_dato_m5, cuarto_dato_m5]
                }, {
                color: '#C7A0E4',
                name: 'Herramientas',
                linkedTo: 'total',
                data: [primer_dato_m6, segundo_dato_m6, tercer_dato_m6, cuarto_dato_m6]
                }],
            responsive: {
                rules: [{
                  condition: {
                    maxWidth: 800
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }
            });
}

function barra_detalle_satisfaccion_R1TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR1TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function barra_detalle_satisfaccion_R1TPEstudiantes(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR1TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR2TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR2TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR2TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR2TP').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR2TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR2TP").html("");
            $("#tablaDetalleSatisfaccionR2TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R2TP(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);
    let quinto_dato_Espol    = parseInt(datos[4]['espol']);
    let quinto_dato_Admision = parseInt(datos[4]['admision']);

    let estudiantes_espol    = parseInt(datos[5]['espol']);
    let estudiantes_admision = parseInt(datos[5]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R2TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'CUANTO TIEMPO LE DEDICAS AL MOOC HCD POR SEMANA'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'DE 1 A 3 HORAS',
                'DE 4 A 6 HORAS',
                'DE 7 A 9 HORAS',
                'NO LE DEDICO TIEMPO',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol, quinto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision, quinto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R2TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR2TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR3L1TP(){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L1TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR3L1TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR3L1TP').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR3L1TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR3L1TP").html("");
            $("#tablaDetalleSatisfaccionR3L1TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R3L1TP(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R3L1TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿TENIAS CONOCIMIENTOS DE LAS FECHAS IMPORTANTES DEL MOOC HCD?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'SI',
                'NO',
                'MAS O MENOS',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R3L1TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L1TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR3L2TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L2TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR3L2TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR3L2TP').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR3L2TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR3L2TP").html("");
            $("#tablaDetalleSatisfaccionR3L2TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R3L2TP(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R3L2TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿SABIAS ACERCA DEL PROCESO Y POLITICAS DE APROBACION DEL MOOC HCD?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'SI',
                'NO',
                'MAS O MENOS',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R3L2TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L2TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR3L3TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L3TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR3L3TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR3L3TP').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR3L3TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR3L3TP").html("");
            $("#tablaDetalleSatisfaccionR3L3TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R3L3TP(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R3L3TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿INGRESASTE A LA PESTAÑA "PREGUNTA FRECUENTE" DEL MOOC HCD?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'SI',
                'NO',
                'MAS O MENOS',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R3L3TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR3L3TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR4TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR4TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR4TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR4TP').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR4TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR4TP").html("");
            $("#tablaDetalleSatisfaccionR4TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R4TP(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);
    let quinto_dato_Espol    = parseInt(datos[4]['espol']);
    let quinto_dato_Admision = parseInt(datos[4]['admision']);
    let sexto_dato_Espol    = parseInt(datos[5]['espol']);
    let sexto_dato_Admision = parseInt(datos[5]['admision']);

    let estudiantes_espol    = parseInt(datos[6]['espol']);
    let estudiantes_admision = parseInt(datos[6]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R4TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'A TRAVES DE QUE MEDIO DE COMUNICACION REALIZAS CON MAS FRECUENCIAS TUS CONSULTAS O REPORTAS TUS PROBLEMAS CON LA PLATAFORMA'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'FORO',
                'TWITTER',
                'CORREO',
                'LLAMADAS TELEFONICAS',
                'CITA PRESENCIAL',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol, quinto_dato_Espol, sexto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision, quinto_dato_Admision, sexto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R4TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR4TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR5L1TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR5L1TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR5L1TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR5L1TP').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR5L1TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR5L1TP").html("");
            $("#tablaDetalleSatisfaccionR5L1TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R5L1TP(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R5L1TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿LA RESPUESTA RECIBIDA POR PARTE DEL EQUIPO MOOC HCD FUE CLARA Y ENTENDIBLE?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'TOTALMENTE SATISFECHO',
                'PARCIALMENTE SATISFECHO',
                'NADA SATISFECHO',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R5L1TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR5L1TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR5L2TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR5L2TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR5L2TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR5L2TP').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR5L2TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR5L2TP").html("");
            $("#tablaDetalleSatisfaccionR5L2TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R5L2TP(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);

    let estudiantes_espol    = parseInt(datos[4]['espol']);
    let estudiantes_admision = parseInt(datos[4]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R5L2TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: '¿SU CONSULTA O REQUERIMIENTO FUE SOLUCIONADO EFICAZMENTE?'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                'TOTALMENTE SATISFECHO',
                'PARCIALMENTE SATISFECHO',
                'NADA SATISFECHO',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R5L2TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR5L2TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleSatisfaccionR6TP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR6TP",
        success: function(data){  
            let tabla = "";
            $('#headTablaDetalleSatisfaccionR6TP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].respuesta  + "</td>";
                    tabla += "<td align='center'>" + data[i].espol  + "</td>";
                    tabla += "<td align='center'>" + data[i].admision     + "</td>";
                    tabla += "<td align='center'>" + data[i].estudiantes   + "</td>";                 
                    tabla += "</tr>";
                }
            }
            $('#tablaDetalleSatisfaccionR6TP').dataTable().fnClearTable();
            $('#tablaDetalleSatisfaccionR6TP').dataTable().fnDestroy();
            $("#bodyTablaDetalleSatisfaccionR6TP").html("");
            $("#tablaDetalleSatisfaccionR6TP").append(tabla);           
        }    
    });
}

function grafico_barra_detalle_satisfaccion_R6TP(datos){   

    let primer_dato_Espol      = parseInt(datos[0]['espol']);
    let primer_dato_Admision   = parseInt(datos[0]['admision']);
    let segundo_dato_Espol    = parseInt(datos[1]['espol']);
    let segundo_dato_Admision = parseInt(datos[1]['admision']);
    let tercer_dato_Espol    = parseInt(datos[2]['espol']);
    let tercer_dato_Admision = parseInt(datos[2]['admision']);
    let cuarto_dato_Espol    = parseInt(datos[3]['espol']);
    let cuarto_dato_Admision = parseInt(datos[3]['admision']);
    let quinto_dato_Espol    = parseInt(datos[4]['espol']);
    let quinto_dato_Admision = parseInt(datos[4]['admision']);
    let sexto_dato_Espol    = parseInt(datos[5]['espol']);
    let sexto_dato_Admision = parseInt(datos[5]['admision']);

    let estudiantes_espol    = parseInt(datos[6]['espol']);
    let estudiantes_admision = parseInt(datos[6]['admision']);

    Highcharts.chart('grafico_barra_detalle_satisfaccion_R6TP', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'ESCOJA EL RANGO DE TIEMPO EN QUE SUS CONSULTAS O PROBLEMAS FUERON ATENDIDOS'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br><table>',
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: [
                '5 A 10 MINUTOS',
                '15 A 30 MINUTOS',
                '1 A 2 HORAS',
                '3 A 5 HORAS',
                '1 A 2 DIAS',
                'NN'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            tickInterval: 10, 
             stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            },
            title: {
                text: 'Estudiantes'
            }
        },
        series: [{
            name: 'Espol',
            data: [primer_dato_Espol, segundo_dato_Espol, tercer_dato_Espol, cuarto_dato_Espol, quinto_dato_Espol, sexto_dato_Espol]

        }, {
            name: 'Admisiones',
            data: [primer_dato_Admision, segundo_dato_Admision, tercer_dato_Admision, cuarto_dato_Admision, quinto_dato_Admision, sexto_dato_Admision]
        }]
    });
}

function barra_detalle_satisfaccion_R6TP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/encuestas.php?op=detalleSatisfaccionR6TP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}