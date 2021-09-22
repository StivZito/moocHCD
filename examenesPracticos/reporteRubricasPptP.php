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
          <h3 align="center">RUBRICAS DE POWER POINT - ESTUDIANTES PRACTICOS</h1>
          <br><br>
          
          <!--CURSO MOOC PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaRubricaPPTAdmisionP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaRubricaPPTAdmisionP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="6">DATOS DEL ESTUDIANTE</td>
                          <td colspan="3">DISTRIBUCION DEL CONTENIDO (30)</td>
                          <td colspan="2">REPRESENTACION ADECUADA INFORMACION (10)</td>                       
                          <th rowspan="2">NUMERO DIAPOSITIVAS (5)</th>
                          <td colspan="2">IMAGENES (10)</td> 
                          <td colspan="5">PORTADA (10)</td>   
                          <td colspan="5">TITULOS (15)</td> 
                          <td colspan="3">TEXTO (10)</td> 
                          <td colspan="2">FONDO (10)</td>   
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

                          <th>UNA IDEA PRINCIPAL POR DIAPOSITIVA (10)</th>
                          <th>LOS TITULOS ADECUADOS (10)</th>
                          <th>DIAPOSITIVAS NO SOBRECARGADAS (10)</th>

                          <th>INSERTA VINETAS, TABLAS O SMART ART (6)</th>
                          <th>BUENAS PRACTICAS USO FORMATO (4)</th>                          

                          <th>USA TODAS LAS IMAGENES (5)</th>
                          <th>BUENAS PRACTICAS USO FORMATO (5)</th>

                          <th>TIPO DE FUENTE (2)</th>
                          <th>TAMANIO (2)</th>
                          <th>FORMATO DE FUENTE (1)</th>
                          <th>COLOR DE RELLENO (2)</th>
                          <th>CONTORNO Y EFECTO DE TEXTO (3)</th>

                          <th>TIPO DE FUENTE (3)</th>
                          <th>TAMANIO (3)</th>
                          <th>FORMATO DE FUENTE (1)</th>
                          <th>COLOR DE RELLENO (4)</th>
                          <th>CONTORNO Y EFECTO DE TEXTO (4)</th>

                          <th>TIPO DE FUENTE (4)</th>
                          <th>TAMANIO / COLOR (3)</th>
                          <th>INTERLINEADO / ALINEACION (3)</th>

                          <th>TRAMA (5)</th>
                          <th>COLOR (5)</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaRubricaPPTAdmisionP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                <div id="headTablaRubricaPPTEspolP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaRubricaPPTEspolP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="6">DATOS DEL ESTUDIANTE</td>
                          <td colspan="3">DISTRIBUCION DEL CONTENIDO (30)</td>
                          <td colspan="2">REPRESENTACION ADECUADA INFORMACION (10)</td>                       
                          <th rowspan="2">NUMERO DIAPOSITIVAS (5)</th>
                          <td colspan="2">IMAGENES (10)</td> 
                          <td colspan="5">PORTADA (10)</td>   
                          <td colspan="5">TITULOS (15)</td> 
                          <td colspan="3">TEXTO (10)</td> 
                          <td colspan="2">FONDO (10)</td>   
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

                          <th>UNA IDEA PRINCIPAL POR DIAPOSITIVA (10)</th>
                          <th>LOS TITULOS ADECUADOS (10)</th>
                          <th>DIAPOSITIVAS NO SOBRECARGADAS (10)</th>

                          <th>INSERTA VINETAS, TABLAS O SMART ART (6)</th>
                          <th>BUENAS PRACTICAS USO FORMATO (4)</th>                          

                          <th>USA TODAS LAS IMAGENES (5)</th>
                          <th>BUENAS PRACTICAS USO FORMATO (5)</th>

                          <th>TIPO DE FUENTE (2)</th>
                          <th>TAMANIO (2)</th>
                          <th>FORMATO DE FUENTE (1)</th>
                          <th>COLOR DE RELLENO (2)</th>
                          <th>CONTORNO Y EFECTO DE TEXTO (3)</th>

                          <th>TIPO DE FUENTE (3)</th>
                          <th>TAMANIO (3)</th>
                          <th>FORMATO DE FUENTE (1)</th>
                          <th>COLOR DE RELLENO (4)</th>
                          <th>CONTORNO Y EFECTO DE TEXTO (4)</th>

                          <th>TIPO DE FUENTE (4)</th>
                          <th>TAMANIO / COLOR (3)</th>
                          <th>INTERLINEADO / ALINEACION (3)</th>

                          <th>TRAMA (5)</th>
                          <th>COLOR (5)</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaRubricaPPTEspolP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    reporteRubricasPPTAdmisionP()    
    reporteRubricasPPTEspolP()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaRubricaPPTAdmisionP").tableHTMLExport({type:'json',filename:'RubricasPPTEstudiantesAdmisionesPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaRubricaPPTAdmisionP").tableHTMLExport({type:'csv',filename:'RubricasPPTEstudiantesAdmisionesPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaRubricaPPTAdmisionP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "RubricasPPTEstudiantesAdmisionesPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaRubricaPPTEspolP").tableHTMLExport({type:'json',filename:'RubricasPPTEstudiantesEspolPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaRubricaPPTEspolP").tableHTMLExport({type:'csv',filename:'RubricasPPTEstudiantesEspolPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaRubricaPPTEspolP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "RubricasPPTEstudiantesEspolPractico.pdf");
    });
  })
</script>