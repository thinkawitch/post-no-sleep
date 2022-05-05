<?php

$minutes = isset($_POST['minutes']) ? intval($_POST['minutes']) : 10;

sleep(60 * $minutes);

echo <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3>Data processed!</h3>
</body>    
</html>
EOD;
