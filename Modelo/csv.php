<?php require('../Controlador/bd.php');
function agregar($path)
{
    $archivoCSV = "../archivos/" .  $path;
    echo $archivoCSV;
    echo "M";
    $csv = leerCSV($archivoCSV);
    $array[] = "";
    $id = 0;
    for ($f = 0; $f < count($csv); $f++) {
        for ($c = 0; $c < count($csv[$f]); $c++) {
            //array_push($array, $csv[$f][$c]);

            echo $csv[$f][$c];
        }
        if($csv[$f][3] < 4 && $csv[$f][3] >0){
        INSERT($id, $csv[$f][1], $csv[$f][2], $csv[$f][3], $csv[$f][0]);
        $id++;
        }
        echo "<br>";
    }
}

    function leerCSV($archivoCSV)
    {
        $file_handle = fopen($archivoCSV, 'r');
        while (!feof($file_handle)) {
            $linea_de_texto[] = fgetcsv($file_handle, 1024);
        }
        fclose($file_handle);
        return $linea_de_texto;
    }


//echo $csv[2][1];
//print_r($array);

