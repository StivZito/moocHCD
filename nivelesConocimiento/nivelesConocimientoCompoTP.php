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

					<!-- top tiles -->
					<div class="row" style="display: inline-block;width:100%" >
						<div class="tile_count">		  

							<div class="row">
								<div class="col-md-12">
										<div id="nivelesConocimientoGraph" style="height: 600px"></div>							
								</div>						
							</div>
							
							<br>
							<div class="row">
								<div class="col-sm-6">									
										<div id="nivelesConocimientoDiagnostico" style="height: 600px"></div>																
								</div>

								<div class="col-sm-6">									
										<div id="nivelesConocimientoMooc" style="height: 600px"></div>																
								</div>
							</div>
							
							<br>
							<div class="row">
								<div class="col-sm-6">									
										<div id="nivelesConocimientoExamenTeorico" style="height: 600px"></div>																
								</div>

								<div class="col-sm-6" style="height: 500px">									
										<div id="nivelesConocimientoExamenTeoricoPractico" style="height: 600px"></div>																
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
<script type="text/javascript" src="js/nivelConocimiento.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  
    //grafico
    nivelesConocimientoGraph(grafico_nivelesConocimientoGraph);
    nivelesConocimientoDiagnostico(grafico_nivelesConocimientoDiagnostico);
    nivelesConocimientoMooc(grafico_nivelesConocimientoMooc);
    nivelesConocimientoExamenTeorico(grafico_nivelesConocimientoExamenTeorico);
    nivelesConocimientoExamenTeoricoPractico(grafico_nivelesConocimientoExamenTeoricoPractico);
  });
</script>