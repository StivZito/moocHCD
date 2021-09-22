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
          <h3 align="center">GTSI - ESTUDIANTES PRACTICOS</h1>
          <br><br>

          <!--GTSI PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaGtsiAdmisionP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaGtsiAdmisionP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="7">DATOS DEL ESTUDIANTE</td>
                          <th rowspan="2">FECHA DE EXAMEN</th>
                          <th rowspan="2">EXAMEN TEORICO</th>
                          <td colspan="3">EXAMENES PRACTICO</td>
                          <th rowspan="2">APROBARON</th>
                          <th rowspan="2">COHORTE</th>
                        </tr>
                        <tr>
                          <th>NOMBRES</th>
                          <th>APELLIDOS </th>
                          <th>MATRICULA</th>
                          <th>CEDULA</th>
                          <th>EMAIL</th>
                          <th>FRANJA </th>
                          <th>PARALELO</th>  
                          <th>WORD</th>
                          <th>PPT</th>
                          <th>EXCEL</th>  
                        </tr>
                      </thead>
                      <tbody id="bodytablaGtsiAdmisionP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

          <!--GTSI PRACTICO ESPOL-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaGtsiEspolP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaGtsiEspolP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="7">DATOS DEL ESTUDIANTE</td>
                          <th rowspan="2">FECHA DE EXAMEN</th>
                          <th rowspan="2">EXAMEN TEORICO</th>
                          <td colspan="3">EXAMENES PRACTICO</td>
                          <th rowspan="2">APROBARON</th>
                          <th rowspan="2">COHORTE</th>
                        </tr>
                        <tr>
                          <th>NOMBRES</th>
                          <th>APELLIDOS </th>
                          <th>MATRICULA</th>
                          <th>CEDULA</th>
                          <th>EMAIL</th>
                          <th>FRANJA </th>
                          <th>PARALELO</th>  
                          <th>WORD</th>
                          <th>PPT</th>
                          <th>EXCEL</th>  
                        </tr>
                      </thead>
                      <tbody id="bodytablaGtsiEspolP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

<script type="text/javascript" src="js/gtsi.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  
    reporteGtsiAdmisionP()
    reporteGtsiEspolP()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaGtsiAdmisionP").tableHTMLExport({type:'json',filename:'EncuestaDiagnosticoEstudiantesAdmisionesPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaGtsiAdmisionP").tableHTMLExport({type:'csv',filename:'EncuestaDiagnosticoEstudiantesAdmisionesPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaGtsiAdmisionP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "EncuestaDiagnosticoEstudiantesAdmisionesPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaGtsiEspolP").tableHTMLExport({type:'json',filename:'EncuestaDiagnosticoEstudiantesEspolPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaGtsiEspolP").tableHTMLExport({type:'csv',filename:'EncuestaDiagnosticoEstudiantesEspolPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaGtsiEspolP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "EncuestaDiagnosticoEstudiantesEspolPractico.pdf");
    });
  })
</script>