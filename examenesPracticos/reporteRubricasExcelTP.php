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
          <h3 align="center">RUBRICAS DE EXCEL - ESTUDIANTES TEORICO PRACTICOS</h1>
          <br><br>

          <!--CURSO MOOC TEORICO PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaRubricaExcelAdmisionTP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">
                    <table id="tablaRubricaExcelAdmisionTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <th colspan="6">DATOS DEL ESTUDIANTE</th>
                          <th colspan="5">FUNCIONES BASICAS</td>
                          <th colspan="4">ORDENAR Y FILTRAR</th>                       
                          <th colspan="4">TABLA DINAMICA</th> 
                          <th colspan="2">FUNCION SI</th> 
                          <th rowspan="2">TOTAL GENERAL</th>
                          <th rowspan="2">NIVEL<br>CONOCIMIENTO<br></th>
                          <th rowspan="2">CARRERA</th>
                          <th rowspan="2">COHORTE</th>
                          <th rowspan="2">FRANJA </th>
                          <th rowspan="2">PARALELO</th>
                          <th rowspan="2">DOCENTE</th>                  
                        </tr>
                        <tr>
                          <th>NOMBRES</th>
                          <th>APELLIDOS</th>
                          <th>EMAIL</th>
                          <th>MATRICULA</th>
                          <th>CEDULA</th>
                          <th>SEXO</th>

                          <th>P1</th>
                          <th>P2</th>
                          <th>P3</th>
                          <th>P4</th>
                          <th>P5</th>

                          <th>Ox1Nvl.</th>
                          <th>Ox2Nvl.</th>
                          <th>Fx1Nvl.</th>
                          <th>Fx2Nvl.</th>
                          
                          <th>P1</th>
                          <th>P2</th>
                          <th>P3</th>
                          <th>P4</th>

                          <th>SENCILLO</th>
                          <th>CONCATENADO</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaRubricaExcelAdmisionTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
          <br>
          <br>   

          <!--CURSO MOOC TEORICO PRACTICO ESPOL-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaRubricaExcelEspolTP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaRubricaExcelEspolTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <th colspan="6">DATOS DEL ESTUDIANTE</th>
                          <th colspan="5">FUNCIONES BASICAS</td>
                          <th colspan="4">ORDENAR Y FILTRAR</th>                       
                          <th colspan="4">TABLA DINAMICA</th> 
                          <th colspan="2">FUNCION SI</th> 
                          <th rowspan="2">TOTAL GENERAL</th>
                          <th rowspan="2">NIVEL<br>CONOCIMIENTO<br></th>
                          <th rowspan="2">CARRERA</th>
                          <th rowspan="2">COHORTE</th>
                          <th rowspan="2">FRANJA </th>
                          <th rowspan="2">PARALELO</th>
                          <th rowspan="2">DOCENTE</th>                  
                        </tr>
                        <tr>
                          <th>NOMBRES</th>
                          <th>APELLIDOS</th>
                          <th>EMAIL</th>
                          <th>MATRICULA</th>
                          <th>CEDULA</th>
                          <th>SEXO</th>

                          <th>P1</th>
                          <th>P2</th>
                          <th>P3</th>
                          <th>P4</th>
                          <th>P5</th>

                          <th>Ox1Nvl.</th>
                          <th>Ox2Nvl.</th>
                          <th>Fx1Nvl.</th>
                          <th>Fx2Nvl.</th>
                          
                          <th>P1</th>
                          <th>P2</th>
                          <th>P3</th>
                          <th>P4</th>

                          <th>SENCILLO</th>
                          <th>CONCATENADO</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaRubricaExcelEspolTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
        <?php include("../plantilla/footer.php")?>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript" src="js/examenesPracticos.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  
    reporteRubricasExcelAdmisionTP()
    reporteRubricasExcelEspolTP()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaRubricaExcelAdmisionTP").tableHTMLExport({type:'json',filename:'RubricasExcelEstudiantesAdmisionesTeoricoPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaRubricaExcelAdmisionTP").tableHTMLExport({type:'csv',filename:'RubricasExcelEstudiantesAdmisionesTeoricoPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaRubricaExcelAdmisionTP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "RubricasExcelEstudiantesAdmisionesTeoricoPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaRubricaExcelEspolTP").tableHTMLExport({type:'json',filename:'RubricasExcelEstudiantesEspolTeoricoPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaRubricaExcelEspolTP").tableHTMLExport({type:'csv',filename:'RubricasExcelEstudiantesEspolTeoricoPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaRubricaExcelEspolTP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "RubricasExcelEstudiantesEspolTeoricoPractico.pdf");
    });
  })
</script>