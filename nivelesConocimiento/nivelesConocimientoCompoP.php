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

					<!-- top tiles -->
					<div class="row" style="display: inline-block;width:100%" >
						<div class="tile_count">	

							<div class="row">
								<div class="col-md-12">
										<div id="nivelesConocimientoGraph_practico" style="height: 500px"></div>							
								</div>						
							</div>	

							<br>
							<br>


							<div class="row">
								<div class="col-sm-4">									
										<div id="nivelesConocimientoDiagnostico_practico" style="height: 500px"></div>					
								</div>
								<div class="col-sm-4">
										<div id="nivelesConocimientoMooc_practico" style="height: 500px"></div>							
								</div>
								<div class="col-sm-4">
										<div id="nivelesConocimientoExamenTeoricoPractico_practico" style="height: 500px"></div>				
								</div>
							</div>

							<br>				

						</div>
					</div>
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
    nivelesConocimientoGraph_practico(grafico_nivelesConocimientoGraph_practico);
    nivelesConocimientoDiagnostico_practico(grafico_nivelesConocimientoDiagnostico_practico);
    nivelesConocimientoMooc(grafico_nivelesConocimientoMooc_practico);
    nivelesConocimientoExamenTeoricoPractico_practico(grafico_nivelesConocimientoExamenTeoricoPractico_practico);
  });
</script>