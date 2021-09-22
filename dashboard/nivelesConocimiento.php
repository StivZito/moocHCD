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
					
					<br>
					<br>

					<!-- grafico general -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">							
								<div id="nivelesConocimientoTallarin" style="height: 500px"></div>														
						</div>
					</div>
					<br>

					<!-- fila 1 -->
					<div class="row">
						<div class="col-sm-6">
							<figure class="highcharts-figure">
								<div id="nivelesConocimientoM1"></div>							
							</figure>
						</div>

						<div class="col-sm-6">
							<figure class="highcharts-figure">
								<div id="nivelesConocimientoM2"></div>							
							</figure>
						</div>
					</div>
					<br>

					<!-- fila 2 -->
					<div class="row">
						<div class="col-sm-6">
							<figure class="highcharts-figure">
								<div id="nivelesConocimientoM3"></div>							
							</figure>
						</div>

						<div class="col-sm-6">
							<figure class="highcharts-figure">
								<div id="nivelesConocimientoM4"></div>							
							</figure>
						</div>
					</div>
					<br>

					<!-- fila 3 -->
					<div class="row">
						<div class="col-sm-6">
							<figure class="highcharts-figure">
								<div id="nivelesConocimientoM5"></div>							
							</figure>
						</div>

						<div class="col-sm-6">
							<figure class="highcharts-figure">
								<div id="nivelesConocimientoM6"></div>							
							</figure>
						</div>
					</div>
					<br>
					<br>
				</div>	
			</div>
		</div> 
 		<?php include("../plantilla/footer.php")?>  	
	</body>
</html>
<script>
		Highcharts.chart('nivelesConocimientoTallarin', {
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
		    data: [78,	712,	21,	44,	450]
		  }, {
		    color: '#B08600',
		    name: 'Mooc',
		    linkedTo: 'computador',
		    data: [800,	42,	104,	343,	1068]
		  }	, {
		    color: '#7F6000',
		    name: 'Examen Teorico',
		    linkedTo: 'computador',
		    data: [41	, 	151	, 	389	, 	355	, 	441	]
		  }, {
		    name: 'Internet',
		    color: '#47CFFF',
		    id: 'internet',
		    data: [208,	443,	201,	139,	219]
		  }, {
		    color : '#00A1DA',
		    name: 'Mooc',
		    linkedTo: 'internet',
		    data: [882,	16,	58,	378	, 1023]
		  }, {
		    color : '#00729A',
		    name: 'Examen Teorico',
		    linkedTo:  'internet',
		    data: [48	, 	187	, 	486	, 	320	, 	336]
		  }, {
		    name: 'PPT',
		    color: '#F8CBAD',
		    id: 'ppt',
		    data: [530,	255,	274,	139,	96]
		  }, {
		    color: '#F4B183',
		    linkedTo: 'ppt',
		    name: 'Mooc',
		    data: [926,	27,	59,	378,	1202]
		  }, {
		    color: '#C55A11',
		    linkedTo: 'ppt',
		    name: 'Examen Teorico',
		    data: [110	, 	272	, 	334	, 	398	, 	263]
		  }, {
		    color: '#843C0C',
		    linkedTo: 'ppt',
		    name: 'Examen Practico',
		    data: [40	, 	130	, 	186	, 	256	, 	157]
		  }, {
		    name: 'Word',
		    color: '#BDD7EE',
		    id: 'word',
		    data: [221,	361,	193,	33,	397]
		  }, {
		    color : '#9DC3E6',
		    linkedTo: 'word',
		    name: 'Mooc',
		    data: [976,	111,	97,	373,	800]
		  }, {
		    color : '#2E75B6',
		    linkedTo: 'word',
		    name: 'Examen Teorico',
		    data: [153	, 	391	, 	349	, 	328	, 	156]
		  }, {
		    color : '#1F4E79',
		    linkedTo: 'word',
		    name: 'Examen Practico',
		    data: [50	, 	238	, 	280	, 	282	, 	200]
		  }, {
		    name: 'Excel',
		    color: '#97E597',
		    id: 'excel',
		    data: [288,	283,	294,	17,	357]
		  }, {
		    color: '#4AD24A',
		    linkedTo: 'excel',
		    name: 'Mooc',
		    data: [1001,	106,	91,	152,	1007]
		  }, {
		    color: '#009900',
		    linkedTo: 'excel',
		    name: 'Examen Teorico',
		    data: [160	, 	390	, 	348	, 	317	, 	162]
		  }, {
		    color: '#006600',
		    linkedTo: 'excel',
		    name: 'Examen Practico',
		    data: [55	, 	201	, 	220	, 	170	, 	104]
		  }, {
		    name: 'Herramientas',
		    color: '#C7A0E4',
		    id: 'herramientas',
		    data: [243,	161,	518,	10,	328]
		  }, {
		    color: '#9A57CD',
		    linkedTo: 'herramientas',
		    name: 'Mooc',
		    data: [1068,	28,	73,	250,	938]
		  }, {
		    color: '#7030A0',
		    linkedTo: 'herramientas',
		    name: 'Examen Teorico',
		    data: [220	, 	167	, 	308	, 	415	, 	267]
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
		    name: 'Computador',
		    color: '#7F6000',
		    data: [972	,	905	,	514	,	742	,	1959]
		  }, {
		    name: 'Internet',
		    color: '#00729A',
		    data: [1286	,	646	,	745	,	837	,	1578]
		  }, {
		    name: 'PPT',
		    color : '#843C0C',
		    data: [1796	,	684	,	853	,	1171	,	1718]
		  }, {
		    name: 'Excel',
		    color : '#1F4E79',
		    data: [1553	,	1101	,	919	,	1016	,	1553]
		  }, {
		    name: 'Word',
		    color: "#006600",
		    data: [1623	,	980	,	953	,	656	,	1630]
		  }, {
		    name: 'Herramientas',
		    color: '#7030A0',
		    data: [1629	,	356	,	899	,	675	,	1533]
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
		Highcharts.chart('nivelesConocimientoM1', {
		  title: {
		    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos (Modulo 1)'
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
		    data: [131	, 	712	, 	21	, 	44	, 	450]
		  }, {
		    name: 'Mooc',
		    color: '#B08600',
		    data: [800,	42,	104,	343,	1068]
		  }, {
		    name: 'Examen Teorico',
		    color: '#7F6000',
		    data: [41	, 	151	, 	389	, 	355	, 	441	 ]
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
		Highcharts.chart('nivelesConocimientoM2', {
		  title: {
		    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos (Modulo 2)'
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
		    data: [356	, 	443	, 	201	, 	139	, 	219]
		  }, {
		    name: 'Mooc',
		    color: '#00A1DA',
		    data: [882,	16,	58,	378	, 1023 ]
		  }, {
		    name: 'Examen Teorico',
		    color: '#00729A',
		    data: [48	, 	187	, 	486	, 	320	, 	336	 ]
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
		Highcharts.chart('nivelesConocimientoM3', {

		  title: {
		    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos (Modulo 3)'
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
		    data: [720	, 	255	, 	274	, 	139	, 	96]
		  }, {
		    name: 'Mooc',
		    color : '#F4B183',
		    data: [926,	27,	59,	378,	1202 ]
		  }, {
		    name: 'Examen Teorico',
		    color : '#C55A11',
		    data: [110	, 	272	, 	334	, 	398	, 	263	 ]
		  }, {
		    name: 'Examen Practico',
		    color : '#843C0C',
		    data: [40	, 	130	, 	186	, 	256	, 	157	 ]
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
		Highcharts.chart('nivelesConocimientoM4', {
		  title: {
		    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos (Modulo 4)'
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
		    data: [374	, 	361	, 	193	, 	33	, 	397]
		  }, {
		    name: 'Mooc',
		    color : '#9DC3E6',
		    data: [976,	111,	97,	373,	800 ]
		  }, {
		    name: 'Examen Teorico',
		    color : '#2E75B6',
		    data: [153	, 	391	, 	349	, 	328	, 	156	 ]
		  }, {
		    name: 'Examen Practico',
		    color : '#1F4E79',
		    data: [50	, 	238	, 	280	, 	282	, 	200	 ]
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
		Highcharts.chart('nivelesConocimientoM5', {
		  title: {
		    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos (Modulo 5)'
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
		    data: [407	, 	283	, 	294	, 	17	, 	357]
		  }, {
		    name: 'Mooc',
		    color: "#4AD24A",
		    data: [1001,	106,	91,	152,	1007 ]
		  }, {
		    name: 'Examen Teorico',
		    color: "#009900",
		    data: [160	, 	390	, 	348	, 	317	, 	162	 ]
		  }, {
		    name: 'Examen Practico',
		    color: "#006600",
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

    <script>
		Highcharts.chart('nivelesConocimientoM6', {
		  title: {
		    text: 'Niveles de conocimiento detallado por estudiantes teórico prácticos (Modulo 6)'
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
		    data: [341	, 	161	, 	518	, 	10	, 	328]
		  }, {
		    name: 'Mooc',
		    color: '#9A57CD',
		    data: [1068,	28,	73,	250,	938 ]
		  }, {
		    name: 'Examen Teorico',
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

