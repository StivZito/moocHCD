
/////////////////////////////////////////////////////////////NIVELES DE CONOCIMIENTO POR MODULO PRACTICO 
function informe_niveles_conocimiento_ep_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=informe_niveles_conocimiento_ep_admision",
        success: function(data){  
            let tabla = "";
            $('#headTablaNivelConocimientoAdmisionP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";

                    tabla += "<td align='center'>" + data[i].diagnosticoM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM5 + "</td>";

                    tabla += "<td align='center'>" + data[i].moocM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM5  + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoPPT   + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoExcel + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoWord  + "</td>";                  
                    tabla += "</tr>";
                }
            }
            $('#tablaNivelConocimientoAdmisionP').dataTable().fnClearTable();
            $('#tablaNivelConocimientoAdmisionP').dataTable().fnDestroy();
            $("#bodyTablaNivelConocimientoAdmisionP").html("");
            $("#tablaNivelConocimientoAdmisionP").append(tabla);
            $('#tablaNivelConocimientoAdmisionP').dataTable().
            $('#tablaNivelConocimientoAdmisionP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function informe_niveles_conocimiento_ep_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=informe_niveles_conocimiento_ep_espol",
        success: function(data){  
            let tabla = "";
            $('#headTablaNivelConocimientoEspolP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";

                    tabla += "<td align='center'>" + data[i].diagnosticoM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM5 + "</td>";

                    tabla += "<td align='center'>" + data[i].moocM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM5  + "</td>";

                    tabla += "<td align='center'>" + data[i].nivelConocimientoPPT   + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoExcel + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoWord  + "</td>";                  
                    tabla += "</tr>";
                }
            }
            $('#tablaNivelConocimientoEspolP').dataTable().fnClearTable();
            $('#tablaNivelConocimientoEspolP').dataTable().fnDestroy();
            $("#bodyTablaNivelConocimientoEspolP").html("");
            $("#tablaNivelConocimientoEspolP").append(tabla);
            $('#tablaNivelConocimientoEspolP').dataTable().
            $('#tablaNivelConocimientoEspolP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}


function grafico_niveles_conocimiento_general_practico(datos){
    

    let diagnostico_m3_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m3_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m3_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m3_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m3_excelente    = parseInt(datos[0]['excelente']);

    let diagnostico_m4_inicial      = parseInt(datos[1]['inicial']);
    let diagnostico_m4_regular      = parseInt(datos[1]['regular']);
    let diagnostico_m4_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let diagnostico_m4_desarrollado = parseInt(datos[1]['desarrollado']);
    let diagnostico_m4_excelente    = parseInt(datos[1]['excelente']);

    let diagnostico_m5_inicial      = parseInt(datos[2]['inicial']);
    let diagnostico_m5_regular      = parseInt(datos[2]['regular']);
    let diagnostico_m5_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let diagnostico_m5_desarrollado = parseInt(datos[2]['desarrollado']);
    let diagnostico_m5_excelente    = parseInt(datos[2]['excelente']);

    let mooc_m3_inicial      = parseInt(datos[3]['inicial']);
    let mooc_m3_regular      = parseInt(datos[3]['regular']);
    let mooc_m3_enDesarrollo = parseInt(datos[3]['enDesarrollo']);
    let mooc_m3_desarrollado = parseInt(datos[3]['desarrollado']);
    let mooc_m3_excelente    = parseInt(datos[3]['excelente']);

    let mooc_m4_inicial      = parseInt(datos[4]['inicial']);
    let mooc_m4_regular      = parseInt(datos[4]['regular']);
    let mooc_m4_enDesarrollo = parseInt(datos[4]['enDesarrollo']);
    let mooc_m4_desarrollado = parseInt(datos[4]['desarrollado']);
    let mooc_m4_excelente    = parseInt(datos[4]['excelente']);

    let mooc_m5_inicial      = parseInt(datos[5]['inicial']);
    let mooc_m5_regular      = parseInt(datos[5]['regular']);
    let mooc_m5_enDesarrollo = parseInt(datos[5]['enDesarrollo']);
    let mooc_m5_desarrollado = parseInt(datos[5]['desarrollado']);
    let mooc_m5_excelente    = parseInt(datos[5]['excelente']);

    let exp_m3_inicial      = parseInt(datos[6]['inicial']);
    let exp_m3_regular      = parseInt(datos[6]['regular']);
    let exp_m3_enDesarrollo = parseInt(datos[6]['enDesarrollo']);
    let exp_m3_desarrollado = parseInt(datos[6]['desarrollado']);
    let exp_m3_excelente    = parseInt(datos[6]['excelente']);

    let exp_m4_inicial      = parseInt(datos[7]['inicial']);
    let exp_m4_regular      = parseInt(datos[7]['regular']);
    let exp_m4_enDesarrollo = parseInt(datos[7]['enDesarrollo']);
    let exp_m4_desarrollado = parseInt(datos[7]['desarrollado']);
    let exp_m4_excelente    = parseInt(datos[7]['excelente']);

    let exp_m5_inicial      = parseInt(datos[8]['inicial']);
    let exp_m5_regular      = parseInt(datos[8]['regular']);
    let exp_m5_enDesarrollo = parseInt(datos[8]['enDesarrollo']);
    let exp_m5_desarrollado = parseInt(datos[8]['desarrollado']);
    let exp_m5_excelente    = parseInt(datos[8]['excelente']);

    Highcharts.chart('niveles_conocimiento_general_practico', {
        title: {
            text: 'NIVELES DE CONOCIMIENTO GENERAL'
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Numero de Estudiantes'
            },
            tickInterval: 20, 
            labels: {
                overflow: 'justify'
            }
        },
        xAxis: {
            categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
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
                                return 'Diagnostico' + ': ' + point.y;
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
            name: 'PPT',
            color: '#F8CBAD',
            id: 'ppt',
            data: [diagnostico_m3_inicial, diagnostico_m3_regular, diagnostico_m3_enDesarrollo, diagnostico_m3_desarrollado, diagnostico_m3_excelente]
            }, {
            color: '#F4B183',
            linkedTo: 'ppt',
            name: 'Mooc',
            data: [mooc_m3_inicial, mooc_m3_regular, mooc_m3_enDesarrollo, mooc_m3_desarrollado, mooc_m3_excelente]
            }, {
            color: '#843C0C',
            linkedTo: 'ppt',
            name: 'Examen Practico',
            data: [exp_m3_inicial, exp_m3_regular, exp_m3_enDesarrollo, exp_m3_desarrollado, exp_m3_excelente]
            }, {
            name: 'Word',
            color: '#BDD7EE',
            id: 'word',
            data: [diagnostico_m4_inicial, diagnostico_m4_regular, diagnostico_m4_enDesarrollo, diagnostico_m4_desarrollado, diagnostico_m4_excelente]
            }, {
            color : '#9DC3E6',
            linkedTo: 'word',
            name: 'Mooc',
            data: [mooc_m4_inicial, mooc_m4_regular, mooc_m4_enDesarrollo, mooc_m4_desarrollado, mooc_m4_excelente]
            }, {
            color : '#1F4E79',
            linkedTo: 'word',
            name: 'Examen Practico',
            data: [exp_m4_inicial, exp_m4_regular, exp_m4_enDesarrollo, exp_m4_desarrollado, exp_m4_excelente]
            }, {
            name: 'Excel',
            color: '#97E597',
            id: 'excel',
            data: [diagnostico_m5_inicial, diagnostico_m5_regular, diagnostico_m5_enDesarrollo, diagnostico_m5_desarrollado, diagnostico_m5_excelente]
            }, {
            color: '#4AD24A',
            linkedTo: 'excel',
            name: 'Mooc',
            data: [mooc_m5_inicial, mooc_m5_regular, mooc_m5_enDesarrollo, mooc_m5_desarrollado, mooc_m5_excelente]
            }, {
            color: '#006600',
            linkedTo: 'excel',
            name: 'Examen Practico',
            data: [exp_m5_inicial, exp_m5_regular, exp_m5_enDesarrollo, exp_m5_desarrollado, exp_m5_excelente]
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

function niveles_conocimiento_general_practico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=niveles_conocimiento_general_practico",
        success: function(resp){        
            callback(resp);
        }    
    });
}


function grafico_niveles_conocimiento_m3_practico(datos){

    let diagnostico_m3_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m3_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m3_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m3_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m3_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m3_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m3_regular      = parseInt(datos[1]['regular']);
    let mooc_m3_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m3_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m3_excelente    = parseInt(datos[1]['excelente']);

    let exp_m3_inicial      = parseInt(datos[2]['inicial']);
    let exp_m3_regular      = parseInt(datos[2]['regular']);
    let exp_m3_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let exp_m3_desarrollado = parseInt(datos[2]['desarrollado']);
    let exp_m3_excelente    = parseInt(datos[2]['excelente']);

    Highcharts.chart('nivelesConocimientoM3_practico', {

      title: {
        text: 'NIVELES DE CONOCIMIENTO POWER POINT'
      },

      yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
          text: 'Numero de Estudiantes'
        },
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
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
            }
        }
    },

      series: [{            
        name: 'Diagnostico',
        color : '#F8CBAD',
        data: [diagnostico_m3_inicial, diagnostico_m3_regular, diagnostico_m3_enDesarrollo, diagnostico_m3_desarrollado, diagnostico_m3_excelente]
      }, {
        name: 'Mooc',
        color : '#F4B183',
        data: [mooc_m3_inicial, mooc_m3_regular, mooc_m3_enDesarrollo, mooc_m3_desarrollado, mooc_m3_excelente]
      }, {       
        name: 'Examen Practico',
        color : '#843C0C',
        data: [exp_m3_inicial, exp_m3_regular, exp_m3_enDesarrollo, exp_m3_desarrollado, exp_m3_excelente]
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

function nivelesConocimientoM3_practico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoM3_practico",
        success: function(resp){        
            callback(resp);
        }   
    });
}


function grafico_niveles_conocimiento_m4_practico(datos){

    let diagnostico_m4_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m4_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m4_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m4_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m4_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m4_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m4_regular      = parseInt(datos[1]['regular']);
    let mooc_m4_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m4_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m4_excelente    = parseInt(datos[1]['excelente']);

    let exp_m4_inicial      = parseInt(datos[2]['inicial']);
    let exp_m4_regular      = parseInt(datos[2]['regular']);
    let exp_m4_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let exp_m4_desarrollado = parseInt(datos[2]['desarrollado']);
    let exp_m4_excelente    = parseInt(datos[2]['excelente']);

    Highcharts.chart('nivelesConocimientoM4_practico', {
      title: {
        text: 'NIVELES DE CONOCIMIENTO WORD'
      },
      yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
          text: 'Numero de Estudiantes'
        },
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
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
            }
        }
    },

      series: [{
        name: 'Diagnostico',
        color : '#BDD7EE',
        data: [diagnostico_m4_inicial, diagnostico_m4_regular, diagnostico_m4_enDesarrollo, diagnostico_m4_desarrollado, diagnostico_m4_excelente]
      }, {
        name: 'Mooc',
        color : '#9DC3E6',
        data: [mooc_m4_inicial, mooc_m4_regular, mooc_m4_enDesarrollo, mooc_m4_desarrollado, mooc_m4_excelente]
      }, {
        name: 'Examen Practico',
        color : '#1F4E79',
        data: [exp_m4_inicial, exp_m4_regular, exp_m4_enDesarrollo, exp_m4_desarrollado, exp_m4_excelente]
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

function nivelesConocimientoM4_practico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoM4_practico",
        success: function(resp){        
            callback(resp);
        }   
    });
}


function grafico_niveles_conocimiento_m5_practico(datos){

    let diagnostico_m5_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m5_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m5_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m5_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m5_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m5_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m5_regular      = parseInt(datos[1]['regular']);
    let mooc_m5_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m5_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m5_excelente    = parseInt(datos[1]['excelente']);

    let exp_m5_inicial      = parseInt(datos[2]['inicial']);
    let exp_m5_regular      = parseInt(datos[2]['regular']);
    let exp_m5_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let exp_m5_desarrollado = parseInt(datos[2]['desarrollado']);
    let exp_m5_excelente    = parseInt(datos[2]['excelente']);

    Highcharts.chart('nivelesConocimientoM5_practico', {
      title: {
        text: 'NIVELES DE CONOCIMIENTO EXCEL'
      },
      yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
          text: 'Numero de Estudiantes'
        },
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
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
            }
        }
    },

      series: [{
        name: 'Diagnostico',
        color: "#97E597",
        data: [diagnostico_m5_inicial, diagnostico_m5_regular, diagnostico_m5_enDesarrollo, diagnostico_m5_desarrollado, diagnostico_m5_excelente]
      }, {
        name: 'Mooc',
        color: "#4AD24A",
        data: [mooc_m5_inicial, mooc_m5_regular, mooc_m5_enDesarrollo, mooc_m5_desarrollado, mooc_m5_excelente]
      }, {
        name: 'Examen Practico',
        color: "#006600",
        data: [exp_m5_inicial, exp_m5_regular, exp_m5_enDesarrollo, exp_m5_desarrollado, exp_m5_excelente]
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

function nivelesConocimientoM5_practico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoM5_practico",
        success: function(resp){        
            callback(resp);
        }   
    });
}


/////////////////////////////////////////////////////////////NIVELES DE CONOCIMIENTO POR COMPONENTE PRACTICO 
function grafico_nivelesConocimientoGraph_practico(datos){

    let diagnostico_inicial = parseInt(datos[0]['inicial']);
    let mooc_inicial        = parseInt(datos[1]['inicial']);
    let exp_m3_inicial      = parseInt(datos[2]['inicial']);
    let exp_m4_inicial      = parseInt(datos[3]['inicial']);
    let exp_m5_inicial      = parseInt(datos[4]['inicial']);
    let total_exp_inicial   = exp_m3_inicial + exp_m4_inicial + exp_m5_inicial

    let diagnostico_regular = parseInt(datos[0]['regular']);
    let mooc_regular        = parseInt(datos[1]['regular']);
    let exp_m3_regular      = parseInt(datos[2]['regular']);
    let exp_m4_regular      = parseInt(datos[3]['regular']);
    let exp_m5_regular      = parseInt(datos[4]['regular']);
    let total_exp_regular   = exp_m3_regular + exp_m4_regular + exp_m5_regular

    let diagnostico_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let mooc_enDesarrollo        = parseInt(datos[1]['enDesarrollo']);
    let exp_m3_enDesarrollo      = parseInt(datos[2]['enDesarrollo']);
    let exp_m4_enDesarrollo      = parseInt(datos[3]['enDesarrollo']);
    let exp_m5_enDesarrollo      = parseInt(datos[4]['enDesarrollo']);
    let total_exp_enDesarrollo   = exp_m3_enDesarrollo + exp_m4_enDesarrollo + exp_m5_enDesarrollo

    let diagnostico_desarrollado = parseInt(datos[0]['desarrollado']);
    let mooc_desarrollado        = parseInt(datos[1]['desarrollado']);
    let exp_m3_desarrollado      = parseInt(datos[2]['desarrollado']);
    let exp_m4_desarrollado      = parseInt(datos[3]['desarrollado']);
    let exp_m5_desarrollado      = parseInt(datos[4]['desarrollado']);
    let total_exp_desarrollado   = exp_m3_desarrollado + exp_m4_desarrollado + exp_m5_desarrollado

    let diagnostico_excelente = parseInt(datos[0]['excelente']);
    let mooc_excelente        = parseInt(datos[1]['excelente']);
    let exp_m3_excelente      = parseInt(datos[2]['excelente']);
    let exp_m4_excelente      = parseInt(datos[3]['excelente']);
    let exp_m5_excelente      = parseInt(datos[4]['excelente']);
    let total_exp_excelente   = exp_m3_excelente + exp_m4_excelente + exp_m5_excelente


    Highcharts.chart('nivelesConocimientoGraph_practico', {
      title: {
        text: 'NIVELES DE CONOCIMIENTO GENERAL'
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Numero de Estudiantes'
        },
        tickInterval: 20, 
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
     },
     legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
      },
    credits: {
        enabled: false 
    },
    tooltip: {
        formatter: function () {
            // The first returned item is the header, subsequent items are the
            // points
            return ['<b>' + this.x + '</b>'].concat(
                this.points ?
                    this.points.map(function (point) {
                        return point.series.name + ': ' + point.y;
                    }) : []
            );
        },
        split: true
    },
    plotOptions: {
          bar: {
            dataLabels: {
                enabled: true
            }
        }
    },  

      series: [{
        name: 'Diagnostico',
        data: [diagnostico_inicial, diagnostico_regular, diagnostico_enDesarrollo, diagnostico_desarrollado, diagnostico_excelente]
      }, {
        name: 'Mooc',
        data: [mooc_inicial, mooc_regular, mooc_enDesarrollo, mooc_desarrollado, mooc_excelente]
      }, {
        name: 'Examenes Practicos',
        data: [total_exp_inicial, total_exp_regular, total_exp_enDesarrollo, total_exp_desarrollado, total_exp_excelente]
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

function nivelesConocimientoGraph_practico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoGraph_practico",
        success: function(resp){        
            callback(resp);
        }     
    });
}

function grafico_nivelesConocimientoDiagnostico_practico(datos){

    let diagnostico_m3_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m3_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m3_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m3_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m3_excelente    = parseInt(datos[0]['excelente']);

    let diagnostico_m4_inicial      = parseInt(datos[1]['inicial']);
    let diagnostico_m4_regular      = parseInt(datos[1]['regular']);
    let diagnostico_m4_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let diagnostico_m4_desarrollado = parseInt(datos[1]['desarrollado']);
    let diagnostico_m4_excelente    = parseInt(datos[1]['excelente']);

    let diagnostico_m5_inicial      = parseInt(datos[2]['inicial']);
    let diagnostico_m5_regular      = parseInt(datos[2]['regular']);
    let diagnostico_m5_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let diagnostico_m5_desarrollado = parseInt(datos[2]['desarrollado']);
    let diagnostico_m5_excelente    = parseInt(datos[2]['excelente']);

    Highcharts.chart('nivelesConocimientoDiagnostico_practico', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'NIVELES DE CONOCIMIENTO DIAGNOSTICO'
    },
    xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente']
    },
    yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
            text: 'Numero de Estudiantes'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    credits: {
        enabled: false 
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
          series: [{
            name: 'PPT',
            color: '#843C0C',
            data: [diagnostico_m3_inicial, diagnostico_m3_regular, diagnostico_m3_enDesarrollo, diagnostico_m3_desarrollado, diagnostico_m3_excelente]
          }, {
            name: 'Excel',
            color: '#006600',
            data: [diagnostico_m4_inicial, diagnostico_m4_regular, diagnostico_m4_enDesarrollo, diagnostico_m4_desarrollado, diagnostico_m4_excelente]
          }, {
            name: 'Word',
            color: '#1F4E79',
            data: [diagnostico_m5_inicial, diagnostico_m5_regular, diagnostico_m5_enDesarrollo, diagnostico_m5_desarrollado, diagnostico_m5_excelente]
          }]
    });
}

function nivelesConocimientoDiagnostico_practico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoDiagnostico_practico",
        success: function(resp){        
            callback(resp);
        }   
    });
}


function grafico_nivelesConocimientoMooc_practico(datos){

    let mooc_m3_inicial      = parseInt(datos[0]['inicial']);
    let mooc_m3_regular      = parseInt(datos[0]['regular']);
    let mooc_m3_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let mooc_m3_desarrollado = parseInt(datos[0]['desarrollado']);
    let mooc_m3_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m4_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m4_regular      = parseInt(datos[1]['regular']);
    let mooc_m4_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m4_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m4_excelente    = parseInt(datos[1]['excelente']);

    let mooc_m5_inicial      = parseInt(datos[2]['inicial']);
    let mooc_m5_regular      = parseInt(datos[2]['regular']);
    let mooc_m5_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let mooc_m5_desarrollado = parseInt(datos[2]['desarrollado']);
    let mooc_m5_excelente    = parseInt(datos[2]['excelente']);

    Highcharts.chart('nivelesConocimientoMooc_practico', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'NIVELES DE CONOCIMIENTO CURSO MOOC'
    },
    xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente']
    },
    yAxis: {
        tickInterval: 20, 
        title: {
            text: 'Numero de Estudiantes'
        },
        stackLabels: {
            overflow: 'justify',
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    credits: {
        enabled: false 
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
          series: [{
            name: 'PPT',
            color: '#843C0C',
            data: [mooc_m3_inicial, mooc_m3_regular, mooc_m3_enDesarrollo, mooc_m3_desarrollado, mooc_m3_excelente]
          }, {
            name: 'Excel',
            color: '#006600',
            data: [mooc_m4_inicial, mooc_m4_regular, mooc_m4_enDesarrollo, mooc_m4_desarrollado, mooc_m4_excelente]
          }, {
            name: 'Word',
            color: '#1F4E79',
            data: [mooc_m5_inicial, mooc_m5_regular, mooc_m5_enDesarrollo, mooc_m5_desarrollado, mooc_m5_excelente]
          }]
    });
}

function nivelesConocimientoMooc_practico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoMooc_practico",
        success: function(resp){        
            callback(resp);
        }   
    });
}

function grafico_nivelesConocimientoExamenTeoricoPractico_practico(datos){

    let exp_m3_inicial      = parseInt(datos[0]['inicial']);
    let exp_m3_regular      = parseInt(datos[0]['regular']);
    let exp_m3_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let exp_m3_desarrollado = parseInt(datos[0]['desarrollado']);
    let exp_m3_excelente    = parseInt(datos[0]['excelente']);

    let exp_m4_inicial      = parseInt(datos[1]['inicial']);
    let exp_m4_regular      = parseInt(datos[1]['regular']);
    let exp_m4_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let exp_m4_desarrollado = parseInt(datos[1]['desarrollado']);
    let exp_m4_excelente    = parseInt(datos[1]['excelente']);

    let exp_m5_inicial      = parseInt(datos[2]['inicial']);
    let exp_m5_regular      = parseInt(datos[2]['regular']);
    let exp_m5_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let exp_m5_desarrollado = parseInt(datos[2]['desarrollado']);
    let exp_m5_excelente    = parseInt(datos[2]['excelente']);

    Highcharts.chart('nivelesConocimientoExamenTeoricoPractico_practico', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'NIVELES DE CONOCIMIENTO EXAMEN PRACTICO'
    },
    xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente']
    },
    yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
            text: 'Numero de Estudiantes'
        },
        stackLabels: {
            overflow: 'justify',
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    credits: {
        enabled: false 
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
      series: [{
        name: 'PPT',
        color: '#843C0C',
        data: [exp_m3_inicial, exp_m3_regular, exp_m3_enDesarrollo, exp_m3_desarrollado, exp_m3_excelente]
      }, {
        name: 'Excel',
        color: '#006600',
        data: [exp_m4_inicial, exp_m4_regular, exp_m4_enDesarrollo, exp_m4_desarrollado, exp_m4_excelente]
      }, {
        name: 'Word',
        color: '#1F4E79',
        data: [exp_m5_inicial, exp_m5_regular, exp_m5_enDesarrollo, exp_m5_desarrollado, exp_m5_excelente]
      }]
    });
}

function nivelesConocimientoExamenTeoricoPractico_practico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoExamenTeoricoPractico_practico",
        success: function(resp){        
            callback(resp);
        }   
    });
}



/////////////////////////////////////////////////////////////NIVELES DE CONOCIMIENTO POR MODULO TEORICO PRACTICO 
function informe_niveles_conocimiento_etp_admision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=informe_niveles_conocimiento_etp_admision",
        success: function(data){  
            let tabla = "";
            $('#headTablaNivelConocimientoAdmisionTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM1 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM2 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM5 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM6 + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM6  + "</td>";
                    tabla += "<td align='center'>" + data[i].extM1 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM2 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM5 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM6 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoPPT   + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoExcel + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoWord  + "</td>";                  
                    tabla += "</tr>";
                }
            }
            $('#tablaNivelConocimientoAdmisionTP').dataTable().fnClearTable();
            $('#tablaNivelConocimientoAdmisionTP').dataTable().fnDestroy();
            $("#bodyTablaNivelConocimientoAdmisionTP").html("");
            $("#tablaNivelConocimientoAdmisionTP").append(tabla);
            $('#tablaNivelConocimientoAdmisionTP').dataTable().
            $('#tablaNivelConocimientoAdmisionTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}

function informe_niveles_conocimiento_etp_espol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=informe_niveles_conocimiento_etp_espol",
        success: function(data){  
            let tabla = "";
            $('#headTablaNivelConocimientoEspolTP').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].nombres + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos + "</td>";
                    tabla += "<td align='center'>" + data[i].email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM1 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM2 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM5 + "</td>";
                    tabla += "<td align='center'>" + data[i].diagnosticoM6 + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM1  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM2  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM3  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM4  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM5  + "</td>";
                    tabla += "<td align='center'>" + data[i].moocM6  + "</td>";
                    tabla += "<td align='center'>" + data[i].extM1 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM2 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM3 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM4 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM5 + "</td>";
                    tabla += "<td align='center'>" + data[i].extM6 + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoPPT   + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoExcel + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoWord  + "</td>";                  
                    tabla += "</tr>";
                }
            }
            $('#tablaNivelConocimientoEspolTP').dataTable().fnClearTable();
            $('#tablaNivelConocimientoEspolTP').dataTable().fnDestroy();
            $("#bodyTablaNivelConocimientoEspolTP").html("");
            $("#tablaNivelConocimientoEspolTP").append(tabla);
            $('#tablaNivelConocimientoEspolTP').dataTable().
            $('#tablaNivelConocimientoEspolTP').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}


function grafico_niveles_conocimiento_tallarin(datos){
    
    let diagnostico_m1_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m1_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m1_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m1_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m1_excelente    = parseInt(datos[0]['excelente']);

    let diagnostico_m2_inicial      = parseInt(datos[1]['inicial']);
    let diagnostico_m2_regular      = parseInt(datos[1]['regular']);
    let diagnostico_m2_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let diagnostico_m2_desarrollado = parseInt(datos[1]['desarrollado']);
    let diagnostico_m2_excelente    = parseInt(datos[1]['excelente']);

    let diagnostico_m3_inicial      = parseInt(datos[2]['inicial']);
    let diagnostico_m3_regular      = parseInt(datos[2]['regular']);
    let diagnostico_m3_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let diagnostico_m3_desarrollado = parseInt(datos[2]['desarrollado']);
    let diagnostico_m3_excelente    = parseInt(datos[2]['excelente']);

    let diagnostico_m4_inicial      = parseInt(datos[3]['inicial']);
    let diagnostico_m4_regular      = parseInt(datos[3]['regular']);
    let diagnostico_m4_enDesarrollo = parseInt(datos[3]['enDesarrollo']);
    let diagnostico_m4_desarrollado = parseInt(datos[3]['desarrollado']);
    let diagnostico_m4_excelente    = parseInt(datos[3]['excelente']);

    let diagnostico_m5_inicial      = parseInt(datos[4]['inicial']);
    let diagnostico_m5_regular      = parseInt(datos[4]['regular']);
    let diagnostico_m5_enDesarrollo = parseInt(datos[4]['enDesarrollo']);
    let diagnostico_m5_desarrollado = parseInt(datos[4]['desarrollado']);
    let diagnostico_m5_excelente    = parseInt(datos[4]['excelente']);

    let diagnostico_m6_inicial      = parseInt(datos[5]['inicial']);
    let diagnostico_m6_regular      = parseInt(datos[5]['regular']);
    let diagnostico_m6_enDesarrollo = parseInt(datos[5]['enDesarrollo']);
    let diagnostico_m6_desarrollado = parseInt(datos[5]['desarrollado']);
    let diagnostico_m6_excelente    = parseInt(datos[5]['excelente']);

    let mooc_m1_inicial      = parseInt(datos[6]['inicial']);
    let mooc_m1_regular      = parseInt(datos[6]['regular']);
    let mooc_m1_enDesarrollo = parseInt(datos[6]['enDesarrollo']);
    let mooc_m1_desarrollado = parseInt(datos[6]['desarrollado']);
    let mooc_m1_excelente    = parseInt(datos[6]['excelente']);

    let mooc_m2_inicial      = parseInt(datos[7]['inicial']);
    let mooc_m2_regular      = parseInt(datos[7]['regular']);
    let mooc_m2_enDesarrollo = parseInt(datos[7]['enDesarrollo']);
    let mooc_m2_desarrollado = parseInt(datos[7]['desarrollado']);
    let mooc_m2_excelente    = parseInt(datos[7]['excelente']);

    let mooc_m3_inicial      = parseInt(datos[8]['inicial']);
    let mooc_m3_regular      = parseInt(datos[8]['regular']);
    let mooc_m3_enDesarrollo = parseInt(datos[8]['enDesarrollo']);
    let mooc_m3_desarrollado = parseInt(datos[8]['desarrollado']);
    let mooc_m3_excelente    = parseInt(datos[8]['excelente']);

    let mooc_m4_inicial      = parseInt(datos[9]['inicial']);
    let mooc_m4_regular      = parseInt(datos[9]['regular']);
    let mooc_m4_enDesarrollo = parseInt(datos[9]['enDesarrollo']);
    let mooc_m4_desarrollado = parseInt(datos[9]['desarrollado']);
    let mooc_m4_excelente    = parseInt(datos[9]['excelente']);

    let mooc_m5_inicial      = parseInt(datos[10]['inicial']);
    let mooc_m5_regular      = parseInt(datos[10]['regular']);
    let mooc_m5_enDesarrollo = parseInt(datos[10]['enDesarrollo']);
    let mooc_m5_desarrollado = parseInt(datos[10]['desarrollado']);
    let mooc_m5_excelente    = parseInt(datos[10]['excelente']);

    let mooc_m6_inicial      = parseInt(datos[11]['inicial']);
    let mooc_m6_regular      = parseInt(datos[11]['regular']);
    let mooc_m6_enDesarrollo = parseInt(datos[11]['enDesarrollo']);
    let mooc_m6_desarrollado = parseInt(datos[11]['desarrollado']);
    let mooc_m6_excelente    = parseInt(datos[11]['excelente']);

    let ext_m1_inicial      = parseInt(datos[12]['inicial']);
    let ext_m1_regular      = parseInt(datos[12]['regular']);
    let ext_m1_enDesarrollo = parseInt(datos[12]['enDesarrollo']);
    let ext_m1_desarrollado = parseInt(datos[12]['desarrollado']);
    let ext_m1_excelente    = parseInt(datos[12]['excelente']);

    let ext_m2_inicial      = parseInt(datos[13]['inicial']);
    let ext_m2_regular      = parseInt(datos[13]['regular']);
    let ext_m2_enDesarrollo = parseInt(datos[13]['enDesarrollo']);
    let ext_m2_desarrollado = parseInt(datos[13]['desarrollado']);
    let ext_m2_excelente    = parseInt(datos[13]['excelente']);

    let ext_m3_inicial      = parseInt(datos[14]['inicial']);
    let ext_m3_regular      = parseInt(datos[14]['regular']);
    let ext_m3_enDesarrollo = parseInt(datos[14]['enDesarrollo']);
    let ext_m3_desarrollado = parseInt(datos[14]['desarrollado']);
    let ext_m3_excelente    = parseInt(datos[14]['excelente']);

    let ext_m4_inicial      = parseInt(datos[15]['inicial']);
    let ext_m4_regular      = parseInt(datos[15]['regular']);
    let ext_m4_enDesarrollo = parseInt(datos[15]['enDesarrollo']);
    let ext_m4_desarrollado = parseInt(datos[15]['desarrollado']);
    let ext_m4_excelente    = parseInt(datos[15]['excelente']);

    let ext_m5_inicial      = parseInt(datos[16]['inicial']);
    let ext_m5_regular      = parseInt(datos[16]['regular']);
    let ext_m5_enDesarrollo = parseInt(datos[16]['enDesarrollo']);
    let ext_m5_desarrollado = parseInt(datos[16]['desarrollado']);
    let ext_m5_excelente    = parseInt(datos[16]['excelente']);

    let ext_m6_inicial      = parseInt(datos[17]['inicial']);
    let ext_m6_regular      = parseInt(datos[17]['regular']);
    let ext_m6_enDesarrollo = parseInt(datos[17]['enDesarrollo']);
    let ext_m6_desarrollado = parseInt(datos[17]['desarrollado']);
    let ext_m6_excelente    = parseInt(datos[17]['excelente']);

    let exp_m3_inicial      = parseInt(datos[18]['inicial']);
    let exp_m3_regular      = parseInt(datos[18]['regular']);
    let exp_m3_enDesarrollo = parseInt(datos[18]['enDesarrollo']);
    let exp_m3_desarrollado = parseInt(datos[18]['desarrollado']);
    let exp_m3_excelente    = parseInt(datos[18]['excelente']);

    let exp_m4_inicial      = parseInt(datos[19]['inicial']);
    let exp_m4_regular      = parseInt(datos[19]['regular']);
    let exp_m4_enDesarrollo = parseInt(datos[19]['enDesarrollo']);
    let exp_m4_desarrollado = parseInt(datos[19]['desarrollado']);
    let exp_m4_excelente    = parseInt(datos[19]['excelente']);

    let exp_m5_inicial      = parseInt(datos[20]['inicial']);
    let exp_m5_regular      = parseInt(datos[20]['regular']);
    let exp_m5_enDesarrollo = parseInt(datos[20]['enDesarrollo']);
    let exp_m5_desarrollado = parseInt(datos[20]['desarrollado']);
    let exp_m5_excelente    = parseInt(datos[20]['excelente']);

    Highcharts.chart('nivelesConocimientoTallarin', {
        title: {
            text: 'NIVELES DE CONOCIMIENTO GENERAL'
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Numero de Estudiantes'
            },
            tickInterval: 20, 
            labels: {
                overflow: 'justify'
            }
        },
        xAxis: {
            categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
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
                                return 'Diagnostico' + ': ' + point.y;
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
            data: [diagnostico_m1_inicial, diagnostico_m1_regular, diagnostico_m1_enDesarrollo, diagnostico_m1_desarrollado, diagnostico_m1_excelente]
            }, {
            color: '#B08600',
            name: 'Mooc',
            linkedTo: 'computador',
            data: [mooc_m1_inicial, mooc_m1_regular, mooc_m1_enDesarrollo, mooc_m1_desarrollado, mooc_m1_excelente]
            } , {
            color: '#7F6000',
            name: 'Examen Teorico',
            linkedTo: 'computador',
            data: [ext_m1_inicial, ext_m1_regular, ext_m1_enDesarrollo, ext_m1_desarrollado, ext_m1_excelente]
            }, {
            name: 'Internet',
            color: '#47CFFF',
            id: 'internet',
            data: [diagnostico_m2_inicial, diagnostico_m2_regular, diagnostico_m2_enDesarrollo, diagnostico_m2_desarrollado,    diagnostico_m2_excelente]
            }, {
            color : '#00A1DA',
            name: 'Mooc',
            linkedTo: 'internet',
            data: [mooc_m2_inicial, mooc_m2_regular, mooc_m2_enDesarrollo, mooc_m2_desarrollado, mooc_m2_excelente]
            }, {
            color : '#00729A',
            name: 'Examen Teorico',
            linkedTo:  'internet',
            data: [ext_m2_inicial, ext_m2_regular, ext_m2_enDesarrollo, ext_m2_desarrollado, ext_m2_excelente]
            }, {
            name: 'PPT',
            color: '#F8CBAD',
            id: 'ppt',
            data: [diagnostico_m3_inicial, diagnostico_m3_regular, diagnostico_m3_enDesarrollo, diagnostico_m3_desarrollado, diagnostico_m3_excelente]
            }, {
            color: '#F4B183',
            linkedTo: 'ppt',
            name: 'Mooc',
            data: [mooc_m3_inicial, mooc_m3_regular, mooc_m3_enDesarrollo, mooc_m3_desarrollado, mooc_m3_excelente]
            }, {
            color: '#C55A11',
            linkedTo: 'ppt',
            name: 'Examen Teorico',
            data: [ext_m3_inicial, ext_m3_regular, ext_m3_enDesarrollo, ext_m3_desarrollado, ext_m3_excelente]
            }, {
            color: '#843C0C',
            linkedTo: 'ppt',
            name: 'Examen Practico',
            data: [exp_m3_inicial, exp_m3_regular, exp_m3_enDesarrollo, exp_m3_desarrollado, exp_m3_excelente]
            }, {
            name: 'Word',
            color: '#BDD7EE',
            id: 'word',
            data: [diagnostico_m4_inicial, diagnostico_m4_regular, diagnostico_m4_enDesarrollo, diagnostico_m4_desarrollado, diagnostico_m4_excelente]
            }, {
            color : '#9DC3E6',
            linkedTo: 'word',
            name: 'Mooc',
            data: [mooc_m4_inicial, mooc_m4_regular, mooc_m4_enDesarrollo, mooc_m4_desarrollado, mooc_m4_excelente]
            }, {
            color : '#2E75B6',
            linkedTo: 'word',
            name: 'Examen Teorico',
            data: [ext_m4_inicial, ext_m4_regular, ext_m4_enDesarrollo, ext_m4_desarrollado, ext_m4_excelente]
            }, {
            color : '#1F4E79',
            linkedTo: 'word',
            name: 'Examen Practico',
            data: [exp_m4_inicial, exp_m4_regular, exp_m4_enDesarrollo, exp_m4_desarrollado, exp_m4_excelente]
            }, {
            name: 'Excel',
            color: '#97E597',
            id: 'excel',
            data: [diagnostico_m5_inicial, diagnostico_m5_regular, diagnostico_m5_enDesarrollo, diagnostico_m5_desarrollado, diagnostico_m5_excelente]
            }, {
            color: '#4AD24A',
            linkedTo: 'excel',
            name: 'Mooc',
            data: [mooc_m5_inicial, mooc_m5_regular, mooc_m5_enDesarrollo, mooc_m5_desarrollado, mooc_m5_excelente]
            }, {
            color: '#009900',
            linkedTo: 'excel',
            name: 'Examen Teorico',
            data: [ext_m5_inicial, ext_m5_regular, ext_m5_enDesarrollo, ext_m5_desarrollado, ext_m5_excelente]
            }, {
            color: '#006600',
            linkedTo: 'excel',
            name: 'Examen Practico',
            data: [exp_m5_inicial, exp_m5_regular, exp_m5_enDesarrollo, exp_m5_desarrollado, exp_m5_excelente]
            }, {
            name: 'Herramientas',
            color: '#C7A0E4',
            id: 'herramientas',
            data: [diagnostico_m6_inicial, diagnostico_m6_regular, diagnostico_m6_enDesarrollo, diagnostico_m6_desarrollado, diagnostico_m6_excelente]
            }, {
            color: '#9A57CD',
            linkedTo: 'herramientas',
            name: 'Mooc',
            data: [mooc_m6_inicial, mooc_m6_regular, mooc_m6_enDesarrollo, mooc_m6_desarrollado, mooc_m6_excelente]
            }, {
            color: '#7030A0',
            linkedTo: 'herramientas',
            name: 'Examen Teorico',
            data: [ext_m6_inicial, ext_m6_regular, ext_m6_enDesarrollo, ext_m6_desarrollado, ext_m6_excelente]
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


function niveles_conocimiento_tallarin(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=niveles_conocimiento_tallarin",
        success: function(resp){        
            callback(resp);
        }    
    });
}


function grafico_niveles_conocimiento_m1(datos){

    let diagnostico_m1_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m1_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m1_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m1_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m1_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m1_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m1_regular      = parseInt(datos[1]['regular']);
    let mooc_m1_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m1_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m1_excelente    = parseInt(datos[1]['excelente']);

    let ext_m1_inicial      = parseInt(datos[2]['inicial']);
    let ext_m1_regular      = parseInt(datos[2]['regular']);
    let ext_m1_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let ext_m1_desarrollado = parseInt(datos[2]['desarrollado']);
    let ext_m1_excelente    = parseInt(datos[2]['excelente']);

    Highcharts.chart('nivelesConocimientoM1', {
      title: {
        text: 'NIVELES DE CONOCIMIENTO COMPUTADOR'
      },
      yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
          text: 'Numero de Estudiantes'
        },
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
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
            }
        }
    },

      series: [{
        name: 'Diagnostico',
        color: '#FFD966',
        data: [diagnostico_m1_inicial, diagnostico_m1_regular, diagnostico_m1_enDesarrollo, diagnostico_m1_desarrollado, diagnostico_m1_excelente]
      }, {
        name: 'Mooc',
        color: '#B08600',
        data: [mooc_m1_inicial, mooc_m1_regular, mooc_m1_enDesarrollo, mooc_m1_desarrollado, mooc_m1_excelente]
      }, {
        name: 'Examen Teorico',
        color: '#7F6000',
        data: [ext_m1_inicial, ext_m1_regular, ext_m1_enDesarrollo, ext_m1_desarrollado, ext_m1_excelente]
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

function nivelesConocimientoM1(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoM1",
        success: function(resp){        
            callback(resp);
        }     
    });
}

function grafico_niveles_conocimiento_m2(datos){

    let diagnostico_m2_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m2_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m2_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m2_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m2_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m2_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m2_regular      = parseInt(datos[1]['regular']);
    let mooc_m2_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m2_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m2_excelente    = parseInt(datos[1]['excelente']);

    let ext_m2_inicial      = parseInt(datos[2]['inicial']);
    let ext_m2_regular      = parseInt(datos[2]['regular']);
    let ext_m2_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let ext_m2_desarrollado = parseInt(datos[2]['desarrollado']);
    let ext_m2_excelente    = parseInt(datos[2]['excelente']);

        Highcharts.chart('nivelesConocimientoM2', {
          title: {
            text: 'NIVELES DE CONOCIMIENTO INTERNET'
          },
          yAxis: {
            min: 0,
            tickInterval: 20, 
            title: {
              text: 'Numero de Estudiantes'
            },
            labels: {
                overflow: 'justify'
            }
          },
         xAxis: {
            categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
            title: {
                text: null
            }
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
                }
            }
        },
       
          series: [{
            name: 'Diagnostico',
            color: '#47CFFF',
            data: [diagnostico_m2_inicial, diagnostico_m2_regular, diagnostico_m2_enDesarrollo, diagnostico_m2_desarrollado, diagnostico_m2_excelente]
          }, {
            name: 'Mooc',
            color: '#00A1DA',
            data: [mooc_m2_inicial, mooc_m2_regular, mooc_m2_enDesarrollo, mooc_m2_desarrollado, mooc_m2_excelente]
          }, {
            name: 'Examen Teorico',
            color: '#00729A',
            data: [ext_m2_inicial, ext_m2_regular, ext_m2_enDesarrollo, ext_m2_desarrollado, ext_m2_excelente]
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

function nivelesConocimientoM2(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoM2",
        success: function(resp){        
            callback(resp);
        }   
    });
}


function grafico_niveles_conocimiento_m3(datos){

    let diagnostico_m3_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m3_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m3_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m3_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m3_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m3_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m3_regular      = parseInt(datos[1]['regular']);
    let mooc_m3_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m3_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m3_excelente    = parseInt(datos[1]['excelente']);

    let ext_m3_inicial      = parseInt(datos[2]['inicial']);
    let ext_m3_regular      = parseInt(datos[2]['regular']);
    let ext_m3_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let ext_m3_desarrollado = parseInt(datos[2]['desarrollado']);
    let ext_m3_excelente    = parseInt(datos[2]['excelente']);

    let exp_m3_inicial      = parseInt(datos[3]['inicial']);
    let exp_m3_regular      = parseInt(datos[3]['regular']);
    let exp_m3_enDesarrollo = parseInt(datos[3]['enDesarrollo']);
    let exp_m3_desarrollado = parseInt(datos[3]['desarrollado']);
    let exp_m3_excelente    = parseInt(datos[3]['excelente']);

    Highcharts.chart('nivelesConocimientoM3', {

      title: {
        text: 'NIVELES DE CONOCIMIENTO POWER POINT'
      },

      yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
          text: 'Numero de Estudiantes'
        },
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
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
            }
        }
    },


      series: [{            
        name: 'Diagnostico',
        color : '#F8CBAD',
        data: [diagnostico_m3_inicial, diagnostico_m3_regular, diagnostico_m3_enDesarrollo, diagnostico_m3_desarrollado, diagnostico_m3_excelente]
      }, {
        name: 'Mooc',
        color : '#F4B183',
        data: [mooc_m3_inicial, mooc_m3_regular, mooc_m3_enDesarrollo, mooc_m3_desarrollado, mooc_m3_excelente]
      }, {
        name: 'Examen Teorico',
        color : '#C55A11',
        data: [ext_m3_inicial, ext_m3_regular, ext_m3_enDesarrollo, ext_m3_desarrollado, ext_m3_excelente]
      }, {
        name: 'Examen Practico',
        color : '#843C0C',
        data: [exp_m3_inicial, exp_m3_regular, exp_m3_enDesarrollo, exp_m3_desarrollado, exp_m3_excelente]
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

function nivelesConocimientoM3(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoM3",
        success: function(resp){        
            callback(resp);
        }   
    });
}


function grafico_niveles_conocimiento_m4(datos){

    let diagnostico_m4_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m4_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m4_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m4_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m4_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m4_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m4_regular      = parseInt(datos[1]['regular']);
    let mooc_m4_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m4_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m4_excelente    = parseInt(datos[1]['excelente']);

    let ext_m4_inicial      = parseInt(datos[2]['inicial']);
    let ext_m4_regular      = parseInt(datos[2]['regular']);
    let ext_m4_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let ext_m4_desarrollado = parseInt(datos[2]['desarrollado']);
    let ext_m4_excelente    = parseInt(datos[2]['excelente']);

    let exp_m4_inicial      = parseInt(datos[3]['inicial']);
    let exp_m4_regular      = parseInt(datos[3]['regular']);
    let exp_m4_enDesarrollo = parseInt(datos[3]['enDesarrollo']);
    let exp_m4_desarrollado = parseInt(datos[3]['desarrollado']);
    let exp_m4_excelente    = parseInt(datos[3]['excelente']);

    Highcharts.chart('nivelesConocimientoM4', {
      title: {
        text: 'NIVELES DE CONOCIMIENTO WORD'
      },
      yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
          text: 'Numero de Estudiantes'
        },
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
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
            }
        }
    },

      series: [{
        name: 'Diagnostico',
        color : '#BDD7EE',
        data: [diagnostico_m4_inicial, diagnostico_m4_regular, diagnostico_m4_enDesarrollo, diagnostico_m4_desarrollado, diagnostico_m4_excelente]
      }, {
        name: 'Mooc',
        color : '#9DC3E6',
        data: [mooc_m4_inicial, mooc_m4_regular, mooc_m4_enDesarrollo, mooc_m4_desarrollado, mooc_m4_excelente]
      }, {
        name: 'Examen Teorico',
        color : '#2E75B6',
        data: [ext_m4_inicial, ext_m4_regular, ext_m4_enDesarrollo, ext_m4_desarrollado, ext_m4_excelente]
      }, {
        name: 'Examen Practico',
        color : '#1F4E79',
        data: [exp_m4_inicial, exp_m4_regular, exp_m4_enDesarrollo, exp_m4_desarrollado, exp_m4_excelente]
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

function nivelesConocimientoM4(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoM4",
        success: function(resp){        
            callback(resp);
        }   
    });
}

function grafico_niveles_conocimiento_m5(datos){

    let diagnostico_m5_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m5_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m5_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m5_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m5_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m5_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m5_regular      = parseInt(datos[1]['regular']);
    let mooc_m5_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m5_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m5_excelente    = parseInt(datos[1]['excelente']);

    let ext_m5_inicial      = parseInt(datos[2]['inicial']);
    let ext_m5_regular      = parseInt(datos[2]['regular']);
    let ext_m5_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let ext_m5_desarrollado = parseInt(datos[2]['desarrollado']);
    let ext_m5_excelente    = parseInt(datos[2]['excelente']);

    let exp_m5_inicial      = parseInt(datos[3]['inicial']);
    let exp_m5_regular      = parseInt(datos[3]['regular']);
    let exp_m5_enDesarrollo = parseInt(datos[3]['enDesarrollo']);
    let exp_m5_desarrollado = parseInt(datos[3]['desarrollado']);
    let exp_m5_excelente    = parseInt(datos[3]['excelente']);

    Highcharts.chart('nivelesConocimientoM5', {
      title: {
        text: 'NIVELES DE CONOCIMIENTO EXCEL'
      },
      yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
          text: 'Numero de Estudiantes'
        },
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
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
            }
        }
    },

      series: [{
        name: 'Diagnostico',
        color: "#97E597",
        data: [diagnostico_m5_inicial, diagnostico_m5_regular, diagnostico_m5_enDesarrollo, diagnostico_m5_desarrollado, diagnostico_m5_excelente]
      }, {
        name: 'Mooc',
        color: "#4AD24A",
        data: [mooc_m5_inicial, mooc_m5_regular, mooc_m5_enDesarrollo, mooc_m5_desarrollado, mooc_m5_excelente]
      }, {
        name: 'Examen Teorico',
        color: "#009900",
        data: [ext_m5_inicial, ext_m5_regular, ext_m5_enDesarrollo, ext_m5_desarrollado, ext_m5_excelente]
      }, {
        name: 'Examen Practico',
        color: "#006600",
        data: [exp_m5_inicial, exp_m5_regular, exp_m5_enDesarrollo, exp_m5_desarrollado, exp_m5_excelente]
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

function nivelesConocimientoM5(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoM5",
        success: function(resp){        
            callback(resp);
        }   
    });
}

function grafico_niveles_conocimiento_m6(datos){

    let diagnostico_m6_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m6_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m6_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m6_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m6_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m6_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m6_regular      = parseInt(datos[1]['regular']);
    let mooc_m6_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m6_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m6_excelente    = parseInt(datos[1]['excelente']);

    let ext_m6_inicial      = parseInt(datos[2]['inicial']);
    let ext_m6_regular      = parseInt(datos[2]['regular']);
    let ext_m6_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let ext_m6_desarrollado = parseInt(datos[2]['desarrollado']);
    let ext_m6_excelente    = parseInt(datos[2]['excelente']);

    Highcharts.chart('nivelesConocimientoM6', {
      title: {
        text: 'NIVELES DE CONOCIMIENTO HERRAMIENTAS'
      },
      yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
          text: 'Numero de Estudiantes'
        },
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
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
            }
        }
    },

      series: [{
        name: 'Diagnostico',
        color: '#C7A0E4',
        data: [diagnostico_m6_inicial, diagnostico_m6_regular, diagnostico_m6_enDesarrollo, diagnostico_m6_desarrollado, diagnostico_m6_excelente]
      }, {
        name: 'Mooc',
        color: '#9A57CD',
        data: [mooc_m6_inicial, mooc_m6_regular, mooc_m6_enDesarrollo, mooc_m6_desarrollado, mooc_m6_excelente]
      }, {
        name: 'Examen Teorico',
        color: '#7030A0',
        data: [ext_m6_inicial, ext_m6_regular, ext_m6_enDesarrollo, ext_m6_desarrollado, ext_m6_excelente]
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

function nivelesConocimientoM6(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoM6",
        success: function(resp){        
            callback(resp);
        }  
    });
}


/////////////////////////////////////////////////////////////NIVELES DE CONOCIMIENTO POR COMPONENTE  TEORICO PRACTICO 
function grafico_nivelesConocimientoGraph(datos){

    let diagnostico_inicial = parseInt(datos[0]['inicial']);
    let mooc_inicial        = parseInt(datos[1]['inicial']);
    let ext_inicial         = parseInt(datos[2]['inicial']);
    let exp_m3_inicial      = parseInt(datos[3]['inicial']);
    let exp_m4_inicial      = parseInt(datos[4]['inicial']);
    let exp_m5_inicial      = parseInt(datos[5]['inicial']);
    let total_exp_inicial   = exp_m3_inicial + exp_m4_inicial + exp_m5_inicial

    let diagnostico_regular = parseInt(datos[0]['regular']);
    let mooc_regular        = parseInt(datos[1]['regular']);
    let ext_regular         = parseInt(datos[2]['regular']);
    let exp_m3_regular      = parseInt(datos[3]['regular']);
    let exp_m4_regular      = parseInt(datos[4]['regular']);
    let exp_m5_regular      = parseInt(datos[5]['regular']);
    let total_exp_regular   = exp_m3_regular + exp_m4_regular + exp_m5_regular

    let diagnostico_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let mooc_enDesarrollo        = parseInt(datos[1]['enDesarrollo']);
    let ext_enDesarrollo         = parseInt(datos[2]['enDesarrollo']);
    let exp_m3_enDesarrollo      = parseInt(datos[3]['enDesarrollo']);
    let exp_m4_enDesarrollo      = parseInt(datos[4]['enDesarrollo']);
    let exp_m5_enDesarrollo      = parseInt(datos[5]['enDesarrollo']);
    let total_exp_enDesarrollo   = exp_m3_enDesarrollo + exp_m4_enDesarrollo + exp_m5_enDesarrollo

    let diagnostico_desarrollado = parseInt(datos[0]['desarrollado']);
    let mooc_desarrollado        = parseInt(datos[1]['desarrollado']);
    let ext_desarrollado         = parseInt(datos[2]['desarrollado']);
    let exp_m3_desarrollado      = parseInt(datos[3]['desarrollado']);
    let exp_m4_desarrollado      = parseInt(datos[4]['desarrollado']);
    let exp_m5_desarrollado      = parseInt(datos[5]['desarrollado']);
    let total_exp_desarrollado   = exp_m3_desarrollado + exp_m4_desarrollado + exp_m5_desarrollado

    let diagnostico_excelente = parseInt(datos[0]['excelente']);
    let mooc_excelente        = parseInt(datos[1]['excelente']);
    let ext_excelente         = parseInt(datos[2]['excelente']);
    let exp_m3_excelente      = parseInt(datos[3]['excelente']);
    let exp_m4_excelente      = parseInt(datos[4]['excelente']);
    let exp_m5_excelente      = parseInt(datos[5]['excelente']);
    let total_exp_excelente   = exp_m3_excelente + exp_m4_excelente + exp_m5_excelente


    Highcharts.chart('nivelesConocimientoGraph', {
      title: {
        text: 'NIVELES DE CONOCIMIENTO GENERAL'
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Numero de Estudiantes'
        },
        tickInterval: 20, 
        labels: {
            overflow: 'justify'
        }
      },
     xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente'],
        title: {
            text: null
        }
     },
     legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
      },
    credits: {
        enabled: false 
    },
    tooltip: {
        formatter: function () {
            // The first returned item is the header, subsequent items are the
            // points
            return ['<b>' + this.x + '</b>'].concat(
                this.points ?
                    this.points.map(function (point) {
                        return point.series.name + ': ' + point.y;
                    }) : []
            );
        },
        split: true
    },
    plotOptions: {
          bar: {
            dataLabels: {
                enabled: true
            }
        }
    },  

      series: [{
        name: 'Diagnostico',
        data: [diagnostico_inicial, diagnostico_regular, diagnostico_enDesarrollo, diagnostico_desarrollado, diagnostico_excelente]
      }, {
        name: 'Mooc',
        data: [mooc_inicial, mooc_regular, mooc_enDesarrollo, mooc_desarrollado, mooc_excelente]
      }, {
        name: 'Examenes Teoricos',
        data: [ext_inicial, ext_regular, ext_enDesarrollo, ext_desarrollado, ext_excelente]
      }, {
        name: 'Examenes Practicos',
        data: [total_exp_inicial, total_exp_regular, total_exp_enDesarrollo, total_exp_desarrollado, total_exp_excelente]
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

function nivelesConocimientoGraph(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoGraph",
        success: function(resp){        
            callback(resp);
        }     
    });
}

function grafico_nivelesConocimientoDiagnostico(datos){

    let diagnostico_m1_inicial      = parseInt(datos[0]['inicial']);
    let diagnostico_m1_regular      = parseInt(datos[0]['regular']);
    let diagnostico_m1_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let diagnostico_m1_desarrollado = parseInt(datos[0]['desarrollado']);
    let diagnostico_m1_excelente    = parseInt(datos[0]['excelente']);

    let diagnostico_m2_inicial      = parseInt(datos[1]['inicial']);
    let diagnostico_m2_regular      = parseInt(datos[1]['regular']);
    let diagnostico_m2_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let diagnostico_m2_desarrollado = parseInt(datos[1]['desarrollado']);
    let diagnostico_m2_excelente    = parseInt(datos[1]['excelente']);

    let diagnostico_m3_inicial      = parseInt(datos[2]['inicial']);
    let diagnostico_m3_regular      = parseInt(datos[2]['regular']);
    let diagnostico_m3_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let diagnostico_m3_desarrollado = parseInt(datos[2]['desarrollado']);
    let diagnostico_m3_excelente    = parseInt(datos[2]['excelente']);

    let diagnostico_m4_inicial      = parseInt(datos[3]['inicial']);
    let diagnostico_m4_regular      = parseInt(datos[3]['regular']);
    let diagnostico_m4_enDesarrollo = parseInt(datos[3]['enDesarrollo']);
    let diagnostico_m4_desarrollado = parseInt(datos[3]['desarrollado']);
    let diagnostico_m4_excelente    = parseInt(datos[3]['excelente']);

    let diagnostico_m5_inicial      = parseInt(datos[4]['inicial']);
    let diagnostico_m5_regular      = parseInt(datos[4]['regular']);
    let diagnostico_m5_enDesarrollo = parseInt(datos[4]['enDesarrollo']);
    let diagnostico_m5_desarrollado = parseInt(datos[4]['desarrollado']);
    let diagnostico_m5_excelente    = parseInt(datos[4]['excelente']);

    let diagnostico_m6_inicial      = parseInt(datos[5]['inicial']);
    let diagnostico_m6_regular      = parseInt(datos[5]['regular']);
    let diagnostico_m6_enDesarrollo = parseInt(datos[5]['enDesarrollo']);
    let diagnostico_m6_desarrollado = parseInt(datos[5]['desarrollado']);
    let diagnostico_m6_excelente    = parseInt(datos[5]['excelente']);

    Highcharts.chart('nivelesConocimientoDiagnostico', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'NIVELES DE CONOCIMIENTO DIAGNOSTICO'
    },
    xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente']
    },
    yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
            text: 'Numero de Estudiantes'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    credits: {
        enabled: false 
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
          series: [{
            name: 'Computador',
            color: '#7F6000',
            data: [diagnostico_m1_inicial, diagnostico_m1_regular, diagnostico_m1_enDesarrollo, diagnostico_m1_desarrollado, diagnostico_m1_excelente]
          }, {
            name: 'Internet',
            color: '#00729A',
            data: [diagnostico_m2_inicial, diagnostico_m2_regular, diagnostico_m2_enDesarrollo, diagnostico_m2_desarrollado, diagnostico_m2_excelente]
          }, {
            name: 'PPT',
            color: '#843C0C',
            data: [diagnostico_m3_inicial, diagnostico_m3_regular, diagnostico_m3_enDesarrollo, diagnostico_m3_desarrollado, diagnostico_m3_excelente]
          }, {
            name: 'Excel',
            color: '#006600',
            data: [diagnostico_m4_inicial, diagnostico_m4_regular, diagnostico_m4_enDesarrollo, diagnostico_m4_desarrollado, diagnostico_m4_excelente]
          }, {
            name: 'Word',
            color: '#1F4E79',
            data: [diagnostico_m5_inicial, diagnostico_m5_regular, diagnostico_m5_enDesarrollo, diagnostico_m5_desarrollado, diagnostico_m5_excelente]
          }, {
            name: 'Herramientas',
            color: '#7030A0',
            data: [diagnostico_m6_inicial, diagnostico_m6_regular, diagnostico_m6_enDesarrollo, diagnostico_m6_desarrollado, diagnostico_m6_excelente]
          }]
    });
}

function nivelesConocimientoDiagnostico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoDiagnostico",
        success: function(resp){        
            callback(resp);
        }   
    });
}


function grafico_nivelesConocimientoMooc(datos){

    let mooc_m1_inicial      = parseInt(datos[0]['inicial']);
    let mooc_m1_regular      = parseInt(datos[0]['regular']);
    let mooc_m1_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let mooc_m1_desarrollado = parseInt(datos[0]['desarrollado']);
    let mooc_m1_excelente    = parseInt(datos[0]['excelente']);

    let mooc_m2_inicial      = parseInt(datos[1]['inicial']);
    let mooc_m2_regular      = parseInt(datos[1]['regular']);
    let mooc_m2_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let mooc_m2_desarrollado = parseInt(datos[1]['desarrollado']);
    let mooc_m2_excelente    = parseInt(datos[1]['excelente']);

    let mooc_m3_inicial      = parseInt(datos[2]['inicial']);
    let mooc_m3_regular      = parseInt(datos[2]['regular']);
    let mooc_m3_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let mooc_m3_desarrollado = parseInt(datos[2]['desarrollado']);
    let mooc_m3_excelente    = parseInt(datos[2]['excelente']);

    let mooc_m4_inicial      = parseInt(datos[3]['inicial']);
    let mooc_m4_regular      = parseInt(datos[3]['regular']);
    let mooc_m4_enDesarrollo = parseInt(datos[3]['enDesarrollo']);
    let mooc_m4_desarrollado = parseInt(datos[3]['desarrollado']);
    let mooc_m4_excelente    = parseInt(datos[3]['excelente']);

    let mooc_m5_inicial      = parseInt(datos[4]['inicial']);
    let mooc_m5_regular      = parseInt(datos[4]['regular']);
    let mooc_m5_enDesarrollo = parseInt(datos[4]['enDesarrollo']);
    let mooc_m5_desarrollado = parseInt(datos[4]['desarrollado']);
    let mooc_m5_excelente    = parseInt(datos[4]['excelente']);

    let mooc_m6_inicial      = parseInt(datos[5]['inicial']);
    let mooc_m6_regular      = parseInt(datos[5]['regular']);
    let mooc_m6_enDesarrollo = parseInt(datos[5]['enDesarrollo']);
    let mooc_m6_desarrollado = parseInt(datos[5]['desarrollado']);
    let mooc_m6_excelente    = parseInt(datos[5]['excelente']);

    Highcharts.chart('nivelesConocimientoMooc', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'NIVELES DE CONOCIMIENTO CURSO MOOC'
    },
    xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente']
    },
    yAxis: {
        tickInterval: 20, 
        title: {
            text: 'Numero de Estudiantes'
        },
        stackLabels: {
            overflow: 'justify',
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    credits: {
        enabled: false 
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
          series: [{
            name: 'Computador',
            color: '#7F6000',
            data: [mooc_m1_inicial, mooc_m1_regular, mooc_m1_enDesarrollo, mooc_m1_desarrollado, mooc_m1_excelente]
          }, {
            name: 'Internet',
            color: '#00729A',
            data: [mooc_m2_inicial, mooc_m2_regular, mooc_m2_enDesarrollo, mooc_m2_desarrollado, mooc_m2_excelente]
          }, {
            name: 'PPT',
            color: '#843C0C',
            data: [mooc_m3_inicial, mooc_m3_regular, mooc_m3_enDesarrollo, mooc_m3_desarrollado, mooc_m3_excelente]
          }, {
            name: 'Excel',
            color: '#006600',
            data: [mooc_m4_inicial, mooc_m4_regular, mooc_m4_enDesarrollo, mooc_m4_desarrollado, mooc_m4_excelente]
          }, {
            name: 'Word',
            color: '#1F4E79',
            data: [mooc_m5_inicial, mooc_m5_regular, mooc_m5_enDesarrollo, mooc_m5_desarrollado, mooc_m5_excelente]
          }, {
            name: 'Herramientas',
            color: '#7030A0',
            data: [mooc_m6_inicial, mooc_m6_regular, mooc_m6_enDesarrollo, mooc_m6_desarrollado, mooc_m6_excelente]
          }]
    });
}

function nivelesConocimientoMooc(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoMooc",
        success: function(resp){        
            callback(resp);
        }   
    });
}

function grafico_nivelesConocimientoExamenTeorico(datos){

    let ext_m1_inicial      = parseInt(datos[0]['inicial']);
    let ext_m1_regular      = parseInt(datos[0]['regular']);
    let ext_m1_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let ext_m1_desarrollado = parseInt(datos[0]['desarrollado']);
    let ext_m1_excelente    = parseInt(datos[0]['excelente']);

    let ext_m2_inicial      = parseInt(datos[1]['inicial']);
    let ext_m2_regular      = parseInt(datos[1]['regular']);
    let ext_m2_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let ext_m2_desarrollado = parseInt(datos[1]['desarrollado']);
    let ext_m2_excelente    = parseInt(datos[1]['excelente']);

    let ext_m3_inicial      = parseInt(datos[2]['inicial']);
    let ext_m3_regular      = parseInt(datos[2]['regular']);
    let ext_m3_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let ext_m3_desarrollado = parseInt(datos[2]['desarrollado']);
    let ext_m3_excelente    = parseInt(datos[2]['excelente']);

    let ext_m4_inicial      = parseInt(datos[3]['inicial']);
    let ext_m4_regular      = parseInt(datos[3]['regular']);
    let ext_m4_enDesarrollo = parseInt(datos[3]['enDesarrollo']);
    let ext_m4_desarrollado = parseInt(datos[3]['desarrollado']);
    let ext_m4_excelente    = parseInt(datos[3]['excelente']);

    let ext_m5_inicial      = parseInt(datos[4]['inicial']);
    let ext_m5_regular      = parseInt(datos[4]['regular']);
    let ext_m5_enDesarrollo = parseInt(datos[4]['enDesarrollo']);
    let ext_m5_desarrollado = parseInt(datos[4]['desarrollado']);
    let ext_m5_excelente    = parseInt(datos[4]['excelente']);

    let ext_m6_inicial      = parseInt(datos[5]['inicial']);
    let ext_m6_regular      = parseInt(datos[5]['regular']);
    let ext_m6_enDesarrollo = parseInt(datos[5]['enDesarrollo']);
    let ext_m6_desarrollado = parseInt(datos[5]['desarrollado']);
    let ext_m6_excelente    = parseInt(datos[5]['excelente']);

    Highcharts.chart('nivelesConocimientoExamenTeorico', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'NIVELES DE CONOCIMIENTO EXAMEN TEORICO'
    },
    xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente']
    },
    yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
            text: 'Numero de Estudiantes'
        },
        stackLabels: {
            overflow: 'justify',
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    credits: {
        enabled: false 
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
          series: [{
            name: 'Computador',
            color: '#7F6000',
            data: [ext_m1_inicial, ext_m1_regular, ext_m1_enDesarrollo, ext_m1_desarrollado, ext_m1_excelente]
          }, {
            name: 'Internet',
            color: '#00729A',
            data: [ext_m2_inicial, ext_m2_regular, ext_m2_enDesarrollo, ext_m2_desarrollado, ext_m2_excelente]
          }, {
            name: 'PPT',
            color: '#843C0C',
            data: [ext_m3_inicial, ext_m3_regular, ext_m3_enDesarrollo, ext_m3_desarrollado, ext_m3_excelente]
          }, {
            name: 'Excel',
            color: '#006600',
            data: [ext_m4_inicial, ext_m4_regular, ext_m4_enDesarrollo, ext_m4_desarrollado, ext_m4_excelente]
          }, {
            name: 'Word',
            color: '#1F4E79',
            data: [ext_m5_inicial, ext_m5_regular, ext_m5_enDesarrollo, ext_m5_desarrollado, ext_m5_excelente]
          }, {
            name: 'Herramientas',
            color: '#7030A0',
            data: [ext_m6_inicial, ext_m6_regular, ext_m6_enDesarrollo, ext_m6_desarrollado, ext_m6_excelente]
          }]

    });
}

function nivelesConocimientoExamenTeorico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoExamenTeorico",
        success: function(resp){        
            callback(resp);
        }   
    });
}

function grafico_nivelesConocimientoExamenTeoricoPractico(datos){

    let exp_m3_inicial      = parseInt(datos[0]['inicial']);
    let exp_m3_regular      = parseInt(datos[0]['regular']);
    let exp_m3_enDesarrollo = parseInt(datos[0]['enDesarrollo']);
    let exp_m3_desarrollado = parseInt(datos[0]['desarrollado']);
    let exp_m3_excelente    = parseInt(datos[0]['excelente']);

    let exp_m4_inicial      = parseInt(datos[1]['inicial']);
    let exp_m4_regular      = parseInt(datos[1]['regular']);
    let exp_m4_enDesarrollo = parseInt(datos[1]['enDesarrollo']);
    let exp_m4_desarrollado = parseInt(datos[1]['desarrollado']);
    let exp_m4_excelente    = parseInt(datos[1]['excelente']);

    let exp_m5_inicial      = parseInt(datos[2]['inicial']);
    let exp_m5_regular      = parseInt(datos[2]['regular']);
    let exp_m5_enDesarrollo = parseInt(datos[2]['enDesarrollo']);
    let exp_m5_desarrollado = parseInt(datos[2]['desarrollado']);
    let exp_m5_excelente    = parseInt(datos[2]['excelente']);

    Highcharts.chart('nivelesConocimientoExamenTeoricoPractico', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'NIVELES DE CONOCIMIENTO EXAMEN PRACTICO'
    },
    xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente']
    },
    yAxis: {
        min: 0,
        tickInterval: 20, 
        title: {
            text: 'Numero de Estudiantes'
        },
        stackLabels: {
            overflow: 'justify',
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    credits: {
        enabled: false 
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
      series: [{
        name: 'PPT',
        color: '#843C0C',
        data: [exp_m3_inicial, exp_m3_regular, exp_m3_enDesarrollo, exp_m3_desarrollado, exp_m3_excelente]
      }, {
        name: 'Excel',
        color: '#006600',
        data: [exp_m4_inicial, exp_m4_regular, exp_m4_enDesarrollo, exp_m4_desarrollado, exp_m4_excelente]
      }, {
        name: 'Word',
        color: '#1F4E79',
        data: [exp_m5_inicial, exp_m5_regular, exp_m5_enDesarrollo, exp_m5_desarrollado, exp_m5_excelente]
      }]
    });
}

function nivelesConocimientoExamenTeoricoPractico(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/nivelConocimiento.php?op=nivelesConocimientoExamenTeoricoPractico",
        success: function(resp){        
            callback(resp);
        }   
    });
}