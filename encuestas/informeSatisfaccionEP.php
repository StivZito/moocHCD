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
          <h3 align="center">ENCUESTAS SATISFACCION - ESTUDIANTES PRACTICOS</h1>
          <br><br>

          <!--Satisfaccion PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaPruebaSatisfaccionAdmisionP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaPruebaSatisfaccionAdmisionP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="10">DATOS DEL ESTUDIANTE</td>
                          <th rowspan="2">¿CUÁNTO TIEMPO LE DEDICAS AL MOOC HCD POR SEMANA?</th>
                          <th rowspan="2">¿TENIAS CONOCIMIENTO DE LAS FECHAS IMPORTANTES DEL MOOC HCD?</th>
                          <th rowspan="2">¿SABÍAS ACERCA DEL PROCESO Y POLÍTICAS DE APROBACIÓN DEL MOOC HCD?</th>
                          <th rowspan="2">¿INGRESASTE A LA PESTAÑA “PREGUNTA FRECUENTE” DEL MOOC HCD ?</th>
                          <td colspan="6">¿CUÁL ES EL PORCENTAJE DE CONOCIMIENTO QUE TE APORTÓ CADA MÓDULO?</td>
                          <th rowspan="2">¿A TRAVÉS DE QUE MEDIO DE COMUNICACIÓN REALIZAS CON MÁS FRECUENCIAS TUS CONSULTAS O REPORTAS TUS PROBLEMAS CON LA PLATAFORMA?</th>
                          <td colspan="2">CLASIFIQUE LA SATISFACCIÓN RESPECTO A LA ATENCIÓN RECIBIDA</td>
                          <th rowspan="2">ESCOJA EL RANGO DE TIEMPO EN QUE SUS CONSULTAS O PROBLEMAS FUERON ATENDIDOS</th>
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
                          <th>MÓDULO 1: EL COMPUTADOR</th>                        
                          <th>MÓDULO 2: INTERNET Y SUS HERRAMIENTAS BÁSICAS</th>
                          <th>MÓDULO 3: POWERPOINT</th>
                          <th>MÓDULO 4: EXCEL</th>
                          <th>MÓDULO 5: WORD</th>
                          <th>MÓDULO 6: HERRAMIENTAS COLABORATIVAS</th> 
                          <th>¿LA RESPUESTA RECIBIDA POR PARTE DEL EQUIPO MOOC HCD FUE CLARA Y ENTENDIBLE?</th>
                          <th>¿SU CONSULTA O REQUERIMIENTO FUE SOLUCIONADO EFICAZMENTE?</th> 
                        </tr>
                      </thead>
                      <tbody id="bodytablaPruebaSatisfaccionAdmisionP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

          <!--Satisfaccion PRACTICO ESPOL-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaPruebaSatisfaccionEspolP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaPruebaSatisfaccionEspolP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="10">DATOS DEL ESTUDIANTE</td>
                          <th rowspan="2">¿CUÁNTO TIEMPO LE DEDICAS AL MOOC HCD POR SEMANA?</th>
                          <th rowspan="2">¿TENIAS CONOCIMIENTO DE LAS FECHAS IMPORTANTES DEL MOOC HCD?</th>
                          <th rowspan="2">¿SABÍAS ACERCA DEL PROCESO Y POLÍTICAS DE APROBACIÓN DEL MOOC HCD?</th>
                          <th rowspan="2">¿INGRESASTE A LA PESTAÑA “PREGUNTA FRECUENTE” DEL MOOC HCD ?</th>
                          <td colspan="6">¿CUÁL ES EL PORCENTAJE DE CONOCIMIENTO QUE TE APORTÓ CADA MÓDULO?</td>
                          <th rowspan="2">¿A TRAVÉS DE QUE MEDIO DE COMUNICACIÓN REALIZAS CON MÁS FRECUENCIAS TUS CONSULTAS O REPORTAS TUS PROBLEMAS CON LA PLATAFORMA?</th>
                          <td colspan="2">CLASIFIQUE LA SATISFACCIÓN RESPECTO A LA ATENCIÓN RECIBIDA</td>
                          <th rowspan="2">ESCOJA EL RANGO DE TIEMPO EN QUE SUS CONSULTAS O PROBLEMAS FUERON ATENDIDOS</th>
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
                          <th>MÓDULO 1: EL COMPUTADOR</th>                        
                          <th>MÓDULO 2: INTERNET Y SUS HERRAMIENTAS BÁSICAS</th>
                          <th>MÓDULO 3: POWERPOINT</th>
                          <th>MÓDULO 4: EXCEL</th>
                          <th>MÓDULO 5: WORD</th>
                          <th>MÓDULO 6: HERRAMIENTAS COLABORATIVAS</th> 
                          <th>¿LA RESPUESTA RECIBIDA POR PARTE DEL EQUIPO MOOC HCD FUE CLARA Y ENTENDIBLE?</th>
                          <th>¿SU CONSULTA O REQUERIMIENTO FUE SOLUCIONADO EFICAZMENTE?</th> 
                        </tr>
                      </thead>
                      <tbody id="bodytablaPruebaSatisfaccionEspolP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    reportePruebaSatisfaccionAdmisionP()
    reportePruebaSatisfaccionEspolP()
  });
</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaPruebaSatisfaccionAdmisionP").tableHTMLExport({type:'json',filename:'EncuestaSatisfaccionEstudiantesAdmisionesPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaPruebaSatisfaccionAdmisionP").tableHTMLExport({type:'csv',filename:'EncuestaSatisfaccionEstudiantesAdmisionesPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaPruebaSatisfaccionAdmisionP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "EncuestaSatisfaccionEstudiantesAdmisionesPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaPruebaSatisfaccionEspolP").tableHTMLExport({type:'json',filename:'EncuestaSatisfaccionEstudiantesEspolPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaPruebaSatisfaccionEspolP").tableHTMLExport({type:'csv',filename:'EncuestaSatisfaccionEstudiantesEspolPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaPruebaSatisfaccionEspolP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "EncuestaSatisfaccionEstudiantesEspolPractico.pdf");
    });
  })
</script>