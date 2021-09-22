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
          <h3 align="center">RUBRICAS DE WORD - ESTUDIANTES PRACTICOS</h1>
          <br><br>
          
          <!--CURSO MOOC PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaRubricaWordAdmisionP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaRubricaWordAdmisionP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="6">DATOS DEL ESTUDIANTE</td>
                          <td colspan="3">TABLA DE CONTENIDO</td>
                          <td colspan="5">FORMATO DEL DOCUMENTO</td>                       
                          <td colspan="3">BORDES</td> 
                          <th rowspan="2">NOTA AL PIE (5)</th>
                          <th rowspan="2">PIE DE PAGINA (8)</th>
                          <th rowspan="2">LETRA CAPITAL (7)</th>
                          <th rowspan="2">COLUMNAS (10)</th>
                          <th rowspan="2">SALTOS (5)</th>
                          <th rowspan="2">VIÑETAS (10)</th>                    
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
                          <th>CEDULA </th>
                          <th>SEXO</th>

                          <th>GENERA TC (5)</th>
                          <th>APLICA ESTILOS (10)</th>
                          <th>ASOCIA MULTINIVEL (10)</th>

                          <th>INTERLINEADO (5)</th>
                          <th>ESPACIADO (5)</th>
                          <th>FUENTE (4)</th>
                          <th>TAMAÑIO (3)</th>
                          <th>COLOR (3)</th>

                          <th>COLOR (3)</th>
                          <th>CONTORNO (4)</th>
                          <th>GROSOR (3)</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaRubricaWordAdmisionP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

          <!--CURSO MOOC PRACTICO ESPOL-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaRubricaWordEspolP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaRubricaWordEspolP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="6">DATOS DEL ESTUDIANTE</td>
                          <td colspan="3">TABLA DE CONTENIDO</td>
                          <td colspan="5">FORMATO DEL DOCUMENTO</td>                       
                          <td colspan="3">BORDES</td> 
                          <th rowspan="2">NOTA AL PIE (5)</th>
                          <th rowspan="2">PIE DE PAGINA (8)</th>
                          <th rowspan="2">LETRA CAPITAL (7)</th>
                          <th rowspan="2">COLUMNAS (10)</th>
                          <th rowspan="2">SALTOS (5)</th>
                          <th rowspan="2">VIÑETAS (10)</th>                    
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
                          <th>CEDULA </th>
                          <th>SEXO</th>

                          <th>GENERA TC (5)</th>
                          <th>APLICA ESTILOS (10)</th>
                          <th>ASOCIA MULTINIVEL (10)</th>

                          <th>INTERLINEADO (5)</th>
                          <th>ESPACIADO (5)</th>
                          <th>FUENTE (4)</th>
                          <th>TAMAÑIO (3)</th>
                          <th>COLOR (3)</th>

                          <th>COLOR (3)</th>
                          <th>CONTORNO (4)</th>
                          <th>GROSOR (3)</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaRubricaWordEspolP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    reporteRubricasWordAdmisionP()    
    reporteRubricasWordEspolP()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaRubricaWordAdmisionP").tableHTMLExport({type:'json',filename:'RubricasWordEstudiantesAdmisionesPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaRubricaWordAdmisionP").tableHTMLExport({type:'csv',filename:'RubricasWordEstudiantesAdmisionesPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaRubricaWordAdmisionP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "RubricasWordEstudiantesAdmisionesPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaRubricaWordEspolP").tableHTMLExport({type:'json',filename:'RubricasWordEstudiantesEspolPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaRubricaWordEspolP").tableHTMLExport({type:'csv',filename:'RubricasWordEstudiantesEspolPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaRubricaWordEspolP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "RubricasWordEstudiantesEspolPractico.pdf");
    });
  })
</script>