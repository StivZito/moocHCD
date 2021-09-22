<?php
include ("db/db.php");
?>
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
    			  <h3 align="center">Gráfico Detallado</h3>			  

              <div class="row">
                
                <div class="col-sm-12" > 

                  <div  class="col-sm-2" >
                    <label for="termino">Tipo: </label>
                    <select class="form-select form-select-sm" id="tipo_grafico" aria-label=".form-select-sm example">
                      <option selected>Seleccione</option>
                      <option value="1">Notas Ausentismo Examen Practico</option>
                      <option value="2">Notas Edx Teorico Practicas</option>
                      <option value="3">Notas Practicas</option>
                      <option value="4">Notas Teorico</option>
                      <option value="5">Porcentaje Cero Mooc</option>
                      <option value="6">Estudiates Aprueban Primera Vez</option>
                      <option value="7">Notas Edx Practico</option>
                    </select>
                  </div>

                  <div  class="col-sm-2" >
                    <label for="anio">Año: </label>
                    <select class="form-select form-select-sm" id="anio" aria-label=".form-select-sm example">
                      <option selected>Seleccione</option>
                      <option value="2020" selected>2020</option>            
                    </select>
                  </div>

                  <div  class="col-sm-6" >
                    <button type="button" class="btn btn-dark" onclick="grafico()">Generar Gráfico</button>
                  </div>

                </div>
              </div>	

              <br>
              <br>

              <div class="row">
                <div class="col-sm-12" id="container" style="height: 700px">
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
<script>
  function grafico(){
    var anio = $("#anio").val();
    var tipo_grafico = $("#tipo_grafico").val();
    if(anio == 'Seleccione')
      termino = '0';
    else{
      termino = anio;
    }
    if (tipo_grafico == 'Seleccione')
      alert("Seleccione Tipo de gráfico");
    else{
      if ( tipo_grafico <= 2 || tipo_grafico == 5  || tipo_grafico == 6 || tipo_grafico == 8 ){
        $.ajax({
          url: "graph.php?termino="+termino+"&tipo_grafico="+tipo_grafico
        }).done(function(data) { // data what is sent back by the php page
          $('#container').html(data); // display data
        });
      }
      else if( tipo_grafico == 3 || tipo_grafico == 7){
        $.ajax({
          url: "graph3.php?termino="+termino+"&tipo_grafico="+tipo_grafico
        }).done(function(data) { // data what is sent back by the php page
          $('#container').html(data); // display data
        });
      }
      else{
        $.ajax({
          url: "graph4.php?termino="+termino+"&tipo_grafico="+tipo_grafico
        }).done(function(data) { // data what is sent back by the php page
          $('#container').html(data); // display data
        });
      }
      
    }
   
  }
</script>