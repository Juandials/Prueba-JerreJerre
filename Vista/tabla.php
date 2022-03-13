<?php require("../Controlador/bd.php");
$datos = (SELECT("*"));
$one = [];
$two[][] = "";
$three[][] = "";
for($f = 0; $f < count($datos); $f++) {
    for($c = 0;$c < count($datos[$f]); $c++){
        if($datos[$f][4] == 1){
            array_push($one,$datos[$f][$c]);
        }
        if($datos[$f][4] == 2){
           array_push($two,$datos[$f]);
        }
        if($datos[$f][4] == 3){
            array_push($three,$datos[$f]);
        }
    }
}
echo'<h2>GEMA SAS</h2>';
echo '<form action="../Vista/form.html"><input type="submit" value="Back" /></form>';
echo'<h4>Usuarios activos</h4>';
$o = '<table border="1"><th>Email</th><th>Nombre</th><th>Apellido</th><tr>';
for($f = 0; $f < count($datos); $f++) {
    for($c = 1;$c < count($datos[$f])-1; $c++){
        if($datos[$f][4] == 1){
            $o .= '<td>' . $datos[$f][$c] . '</td>';
        }

    }
    $o .= '</tr>';
    }
$o .= '</table>';
echo $o;
echo'<h4>Usuarios inactivos</h4>';
$o = '<table border="1"><th>Email</th><th>Nombre</th><th>Apellido</th><tr>';
for($f = 0; $f < count($datos); $f++) {
    for($c = 1;$c < count($datos[$f])-1; $c++){
        if($datos[$f][4] == 2){
            $o .= '<td>' . $datos[$f][$c] . '</td>';
        }

    }
    $o .= '</tr>';
}
$o .= '</table>';
echo $o;
echo'<h4>Usuarios en espera</h4>';
$o = '<table border="1"><th>Email</th><th>Nombre</th><th>Apellido</th><tr>';
for($f = 0; $f < count($datos); $f++) {
    for($c = 1;$c < count($datos[$f])-1; $c++){
        if($datos[$f][4] == 3){
            $o .= '<td>' . $datos[$f][$c] . '</td>';
        }

    }
    $o .= '</tr>';
}
$o .= '</table>';
echo $o;
