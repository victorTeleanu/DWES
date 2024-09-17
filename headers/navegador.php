<?php
$user_agent = $_SERVER["HTTP_USER_AGENT"];
if (strpos($user_agent, 'Firefox') != false) {
    $content = "<p>Bienvenido a la página. Solo visible en Firefox</p>";
} else {
    $content = "<p>Página solo visible en Firefox</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header-Idioma</title>
</head>
<body>
<?php echo $content;?>
</body>