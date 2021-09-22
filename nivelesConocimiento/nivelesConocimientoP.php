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

					<h3 align="center">ESTUDIANTES PRACTICOS</h1>
					<br>
					
					<!-- grafico general -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">							
								<div id="niveles_conocimiento_general_practico" style="height: 500px"></div>											
						</div>
					</div>
					<br>

					<!-- fila 1 -->
					<div class="row">
						<div class="col-sm-4">
							<figure class="highcharts-figure">
								<div id="nivelesConocimientoM3_practico" ></div>							
							</figure>
						</div>

						<div class="col-sm-4">
							<figure class="highcharts-figure">
								<div id="nivelesConocimientoM4_practico"></div>							
							</figure>
						</div>

						<div class="col-sm-4">
							<figure class="highcharts-figure">
								<div id="nivelesConocimientoM5_practico"></div>							
							</figure>
						</div>
					</div>
					<br>

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
    niveles_conocimiento_general_practico(grafico_niveles_conocimiento_general_practico);
    nivelesConocimientoM3_practico(grafico_niveles_conocimiento_m3_practico);
    nivelesConocimientoM4_practico(grafico_niveles_conocimiento_m4_practico);
    nivelesConocimientoM5_practico(grafico_niveles_conocimiento_m5_practico);
  });
</script>