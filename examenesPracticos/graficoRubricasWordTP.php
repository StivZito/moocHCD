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
                    <div class="count" id="dh_estudiantes_registrados_word_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_tp_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> APROBADOS 
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_aprobados_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_aprobados_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_aprobados_tp_admision"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> REPROBADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_reprobados_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_reprobados_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_word_reprobados_tp_admision"></div>
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
                  <div id="grafico_barra_detalleP1WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP2WordTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP1WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP1WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP1WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP2WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP2WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP2WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP3WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle1TWordTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP3WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP3WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP3WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>  
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle1TWordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle1TWordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle1TWordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP4WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP5WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP6WordTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP4WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP4WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP4WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP5WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP5WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP5WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP6WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP6WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP6WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP7WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP8WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle2TWordTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP7WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP7WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP7WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP8WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP8WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP8WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle2TWordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle2TWordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle2TWordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP9WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleP10WordTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP9WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP9WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP9WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP10WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP10WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP10WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP11WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle3TWordTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP11WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP11WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP11WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>                
              </div>
            </div>  
            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="headTablaDetalle3TWordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalle3TWordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalle3TWordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP12WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 5: PIE DE PAGINA</h3>
                  <div id="grafico_barra_detalleP13WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 6: LETRA CAPITAL</h3>
                  <div id="grafico_barra_detalleP14WordTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP12WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP12WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP12WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP13WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP13WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP13WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP14WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP14WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP14WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalleP15WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 8: SALTO DE PAGINA</h3>
                  <div id="grafico_barra_detalleP16WordTP_pie"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <h3 align='center'>TEMA 9: VIÑETAS</h3>
                  <div id="grafico_barra_detalleP17WordTP_pie"  ></div>                
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
                  <div id="headTablaDetalleP15WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP15WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP15WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP16WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP16WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP16WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                      </table>
                    </div>
                  </div>
                </figure>              
              </div>
            </div>  
            <div class="col-sm-4">
              <div class="container">
                <figure>
                  <div id="headTablaDetalleP17WordTP" style="display: none;background-color: white;text-align: center">
                    <div class="card-box table-responsive">          
                      <table id="tablaDetalleP17WordTP" class="table table-striped table-bordered" style="font-style: 8px">
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
                        <tbody id="bodyTablaDetalleP17WordTP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    num_estudiantes_registrados_word_tp();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_word_tp_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_word_tp_admision();

    /*numero estudiantes realizaron la prueba */
    num_estudiantes_registrados_word_aprobados_tp();
    /*numero estudiantes realizaron la prueba espol */
    num_estudiantes_registrados_word_aprobados_tp_espol();
    /*numero estudiantes realizaron la prueba admsion */
    num_estudiantes_registrados_word_aprobados_tp_admision();

    /*numero estudiantes no realizaron la prueba */
    num_estudiantes_registrados_word_reprobados_tp();
    /*numero estudiantes no realizaron la prueba espol */
    num_estudiantes_registrados_word_reprobados_tp_espol();
    /*numero estudiantes no realizaron la prueba admsion */
    num_estudiantes_registrados_word_reprobados_tp_admision();

    //grafico de barra    
    barra_detalleP1WordTP_pie(grafico_barra_detalleP1WordTP_pie);
    barra_detalleP2WordTP_pie(grafico_barra_detalleP2WordTP_pie);
    barra_detalleP3WordTP_pie(grafico_barra_detalleP3WordTP_pie);
    barra_detalle1TWordTP_pie(grafico_barra_detalle1TWordTP_pie);
    barra_detalleP4WordTP_pie(grafico_barra_detalleP4WordTP_pie);
    barra_detalleP5WordTP_pie(grafico_barra_detalleP5WordTP_pie);
    barra_detalleP6WordTP_pie(grafico_barra_detalleP6WordTP_pie);
    barra_detalleP7WordTP_pie(grafico_barra_detalleP7WordTP_pie);
    barra_detalleP8WordTP_pie(grafico_barra_detalleP8WordTP_pie);
    barra_detalle2TWordTP_pie(grafico_barra_detalle2TWordTP_pie);
    barra_detalleP9WordTP_pie(grafico_barra_detalleP9WordTP_pie);
    barra_detalleP10WordTP_pie(grafico_barra_detalleP10WordTP_pie);
    barra_detalleP11WordTP_pie(grafico_barra_detalleP11WordTP_pie);
    barra_detalle3TWordTP_pie(grafico_barra_detalle3TWordTP_pie);
    barra_detalleP12WordTP_pie(grafico_barra_detalleP12WordTP_pie);
    barra_detalleP13WordTP_pie(grafico_barra_detalleP13WordTP_pie);
    barra_detalleP14WordTP_pie(grafico_barra_detalleP14WordTP_pie);
    barra_detalleP15WordTP_pie(grafico_barra_detalleP15WordTP_pie);
    barra_detalleP16WordTP_pie(grafico_barra_detalleP16WordTP_pie);
    barra_detalleP17WordTP_pie(grafico_barra_detalleP17WordTP_pie);

    //graficos por modulos
    detalleP1WordTP()
    detalleP2WordTP()
    detalleP3WordTP()
    detalle1TWordTP()
    detalleP4WordTP()
    detalleP5WordTP()
    detalleP6WordTP()
    detalleP7WordTP()
    detalleP8WordTP()
    detalle2TWordTP()
    detalleP9WordTP()
    detalleP10WordTP()
    detalleP11WordTP()
    detalle3TWordTP()
    detalleP12WordTP()
    detalleP13WordTP()
    detalleP14WordTP()
    detalleP15WordTP()
    detalleP16WordTP()
    detalleP17WordTP()

  });

</script>