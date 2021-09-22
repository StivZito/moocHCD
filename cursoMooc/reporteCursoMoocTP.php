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
          <h3 align="center">CURSO MOOC - ESTUDIANTES TEORICO PRACTICOS</h1>
          <br><br>
          
          <!--CURSO MOOC TEORICO PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaCursoMoocAdmisionTP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaCursoMoocAdmisionTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="8">DATOS DEL ESTUDIANTE</td>
                          <td colspan="6">AVERAGES POR MODULO</td>
                          <td colspan="6">ESTADOS POR MODULO</td>
                          <td colspan="6">NIVELES DE CONOCIMIENTO</td>                       
                          <th rowspan="2">ESTADO GENERAL</th>
                          <th rowspan="2">COHORTE</th>
                        </tr>
                        <tr>
                          <th>NOMBRES</th>
                          <th>APELLIDOS</th>
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

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>                   
                        </tr>
                      </thead>
                      <tbody id="bodytablaCursoMoocAdmisionTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                <div id="headTablaCursoMoocEspolTP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaCursoMoocEspolTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="8">DATOS DEL ESTUDIANTE</td>
                          <td colspan="6">AVERAGES POR MODULO</td>
                          <td colspan="6">ESTADOS POR MODULO</td>
                          <td colspan="6">NIVELES DE CONOCIMIENTO</td>                       
                          <th rowspan="2">ESTADO GENERAL</th>
                          <th rowspan="2">COHORTE</th>
                        </tr>
                        <tr>
                          <th>NOMBRES</th>
                          <th>APELLIDOS</th>
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

                          <th>COMPUTADOR</th>
                          <th>INTERNET</th>
                          <th>PPT</th>
                          <th>EXCEL</th>
                          <th>WORD</th>
                          <th>HERRAMIENTAS</th>                   
                        </tr>
                      </thead>
                      <tbody id="bodytablaCursoMoocEspolTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

<script type="text/javascript" src="js/cursoMooc.js"></script>
<script type="text/javascript">
  $(document).ready(function() { 
    reporteCursoMoocAdmisionTP()
    reporteCursoMoocEspolTP()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaCursoMoocAdmisionTP").tableHTMLExport({type:'json',filename:'CursoMoocEstudiantesAdmisionesTeoricoPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaCursoMoocAdmisionTP").tableHTMLExport({type:'csv',filename:'CursoMoocEstudiantesAdmisionesTeoricoPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaCursoMoocAdmisionTP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "CursoMoocEstudiantesAdmisionesTeoricoPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaCursoMoocEspolTP").tableHTMLExport({type:'json',filename:'CursoMoocEstudiantesEspolTeoricoPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaCursoMoocEspolTP").tableHTMLExport({type:'csv',filename:'CursoMoocEstudiantesEspolTeoricoPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaCursoMoocEspolTP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "CursoMoocEstudiantesEspolTeoricoPractico.pdf");
    });
  })
</script>