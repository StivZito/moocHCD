//////////////////////////////////////////////////////////////////////puntos extras
function reportePuntosExtrasAdmisionP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=reportePuntosExtrasAdmisionP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPuntosExtrasAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].identificacion + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionExcel + "</td>";                    
                    tabla += "<td align='center'>" + data[i].calificacionPPT + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionWord + "</td>";
                    tabla += "<td align='center'>" + data[i].demografica  + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnostico  + "</td>";
                    tabla += "<td align='center'>" + data[i].satisfaccion  + "</td>";
                    tabla += "<td align='center'>" + data[i].puntosExtras  + "</td>";
                    tabla += "<td align='center'>" + data[i].Excel  + "</td>";
                    tabla += "<td align='center'>" + data[i].PPT  + "</td>";
                    tabla += "<td align='center'>" + data[i].Word  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaPuntosExtrasAdmisionP').dataTable().fnClearTable();
            $('#tablaPuntosExtrasAdmisionP').dataTable().fnDestroy();
            $("#bodytablaPuntosExtrasAdmisionP").html("");
            $("#tablaPuntosExtrasAdmisionP").append(tabla);
            $('#tablaPuntosExtrasAdmisionP').dataTable().
            $('#tablaPuntosExtrasAdmisionP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePuntosExtrasAdmisionTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=reportePuntosExtrasAdmisionTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPuntosExtrasAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].identificacion + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionExcel + "</td>";                    
                    tabla += "<td align='center'>" + data[i].calificacionPPT + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionWord + "</td>";
                    tabla += "<td align='center'>" + data[i].demografica  + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnostico  + "</td>";
                    tabla += "<td align='center'>" + data[i].satisfaccion  + "</td>";
                    tabla += "<td align='center'>" + data[i].puntosExtras  + "</td>";
                    tabla += "<td align='center'>" + data[i].Excel  + "</td>";
                    tabla += "<td align='center'>" + data[i].PPT  + "</td>";
                    tabla += "<td align='center'>" + data[i].Word  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaPuntosExtrasAdmisionTP').dataTable().fnClearTable();
            $('#tablaPuntosExtrasAdmisionTP').dataTable().fnDestroy();
            $("#bodytablaPuntosExtrasAdmisionTP").html("");
            $("#tablaPuntosExtrasAdmisionTP").append(tabla);
            $('#tablaPuntosExtrasAdmisionTP').dataTable().
            $('#tablaPuntosExtrasAdmisionTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePuntosExtrasEspolP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=reportePuntosExtrasEspolP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPuntosExtrasEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].identificacion + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionExcel + "</td>";                    
                    tabla += "<td align='center'>" + data[i].calificacionPPT + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionWord + "</td>";
                    tabla += "<td align='center'>" + data[i].demografica  + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnostico  + "</td>";
                    tabla += "<td align='center'>" + data[i].satisfaccion  + "</td>";
                    tabla += "<td align='center'>" + data[i].puntosExtras  + "</td>";
                    tabla += "<td align='center'>" + data[i].Excel  + "</td>";
                    tabla += "<td align='center'>" + data[i].PPT  + "</td>";
                    tabla += "<td align='center'>" + data[i].Word  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaPuntosExtrasEspolP').dataTable().fnClearTable();
            $('#tablaPuntosExtrasEspolP').dataTable().fnDestroy();
            $("#bodytablaPuntosExtrasEspolP").html("");
            $("#tablaPuntosExtrasEspolP").append(tabla);
            $('#tablaPuntosExtrasEspolP').dataTable().
            $('#tablaPuntosExtrasEspolP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function reportePuntosExtrasEspolTP(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=reportePuntosExtrasEspolTP",
        success: function(data){  
            let tabla = "";
            $('#headTablaPuntosExtrasEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].matricula + "</td>";
                    tabla += "<td align='center'>" + data[i].identificacion + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].email + "</td>";
                    tabla += "<td align='center'>" + data[i].cohorte + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionExcel + "</td>";                    
                    tabla += "<td align='center'>" + data[i].calificacionPPT + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionWord + "</td>";
                    tabla += "<td align='center'>" + data[i].demografica  + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnostico  + "</td>";
                    tabla += "<td align='center'>" + data[i].satisfaccion  + "</td>";
                    tabla += "<td align='center'>" + data[i].puntosExtras  + "</td>";
                    tabla += "<td align='center'>" + data[i].Excel  + "</td>";
                    tabla += "<td align='center'>" + data[i].PPT  + "</td>";
                    tabla += "<td align='center'>" + data[i].Word  + "</td>";
                   
                    tabla += "</tr>";
                }
            }
            $('#tablaPuntosExtrasEspolTP').dataTable().fnClearTable();
            $('#tablaPuntosExtrasEspolTP').dataTable().fnDestroy();
            $("#bodytablaPuntosExtrasEspolTP").html("");
            $("#tablaPuntosExtrasEspolTP").append(tabla);
            $('#tablaPuntosExtrasEspolTP').dataTable().
            $('#tablaPuntosExtrasEspolTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}



/////////////////////////////////////////////////////////preguntas puntos extras practico
function num_estudiantes_registrados_puntosExtras_p(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_p",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_p').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_p_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_p_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_p_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_p_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_p_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_p_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_aprobados_p(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_aprobados_p",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_aprobados_p').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_aprobados_p_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_aprobados_p_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_aprobados_p_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_aprobados_p_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_aprobados_p_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_aprobados_p_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_reprobados_p(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_reprobados_p",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_reprobados_p').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_reprobados_p_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_reprobados_p_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_reprobados_p_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_reprobados_p_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_reprobados_p_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_reprobados_p_admision').html(resp['estudiantes']);
        }    
    });
}

function grafico_barra_detalleIncrementoPuntosExtrasTodoP(datos){

    let recibieronIncremento             = parseInt(datos[0]['recibieronIncremento']);
    let recibieronIncrementoEspol        = parseInt(datos[0]['recibieronIncrementoEspol']);
    let recibieronIncrementoAdmisiones   = parseInt(datos[0]['recibieronIncrementoAdmisiones']);
    let noRecibieronIncremento           = parseInt(datos[0]['noRecibieronIncremento']);
    let noRecibieronIncrementoEspol      = parseInt(datos[0]['noRecibieronIncrementoEspol']);
    let noRecibieronIncrementoAdmisiones = parseInt(datos[0]['noRecibieronIncrementoAdmisiones']);

    let excel_pasaronConIncremento           = parseInt(datos[0]['pasaronConIncremento']);
    let excel_pasaronConIncrementoEspol      = parseInt(datos[0]['pasaronConIncrementoEspol']);
    let excel_pasaronConIncrementoAdmision   = parseInt(datos[0]['pasaronConIncrementoAdmision']);
    let excel_noPasaronConIncremento         = parseInt(datos[0]['noPasaronConIncremento']);
    let excel_noPasaronConIncrementoEspol    = parseInt(datos[0]['noPasaronConIncrementoEspol']);
    let excel_noPasaronConIncrementoAdmision = parseInt(datos[0]['noPasaronConIncrementoAdmision']);

    let word_pasaronConIncremento           = parseInt(datos[1]['pasaronConIncremento']);
    let word_pasaronConIncrementoEspol      = parseInt(datos[1]['pasaronConIncrementoEspol']);
    let word_pasaronConIncrementoAdmision   = parseInt(datos[1]['pasaronConIncrementoAdmision']);
    let word_noPasaronConIncremento         = parseInt(datos[1]['noPasaronConIncremento']);
    let word_noPasaronConIncrementoEspol    = parseInt(datos[1]['noPasaronConIncrementoEspol']);
    let word_noPasaronConIncrementoAdmision = parseInt(datos[1]['noPasaronConIncrementoAdmision']);

    let ppt_pasaronConIncremento           = parseInt(datos[2]['pasaronConIncremento']);
    let ppt_pasaronConIncrementoEspol      = parseInt(datos[2]['pasaronConIncrementoEspol']);
    let ppt_pasaronConIncrementoAdmision   = parseInt(datos[2]['pasaronConIncrementoAdmision']);
    let ppt_noPasaronConIncremento         = parseInt(datos[2]['noPasaronConIncremento']);
    let ppt_noPasaronConIncrementoEspol    = parseInt(datos[2]['noPasaronConIncrementoEspol']);
    let ppt_noPasaronConIncrementoAdmision = parseInt(datos[2]['noPasaronConIncrementoAdmision']);

    // Create the chart
    Highcharts.chart('grafico_barra_detalleIncrementoPuntosExtrasTodoP', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'INCREMENTO DE PUNTOS'
        },
        credits: {
            enabled: false
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.2f} %'
                },
                showInLegend: true
            }
        },
        series: [
            {
                name: "ESTUDIANTES",
                colorByPoint: true,
                data: [
                    {
                        name: "OBTUVIERON INCREMENTO",
                        y: recibieronIncremento,
                        drilldown: "OBTUVIERON INCREMENTO"
                    },
                    {
                        name: "NO OBTUVIERON INCREMENTO",
                        y: noRecibieronIncremento,
                        drilldown: "NO OBTUVIERON INCREMENTO"
                    }
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "OBTUVIERON INCREMENTO",
                    id: "OBTUVIERON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            recibieronIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            recibieronIncrementoAdmisiones
                        ]
                    ]
                },
                {
                    name: "NO OBTUVIERON INCREMENTO",
                    id: "NO OBTUVIERON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            noRecibieronIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            noRecibieronIncrementoAdmisiones
                        ]
                    ]
                }
            ]
        }
    });      
}

function barra_detalleIncrementoPuntosExtrasTodoP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=detalleIncrementoPuntosExtrasTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function grafico_barra_detalleIncrementoPuntosExtrasExcelP(datos){

    let recibieronIncremento             = parseInt(datos[0]['recibieronIncremento']);
    let recibieronIncrementoEspol        = parseInt(datos[0]['recibieronIncrementoEspol']);
    let recibieronIncrementoAdmisiones   = parseInt(datos[0]['recibieronIncrementoAdmisiones']);
    let noRecibieronIncremento           = parseInt(datos[0]['noRecibieronIncremento']);
    let noRecibieronIncrementoEspol      = parseInt(datos[0]['noRecibieronIncrementoEspol']);
    let noRecibieronIncrementoAdmisiones = parseInt(datos[0]['noRecibieronIncrementoAdmisiones']);

    let excel_pasaronConIncremento           = parseInt(datos[0]['pasaronConIncremento']);
    let excel_pasaronConIncrementoEspol      = parseInt(datos[0]['pasaronConIncrementoEspol']);
    let excel_pasaronConIncrementoAdmision   = parseInt(datos[0]['pasaronConIncrementoAdmision']);
    let excel_noPasaronConIncremento         = parseInt(datos[0]['noPasaronConIncremento']);
    let excel_noPasaronConIncrementoEspol    = parseInt(datos[0]['noPasaronConIncrementoEspol']);
    let excel_noPasaronConIncrementoAdmision = parseInt(datos[0]['noPasaronConIncrementoAdmision']);

    let word_pasaronConIncremento           = parseInt(datos[1]['pasaronConIncremento']);
    let word_pasaronConIncrementoEspol      = parseInt(datos[1]['pasaronConIncrementoEspol']);
    let word_pasaronConIncrementoAdmision   = parseInt(datos[1]['pasaronConIncrementoAdmision']);
    let word_noPasaronConIncremento         = parseInt(datos[1]['noPasaronConIncremento']);
    let word_noPasaronConIncrementoEspol    = parseInt(datos[1]['noPasaronConIncrementoEspol']);
    let word_noPasaronConIncrementoAdmision = parseInt(datos[1]['noPasaronConIncrementoAdmision']);

    let ppt_pasaronConIncremento           = parseInt(datos[2]['pasaronConIncremento']);
    let ppt_pasaronConIncrementoEspol      = parseInt(datos[2]['pasaronConIncrementoEspol']);
    let ppt_pasaronConIncrementoAdmision   = parseInt(datos[2]['pasaronConIncrementoAdmision']);
    let ppt_noPasaronConIncremento         = parseInt(datos[2]['noPasaronConIncremento']);
    let ppt_noPasaronConIncrementoEspol    = parseInt(datos[2]['noPasaronConIncrementoEspol']);
    let ppt_noPasaronConIncrementoAdmision = parseInt(datos[2]['noPasaronConIncrementoAdmision']);

    // Create the chart
    Highcharts.chart('grafico_barra_detalleIncrementoPuntosExtrasExcelP', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'INCREMENTO DE PUNTOS EN MODULO EXCEL'
        },
        credits: {
            enabled: false
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.2f} %'
                },
                showInLegend: true
            }
        },
        series: [
            {
                name: "ESTUDIANTES",
                colorByPoint: true,
                data: [
                    {
                        name: "PASARON CON INCREMENTO",
                        y: excel_pasaronConIncremento,
                        drilldown: "PASARON CON INCREMENTO"
                    },
                    {
                        name: "NO PASARON CON INCREMENTO",
                        y: excel_noPasaronConIncremento,
                        drilldown: "NO PASARON CON INCREMENTO"
                    }
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "PASARON CON INCREMENTO",
                    id: "PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            excel_pasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            excel_pasaronConIncrementoAdmision
                        ]
                    ]
                },
                {
                    name: "NO PASARON CON INCREMENTO",
                    id: "NO PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            excel_noPasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            excel_noPasaronConIncrementoAdmision
                        ]
                    ]
                }
            ]
        }
    });      
}

function barra_detalleIncrementoPuntosExtrasExcelP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=detalleIncrementoPuntosExtrasTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function grafico_barra_detalleIncrementoPuntosExtrasWordP(datos){

    let recibieronIncremento             = parseInt(datos[0]['recibieronIncremento']);
    let recibieronIncrementoEspol        = parseInt(datos[0]['recibieronIncrementoEspol']);
    let recibieronIncrementoAdmisiones   = parseInt(datos[0]['recibieronIncrementoAdmisiones']);
    let noRecibieronIncremento           = parseInt(datos[0]['noRecibieronIncremento']);
    let noRecibieronIncrementoEspol      = parseInt(datos[0]['noRecibieronIncrementoEspol']);
    let noRecibieronIncrementoAdmisiones = parseInt(datos[0]['noRecibieronIncrementoAdmisiones']);

    let excel_pasaronConIncremento           = parseInt(datos[0]['pasaronConIncremento']);
    let excel_pasaronConIncrementoEspol      = parseInt(datos[0]['pasaronConIncrementoEspol']);
    let excel_pasaronConIncrementoAdmision   = parseInt(datos[0]['pasaronConIncrementoAdmision']);
    let excel_noPasaronConIncremento         = parseInt(datos[0]['noPasaronConIncremento']);
    let excel_noPasaronConIncrementoEspol    = parseInt(datos[0]['noPasaronConIncrementoEspol']);
    let excel_noPasaronConIncrementoAdmision = parseInt(datos[0]['noPasaronConIncrementoAdmision']);

    let word_pasaronConIncremento           = parseInt(datos[1]['pasaronConIncremento']);
    let word_pasaronConIncrementoEspol      = parseInt(datos[1]['pasaronConIncrementoEspol']);
    let word_pasaronConIncrementoAdmision   = parseInt(datos[1]['pasaronConIncrementoAdmision']);
    let word_noPasaronConIncremento         = parseInt(datos[1]['noPasaronConIncremento']);
    let word_noPasaronConIncrementoEspol    = parseInt(datos[1]['noPasaronConIncrementoEspol']);
    let word_noPasaronConIncrementoAdmision = parseInt(datos[1]['noPasaronConIncrementoAdmision']);

    let ppt_pasaronConIncremento           = parseInt(datos[2]['pasaronConIncremento']);
    let ppt_pasaronConIncrementoEspol      = parseInt(datos[2]['pasaronConIncrementoEspol']);
    let ppt_pasaronConIncrementoAdmision   = parseInt(datos[2]['pasaronConIncrementoAdmision']);
    let ppt_noPasaronConIncremento         = parseInt(datos[2]['noPasaronConIncremento']);
    let ppt_noPasaronConIncrementoEspol    = parseInt(datos[2]['noPasaronConIncrementoEspol']);
    let ppt_noPasaronConIncrementoAdmision = parseInt(datos[2]['noPasaronConIncrementoAdmision']);

    // Create the chart
    Highcharts.chart('grafico_barra_detalleIncrementoPuntosExtrasWordP', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'INCREMENTO DE PUNTOS EN MODULO WORD'
        },
        credits: {
            enabled: false
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.2f} %'
                },
                showInLegend: true
            }
        },
        series: [
            {
                name: "ESTUDIANTES",
                colorByPoint: true,
                data: [
                    {
                        name: "PASARON CON INCREMENTO",
                        y: word_pasaronConIncremento,
                        drilldown: "PASARON CON INCREMENTO"
                    },
                    {
                        name: "NO PASARON CON INCREMENTO",
                        y: word_noPasaronConIncremento,
                        drilldown: "NO PASARON CON INCREMENTO"
                    }
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "PASARON CON INCREMENTO",
                    id: "PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            word_pasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            word_pasaronConIncrementoAdmision
                        ]
                    ]
                },
                {
                    name: "NO PASARON CON INCREMENTO",
                    id: "NO PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            word_noPasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            word_noPasaronConIncrementoAdmision
                        ]
                    ]
                }
            ]
        }
    });      
}

function barra_detalleIncrementoPuntosExtrasWordP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=detalleIncrementoPuntosExtrasTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function grafico_barra_detalleIncrementoPuntosExtrasPptP(datos){

    let recibieronIncremento             = parseInt(datos[0]['recibieronIncremento']);
    let recibieronIncrementoEspol        = parseInt(datos[0]['recibieronIncrementoEspol']);
    let recibieronIncrementoAdmisiones   = parseInt(datos[0]['recibieronIncrementoAdmisiones']);
    let noRecibieronIncremento           = parseInt(datos[0]['noRecibieronIncremento']);
    let noRecibieronIncrementoEspol      = parseInt(datos[0]['noRecibieronIncrementoEspol']);
    let noRecibieronIncrementoAdmisiones = parseInt(datos[0]['noRecibieronIncrementoAdmisiones']);

    let excel_pasaronConIncremento           = parseInt(datos[0]['pasaronConIncremento']);
    let excel_pasaronConIncrementoEspol      = parseInt(datos[0]['pasaronConIncrementoEspol']);
    let excel_pasaronConIncrementoAdmision   = parseInt(datos[0]['pasaronConIncrementoAdmision']);
    let excel_noPasaronConIncremento         = parseInt(datos[0]['noPasaronConIncremento']);
    let excel_noPasaronConIncrementoEspol    = parseInt(datos[0]['noPasaronConIncrementoEspol']);
    let excel_noPasaronConIncrementoAdmision = parseInt(datos[0]['noPasaronConIncrementoAdmision']);

    let word_pasaronConIncremento           = parseInt(datos[1]['pasaronConIncremento']);
    let word_pasaronConIncrementoEspol      = parseInt(datos[1]['pasaronConIncrementoEspol']);
    let word_pasaronConIncrementoAdmision   = parseInt(datos[1]['pasaronConIncrementoAdmision']);
    let word_noPasaronConIncremento         = parseInt(datos[1]['noPasaronConIncremento']);
    let word_noPasaronConIncrementoEspol    = parseInt(datos[1]['noPasaronConIncrementoEspol']);
    let word_noPasaronConIncrementoAdmision = parseInt(datos[1]['noPasaronConIncrementoAdmision']);

    let ppt_pasaronConIncremento           = parseInt(datos[2]['pasaronConIncremento']);
    let ppt_pasaronConIncrementoEspol      = parseInt(datos[2]['pasaronConIncrementoEspol']);
    let ppt_pasaronConIncrementoAdmision   = parseInt(datos[2]['pasaronConIncrementoAdmision']);
    let ppt_noPasaronConIncremento         = parseInt(datos[2]['noPasaronConIncremento']);
    let ppt_noPasaronConIncrementoEspol    = parseInt(datos[2]['noPasaronConIncrementoEspol']);
    let ppt_noPasaronConIncrementoAdmision = parseInt(datos[2]['noPasaronConIncrementoAdmision']);

    // Create the chart
    Highcharts.chart('grafico_barra_detalleIncrementoPuntosExtrasPptP', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'INCREMENTO DE PUNTOS EN MODULO PPT'
        },
        credits: {
            enabled: false
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.2f} %'
                },
                showInLegend: true
            }
        },
        series: [
            {
                name: "ESTUDIANTES",
                colorByPoint: true,
                data: [
                    {
                        name: "PASARON CON INCREMENTO",
                        y: ppt_pasaronConIncremento,
                        drilldown: "PASARON CON INCREMENTO"
                    },
                    {
                        name: "NO PASARON CON INCREMENTO",
                        y: ppt_noPasaronConIncremento,
                        drilldown: "NO PASARON CON INCREMENTO"
                    }
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "PASARON CON INCREMENTO",
                    id: "PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            ppt_pasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            ppt_pasaronConIncrementoAdmision
                        ]
                    ]
                },
                {
                    name: "NO PASARON CON INCREMENTO",
                    id: "NO PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            ppt_noPasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            ppt_noPasaronConIncrementoAdmision
                        ]
                    ]
                }
            ]
        }
    });      
}

function barra_detalleIncrementoPuntosExtrasPptP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=detalleIncrementoPuntosExtrasTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



/////////////////////////////////////////////////////////preguntas puntos extras teorico practico
function num_estudiantes_registrados_puntosExtras_tp(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_tp",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_tp').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_tp_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_tp_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_tp_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_tp_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_tp_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_tp_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_aprobados_tp(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_aprobados_tp",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_aprobados_tp').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_aprobados_tp_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_aprobados_tp_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_aprobados_tp_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_aprobados_tp_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_aprobados_tp_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_aprobados_tp_admision').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_reprobados_tp(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_reprobados_tp",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_reprobados_tp').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_reprobados_tp_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_reprobados_tp_espol",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_reprobados_tp_espol').html(resp['estudiantes']);
        }    
    });
}

function num_estudiantes_registrados_puntosExtras_reprobados_tp_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=num_estudiantes_registrados_puntosExtras_reprobados_tp_admision",
        success: function(resp){        
            $('#dh_estudiantes_registrados_puntosExtras_reprobados_tp_admision').html(resp['estudiantes']);
        }    
    });
}

function grafico_barra_detalleIncrementoPuntosExtrasTodoTP(datos){

    let recibieronIncremento             = parseInt(datos[0]['recibieronIncremento']);
    let recibieronIncrementoEspol        = parseInt(datos[0]['recibieronIncrementoEspol']);
    let recibieronIncrementoAdmisiones   = parseInt(datos[0]['recibieronIncrementoAdmisiones']);
    let noRecibieronIncremento           = parseInt(datos[0]['noRecibieronIncremento']);
    let noRecibieronIncrementoEspol      = parseInt(datos[0]['noRecibieronIncrementoEspol']);
    let noRecibieronIncrementoAdmisiones = parseInt(datos[0]['noRecibieronIncrementoAdmisiones']);

    let excel_pasaronConIncremento           = parseInt(datos[0]['pasaronConIncremento']);
    let excel_pasaronConIncrementoEspol      = parseInt(datos[0]['pasaronConIncrementoEspol']);
    let excel_pasaronConIncrementoAdmision   = parseInt(datos[0]['pasaronConIncrementoAdmision']);
    let excel_noPasaronConIncremento         = parseInt(datos[0]['noPasaronConIncremento']);
    let excel_noPasaronConIncrementoEspol    = parseInt(datos[0]['noPasaronConIncrementoEspol']);
    let excel_noPasaronConIncrementoAdmision = parseInt(datos[0]['noPasaronConIncrementoAdmision']);

    let word_pasaronConIncremento           = parseInt(datos[1]['pasaronConIncremento']);
    let word_pasaronConIncrementoEspol      = parseInt(datos[1]['pasaronConIncrementoEspol']);
    let word_pasaronConIncrementoAdmision   = parseInt(datos[1]['pasaronConIncrementoAdmision']);
    let word_noPasaronConIncremento         = parseInt(datos[1]['noPasaronConIncremento']);
    let word_noPasaronConIncrementoEspol    = parseInt(datos[1]['noPasaronConIncrementoEspol']);
    let word_noPasaronConIncrementoAdmision = parseInt(datos[1]['noPasaronConIncrementoAdmision']);

    let ppt_pasaronConIncremento           = parseInt(datos[2]['pasaronConIncremento']);
    let ppt_pasaronConIncrementoEspol      = parseInt(datos[2]['pasaronConIncrementoEspol']);
    let ppt_pasaronConIncrementoAdmision   = parseInt(datos[2]['pasaronConIncrementoAdmision']);
    let ppt_noPasaronConIncremento         = parseInt(datos[2]['noPasaronConIncremento']);
    let ppt_noPasaronConIncrementoEspol    = parseInt(datos[2]['noPasaronConIncrementoEspol']);
    let ppt_noPasaronConIncrementoAdmision = parseInt(datos[2]['noPasaronConIncrementoAdmision']);

    // Create the chart
    Highcharts.chart('grafico_barra_detalleIncrementoPuntosExtrasTodoTP', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'INCREMENTO DE PUNTOS'
        },
        credits: {
            enabled: false
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.2f} %'
                },
                showInLegend: true
            }
        },
        series: [
            {
                name: "ESTUDIANTES",
                colorByPoint: true,
                data: [
                    {
                        name: "OBTUVIERON INCREMENTO",
                        y: recibieronIncremento,
                        drilldown: "OBTUVIERON INCREMENTO"
                    },
                    {
                        name: "NO OBTUVIERON INCREMENTO",
                        y: noRecibieronIncremento,
                        drilldown: "NO OBTUVIERON INCREMENTO"
                    }
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "OBTUVIERON INCREMENTO",
                    id: "OBTUVIERON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            recibieronIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            recibieronIncrementoAdmisiones
                        ]
                    ]
                },
                {
                    name: "NO OBTUVIERON INCREMENTO",
                    id: "NO OBTUVIERON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            noRecibieronIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            noRecibieronIncrementoAdmisiones
                        ]
                    ]
                }
            ]
        }
    });      
}

function barra_detalleIncrementoPuntosExtrasTodoTP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=detalleIncrementoPuntosExtrasTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function grafico_barra_detalleIncrementoPuntosExtrasExcelTP(datos){

    let recibieronIncremento             = parseInt(datos[0]['recibieronIncremento']);
    let recibieronIncrementoEspol        = parseInt(datos[0]['recibieronIncrementoEspol']);
    let recibieronIncrementoAdmisiones   = parseInt(datos[0]['recibieronIncrementoAdmisiones']);
    let noRecibieronIncremento           = parseInt(datos[0]['noRecibieronIncremento']);
    let noRecibieronIncrementoEspol      = parseInt(datos[0]['noRecibieronIncrementoEspol']);
    let noRecibieronIncrementoAdmisiones = parseInt(datos[0]['noRecibieronIncrementoAdmisiones']);

    let excel_pasaronConIncremento           = parseInt(datos[0]['pasaronConIncremento']);
    let excel_pasaronConIncrementoEspol      = parseInt(datos[0]['pasaronConIncrementoEspol']);
    let excel_pasaronConIncrementoAdmision   = parseInt(datos[0]['pasaronConIncrementoAdmision']);
    let excel_noPasaronConIncremento         = parseInt(datos[0]['noPasaronConIncremento']);
    let excel_noPasaronConIncrementoEspol    = parseInt(datos[0]['noPasaronConIncrementoEspol']);
    let excel_noPasaronConIncrementoAdmision = parseInt(datos[0]['noPasaronConIncrementoAdmision']);

    let word_pasaronConIncremento           = parseInt(datos[1]['pasaronConIncremento']);
    let word_pasaronConIncrementoEspol      = parseInt(datos[1]['pasaronConIncrementoEspol']);
    let word_pasaronConIncrementoAdmision   = parseInt(datos[1]['pasaronConIncrementoAdmision']);
    let word_noPasaronConIncremento         = parseInt(datos[1]['noPasaronConIncremento']);
    let word_noPasaronConIncrementoEspol    = parseInt(datos[1]['noPasaronConIncrementoEspol']);
    let word_noPasaronConIncrementoAdmision = parseInt(datos[1]['noPasaronConIncrementoAdmision']);

    let ppt_pasaronConIncremento           = parseInt(datos[2]['pasaronConIncremento']);
    let ppt_pasaronConIncrementoEspol      = parseInt(datos[2]['pasaronConIncrementoEspol']);
    let ppt_pasaronConIncrementoAdmision   = parseInt(datos[2]['pasaronConIncrementoAdmision']);
    let ppt_noPasaronConIncremento         = parseInt(datos[2]['noPasaronConIncremento']);
    let ppt_noPasaronConIncrementoEspol    = parseInt(datos[2]['noPasaronConIncrementoEspol']);
    let ppt_noPasaronConIncrementoAdmision = parseInt(datos[2]['noPasaronConIncrementoAdmision']);

    // Create the chart
    Highcharts.chart('grafico_barra_detalleIncrementoPuntosExtrasExcelTP', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'INCREMENTO DE PUNTOS EN MODULO EXCEL'
        },
        credits: {
            enabled: false
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.2f} %'
                },
                showInLegend: true
            }
        },
        series: [
            {
                name: "ESTUDIANTES",
                colorByPoint: true,
                data: [
                    {
                        name: "PASARON CON INCREMENTO",
                        y: excel_pasaronConIncremento,
                        drilldown: "PASARON CON INCREMENTO"
                    },
                    {
                        name: "NO PASARON CON INCREMENTO",
                        y: excel_noPasaronConIncremento,
                        drilldown: "NO PASARON CON INCREMENTO"
                    }
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "PASARON CON INCREMENTO",
                    id: "PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            excel_pasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            excel_pasaronConIncrementoAdmision
                        ]
                    ]
                },
                {
                    name: "NO PASARON CON INCREMENTO",
                    id: "NO PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            excel_noPasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            excel_noPasaronConIncrementoAdmision
                        ]
                    ]
                }
            ]
        }
    });      
}

function barra_detalleIncrementoPuntosExtrasExcelTP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=detalleIncrementoPuntosExtrasTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function grafico_barra_detalleIncrementoPuntosExtrasWordTP(datos){

    let recibieronIncremento             = parseInt(datos[0]['recibieronIncremento']);
    let recibieronIncrementoEspol        = parseInt(datos[0]['recibieronIncrementoEspol']);
    let recibieronIncrementoAdmisiones   = parseInt(datos[0]['recibieronIncrementoAdmisiones']);
    let noRecibieronIncremento           = parseInt(datos[0]['noRecibieronIncremento']);
    let noRecibieronIncrementoEspol      = parseInt(datos[0]['noRecibieronIncrementoEspol']);
    let noRecibieronIncrementoAdmisiones = parseInt(datos[0]['noRecibieronIncrementoAdmisiones']);

    let excel_pasaronConIncremento           = parseInt(datos[0]['pasaronConIncremento']);
    let excel_pasaronConIncrementoEspol      = parseInt(datos[0]['pasaronConIncrementoEspol']);
    let excel_pasaronConIncrementoAdmision   = parseInt(datos[0]['pasaronConIncrementoAdmision']);
    let excel_noPasaronConIncremento         = parseInt(datos[0]['noPasaronConIncremento']);
    let excel_noPasaronConIncrementoEspol    = parseInt(datos[0]['noPasaronConIncrementoEspol']);
    let excel_noPasaronConIncrementoAdmision = parseInt(datos[0]['noPasaronConIncrementoAdmision']);

    let word_pasaronConIncremento           = parseInt(datos[1]['pasaronConIncremento']);
    let word_pasaronConIncrementoEspol      = parseInt(datos[1]['pasaronConIncrementoEspol']);
    let word_pasaronConIncrementoAdmision   = parseInt(datos[1]['pasaronConIncrementoAdmision']);
    let word_noPasaronConIncremento         = parseInt(datos[1]['noPasaronConIncremento']);
    let word_noPasaronConIncrementoEspol    = parseInt(datos[1]['noPasaronConIncrementoEspol']);
    let word_noPasaronConIncrementoAdmision = parseInt(datos[1]['noPasaronConIncrementoAdmision']);

    let ppt_pasaronConIncremento           = parseInt(datos[2]['pasaronConIncremento']);
    let ppt_pasaronConIncrementoEspol      = parseInt(datos[2]['pasaronConIncrementoEspol']);
    let ppt_pasaronConIncrementoAdmision   = parseInt(datos[2]['pasaronConIncrementoAdmision']);
    let ppt_noPasaronConIncremento         = parseInt(datos[2]['noPasaronConIncremento']);
    let ppt_noPasaronConIncrementoEspol    = parseInt(datos[2]['noPasaronConIncrementoEspol']);
    let ppt_noPasaronConIncrementoAdmision = parseInt(datos[2]['noPasaronConIncrementoAdmision']);

    // Create the chart
    Highcharts.chart('grafico_barra_detalleIncrementoPuntosExtrasWordTP', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'INCREMENTO DE PUNTOS EN MODULO WORD'
        },
        credits: {
            enabled: false
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.2f} %'
                },
                showInLegend: true
            }
        },
        series: [
            {
                name: "ESTUDIANTES",
                colorByPoint: true,
                data: [
                    {
                        name: "PASARON CON INCREMENTO",
                        y: word_pasaronConIncremento,
                        drilldown: "PASARON CON INCREMENTO"
                    },
                    {
                        name: "NO PASARON CON INCREMENTO",
                        y: word_noPasaronConIncremento,
                        drilldown: "NO PASARON CON INCREMENTO"
                    }
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "PASARON CON INCREMENTO",
                    id: "PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            word_pasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            word_pasaronConIncrementoAdmision
                        ]
                    ]
                },
                {
                    name: "NO PASARON CON INCREMENTO",
                    id: "NO PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            word_noPasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            word_noPasaronConIncrementoAdmision
                        ]
                    ]
                }
            ]
        }
    });      
}

function barra_detalleIncrementoPuntosExtrasWordTP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=detalleIncrementoPuntosExtrasTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function grafico_barra_detalleIncrementoPuntosExtrasPptTP(datos){

    let recibieronIncremento             = parseInt(datos[0]['recibieronIncremento']);
    let recibieronIncrementoEspol        = parseInt(datos[0]['recibieronIncrementoEspol']);
    let recibieronIncrementoAdmisiones   = parseInt(datos[0]['recibieronIncrementoAdmisiones']);
    let noRecibieronIncremento           = parseInt(datos[0]['noRecibieronIncremento']);
    let noRecibieronIncrementoEspol      = parseInt(datos[0]['noRecibieronIncrementoEspol']);
    let noRecibieronIncrementoAdmisiones = parseInt(datos[0]['noRecibieronIncrementoAdmisiones']);

    let excel_pasaronConIncremento           = parseInt(datos[0]['pasaronConIncremento']);
    let excel_pasaronConIncrementoEspol      = parseInt(datos[0]['pasaronConIncrementoEspol']);
    let excel_pasaronConIncrementoAdmision   = parseInt(datos[0]['pasaronConIncrementoAdmision']);
    let excel_noPasaronConIncremento         = parseInt(datos[0]['noPasaronConIncremento']);
    let excel_noPasaronConIncrementoEspol    = parseInt(datos[0]['noPasaronConIncrementoEspol']);
    let excel_noPasaronConIncrementoAdmision = parseInt(datos[0]['noPasaronConIncrementoAdmision']);

    let word_pasaronConIncremento           = parseInt(datos[1]['pasaronConIncremento']);
    let word_pasaronConIncrementoEspol      = parseInt(datos[1]['pasaronConIncrementoEspol']);
    let word_pasaronConIncrementoAdmision   = parseInt(datos[1]['pasaronConIncrementoAdmision']);
    let word_noPasaronConIncremento         = parseInt(datos[1]['noPasaronConIncremento']);
    let word_noPasaronConIncrementoEspol    = parseInt(datos[1]['noPasaronConIncrementoEspol']);
    let word_noPasaronConIncrementoAdmision = parseInt(datos[1]['noPasaronConIncrementoAdmision']);

    let ppt_pasaronConIncremento           = parseInt(datos[2]['pasaronConIncremento']);
    let ppt_pasaronConIncrementoEspol      = parseInt(datos[2]['pasaronConIncrementoEspol']);
    let ppt_pasaronConIncrementoAdmision   = parseInt(datos[2]['pasaronConIncrementoAdmision']);
    let ppt_noPasaronConIncremento         = parseInt(datos[2]['noPasaronConIncremento']);
    let ppt_noPasaronConIncrementoEspol    = parseInt(datos[2]['noPasaronConIncrementoEspol']);
    let ppt_noPasaronConIncrementoAdmision = parseInt(datos[2]['noPasaronConIncrementoAdmision']);

    // Create the chart
    Highcharts.chart('grafico_barra_detalleIncrementoPuntosExtrasPptTP', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'INCREMENTO DE PUNTOS EN MODULO PPT'
        },
        credits: {
            enabled: false
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.2f} %'
                },
                showInLegend: true
            }
        },
        series: [
            {
                name: "ESTUDIANTES",
                colorByPoint: true,
                data: [
                    {
                        name: "PASARON CON INCREMENTO",
                        y: ppt_pasaronConIncremento,
                        drilldown: "PASARON CON INCREMENTO"
                    },
                    {
                        name: "NO PASARON CON INCREMENTO",
                        y: ppt_noPasaronConIncremento,
                        drilldown: "NO PASARON CON INCREMENTO"
                    }
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "PASARON CON INCREMENTO",
                    id: "PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            ppt_pasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            ppt_pasaronConIncrementoAdmision
                        ]
                    ]
                },
                {
                    name: "NO PASARON CON INCREMENTO",
                    id: "NO PASARON CON INCREMENTO",
                    data: [
                        [
                            "ESPOL",
                            ppt_noPasaronConIncrementoEspol
                        ],
                        [
                            "ADMISIONES",
                            ppt_noPasaronConIncrementoAdmision
                        ]
                    ]
                }
            ]
        }
    });      
}

function barra_detalleIncrementoPuntosExtrasPptTP(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/puntosExtras.php?op=detalleIncrementoPuntosExtrasTP",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}