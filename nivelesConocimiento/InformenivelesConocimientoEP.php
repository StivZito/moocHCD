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
          <h3 align="center">NIVELES DE CONOCIMIENTO - ESTUDIANTES PRACTICOS</h1>
          <br><br>
          
          <!--NIVELES DE CONOCIMIENTO PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaNivelConocimientoAdmisionP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaNivelConocimientoAdmisionP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="7">DATOS DEL ESTUDIANTE</td>
                          <td colspan="3">DIAGNOSTICO</td>
                          <td colspan="3">MOOC</td>                       
                          <td colspan="3">EXAMENES PRACTICOS</td>                       
                        </tr>
                        <tr>
                          <th>NOMBRES</th>
                          <th>APELLIDOS</th>
                          <th>EMAIL</th>
                          <th>MATRICULA</th>
                          <th>CEDULA</th>
                          <th>SEXO</th>
                          <th>CARRERA</th>

                          <th>POWER POINT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>

                          <th>POWER POINT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>

                          <th>POWER POINT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>                        
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNivelConocimientoAdmisionP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

          <!--NIVELES DE CONOCIMIENTO PRACTICO ESPOL-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaNivelConocimientoEspolP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaNivelConocimientoEspolP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="7">DATOS DEL ESTUDIANTE</td>
                          <td colspan="3">DIAGNOSTICO</td>
                          <td colspan="3">MOOC</td>                       
                          <td colspan="3">EXAMENES PRACTICOS</td>                       
                        </tr>
                        <tr>
                          <th>NOMBRES</th>
                          <th>APELLIDOS</th>
                          <th>EMAIL</th>
                          <th>MATRICULA</th>
                          <th>CEDULA</th>
                          <th>SEXO</th>
                          <th>CARRERA</th>

                          <th>POWER POINT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>

                          <th>POWER POINT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>

                          <th>POWER POINT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>                        
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNivelConocimientoEspolP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
<script type="text/javascript" src="js/nivelConocimiento.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  
    informe_niveles_conocimiento_ep_admision()    
    informe_niveles_conocimiento_ep_espol()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaNivelConocimientoAdmisionP").tableHTMLExport({type:'json',filename:'NivelesDeConocimientoEstudiantesAdmisionesPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaNivelConocimientoAdmisionP").tableHTMLExport({type:'csv',filename:'NivelesDeConocimientoEstudiantesAdmisionesPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaNivelConocimientoAdmisionP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "NivelesDeConocimientoEstudiantesAdmisionesPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaNivelConocimientoEspolP").tableHTMLExport({type:'json',filename:'NivelesDeConocimientoEstudiantesEspolPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaNivelConocimientoEspolP").tableHTMLExport({type:'csv',filename:'NivelesDeConocimientoEstudiantesEspolPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaNivelConocimientoEspolP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "NivelesDeConocimientoEstudiantesEspolPractico.pdf");
    });
  })
</script>