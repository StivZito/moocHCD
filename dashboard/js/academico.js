


function num_est_registrados(){
	
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=num_est_registrados",
        success: function(resp){      	
            $('#dh_estudiantes_registrados').html(resp['num_est_registrados']);
        }    
    });


}


function num_est_espol(){
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=num_est_espol",
        success: function(resp){      	
            $('#dh_estudiantes_espol').html(resp['num_est_espol']);
        }    
    });
}



function num_est_admisiones(){
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=num_est_admisiones",
        success: function(resp){      	
            $('#dh_estudiantes_admisiones').html(resp['num_est_admisiones']);
        }    
    });
}


function num_est_varones(){
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=num_est_varones",
        success: function(resp){      	
            $('#dh_estudiantes_varones').html(resp['num_est_varones']);
        }    
    });
}



function num_est_mujeres(){
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=num_est_mujeres",
        success: function(resp){      	
            $('#dh_estudiantes_mujeres').html(resp['num_est_mujeres']);
        }    
    });
}



function num_est_aprobados(){
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=num_est_aprobados",
        success: function(resp){      	
            $('#dh_estudiantes_aprobados').html(resp['num_est_aprobados']);
        }    
    });
}



function num_est_reprobados(){
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=num_est_reprobados",
        success: function(resp){      	
            $('#dh_estudiantes_reprobados').html(resp['num_est_reprobados']);
        }    
    });
}



function grafico_estudiantes_termino(datos){
	
	let termino_0 = datos[0]['termino'];
	let termino_1 = datos[1]['termino'];
	let termino_2 = datos[2]['termino'];
    
	let est_espol_t0 = parseInt(datos[0]['est_espol']);
	let est_espol_t1 = parseInt(datos[1]['est_espol']);
	let est_espol_t2 = parseInt(datos[2]['est_espol']);

	let est_admin_t0 = parseInt(datos[0]['est_admin']);
	let est_admin_t1 = parseInt(datos[1]['est_admin']);
	let est_admin_t2 = parseInt(datos[2]['est_admin']);

    let total_est_espol =  est_espol_t0 + est_espol_t1 + est_espol_t2;
    let total_est_admisiones =  est_admin_t0 + est_admin_t1 + est_admin_t2;


	Highcharts.chart('grafico_estudiantes_termino', {
	    chart: {
	        type: 'bar'
	    },
	    title: {
	        text: 'Estudiantes registrados curso MOOC HCD [Práctico y Teórico Práctico]'
	    },
	   
	    xAxis: {
	        categories: [termino_0, termino_1, termino_2, 'Todos los terminos'],
	        title: {
	            text: null
	        }
	    },
	    yAxis: {
	        min: 0,
	        title: {
	            text: 'numero (estudiantes)',
	            align: 'high'
	        },
	        labels: {
	            overflow: 'justify'
	        }
	    },
	    tooltip: {
	        valueSuffix: ' estudiantes'
	    },
	    plotOptions: {
	        bar: {
	            dataLabels: {
	                enabled: true
	            }
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
	    credits: {
	        enabled: false 
	    },
	    series: [{
	        name: 'Espol',
	        data: [est_espol_t0, est_espol_t1, est_espol_t2, total_est_espol]
	    }, {
	        name: 'Admisiones',
	        data: [est_admin_t0, est_admin_t1, est_admin_t2, total_est_admisiones]
	    }]
	});
	
}


function estudiantes_termino(callback){
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=estudiantes_termino",
        success: function(resp){      	
            let datos = (resp['aaData']);
            callback(datos);
        }    
    });
}



function grafico_estudiantes_estado(datos){
	
	
	let termino_0 = datos[0]['termino'];
	let termino_1 = datos[1]['termino'];
	let termino_2 = datos[2]['termino'];
	
	let aprobados_t0 = parseInt(datos[0]['aprobados']);
	let aprobados_t1 = parseInt(datos[1]['aprobados']);
	let aprobados_t2 = parseInt(datos[2]['aprobados']);

    let total_aprobados = aprobados_t0 + aprobados_t1 + aprobados_t2;

	let reprobados_t0 = parseInt(datos[0]['reprobados']);
	let reprobados_t1 = parseInt(datos[1]['reprobados']);
	let reprobados_t2 = parseInt(datos[2]['reprobados']);

    let toal_reprobados = reprobados_t0 + reprobados_t1 + reprobados_t2;

	Highcharts.chart('grafico_estudiantes_estado', {
	    chart: {
	        type: 'bar'
	    },
	    title: {
	        text: 'Notas MOOC HCD [Teórico Práctico]'
	    },
	   
	    xAxis: {
	        categories: [termino_0, termino_1, termino_2, 'Todos los terminos'],
	        title: {
	            text: null
	        }
	    },
	    yAxis: {
	        min: 0,
	        title: {
	            text: 'Numero de estudiantes',
	            align: 'high'
	        },
	        labels: {
	            overflow: 'justify'
	        }
	    },
	    tooltip: {
	        valueSuffix: ' estudiantes'
	    },
	    plotOptions: {
	        bar: {
	            dataLabels: {
	                enabled: true
	            }
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
	    credits: {
	        enabled: false
	    },
	    series: [{
	        name: 'Aprobados',
	        data: [aprobados_t0, aprobados_t1, aprobados_t2, total_aprobados],
            color: '#033A6A'
	    }, {
	        name: 'Reprobados',
	        data: [reprobados_t0, reprobados_t1, reprobados_t2, toal_reprobados],
            color: '#6B7C99'
	    }]
	});
	
}


function estudiantes_estado(callback){
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=estudiantes_estado",
        success: function(resp){      	
            let datos = (resp['aaData']);
            callback(datos);
        }    
    });
}



function grafico_estudiantes_utilitarios(datos){
	$('#load_grafica_utilitarios').hide();

   
   //Word

    let word_ap_t0 = parseInt(datos[0]['word_ap']);
    let word_ap_t1 = parseInt(datos[1]['word_ap']);
    let word_ap_t2 = parseInt(datos[2]['word_ap']);

    let word_rp_t0 = parseInt(datos[0]['word_rp']);
    let word_rp_t1 = parseInt(datos[1]['word_rp']);
    let word_rp_t2 = parseInt(datos[2]['word_rp']);

    //Excel

    let excel_ap_t0 = parseInt(datos[0]['excel_ap']);
    let excel_ap_t1 = parseInt(datos[1]['excel_ap']);
    let excel_ap_t2 = parseInt(datos[2]['excel_ap']);

    let excel_rp_t0 = parseInt(datos[0]['excel_rp']);
    let excel_rp_t1 = parseInt(datos[1]['excel_rp']);
    let excel_rp_t2 = parseInt(datos[2]['excel_rp']);

    //Power Point

    let powerp_ap_t0 = parseInt(datos[0]['powerp_ap']);
    let powerp_ap_t1 = parseInt(datos[1]['powerp_ap']);
    let powerp_ap_t2 = parseInt(datos[2]['powerp_ap']);

    let powerp_rp_t0 = parseInt(datos[0]['powerp_rp']);
    let powerp_rp_t1 = parseInt(datos[1]['powerp_rp']);
    let powerp_rp_t2 = parseInt(datos[2]['powerp_rp']);


    /*En cada termino todos tomaron las 3 materias*/
    //Totales
    let total_termino0 = word_ap_t0 + word_rp_t0;//
    let total_termino1 = word_ap_t1 + word_rp_t1;//
    let total_termino2 = word_ap_t2 + word_rp_t2;//

    /*Aprobados y Reprobados Word en los 3 terminos*/
    let word_ap = word_ap_t0 + word_ap_t1 + word_ap_t2;
    let word_rp = word_rp_t0 + word_rp_t1 + word_rp_t2;

    /*Aprobados y Reprobados Excel en los 3 terminos*/
    let excel_ap = excel_ap_t0 + excel_ap_t1 + excel_ap_t2;
    let excel_rp = excel_rp_t0 + excel_rp_t1 + excel_rp_t2;

    /*Aprobados y Reprobados Power Point en los 3 terminos*/
    let powerp_ap = powerp_ap_t0 + powerp_ap_t1 + powerp_ap_t2;
    let powerp_rp = powerp_rp_t0 + powerp_rp_t1 + powerp_rp_t2;


     $('#grafico_estudiantes_utilitarios').highcharts({
        chart: {
            type: 'column',
            events: {
                drilldown: function (e) {
                    if (!e.seriesOptions) {
                        var chart = this,
                            drilldowns = {
                                '0T2020': {//Word
                                    name: 'Word',
                                    color: '#3150b4',
                                    data: [
                                        ['Aprobados', word_ap_t0],//Ap Word
                                        ['Reprobados', word_rp_t0]//Rp Word
                                    ]
                                },
                                '1T2020': {
                                    name: 'Word',
                                    color: '#3150b4',
                                    data: [
                                        ['Aprobados', word_ap_t1],
                                        ['Reprobados', word_rp_t1]
                                    ]
                                },
                                '2T2020': {
                                    name: 'Word',
                                    color: '#3150b4',
                                    data: [
                                        ['Aprobados', word_ap_t2],
                                        ['Reprobados', word_rp_t2]
                                    ]
                                },
                                'Todos los terminos': {
                                    name: 'Word',
                                    color: '#3150b4',
                                    data: [
                                        ['Aprobados', word_ap],
                                        ['Reprobados', word_rp]
                                    ]
                                }

                            },
                            drilldowns2 = {
                                '0T2020': {//Excel;
                                    name: 'Excel',
                                    color: '#50B432',
                                    data: [
                                        ['Aprobados', excel_ap_t0],//Ap Excel
                                        ['Reprobados', excel_rp_t0]//Rp Excel
                                    ]
                                },
                                '1T2020': {
                                    name: 'Excel',
                                    color: '#50B432',
                                     data: [
                                        ['Aprobados', excel_ap_t1],
                                        ['Reprobados', excel_rp_t1]
                                    ]
                                },
                                '2T2020': {
                                    name: 'Excel',
                                    color: '#50B432',
                                     data: [
                                        ['Aprobados', excel_ap_t2],
                                        ['Reprobados', excel_rp_t2]
                                    ]
                                },
                                'Todos los terminos': {
                                    name: 'Excel',
                                    color: '#50B432',
                                    data: [
                                        ['Aprobados', excel_ap],
                                        ['Reprobados', excel_rp]
                                    ]
                                }

                            },
                            drilldowns3 = {
                                '0T2020': {//Power Point;
                                    name: 'PowerPoint',
                                    color: '#E78122',
                                    data: [
                                        ['Aprobados', powerp_ap_t0],//Ap PowerPoint
                                        ['Reprobados', powerp_rp_t0]//Rp PowerPoint
                                    ]
                                },
                                '1T2020': {
                                    name: 'PowerPoint',
                                    color: '#E78122',
                                     data: [
                                        ['Aprobados', powerp_ap_t1],
                                        ['Reprobados', powerp_rp_t1]
                                    ]
                                },
                                '2T2020': {
                                    name: 'PowerPoint',
                                    color: '#E78122',
                                     data: [
                                        ['Aprobados', powerp_ap_t2],
                                        ['Reprobados', powerp_rp_t2]
                                    ]
                                },
                                'Todos los terminos': {
                                    name: 'PowerPoint',
                                    color: '#E78122',
                                    data: [
                                        ['Aprobados', powerp_ap],
                                        ['Reprobados', powerp_rp]
                                    ]
                                }

                            },
                            series = drilldowns[e.point.name],
                            series2 = drilldowns2[e.point.name];
                            series3 = drilldowns3[e.point.name];
                            
                            chart.addSingleSeriesAsDrilldown(e.point, series); 
                            chart.addSingleSeriesAsDrilldown(e.point, series2);
                            chart.addSingleSeriesAsDrilldown(e.point, series3);
                            
                            chart.applyDrilldown();
                    }
                }
            }
        },
        title: {
            text: 'Notas Prácticas [Práctico y Teórico Práctico]'
        },
         credits: {
            enabled: false
        },
        xAxis: {
            type: 'category',
            title:{
                text:'terminos'
            }
        },
        yAxis: {
            title: {
                text:'Numero de estudiantes'
            }
        },
        legend: {
            enabled: false
        },
        plotOptions: {
        column: {stacking: 'normal'},
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    style: { textShadow: false, fontSize: '1vw' }
                }
            }
        },
        series: [{
            name: 'Word',//Word
            color: '#3150b4',
            data: [{
                name: '0T2020',//0T
                y: total_termino0,
                color: '#5F727E',
                drilldown: true
            },{
                name: '1T2020',//0T
                y: total_termino1,
                color: '#6C9CB9',
                drilldown: true
            },
            {
                name: '2T2020',//0T
                y: total_termino2,
                color: '#77C0ED',
                drilldown: true
            },
            {
                name: 'Todos los terminos',//0T
                y: total_termino0 + total_termino1 + total_termino2,
                color: '#022B46',
                drilldown: true
            },
            ]
        }],
        drilldown: {
            series: []
        }
    });
}


function estudiantes_utilitarios(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=estudiantes_utilitarios",
        success: function(resp){        
            //console.log(resp);

            //let datos = (resp['aaData']);
            callback(resp);
        }    
    });
}


function grafico_estudiantes_espol_admisiones(datos){
    
    //Espol

    let espol_ap_t0 = parseInt(datos[0]['espol_ap']);
    let espol_ap_t1 = parseInt(datos[1]['espol_ap']);
    let espol_ap_t2 = parseInt(datos[2]['espol_ap']);

    let espol_rp_t0 = parseInt(datos[0]['espol_rp']);
    let espol_rp_t1 = parseInt(datos[1]['espol_rp']);
    let espol_rp_t2 = parseInt(datos[2]['espol_rp']);

    //Admisiones

    let admision_ap_t0 = parseInt(datos[0]['admision_ap']);
    let admision_ap_t1 = parseInt(datos[1]['admision_ap']);
    let admision_ap_t2 = parseInt(datos[2]['admision_ap']);

    let admision_rp_t0 = parseInt(datos[0]['admision_rp']);
    let admision_rp_t1 = parseInt(datos[1]['admision_rp']);
    let admision_rp_t2 = parseInt(datos[2]['admision_rp']);


    //Totales
    let est_espol_t0 = espol_ap_t0 + espol_rp_t0;
    let est_admision_t0 = admision_ap_t0 + admision_rp_t0;
 
    let est_espol_t1 = espol_ap_t1 + espol_rp_t1;
    let est_admision_t1 = admision_ap_t1 + admision_rp_t1;
        
    let est_espol_t2 = espol_ap_t2 + espol_rp_t2;
    let est_admision_t2 = admision_ap_t2 + admision_rp_t2;
    

    //Totales en todos los terminos
    let total_espol = est_espol_t0 + est_espol_t1 + est_espol_t2;
    let total_admis = est_admision_t0 + est_admision_t1 + est_admision_t2;

    let total_aprobados_esp = espol_ap_t0 + espol_ap_t1 + espol_ap_t2;
    let total_reprobados_esp = espol_rp_t0 + espol_rp_t1 + espol_rp_t2;
    let total_aprobados_admi = admision_ap_t0 + admision_ap_t1 + admision_ap_t2;
    let toal_reprobados_admi =  admision_rp_t0 + admision_rp_t1 + admision_rp_t2;   


     $('#grafico_estudiantes_espol_admisiones').highcharts({
        chart: {
            type: 'bar',
            events: {
                drilldown: function (e) {
                    if (!e.seriesOptions) {
                        var chart = this,
                            drilldowns = {
                                '0T2020': {//ESPOL
                                    name: 'ESPOL',
                                    color: '#81C1E7',
                                    data: [
                                        ['Aprobados', espol_ap_t0],//Ap ESPOL
                                        ['Reprobados', espol_rp_t0]//Rp ESPOL
                                    ]
                                },
                                '1T2020': {
                                    name: 'ESPOL',
                                    color: '#81C1E7',
                                    data: [
                                        ['Aprobados', espol_ap_t1],
                                        ['Reprobados', espol_rp_t1]
                                    ]
                                },
                                '2T2020': {
                                    name: 'ESPOL',
                                    color: '#81C1E7',
                                    data: [
                                        ['Aprobados', espol_ap_t2],
                                        ['Reprobados', espol_rp_t2]
                                    ]
                                },
                                'Todos los terminos': {
                                    name: 'ESPOL',
                                    color: '#81C1E7',
                                    data: [
                                        ['Aprobados', total_aprobados_esp],
                                        ['Reprobados', total_reprobados_esp]
                                    ]
                                }
                            },
                            drilldowns2 = {
                                '0T2020': {//Admisiones;
                                    name: 'ADMISIONES',
                                    color: '#575656',
                                    data: [
                                        ['Aprobados', admision_ap_t0],//Ap Admisiones
                                        ['Reprobados', admision_rp_t0]//Rp Admisiones
                                    ]
                                },
                                '1T2020': {
                                    name: 'ADMISIONES',
                                    color: '#575656',
                                     data: [
                                        ['Aprobados', admision_ap_t1],
                                        ['Reprobados', admision_rp_t1]
                                    ]
                                },
                                '2T2020': {
                                    name: 'ADMISIONES',
                                    color: '#575656',
                                     data: [
                                        ['Aprobados', admision_ap_t2],
                                        ['Reprobados', admision_rp_t2]
                                    ]
                                },
                                'Todos los terminos': {
                                    name: 'ADMISIONES',
                                    color: '#575656',
                                    data: [
                                        ['Aprobados', total_aprobados_admi],
                                        ['Reprobados', toal_reprobados_admi]
                                    ]
                                }

                            },
                            
                            series = drilldowns[e.point.name],
                            series2 = drilldowns2[e.point.name];
                            
                            chart.addSingleSeriesAsDrilldown(e.point, series); 
                            chart.addSingleSeriesAsDrilldown(e.point, series2);
                            
                            chart.applyDrilldown();
                    }
                }
            }
        },
        title: {
            text: 'Notas Teóricas [Práctico y Teórico Práctico]'
        },
        credits:{
            enabled: false
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title:{
                text: 'Numero de estudiantes'
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
            series: {
            stacking: 'normal',
            dataLabels: {
                    enabled: true,
                    style: { textShadow: true, fontSize: '0.7vw' }
                }
            }
        },
       
        series: [{
            name: 'ESPOL',//Espol
            color: '#6C9AD8',
            data: [{
                name: '0T2020',//0T
                y: est_espol_t0,
                drilldown: true
            }, {
                name: '1T2020',
                y: est_espol_t1,
                drilldown: true
            },
            {
                name: '2T2020',
                y: est_espol_t2,
                drilldown: true
            },
            {
                name: 'Todos los terminos',
                y: total_espol,
                drilldown: true
            }


            ]
        },{
            name: 'ADMISIONES',//Admisiones
            color: '#373839',
            data: [{
                name: '0T2020',
                y: est_admision_t0,
                drilldown: true
            }, {
                name: '1T2020',
                y: est_admision_t1,
                drilldown: true
            },{
                name: '2T2020',
                y: est_admision_t2,
                drilldown: true
            },{
                name: 'Todos los terminos',
                y: total_admis,
                drilldown: true
            }
            ]
        }],
        drilldown: {
            series: []
        }
    });
}


function estudiantes_espol_admisiones(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=estudiantes_espol_admisiones",
        success: function(resp){        
            callback(resp);
        }    
    });
}


function grafico_estudiantes_utilitarios_tipo(data){
    let datos = data[0];

    let est_espol = parseInt(datos['est_espol']);
    let est_admision = parseInt(datos['est_admision']);
    
    let total_est = est_espol + est_admision;

    let est_espol_porcentaje = parseFloat(((est_espol * 100) / total_est).toFixed(2));
    let est_admision_porcentaje = parseFloat(((est_admision * 100) / total_est).toFixed(2));
   

    let word_ap = parseInt(datos['word_ap']);
    let word_rp = parseInt(datos['word_rp']);
    
    let excel_ap = parseInt(datos['excel_ap']);
    let excel_rp = parseInt(datos['excel_rp']);
    
    let powerp_ap = parseInt(datos['powerp_ap']);
    let powerp_rp = parseInt(datos['powerp_rp']);
    
   
    Highcharts.chart('grafico_estudiantes_utilitarios_tipo', {
    title: {
        text: 'Notas Prácticas [Teórico Práctico]'
    },
    xAxis: {
        categories: ['Word', 'Excel', 'Power Point']
    },
    yAxis: {
        title: {
            text:'Numero de estudiantes'
        }
    },
    credits:{
        enabled:false
    },
    labels: {
        items: [{
            html: '',
            style: {
                left: '50px',
                top: '18px',
                fontSize: '0.5vw',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'black'
            }
        }]
    },
     plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true					
                }
            }
        },

    showInLegend: true,
        dataLabels: {
            enabled: true
        },
    series: [{
        type: 'column',
        name: 'Aprobados',
        data: [word_ap, excel_ap, powerp_ap],
        color: '#033A6A'  //Word, Excel, PowerP
    }, {
        type: 'column',
        name: 'Reprobados',
        data: [word_rp, excel_rp, powerp_rp],
        color: '#6B7C99'
    }
    , {
        type: 'pie',
        name: 'Total Estudiantes',
        data: [{
            name: 'ESPOL (%)',
            y: est_espol_porcentaje,
			z: est_espol,
            color: '#6C9AD8' 
        }, {
            name: 'ADMISIONES (%)',
            y: est_admision_porcentaje,
			z: est_admision,
            color: '#3F4142'
        }],
        center: [200, 0],
        size: 50,
        showInLegend: true,
		tooltip: {
			pointFormat: '# Estudiantes: <b>{point.z}</b>'
		},
        dataLabels: {
            enabled: true,
			format: '{point.percentage:.0f} %'
        }
    }]
});
}

function estudiantes_utilitarios_tipo(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=estudiantes_utilitarios_tipo",
        success: function(resp){        
            //console.log(resp);

            //let datos = (resp['aaData']);
            callback(resp);
        }    
    });
}


function estudiantes_aprobados_reprobados_carrera(){    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=aprobados_reprobados_carrera",
        success: function(data){   
            console.log(data);
            let tabla = "";
            $('#headTablaAprobadosReprobados').show();
            if (data.length > 0) {                
                console.log(data);
                for (i = 0; i < data.length; i++) {
                    let porcentaje_ap = (parseInt(data[i].aprobados) * 100) / parseInt(data[i].estudiantes); 
                    let porcentaje_rp = (parseInt(data[i].reprobados) * 100) / parseInt(data[i].estudiantes); 

                    tabla += "<tr>";
                    tabla += "<td align='center'>" + data[i].carrera + "</td>";
                    tabla += "<td align='center'>" + porcentaje_ap.toFixed() + "%" + "</td>";
                    tabla += "<td align='center'>" + porcentaje_rp.toFixed() + "%" + "</td>";     
                    tabla += "</tr>";
                }
            }
            $('#tablaAprobadosReprobados').dataTable().fnClearTable();
            $('#tablaAprobadosReprobados').dataTable().fnDestroy();
            $("#bodyTablaAprobadosReprobados").html("");
            $("#tablaAprobadosReprobados").append(tabla);
            $('#tablaAprobadosReprobados').DataTable({"iDisplayLength": 5, "lengthChange": false});
        }    
    });
}

/*-------------------*/
function grafico_top10_carreras(datos){
    
    let carrera1 = datos[0]['carrera'];
    let carrera2 = datos[1]['carrera'];
    let carrera3 = datos[2]['carrera'];
    let carrera4 = datos[3]['carrera'];
    let carrera5 = datos[4]['carrera'];
    let carrera6 = datos[5]['carrera'];
    let carrera7 = datos[6]['carrera'];
    let carrera8 = datos[7]['carrera'];
    let carrera9 = datos[8]['carrera'];
    let carrera10 = datos[9]['carrera'];
   
    let num_est1 = parseInt(datos[0]['estudiantes']);
    let num_est2 = parseInt(datos[1]['estudiantes']);
    let num_est3 = parseInt(datos[2]['estudiantes']);
    let num_est4 = parseInt(datos[3]['estudiantes']);
    let num_est5 = parseInt(datos[4]['estudiantes']);
    let num_est6 = parseInt(datos[5]['estudiantes']);
    let num_est7 = parseInt(datos[6]['estudiantes']);
    let num_est8 = parseInt(datos[7]['estudiantes']);
    let num_est9 = parseInt(datos[8]['estudiantes']);
    let num_est10 = parseInt(datos[9]['estudiantes']);


    let total_est = num_est1 + num_est2 + num_est3 + num_est4 + num_est5 + num_est6 + num_est7 + num_est8 + num_est9 + num_est10;

    let p1 = (num_est1 * 100) / total_est;
    let p2 = (num_est2 * 100) / total_est;
    let p3 = (num_est3 * 100) / total_est;
    let p4 = (num_est4 * 100) / total_est;
    let p5 = (num_est5 * 100) / total_est;
    let p6 = (num_est6 * 100) / total_est;
    let p7 = (num_est7 * 100) / total_est;
    let p8 = (num_est8 * 100) / total_est;
    let p9 = (num_est9 * 100) / total_est;
    let p10 = (num_est10 * 100) / total_est;


    Highcharts.chart('grafico_top10_carreras', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        height: 700
    },
    title: {
        text: 'Top 10 de carreras con mayor aprobación examen práctico'
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
        name: 'Carreras',
        colorByPoint: true,
        data: [{
            name: carrera1,
            y: p1,
			z:num_est1,
            sliced: true,
            selected: true
        }, {
            name: carrera2,
            y: p2,
			z:num_est2,
        }, {
            name: carrera3,
            y: p3,
			z:num_est3,
        }, {
            name: carrera4,
            y: p4,
			z:num_est4,
        }, {
            name: carrera5,
            y: p5,
			z:num_est5,
        }, {
            name: carrera6,
            y: p6,
			z:num_est6,
        }, {
            name: carrera7,
            y: p7,
			z:num_est7,
        }, {
            name: carrera8,
            y: p8,
			z:num_est8,
        }, {
            name: carrera9,
            y: p9,
			z:num_est9,
        },
         {
            name: carrera10,
            y: p10,
			z:num_est10
        }]
    }]
});
}



function estudiantes_top10_carreras(callback){
  

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=top_diez_carreras",
        success: function(resp){        
            console.log(resp);

            //let datos = (resp['aaData']);
            callback(resp);
        }    
    });
}


/*--------------------------*/

function grafico_top10_carreras_masveces(datos){
    let carrera1 = datos[0]['carrera'];
    let carrera2 = datos[1]['carrera'];
    let carrera3 = datos[2]['carrera'];
    let carrera4 = datos[3]['carrera'];
    let carrera5 = datos[4]['carrera'];
    let carrera6 = datos[5]['carrera'];
    let carrera7 = datos[6]['carrera'];
    let carrera8 = datos[7]['carrera'];
    let carrera9 = datos[8]['carrera'];
    let carrera10 = datos[9]['carrera'];
   
    let num_est1 = parseInt(datos[0]['estudiantes']);
    let num_est2 = parseInt(datos[1]['estudiantes']);
    let num_est3 = parseInt(datos[2]['estudiantes']);
    let num_est4 = parseInt(datos[3]['estudiantes']);
    let num_est5 = parseInt(datos[4]['estudiantes']);
    let num_est6 = parseInt(datos[5]['estudiantes']);
    let num_est7 = parseInt(datos[6]['estudiantes']);
    let num_est8 = parseInt(datos[7]['estudiantes']);
    let num_est9 = parseInt(datos[8]['estudiantes']);
    let num_est10 = parseInt(datos[9]['estudiantes']);


    let total_est = num_est1 + num_est2 + num_est3 + num_est4 + num_est5 + num_est6 + num_est7 + num_est8 + num_est9 + num_est10;

    let p1 = (num_est1 * 100) / total_est;
    let p2 = (num_est2 * 100) / total_est;
    let p3 = (num_est3 * 100) / total_est;
    let p4 = (num_est4 * 100) / total_est;
    let p5 = (num_est5 * 100) / total_est;
    let p6 = (num_est6 * 100) / total_est;
    let p7 = (num_est7 * 100) / total_est;
    let p8 = (num_est8 * 100) / total_est;
    let p9 = (num_est9 * 100) / total_est;
    let p10 = (num_est10 * 100) / total_est;


    Highcharts.chart('grafico_top10_carreras_masveces', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        height: 700
    },
    title: {
        text: 'Top 10 de carreras con mayor reprobación examen práctico'
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
        name: 'Carreras',
        colorByPoint: true,
        data: [{
            name: carrera1,
            y: p1,
			z:num_est1,
            sliced: true,
            selected: true
        }, {
            name: carrera2,
            y: p2,
			z:num_est2,
        }, {
            name: carrera3,
            y: p3,
			z:num_est3,
        }, {
            name: carrera4,
            y: p4,
			z:num_est4,
        }, {
            name: carrera5,
            y: p5,
			z:num_est5,
        }, {
            name: carrera6,
            y: p6,
			z:num_est6,
        }, {
            name: carrera7,
            y: p7,
			z:num_est7,
        }, {
            name: carrera8,
            y: p8,
			z:num_est8,
        }, {
            name: carrera9,
            y: p9,
			z:num_est9,
        },
         {
            name: carrera10,
            y: p10,
			z:num_est10
        }]
    }]
});
}



function estudiantes_top10_carreras_masveces(callback){
    console.log("Top10carreras");

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=top_diez_carreras_masveces",
        success: function(resp){        
            callback(resp);
        }    
    });
}


/**************************************************************************/


function grafico_aprobados_num_veces(datos){
    let total_est = 0;
    let porcentajes = [];

    for (let i=0; i < datos.length; i++){
        total_est = total_est + datos[i]['num_estudiantes'];  
    }

    for (let x=0; x < datos.length; x++){
        porcentajes[x] = (parseInt(datos[x]['num_estudiantes']) * 100 ) / total_est;  
    }    

   
    Highcharts.chart('grafico_aprobados_num_veces', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
		height: 500
    },
     credits: {
        enabled: false
    },
    title: {
        text: 'Número de veces vs aprobación componentes prácticos'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>' + '<br/> # Estudiantes: <b>{point.x}</b>'
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
                format: '<b>{point.z} - veces</b>: {point.percentage:.0f} %' 
				
            },
            showInLegend:true
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
        name: 'Porcentajes',
        colorByPoint: true,
        data: [{
            name: datos[0]['carrera'] + ' (' + datos[0]['num_veces'] + '- veces)',
            y: porcentajes[0],
			z: datos[0]['num_veces'],
			x: datos[0]['num_estudiantes'],
            sliced: true,
            selected: true
        }, {
            name: datos[1]['carrera']+ ' (' + datos[1]['num_veces'] + '- veces)',
            y: porcentajes[1],
			z: datos[1]['num_veces'],
			x: datos[1]['num_estudiantes']
        }, {
            name: datos[2]['carrera']+ ' (' + datos[2]['num_veces'] + '- veces)',
            y: porcentajes[2],
			z: datos[2]['num_veces'],
			x: datos[2]['num_estudiantes']
        }, {
            name: datos[3]['carrera']+ ' (' + datos[3]['num_veces'] + '- veces)',
            y: porcentajes[3],
			z: datos[3]['num_veces'],
			x: datos[3]['num_estudiantes']
        }, {
            name: datos[4]['carrera']+ ' (' + datos[4]['num_veces'] + '- veces)',
            y: porcentajes[4],
			z: datos[4]['num_veces'],
			x: datos[4]['num_estudiantes']
        }, {
            name: datos[5]['carrera']+ ' (' + datos[5]['num_veces'] + '- veces)',
            y: porcentajes[5],
			z: datos[5]['num_veces'],
			x: datos[5]['num_estudiantes']
        }, {
            name: datos[6]['carrera']+ ' (' + datos[6]['num_veces'] + '- veces)',
            y: porcentajes[6],
			z: datos[6]['num_veces'],
			x: datos[6]['num_estudiantes']
        }, {
            name: datos[7]['carrera']+ ' (' + datos[7]['num_veces'] + '- veces)',
            y: porcentajes[7],
			z: datos[7]['num_veces'],
			x: datos[7]['num_estudiantes']
        }, {
            name: datos[8]['carrera']+ ' (' + datos[8]['num_veces'] + '- veces)',
            y: porcentajes[8],
			z: datos[8]['num_veces'],
			x: datos[8]['num_estudiantes']
        },
         {
            name: datos[9]['carrera']+ ' (' + datos[9]['num_veces'] + '- veces)',
            y: porcentajes[9],
			z: datos[9]['num_veces'],
			x: datos[9]['num_estudiantes']
        }]
    }]
});


}



function estudiantes_aprobados_num_veces(callback){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=aprobados_num_veces",
        success: function(resp){        
            console.log(resp);
            
            callback(resp);
        }    
    });
}



/*************************************************************************************/

function grafico_ausentes_exam_practico(datos){
    let num_est_t0 = parseInt(datos[0]['num_est']);
    let num_est_t2 = parseInt(datos[1]['num_est']);

    let total_est = num_est_t0 + num_est_t2;

    let pt0 =  (num_est_t0 * 100) / total_est;
    let pt2 =  (num_est_t2 * 100) / total_est; 

    Highcharts.chart('grafico_ausentes_exam_practico', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
		height: 500
    },
    title: {
        text: 'Estudiantes con 0% de avance en el curso MOOC HCD'
    },
    credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>' + '<br/> # Estudiantes: <b>{point.z}</b> '
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
                format: '<b>{point.name}</b>: {point.percentage:.0f} %'
            },
            showInLegend:true
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
        name: 'Porcentajes',
        colorByPoint: true,
        data: [{
            name: datos[0]['termino'],
            y: pt0,
			z: num_est_t0,
            sliced: true,
            selected: true
        }, {
            name: datos[1]['termino'],
            y: pt2,
			z: num_est_t2
        },]
    }]
});


}



function estudiantes_ausentes_exam_practico(callback){
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "ajax/academico.php?op=ausentes_exam_practico",
        success: function(resp){        
            console.log(resp);
            
            callback(resp);
        }    
    });
}