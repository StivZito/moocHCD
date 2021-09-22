<?php
include("lib/funciones.php");
require_once '../src/SimpleXLSX.php';
ini_set('MAX_EXECUTION_TIME', 0);
set_time_limit(0);
 
try 
{
    $conexion = Conectarse(); 
    $query = "SELECT f.matricula,f.identificacion,f.nombres,f.apellidos,f.email,       
               ifnull(h.calificacion,0) as calificacionExcel,
               ifnull(j.calificacion,0) as calificacionPPT,
               ifnull(k.calificacion,0) as calificacionWord,               
               (case when ifnull(g.contestadas,0) = 7 then 1.25 else 0 end) as demografica,
               (case when ifnull(h.contestadas,0) = 1 and (f.cohorte in ('EXCEL','PPT','WORD')) then 1.25 
                     when ifnull(h.contestadas,0) = 2 and (f.cohorte in ('EXCEL - PPT','WORD - EXCEL','WORD - PPT')) then 1.25 
                     when ifnull(h.contestadas,0) = 3 and (f.cohorte in ('PRACTICO')) then 1.25 else 0 end) as diagnostico,
               (case when ifnull(i.contestadas,0) >= 14 then 2.50 else 0 end) as satisfaccion,               
               0  as puntosExtras,
               0 as Excel,
               0 as PPT,
               0 as Word,
               ifnull(ifnull(h.franja,j.franja),k.franja) as franja,
               ifnull(ifnull(h.paralelo,j.paralelo),k.paralelo) as paralelo,
               f.termino,f.anio,f.sistema,f.tipoEstudiante,f.cohorte   
               
        from academicopractico f 

        left join ( Select c.username,sum(case when c.respuesta not in ('NULL') then 1 else 0 end) as contestadas
                    from ec_demografica_practico c 
                    where c.respuesta not in ('NULL')
                    and   c.tipoEstudiante = 'ESPOL'
                    group by c.username) g
        on  f.email like concat('%',g.username,'%')
                    
        left join ( select c.username,c.email,
                          ((case when c.m3 > 0 then 1 else 0 end) + (case when c.m4 > 0 then 1 else 0 end) + (case when c.m5 > 0 then 1 else 0 end)) as contestadas
                    from ec_diagnostico_practico c
                    where   c.tipoEstudiante = 'ESPOL') h 
        on  f.email = h.email

        left join (Select c.username,
                   sum(case when c.respuesta not in ('NULL') then 1 else 0 end) as contestadas
                   from ec_satisfaccion_practico c 
                   where c.respuesta not in ('NULL')
                   and c.tipoEstudiante = 'ESPOL'
                   group by c.username) i
        on  f.email like concat('%',i.username,'%')

        left join rubricasexcelpractico h 
        on  (h.sis_id = f.matricula 
        and h.tipoEstudiante = 'ESPOL'
        and h.tipoEstudiante = f.tipoEstudiante) or (    h.sis_id         = f.identificacion
                                                     and h.tipoEstudiante = 'ESPOL'
                                                     and h.tipoEstudiante = f.tipoEstudiante)

        left join rubricaspptpractico j 
        on  (j.cedula         = f.matricula
        and j.tipoEstudiante = 'ESPOL'
        and j.tipoEstudiante = f.tipoEstudiante) or (   j.cedula = f.identificacion
                                                    and j.tipoEstudiante = 'ESPOL'
                                                    and j.tipoEstudiante = f.tipoEstudiante)

        left join rubricaswordpractico k 
        on  (k.cedula         = f.matricula
        and k.tipoEstudiante = 'ESPOL'
        and k.tipoEstudiante = f.tipoEstudiante) or (k.cedula = f.identificacion 
                                                     and k.tipoEstudiante = 'ESPOL'
                                                     and k.tipoEstudiante = f.tipoEstudiante)

        where f.tipoEstudiante= 'ESPOL'

        union

        select f.matricula,f.identificacion,f.nombres,f.apellidos,f.email,               
               ifnull(h.calificacion,0) as calificacionExcel,
               ifnull(j.calificacion,0) as calificacionPPT,
               ifnull(k.calificacion,0) as calificacionWord,               
               (case when ifnull(g.contestadas,0) = 7 then 1.25 else 0 end) as demografica,
               (case when ifnull(h.contestadas,0) = 1 and (f.cohorte in ('EXCEL','PPT','WORD')) then 1.25 
                     when ifnull(h.contestadas,0) = 2 and (f.cohorte in ('EXCEL - PPT','WORD - EXCEL','WORD - PPT')) then 1.25 
                     when ifnull(h.contestadas,0) = 3 and (f.cohorte in ('PRACTICO')) then 1.25 else 0 end) as diagnostico,
               (case when ifnull(i.contestadas,0) >= 14 then 2.50 else 0 end) as satisfaccion,               
               0  as puntosExtras,
               0 as Excel,
               0 as PPT,
               0 as Word,
               ifnull(ifnull(h.franja,j.franja),k.franja) as franja,
               ifnull(ifnull(h.paralelo,j.paralelo),k.paralelo) as paralelo,
               f.termino,f.anio,f.sistema,f.tipoEstudiante,f.cohorte   
               
        from academicopractico f 

        left join ( Select c.username,sum(case when c.respuesta not in ('NULL') then 1 else 0 end) as contestadas
                    from ec_demografica_practico c 
                    where c.respuesta not in ('NULL')
                    and   c.tipoEstudiante = 'ADMISION'
                    group by c.username) g
        on  f.identificacion like concat('%',g.username,'%')
                    
        left join ( select c.username,c.email,
                          ((case when c.m3 > 0 then 1 else 0 end) + (case when c.m4 > 0 then 1 else 0 end) + (case when c.m5 > 0 then 1 else 0 end)) as contestadas
                    from ec_diagnostico_practico c
                    where   c.tipoEstudiante = 'ADMISION') h 
        on  f.identificacion = h.email 

        left join (Select c.username,
                   sum(case when c.respuesta not in ('NULL') then 1 else 0 end) as contestadas
                   from ec_satisfaccion_practico c 
                   where c.respuesta not in ('NULL')
                   and c.tipoEstudiante = 'ADMISION'
                   group by c.username) i
        on  f.identificacion like concat('%',i.username,'%')

        left join rubricasexcelpractico h 
        on  (h.sis_id = f.matricula
        and h.tipoEstudiante = 'ADMISION'
        and h.tipoEstudiante = f.tipoEstudiante) or (    h.sis_id         = f.identificacion
                                                     and h.tipoEstudiante = 'ADMISION'
                                                     and h.tipoEstudiante = f.tipoEstudiante)

        left join rubricaspptpractico j 
        on  (j.cedula         = f.matricula
        and j.tipoEstudiante = 'ADMISION'
        and j.tipoEstudiante = f.tipoEstudiante) or (   j.cedula = f.identificacion
                                                    and j.tipoEstudiante = 'ADMISION'
                                                    and j.tipoEstudiante = f.tipoEstudiante)

        left join rubricaswordpractico k 
        on  (k.cedula         = f.matricula
        and k.tipoEstudiante = 'ADMISION'
        and k.tipoEstudiante = f.tipoEstudiante) or (   k.cedula = f.identificacion
                                                    and k.tipoEstudiante = 'ADMISION'
                                                    and k.tipoEstudiante = f.tipoEstudiante)

        where f.tipoEstudiante= 'ADMISION';";
    $result = mysqli_query($conexion, $query);
    $eliminaData = true;

    if (mysqli_num_rows($result) > 0) 
    {
        while($fila = mysqli_fetch_assoc($result))
        {
            $matricula         = $fila["matricula"];
            $identificacion    = $fila["identificacion"];
            $nombres           = $fila["nombres"];
            $apellidos         = $fila["apellidos"];
            $email             = $fila["email"];
            $calificacionExcel = $fila["calificacionExcel"];
            $calificacionPPT   = $fila["calificacionPPT"];
            $calificacionWord  = $fila["calificacionWord"];               
            $demografica       = $fila["demografica"];
            $diagnostico       = $fila["diagnostico"];
            $satisfaccion      = $fila["satisfaccion"];
            $Excel             = $fila["Excel"];
            $PPT               = $fila["PPT"];
            $Word              = $fila["Word"];
            $franja            = $fila["franja"];               
            $paralelo          = $fila["paralelo"];    
            $termino           = $fila["termino"];               
            $anio              = $fila["anio"];        
            $sistema           = $fila["sistema"];        
            $tipoEstudiante    = $fila["tipoEstudiante"];        
            $cohorte           = $fila["cohorte"];    

            $puntosExtras      = $demografica + $satisfaccion + $diagnostico; 
            $procesar          = $calificacionExcel + $calificacionPPT + $calificacionWord;
            if ($procesar == 0) $puntosExtras = 0;

            if ($puntosExtras  < 5) 
            {
                $puntosExtras  = 0;
                $Excel         = $calificacionExcel;
                $PPT           = $calificacionPPT;
                $Word          = $calificacionWord;
            }

            if ($puntosExtras > 0)
            {
                ///////////////////////////////////////////////////////////////////////////////////////////////////cohorte word
                if ($cohorte == 'WORD')
                {
                    $Excel = 0;
                    $PPT   = 0;
                    $Word  = $calificacionWord + $puntosExtras; 
                    if ($Word  > 100) $Word  = 100;
                }

                ///////////////////////////////////////////////////////////////////////////////////////////////////cohorte excel
                if ($cohorte == 'EXCEL')
                {
                    $Excel = $calificacionExcel + $puntosExtras; 
                    $PPT   = 0;
                    $Word  = 0;
                    if ($Excel  > 100) $Excel  = 100;
                }

                ///////////////////////////////////////////////////////////////////////////////////////////////////cohorte ppt
                if ($cohorte == 'PPT')
                {
                    $Excel = 0;
                    $PPT   = $calificacionPPT + $puntosExtras; 
                    $Word  = 0;
                    if ($PPT  > 100) $PPT  = 100;
                }

                ///////////////////////////////////////////////////////////////////////////////////////////////////cohorte word - ppt
                if ($cohorte == 'WORD - PPT')
                {
                    $Excel = 0;
                    $PPT   = $calificacionPPT;
                    $Word  = $calificacionWord;

                    $puntosPasarPPT      = 0;
                    $puntosPasarWord     = 0;
                    $puntosLlegarCienPPT = 0;
                    $puntosLlegarCienWord = 0;

                    if ($calificacionPPT < 60) $puntosPasarPPT      = 60  - $calificacionPPT;
                    if ($calificacionPPT > 60) $puntosLlegarCienPPT = 100 - $calificacionPPT;

                    if ($calificacionWord < 60) $puntosPasarWord     = 60  - $calificacionWord;
                    if ($calificacionWord > 60) $puntosLlegarCienWord = 100 - $calificacionWord;

                    //si estan quedado en los modulo le damos los puntos dependendiendo que tan cerca esten para pasar 
                    if ($calificacionWord < 60 && $calificacionPPT < 60)
                    {
                        if ($puntosPasarPPT  <  $puntosPasarWord && $puntosPasarPPT  > 4) $PPT  = $calificacionPPT  + $puntosExtras;
                        if ($puntosPasarWord <  $puntosPasarPPT  && $puntosPasarWord > 4) $Word = $calificacionWord + $puntosExtras;
                        if ($puntosPasarWord == $puntosPasarPPT)                          $Word = $calificacionWord + $puntosExtras;

                        if (($puntosPasarPPT  < $puntosPasarWord) && ($puntosPasarPPT  < 5)) 
                        {
                            $PPT  = $calificacionPPT   + $puntosPasarPPT;
                            $word = $calificacionWord  + ($puntosExtras - $puntosPasarPPT);
                        }

                        if (($puntosPasarWord  < $calificacionPPT) && ($puntosPasarWord < 5)) 
                        {
                            $Word = $calificacionWord + $puntosPasarWord;
                            $PPT  = $calificacionPPT  + ($puntosExtras - $puntosPasarWord);
                        }
                    }

                    //si estan pasados en los modulo le damos los puntos dependendiendo que tan cerca esten para llegar a cien
                    if ($calificacionWord > 59 && $calificacionPPT > 59)
                    {
                        if (($puntosLlegarCienPPT  <  $puntosLlegarCienWord) && ($puntosLlegarCienPPT > 4)) $PPT  = $calificacionPPT  + $puntosExtras;
                        if (($puntosLlegarCienWord  <  $puntosLlegarCienPPT) && ($puntosLlegarCienWord > 4)) $Word = $calificacionWord + $puntosExtras;
                        if (($puntosLlegarCienPPT  == $puntosLlegarCienWord))                               $Word = $calificacionWord + $puntosExtras;

                        if (($puntosLlegarCienPPT  < $puntosLlegarCienWord) && ($puntosLlegarCienPPT  < 5)) 
                        {
                            $PPT  = $calificacionPPT   + $puntosLlegarCienPPT;
                            $Word = $calificacionWord  + ($puntosExtras - $puntosLlegarCienPPT);
                        }

                        if (($puntosLlegarCienWord  < $puntosLlegarCienPPT) && ($puntosLlegarCienWord < 5)) 
                        {
                            $Word = $calificacionWord + $puntosLlegarCienWord;
                            $PPT  = $calificacionPPT  + ($puntosExtras - $puntosLlegarCienWord);
                        }
                    }   


                    if ($calificacionWord > 60 && $calificacionPPT < 60 && $puntosPasarPPT > 10) $Word = $calificacionWord + 5;
                    if ($calificacionWord > 60 && $calificacionPPT < 60 && $puntosPasarPPT < 10) $PPT  = $calificacionPPT  + 5;

                    if ($calificacionPPT > 60 && $calificacionWord < 60 && $puntosPasarWord > 10) $PPT  = $calificacionPPT  + 5;
                    if ($calificacionPPT > 60 && $calificacionWord < 60 && $puntosPasarWord < 10) $Word = $calificacionWord + 5;                 

                }

                ///////////////////////////////////////////////////////////////////////////////////////////////////cohorte word - excel
                if ($cohorte == 'WORD - EXCEL')
                {
                    $Excel = $calificacionExcel;
                    $PPT   = 0;
                    $Word  = $calificacionWord;

                    $puntosPasarExcel      = 0;
                    $puntosPasarWord       = 0;
                    $puntosLlegarCienExcel = 0;
                    $puntosLlegarCienWord   = 0;

                    if ($calificacionExcel < 60) $puntosPasarExcel      = 60  - $calificacionExcel;
                    if ($calificacionExcel > 60) $puntosLlegarCienExcel = 100 - $calificacionExcel;

                    if ($calificacionWord < 60) $puntosPasarWord     = 60  - $calificacionWord;
                    if ($calificacionWord > 60) $puntosLlegarCienWord = 100 - $calificacionWord;

                    //si estan quedado en los modulo le damos los puntos dependendiendo que tan cerca esten para pasar 
                    if ($calificacionWord < 60 && $calificacionExcel < 60)
                    {
                        if ($puntosPasarExcel < $puntosPasarWord  && $puntosPasarExcel > 4) $Excel = $calificacionExcel + $puntosExtras;
                        if ($puntosPasarWord  < $puntosPasarExcel && $puntosPasarWord  > 4) $Word  = $calificacionWord  + $puntosExtras;
                        if ($puntosPasarWord == $puntosPasarExcel)                          $Word  = $calificacionWord  + $puntosExtras;

                        if (($puntosPasarExcel  < $puntosPasarWord) && ($puntosPasarExcel  < 5)) 
                        {
                            $Excel  = $calificacionExcel   + $puntosPasarExcel;
                            $word = $calificacionWord  + ($puntosExtras - $puntosPasarExcel);
                        }

                        if (($puntosPasarWord  < $calificacionExcel) && ($puntosPasarWord < 5)) 
                        {
                            $Word = $calificacionWord + $puntosPasarWord;
                            $Excel  = $calificacionExcel  + ($puntosExtras - $puntosPasarWord);
                        }
                    }

                    //si estan pasados en los modulo le damos los puntos dependendiendo que tan cerca esten para llegar a cien
                    if ($calificacionWord > 59 && $calificacionExcel > 59)
                    {
                        if (($puntosLlegarCienExcel  <  $puntosLlegarCienWord) && ($puntosLlegarCienExcel > 4)) $Excel  = $calificacionExcel  + $puntosExtras;
                        if (($puntosLlegarCienWord  <  $puntosLlegarCienExcel) && ($puntosLlegarCienWord > 4)) $Word = $calificacionWord + $puntosExtras;
                        if (($puntosLlegarCienExcel  == $puntosLlegarCienWord))                               $Word = $calificacionWord + $puntosExtras;

                        if (($puntosLlegarCienExcel  < $puntosLlegarCienWord) && ($puntosLlegarCienExcel  < 5)) 
                        {
                            $Excel  = $calificacionExcel   + $puntosLlegarCienExcel;
                            $Word = $calificacionWord  + ($puntosExtras - $puntosLlegarCienExcel);
                        }

                        if (($puntosLlegarCienWord  < $puntosLlegarCienExcel) && ($puntosLlegarCienWord < 5)) 
                        {
                            $Word = $calificacionWord + $puntosLlegarCienWord;
                            $Excel  = $calificacionExcel  + ($puntosExtras - $puntosLlegarCienWord);
                        }
                    }   

                    if ($calificacionWord > 60 && $calificacionExcel < 60 && $puntosPasarExcel > 10) $Word = $calificacionWord + 5;
                    if ($calificacionWord > 60 && $calificacionExcel < 60 && $puntosPasarExcel < 10) $Excel  = $calificacionExcel  + 5;

                    if ($calificacionExcel > 60 && $calificacionWord < 60 && $puntosPasarWord > 10) $Excel  = $calificacionExcel  + 5;
                    if ($calificacionExcel > 60 && $calificacionWord < 60 && $puntosPasarWord < 10) $Word = $calificacionWord + 5;                 

                }

                ///////////////////////////////////////////////////////////////////////////////////////////////////cohorte excel - ppt
                if ($cohorte == 'EXCEL - PPT')
                {
                    $Excel = $calificacionExcel;
                    $PPT   = $calificacionPPT;
                    $Word  = 0;

                    $puntosPasarExcel      = 0;
                    $puntosPasarPPT       = 0;
                    $puntosLlegarCienExcel = 0;
                    $puntosLlegarCienPPT   = 0;

                    if ($calificacionExcel < 60) $puntosPasarExcel      = 60  - $calificacionExcel;
                    if ($calificacionExcel > 60) $puntosLlegarCienExcel = 100 - $calificacionExcel;

                    if ($calificacionPPT < 60) $puntosPasarPPT     = 60  - $calificacionPPT;
                    if ($calificacionPPT > 60) $puntosLlegarCienPPT = 100 - $calificacionPPT;

                    //si estan quedado en los modulo le damos los puntos dependendiendo que tan cerca esten para pasar 
                    if ($calificacionPPT < 60 && $calificacionExcel < 60)
                    {
                        if ($puntosPasarExcel < $puntosPasarPPT   && $puntosPasarExcel > 4) $Excel = $calificacionExcel + $puntosExtras;
                        if ($puntosPasarPPT   < $puntosPasarExcel && $puntosPasarPPT   > 4) $PPT   = $calificacionPPT  + $puntosExtras;
                        if ($puntosPasarPPT == $puntosPasarExcel)                           $PPT   = $calificacionPPT  + $puntosExtras;

                        if (($puntosPasarExcel  < $puntosPasarPPT) && ($puntosPasarExcel  < 5)) 
                        {
                            $Excel  = $calificacionExcel   + $puntosPasarExcel;
                            $PPT = $calificacionPPT  + ($puntosExtras - $puntosPasarExcel);
                        }

                        if (($puntosPasarPPT  < $calificacionExcel) && ($puntosPasarPPT < 5)) 
                        {
                            $PPT = $calificacionPPT + $puntosPasarPPT;
                            $Excel  = $calificacionExcel  + ($puntosExtras - $puntosPasarPPT);
                        }
                    }

                    //si estan pasados en los modulo le damos los puntos dependendiendo que tan cerca esten para llegar a cien
                    if ($calificacionPPT > 59 && $calificacionExcel > 59)
                    {
                        if (($puntosLlegarCienExcel  <  $puntosLlegarCienPPT) && ($puntosLlegarCienExcel > 4)) $Excel  = $calificacionExcel  + $puntosExtras;
                        if (($puntosLlegarCienPPT  <  $puntosLlegarCienExcel) && ($puntosLlegarCienPPT > 4)) $PPT = $calificacionPPT + $puntosExtras;
                        if (($puntosLlegarCienExcel  == $puntosLlegarCienPPT))                               $PPT = $calificacionPPT + $puntosExtras;

                        if (($puntosLlegarCienExcel  < $puntosLlegarCienPPT) && ($puntosLlegarCienExcel  < 5)) 
                        {
                            $Excel  = $calificacionExcel   + $puntosLlegarCienExcel;
                            $PPT = $calificacionPPT  + ($puntosExtras - $puntosLlegarCienExcel);
                        }

                        if (($puntosLlegarCienPPT  < $puntosLlegarCienExcel) && ($puntosLlegarCienPPT < 5)) 
                        {
                            $PPT = $calificacionPPT + $puntosLlegarCienPPT;
                            $Excel  = $calificacionExcel  + ($puntosExtras - $puntosLlegarCienPPT);
                        }
                    }   

                    if ($calificacionPPT > 60 && $calificacionExcel < 60 && $puntosPasarExcel > 10) $PPT = $calificacionPPT + 5;
                    if ($calificacionPPT > 60 && $calificacionExcel < 60 && $puntosPasarExcel < 10) $Excel  = $calificacionExcel  + 5;

                    if ($calificacionExcel > 60 && $calificacionPPT < 60 && $puntosPasarPPT > 10) $Excel  = $calificacionExcel  + 5;
                    if ($calificacionExcel > 60 && $calificacionPPT < 60 && $puntosPasarPPT < 10) $PPT = $calificacionPPT + 5;                 

                }

                ///////////////////////////////////////////////////////////////////////////////////////////////////cohorte practico
                if ($cohorte == 'PRACTICO')
                {
                    $Excel = $calificacionExcel;
                    $PPT   = $calificacionPPT;
                    $Word  = $calificacionWord;

                    $puntosPasarExcel      = 0;
                    $puntosPasarPPT        = 0;
                    $puntosPasarWord       = 0;
                    $puntosLlegarCienExcel = 0;
                    $puntosLlegarCienPPT   = 0;
                    $puntosLlegarCienWord   = 0;
                    $sumaMas5              = 5;

                    if ($calificacionExcel < 60) $puntosPasarExcel      = 60  - $calificacionExcel;
                    if ($calificacionExcel > 60) $puntosLlegarCienExcel = 100 - $calificacionExcel;

                    if ($calificacionPPT < 60) $puntosPasarPPT     = 60  - $calificacionPPT;
                    if ($calificacionPPT > 60) $puntosLlegarCienPPT = 100 - $calificacionPPT;

                    if ($calificacionWord < 60) $puntosPasarWord     = 60  - $calificacionWord;
                    if ($calificacionWord > 60) $puntosLlegarCienWord = 100 - $calificacionWord;

                    if ($calificacionWord > 60 && $calificacionPPT < 60 && $puntosPasarPPT > 10 && $calificacionExcel < 60 && $puntosPasarExcel > 10) $Word = $calificacionWord + $sumaMas5;
                    if ($calificacionWord > 60 && $calificacionPPT < 60 && $puntosPasarPPT < 10 && $calificacionExcel > 59                          ) $PPT  = $calificacionPPT  + $sumaMas5;

                    if ($calificacionPPT > 60 && $calificacionWord < 60 && $puntosPasarWord > 10 && $calificacionExcel < 60 && $puntosPasarExcel > 10) $PPT  = $calificacionPPT  + $sumaMas5;
                    if ($calificacionPPT > 60 && $calificacionWord < 60 && $puntosPasarWord < 10 && $calificacionExcel > 59                          ) $Word = $calificacionWord + $sumaMas5;

                    if ($calificacionWord > 60 && $calificacionExcel < 60 && $puntosPasarExcel > 10 && $calificacionPPT < 60 && $puntosPasarPPT > 10) $Word  = $calificacionWord + $sumaMas5;
                    if ($calificacionWord > 60 && $calificacionExcel < 60 && $puntosPasarExcel < 10 && $calificacionPPT > 59                        ) $Excel = $calificacionExcel  + $sumaMas5;

                    if ($calificacionExcel > 60 && $calificacionWord < 60 && $puntosPasarWord > 10 && $calificacionPPT < 60 && $puntosPasarPPT > 10) $Excel  = $calificacionExcel  + $sumaMas5;
                    if ($calificacionExcel > 60 && $calificacionWord < 60 && $puntosPasarWord < 10 && $calificacionPPT > 59                        ) $Word   = $calificacionWord + $sumaMas5;   

                    if ($calificacionPPT > 60 && $calificacionExcel < 60 && $puntosPasarExcel > 10 && $calificacionWord < 60 && $puntosPasarWord > 10) $PPT   = $calificacionPPT + $sumaMas5;
                    if ($calificacionPPT > 60 && $calificacionExcel < 60 && $puntosPasarExcel < 10 && $calificacionWord > 59                         ) $Excel = $calificacionExcel  + $sumaMas5;

                    if ($calificacionExcel > 60 && $calificacionPPT < 60 && $puntosPasarPPT > 10 && $calificacionWord < 60 && $puntosPasarWord > 10) $Excel = $calificacionExcel  + $sumaMas5;
                    if ($calificacionExcel > 60 && $calificacionPPT < 60 && $puntosPasarPPT < 10 && $calificacionWord > 59                         ) $PPT   = $calificacionPPT + $sumaMas5; 

                    if (($calificacionWord > 60 && $calificacionPPT   < 60 && $puntosPasarPPT   > 10 && $calificacionExcel < 60 && $puntosPasarExcel > 10) ||
                        ($calificacionWord > 60 && $calificacionPPT   < 60 && $puntosPasarPPT   < 10 && $calificacionExcel > 59                          ) ||
                        ($calificacionPPT  > 60 && $calificacionWord  < 60 && $puntosPasarWord  > 10 && $calificacionExcel < 60 && $puntosPasarExcel > 10) ||
                        ($calificacionPPT  > 60 && $calificacionWord  < 60 && $puntosPasarWord  < 10 && $calificacionExcel > 59                          ) ||
                        ($calificacionWord > 60 && $calificacionExcel < 60 && $puntosPasarExcel > 10 && $calificacionPPT   < 60 && $puntosPasarPPT   > 10) ||
                        ($calificacionWord > 60 && $calificacionExcel < 60 && $puntosPasarExcel < 10 && $calificacionPPT   > 59                          ) ||
                        ($calificacionPPT  > 60 && $calificacionExcel < 60 && $puntosPasarExcel > 10 && $calificacionWord  < 60 && $puntosPasarWord  > 10) ||
                        ($calificacionPPT  > 60 && $calificacionExcel < 60 && $puntosPasarExcel < 10 && $calificacionWord  > 59                          ) ||
                        ($calificacionExcel > 60 && $calificacionWord < 60 && $puntosPasarWord  > 10 && $calificacionPPT   < 60 && $puntosPasarPPT   > 10) ||
                        ($calificacionExcel > 60 && $calificacionWord < 60 && $puntosPasarWord  < 10 && $calificacionPPT   > 59                          ) ||
                        ($calificacionExcel > 60 && $calificacionPPT  < 60 && $puntosPasarPPT   > 10 && $calificacionWord  < 60 && $puntosPasarWord  > 10) ||
                        ($calificacionExcel > 60 && $calificacionPPT  < 60 && $puntosPasarPPT   < 10 && $calificacionWord  > 59                          ))

                    {
                        $sumaMas5 = 0;
                    }
    
                    if ($sumaMas5 > 0)
                    {
                        ////////////////////////////////////////////////////////////si estan quedado en los modulo le damos los puntos dependendiendo que tan cerca esten para pasar 
                        if ($calificacionWord < 60 && $calificacionPPT < 60 && $calificacionExcel > 59)
                        {
                            if ($puntosPasarPPT  <  $puntosPasarWord && $puntosPasarPPT  > 4) $PPT  = $calificacionPPT  + $puntosExtras;
                            if ($puntosPasarWord <  $puntosPasarPPT  && $puntosPasarWord > 4) $Word = $calificacionWord + $puntosExtras;
                            if ($puntosPasarWord == $puntosPasarPPT)                          $Word = $calificacionWord + $puntosExtras;

                            if (($puntosPasarPPT  < $puntosPasarWord) && ($puntosPasarPPT  < 5)) 
                            {
                                $PPT  = $calificacionPPT   + $puntosPasarPPT;
                                $word = $calificacionWord  + ($puntosExtras - $puntosPasarPPT);
                            }

                            if (($puntosPasarWord  < $calificacionPPT) && ($puntosPasarWord < 5)) 
                            {
                                $Word = $calificacionWord + $puntosPasarWord;
                                $PPT  = $calificacionPPT  + ($puntosExtras - $puntosPasarWord);
                            }

                        }

                        if ($calificacionWord < 60 && $calificacionExcel < 60 && $calificacionPPT > 59)
                        {
                            if ($puntosPasarExcel < $puntosPasarWord  && $puntosPasarExcel > 4) $Excel = $calificacionExcel + $puntosExtras;
                            if ($puntosPasarWord  < $puntosPasarExcel && $puntosPasarWord  > 4) $Word  = $calificacionWord  + $puntosExtras;
                            if ($puntosPasarWord == $puntosPasarExcel)                          $Word  = $calificacionWord  + $puntosExtras;

                            if (($puntosPasarExcel  < $puntosPasarWord) && ($puntosPasarExcel  < 5)) 
                            {
                                $Excel  = $calificacionExcel   + $puntosPasarExcel;
                                $word = $calificacionWord  + ($puntosExtras - $puntosPasarExcel);
                            }

                            if (($puntosPasarWord  < $calificacionExcel) && ($puntosPasarWord < 5)) 
                            {
                                $Word = $calificacionWord + $puntosPasarWord;
                                $Excel  = $calificacionExcel  + ($puntosExtras - $puntosPasarWord);
                            }

                        }

                        if ($calificacionPPT < 60 && $calificacionExcel < 60 && $calificacionWord > 59)
                        {
                            if ($puntosPasarExcel < $puntosPasarPPT   && $puntosPasarExcel > 4) $Excel = $calificacionExcel + $puntosExtras;
                            if ($puntosPasarPPT   < $puntosPasarExcel && $puntosPasarPPT   > 4) $PPT   = $calificacionPPT  + $puntosExtras;
                            if ($puntosPasarPPT == $puntosPasarExcel)                           $PPT   = $calificacionPPT  + $puntosExtras;

                            if (($puntosPasarExcel  < $puntosPasarPPT) && ($puntosPasarExcel  < 5)) 
                            {
                                $Excel  = $calificacionExcel   + $puntosPasarExcel;
                                $PPT = $calificacionPPT  + ($puntosExtras - $puntosPasarExcel);
                            }

                            if (($puntosPasarPPT  < $calificacionExcel) && ($puntosPasarPPT < 5)) 
                            {
                                $PPT = $calificacionPPT + $puntosPasarPPT;
                                $Excel  = $calificacionExcel  + ($puntosExtras - $puntosPasarPPT);
                            }
                        }

                        if ($calificacionPPT < 60 && $calificacionExcel < 60 && $calificacionWord < 60)
                        {
                            if ($puntosPasarExcel < $puntosPasarPPT   && $puntosPasarExcel < $puntosPasarWord  && $puntosPasarExcel > 4) $Excel = $calificacionExcel + $puntosExtras;
                            if ($puntosPasarPPT   < $puntosPasarWord  && $puntosPasarPPT   < $puntosPasarExcel && $puntosPasarPPT   > 4) $PPT   = $calificacionPPT   + $puntosExtras;
                            if ($puntosPasarWord  < $puntosPasarExcel && $puntosPasarWord  < $puntosPasarPPT   && $puntosPasarWord  > 4) $Word  = $calificacionWord  + $puntosExtras;
                            if ($puntosPasarPPT  == $puntosPasarExcel && $puntosPasarPPT ==  $puntosPasarWord  && $puntosPasarPPT   > 4) $PPT   = $calificacionPPT   + $puntosExtras;

                            if ($puntosPasarExcel == $puntosPasarPPT   && $puntosPasarExcel < $puntosPasarWord   && $puntosPasarExcel > 4) $Excel = $calificacionExcel + $puntosExtras;
                            if ($puntosPasarPPT   == $puntosPasarWord  && $puntosPasarPPT   < $puntosPasarExcel  && $puntosPasarPPT   > 4) $PPT   = $calificacionPPT   + $puntosExtras;
                            if ($puntosPasarWord  == $puntosPasarExcel && $puntosPasarWord  < $puntosPasarPPT    && $puntosPasarWord  > 4) $Word  = $calificacionWord  + $puntosExtras;

                            if ($puntosPasarPPT  == $puntosPasarExcel && $puntosPasarPPT ==  $puntosPasarWord  && $puntosPasarPPT   < 5)
                            {
                                $Excel         = $calificacionExcel + $puntosPasarExcel;
                                $residuoPuntos = 5 - $puntosPasarExcel;
                                if ($puntosPasarPPT <= $residuoPuntos) $PPT           = $calificacionPPT  + $puntosPasarPPT;
                                if ($puntosPasarPPT <= $residuoPuntos) $residuoPuntos = $residuoPuntos    - $puntosPasarPPT;
                                if ($puntosPasarPPT  > $residuoPuntos) $PPT           = $calificacionPPT  + $residuoPuntos;
                                if ($puntosPasarPPT  > $residuoPuntos) $residuoPuntos = 0;
                                if ($residuoPuntos   > 0             ) $Word          = $calificacionWord + $residuoPuntos;
                                if ($residuoPuntos   > 0             ) $residuoPuntos = 0; 
                            }

                            if ($puntosPasarExcel < $puntosPasarPPT   && $puntosPasarExcel < $puntosPasarWord  && $puntosPasarExcel < 5)
                            {
                                $Excel         = $calificacionExcel + $puntosPasarExcel;
                                $residuoPuntos = 5 - $puntosPasarExcel;

                                if ($puntosPasarPPT <= $puntosPasarWord && $residuoPuntos > 0)
                                {
                                    if ($puntosPasarPPT <= $residuoPuntos) $PPT           = $calificacionPPT  + $puntosPasarPPT;
                                    if ($puntosPasarPPT <= $residuoPuntos) $residuoPuntos = $residuoPuntos    - $puntosPasarPPT;
                                    if ($puntosPasarPPT  > $residuoPuntos) $PPT           = $calificacionPPT  + $residuoPuntos;
                                    if ($puntosPasarPPT  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos   > 0             ) $Word          = $calificacionWord + $residuoPuntos;
                                    if ($residuoPuntos   > 0             ) $residuoPuntos = 0;
                                }

                                if ($puntosPasarWord <= $puntosPasarPPT && $residuoPuntos > 0)
                                {
                                    if ($puntosPasarWord <= $residuoPuntos) $Word          = $calificacionWord + $puntosPasarWord;
                                    if ($puntosPasarWord <= $residuoPuntos) $residuoPuntos = $residuoPuntos    - $puntosPasarWord;
                                    if ($puntosPasarWord  > $residuoPuntos) $Word          = $calificacionWord + $residuoPuntos;
                                    if ($puntosPasarWord  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos   > 0              ) $PPT           = $calificacionPPT  + $residuoPuntos;
                                    if ($residuoPuntos   > 0              ) $residuoPuntos = 0;
                                }
                            }

                            if ($puntosPasarPPT < $puntosPasarExcel   && $puntosPasarPPT < $puntosPasarWord  && $puntosPasarPPT < 5)
                            {
                                $PPT         = $calificacionPPT + $puntosPasarPPT;
                                $residuoPuntos = 5 - $puntosPasarPPT;

                                if ($puntosPasarExcel <= $puntosPasarWord && $residuoPuntos > 0)
                                {
                                    if ($puntosPasarExcel <= $residuoPuntos) $Excel         = $calificacionExcel + $puntosPasarExcel;
                                    if ($puntosPasarExcel <= $residuoPuntos) $residuoPuntos = $residuoPuntos     - $puntosPasarExcel;
                                    if ($puntosPasarExcel  > $residuoPuntos) $Excel         = $calificacionExcel + $residuoPuntos;
                                    if ($puntosPasarExcel  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos     > 0             ) $Word          = $calificacionWord + $residuoPuntos;
                                    if ($residuoPuntos     > 0             ) $residuoPuntos = 0;
                                }

                                if ($puntosPasarWord <= $puntosPasarExcel && $residuoPuntos > 0)
                                {
                                    if ($puntosPasarWord <= $residuoPuntos) $Word          = $calificacionWord  + $puntosPasarWord;
                                    if ($puntosPasarWord <= $residuoPuntos) $residuoPuntos = $residuoPuntos     - $puntosPasarWord;
                                    if ($puntosPasarWord  > $residuoPuntos) $Word          = $calificacionWord  + $residuoPuntos;
                                    if ($puntosPasarWord  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos   > 0              ) $Excel         = $calificacionExcel + $residuoPuntos;
                                    if ($residuoPuntos   > 0              ) $residuoPuntos = 0;
                                }
                            }

                            if ($puntosPasarWord < $puntosPasarExcel   && $puntosPasarWord < $puntosPasarPPT  && $puntosPasarWord < 5)
                            {
                                $Word         = $calificacionWord + $puntosPasarWord;
                                $residuoPuntos = 5 - $puntosPasarWord;

                                if ($puntosPasarExcel <= $puntosPasarPPT && $residuoPuntos > 0)
                                {
                                    if ($puntosPasarExcel <= $residuoPuntos) $Excel         = $calificacionExcel + $puntosPasarExcel;
                                    if ($puntosPasarExcel <= $residuoPuntos) $residuoPuntos = $residuoPuntos     - $puntosPasarExcel;
                                    if ($puntosPasarExcel  > $residuoPuntos) $Excel         = $calificacionExcel + $residuoPuntos;
                                    if ($puntosPasarExcel  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos     > 0             ) $PPT           = $calificacionPPT + $residuoPuntos;
                                    if ($residuoPuntos     > 0             ) $residuoPuntos = 0;
                                }

                                if ($puntosPasarPPT <= $puntosPasarExcel && $residuoPuntos > 0)
                                {
                                    if ($puntosPasarPPT <= $residuoPuntos) $PPT           = $calificacionPPT  + $puntosPasarPPT;
                                    if ($puntosPasarPPT <= $residuoPuntos) $residuoPuntos = $residuoPuntos    - $puntosPasarPPT;
                                    if ($puntosPasarPPT  > $residuoPuntos) $PPT           = $calificacionPPT  + $residuoPuntos;
                                    if ($puntosPasarPPT  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos   > 0             ) $Excel         = $calificacionExcel + $residuoPuntos;
                                    if ($residuoPuntos   > 0             ) $residuoPuntos = 0;
                                }
                            }

                        }

                        /////////////////////////////////////////////////////si estan pasados en los modulo le damos los puntos dependendiendo que tan cerca esten para llegar a cien
                        if ($calificacionWord > 59 && $calificacionPPT > 59 && $puntosPasarExcel > 10)
                        {
                            if (($puntosLlegarCienPPT  <  $puntosLlegarCienWord) && ($puntosLlegarCienPPT > 4)) $PPT  = $calificacionPPT  + $puntosExtras;
                            if (($puntosLlegarCienWord  <  $puntosLlegarCienPPT) && ($puntosLlegarCienWord > 4)) $Word = $calificacionWord + $puntosExtras;
                            if (($puntosLlegarCienPPT  == $puntosLlegarCienWord))                               $Word = $calificacionWord + $puntosExtras;

                            if (($puntosLlegarCienPPT  < $puntosLlegarCienWord) && ($puntosLlegarCienPPT  < 5)) 
                            {
                                $PPT  = $calificacionPPT   + $puntosLlegarCienPPT;
                                $Word = $calificacionWord  + ($puntosExtras - $puntosLlegarCienPPT);
                            }

                            if (($puntosLlegarCienWord  < $puntosLlegarCienPPT) && ($puntosLlegarCienWord < 5)) 
                            {
                                $Word = $calificacionWord + $puntosLlegarCienWord;
                                $PPT  = $calificacionPPT  + ($puntosExtras - $puntosLlegarCienWord);
                            }
                        } 

                        if ($calificacionWord > 59 && $calificacionExcel > 59 && $puntosPasarPPT > 10)
                        {
                            if (($puntosLlegarCienExcel  <  $puntosLlegarCienWord) && ($puntosLlegarCienExcel > 4)) $Excel  = $calificacionExcel  + $puntosExtras;
                            if (($puntosLlegarCienWord  <  $puntosLlegarCienExcel) && ($puntosLlegarCienWord > 4)) $Word = $calificacionWord + $puntosExtras;
                            if (($puntosLlegarCienExcel  == $puntosLlegarCienWord))                               $Word = $calificacionWord + $puntosExtras;

                            if (($puntosLlegarCienExcel  < $puntosLlegarCienWord) && ($puntosLlegarCienExcel  < 5)) 
                            {
                                $Excel  = $calificacionExcel   + $puntosLlegarCienExcel;
                                $Word = $calificacionWord  + ($puntosExtras - $puntosLlegarCienExcel);
                            }

                            if (($puntosLlegarCienWord  < $puntosLlegarCienExcel) && ($puntosLlegarCienWord < 5)) 
                            {
                                $Word = $calificacionWord + $puntosLlegarCienWord;
                                $Excel  = $calificacionExcel  + ($puntosExtras - $puntosLlegarCienWord);
                            }
                        }  

                        if ($calificacionPPT > 59 && $calificacionExcel > 59 && $puntosPasarWord > 10)
                        {
                            if (($puntosLlegarCienExcel  <  $puntosLlegarCienPPT) && ($puntosLlegarCienExcel > 4)) $Excel  = $calificacionExcel  + $puntosExtras;
                            if (($puntosLlegarCienPPT  <  $puntosLlegarCienExcel) && ($puntosLlegarCienPPT > 4)) $PPT = $calificacionPPT + $puntosExtras;
                            if (($puntosLlegarCienExcel  == $puntosLlegarCienPPT))                               $PPT = $calificacionPPT + $puntosExtras;

                            if (($puntosLlegarCienExcel  < $puntosLlegarCienPPT) && ($puntosLlegarCienExcel  < 5)) 
                            {
                                $Excel  = $calificacionExcel   + $puntosLlegarCienExcel;
                                $PPT = $calificacionPPT  + ($puntosExtras - $puntosLlegarCienExcel);
                            }

                            if (($puntosLlegarCienPPT  < $puntosLlegarCienExcel) && ($puntosLlegarCienPPT < 5)) 
                            {
                                $PPT = $calificacionPPT + $puntosLlegarCienPPT;
                                $Excel  = $calificacionExcel  + ($puntosExtras - $puntosLlegarCienPPT);
                            }
                        }

                        if ($calificacionPPT > 59 && $calificacionExcel > 59 && $calificacionWord > 59)
                        {
                            if ($puntosLlegarCienExcel <  $puntosLlegarCienPPT   && $puntosLlegarCienExcel < $puntosLlegarCienWord   && $puntosLlegarCienExcel > 4) $Excel = $calificacionExcel + $puntosExtras;
                            if ($puntosLlegarCienPPT   <  $puntosLlegarCienExcel && $puntosLlegarCienPPT   < $puntosLlegarCienWord   && $puntosLlegarCienPPT   > 4) $PPT   = $calificacionPPT   + $puntosExtras;
                            if ($puntosLlegarCienWord  <  $puntosLlegarCienPPT   && $puntosLlegarCienWord  < $puntosLlegarCienExcel  && $puntosLlegarCienWord  > 4) $Word  = $calificacionWord  + $puntosExtras;

                            if ($puntosLlegarCienExcel == $puntosLlegarCienPPT   && $puntosLlegarCienExcel < $puntosLlegarCienWord   && $puntosLlegarCienExcel > 4) $Excel = $calificacionExcel + $puntosExtras;
                            if ($puntosLlegarCienPPT   == $puntosLlegarCienWord  && $puntosLlegarCienPPT   < $puntosLlegarCienExcel  && $puntosLlegarCienPPT   > 4) $PPT   = $calificacionPPT   + $puntosExtras;
                            if ($puntosLlegarCienWord  == $puntosLlegarCienExcel && $puntosLlegarCienWord  < $puntosLlegarCienPPT    && $puntosLlegarCienWord  > 4) $Word  = $calificacionWord  + $puntosExtras;

                            if ($puntosLlegarCienPPT  ==  $puntosLlegarCienExcel && $puntosLlegarCienPPT  == $puntosLlegarCienWord   && $puntosLlegarCienPPT   > 4) $PPT   = $calificacionPPT   + $puntosExtras;

                            if ($puntosLlegarCienPPT  == $puntosLlegarCienExcel && $puntosLlegarCienPPT ==  $puntosLlegarCienWord  && $puntosLlegarCienPPT   < 5)
                            {
                                $Excel         = $calificacionExcel + $puntosLlegarCienExcel;
                                $residuoPuntos = 5 - $puntosLlegarCienExcel;
                                if ($puntosLlegarCienPPT <= $residuoPuntos) $PPT           = $calificacionPPT  + $puntosLlegarCienPPT;
                                if ($puntosLlegarCienPPT <= $residuoPuntos) $residuoPuntos = $residuoPuntos    - $puntosLlegarCienPPT;
                                if ($puntosLlegarCienPPT  > $residuoPuntos) $PPT           = $calificacionPPT  + $residuoPuntos;
                                if ($puntosLlegarCienPPT  > $residuoPuntos) $residuoPuntos = 0;
                                if ($residuoPuntos   > 0             ) $Word          = $calificacionWord + $residuoPuntos;
                                if ($residuoPuntos   > 0             ) $residuoPuntos = 0; 
                            }

                            if ($puntosLlegarCienExcel <= $puntosLlegarCienPPT   && $puntosLlegarCienExcel <= $puntosLlegarCienWord  && $puntosLlegarCienExcel < 5)
                            {
                                $Excel         = $calificacionExcel + $puntosLlegarCienExcel;
                                $residuoPuntos = 5 - $puntosLlegarCienExcel;

                                if ($puntosLlegarCienPPT <= $puntosLlegarCienWord && $residuoPuntos > 0)
                                {
                                    if ($puntosLlegarCienPPT <= $residuoPuntos) $PPT           = $calificacionPPT  + $puntosLlegarCienPPT;
                                    if ($puntosLlegarCienPPT <= $residuoPuntos) $residuoPuntos = $residuoPuntos    - $puntosLlegarCienPPT;
                                    if ($puntosLlegarCienPPT  > $residuoPuntos) $PPT           = $calificacionPPT  + $residuoPuntos;
                                    if ($puntosLlegarCienPPT  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos   > 0             ) $Word          = $calificacionWord + $residuoPuntos;
                                    if ($residuoPuntos   > 0             ) $residuoPuntos = 0;
                                }

                                if ($puntosLlegarCienWord <= $puntosLlegarCienPPT && $residuoPuntos > 0)
                                {
                                    if ($puntosLlegarCienWord <= $residuoPuntos) $Word          = $calificacionWord + $puntosLlegarCienWord;
                                    if ($puntosLlegarCienWord <= $residuoPuntos) $residuoPuntos = $residuoPuntos    - $puntosLlegarCienWord;
                                    if ($puntosLlegarCienWord  > $residuoPuntos) $Word          = $calificacionWord + $residuoPuntos;
                                    if ($puntosLlegarCienWord  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos   > 0              ) $PPT           = $calificacionPPT  + $residuoPuntos;
                                    if ($residuoPuntos   > 0              ) $residuoPuntos = 0;
                                }
                            }

                            if ($puntosLlegarCienPPT <= $puntosLlegarCienExcel   && $puntosLlegarCienPPT <= $puntosLlegarCienWord  && $puntosLlegarCienPPT < 5)
                            {
                                $PPT         = $calificacionPPT + $puntosLlegarCienPPT;
                                $residuoPuntos = 5 - $puntosLlegarCienPPT;

                                if ($puntosLlegarCienExcel <= $puntosLlegarCienWord && $residuoPuntos > 0)
                                {
                                    if ($puntosLlegarCienExcel <= $residuoPuntos) $Excel         = $calificacionExcel + $puntosLlegarCienExcel;
                                    if ($puntosLlegarCienExcel <= $residuoPuntos) $residuoPuntos = $residuoPuntos     - $puntosLlegarCienExcel;
                                    if ($puntosLlegarCienExcel  > $residuoPuntos) $Excel         = $calificacionExcel + $residuoPuntos;
                                    if ($puntosLlegarCienExcel  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos     > 0             ) $Word          = $calificacionWord + $residuoPuntos;
                                    if ($residuoPuntos     > 0             ) $residuoPuntos = 0;
                                }

                                if ($puntosLlegarCienWord <= $puntosLlegarCienExcel && $residuoPuntos > 0)
                                {
                                    if ($puntosLlegarCienWord <= $residuoPuntos) $Word          = $calificacionWord  + $puntosLlegarCienWord;
                                    if ($puntosLlegarCienWord <= $residuoPuntos) $residuoPuntos = $residuoPuntos     - $puntosLlegarCienWord;
                                    if ($puntosLlegarCienWord  > $residuoPuntos) $Word          = $calificacionWord  + $residuoPuntos;
                                    if ($puntosLlegarCienWord  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos   > 0              ) $Excel         = $calificacionExcel + $residuoPuntos;
                                    if ($residuoPuntos   > 0              ) $residuoPuntos = 0;
                                }
                            }

                            if ($puntosLlegarCienWord <= $puntosLlegarCienExcel   && $puntosLlegarCienWord <= $puntosLlegarCienPPT  && $puntosLlegarCienWord < 5)
                            {
                                $Word         = $calificacionWord + $puntosLlegarCienWord;
                                $residuoPuntos = 5 - $puntosLlegarCienWord;

                                if ($puntosLlegarCienExcel <= $puntosLlegarCienPPT && $residuoPuntos > 0)
                                {
                                    if ($puntosLlegarCienExcel <= $residuoPuntos) $Excel         = $calificacionExcel + $puntosLlegarCienExcel;
                                    if ($puntosLlegarCienExcel <= $residuoPuntos) $residuoPuntos = $residuoPuntos     - $puntosLlegarCienExcel;
                                    if ($puntosLlegarCienExcel  > $residuoPuntos) $Excel         = $calificacionExcel + $residuoPuntos;
                                    if ($puntosLlegarCienExcel  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos     > 0             ) $PPT           = $calificacionPPT + $residuoPuntos;
                                    if ($residuoPuntos     > 0             ) $residuoPuntos = 0;
                                }

                                if ($puntosLlegarCienPPT <= $puntosLlegarCienExcel && $residuoPuntos > 0)
                                {
                                    if ($puntosLlegarCienPPT <= $residuoPuntos) $PPT           = $calificacionPPT  + $puntosLlegarCienPPT;
                                    if ($puntosLlegarCienPPT <= $residuoPuntos) $residuoPuntos = $residuoPuntos    - $puntosLlegarCienPPT;
                                    if ($puntosLlegarCienPPT  > $residuoPuntos) $PPT           = $calificacionPPT  + $residuoPuntos;
                                    if ($puntosLlegarCienPPT  > $residuoPuntos) $residuoPuntos = 0;
                                    if ($residuoPuntos   > 0             ) $Excel         = $calificacionExcel + $residuoPuntos;
                                    if ($residuoPuntos   > 0             ) $residuoPuntos = 0;
                                }
                            }

                        }

                    }

                    $exceso = 0;
                    if ($Excel > 100) $exceso = $Excel - 100;
                    if ($Excel > 100) $Excel = 100;
                    if ($exceso > 0 && $Word > $PPT)  
                    {
                        $Word = $Word + $exceso;
                    } else {
                        $PPT  = $PPT  + $exceso; 
                    }

                    $exceso = 0;
                    if ($PPT   > 100) $exceso = $PPT - 100;
                    if ($PPT   > 100) $PPT   = 100;
                    if ($exceso > 0 && $Word > $Excel) 
                    {
                        $Word  = $Word  + $exceso;
                    } else {
                        $Excel = $Excel + $exceso; 
                    }

                    $exceso = 0;
                    if ($Word  > 100) $exceso  = $Word - 100;
                    if ($Word  > 100) $Word  = 100;
                    if ($exceso > 0 && $PPT > $Excel) 
                    {
                        $PPT  = $PPT  + $exceso;
                    } else {
                        $Excel = $Excel + $exceso; 
                    }

                }

            }

            if ($eliminaData) {
                eliminarDatosPuntosExtrasPracticos($termino,$anio);
                $eliminaData = false;
            }

            if ($procesar > 0)
            {
                guardar_datos_puntos_extras_practico($matricula,$identificacion,$nombres,$apellidos,$email,$calificacionExcel,$calificacionPPT,$calificacionWord,$demografica,$diagnostico,$satisfaccion,$puntosExtras,$Excel,$PPT,$Word,$termino,$anio,$sistema,$tipoEstudiante,$cohorte,$franja,$paralelo);  
            }


        }   

        

    } else {
        die("Error: No hay datos en la tabla seleccionada");
    }
} catch (RuntimeException $e) {
    echo $e->getMessage();	
}	