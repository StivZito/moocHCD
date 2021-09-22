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
          <h3 align="center">ENCUESTAS DE DIAGNOSTICO - ESTUDIANTES TEORICO PRACTICOS</h1>
          <br><br>      

          <!--DIAGNOSTICO TEORICO PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaPruebaDiagnosticoAdmisionTP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaPruebaDiagnosticoAdmisionTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="8">DATOS DEL ESTUDIANTE</td>
                          <td colspan="6">TOTAL PRUEBA DIAGNOSTICO</td>
                          <td colspan="6">NIVELES DE CONOCIMIENTO</td>                       
                        </tr>
                        <tr>
                          <th>NOMBRES </th>
                          <th>APELLIDOS </th>
                          <th>SEXO</th>
                          <th>EMAIL</th>
                          <th>MATRICULA </th>
                          <th>CEDULA</th>                        
                          <th>CARRERA</th>
                          <th>PROMEDIO GENERAL</th>

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>                    
                        </tr>
                      </thead>
                      <tbody id="bodytablaPruebaDiagnosticoAdmisionTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

          <!--DIAGNOSTICO TEORICO PRACTICO ESPOL-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaPruebaDiagnosticoEspolTP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaPruebaDiagnosticoEspolTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="8">DATOS DEL ESTUDIANTE</td>
                          <td colspan="6">TOTAL PRUEBA DIAGNOSTICO</td>
                          <td colspan="6">NIVELES DE CONOCIMIENTO</td>                       
                        </tr>
                        <tr>
                          <th>NOMBRES </th>
                          <th>APELLIDOS </th>
                          <th>SEXO</th>
                          <th>EMAIL</th>
                          <th>MATRICULA</th>
                          <th>CEDULA</th>                        
                          <th>CARRERA</th>
                          <th>PROMEDIO GENERAL</th>

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>                    
                        </tr>
                      </thead>
                      <tbody id="bodytablaPruebaDiagnosticoEspolTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

<script type="text/javascript" src="js/encuestas.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  
    reportePruebaDiagnosticoAdmisionTP()
    reportePruebaDiagnosticoEspolTP()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaPruebaDiagnosticoAdmisionTP").tableHTMLExport({type:'json',filename:'EncuestaDiagnosticoEstudiantesAdmisionesTeoricoPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaPruebaDiagnosticoAdmisionTP").tableHTMLExport({type:'csv',filename:'EncuestaDiagnosticoEstudiantesAdmisionesTeoricoPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaPruebaDiagnosticoAdmisionTP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "EncuestaDiagnosticoEstudiantesAdmisionesTeoricoPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaPruebaDiagnosticoEspolTP").tableHTMLExport({type:'json',filename:'EncuestaDiagnosticoEstudiantesEspolTeoricoPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaPruebaDiagnosticoEspolTP").tableHTMLExport({type:'csv',filename:'EncuestaDiagnosticoEstudiantesEspolTeoricoPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaPruebaDiagnosticoEspolTP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "EncuestaDiagnosticoEstudiantesEspolTeoricoPractico.pdf");
    });
  })
</script>