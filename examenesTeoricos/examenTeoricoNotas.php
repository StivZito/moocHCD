<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("../plantilla/header.php")?>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include("../plantilla/menu.php")?>


        <!-- page content -->
        <div class="right_col" role="main">    

        <br>
        <h3 align="center">DETALLE DE CALIFICACIONES EXAMENES TEORICOS</h1>
        <br><br>

          <!--CALIFICACIONES ADMISION-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaNotasAdmision" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaNotasAdmision" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="10">DATOS DEL ESTUDIANTE</td>
                          <td colspan="7">CALIFICACIONES</td>
                          <td colspan="4">COMPUTADOR</td>
                          <td colspan="4">INTERNET</td>
                          <td colspan="4">PPT</td>
                          <td colspan="4">EXCEL</td>
                          <td colspan="4">WORD</td>
                          <td colspan="4">HERRAMIENTAS</td>
                          <td colspan="6">NIVELES DE CONOCIMIENTO</td>
                        </tr>
                        <tr>
                          <th>ID</th>
                          <th>NOMBRES </th>
                          <th>APELLIDOS </th>
                          <th>SEXO</th>
                          <th>EMAIL </th>
                          <th>MATRICULA </th>
                          <th>CEDULA</th>
                          <th>¿HIZO EXAMEN?</th>
                          <th>PROMEDIO GENERAL</th>
                          <th>CARRERA</th>

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>
                          <th>TOTAL</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>                        

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNotasAdmision" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                    <div align="left">
                      <br>
                      <button id="jsonAdmin" class="btn btn-round btn-primary">JSON</button><button id="csvAdmin" class="btn btn-round btn-info">CSV</button><button id="pdfAdmin" class="btn btn-round btn-danger">PDF</button><br>
                    </div>
                  </div>
                </div>
              </figure>
            </div>          
          </div>    

          <!--CALIFICACIONES ESPOL-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaNotasEspol" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaNotasEspol" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="10">DATOS DEL ESTUDIANTE</td>
                          <td colspan="7">CALIFICACIONES</td>
                          <td colspan="4">COMPUTADOR</td>
                          <td colspan="4">INTERNET</td>
                          <td colspan="4">PPT</td>
                          <td colspan="4">EXCEL</td>
                          <td colspan="4">WORD</td>
                          <td colspan="4">HERRAMIENTAS</td>
                          <td colspan="6">NIVELES DE CONOCIMIENTO</td>
                        </tr>
                        <tr>
                          <th>ID</th>
                          <th>NOMBRES </th>
                          <th>APELLIDOS </th>
                          <th>SEXO</th>
                          <th>EMAIL </th>
                          <th>MATRICULA </th>
                          <th>CEDULA</th>
                          <th>¿HIZO EXAMEN?</th>
                          <th>PROMEDIO GENERAL</th>
                          <th>CARRERA</th>

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>
                          <th>TOTAL</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>

                          <th>SIN RESPONDER</th>
                          <th>ACIERTOS</th>
                          <th>NO ACIERTOS </th>
                          <th>PREGUNTAS EVALUADAS</th>                        

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNotasEspol" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                    <div align="left">
                      <br>
                      <button id="jsonEspol" class="btn btn-round btn-primary">JSON</button><button id="csvEspol" class="btn btn-round btn-info">CSV</button><button id="pdfEspol" class="btn btn-round btn-danger">PDF</button>
                    </div>
                  </div>
                </div>
              </figure>
            </div>          
          </div>    
          
          <br>
          <br>
        
        </div>
        <!-- /page content -->        
      </div>
    </div> 
    <?php include("../plantilla/footer.php")?>  	
  </body>
</html>

<script type="text/javascript" src="js/teorico.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  
    detalleNotasAdmision()
    detalleNotasEspol()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaNotasAdmision").tableHTMLExport({type:'json',filename:'examenTeoricoEstudiantesAdmisionesPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaNotasAdmision").tableHTMLExport({type:'csv',filename:'examenTeoricoEstudiantesAdmisionesPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaNotasAdmision")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "examenTeoricoEstudiantesAdmisionesPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaNotasEspol").tableHTMLExport({type:'json',filename:'examenTeoricoEstudiantesAdmisionesTeoricoPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaNotasEspol").tableHTMLExport({type:'csv',filename:'examenTeoricoEstudiantesAdmisionesTeoricoPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaNotasEspol")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "examenTeoricoEstudiantesAdmisionesTeoricoPractico.pdf");
    });
  })
</script>