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
          <h3 align="center">ENCUESTAS DEMOGRAFICAS - ESTUDIANTES TEORICO PRACTICOS</h1>
          <br><br>      

          <!--DEMOGRAFICAS TEORICO PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaPruebaDemograficaAdmisionTP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaPruebaDemograficaAdmisionTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="10">DATOS DEL ESTUDIANTE</td>
                          <th rowspan="2">¿CUÁL ES SU OCUPACIÓN?</th>
                          <th rowspan="2">USTED COMO ESTUDIANTE, ¿DE QUÉ FORMA PREFIERE RECIBIR CLASES?</th>
                          <th rowspan="2">¿EN QUÉ NIVEL CONSIDERAS QUE ESTÁN TUS CONOCIMIENTOS DE OFIMÁTICA?</th>
                          <th rowspan="2">¿POR QUÉ MEDIO SE ENTERÓ QUE ESTABA REGISTRADO EN EL CURSO MOOC HCD ?</th>
                          <th rowspan="2">¿CUÁL ES LA MATERIA QUE SE HABILITA AL MOMENTO DE APROBAR EL MOOC HCD?</th>
                          <th rowspan="2">¿CON QUÉ EQUIPOS TECNOLÓGICOS CUENTA EN SU HOGAR PARA REALIZAR EL CURSO?</th>
                          <th rowspan="2">¿QUÉ CONEXIÓN DE INTERNET UTILIZA?</th>
                        </tr>
                        <tr>
                          <th>NOMBRES </th>
                          <th>APELLIDOS </th>
                          <th>EMAIL</th>
                          <th>MATRICULA </th>
                          <th>CEDULA</th>                        
                          <th>CARRERA</th>
                          <th>SEXO</th>
                          <th>EDAD</th>
                          <th>COLEGIO</th>
                          <th>COHORTE</th>                    
                        </tr>
                      </thead>
                      <tbody id="bodytablaPruebaDemograficaAdmisionTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

          <!--DEMOGRAFICAS TEORICO PRACTICO ESPOL-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaPruebaDemograficaEspolTP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaPruebaDemograficaEspolTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="10">DATOS DEL ESTUDIANTE</td>
                          <th rowspan="2">¿CUÁL ES SU OCUPACIÓN?</th>
                          <th rowspan="2">USTED COMO ESTUDIANTE, ¿DE QUÉ FORMA PREFIERE RECIBIR CLASES?</th>
                          <th rowspan="2">¿EN QUÉ NIVEL CONSIDERAS QUE ESTÁN TUS CONOCIMIENTOS DE OFIMÁTICA?</th>
                          <th rowspan="2">¿POR QUÉ MEDIO SE ENTERÓ QUE ESTABA REGISTRADO EN EL CURSO MOOC HCD ?</th>
                          <th rowspan="2">¿CUÁL ES LA MATERIA QUE SE HABILITA AL MOMENTO DE APROBAR EL MOOC HCD?</th>
                          <th rowspan="2">¿CON QUÉ EQUIPOS TECNOLÓGICOS CUENTA EN SU HOGAR PARA REALIZAR EL CURSO?</th>
                          <th rowspan="2">¿QUÉ CONEXIÓN DE INTERNET UTILIZA?</th>
                        </tr>
                        <tr>
                          <th>NOMBRES </th>
                          <th>APELLIDOS </th>
                          <th>EMAIL</th>
                          <th>MATRICULA </th>
                          <th>CEDULA</th>                        
                          <th>CARRERA</th>
                          <th>SEXO</th>
                          <th>EDAD</th>
                          <th>COLEGIO</th>
                          <th>COHORTE</th>                    
                        </tr>
                      </thead>
                      <tbody id="bodytablaPruebaDemograficaEspolTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    reportePruebaDemograficaAdmisionTP()
    reportePruebaDemograficaEspolTP()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaPruebaDemograficaAdmisionTP").tableHTMLExport({type:'json',filename:'EncuestaDemograficaEstudiantesAdmisionesTeoricoPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaPruebaDemograficaAdmisionTP").tableHTMLExport({type:'csv',filename:'EncuestaDemograficaEstudiantesAdmisionesTeoricoPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaPruebaDemograficaAdmisionTP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "EncuestaDemograficaEstudiantesAdmisionesTeoricoPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaPruebaDemograficaEspolTP").tableHTMLExport({type:'json',filename:'EncuestaDemograficaEstudiantesEspolTeoricoPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaPruebaDemograficaEspolTP").tableHTMLExport({type:'csv',filename:'EncuestaDemograficaEstudiantesEspolTeoricoPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaPruebaDemograficaEspolTP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "EncuestaDemograficaEstudiantesEspolTeoricoPractico.pdf");
    });
  })
</script>