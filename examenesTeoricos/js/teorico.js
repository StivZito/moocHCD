function num_est_registrados(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_registrados",
        success: function(resp){        
            $('#dh_estudiantes_registrados').html(resp['num_est_registrados']);
        }    
    });


}

function num_est_espol(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_espol",
        success: function(resp){        
            $('#dh_estudiantes_espol').html(resp['num_est_espol']);
        }    
    });


}

function num_est_admisiones(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_admisiones",
        success: function(resp){        
            $('#dh_estudiantes_admisiones').html(resp['num_est_admisiones']);
        }    
    });


}

function num_est_hicieron_espol(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_hicieron_espol",
        success: function(resp){        
            $('#dh_estudiantes_hicieron_espol').html(resp['num_est_hicieron_espol']);
        }    
    });


}

function num_est_hicieron_admision(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_hicieron_admision",
        success: function(resp){        
            $('#dh_estudiantes_hicieron_admisiones').html(resp['num_est_hicieron_admision']);
        }    
    });


}

function num_est_no_hicieron_espol(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_no_hicieron_espol",
        success: function(resp){        
            $('#dh_estudiantes_no_hicieron_espol').html(resp['num_est_no_hicieron_espol']);
        }    
    });


}

function num_est_no_hicieron_admision(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_no_hicieron_admision",
        success: function(resp){        
            $('#dh_estudiantes_no_hicieron_admisiones').html(resp['num_est_no_hicieron_admision']);
        }    
    });


}

function num_est_aprobaron_espol(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_aprobaron_espol",
        success: function(resp){        
            $('#dh_estudiantes_aprobados_espol').html(resp['num_est_aprobaron_espol']);
        }    
    });


}

function num_est_aprobaron_admision(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_aprobaron_admision",
        success: function(resp){        
            $('#dh_estudiantes_aprobados_admisiones').html(resp['num_est_aprobaron_admision']);
        }    
    });


}

function num_est_no_aprobaron_espol(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_no_aprobaron_espol",
        success: function(resp){        
            $('#dh_estudiantes_no_aprobados_espol').html(resp['num_est_no_aprobaron_espol']);
        }    
    });


}

function num_est_no_aprobaron_admision(){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=num_est_no_aprobaron_admision",
        success: function(resp){        
            $('#dh_estudiantes_no_aprobados_admisiones').html(resp['num_est_no_aprobaron_admision']);
        }    
    });


}

function detalleNotasComputador(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasComputador",
        success: function(data){  
            let tabla = "";
            $('#headTablaNotasComputador').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasCompu  + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioAciertosCompu     + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioCalificacionCompu   + "</td>";
                    tabla += "<td align='center'>" + data[i].menosDiezAciertos    + "</td>";
                    tabla += "<td align='center'>" + data[i].masDiezAciertos   + "</td>";
                    tabla += "<td align='center'>" + data[i].totalEstudiantes   + "</td>";                   
                    tabla += "</tr>";
                }
            }
            $('#tablaNotasComputador').dataTable().fnClearTable();
            $('#tablaNotasComputador').dataTable().fnDestroy();
            $("#bodyTablaNotasComputador").html("");
            $("#tablaNotasComputador").append(tabla);           
        }    
    });
}

function grafico_barra_examen_teorico_computador(datos){   

    let menosDiezAciertosAdmi = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertosAdmi = parseInt(datos[0]['masDiezAciertos']);
    let menosDiezAciertosEspol = parseInt(datos[1]['menosDiezAciertos']);
    let masDiezAciertosEspol = parseInt(datos[1]['masDiezAciertos']);

    Highcharts.chart('grafico_barra_examen_teorico_computador', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'EL COMPUTADOR'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b> {point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    xAxis: {
        categories: [
            '< 10 Aciertos',
            '>= 10 Aciertos'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Estudiantes'
        }
    },
    series: [{
        name: 'Espol',
        data: [menosDiezAciertosEspol, masDiezAciertosEspol]

    }, {
        name: 'Admisiones',
        data: [menosDiezAciertosAdmi, masDiezAciertosAdmi]
    }]
});
}


function barra_examen_teorico_computador(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasComputador",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function grafico_barra_examen_teorico_internet(datos){   

    let menosDiezAciertosAdmi = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertosAdmi = parseInt(datos[0]['masDiezAciertos']);
    let menosDiezAciertosEspol = parseInt(datos[1]['menosDiezAciertos']);
    let masDiezAciertosEspol = parseInt(datos[1]['masDiezAciertos']);

    Highcharts.chart('grafico_barra_examen_teorico_internet', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'INTERNET'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b> {point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    xAxis: {
        categories: [
            '< 10 Aciertos',
            '>= 10 Aciertos'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Estudiantes'
        }
    },
    series: [{
        name: 'Espol',
        data: [menosDiezAciertosEspol, masDiezAciertosEspol]

    }, {
        name: 'Admisiones',
        data: [menosDiezAciertosAdmi, masDiezAciertosAdmi]
    }]
});
}

function barra_examen_teorico_internet(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasInternet",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function grafico_barra_examen_teorico_ppt(datos){   

    let menosDiezAciertosAdmi = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertosAdmi = parseInt(datos[0]['masDiezAciertos']);
    let menosDiezAciertosEspol = parseInt(datos[1]['menosDiezAciertos']);
    let masDiezAciertosEspol = parseInt(datos[1]['masDiezAciertos']);

    Highcharts.chart('grafico_barra_examen_teorico_ppt', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'POWER POINT'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b> {point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    xAxis: {
        categories: [
            '< 6 Aciertos',
            '>= 6 Aciertos'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Estudiantes'
        }
    },
    series: [{
        name: 'Espol',
        data: [menosDiezAciertosEspol, masDiezAciertosEspol]

    }, {
        name: 'Admisiones',
        data: [menosDiezAciertosAdmi, masDiezAciertosAdmi]
    }]
});
}

function barra_examen_teorico_ppt(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasPPT",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function grafico_barra_examen_teorico_excel(datos){   

    let menosDiezAciertosAdmi = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertosAdmi = parseInt(datos[0]['masDiezAciertos']);
    let menosDiezAciertosEspol = parseInt(datos[1]['menosDiezAciertos']);
    let masDiezAciertosEspol = parseInt(datos[1]['masDiezAciertos']);

    Highcharts.chart('grafico_barra_examen_teorico_excel', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'EXCEL'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b> {point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    xAxis: {
        categories: [
            '< 5 Aciertos',
            '>= 5 Aciertos'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Estudiantes'
        }
    },
    series: [{
        name: 'Espol',
        data: [menosDiezAciertosEspol, masDiezAciertosEspol]

    }, {
        name: 'Admisiones',
        data: [menosDiezAciertosAdmi, masDiezAciertosAdmi]
    }]
});
}

function barra_examen_teorico_excel(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasExcel",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function grafico_barra_examen_teorico_word(datos){   

    let menosDiezAciertosAdmi = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertosAdmi = parseInt(datos[0]['masDiezAciertos']);
    let menosDiezAciertosEspol = parseInt(datos[1]['menosDiezAciertos']);
    let masDiezAciertosEspol = parseInt(datos[1]['masDiezAciertos']);

    Highcharts.chart('grafico_barra_examen_teorico_word', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'WORD'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b> {point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    xAxis: {
        categories: [
            '< 5 Aciertos',
            '>= 5 Aciertos'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Estudiantes'
        }
    },
    series: [{
        name: 'Espol',
        data: [menosDiezAciertosEspol, masDiezAciertosEspol]

    }, {
        name: 'Admisiones',
        data: [menosDiezAciertosAdmi, masDiezAciertosAdmi]
    }]
});
}

function barra_examen_teorico_word(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasWord",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function grafico_barra_examen_teorico_herramientas(datos){   

    let menosDiezAciertosAdmi = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertosAdmi = parseInt(datos[0]['masDiezAciertos']);
    let menosDiezAciertosEspol = parseInt(datos[1]['menosDiezAciertos']);
    let masDiezAciertosEspol = parseInt(datos[1]['masDiezAciertos']);

    Highcharts.chart('grafico_barra_examen_teorico_herramientas', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'HERRAMIENTAS COLABORATIVAS'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b> {point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    xAxis: {
        categories: [
            '< 4 Aciertos',
            '>= 4 Aciertos'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Estudiantes'
        }
    },
    series: [{
        name: 'Espol',
        data: [menosDiezAciertosEspol, masDiezAciertosEspol]

    }, {
        name: 'Admisiones',
        data: [menosDiezAciertosAdmi, masDiezAciertosAdmi]
    }]
});
}

function barra_examen_teorico_herramientas(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasHerramientas",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function grafico_examen_teorico_computador_espol(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_computador_espol', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'EL COMPUTADOR (ESPOL)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_computador_espol(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_computador_espol",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function grafico_examen_teorico_computador_admision(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_computador_admision', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'EL COMPUTADOR (ADMISION)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_computador_admision(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_computador_admision",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}

function detalleNotasInternet(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasInternet",
        success: function(data){  
            let tabla = "";
            $('#headTablaNotasInternet').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasInter  + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioaciertosInter     + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioCalificacionInter   + "</td>";
                    tabla += "<td align='center'>" + data[i].menosDiezAciertos    + "</td>";
                    tabla += "<td align='center'>" + data[i].masDiezAciertos   + "</td>";
                    tabla += "<td align='center'>" + data[i].totalEstudiantes   + "</td>";                   
                    tabla += "</tr>";
                }
            }
            $('#tablaNotasInternet').dataTable().fnClearTable();
            $('#tablaNotasInternet').dataTable().fnDestroy();
            $("#bodyTablaNotasInternet").html("");
            $("#tablaNotasInternet").append(tabla);
        }    
    });
}

function grafico_examen_teorico_internet_espol(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_internet_espol', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ' INTERNET (ESPOL)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_internet_espol(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_internet_espol",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function grafico_examen_teorico_internet_admision(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_internet_admision', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'INTERNET (ADMISION)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_internet_admision(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_internet_admision",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleNotasPPT(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasPPT",
        success: function(data){  
            let tabla = "";
            $('#headTablaNotasPPT').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasPPT  + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioaciertosPPT     + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioCalificacionPPT   + "</td>";
                    tabla += "<td align='center'>" + data[i].menosDiezAciertos    + "</td>";
                    tabla += "<td align='center'>" + data[i].masDiezAciertos   + "</td>";
                    tabla += "<td align='center'>" + data[i].totalEstudiantes   + "</td>";                   
                    tabla += "</tr>";
                }
            }
            $('#tablaNotasPPT').dataTable().fnClearTable();
            $('#tablaNotasPPT').dataTable().fnDestroy();
            $("#bodyTablaNotasPPT").html("");
            $("#tablaNotasPPT").append(tabla);
        }    
    });
}

function grafico_examen_teorico_ppt_espol(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_ppt_espol', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'POWER POINT (ESPOL)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_ppt_espol(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_ppt_espol",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function grafico_examen_teorico_ppt_admision(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_ppt_admision', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'POWER POINT (ADMISION)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_ppt_admision(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_ppt_admision",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleNotasExcel(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasExcel",
        success: function(data){  
            let tabla = "";
            $('#headTablaNotasExcel').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasExcel  + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioaciertosExcel     + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioCalificacionExcel   + "</td>";
                    tabla += "<td align='center'>" + data[i].menosDiezAciertos    + "</td>";
                    tabla += "<td align='center'>" + data[i].masDiezAciertos   + "</td>";
                    tabla += "<td align='center'>" + data[i].totalEstudiantes   + "</td>";                   
                    tabla += "</tr>";
                }
            }
            $('#tablaNotasExcel').dataTable().fnClearTable();
            $('#tablaNotasExcel').dataTable().fnDestroy();
            $("#bodyTablaNotasExcel").html("");
            $("#tablaNotasExcel").append(tabla);
        }    
    });
}




function grafico_examen_teorico_excel_espol(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_excel_espol', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ' EXCEL (ESPOL)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_excel_espol(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_excel_espol",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function grafico_examen_teorico_excel_admision(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_excel_admision', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'EXCEL (ADMISION)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_excel_admision(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_excel_admision",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function detalleNotasWord(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasWord",
        success: function(data){  
            let tabla = "";
            $('#headTablaNotasWord').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasWord  + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioaciertosWord     + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioCalificacionWord   + "</td>";
                    tabla += "<td align='center'>" + data[i].menosDiezAciertos    + "</td>";
                    tabla += "<td align='center'>" + data[i].masDiezAciertos   + "</td>";
                    tabla += "<td align='center'>" + data[i].totalEstudiantes   + "</td>";                   
                    tabla += "</tr>";
                }
            }
            $('#tablaNotasWord').dataTable().fnClearTable();
            $('#tablaNotasWord').dataTable().fnDestroy();
            $("#bodyTablaNotasWord").html("");
            $("#tablaNotasWord").append(tabla);
        }    
    });
}


function grafico_examen_teorico_word_espol(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_word_espol', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'WORD (ESPOL)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_word_espol(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_word_espol",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function grafico_examen_teorico_word_admision(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_word_admision', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'WORD (ADMISION)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_word_admision(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_word_admision",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}


function detalleNotasHerramientas(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=detalleNotasHerramientas",
        success: function(data){  
            let tabla = "";
            $('#headTablaNotasHerramientas').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].tipoEstudiante  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasColabora  + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioaciertosColabora     + "</td>";
                    tabla += "<td align='center'>" + data[i].promedioCalificacionColabora   + "</td>";
                    tabla += "<td align='center'>" + data[i].menosDiezAciertos    + "</td>";
                    tabla += "<td align='center'>" + data[i].masDiezAciertos   + "</td>";
                    tabla += "<td align='center'>" + data[i].totalEstudiantes   + "</td>";                   
                    tabla += "</tr>";
                }
            }
            $('#tablaNotasHerramientas').dataTable().fnClearTable();
            $('#tablaNotasHerramientas').dataTable().fnDestroy();
            $("#bodyTablaNotasHerramientas").html("");
            $("#tablaNotasHerramientas").append(tabla);
        }    
    });
}


function grafico_examen_teorico_herramientas_espol(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_herramientas_espol', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ' HERRAMIENTAS (ESPOL)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 10 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 10 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_herramientas_espol(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_herramientas_espol",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}



function grafico_examen_teorico_herramientas_admision(datos){    
   
    let menosDiezAciertos = parseInt(datos[0]['menosDiezAciertos']);
    let masDiezAciertos = parseInt(datos[0]['masDiezAciertos']);
    let total_est = menosDiezAciertos + masDiezAciertos
    let p1 = (menosDiezAciertos * 100) / total_est;
    let p2 = (masDiezAciertos * 100) / total_est;   

    Highcharts.chart('grafico_examen_teorico_herramientas_admision', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'HERRAMIENTAS (ADMISION)'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '# Estudiantes: <b>{point.z}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },
    legend: {
        align: 'left',
        layout: 'horizontal',
        verticalAlign: 'bottom',
        x: 0,
        y: 0
    },
    series: [{
        name: 'Aciertos',
        colorByPoint: true,
        data: [{
            name: '< 4 aciertos',
            y: p1,
            z:menosDiezAciertos,
            sliced: true,
            selected: true
        }, {
            name: ">= 4 aciertos",
            y: p2,
            z:masDiezAciertos
        }]
    }]
});
}

function examen_teorico_herramientas_admision(callback){ 
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=examen_teorico_herramientas_admision",
        success: function(resp){        
            console.log(resp);
            callback(resp);
        }    
    });
}




function detalleExamenTeoricoAdmision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=problemas_admision",
        success: function(data){  
            let tabla = "";
            $('#headTablaProblemasAdmision').show();
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
                    tabla += "<td align='center'>" + data[i].grade + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p87 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p88 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p89 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p90 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p91 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p92 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p93 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p94 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p95 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p96 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p97 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p98 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p99 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p100  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p101  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p102  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p103  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p104  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p87 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p88 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p89 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p90 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p91 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p92 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p93 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p94 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p95 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p96 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p97 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p98 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p99 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p100  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p101  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p102  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p103  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p104  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p105  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p106  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p107  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p108  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p87 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p88 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p89 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p52 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaProblemasAdmision').dataTable().fnClearTable();
            $('#tablaProblemasAdmision').dataTable().fnDestroy();
            $("#bodyTablaProblemasAdmision").html("");
            $("#tablaProblemasAdmision").append(tabla);
            $('#tablaProblemasAdmision').dataTable().
            $('#tablaProblemasAdmision').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}



function detalleExamenTeoricoEspol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=problemas_espol",
        success: function(data){  
            let tabla = "";
            $('#headTablaProblemasEspol').show();
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
                    tabla += "<td align='center'>" + data[i].grade + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p87 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p88 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p89 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p90 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p91 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p92 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p93 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p94 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p95 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p96 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p97 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p98 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p99 + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p100  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p101  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p102  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p103  + "</td>";
                    tabla += "<td align='center'>" + data[i].c_p104  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p87 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p88 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p89 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p90 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p91 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p92 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p93 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p94 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p95 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p96 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p97 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p98 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p99 + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p100  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p101  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p102  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p103  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p104  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p105  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p106  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p107  + "</td>";
                    tabla += "<td align='center'>" + data[i].i_p108  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].p_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p87 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p88 + "</td>";
                    tabla += "<td align='center'>" + data[i].e_p89 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p52 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p53 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p54 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p55 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p56 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p57 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p58 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p59 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p60 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p61 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p62 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p63 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p64 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p65 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p66 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p67 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p68 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p69 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p70 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p71 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p72 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p73 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p74 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p75 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p76 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p77 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p78 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p79 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p80 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p81 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p82 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p83 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p84 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p85 + "</td>";
                    tabla += "<td align='center'>" + data[i].w_p86 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p1  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p2  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p3  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p4  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p5  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p6  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p7  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p8  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p9  + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p10 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p11 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p12 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p13 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p14 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p15 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p16 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p17 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p18 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p19 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p20 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p21 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p22 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p23 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p24 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p25 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p26 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p27 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p28 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p29 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p30 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p31 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p32 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p33 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p34 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p35 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p36 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p37 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p38 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p39 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p40 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p41 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p42 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p43 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p44 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p45 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p46 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p47 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p48 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p49 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p50 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p51 + "</td>";
                    tabla += "<td align='center'>" + data[i].k_p52 + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaProblemasEspol').dataTable().fnClearTable();
            $('#tablaProblemasEspol').dataTable().fnDestroy();
            $("#bodyTablaProblemasEspol").html("");
            $("#tablaProblemasEspol").append(tabla);
            $('#tablaProblemasEspol').dataTable().
            $('#tablaProblemasEspol').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}


function detalleNotasAdmision(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=notas_admision",
        success: function(data){  
            let tabla = "";
            $('#headTablaNotasAdmision').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id  + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres     + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].Email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].hizoExamen  + "</td>";
                    tabla += "<td align='center'>" + data[i].grade   + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera     + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaCompu   + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaInter   + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaPPT     + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaExcel   + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaWord    + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaColabora    + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionTotal   + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderCompu   + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosCompu   + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosCompu     + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasCompu     + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderInter   + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosInter   + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosInter     + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasInter     + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderPPT     + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosPPT     + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosPPT   + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasPPT   + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderExcel   + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosExcel   + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosExcel + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasExcel     + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderWord    + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosWord    + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosWord  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasWord  + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderColabora    + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosColabora    + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosColabora  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasColabora  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoComputador     + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoInter  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoPPT    + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoExcel  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoWord   + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoColabora   + "</td>";
                    tabla += "</tr>";
                }
            }
            $('#tablaNotasAdmision').dataTable().fnClearTable();
            $('#tablaNotasAdmision').dataTable().fnDestroy();
            $("#bodyTablaNotasAdmision").html("");
            $("#tablaNotasAdmision").append(tabla);
            $('#tablaNotasAdmision').dataTable().
            $('#tablaNotasAdmision').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}



function detalleNotasEspol(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/teorico.php?op=notas_espol",
        success: function(data){  
            let tabla = "";
            $('#headTablaNotasEspol').show();
            if (data.length > 0) {                
                for (i = 0; i < data.length; i++) {
                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].id  + "</td>";
                    tabla += "<td align='center'>" + data[i].nombres     + "</td>";
                    tabla += "<td align='center'>" + data[i].apellidos   + "</td>";
                    tabla += "<td align='center'>" + data[i].sexo    + "</td>";
                    tabla += "<td align='center'>" + data[i].Email   + "</td>";
                    tabla += "<td align='center'>" + data[i].matricula   + "</td>";
                    tabla += "<td align='center'>" + data[i].cedula  + "</td>";
                    tabla += "<td align='center'>" + data[i].hizoExamen  + "</td>";
                    tabla += "<td align='center'>" + data[i].grade   + "</td>";
                    tabla += "<td align='center'>" + data[i].carrera     + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaCompu   + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaInter   + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaPPT     + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaExcel   + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaWord    + "</td>";
                    tabla += "<td align='center'>" + data[i].caliObtenidaColabora    + "</td>";
                    tabla += "<td align='center'>" + data[i].calificacionTotal   + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderCompu   + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosCompu   + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosCompu     + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasCompu     + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderInter   + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosInter   + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosInter     + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasInter     + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderPPT     + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosPPT     + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosPPT   + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasPPT   + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderExcel   + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosExcel   + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosExcel + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasExcel     + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderWord    + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosWord    + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosWord  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasWord  + "</td>";
                    tabla += "<td align='center'>" + data[i].sinResponderColabora    + "</td>";
                    tabla += "<td align='center'>" + data[i].aciertosColabora    + "</td>";
                    tabla += "<td align='center'>" + data[i].NoaciertosColabora  + "</td>";
                    tabla += "<td align='center'>" + data[i].preguntasEvaluadasColabora  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoComputador     + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoInter  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoPPT    + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoExcel  + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoWord   + "</td>";
                    tabla += "<td align='center'>" + data[i].nivelConocimientoColabora   + "</td>";
                    tabla += "</tr>";
                }

            }
            $('#tablaNotasEspol').dataTable().fnClearTable();
            $('#tablaNotasEspol').dataTable().fnDestroy();
            $("#bodyTablaNotasEspol").html("");
            $("#tablaNotasEspol").append(tabla);
            $('#tablaNotasEspol').dataTable().
            $('#tablaNotasEspol').dataTable({"iDisplayLength": 30, "lengthChange": false});
        }    
    });
}