<?php

$aAlumnos[]=array (
"calificacion"=>"3",
);

echo $aAlumnos[0]["calificacion"]>=7?"El alumno aprobó":($aAlumnos[0]["calificacion"]<=6 && $aAlumnos[0]["calificacion"]>=4?"El alumno desaprobó":"El alumno recursa");


?>