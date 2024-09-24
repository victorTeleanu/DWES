<?php
    $id = $_GET['id'] ?? null;
    $productos = ['1' => 'Producto 1', '2' => 'Producto 2', '3' => 'Producto 3'];
    if ($id == null) {
        echo 'Introduce el ID de un producto';
    } elseif (!array_key_exists($id, $productos)) {
        http_response_code(404);
    } else {
        echo $productos[$id];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404-NotFound</title>
</head>
<body>
</body>