<?php
    header ("Content-type: application/csv");
    header ("Content-Disposition: attachment; filename=productos.csv");
    $output = fopen("php://output", "w");
    $productos = ['1' => 'producto 1', '2' => 'producto 2', '3' => 'producto 3'];
    fputcsv($output, ['ID', 'Name of the prduct']);
    foreach ($productos as $key => $value) {
        fputcsv($output, [$key, $value]);
    }
    fclose($output);
?>