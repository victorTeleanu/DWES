<?php
$lang = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$lang = substr($lang, 0, 2);
if ($lang == "en") {
    $content = "<div>The language of this web page is in English</div>";
} elseif ($lang == "es") {
    $content = "<div>El idioma de esta página está en Español</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>
<p>Idioma:<?php echo $lang;?></p>
<?php echo $content;?>
</body>