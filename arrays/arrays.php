<?php
    //Crea un array llamado nombres que contenga varios nombres.
    $nombres = array ('Alex', 'Victor', 'Mara', 'Roberto');

    //Muestra el número de elementos que tiene el array (función count)
    echo 'Número de elementos del array: ' . count($nombres) . '<br>';
    //Crea una cadena que contenga los nombres de los alumnos existentes en el array separados por un espacio y muéstrala
    echo implode(' ', $nombres) . '<br>';
    //Muestra el array ordenado alfabéticamente
    $nombresordenados = $nombres;
    asort($nombresordenados);
    foreach ($nombresordenados as $val) {
        echo $val . ' ';
    };
    echo '<br>';
    
    //Muestra el array en el orden inverso al que se creó
    /* Prueba errónea: 
    $arrayinvertido = $nombres;
    array_reverse($arrayinvertido);
    foreach ($arrayinvertido as $val) {
        echo $val . ' ';
    };*/
    //Prueba correcta:
    $arrayinvertido = array_reverse($nombres);
    foreach ($arrayinvertido as $val) {
        echo $val . ' ';
    };
    echo '<br>';

    //Muestra la posición que tiene tu nombre en el array
    echo array_search('Victor', $nombres) . '<br>';

    //Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.
    $alumnos = array(
        array(
            'id' => 0,
            'nombre' => 'Victor',
            'edad' => 19
        ),
        array(
            'id' => 1,
            'nombre' => 'Mara',
            'edad' => 19
        ),
        array(
            'id' => 2,
            'nombre' => 'Roberto',
            'edad' => 18
        )
    );
    echo '<br>';

    //Crea una tabla html en la que se muestren todos los datos de los alumnos.
    echo 'Estos son los datos de los alumnos: ';
    echo '<table border=1><thead><th>ID</th><th>NOMBRE</th><th>EDAD</th></thead>';
    foreach ($alumnos as $val) {
        echo    '<tr>
                    <td>' . $val['id'] . '</td>
                    <td>' . $val['nombre'] . '</td>
                    <td>' . $val['edad'] . '</td>
                </tr>';
    };
    echo '</table><br>';
    
    //Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla.
    print_r(array_column($alumnos, 'nombre'));
    echo '<br>';

    //Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números.
    $numeros = array(1,54,63,8,2,78,23,56,12,97);
    echo 'La suma del array da: ' . array_sum($numeros);
?>