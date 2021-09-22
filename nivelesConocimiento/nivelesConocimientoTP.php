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

					<h3 align="center">ESTUDIANTES TEORICO PRACTICOS</h1>
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
								<div id="nivelesConocimientoM3" ></div>							
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
<script type="text/javascript" src="js/nivelConocimiento.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  
    //grafico
    niveles_conocimiento_tallarin(grafico_niveles_conocimiento_tallarin);
    nivelesConocimientoM1(grafico_niveles_conocimiento_m1);
    nivelesConocimientoM2(grafico_niveles_conocimiento_m2);
    nivelesConocimientoM3(grafico_niveles_conocimiento_m3);
    nivelesConocimientoM4(grafico_niveles_conocimiento_m4);
    nivelesConocimientoM5(grafico_niveles_conocimiento_m5);
    nivelesConocimientoM6(grafico_niveles_conocimiento_m6);
  });
</script>