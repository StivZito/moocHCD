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
                    <div class="count" id="dh_estudiantes_registrados_word_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_p_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> APROBADOS 
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_aprobados_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_aprobados_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_aprobados_p_admision"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> REPROBADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_reprobados_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_reprobados_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_reprobados_p_admision"></div>
                  </div>                
                </div>
              </div>

            </div>
          </div>                 
          <br>  
          <br>  
          <br>  
          
          <!----------------------- Fila 1---------------------------->
          <h3 align='center'>TEMA 1: TABLA DE CONTENIDO</h3>
          <br>  
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP1WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP2WordP_pie"  ></div>                
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
                  <div id="headTablaDetalleP1WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP1WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">GENERAR TABLA DE CONTENIDO</td>
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
                        <tbody id="bodyTablaDetalleP1WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP2WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP2WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">APLICAR ESTILOS</td>
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
                        <tbody id="bodyTablaDetalleP2WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP3WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle1TWordP_pie"  ></div>                
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
                  <div id="headTablaDetalleP3WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP3WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">ASOCIAR MULTINIVEL</td>
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
                        <tbody id="bodyTablaDetalleP3WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>  
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle1TWordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle1TWordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">TABLA DE CONTENIDO</td>
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
                        <tbody id="bodyTablaDetalle1TWordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
          </div>          
          <br>  


          <!----------------------- Fila 5---------------------------->
          <h3 align='center'>TEMA 2: FORMATO DEL DOCUMENTO</h3>
          <br> 
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP4WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP5WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP6WordP_pie"  ></div>                
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
                  <div id="headTablaDetalleP4WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP4WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">INTERLINEADO</td>
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
                        <tbody id="bodyTablaDetalleP4WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP5WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP5WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">ESPACIADO</td>
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
                        <tbody id="bodyTablaDetalleP5WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP6WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP6WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">FUENTE</td>
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
                        <tbody id="bodyTablaDetalleP6WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>   
          </div>          
          <br> 

          <!----------------------- Fila 7---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP7WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP8WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle2TWordP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 8---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP7WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP7WordP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP7WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP8WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP8WordP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP8WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle2TWordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle2TWordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">FORMATO DEL DOCUMENTO</td>
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
                        <tbody id="bodyTablaDetalle2TWordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>   
          </div>          
          <br> 


          <!----------------------- Fila 9---------------------------->
          <h3 align='center'>TEMA 3: BORDES DE PARRAFO</h3>
          <br>  
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP9WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP10WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>   
          </div>          
          <br>

          <!----------------------- Fila 10---------------------------->
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP9WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP9WordP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP9WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP10WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP10WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">CONTORNO</td>
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
                        <tbody id="bodyTablaDetalleP10WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>   
          </div>          
          <br>  

          <!----------------------- Fila 11---------------------------->
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP11WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle3TWordP_pie"  ></div>                
                </figure>                
              </div>
            </div>   
          </div>          
          <br> 

    
          <!----------------------- Fila 12---------------------------->
          <div class="row">    
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP11WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP11WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">GROSOR</td>
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
                        <tbody id="bodyTablaDetalleP11WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>  
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle3TWordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle3TWordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">BORDES DE PARRAFO</td>
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
                        <tbody id="bodyTablaDetalle3TWordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
          </div>          
          <br>


          <!----------------------- Fila 13---------------------------->
          <br> 
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 4: NOTA AL PIE</h3>
                  <div id="grafico_barra_detalleP12WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 5: PIE DE PAGINA</h3>
                  <div id="grafico_barra_detalleP13WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 6: LETRA CAPITAL</h3>
                  <div id="grafico_barra_detalleP14WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 14---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP12WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP12WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">NOTA AL PIE</td>
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
                        <tbody id="bodyTablaDetalleP12WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP13WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP13WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">PIE DE PAGINA</td>
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
                        <tbody id="bodyTablaDetalleP13WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP14WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP14WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">LETRA CAPITAL</td>
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
                        <tbody id="bodyTablaDetalleP14WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>   
          </div>          
          <br> 

          <!----------------------- Fila 7---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 7: COLUMNAS</h3>
                  <div id="grafico_barra_detalleP15WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 8: SALTO DE PAGINA</h3>
                  <div id="grafico_barra_detalleP16WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 9: VIÑETAS</h3>
                  <div id="grafico_barra_detalleP17WordP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 

          <!----------------------- Fila 8---------------------------->
          <div class="row">    
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP15WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP15WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">COLUMNAS</td>
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
                        <tbody id="bodyTablaDetalleP15WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP16WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP16WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">SALTO DE PAGINA</td>
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
                        <tbody id="bodyTablaDetalleP16WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP17WordP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP17WordP" class="table table-striped table-bordered" style="font-style: 8px">
                        <thead style="background-color: #2D3D54;color:white" >
                          <tr>
                            <td colspan="8">VIÑETAS</td>
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
                        <tbody id="bodyTablaDetalleP17WordP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    num_estudiantes_registrados_word_p();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_word_p_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_word_p_admision();

    /*numero estudiantes realizaron la prueba */
    num_estudiantes_registrados_word_aprobados_p();
    /*numero estudiantes realizaron la prueba espol */
    num_estudiantes_registrados_word_aprobados_p_espol();
    /*numero estudiantes realizaron la prueba admsion */
    num_estudiantes_registrados_word_aprobados_p_admision();

    /*numero estudiantes no realizaron la prueba */
    num_estudiantes_registrados_word_reprobados_p();
    /*numero estudiantes no realizaron la prueba espol */
    num_estudiantes_registrados_word_reprobados_p_espol();
    /*numero estudiantes no realizaron la prueba admsion */
    num_estudiantes_registrados_word_reprobados_p_admision();

    //grafico de barra    
    barra_detalleP1WordP_pie(grafico_barra_detalleP1WordP_pie);
    barra_detalleP2WordP_pie(grafico_barra_detalleP2WordP_pie);
    barra_detalleP3WordP_pie(grafico_barra_detalleP3WordP_pie);
    barra_detalle1TWordP_pie(grafico_barra_detalle1TWordP_pie);
    barra_detalleP4WordP_pie(grafico_barra_detalleP4WordP_pie);
    barra_detalleP5WordP_pie(grafico_barra_detalleP5WordP_pie);
    barra_detalleP6WordP_pie(grafico_barra_detalleP6WordP_pie);
    barra_detalleP7WordP_pie(grafico_barra_detalleP7WordP_pie);
    barra_detalleP8WordP_pie(grafico_barra_detalleP8WordP_pie);
    barra_detalle2TWordP_pie(grafico_barra_detalle2TWordP_pie);
    barra_detalleP9WordP_pie(grafico_barra_detalleP9WordP_pie);
    barra_detalleP10WordP_pie(grafico_barra_detalleP10WordP_pie);
    barra_detalleP11WordP_pie(grafico_barra_detalleP11WordP_pie);
    barra_detalle3TWordP_pie(grafico_barra_detalle3TWordP_pie);
    barra_detalleP12WordP_pie(grafico_barra_detalleP12WordP_pie);
    barra_detalleP13WordP_pie(grafico_barra_detalleP13WordP_pie);
    barra_detalleP14WordP_pie(grafico_barra_detalleP14WordP_pie);
    barra_detalleP15WordP_pie(grafico_barra_detalleP15WordP_pie);
    barra_detalleP16WordP_pie(grafico_barra_detalleP16WordP_pie);
    barra_detalleP17WordP_pie(grafico_barra_detalleP17WordP_pie);

    //graficos por modulos
    detalleP1WordP()
    detalleP2WordP()
    detalleP3WordP()
    detalle1TWordP()
    detalleP4WordP()
    detalleP5WordP()
    detalleP6WordP()
    detalleP7WordP()
    detalleP8WordP()
    detalle2TWordP()
    detalleP9WordP()
    detalleP10WordP()
    detalleP11WordP()
    detalle3TWordP()
    detalleP12WordP()
    detalleP13WordP()
    detalleP14WordP()
    detalleP15WordP()
    detalleP16WordP()
    detalleP17WordP()

  });

</script>