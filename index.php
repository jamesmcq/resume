<?php
require_once(__DIR__.'/vendor/autoload.php');
$markdown = file_get_contents(__DIR__.'/resume.md');
$resume = \Michelf\MarkdownExtra::defaultTransform($markdown);
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="style2.css" />
    </head>
    <body>
        <?=$resume?>
    </body>
</html>
