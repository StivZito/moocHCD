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
                    <div class="count" id="dh_estudiantes_registrados_excel_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_tp_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> APROBADOS 
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_aprobados_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_aprobados_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_aprobados_tp_admision"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> REPROBADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_reprobados_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_reprobados_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_excel_reprobados_tp_admision"></div>
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
                  <div id="grafico_barra_detalleP1ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP1ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 1 ---------------------------->
          <figure>
            <div id="headTablaDetalleP1ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP1ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP1ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP2ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP2ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 2 ---------------------------->
          <figure>
            <div id="headTablaDetalleP2ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP2ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP2ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP3ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP3ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 3 ---------------------------->
          <figure>
            <div id="headTablaDetalleP3ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP3ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP3ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP4ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP4ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 4 ---------------------------->
          <figure>
            <div id="headTablaDetalleP4ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP4ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP4ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP5ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP5ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 5 ---------------------------->
          <figure>
            <div id="headTablaDetalleP5ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP5ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP5ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP6ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP6ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 6 ---------------------------->
          <figure>
            <div id="headTablaDetalleP6ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP6ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP6ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP7ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP7ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 7 ---------------------------->
          <figure>
            <div id="headTablaDetalleP7ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP7ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP7ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP8ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP8ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 8 ---------------------------->
          <figure>
            <div id="headTablaDetalleP8ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP8ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP8ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP9ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP9ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 9 ---------------------------->
          <figure>
            <div id="headTablaDetalleP9ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP9ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP9ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP10ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP10ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 10 ---------------------------->
          <figure>
            <div id="headTablaDetalleP10ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP10ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP10ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP11ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP11ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 11 ---------------------------->
          <figure>
            <div id="headTablaDetalleP11ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP11ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP11ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP12ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP12ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 12 ---------------------------->
          <figure>
            <div id="headTablaDetalleP12ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP12ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP12ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP13ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP13ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 13 ---------------------------->
          <figure>
            <div id="headTablaDetalleP13ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP13ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP13ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP14ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP14ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 14 ---------------------------->
          <figure>
            <div id="headTablaDetalleP14ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP14ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP14ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP15ExcelTP_bar"  ></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP15ExcelTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 15 ---------------------------->
          <figure>
            <div id="headTablaDetalleP15ExcelTP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleP15ExcelTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                  <tbody id="bodyTablaDetalleP15ExcelTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    num_estudiantes_registrados_excel_tp();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_excel_tp_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_excel_tp_admision();

    /*numero estudiantes realizaron la prueba */
    num_estudiantes_registrados_excel_aprobados_tp();
    /*numero estudiantes realizaron la prueba espol */
    num_estudiantes_registrados_excel_aprobados_tp_espol();
    /*numero estudiantes realizaron la prueba admsion */
    num_estudiantes_registrados_excel_aprobados_tp_admision();

    /*numero estudiantes no realizaron la prueba */
    num_estudiantes_registrados_excel_reprobados_tp();
    /*numero estudiantes no realizaron la prueba espol */
    num_estudiantes_registrados_excel_reprobados_tp_espol();
    /*numero estudiantes no realizaron la prueba admsion */
    num_estudiantes_registrados_excel_reprobados_tp_admision();

    //grafico de barra
    barra_detalleP1ExcelTP_bar(grafico_barra_detalleP1ExcelTP_bar);
    barra_detalleP2ExcelTP_bar(grafico_barra_detalleP2ExcelTP_bar);
    barra_detalleP3ExcelTP_bar(grafico_barra_detalleP3ExcelTP_bar);
    barra_detalleP4ExcelTP_bar(grafico_barra_detalleP4ExcelTP_bar);
    barra_detalleP5ExcelTP_bar(grafico_barra_detalleP5ExcelTP_bar);
    barra_detalleP6ExcelTP_bar(grafico_barra_detalleP6ExcelTP_bar);
    barra_detalleP7ExcelTP_bar(grafico_barra_detalleP7ExcelTP_bar);
    barra_detalleP8ExcelTP_bar(grafico_barra_detalleP8ExcelTP_bar);
    barra_detalleP9ExcelTP_bar(grafico_barra_detalleP9ExcelTP_bar);
    barra_detalleP10ExcelTP_bar(grafico_barra_detalleP10ExcelTP_bar);
    barra_detalleP11ExcelTP_bar(grafico_barra_detalleP11ExcelTP_bar);
    barra_detalleP12ExcelTP_bar(grafico_barra_detalleP12ExcelTP_bar);
    barra_detalleP13ExcelTP_bar(grafico_barra_detalleP13ExcelTP_bar);
    barra_detalleP14ExcelTP_bar(grafico_barra_detalleP14ExcelTP_bar);
    barra_detalleP15ExcelTP_bar(grafico_barra_detalleP15ExcelTP_bar);
    
    barra_detalleP1ExcelTP_pie(grafico_barra_detalleP1ExcelTP_pie);
    barra_detalleP2ExcelTP_pie(grafico_barra_detalleP2ExcelTP_pie);
    barra_detalleP3ExcelTP_pie(grafico_barra_detalleP3ExcelTP_pie);
    barra_detalleP4ExcelTP_pie(grafico_barra_detalleP4ExcelTP_pie);
    barra_detalleP5ExcelTP_pie(grafico_barra_detalleP5ExcelTP_pie);
    barra_detalleP6ExcelTP_pie(grafico_barra_detalleP6ExcelTP_pie);
    barra_detalleP7ExcelTP_pie(grafico_barra_detalleP7ExcelTP_pie);
    barra_detalleP8ExcelTP_pie(grafico_barra_detalleP8ExcelTP_pie);
    barra_detalleP9ExcelTP_pie(grafico_barra_detalleP9ExcelTP_pie);
    barra_detalleP10ExcelTP_pie(grafico_barra_detalleP10ExcelTP_pie);
    barra_detalleP11ExcelTP_pie(grafico_barra_detalleP11ExcelTP_pie);
    barra_detalleP12ExcelTP_pie(grafico_barra_detalleP12ExcelTP_pie);
    barra_detalleP13ExcelTP_pie(grafico_barra_detalleP13ExcelTP_pie);
    barra_detalleP14ExcelTP_pie(grafico_barra_detalleP14ExcelTP_pie);
    barra_detalleP15ExcelTP_pie(grafico_barra_detalleP15ExcelTP_pie);

    //graficos por modulos
    detalleP1ExcelTP()
    detalleP2ExcelTP()
    detalleP3ExcelTP()
    detalleP4ExcelTP()
    detalleP5ExcelTP()
    detalleP6ExcelTP()
    detalleP7ExcelTP()
    detalleP8ExcelTP()
    detalleP9ExcelTP()
    detalleP10ExcelTP()
    detalleP11ExcelTP()
    detalleP12ExcelTP()
    detalleP13ExcelTP()
    detalleP14ExcelTP()
    detalleP15ExcelTP()

  });

</script>