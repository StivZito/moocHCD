<!doctype html>
<html lang="en">
	<head>
		<?php include("../plantilla/header.php")?>
	</head>
	<body class="nav-md">  
	    <div class="container body">
			<div class="main_container">		  
				<?php include("../plantilla/menu.php")?>
				<div class="right_col" role="main">
					<!-- top tiles -->
					<div class="row" style="display: inline-block;width:100%" >
						<div class="tile_count">	

							<div class="row">
								<div class="col-md-12">
									<figure>
										<div id="nivelesConocimientoBar" style="height: 600px"></div>							
									</figure>
								</div>						
							</div>
							<br>
							<br>	  

							<div class="row">
								<div class="col-md-12">
									<figure>
										<div id="nivelesConocimientoBarTwo" style="height: 800px"></div>							
									</figure>
								</div>						
							</div>
							<br>
							<br>	  

							<div class="row">
								<div class="col-md-12">
									<figure>
										<div id="nivelesConocimientoGraph" style="height: 500px"></div>							
									</figure>
								</div>						
							</div>
							<br>
							<br>	  

							<div class="row">
								<div class="col-sm-6" style="height: 500px">
									<figure class="highcharts-figure">
										<div id="nivelesConocimientoDiagnostico"></div>							
									</figure>
								</div>

								<div class="col-sm-6" style="height: 500px">
									<figure class="highcharts-figure">
										<div id="nivelesConocimientoMooc"></div>							
									</figure>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6" style="height: 500px">
									<figure class="highcharts-figure">
										<div id="nivelesConocimientoExamenTeorico"></div>							
									</figure>
								</div>

								<div class="col-sm-6" style="height: 500px">
									<figure class="highcharts-figure">
										<div id="nivelesConocimientoExamenTeoricoPractico"></div>							
									</figure>
								</div>
							</div>					
						</div>
					</div>
				</div>
			</div>
		</div> 
		<?php include("../plantilla/footer.php")?>  
	</body>
</html>
<script type="text/javascript">
	Highcharts.chart('nivelesConocimientoBarTwo', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos ( Diagnostico)'
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
		    name: 'Herramientas',
		    color: '#7F6000',
		    data: [341	, 	161	, 	518	, 	10	, 	328]
		  }, {
		    name: 'Word',
		    color: '#00729A',
		    data: [407	, 	283	, 	294	, 	17	, 	357]
		  }, {
		    name: 'Excel',
		    color: '#843C0C',
		    data: [374	, 	361	, 	193	, 	33	, 	397]
		  }, {
		    name: 'PPT',
		    color: '#006600',
		    data: [720	, 	255	, 	274	, 	139	, 	96]
		  }, {
		    name: 'Internet',
		    color: '#1F4E79',
		    data: [356	, 	443	, 	201	, 	139	, 	219]
		  }, {
		    name: 'Computador',
		    color: '#7030A0',
		    data: [131	, 	712	, 	21	, 	44	, 	450]
		  }]
	});
</script>

<script type="text/javascript">
    	Highcharts.chart('nivelesConocimientoBar', {
    chart: {
        type: 'bar'
    },
    xAxis: {
        categories: ['Inicial', 'Regular', 'En Desarrollo', 'Desarrollado', 'Excelente']
		},
	  title: {
	    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos ( Diagnostico)'
	  },
	  yAxis: {
	  	min: 0,
	  	max:2400,
	    tickInterval: 50, 
	    title: {
	      text: 'Numero de Estudiantes'
	    },
	    labels: {
            overflow: 'justify'
        }
	  },
    legend: {
        reversed: true
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
	    name: 'Herramientas',
	    color: '#7F6000',
	    data: [341	, 	161	, 	518	, 	10	, 	328]
	  }, {
	    name: 'Word',
	    color: '#00729A',
	    data: [407	, 	283	, 	294	, 	17	, 	357]
	  }, {
	    name: 'Excel',
	    color: '#843C0C',
	    data: [374	, 	361	, 	193	, 	33	, 	397]
	  }, {
	    name: 'PPT',
	    color: '#006600',
	    data: [720	, 	255	, 	274	, 	139	, 	96]
	  }, {
	    name: 'Internet',
	    color: '#1F4E79',
	    data: [356	, 	443	, 	201	, 	139	, 	219]
	  }, {
	    name: 'Computador',
	    color: '#7030A0',
	    data: [131	, 	712	, 	21	, 	44	, 	450]
	  }]
	});
</script>

<script>
	Highcharts.chart('nivelesConocimientoGraph', {
	  title: {
	    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos (General)'
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
    plotOptions: {
    	  bar: {
            dataLabels: {
                enabled: true
            }
        }
    },   

	  series: [{
	    name: 'Diagnostico',
	    data: [2329	,	2215	,	1501	,	382	,	1847]
	  }, {
	    name: 'Mooc',
	    data: [5653	,	330	,	482	,	1874	,	6038]
	  }, {
	    name: 'Examenes Teoricos',
	    data: [732	,	1558	,	2214	,	2133	,	1625]
	  }, {
	    name: 'Examenes Practicos',
	    data: [145	,	569	,	686	,	708	,	461]
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
</script>

<script>
	Highcharts.chart('nivelesConocimientoDiagnostico', {
	  title: {
	    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos ( Diagnostico)'
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
	    name: 'Computador',
	    color: '#7F6000',
	    data: [131	, 	712	, 	21	, 	44	, 	450]
	  }, {
	    name: 'Internet',
	    color: '#00729A',
	    data: [356	, 	443	, 	201	, 	139	, 	219]
	  }, {
	    name: 'PPT',
	    color: '#843C0C',
	    data: [720	, 	255	, 	274	, 	139	, 	96]
	  }, {
	    name: 'Excel',
	    color: '#006600',
	    data: [374	, 	361	, 	193	, 	33	, 	397]
	  }, {
	    name: 'Word',
	    color: '#1F4E79',
	    data: [407	, 	283	, 	294	, 	17	, 	357]
	  }, {		  	
	    name: 'Herramientas',
	    color: '#7030A0',
	    data: [341	, 	161	, 	518	, 	10	, 	328]
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
</script>	

<script>
	Highcharts.chart('nivelesConocimientoMooc', {
	  title: {
	    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos ( Mooc )'
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
	    name: 'Computador',
	    color: '#7F6000',
	    data: [800,	42,	104,	343,	1068]
	  }, {
	    name: 'Internet',
	    color: '#00729A',
	    data: [882,	16,	58,	378	, 1023 ]
	  }, {
	    name: 'PPT',
	    color: '#843C0C',
	    data: [926,	27,	59,	378,	1202 ]
	  }, {
	    name: 'Excel',
	    color: '#006600',
	    data: [976,	111,	97,	373,	800 ]
	  }, {
	    name: 'Word',
	    color: '#1F4E79',
	    data: [1001,	106,	91,	152,	1007 ]
	  }, {
	    name: 'Herramientas',
	    color: '#7030A0',
	    data: [1068,	28,	73,	250,	938 ]
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
</script>

<script>
	Highcharts.chart('nivelesConocimientoExamenTeorico', {

	  title: {
	    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos ( Examen Teorico )'
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
	    name: 'Computador',
	    color: '#7F6000',
	    data: [41	, 	151	, 	389	, 	355	, 	441	 ]
	  }, {
	    name: 'Internet',
	    color: '#00729A',
	    data: [48	, 	187	, 	486	, 	320	, 	336	 ]
	  }, {
	    name: 'PPT',
	    color: '#843C0C',
	    data: [110	, 	272	, 	334	, 	398	, 	263	 ]
	  }, {
	    name: 'Excel',
	    color: '#006600',
	    data: [153	, 	391	, 	349	, 	328	, 	156	 ]
	  }, {
	    name: 'Word',
	    color: '#1F4E79',
	    data: [160	, 	390	, 	348	, 	317	, 	162	 ]
	  }, {
	    name: 'Herramientas',
	    color: '#7030A0',
	    data: [220	, 	167	, 	308	, 	415	, 	267	 ]
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
</script>

<script>
	Highcharts.chart('nivelesConocimientoExamenTeoricoPractico', {
	  title: {
	    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos ( Examen Practico)'
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
	    name: 'PPT',
	    color: '#843C0C',
	    data: [40	, 	130	, 	186	, 	256	, 	157	 ]
	  }, {
	    name: 'Excel',
	    color: '#006600',
	    data: [50	, 	238	, 	280	, 	282	, 	200	 ]
	  }, {
	    name: 'Word',
	    color: '#1F4E79',
	    data: [55	, 	201	, 	220	, 	170	, 	104	 ]
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
</script>