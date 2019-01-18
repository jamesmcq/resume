<?php
require_once(__DIR__.'/vendor/autoload.php');
$markdown = file_get_contents(__DIR__.'/README.md');
$resume = \Michelf\MarkdownExtra::defaultTransform($markdown);
?>
<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body>
        <?=$resume?>
    </body>
</html>
