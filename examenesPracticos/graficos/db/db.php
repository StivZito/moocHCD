<?php 
include "DAO.php";
function Conectarse() 
{    
if (!($link=mysqli_connect("localhost","root","","notasmooc"))) 	 
//if (!($link=mysqli_connect("localhost:3309","root","","notasmooc"))) 	 
//if (!($link=mysqli_connect("localhost:3306","covidsaf_luis","graficosgraficos","covidsaf_notasmooc"))) 	
   {  
	  echo "Error MySQL: ".mysqli_error(); 
	  echo "Error conectando a la base de datos."; 
	  exit(); 
   }
   $link->query("SET NAMES 'utf8'");
   return $link; 
}   

function query1($termino){
    $con = Conectarse();
    if( $termino != '0' )
        $condicion = "and c.termino like '%$termino%'";
    else 
        $condicion = '';
    $sql = "select c.apellidos,c.nombres,c.sexo,c.tipo,c.tipoEstudiante,c.termino,
                round((ifnull(d.examen,0)) * 100,0) as Teorico,
                ifnull(e.notaExcel,0) as Excel,
                ifnull(e.notaPpt,0) as Ppt,
                ifnull(e.notaWord,0) as Word,upper(c.carrera) as carrera

            from notasmooc.estudiantesMooc c 

            inner join notasmooc.edxData d
            on  d.termino = c.termino
            and d.email   = c.email
            and (ifnull(d.examen,0) * 100) >= 60

            left join notasmooc.sidwebData e 
            on  e.termino = c.termino
            and e.idalumno = c.matricula

            where (ifnull(e.notaExcel,0) +  ifnull(e.notaPpt,0) + ifnull(e.notaWord,0)) = 0 
            $condicion
            order by c.apellidos,c.nombres;";
    $resultado_consulta = $con->query($sql);
    return $resultado_consulta;
}

function query2($termino){
    $con = Conectarse();
    if( $termino != '0' )
        $condicion = "and c.termino like '%$termino%'";
    else 
        $condicion = '';
    $sql = "select d.tipoEstudiante,d.apellidos,d.nombres,d.sexo,c.termino,
                round((c.grado * 100),0) - round((c.examen * 100),0) as grade,
                round(((round((c.avm1 * 100),0)) / 5) * 100,0)  as avm1,
                round(((round((c.avm2 * 100),0)) / 5) * 100,0)  as avm2,
                round(((round((c.avm3 * 100),0)) / 30) * 100,0)  as avm3,
                round(((round((c.avm4 * 100),0)) / 25) * 100,0)  as avm4,
                round(((round((c.avm5 * 100),0)) / 30) * 100,0)  as avm5,
                round(((round((c.avm6 * 100),0)) /  5) * 100,0)  as avm6,
                case when round((c.grado * 100),0) - round((c.examen * 100),0) >= 60 then 'APROBADO' else 'REPROBADO' end as estado,
                upper(d.carrera) as carrera
            
            from notasmooc.edxData c 
            
            inner join notasmooc.estudiantesMooc d 
            on  d.email = c.email
            and d.termino = c.termino
            
            where  c.tipo = 'TP'
            $condicion
            order  by d.apellidos,d.nombres;";
    $resultado_consulta = $con->query($sql);
    return $resultado_consulta;
}

function query3($termino){
    $con = Conectarse();
    if( $termino != '0' )
        $condicion = "and c.termino like '%$termino%'";
    else 
        $condicion = '';
    $sql = "select c.termino,c.tipoEstudiante,c.apellidos,c.sexo,c.tipo,c.nombres,c.numVeces,
            case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end  as NotaWord,
            case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoWord, 
            case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end  as notaExcel,
            case when (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoExcel,
            case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end  as notaPpt,
            case when (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoPpt,
            case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  and 
                    (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  and
                    (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoGeneral,
            upper(c.carrera) as  carrera 
        from   notasmooc.estudiantesMooc c 

        left join notasmooc.sidwebData d 
        on   d.idalumno  = c.matricula
        and  d.termino   = c.termino
        $condicion
        order  by c.apellidos,c.nombres;";
    $resultado_consulta = $con->query($sql);
    return $resultado_consulta;
}

function query4($termino){
    $con = Conectarse();
    if( $termino != '0' )
        $condicion = "and c.termino like '%$termino%'";
    else 
        $condicion = '';
    $sql = "select c.apellidos,c.nombres,c.numVeces,
                round(case when (d.examen * 100) > ifnull(c.notaTeorico,0) then (d.examen * 100) else  ifnull(c.notaTeorico,0) end,0) as Teorico,
                case when (round(case when (d.examen * 100) > ifnull(c.notaTeorico,0) then (d.examen * 100) else  ifnull(c.notaTeorico,0) end,0))  >= 60 then 'APROBADO' else 'REPROBADO' end as Estudiantes,
                c.termino,c.tipoEstudiante,c.sexo,c.tipo,upper(c.carrera) as carrera

            from notasmooc.estudiantesMooc c 

            left join notasmooc.edxData d 
            on   d.email    = c.email
            and  d.termino  = c.termino
            and  d.tipo     = 'TP'
            and  d.cohorte like '%Examen%'
            $condicion
            order by c.apellidos, c.nombres;";
    $resultado_consulta = $con->query($sql);
    return $resultado_consulta;
}

function query5($termino){
    $con = Conectarse();
    if( $termino != '0' )
        $condicion = "and c.termino like '%$termino%'";
    else 
        $condicion = '';
    $sql = "select c.tipoEstudiante,c.tipo,c.apellidos,c.nombres,c.sexo,c.termino,ifnull(d.grado,0)  as grade,upper(c.carrera) as carrera

            from notasmooc.estudiantesMooc c 
            
            left join notasmooc.edxData d 
            on  d.email    = c.email
            and d.termino  = c.termino
            
            where ifnull(d.grado,0) = 0 
            $condicion
            order by c.apellidos,c.nombres;";
    $resultado_consulta = $con->query($sql);
    return $resultado_consulta;
}

function query6($termino){
    $con = Conectarse();
    if( $termino != '0' )
        $condicion = "and c.termino like '%$termino%'";
    else 
        $condicion = '';
    $sql = "select upper(c.carrera) as carrera,count(c.identificacion) as estudiantes,c.tipo_colegio,c.termino,c.sexo

            from notasmooc.estudiantesMooc c 
            
            inner join notasmooc.edxData d 
            on  d.email            = c.email
            and d.termino          = c.termino 
            and ifnull(d.examen,0) >= 0.6
            
            inner join notasmooc.sidwebData e 
            on  e.idalumno        = c.matricula
            and e.termino         = c.termino
            
            where c.numVeces   = 0
            and   ifnull(e.notaExcel,0) >= 60 
            and   ifnull(e.notaWord,0)  >= 60 
            and   ifnull(e.notaPpt,0)   >= 60 
            $condicion
            group by upper(c.carrera),c.tipo_colegio,c.termino,c.sexo;";
    $resultado_consulta = $con->query($sql);
    return $resultado_consulta;
}


function query7($termino){
    $con = Conectarse();
    if( $termino != '0' )
        $condicion = "and c.termino like '%$termino%'";
    else 
        $condicion = '';
    $sql = "select d.tipoEstudiante,d.apellidos,d.nombres,d.sexo,c.termino,
	   
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) > 100 then 100 else (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) end   as Ppt,
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoPpt,
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) >= 60 then 1          else 0           end as IntestadoPpt,

	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) > 100 then 100 else (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) end   as Excel,
	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoExcel,
	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) >= 60 then 1          else  0          end as IntestadoExcel,

	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) > 100 then 100 else (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) end   as Word,
	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoWord,
	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) >= 60 then 1          else 0           end as IntestadoWord,
	   c.cohorte,upper(d.carrera) as carrera

from notasmooc.edxData c 

inner join notasmooc.estudiantesMooc d 
on  d.email = c.email
and d.termino = c.termino

where  c.tipo = 'P'
and    c.cohorte = 'Practico'
$condicion
union
select d.tipoEstudiante,d.apellidos,d.nombres,d.sexo,c.termino,
	   
	   null as Ppt,
	   null as estadoPpt,
	   null as IntestadoPpt,

	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) > 100 then 100 else (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) end   as Excel,
	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoExcel,
	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) >= 60 then 1          else  0          end as IntestadoExcel,

	   null   as Word,
	   null   as estadoWord,
	   null   as IntestadoWord,
	   c.cohorte,upper(d.carrera) as carrera

from notasmooc.edxData c 

inner join notasmooc.estudiantesMooc d
on  d.email = c.email
and d.termino = c.termino

where  c.tipo    = 'P'
and    c.cohorte = 'Excel'
$condicion
union
select d.tipoEstudiante,d.apellidos,d.nombres,d.sexo,c.termino,
	   
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) > 100 then 100 else (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) end   as Ppt,
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoPpt,
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) >= 60 then 1          else 0           end as IntestadoPpt,

	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) > 100 then 100 else (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) end   as Excel,
	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoExcel,
	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) >= 60 then 1          else  0          end as IntestadoExcel,

	   null   as Word,
	   null   as estadoWord,
	   null   as IntestadoWord,
	   c.cohorte,upper(d.carrera) as carrera

from notasmooc.edxData c 

inner join notasmooc.estudiantesMooc d 
on  d.email = c.email
and d.termino = c.termino

where  c.tipo    = 'P'
and    c.cohorte = 'Excel-PPT'
$condicion
union
select d.tipoEstudiante,d.apellidos,d.nombres,d.sexo,c.termino,
	   
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) > 100 then 100 else (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) end   as Ppt,
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoPpt,
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) >= 60 then 1          else 0           end as IntestadoPpt,

	   null as Excel,
	   null as estadoExcel,
	   null as IntestadoExcel,

	   null as Word,
	   null as estadoWord,
	   null as IntestadoWord,
	   c.cohorte,upper(d.carrera) as carrera

from notasmooc.edxData c 

inner join notasmooc.estudiantesMooc d 
on  d.email = c.email
and d.termino = c.termino

where  c.tipo = 'P'
and    c.cohorte = 'PPT'
$condicion
union
select d.tipoEstudiante,d.apellidos,d.nombres,d.sexo,c.termino,
	   
	   null as Ppt,
	   null as estadoPpt,
	   null as IntestadoPpt,

	   null as Excel,
	   null as estadoExcel,
	   null as IntestadoExcel,

	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) > 100 then 100 else (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) end   as Word,
	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoWord,
	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) >= 60 then 1          else 0           end as IntestadoWord,
	   c.cohorte,upper(d.carrera) as carrera

from notasmooc.edxData c 

inner join notasmooc.estudiantesMooc d 
on  d.email = c.email
and d.termino = c.termino

where  c.tipo = 'P'
and    c.cohorte = 'Word'
$condicion
union
select d.tipoEstudiante,d.apellidos,d.nombres,d.sexo,c.termino,
	   
	   null as Ppt,
	   null as estadoPpt,
	   null as IntestadoPpt,

	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) > 100 then 100 else (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) end   as Excel,
	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoExcel,
	   case when (round(((round((c.avm4 * 100),0)) / 25) * 100,0)) >= 60 then 1          else  0          end as IntestadoExcel,

	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) > 100 then 100 else (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) end   as Word,
	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoWord,
	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) >= 60 then 1          else 0           end as IntestadoWord,
	   c.cohorte,upper(d.carrera) as carrera

from notasmooc.edxData c 

inner join notasmooc.estudiantesMooc d 
on  d.email = c.email
and d.termino = c.termino

where  c.tipo = 'P'
and    c.cohorte = 'Word-Excel'
$condicion
union
select d.tipoEstudiante,d.apellidos,d.nombres,d.sexo,c.termino,
	   
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) > 100 then 100 else (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) end   as Ppt,
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoPpt,
	   case when (round(((round((c.avm3 * 100),0)) / 30) * 100,0)) >= 60 then 1          else 0           end as IntestadoPpt,

	   null   as Excel,
	   null as estadoExcel,
	   null as IntestadoExcel,

	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) > 100 then 100 else (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) end   as Word,
	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) >= 60 then 'APROBADO' else 'REPROBADO' end as estadoWord,
	   case when (round(((round((c.avm5 * 100),0)) / 30) * 100,0)) >= 60 then 1          else 0           end as IntestadoWord,
	   c.cohorte,upper(d.carrera) as carrera

from notasmooc.edxData c 

inner join notasmooc.estudiantesMooc d 
on  d.email = c.email
and d.termino = c.termino

where  c.tipo = 'P'
and    c.cohorte = 'Word-PPT' 
$condicion;";
    $resultado_consulta = $con->query($sql);
    return $resultado_consulta;
}


function query8($termino){
    $con = Conectarse();
    if( $termino != '0' )
        $condicion = "and c.termino like '%$termino%'";
    else 
        $condicion = '';
    $sql = "select c.termino,c.tipoEstudiante,c.sexo, upper(c.carrera) as carrera,count(c.identificacion) as estudiantes

from notasmooc.estudiantesmooc c 

inner join notasmooc.edxData d 
on  d.email            = c.email
and d.termino          = c.termino 
and ifnull(d.examen,0) >= 0.6

inner join notasmooc.sidwebData e 
on  e.idalumno        = c.matricula
and e.termino         = c.termino

where c.numVeces   = 0
and   ifnull(e.notaExcel,0) >= 60 
and   ifnull(e.notaWord,0)  >= 60 
and   ifnull(e.notaPpt,0)   >= 60 
$condicion
group by c.termino,c.tipoEstudiante,c.sexo,upper(c.carrera);";
    $resultado_consulta = $con->query($sql);
    return $resultado_consulta;
}


function execute($sql)
{
	$con=Conectarse(); 
	$resultado_consulta = $con->query($sql);
    return $resultado_consulta;
}


?>