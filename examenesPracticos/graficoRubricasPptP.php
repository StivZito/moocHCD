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
                    <div class="count" id="dh_estudiantes_registrados_ppt_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_p_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> APROBADOS 
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_aprobados_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_aprobados_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_aprobados_p_admision"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> REPROBADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_reprobados_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_reprobados_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_reprobados_p_admision"></div>
                  </div>                
                </div>
              </div>

            </div>
          </div>                 
          <br>  
          <br>  
          <br>  
          
          <!----------------------- Fila 1---------------------------->
          <h3 align='center'>TEMA 1: DISTRIBUCION DE CONTENIDO</h3>
          <br>  
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP1PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP2PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>   
          </div>          
          <br>

          <!----------------------- Fila 2---------------------------->
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP1PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP1PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">UNA IDEA PRINCIPAL POR DIAPOSITIVA</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP1PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP2PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP2PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TITULOS ADECUADOS</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP2PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>   
          </div>          
          <br>  

          <!----------------------- Fila 3---------------------------->
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP3PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle1TPptP_pie"  ></div>                
                </figure>                
              </div>
            </div>   
          </div>          
          <br> 

    
          <!----------------------- Fila 4---------------------------->
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP3PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP3PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">DIAPOSITIVAS NO SOBRECARGADAS</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP3PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>  
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle1TPptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle1TPptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">DISTRIBUCIÓN DE CONTENIDO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalle1TPptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
          </div>          
          <br>  


          <!----------------------- Fila 5---------------------------->
          <h3 align='center'>TEMA 2: REPRESENTACIÓN ADECUADA DE LA INFORMACIÓN CON (VIÑETAS, TABLAS O SMARTART)</h3>
          <br> 
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP4PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP5PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle2TPptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 6---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP4PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP4PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">INSERTA VIÑETAS, TABLAS O SMARTART AL MOMENTO DE PRESENTAR INFORMACIÓN</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP4PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP5PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP5PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">BUENAS PRÁCTICAS EN EL USO DE FORMATOS</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP5PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle2TPptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle2TPptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">REPRESENTACIÓN ADECUADA DE LA INFORMACIÓN CON (VIÑETAS, TABLAS O SMARTART)</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalle2TPptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>    
          </div>          
          <br> 

          <!----------------------- Fila 7---------------------------->
          <h3 align='center'>TEMA 3: NÚMERO DE DIAPOSITIVAS</h3>
          <br> 
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP6PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP6PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">NUMERO DE DIAPOSITIVAS</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP6PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP6PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>   
          </div>          
          <br> 

          <!----------------------- Fila 8---------------------------->
          <h3 align='center'>TEMA 4: IMÁGENES</h3>
          <br> 
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP7PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP8PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle3TPptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 9---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP7PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP7PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">HACE USO DE TODAS LAS IMÁGENES</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP7PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP8PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP8PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">BUENAS PRÁCTICAS EN EL USO DE FORMATOS</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP8PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle3TPptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle3TPptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">IMÁGENES</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalle3TPptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>   
          </div>          
          <br> 


          <!----------------------- Fila 10---------------------------->
          <h3 align='center'>TEMA 5: PORTADA</h3>
          <br> 
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP9PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP10PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP11PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 11---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP9PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP9PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TIPO DE FUENTE</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP9PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP10PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP10PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TAMAÑO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP10PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP11PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP11PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">FORMATO DE FUENTES (N/K/S)</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP11PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 12---------------------------->
          <br> 
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP12PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP13PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle4TPptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 13---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP12PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP12PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">COLOR DE RELLENO DE TEXTO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP12PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP13PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP13PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">CONTORNO Y EFECTO DE TEXTO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP13PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle4TPptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle4TPptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">PORTADA</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalle4TPptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
          </div>          
          <br> 


          <!----------------------- Fila 14---------------------------->
          <h3 align='center'>TEMA 6: TÍTULO</h3>
          <br> 
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP14PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP15PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP16PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 15---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP14PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP14PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TIPO DE FUENTE</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP14PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP15PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP15PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TAMAÑO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP15PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP16PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP16PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">FORMATO DE FUENTES (N/K/S)</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP16PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 16---------------------------->
          <br> 
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP17PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP18PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle5TPptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 17---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP17PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP17PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">COLOR DE RELLENO DE TEXTO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP17PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP18PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP18PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">CONTORNO Y EFECTO DE TEXTO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP18PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle5TPptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle5TPptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TÍTULO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalle5TPptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
          </div>          
          <br>


          <!----------------------- Fila 18---------------------------->
          <h3 align='center'>TEMA 7: TEXTO</h3>
          <br>  
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP19PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP20PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>   
          </div>          
          <br>

          <!----------------------- Fila 19---------------------------->
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP19PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP19PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TIPO DE FUENTE</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP19PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP20PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP20PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TAMAÑO/COLOR</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP20PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>   
          </div>          
          <br>  

          <!----------------------- Fila 20---------------------------->
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP21PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle6TPptP_pie"  ></div>                
                </figure>                
              </div>
            </div>   
          </div>          
          <br> 
    
          <!----------------------- Fila 21---------------------------->
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP21PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP21PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">INTERLINEADO/ALINEACIÓN</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP21PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>  
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle6TPptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle6TPptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TEXTO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalle6TPptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 22---------------------------->
          <h3 align='center'>TEMA 8: FONDO</h3>
          <br> 
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP22PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP23PptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle7TPptP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 23---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP22PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP22PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TRAMA</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP22PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP23PptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP23PptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">COLOR</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalleP23PptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle7TPptP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle7TPptP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">FONDO</td>
                          </tr>
                          <tr>
                            <td rowspan="2">ESTADO</td>
                            <td rowspan="2">NOTA</td>
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
                        <tbody id="bodyTablaDetalle7TPptP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>   
          </div>          
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
    num_estudiantes_registrados_ppt_p();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_ppt_p_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_ppt_p_admision();

    /*numero estudiantes realizaron la prueba */
    num_estudiantes_registrados_ppt_aprobados_p();
    /*numero estudiantes realizaron la prueba espol */
    num_estudiantes_registrados_ppt_aprobados_p_espol();
    /*numero estudiantes realizaron la prueba admsion */
    num_estudiantes_registrados_ppt_aprobados_p_admision();

    /*numero estudiantes no realizaron la prueba */
    num_estudiantes_registrados_ppt_reprobados_p();
    /*numero estudiantes no realizaron la prueba espol */
    num_estudiantes_registrados_ppt_reprobados_p_espol();
    /*numero estudiantes no realizaron la prueba admsion */
    num_estudiantes_registrados_ppt_reprobados_p_admision();

    //grafico de barra    
    barra_detalleP1PptP_pie(grafico_barra_detalleP1PptP_pie);
    barra_detalleP2PptP_pie(grafico_barra_detalleP2PptP_pie);
    barra_detalleP3PptP_pie(grafico_barra_detalleP3PptP_pie);
    barra_detalleP4PptP_pie(grafico_barra_detalleP4PptP_pie);
    barra_detalleP5PptP_pie(grafico_barra_detalleP5PptP_pie);
    barra_detalleP6PptP_pie(grafico_barra_detalleP6PptP_pie);
    barra_detalleP7PptP_pie(grafico_barra_detalleP7PptP_pie);
    barra_detalleP8PptP_pie(grafico_barra_detalleP8PptP_pie);
    barra_detalleP9PptP_pie(grafico_barra_detalleP9PptP_pie);
    barra_detalleP10PptP_pie(grafico_barra_detalleP10PptP_pie);
    barra_detalleP11PptP_pie(grafico_barra_detalleP11PptP_pie);
    barra_detalleP12PptP_pie(grafico_barra_detalleP12PptP_pie);
    barra_detalleP13PptP_pie(grafico_barra_detalleP13PptP_pie);
    barra_detalleP14PptP_pie(grafico_barra_detalleP14PptP_pie);
    barra_detalleP15PptP_pie(grafico_barra_detalleP15PptP_pie);
    barra_detalleP16PptP_pie(grafico_barra_detalleP16PptP_pie);
    barra_detalleP17PptP_pie(grafico_barra_detalleP17PptP_pie);
    barra_detalleP18PptP_pie(grafico_barra_detalleP18PptP_pie);
    barra_detalleP19PptP_pie(grafico_barra_detalleP19PptP_pie);
    barra_detalleP20PptP_pie(grafico_barra_detalleP20PptP_pie);
    barra_detalleP21PptP_pie(grafico_barra_detalleP21PptP_pie);
    barra_detalleP22PptP_pie(grafico_barra_detalleP22PptP_pie);
    barra_detalleP23PptP_pie(grafico_barra_detalleP23PptP_pie);

    barra_detalle1TPptP_pie(grafico_barra_detalle1TPptP_pie);
    barra_detalle2TPptP_pie(grafico_barra_detalle2TPptP_pie);
    barra_detalle3TPptP_pie(grafico_barra_detalle3TPptP_pie);
    barra_detalle4TPptP_pie(grafico_barra_detalle4TPptP_pie);
    barra_detalle5TPptP_pie(grafico_barra_detalle5TPptP_pie);
    barra_detalle6TPptP_pie(grafico_barra_detalle6TPptP_pie);
    barra_detalle7TPptP_pie(grafico_barra_detalle7TPptP_pie);

    //graficos por modulos
    detalleP1PptP()
    detalleP2PptP()
    detalleP3PptP()
    detalleP4PptP()
    detalleP5PptP()
    detalleP6PptP()
    detalleP7PptP()
    detalleP8PptP()
    detalleP9PptP()
    detalleP10PptP()
    detalleP11PptP()
    detalleP12PptP()
    detalleP13PptP()
    detalleP14PptP()
    detalleP15PptP()
    detalleP16PptP()
    detalleP17PptP()
    detalleP18PptP()
    detalleP19PptP()
    detalleP20PptP()
    detalleP21PptP()
    detalleP22PptP()
    detalleP23PptP()

    detalle1TPptP()
    detalle2TPptP()
    detalle3TPptP()
    detalle4TPptP()
    detalle5TPptP()
    detalle6TPptP()
    detalle7TPptP()

  });

</script>