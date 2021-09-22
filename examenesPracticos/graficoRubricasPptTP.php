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
                    <div class="count" id="dh_estudiantes_registrados_ppt_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_tp_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> APROBADOS 
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_aprobados_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_aprobados_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_aprobados_tp_admision"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> REPROBADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_reprobados_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_reprobados_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_ppt_reprobados_tp_admision"></div>
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
                  <div id="grafico_barra_detalleP1PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP2PptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP1PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP1PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP1PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP2PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP2PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP2PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP3PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle1TPptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP3PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP3PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP3PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>  
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle1TPptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle1TPptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle1TPptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP4PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP5PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle2TPptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP4PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP4PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP4PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP5PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP5PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP5PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle2TPptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle2TPptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle2TPptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="headTablaDetalleP6PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP6PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP6PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP6PptTP_pie"  ></div>                
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
                  <div id="grafico_barra_detalleP7PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP8PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle3TPptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP7PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP7PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP7PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP8PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP8PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP8PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle3TPptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle3TPptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle3TPptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP9PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP10PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP11PptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP9PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP9PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP9PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP10PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP10PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP10PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP11PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP11PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP11PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP12PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP13PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle4TPptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP12PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP12PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP12PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP13PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP13PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP13PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle4TPptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle4TPptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle4TPptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP14PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP15PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP16PptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP14PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP14PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP14PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP15PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP15PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP15PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP16PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP16PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP16PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP17PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP18PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle5TPptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP17PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP17PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP17PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP18PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP18PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP18PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle5TPptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle5TPptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle5TPptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP19PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP20PptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP19PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP19PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP19PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP20PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP20PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP20PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP21PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle6TPptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP21PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP21PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP21PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>  
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle6TPptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle6TPptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle6TPptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP22PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP23PptTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle7TPptTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP22PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP22PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP22PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP23PptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP23PptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP23PptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle7TPptTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle7TPptTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle7TPptTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    num_estudiantes_registrados_ppt_tp();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_ppt_tp_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_ppt_tp_admision();

    /*numero estudiantes realizaron la prueba */
    num_estudiantes_registrados_ppt_aprobados_tp();
    /*numero estudiantes realizaron la prueba espol */
    num_estudiantes_registrados_ppt_aprobados_tp_espol();
    /*numero estudiantes realizaron la prueba admsion */
    num_estudiantes_registrados_ppt_aprobados_tp_admision();

    /*numero estudiantes no realizaron la prueba */
    num_estudiantes_registrados_ppt_reprobados_tp();
    /*numero estudiantes no realizaron la prueba espol */
    num_estudiantes_registrados_ppt_reprobados_tp_espol();
    /*numero estudiantes no realizaron la prueba admsion */
    num_estudiantes_registrados_ppt_reprobados_tp_admision();

    //grafico de barra    
    barra_detalleP1PptTP_pie(grafico_barra_detalleP1PptTP_pie);
    barra_detalleP2PptTP_pie(grafico_barra_detalleP2PptTP_pie);
    barra_detalleP3PptTP_pie(grafico_barra_detalleP3PptTP_pie);
    barra_detalleP4PptTP_pie(grafico_barra_detalleP4PptTP_pie);
    barra_detalleP5PptTP_pie(grafico_barra_detalleP5PptTP_pie);
    barra_detalleP6PptTP_pie(grafico_barra_detalleP6PptTP_pie);
    barra_detalleP7PptTP_pie(grafico_barra_detalleP7PptTP_pie);
    barra_detalleP8PptTP_pie(grafico_barra_detalleP8PptTP_pie);
    barra_detalleP9PptTP_pie(grafico_barra_detalleP9PptTP_pie);
    barra_detalleP10PptTP_pie(grafico_barra_detalleP10PptTP_pie);
    barra_detalleP11PptTP_pie(grafico_barra_detalleP11PptTP_pie);
    barra_detalleP12PptTP_pie(grafico_barra_detalleP12PptTP_pie);
    barra_detalleP13PptTP_pie(grafico_barra_detalleP13PptTP_pie);
    barra_detalleP14PptTP_pie(grafico_barra_detalleP14PptTP_pie);
    barra_detalleP15PptTP_pie(grafico_barra_detalleP15PptTP_pie);
    barra_detalleP16PptTP_pie(grafico_barra_detalleP16PptTP_pie);
    barra_detalleP17PptTP_pie(grafico_barra_detalleP17PptTP_pie);
    barra_detalleP18PptTP_pie(grafico_barra_detalleP18PptTP_pie);
    barra_detalleP19PptTP_pie(grafico_barra_detalleP19PptTP_pie);
    barra_detalleP20PptTP_pie(grafico_barra_detalleP20PptTP_pie);
    barra_detalleP21PptTP_pie(grafico_barra_detalleP21PptTP_pie);
    barra_detalleP22PptTP_pie(grafico_barra_detalleP22PptTP_pie);
    barra_detalleP23PptTP_pie(grafico_barra_detalleP23PptTP_pie);

    barra_detalle1TPptTP_pie(grafico_barra_detalle1TPptTP_pie);
    barra_detalle2TPptTP_pie(grafico_barra_detalle2TPptTP_pie);
    barra_detalle3TPptTP_pie(grafico_barra_detalle3TPptTP_pie);
    barra_detalle4TPptTP_pie(grafico_barra_detalle4TPptTP_pie);
    barra_detalle5TPptTP_pie(grafico_barra_detalle5TPptTP_pie);
    barra_detalle6TPptTP_pie(grafico_barra_detalle6TPptTP_pie);
    barra_detalle7TPptTP_pie(grafico_barra_detalle7TPptTP_pie);

    //graficos por modulos
    detalleP1PptTP()
    detalleP2PptTP()
    detalleP3PptTP()
    detalleP4PptTP()
    detalleP5PptTP()
    detalleP6PptTP()
    detalleP7PptTP()
    detalleP8PptTP()
    detalleP9PptTP()
    detalleP10PptTP()
    detalleP11PptTP()
    detalleP12PptTP()
    detalleP13PptTP()
    detalleP14PptTP()
    detalleP15PptTP()
    detalleP16PptTP()
    detalleP17PptTP()
    detalleP18PptTP()
    detalleP19PptTP()
    detalleP20PptTP()
    detalleP21PptTP()
    detalleP22PptTP()
    detalleP23PptTP()

    detalle1TPptTP()
    detalle2TPptTP()
    detalle3TPptTP()
    detalle4TPptTP()
    detalle5TPptTP()
    detalle6TPptTP()
    detalle7TPptTP()

  });

</script>