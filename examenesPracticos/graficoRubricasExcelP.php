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

          <!-- top tiles -->
          <div class="row" style="display: inline-block;width:100%" >
          
            <div class="tile_count">           
              
              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES REGISTRADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_p_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> APROBADOS 
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_aprobados_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_aprobados_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_aprobados_p_admision"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> REPROBADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_reprobados_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_reprobados_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_reprobados_p_admision"></div>
                  </div>                
                </div>
              </div>

            </div>
          </div>                 
          <br>  
          <br>  
          <br>  
          
          <!----------------------- Fila 1---------------------------->
          <h3 align='center'>TEMA 1: FUNCIONES BASICAS</h3>
          <br>  
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP1ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP1ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 1 ---------------------------->
          <figure>
            <div id="headTablaDetalleP1ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP1ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 1 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP1ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>


          <!----------------------- Fila 2---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP2ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP2ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 2 ---------------------------->
          <figure>
            <div id="headTablaDetalleP2ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP2ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 2 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP2ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 3---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP3ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP3ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 3 ---------------------------->
          <figure>
            <div id="headTablaDetalleP3ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP3ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 3 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP3ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 4---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP4ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP4ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 4 ---------------------------->
          <figure>
            <div id="headTablaDetalleP4ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP4ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 4 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP4ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 5---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP5ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP5ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 5 ---------------------------->
          <figure>
            <div id="headTablaDetalleP5ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP5ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 5 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP5ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 6---------------------------->
          <h3 align='center'>TEMA 2: ORDENAR Y FILTRAR</h3>
          <br>  
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP6ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP6ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 6 ---------------------------->
          <figure>
            <div id="headTablaDetalleP6ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP6ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 6 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP6ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>


          <!----------------------- Fila 7---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP7ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP7ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 7 ---------------------------->
          <figure>
            <div id="headTablaDetalleP7ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP7ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 7 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP7ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 8---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP8ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP8ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 8 ---------------------------->
          <figure>
            <div id="headTablaDetalleP8ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP8ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 8 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP8ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 9---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP9ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP9ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 9 ---------------------------->
          <figure>
            <div id="headTablaDetalleP9ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP9ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 9 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP9ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 10---------------------------->
          <h3 align='center'>TEMA 3: TABLA DINAMICA</h3>
          <br>  
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP10ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP10ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 10 ---------------------------->
          <figure>
            <div id="headTablaDetalleP10ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP10ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 10 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP10ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>


          <!----------------------- Fila 11---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP11ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP11ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 11 ---------------------------->
          <figure>
            <div id="headTablaDetalleP11ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP11ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 11 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP11ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>


          <!----------------------- Fila 12---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP12ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP12ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 12 ---------------------------->
          <figure>
            <div id="headTablaDetalleP12ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP12ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 12 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP12ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 13---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP13ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP13ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 13 ---------------------------->
          <figure>
            <div id="headTablaDetalleP13ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP13ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 13 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP13ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 14---------------------------->
          <h3 align='center'>TEMA 4: FUNCION SI</h3>
          <br>  
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP14ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP14ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 14 ---------------------------->
          <figure>
            <div id="headTablaDetalleP14ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP14ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 14 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP14ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

          <!----------------------- Fila 15---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP15ExcelP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP15ExcelP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 15 ---------------------------->
          <figure>
            <div id="headTablaDetalleP15ExcelP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP15ExcelP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td colspan="7">PREGUNTA 15 - RESPUESTAS DE ESTUDIANTES</td>
                    </tr>
                    <tr>
                      <td rowspan="2">ESTADO</td>
                      <td colspan="3">RECUENTO</td>                                         
                      <td colspan="3">PORCENTAJE</td>                                                                                                          
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleP15ExcelP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>
          <br>

        </div>
      </div>
    </div>
    <?php include("../plantilla/footer.php")?>	
  </body>
</html>

<script type="text/javascript" src="js/examenesPracticos.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  

    /*Numero de estudiantes registrados*/
    num_estudiantes_registrados_excel_p();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_excel_p_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_excel_p_admision();

    /*numero estudiantes realizaron la prueba */
    num_estudiantes_registrados_excel_aprobados_p();
    /*numero estudiantes realizaron la prueba espol */
    num_estudiantes_registrados_excel_aprobados_p_espol();
    /*numero estudiantes realizaron la prueba admsion */
    num_estudiantes_registrados_excel_aprobados_p_admision();

    /*numero estudiantes no realizaron la prueba */
    num_estudiantes_registrados_excel_reprobados_p();
    /*numero estudiantes no realizaron la prueba espol */
    num_estudiantes_registrados_excel_reprobados_p_espol();
    /*numero estudiantes no realizaron la prueba admsion */
    num_estudiantes_registrados_excel_reprobados_p_admision();

    //grafico de barra
    barra_detalleP1ExcelP_bar(grafico_barra_detalleP1ExcelP_bar);
    barra_detalleP2ExcelP_bar(grafico_barra_detalleP2ExcelP_bar);
    barra_detalleP3ExcelP_bar(grafico_barra_detalleP3ExcelP_bar);
    barra_detalleP4ExcelP_bar(grafico_barra_detalleP4ExcelP_bar);
    barra_detalleP5ExcelP_bar(grafico_barra_detalleP5ExcelP_bar);
    barra_detalleP6ExcelP_bar(grafico_barra_detalleP6ExcelP_bar);
    barra_detalleP7ExcelP_bar(grafico_barra_detalleP7ExcelP_bar);
    barra_detalleP8ExcelP_bar(grafico_barra_detalleP8ExcelP_bar);
    barra_detalleP9ExcelP_bar(grafico_barra_detalleP9ExcelP_bar);
    barra_detalleP10ExcelP_bar(grafico_barra_detalleP10ExcelP_bar);
    barra_detalleP11ExcelP_bar(grafico_barra_detalleP11ExcelP_bar);
    barra_detalleP12ExcelP_bar(grafico_barra_detalleP12ExcelP_bar);
    barra_detalleP13ExcelP_bar(grafico_barra_detalleP13ExcelP_bar);
    barra_detalleP14ExcelP_bar(grafico_barra_detalleP14ExcelP_bar);
    barra_detalleP15ExcelP_bar(grafico_barra_detalleP15ExcelP_bar);
    
    barra_detalleP1ExcelP_pie(grafico_barra_detalleP1ExcelP_pie);
    barra_detalleP2ExcelP_pie(grafico_barra_detalleP2ExcelP_pie);
    barra_detalleP3ExcelP_pie(grafico_barra_detalleP3ExcelP_pie);
    barra_detalleP4ExcelP_pie(grafico_barra_detalleP4ExcelP_pie);
    barra_detalleP5ExcelP_pie(grafico_barra_detalleP5ExcelP_pie);
    barra_detalleP6ExcelP_pie(grafico_barra_detalleP6ExcelP_pie);
    barra_detalleP7ExcelP_pie(grafico_barra_detalleP7ExcelP_pie);
    barra_detalleP8ExcelP_pie(grafico_barra_detalleP8ExcelP_pie);
    barra_detalleP9ExcelP_pie(grafico_barra_detalleP9ExcelP_pie);
    barra_detalleP10ExcelP_pie(grafico_barra_detalleP10ExcelP_pie);
    barra_detalleP11ExcelP_pie(grafico_barra_detalleP11ExcelP_pie);
    barra_detalleP12ExcelP_pie(grafico_barra_detalleP12ExcelP_pie);
    barra_detalleP13ExcelP_pie(grafico_barra_detalleP13ExcelP_pie);
    barra_detalleP14ExcelP_pie(grafico_barra_detalleP14ExcelP_pie);
    barra_detalleP15ExcelP_pie(grafico_barra_detalleP15ExcelP_pie);

    //graficos por modulos
    detalleP1ExcelP()
    detalleP2ExcelP()
    detalleP3ExcelP()
    detalleP4ExcelP()
    detalleP5ExcelP()
    detalleP6ExcelP()
    detalleP7ExcelP()
    detalleP8ExcelP()
    detalleP9ExcelP()
    detalleP10ExcelP()
    detalleP11ExcelP()
    detalleP12ExcelP()
    detalleP13ExcelP()
    detalleP14ExcelP()
    detalleP15ExcelP()

  });

</script>